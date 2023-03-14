<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\sys\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Roles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    private function checkRole($role)
    {
        switch ($role) {
            case 'manager':
                return Role::manager;
            case 'accounting':
                return Role::accounting;
            case 'purchasing':
                return Role::purchasing;
            case 'spv':
                return Role::spv;
            case 'qc':
                return Role::qc;
            case 'admin':
                return Role::admin;
        }
        return false;
    }

    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        foreach ($roles as $role) {
            if (Auth::user()->role_id == $this->checkRole($role)) {
                return $next($request);
            }
        }
        abort(403);
    }
}
