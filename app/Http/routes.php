<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {

// 	$people = [];
// 	// $people = ['Mica','Pedro','Luis'];

//     // return view('welcome',['people' => $people]);
//     return view('welcome',compact('people'));
//     // return view('welcome')->with->('people',$people);
// });

//Route::get('mica',function(){
//    return view('mica');
//});

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

// Route::get('/about', function(){

// 	return view('pages.about');

// });
Route::get('cards','CardsController@index');
Route::get('cards/{card}','CardsController@show');
Route::post('cards/{card}/notes','NotesController@store');

