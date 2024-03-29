<?php

use App\Http\Controllers\TodoController;
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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

// This Route is for Todo
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/show', [TodoController::class, 'index']);
    Route::get('/create', [TodoController::class, 'create']);
    Route::post('/store', [TodoController::class, 'store']);
    Route::get('/update/{id}', [TodoController::class, 'edit']);
    Route::post('/update/{id}', [TodoController::class, 'update']);
    Route::delete('/todo/{id}', [TodoController::class, 'destroy']);
});





