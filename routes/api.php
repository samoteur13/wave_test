<?php

use App\Http\Controllers\api\CompagnyController;
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


// BROWSE
Route::apiResource('compagnies',CompagnyController::class);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return auth()->user();
});

Wave::api();
