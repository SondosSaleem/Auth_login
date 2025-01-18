<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::middleware('setapplang')->prefix('{locale}')->group(function () {
    
    Route::post('register', [UserController::class, 'register']);
    Route::post('login', [UserController::class, 'login']);
});

Route::middleware('auth:sanctum', 'setapplang')->prefix('{locale}')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('logout', [UserController::class, 'logout'])->middleware('auth:sanctum');

