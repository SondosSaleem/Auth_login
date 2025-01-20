<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\VerificationCode;
use Illuminate\Support\Facades\Mail;
use App\Mail\OTPMail;
use Carbon\Carbon;
class VerifyEmailController extends Controller
{
    
        protected $otpController; 
        public function __construct(OTPController $otpController)
        {
            $this->otpController = $otpController;
        }
         public function verifyEmail(Request $request)
         {
             $request->validate([
                 'email' => 'required|email|exists:users,email',
             ]);
             $user = User::where('email', $request->email)->first();
     
             if (!$user) {
                 return $this->sendError('User not found.');
             }
             $this->otpController->sendOtp(new Request(['email' => $user->email]));
             return  $this->sendResponse([],'Verification code sent');
         }
         
     
         public function sendCode(Request $request)
         {
             $request->validate([
                 'email' => 'required|email|exists:users,email',
                 'code' => 'required|numeric',
             ]);
         
             $user = User::where('email', $request->email)->first();
             if (!$user) {
                 return $this->sendError('User not found');
         }
           
                 $verificationCode = VerificationCode::where('code', $request->code)
                 ->where('user_id', $user->id)
                 ->where('expires_at', '>', now()) 
                 ->first();
         
             if (!$verificationCode) {
                 return $this->sendError('invalid or expired verification code');
               
             }
         
           
             $user->email_verified_at = now();
             $user->save();
         
     
             $verificationCode->delete();
         
             return$this->sendResponse([],'Email verified successfully');
         }
             
         };

