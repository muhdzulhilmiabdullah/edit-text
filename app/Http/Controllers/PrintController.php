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
    	
    	return view ('ter.tr', compact('prints'));

    }

    public function getByIcMonth(){

    
    $prints = TaxReceipt::get();
    $printGroupByICs = $prints->groupBy('ic');

    return view('ter.printable', compact('printGroupByICs','prints'));

    }

    // public function edit($id){

    // 	$prints = Print::find($id);

    // 	return view('ter')
    // }
}
