<?php

namespace App\Http\Middleware\Roles;

use App\Models\Role;
use App\Repository\Users;
use Closure;
use Illuminate\Http\Request;

class HaveAccessToUsers
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ( ! Users::hasRole(Role::ROLE_ACCESS_TYPE_USERS)) {
            return redirect()->route('dashboard');
        }

        return $next($request);
    }
}
