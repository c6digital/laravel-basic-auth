<?php

namespace C6Digital\BasicAuth\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class BasicAuth
{
    public function handle(Request $request, Closure $next)
    {
        if (! config('basic-auth.enabled')) {
            return $next($request);
        }

        $user = $request->getUser();
        $password = $request->getPassword();

        if (
            ! $user ||
            ! $password ||
            $user !== config('basic-auth.username') ||
            $password !== config('basic-auth.password')
        ) {
            throw new UnauthorizedHttpException('Basic', 'Invalid credentials.');
        }

        return $next($request);
    }
}
