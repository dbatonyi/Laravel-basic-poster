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

Route::get('/', 'PagesController@getHome')->name('home');

Route::get('/contact', 'PagesController@getContact')->name('contact');

Route::get('/about', 'PagesController@getAbout')->name('about');

Route::get('contact/messages', 'ContactController@getMessages')->name('get-messages');

Route::post('contact/submit', 'ContactController@submit')->name('contact-form-submit');

