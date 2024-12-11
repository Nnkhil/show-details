<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('user')->group(function () {
    //auth apis
    Route::post('register', [UserController::class, 'registerUser']);
    Route::post('login', [UserController::class, 'login']);

    Route::middleware(['auth:sanctum'])->group(function (): void {
        Route::get('home', [UserController::class, 'show']);
        Route::post('logout', [UserController::class, 'logout']);
    });
});

