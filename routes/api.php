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
//api products
Route::group(
    [
        'prefix' => 'product'
    ], function () {
    Route::get('get_all', 'ProductController@getAllProduct');
    Route::get('get/{id}', 'ProductController@getById');
    Route::post('create', 'ProductController@create');
    Route::post('delete/{id}', 'ProductController@deleteById');
    Route::put('update/{id}', 'ProductController@updateById');
});

