<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        return view('login');
    }

    public function register(Request $request)
    {
        return view('register');
    }

    public function register_action(Request $request)
    {
        // dd($request);
        /***************************************************
                    REGRAS PARA REGISTRO:
        - Todos os campos são REQUIRED
        - Email Único
        - Password de no mínimo 6 caracteres
        ***************************************************/
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $data = $request->only('name', 'email', 'password');

        return redirect(route('login'));
    }
}
