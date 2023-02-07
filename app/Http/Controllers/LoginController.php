<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request){
        $validasi = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($validasi)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->regenerateToken();
        $request->session()->invalidate();
        return redirect('/login');
    }
}
