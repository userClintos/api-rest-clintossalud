<?php

namespace App\Http\Middleware;

use Closure;

class ApiAuthMiddleware
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
        $token      = $request->header('Authorization');
        $jwtAuth    = new \JwtAuth();
        $chekcToken = $jwtAuth->checkToken($token);

        if ($chekcToken) {
            return $next($request);
        } else {
            $data = array(
                'status'  => 'Error',
                'code'    => 404,
                'message' => 'El usuario no estpa identificado'
            );

            return response()->json($data, $data['code']);
        }

    }
}
