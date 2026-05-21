<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }

        if (!auth()->user()->is_active) {
            Auth::logout();
            return redirect()->route('admin.login')->withErrors(['email' => 'Your account has been disabled.']);
        }

        return $next($request);
    }
}