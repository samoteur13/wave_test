<?php

use Illuminate\Http\Request;
use App\Http\Controllers\api\CompagnyController;
// use App\Http\Controllers\api\auth\ForgotPasswordController;
// use App\Http\Controllers\Auth\ ;
use App\Http\Controllers\api\ForgotPasswordController;
use App\Http\Controllers\api\ResetPasswordController;

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

Route::post('sendPasswordResetLink', [ForgotPasswordController::class, 'sendResetLinkEmail']);
Route::post('resetPassword', [ResetPasswordController::class, 'reset']);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return auth()->user();
});

Wave::api();
