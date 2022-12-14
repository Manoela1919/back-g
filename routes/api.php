<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

$router->get('/api/redirect', 'redirectController@index');
$router->get('/api/redirect/{id}', 'redirectController@show');
$router->post('/api/redirect', 'redirectController@create');
$router->put('/api/redirect/{id}', 'redirectController@update');
$router->delete('/api/redirect/{id}', 'redirectController@delete');

$router->get('/api/links', 'linksController@index');
$router->get('/api/links/{id}', 'linksController@show');
$router->post('/api/links', 'linksController@create');
$router->put('/api/links/{id}', 'linksController@update');
$router->delete('/api/links/{id}', 'linksController@delete');
