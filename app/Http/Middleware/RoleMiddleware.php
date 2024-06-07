<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check() || !$request->user()->hasRole($role)) {
            // Если пользователь не авторизован или у него нет требуемой роли,
            // перенаправьте его на страницу входа или другую страницу.
            return redirect()->route('authorization');
        }

        return $next($request);
    }
}
