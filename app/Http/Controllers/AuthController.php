<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if (auth()->user()) {
            return redirect()->intended('/dashboard');
        }

        return view('auth.index', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $message = [
            'required' => ':attribute harus diisi!',
            'email' => ':attribute tidak valid!',
        ];

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], $message);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/auth')->with('success', 'Logout Successfully!');
    }
}
