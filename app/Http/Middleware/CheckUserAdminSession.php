<?php
/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 02/05/2019
 * Time: 11:18
 */

namespace App\Http\Middleware;

use Closure;

class CheckUserAdminSession
{
    /**
     * @param $request
     * @param Closure $next
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->session()->exists('useradmin')) {
            return redirect()->route('admin.auth.login');
        }
        return $next($request);
    }
}
