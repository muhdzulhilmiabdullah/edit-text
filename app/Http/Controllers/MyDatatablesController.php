<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\TextEdit;

class MyDatatablesController extends Controller
{
	/**
     * Displays front end view
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
    	return view('datatabletext');
    }
    /**
     * Process ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getData()
    {
        //the datatables will return the data of Employee(the model) and query it.
        return DataTables::of(TextEdit::query())->make(true);
    }
}