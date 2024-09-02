<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Mengecek apakah admin sudah login
        if (!Auth::check()) {
            return redirect('/login')->withErrors(['message' => 'Anda harus login sebagai admin untuk mengakses halaman ini.']);
        }
        return $next($request);
    }
}
