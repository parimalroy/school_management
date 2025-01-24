<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        // echo Hash::make(12345);
        // die;
        return view('auth.login');
    }
    public function forgot()
    {
        return view('auth.forgot');
    }

    public function loginAuth(Request $req)
    {
        $validate = $req->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        // dd($validate);
        if (Auth::attempt($validate)) {
            return redirect()->route('dashboard.home');
        } else {
            return redirect()->route('auth.create')->with('error', "credential is not correct");
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.create');
    }
}