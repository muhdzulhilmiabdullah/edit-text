<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TextEdit;
use DB;


class TextController extends Controller
{
    
    //view
     public function index()
    {


    //monthsaving 
    $monthworking = '2';
    $cib = '1000';
    $totalsaving = $monthworking * $cib;//totalsave

    //wishlist
    $drone ='2099';
    $wishlist = $totalsaving - $drone;

    //details
    $salary = '1500'; //eachmonthafterdeductsaving

    //expense
    $convo = '220';
    $saman = '100';
    $nenek = '100';
    $bill = '50';
    $minyak = '40' * '4';
    $makan = '50' * '4';
    $weekend = '50' * '4';

    //calculation
    $addexpense = $convo + $saman + $nenek + $minyak + $makan + $bill + $weekend;
    $finaltotal = $salary - $addexpense;
    
    //currentaccount
    $my = '200'; //bulan 7
    $mytotal = $finaltotal + $my;

    return dd($mytotal);

        $projects = TextEdit::all();
        
            return view('datatabletext', compact('projects')); //table
    }

    public function view(){

        $projects = TextEdit::get();

        return view('textview', compact('projects'));
    }

//add new text

    public function store(Request $request)
    {

      $validator = \Validator::make($request->all(), [
        'project_name' => 'required', 
        'project_code' => 'required|unique:text_edits,project_code',
        'project_text' => 'required'
           
        ]);

        if ($validator->fails()) {
            return redirect ('/addtext')
            ->withInput()
            ->withErrors($validator->errors());
        }

        //create new text
        $projects = new TextEdit; 
        $projects->project_name = $request->project_name;
        $projects->project_code = $request->project_code;
        $projects->project_text = $request->project_text;
        $projects->save();


        return redirect('datatabletext')->with('info','NewText saved!');
    }

//edit text 

     public function edit($id)
    {
        $projects = TextEdit::find($id);
        
        return view('textedit', compact('projects','id'));
    }

//update text

    public function update(Request $request, $id)
    {
        
        $projects = TextEdit::find($id);
        $projects->project_name = $request->get('project_name');
        $projects->project_code = $request->get('project_code');
        $projects->project_text = $request->get('project_text');
        $projects->save();
        return redirect('datatabletext');
    }

     public function destroy($id)
    {
      $projects = TextEdit::find($id);
      $projects->delete();

      return redirect('datatabletext');
    }

public function getHistoryText(request $request){

  $projects = TaxReceipt::filterByIc('ic', $request['ic'])->first();

  if($projects != null){

    $project_text = TerProjectText::find($projects->code);

    $history = new TerHistoryProjectText;
    $history->id = $project_text->id;
    $history->project_code = $project_text->project_code;
    $history->text = $project_text->text;
    $history->save();

    $msg = 'New text is updated in DB';

  }else{

    $error = 1;
    $msg = 'Error adding new text in DB';
    return Redirect::back()->withErrors(['msg', 'The Message']);
  }
}

public function KiraBudgetIndex(){

    $budgets = KiraBudget::all();

    return view ('budget.kirabudget', compact('budgets'));
}

public function storeBudget(Request $request){

    $validator = \Validator::make($request->all(), [
        'salarymonth' => 'required', 
        'bank' => 'required',
        'month_working' => 'required,',
        'bill' => 'required',
        'loans' => 'required',
        'food' => 'required',
        'transport' => 'required',
        'weekend' => 'required',
        'parents' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect ('/addbudget')
            ->withInput()
            ->withErrors($validator->errors());
        }

        //create new text
        $budgets = new KiraBudget; 
        $budgets->salarymonth = $request->salarymonth;
        $budgets->bank = $request->bank;
        $budgets->month_working = $request->month_working;
        $budgets->bill = $request->bill;
        $budgets->loans = $request->loans;
        $budgets->food = $request->food;
        $budgets->transport = $request->transport;
        $budgets->weekend = $request->weekend;
        $budgets->parents = $request->parents;
        $budgets->family = $request->family;
        $budgets->save();


        return redirect('budgettable')->with('info','budget saved!');

}

   


}
