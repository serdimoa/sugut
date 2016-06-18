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

Route::post('header_form','SendEmailController@sendHeader');
//Route::get('header_form','SendEmailController@sendHeader');

Route::get('logout','AdminController@logout');

$router->resource('admin', 'AdminController');
$router->resource('dashboard', 'DashboardController');
