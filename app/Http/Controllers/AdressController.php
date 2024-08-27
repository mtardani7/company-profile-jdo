<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdressController extends Controller
{
    public function address()
    {
        return view('Address.address'); 
    }
}
