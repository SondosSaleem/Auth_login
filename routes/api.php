<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\VerifyCode;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

Route::controller(UserController::class)->group(function(){
    Route::post('register',  'register');
    Route::post('login',  'login');
   
    Route::post('/resetPassword', 'resetPassword');
});
    Route::post('sendOtp',[OtpController::class,'sendOtp']);
    Route::post('/verifyEmail', [VerifyCode::class, 'verifyEmail']);

Route::middleware('auth:sanctum', 'setapplang')->prefix('{locale}')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/send-email', function () {
    Mail::to('sondossaleem308@gmail.com')->send(new TestMail());
    return response()->json(['message' => 'Email sent successfully!']);
});

Route::post('{locale}/logout', [UserController::class, 'logout'])->middleware('auth:sanctum');
