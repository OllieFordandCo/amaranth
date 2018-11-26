<?php namespace OllieFordandCo\Amaranth\Http\Middleware;

use Closure;

class InstallationAccess
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

        if($request->isMethod('post') && $request->path() == 'install' && !$request->hasCookie('install_access')) {

            $APP_KEY = env('APP_KEY', '');
            if(!empty($APP_KEY) || !$request->filled('key')) {
                $password = $request->input('key');
                if($password == substr($APP_KEY, -7)) {
                    $cookie = cookie(
                        'install_access',
                        $password,
                        600, // 10 days
                        null,
                        null,
                        false,
                        true // HttpOnly
                    );
                    return $next($request)->withCookie($cookie);
                }
            }

        }

        return $next($request);
    }
}