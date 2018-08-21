<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TextEdit;
use App\KiraBudget;
use DB;
use PDF;



class TextController extends Controller
{
    
    //view
     public function index()
    {


        $projects = TextEdit::all();
        
            return view('datatabletext', compact('projects')); //table
    }

    public function view($id){

        $projects = TextEdit::find($id);

        return view('textview', compact('projects','id'));
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

        return dd($projects);
        
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


    public function htmltopdfview(Request $request)
    {
        $projects = TextEdit::all();
        view()->share('projects',$projects);
        if($request->has('download')){
            $pdf = PDF::loadView('datatabletext');
            return $pdf->download('datatabletext');
        }
        return view('datatabletext');
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
    $sum_saving = $budgets->sum('saving');
    $sum_salary_month = $budgets->sum('salarymonth');
    $sum_month_working = $budgets->count('month_working');
    $sum_bill = $budgets->sum('bill');
    $sum_loans = $budgets->sum('loans');
    $sum_food = $budgets->sum('food');
    $sum_transport = $budgets->sum('transport');
    $sum_weekend = $budgets->sum('weekend');
    $sum_parents = $budgets->sum('parents');
    $sum_family = $budgets->sum('family');
    $sum_total_expenses = $budgets->sum('total_expenses');
    

    return view ('budget.budgettable', compact(
        'budgets',
        'sum_salary_month',
        'sum_saving',
        'sum_month_working',
        'sum_bill',
        'sum_loans',
        'sum_food',
        'sum_transport',
        'sum_weekend',
        'sum_parents',
        'sum_family',
        'sum_total_expenses'
    ));
}

public function storeBudget(Request $request){

    $percentage = 50;
    $validator = \Validator::make($request->all(), [
        'salarymonth'   => 'required', 
        'saving'        => 'required',
        'bank'          => 'required',
        'month'         => 'required',
        'month_working' => 'required',
        'bill'          => 'required',
        'loans'         => 'required',
        'food'          => 'required',
        'transport'     => 'required',
        'weekend'       => 'required',
        'parents'       => 'required',
        'family'        => 'required'
        ]);

        if ($validator->fails()) {
            return redirect ('/add_budget')
            ->withInput()
            ->withErrors($validator->errors());
        }

        //create new text
        $budgets = new KiraBudget; 
        $budgets->salarymonth = $request->salarymonth;
        $budgets->saving = $request->saving/100*$budgets->salarymonth;
        $budgets->month = $request->month;
        $budgets->bank = $request->bank;
        $budgets->month_working = $request->month_working;
        $budgets->bill = $request->bill;
        $budgets->loans = $request->loans;
        $budgets->food = $request->food*4; //food time 4
        $budgets->transport = $request->transport*4; //transport time 4
        $budgets->weekend = $request->weekend*4; //weekend expenses time 4
        $budgets->parents = $request->parents;
        $budgets->family = $request->family;
        $budgets->total_expenses = $budgets->food + //food
                                   $budgets->loans + //loans
                                   $budgets->bill +  //bill
                                   $budgets->transport + //transport
                                   $budgets->weekend + //weekend
                                   $budgets->parents + //parents
                                   $budgets->family; //family
        $budgets->balance_to_spend = $budgets->salarymonth - $budgets->saving - $budgets->total_expenses;
        //($request->salarymonth*$percentage)/100;
        $budgets->save();


        return redirect('/budget_table')->with('info','budget saved!');

}
   public function deleteBudget($id){

    $budgets = KiraBudget::find($id);
    $budgets->delete();
    return redirect('/budget_table')->with('danger','Deleted!');

   }

   public function sumBudget(){

    $budgets = KiraBudget::get();
    $sum = $budgets->sum('saving');

    return view('budget.budget_total_view',compact('sum'));
   }

   public function viewBudget($id)
   {
    $budgets = KiraBudget::find($id);
    return view ('budget.viewbudget', compact('budgets','id'));
   }


}
