<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminAuthController extends Controller
{
    public function login(){
        $title = 'Login';
        $user = Auth::user();

        if($user){
            return redirect()->route('admin.home');
        }

        return view('admin.auth.login', [
            'title' => $title
        ]);
    }

    public function authenticate(Request $request){
        $this->validate($request,
        [
            'email' => 'required',
            'password' => 'required',
        ]);

        $credential = $request->only('email', 'password');

        if(Auth::attempt($credential)){
            return redirect()->route('admin.home');
        }

        return redirect()->back()->withInput()->withErrors(['failed' => 'Email atau password anda salah.']);
    }

    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect()->route('admin.logout');
    }
}
