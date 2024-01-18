<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function login()
    {
        return view('auth.index');
    }

    function check_login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended();
        }

        return back()->withErrors(['message' => 'Pastikan Email dan Password
        sudah benar']);
    }

    function signup(Request $request)
    {
        $password = $request->input('password');
        if ($password !== $request->input('password_confirm')) {
            return back()->withErrors([
                'password_confirm' => 'Password tidak sama'
            ]);
        }

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($password),
        ]);

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            $request->session()->regenerate();
            return redirect()->intended();
        }
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect('/login');
    }
}
