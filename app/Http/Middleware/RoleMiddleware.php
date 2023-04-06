<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ... $roles)
    {
        if (!Auth::check()) return redirect('login');

        $user = Auth::user();

        foreach ($roles as $role) {
            if ($user->isRole($role)) return $next($request);
        }

        return redirect()->route('front.index');
    }
}
