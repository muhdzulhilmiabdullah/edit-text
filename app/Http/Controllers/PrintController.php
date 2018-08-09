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
 
    public function viewT($id, $ic, $amount){

    	
    	$prints = TaxReceipt::where('ic', $ic)->where('project_code', $id)->where('amount',$amount)->first();
    	$receipts = TaxReceipt::where('ic', $ic)->where('project_code', $id)->get();
    
        $printGroupByICs = $receipts->groupBy('ic');
    	
    	return dd($printGroupByICs);

    	return view('ter.show', compact('prints','printGroupByICs'));





   //    return view ('ter.show')->with([
   //    'account_holder'    => $prints->account_holder,
   //    'ic'                => $prints->ic,
   //    'add1'              => $prints->add1,
   //    'add2'              => $prints->add2,
   //    'add3'              => $prints->add3,
   //    'add4'              => $prints->add4,
   //    'postcode'          => $prints->postcode,
   //    'state'             => $prints->state,
   //    'channel'           => $prints->channel,
   //    'trans_date'        => date('j F Y',strtotime($prints->trans_date)),
   //    'tdm_trans_date'    => date('d-m-Y',strtotime($prints->trans_date)),
   //  //'amount_in_words'   => $numToWord->convertNumber($prints->amount),
   //    'amount'			 => $prints->amount,
   //    'payment_mode'      => $prints->payment_mode,
   //    'remarks'           => $prints->remarks,
   //    'email'             => $prints->email,
   //    'status'            => $prints->status,
   // // 'added_by'          => User::find($prints->added_by)->first_name,
   // // 'issued_by'         => $issued_by,
   // // 'todate'            => $todate,
   //    'toyear'            => date('Y'),
   //    'trans_year'        => date('Y',strtotime($prints->trans_date)),
   //    'tomonth'           => date('M'),
   //    'trans_month'       => date('M',strtotime($prints->trans_date)),
   //    'project_code'      => $prints->project_code,
   // // 'project_name'      => $project_name,
   // // 'project_nice_name' => $project_nice_name,
   //    'thankyou'          => $prints->thankyou,
   //    'attn_person'       => $prints->attn_person,
   //    'attn_designation'  => $prints->attn_designation,
   //    'receipt_for'       => $prints->receipt_for,
   // // 'all_project_name'  => $all_project_name,
   // // 'project_text'      => $project_text,
   //    'dato'              => 'Dato’ Mohd Farid Ariffin',
   //    'president'         => 'Presiden / President',
   //    'makna'             => 'Majlis Kanser Nasional',
   //    'prints'            => $prints,
   //    'printGroupByICs'   => $printGroupByICs
      
   //  ]);

    }

    public function getByIcMonth(){   	
    
    	$prints = TaxReceipt::get();
    	$printGroupByICs = $prints->groupBy('ic');

    	// $groupByProjectCodes = $prints->groupBy(function($receipt) {
     //                           return $receipt->project_code;
     //            });

    	

    	// $groupByYears = $prints->groupBy(function($receipt) {
     //            		return \Carbon\Carbon::createFromFormat('Y-m-d', $receipt->trans_date)->format('Y');
     //            });



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
