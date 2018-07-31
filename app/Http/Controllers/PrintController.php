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

    	$prints = TaxReceipt::find($id);

    	$detail = TaxReceipt::get();
    	$printGroupByICs = $detail->groupBy('ic');
    	
    	return view ('ter.show', compact('prints','printGroupByICs'));

    }

    public function getByIcMonth(){
    	
    
    $prints = TaxReceipt::get();
    $printGroupByICs = $prints->groupBy('ic');

    return view('ter.printable', compact('printGroupByICs'));

    }

    // public function edit($id){

    // 	$prints = Print::find($id);

    // 	return view('ter')
    // }
}
