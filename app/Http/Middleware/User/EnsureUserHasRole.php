<?php

namespace App\Http\Middleware\User;

use App\Repository\UsersRepository;
use Closure;

class EnsureUserHasRole
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string $role
     * @return mixed
     */
    public function handle($request, Closure $next, string $role)
    {
        if (!UsersRepository::hasRole($role)) {
            return redirect()->route('dashboard');
        }

        return $next($request);
    }
}
