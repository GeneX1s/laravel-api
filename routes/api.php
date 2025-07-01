<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::apiResource('users', UserController::class);


Route::post('/login', [AuthController::class, 'login']);

// Route::post('users/insert', [UserController::class, 'store']);

// Route::apiResource('users', UserController::class)->only(['index', 'show', 'update', 'destroy']);
