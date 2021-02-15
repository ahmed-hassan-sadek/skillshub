<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class IsStudent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $studentRole = Role::where('name' , 'student')->first();
        if (Auth::user()->role_id !== $studentRole->id ) {
            return redirect( url('/') );
        }
        return $next($request);
    }
}
