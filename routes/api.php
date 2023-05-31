<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\UserLogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/sign-up', [UserLogController::class, 'signUp']);
Route::post('/login', [UserLogController::class, 'login']);
Route::post('/submit-feedback', [FeedbackController::class, 'store']);
Route::get('/user-opens-app', [UserLogController::class, 'userOpensApp']);