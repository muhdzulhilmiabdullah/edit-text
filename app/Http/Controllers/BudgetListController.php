<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BudgetList;

class BudgetListController extends Controller
{
    //index
    public function budgetIndex()
    {
    	$budgets = BudgetList::all();
    	return view('budget.budgetlist', compact('budgets'));
    }

    //view
    public function budgetView($id)
    {
    	$budget = BudgetList::find($id);
    	return view('budget.budgetview',compact('budgets'))
    }

    //store
    public function budgetStore(Request $request)
    {
    	$budgets = BudgetList::get();

    	$validator = \Validator::make($request->all(), [
    		'date' 	 = 'required',
    		'item' 	 = 'required',
    		'amount' = 'required',
    		'']);

    	if ($validator->fail()) {

    		return redirect('/budgetlist')
    		->withInput()
    		->withErrors('Please check all field are filled! :)');
    	}

    	$budgets = new BudgetList;
    	$budgets->date = $request->date;
    	$budgets->item = $request->item;
    	$budgets->amount = $request->amount;
    	$budgets->save();

    	return redirect('/budgetlist')->with('notification' => 'New budget added ! :)')
    }

    //edit 
    public function budgetEdit($id)
    {
    	$budgets = BudgetList::find($id);

    	return view ('budget.budgetedit', compact('budgets'));
    }

    //update
    public function budgetUpdate($id)
    {
    	$budgets = BudgetList::find($id);
    	$budgets->date = $budgets->date;
    	$budgets->item = $budgets->item;
    	$budgets->amount = $budgets->amount; 
    	$budgets->update();

    	return redirect('/budgetlist')->with('notification' => 'Budget list updated ! :)');
    }

    //delete
    public function budgetDelete($id)
    {
    	$budgets = BudgetList::find($id);
    	$budgets->destroy();

    	return redirect('/budgetlist')->with('notification' => 'Budget list deleted ! :)');
    }


}
