<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response) $next
     * @return Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user has the admin role
        if ($request->user() == null || $request->user()->role_id != 1) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
