<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthenticateMiddleware
{
    public function handle($request, Closure $next){
        if (!Auth::check()) {
            return redirect('/sesi')->with('error', 'Anda harus login untuk mengakses halaman ini');
        }
        return $next($request);
    }
}
