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
    public function about_us()
    {
        return view('Admin.about_us');
    }
    public function product()
    {
        return view('Admin.product_admin');
    }
    public function address()
    {
        return view('Admin.address');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->to('/home/admin');
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
