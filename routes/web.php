<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\redirectController;
use app\Http\Controllers\linksController;

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
    return view('welcome');
});

// redirects

Route::get('/api/redirect', 'redirectController@index');
Route::post('/api/redirect', 'redirectController@store');
Route::put('/api/redirect/{redirect}', 'redirectController@update');
Route::delete('/api/redirect/{redirect}', 'redirectController@destroy');

//links

Route::get('/api/links', 'linksController@index');
Route::post('/api/links', 'linksController@store');
Route::put('/api/links/{links}', 'linksController@update');
Route::delete('/api/links/{links}', 'linksController@destroy');
