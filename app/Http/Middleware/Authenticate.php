<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class Authenticate extends Middleware
{
    protected $guards;

    public function handle($request, Closure $next, ...$guards)
    {
        $this->guards = $guards;

        return parent::handle($request, $next, ...$guards);
    }

    protected function redirectTo(Request $request): ?string
    {
        if (!$request->expectsJson()) {
            if (Arr::first($this->guards) == 'web') {
                return route('login');
            } else if (Arr::first($this->guards) == 'user') {
                return route('loginUser');
            }

            return null;
        }
    }
}
