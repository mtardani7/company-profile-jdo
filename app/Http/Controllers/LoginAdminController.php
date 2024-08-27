<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
