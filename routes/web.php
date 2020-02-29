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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function(){
    return view('contactform');
});

Route::post('/contact', 'PagesController@contactSend');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
