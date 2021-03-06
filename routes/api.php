<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('guest')->post('/login', 'Auth\LoginController@authenticate');
Route::middleware('guest')->post('/register', 'Auth\RegisterController@register');
Route::resource('/shops', 'ShopController');
Route::resource('/managers', 'ManagersController');
Route::post('shops/{shopId}/comments', 'CommentsController@store');
Route::get('/test', 'TestController@index');