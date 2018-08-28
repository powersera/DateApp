<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;

class SuperAdminMiddleware
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
        if ($request->user()->hasRole(User::ROLE_SUPER_ADMIN))
        {
            return $next($request);
        }

        return redirect()->route('start');
    }
}
