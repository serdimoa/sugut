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



Route::get('/','PageFirstController@index');
Route::get('ivana-zaharova-12(1)','PageFirstController@index2');
Route::get('melik-karamova-40,40(1)','PageFirstController@index3');

Route::post('header_form','SendEmailController@sendHeader');
//Route::get('header_form','SendEmailController@sendHeader');

Route::get('logout','AdminController@logout');

$router->resource('admin', 'AdminController');
$router->resource('dashboard', 'DashboardController');
