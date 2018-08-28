<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;

/**
 * Class AdminMiddleware
 * @package App\Http\Middleware
 */
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
        if ($request->user()->hasRole(User::ROLE_ADMIN) || $request->user()->hasRole(User::ROLE_SUPER_ADMIN))
        {
            return $next($request);
        }

        return redirect()->route('start');
    }
}
