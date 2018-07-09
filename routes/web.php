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
    return view('datatabletext');
});

//addtext
Route::get('/addtext',function(){
	return view('textadd');
});

//add text
Route::post('/store','TextController@store');

//text editText

Route::resource('productCRUD','ProductCRUDController');
//read text

//datatable controller and display table text
Route::get('datatabletext','MyDatatablesController@index'); //datatables page
Route::get('get-data-my-datatables', ['as'=>'get.data','uses'=>'MyDatatablesController@getData']); //getdata

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
