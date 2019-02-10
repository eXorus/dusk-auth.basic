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


Route::get('/protected', function (Request $request) {
    return 'Yes';
})->middleware('auth.basic');

Route::get('/public', function (Request $request) {
    return 'Yes';
});