<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\VerificationCode;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\OTPMail;
use Carbon\Carbon;
class OTPController extends Controller
{
    
        public function sendOtp(Request $request)
        {
            $request->validate([
                'email' => 'required|email|exists:users,email',
            ]);
    
            $user = \App\Models\User::where('email', $request->email)->first();
    
            if (!$user) {
                return response()->json(['message' => 'User not found.'], 404);
            }
    
            $otp = rand(100000, 999999);
    
            VerificationCode::create([
                'user_id' => $user->id,
                'code' => $otp,
                'expires_at' => Carbon::now()->addMinutes(10),
            ]);
          //SendOtpEmail::dispatch($user, $otp);

           //return rsponse()->json(['message' => 'OTP sent successfully.']);

            // Send OTP via email
        Mail::to($user->email)->send(new OTPMail($otp));

        return response()->json([     
            'message' => 'OTP sent successfully.',
            'expires_at' => Carbon::now()->addMinutes(10)->toDateTimeString(),
        ]);
        }
    };


