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
Route::prefix('v1.0')->group(function () {
    Route::get('/',function(){})->name('api');
    Route::post('auth/register', 'UserController@register');
    Route::post('auth/login', 'UserController@login'); 
    Route::group(['middleware' => 'jwt.auth'], function () {
        Route::get('user-info', 'UserController@user');
        Route::post('logout', 'UserController@logout');
        
        Route::get('class-joined','UserController@classjoined');
    });
    Route::middleware('jwt.refresh')->get('/token/refresh', 'UserController@refresh');
});
