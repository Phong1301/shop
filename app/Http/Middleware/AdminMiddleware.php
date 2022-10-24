<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
            if(Auth::user()->role_as == '1'){
                return redirect('dashboard')->with('success', 'Welcome to your dashboard');
            }elseif(Auth::user()->role_as == '0'){
                return redirect('/')->with('success', 'Logged in successfully');
            }
        }
        
    }

