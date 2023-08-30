<?php

use App\Http\Controllers\CountriesController;
use App\Http\Controllers\PersonsController;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::middleware()->get('/persons', function (Request $request) {
//
//});

Route::get('/persons', [PersonsController::class, 'index']);
Route::post('/persons', [PersonsController::class, 'add']);
Route::put('/persons/{id}', [PersonsController::class, 'update']);
Route::delete('/persons/{id}', [PersonsController::class, 'delete']);

Route::get('/countries', [CountriesController::class, 'index']);
