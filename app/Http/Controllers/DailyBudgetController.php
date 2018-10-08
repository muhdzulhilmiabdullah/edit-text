<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DailyBudgetController extends Controller
{
    //Home 
	public function index()
	{
		$dailybudget = DailyBudget::get();
		return view ('/dailybudget.home');
	}

	//View 
	public function viewBudget()
	{
		$dailybudget = DailyBudget::get();
		return view('/dailybudget.view', compact('dailybudget'));
	}

	//Add 
	public function addBudget(Request $request, $id)
	{
		$validator = \Validator::make($request->all(),[
			'date' => 'required',
			'food' => 'required',
			'transport' => 'required',
			'miscellaneous' => 'required',
			'total_expenses' => 'required',
			'comment'        => 'required'
		]);

		if ($validator->fails()) {
            return redirect ('/dailybudget/home')
            ->withInput()
            ->withErrors($validator->errors());
        }

        $dailybudget = new DailyBudget;
        $dailybudget->date = $request->date;
        $dailybudget->food = $request->food;
        $dailybudget->transport = $request->transport;
        $dailybudget->miscellaneous = $request->miscellaneous;
        $dailybudget->total_expenses = $dailybudget->food + $dailybudget->transport + $dailybudget->miscellaneous;
        $dailbudget->comment = $request->comment;
        $dailybudget->save();

        return redirect('dailybudget/home')->with('notification' => 'Today Budget has been saved! Please control your next day budget :)');
	}

	//Edit 
	public function edit($id)
	{
		$dailybudget = DailyBudget::find($id);

		return view('dailybudget.editbudget', compact('dailybudget'));
	}

	//Update
	public function update(Request $request, $id)
	{
		$dailybudget = DailyBudget::find($id);
		$dailybudget->food = $request->food;
		$dailybudget->transport = $request->transport;
		$dailybudget->miscellaneous = $request->miscellaneous;
		$dailybudget->total_expenses = $dailybudget->food + $dailybudget->transport + $dailybudget->miscellaneous;
		$dailbudget->comment = $request->comment;
		$dailybudget->update();

		return redirect('/dailybudget/home')->with('notification' => 'Your expsenses has been updated!');
	}

	public function delete($id)
	{
		$dailybudget = DailyBudget::find($id);
		$dailybudget->deastroy();

		return redirect('/dailybudget.home')->with('notification' => 'Budget has been delete!');
	}
}
