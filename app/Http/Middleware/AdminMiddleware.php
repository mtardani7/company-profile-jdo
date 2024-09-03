<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Mengecek apakah admin sudah login
        if (!Auth::check()) {
            return redirect('/admin')->withErrors(['message' => 'Anda harus login sebagai admin untuk mengakses halaman ini.']);
        }
        return $next($request);
    }
}
