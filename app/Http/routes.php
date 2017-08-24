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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::resource('itemCRUD','ItemCRUDController');
Route::resource('subjects','SubjectsController');
Route::resource('teacher','TeacherController');
Route::resource('students','StudentsController');
# ajexj call for high chart data
Route::post('/chartData', 'HomeController@chartData');