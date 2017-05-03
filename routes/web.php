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

Route::get('/' , function() 
{
	return view('welcome');
});

//popis svih itema
Route::get('/items', 'ItemsController@index');


// dodavanje novog Item-a
Route::get('/items/new', 'ItemsController@create');
Route::post('/items/new', 'ItemsController@store');


//prikaz odredenog Item-a
Route::get('/items/{id}', 'ItemsController@show');

//uredivanje (edit) postojeceg Item-a
Route::get('/item/{id}/new', 'ItemsController@edit');
Route::post('/item/{id}/new', 'ItemsController@update');

// brisanje Item-a
Route::delete('/item/{id}',  'ItemsController@destroy');







