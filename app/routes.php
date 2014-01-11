<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@aboutUs');
Route::get('/contact', 'PagesController@getContactUs');
Route::get('/cart', 'ProductsController@getCart');
Route::post('/cart', 'ProductsController@postCart');

Route::resource('/products', 'ProductsController');