<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TaxReceipt;


class PrintController extends Controller
{
    public function index(){

    	$prints = TaxReceipt::all();

    	return view ('ter.printable', compact('prints'));
    }
 
    public function viewT($id){
    	$detail = TaxReceipt::get();
    	$prints = TaxReceipt::find($detail->groupBy('ic'));

    	
    	$printGroupByICs = $detail->groupBy('ic');
 
    	return view ('ter.show', compact('prints','printGroupByICs','detail'));

    }

    public function getByIcMonth(){   	
    
    	$prints = TaxReceipt::get();
    	$printGroupByICs = $prints->groupBy('ic');

    return view('ter.printable', compact('printGroupByICs','prints'));

    }

    public function updateAuto(){
    	
    	$projects = TaxReceipt::where('ic', $ic);
  		$status = '';
  		$approved = 1;
  		if($projects->status == 0) {
    	$projects->status = $approved;
    	$projects->added_by = Auth::user()->id;
  }
    	$projects->save();
    	return redirect('printic')->with(['notification' => 'Receipts Approved']);


    }


    // public function edit($id){

    // 	$prints = Print::find($id);

    // 	return view('ter')
    // }
}
