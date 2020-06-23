<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//client


Route::get('/clients', 'ClientController@index');
Route::get('/addclient', 'ClientController@add');
Route::post('/insertClient', 'ClientController@insert');
Route::get('/delclient/{id}', 'ClientController@destroy');


//prices

Route::get('/prices', 'HomeController@priceindex');


//Destination


Route::get('/destinations', 'DestinationController@index');
Route::get('/adddestination', 'DestinationController@add');
Route::post('/insertdestination', 'DestinationController@insert');
Route::get('/deletedestionation/{id}', 'DestinationController@destroy');



//moyens  



Route::get('/moyens', 'MoyenController@index');
Route::get('/moyens/{type}', 'MoyenController@indexfilter');
Route::get('/addmoyen', 'MoyenController@add');
Route::get('/moyenedit/{id}', 'MoyenController@editaq');
Route::post('/insetmoyen', 'MoyenController@insert');
Route::post('/editmoyen/{id}', 'MoyenController@edit');
Route::get('/deletemoyens/{id}', 'MoyenController@destroy');

Route::get('/moyensdsp', 'MoyenController@index2');

Route::POST('/serachmoyend', 'MoyenController@serachm');


//operations

Route::get('/operations/{type}', 'OperationController@index');
Route::get('/addoperations', 'OperationController@add');
Route::post('/insertoperation', 'OperationController@insert');
Route::get('/operations/data', 'OperationController@data');
Route::get('/deleteoperation/{id}', 'OperationController@destroy');
Route::get('/validateope/{id}', 'OperationController@valideaq');
Route::post('/searchope', 'OperationController@searchope');
