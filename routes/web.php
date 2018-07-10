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
Route::get('/', function () {
    return view('welcome');
});

//addtext
Route::get('/addtext',function(){
	return view('textadd');
});
//text view
Route::get('/textview','TextController@view');
//add text
Route::post('/store','TextController@store'); //done
//edit/update text
Route::get('/editText/{id}','TextController@edit');
Route::post('/updatetext/{id}','TextController@update');


//table text
Route::get('datatabletext', 'TextController@index');

//text editText


//read text

//datatable controller and display table text
//Route::get('datatabletext','MyDatatablesController@index'); //datatables page
//Route::get('get-data-my-datatables', ['as'=>'get.data','uses'=>'MyDatatablesController@getData']); //getdata

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


