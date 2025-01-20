<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\VerificationCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\OTPMail;
use Carbon\Carbon;
class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'message' => 'User registered successfully.',
            'User' => $user,
        ], 201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'Invalid email or password'], 401);
        }

        $user = User::where('email', $request->email)->firstOrFail();
        $token = $user->createToken('auth_Token')->plainTextToken;

        return response()->json([
            'message' => 'User logged in successfully.',
            'User' => $user,
            'Token' => $token,
        ], 201);
    }

    public function logout(Request $request)
    {
        $user = $request->user();

        if ($user) {
            $user->currentAccessToken()->delete();
            return response()->json(['message' => 'Logged out successfully.']);
        }

        return response()->json(['message' => 'No user logged in.'], 400);
    }
    //login ,register,logout
//second code password and reset password two function
    public function sendcodePassword(Request $request)
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
            return $this->sendError('Invalid or expired OTP.');
        }
        return $this->sendResponse([],'code sent  successfully');

      
    }
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'code' => 'required|numeric',
            'password' => 'required|string|min:8', 
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return $this->sendError('bad credencial');
        }

        $verificationCode = VerificationCode::where('code', $request->code)
            ->where('user_id', $user->id)
          //  ->where('expires_at', '>', now())
            ->first();

        if (!$verificationCode) {
            return $this->sendError('bad credencial.');
        }
        $user->update(['password' => Hash::make($request->password)]);

        // Delete OTP
        $verificationCode->delete();

        return $this->sendResponse([],'Password reset successfully');
    }
    public function sendError($message, $code = 400)
    {
        return response()->json([
            'success' => false,
            'message' => $message,
        ], $code);
    }
};

