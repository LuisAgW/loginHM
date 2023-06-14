<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|regex:/^[\pL\s]+$/u|max:40',
            'password' => 'required|regex:/^(?=.*[A-Z])(?=.*[!@#$%^&*])[A-Za-z0-9!@#$%^&*]+$/',
        ]);

        //Redirigiremos al usuario a la vista de "Mi perfil" con el nombre de usuario.

        $username = $request->input('username');
        //return redirect()->route('profile')->with('username', $username);
        return redirect()->route('profile')->with('username', $request->input('username'));
    }

    public function showProfile()
    {
        $username = session('username');
        return view('profile', compact('username'));
    }
    

}
