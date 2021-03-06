<?php

use Illuminate\Http\Request;

use App\Url;

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

Route::get('/','UrlsController@create');

Route::post('/', 'UrlsController@store');

Route::get('/{shortned}','UrlsController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
