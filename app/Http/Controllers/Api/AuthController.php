<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Traits\ApiResponseTrait;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use ApiResponseTrait;

    public function login(Request $request)
    {
        $validate = $request->validate([
           'email' => 'required|email',
           'password' => 'required'
        ]);
        if (!\Auth::attempt($request->only('email', 'password'))) {

            return $this->apiResponse('200', 'Login invalid', 'Login information is invalid', '');
        }

        $user = User::where('email', $request['email'])->first();
        $token = $user->createToken('authToken')->plainTextToken;
        $data = [
            'user' => $user,
            'token' => $token,
        ];

        return $this->apiResponse('200', 'login successfully', '', $data);
    }
}
