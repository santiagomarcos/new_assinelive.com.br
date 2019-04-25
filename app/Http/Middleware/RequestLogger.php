<?php
/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 24/04/2019
 * Time: 18:14
 */

namespace App\Http\Middleware;


use App\Models\RequestLog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Closure;

class RequestLogger
{
    /**
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        $requestTime = Carbon::createFromTimestamp($_SERVER['REQUEST_TIME']);
        $partner = getPartner($request->code);
        if ($response->exception != null) {
            $request = RequestLog::create([
                'user' => ($partner['code'] == null) ? null:$partner['code'],
                'url' => $request->getPathInfo(),
                'method' => $request->method(),
                'user_agent' => $request->userAgent(),
                'response_time' => time() - $requestTime->timestamp,
                'day' => date('l', $requestTime->timestamp),
                'status_code' => ($response->exception->getMessage()),
                'hour' => $requestTime->hour,
                'ip' => $request->ip(),
                'fingerprint' => $request->getLocale(),
            ]);
        } else {
            $request = RequestLog::create([
                'user' => ($partner['code'] == null) ? null:$partner['code'],
                'url' => $request->getPathInfo(),
                'method' => $request->method(),
                'user_agent' => $request->userAgent(),
                'response_time' => time() - $requestTime->timestamp,
                'day' => date('l', $requestTime->timestamp),
                'status_code' => $response->getStatusCode(),
                'hour' => $requestTime->hour,
                'ip' => $request->ip(),
                'fingerprint' => $request->fingerprint(),
            ]);
        }
        return $response;
    }
}
