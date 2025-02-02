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

Route::get('/data', [App\Http\Controllers\ExampleController::class, 'index']);
Route::get('/data', [App\Http\Controllers\ExampleController::class, 'index']);


Route::get('/students', [App\Http\Controllers\ExampleController::class, 'studentdata']);



Route::post('/add-student', [App\Http\Controllers\ExampleController::class, 'store'])->name('complete.Form');