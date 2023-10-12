<?php

namespace App\Http\Controllers\API\V1\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\API\V1\LoginRequest;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(LoginRequest $request)
    {
        //
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'success' => false,
                'message' => 'Vos identifiant sont incorrects'
            ], 422);
        }

        $device = substr($request->userAgent() ?? '',0,255);
        $token = $user->createToken($device)->plainTextToken;

        return response()->json([
            'success' => true,
            'access_token' => $token
        ]);
    }
}
