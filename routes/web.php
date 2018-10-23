<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//homepage
Route::get('/',function(){
        return view('welcome');
    });

//kirabudget

Route::get('/budget_table', 'TextController@kirabudgetIndex');
Route::get('/add_budget',function(){
        return view('budget.kirabudget2');
    });
Route::get('/kira_budget',function(){
    return view('budget.kirabudget');
});
//store
Route::post('/store_budget','TextController@storeBudget');
//delete
Route::delete('/delete_budget/{id}','TextController@deleteBudget');
//sum budget
Route::get('/budget_total_view','TextController@sumBudget');
//updates notes
Route::get('/update_version',function(){
        return view('version.updateversion');
    });
Route::get('/viewbudget/{id}','TextController@viewBudget');

//budgetlist 
Route::get('/budgetlist','BudgetListController@budgetIndex');
Route::get('/budgetview/{id}','BudgetListController@budgetView');
Route::get('/budgetedit/{id}','BudgetListController@budgetEdit');
Route::post('/budgetupdate/{id}', 'BudgetListController@budgetUpdate');
Route::delete('/budgetdelete/{id}','BudgetListController@budgetDelete');

//addtext
	Route::get('/addtext',function(){
		return view('textadd');
	});

//printic
Route::get('/printic','PrintController@getByIcMonth');

Route::get('/test', function(){
    return view('/ter/tr');
});
Route::get('/printview/{ic}/{id}', 'PrintController@viewT')->name('viewT');
Route::get('/test', ['as' => 'test', 'uses' => 'PrintController@getByIcMonth']);

//pdfdom
Route::get('/htmltopdfview',array('as'=>'htmltopdfview','uses'=>'TextController@htmltopdfview'));
//text view
Route::get('/textview/{id}','TextController@view');
//add text
Route::post('/store','TextController@store'); //done
//edit/update text
Route::get('/editText/{id}','TextController@edit');
Route::post('/updatetext/{id}','TextController@update');
Route::delete('/delete/text/{id}','TextController@destroy');
//table text
Route::get('datatabletext', 'TextController@index');

//DailyBudget 
Route::get('/dailybudget/home', function(){
    return view('/dailybudget.home');
});
//Add daily budget
Route::get('/dailybudget/add', function(){
    return view('/dailybudget.add');
});

//spreadsheet
Route::get('/excel', 'VolunteerController@index')->name('index');
Route::post('import', 'VolunteerController@import')->name('import');

Route::post('/updateauto/{id}','PrintController@updateAuto');

//datatable controller and display table text
//Route::get('datatabletext','MyDatatablesController@index'); //datatables page
//Route::get('get-data-my-datatables', ['as'=>'get.data','uses'=>'MyDatatablesController@getData']); //getdata

Auth::routes();
//qr code routes
Route::get('/qr-code', 'TxtController@qrCode');

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'textedit', 'as' => 'textedit.'], function () {
    Route::get('/', [
        'as' => 'index',
        'uses' => 'TxtController@index',
    ]);
    Route::get('/show/{textedit}', [
        'as' => 'show',
        'uses' => 'TxtController@show',
    ]);
    Route::get('/create', [
        'as' => 'create',
        'uses' => 'TxtController@create'
    ]);
    Route::post('/create', [
        'as' => 'create',
        'uses' => 'TxtController@store'
    ]);
    Route::get('/edit/{textedit}', [
        'as' => 'edit',
        'uses' => 'TxtController@edit',
    ]);
    Route::put('/edit/{textedit}', [
        'as' => 'update',
        'uses' => 'TxtController@update',
    ]);
    Route::delete('/destroy/{textedit}', [
        'as' => 'destroy',
        'uses' => 'TxtController@destroy',
    ]);
    Route::put('/assign_contact/{textedit}', [
        'as' => 'assign_contact',
        'uses' => 'TxtController@assignContact',
    ]);





});