<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PageController@welcome')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/page-data/{type}', 'PageController@page_data')->name('page-data');
Route::post('/contact', 'PageController@contact_submit')->name('contact-submit');
Route::post('/save-content', 'PageController@save_content')->name('save-content');
Route::post('/save-config', 'PageController@save_config')->name('save-config');