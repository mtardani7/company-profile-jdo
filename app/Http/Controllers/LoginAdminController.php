<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{
    public function index()
    {
        return view('Admin.login_admin');
    }
    public function admin()
    {
        return view('Admin.home_admin');
    }
    public function home(){
        return view('Admin.home_admin');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->to('/home');
        }
       
        return redirect()->back()->withInput($request->only('login'))->withErrors(['password' => 'Password salah']);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
