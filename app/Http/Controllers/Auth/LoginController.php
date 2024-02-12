<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function index(LoginRequest $request)
    {
        try {
            $credentials = $request->all();
            echo $credentials['email']."\n";
            echo $credentials['password']."\n";
            echo \Hash::make($credentials['password'])."\n";
            if (!Auth::attempt($credentials)) {
                return response()->json([
                    'message' => 'Usuário ou senha inválidos'
                ], 400);
            }
            $token = $request->user()->createToken(env('API_CREATE_TOKEN'));

            return ['token' => $token->plainTextToken];
        } catch(\Exception $e) {
            Log::critical($e->getMessage());
            Log::critical($e->getTraceAsString());
        }
    }
}
