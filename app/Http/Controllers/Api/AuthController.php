<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if(!Auth::attempt($credentials))
        {
            return response()->json(['message' => 'unauthorized'], 401);
        }

        $user = User::where('email', $request->email)->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_code' => $token,
            'token_type' => 'Bearer'
        ], 200);




    }

    public function register(Request $request)
    {

        try {
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required'
               ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password
            ]);

            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'access_token' => $token,
                'token_type' => 'Bearer'
            ]);


        } catch (ValidationException $exception) {
            return response()->json($exception->errors(), 400);
        }


    }

    public function me(Request $request)
    {
        return $request->user();
    }

    public function logout()
    {

    }
}
