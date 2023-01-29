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

Route::get("tasks", [TaskController::class, 'index']);
Route::post("task",  [TaskController::class, 'store']);
Route::get("task/{id}/complete",  [TaskController::class, 'complete']);
Route::get("task/{id}/delete", [TaskController::class, 'destroy']);