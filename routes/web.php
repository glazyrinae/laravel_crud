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

Route::get('/', 'PagesController@home')->name('home');
Route::get('/view', 'PagesController@viewtasks')->name('view');
Route::match(['get', 'post'], '/addtask', 'PagesController@addtask')->name('addtask');
#Route::get('/edit/{id}', 'PagesController@edittask');
Route::get('/login', 'PagesController@login');



Route::get('/register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
