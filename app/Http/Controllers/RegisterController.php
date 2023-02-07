<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register', [
            'title' => 'register'
        ]);
    }

    public function create(Request $request){
        $validasi = $request->validate([
            'nik' => 'required|integer',
            'nama' => 'required|max:100',
            'username' => 'required|max:100|unique:users',
            'password' => 'required|max:100',
            'telp' => 'required|max:20',
        ]);

        $validasi['password'] = bcrypt($validasi['password']);

        User::create($validasi);
        return redirect('/login');
    }
}
