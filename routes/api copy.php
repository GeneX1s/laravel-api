<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Example of a basic API route
// Route::get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/users', function () {
//     return response()->json([
//         ['id' => 1, 'name' => 'Alice'],
//         ['id' => 2, 'name' => 'Bob']
//     ]);
// });

Route::apiResource('users', UserController::class);

// Route::post('/users/create', [UserController::class, 'store']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// routes/api.php
// Route::get('/test', function () {
//     return response()->json(['message' => 'API route is working']);
// });
