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



Route::get(env('HOME','/'),
    ['as'=>'onePage','uses'=>'PageFirstController@index']);

Route::get(
    env('2PAGE','ivana-zaharova-12(1)'),
    ['as'=>'twoPage','uses'=>'PageFirstController@index2']);

Route::get(
    env('3PAGE','melik-karamova-40,40(1)'),
    ['as'=>'threePage','uses'=>'PageFirstController@index3']);




Route::post('header_form','SendEmailController@sendHeader');


