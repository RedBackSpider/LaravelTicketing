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
    return view('home');
});

Route::get('home', function () {
    return view('home');
});

Route::get('person/logincheck', function () {
    return view('person/logincheck');
});

Route::get('faq', 'PagesController@faq');

Route::resource('ticket', 'TicketController');

Route::resource('person', 'PersonController');