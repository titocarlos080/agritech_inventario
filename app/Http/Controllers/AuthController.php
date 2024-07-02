<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController
{
    //
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if ($credentials) {
            return redirect()->intended('admin/dashboard');
        }

        return back()->withErrors([
            'email' => 'Ocurrio un error.',
        ]);
    }

    public function logout(){
    return view("welcome");
        
    }

}
