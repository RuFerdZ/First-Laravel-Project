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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/rusiru', function () {
    return view('rusiru');
});


Route::get('/contact', function () {
    return view('Quiz.contact');
});

//passing single parameter
Route::get('/about', function () {
    $names = ["Rusiru","Hasani"];
    return view('Quiz.about',["contacts"=>$names]);
});

//if sendind parameters
Route::get('/new', function () {
    $names = ["Rusiru","Hasani"];
    return view('Quiz.new',["contacts"=>$names,"title"=>"New Page"]);
});


//if sending many parameters
Route::get('/compact', function () {
    $names = ["Rusiru","Hasani"];
    $title = "Compact Page";
    return view('Quiz.compact',compact("names","title"));
});

//single line routing - controller based
Route::get('/controllerbased','CustomersController@list');


Route::view('/','home.index');

