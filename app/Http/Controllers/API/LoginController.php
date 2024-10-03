<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class LoginController extends Controller
{
    
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'access_token' => $token,
                'token_type' => 'Bearer',
            ]);
        }

        return response()->json(['message' => 'Unauthorized'], 401);
    }
}

//{{
  //  "access_token": "2|jWlwRifg60JhwQFauCrQjwbkv2lCzUiPkwFeU4ZX2f5f8802",
   // "token_type": "Bearer"
//}
 //   "access_token": "1|bIBwoAgH7dimUXQ5BosvURldB3nlSur7FUTPOH2m95888231",
  //  "token_type": "Bearer"
//}