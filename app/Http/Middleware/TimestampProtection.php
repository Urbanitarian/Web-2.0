<?php
namespace App\Http\Middleware;

use \RuntimeException;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TimestampProtection
{
    const TIMESTAMP = 'X-Timestamp';
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$timestamp = $request->header(self::TIMESTAMP)) {
            throw new \RuntimeException('Service blocked! Need to specify request timestamp header');
        }

        if (now()->diffInSeconds(Carbon::parse($timestamp)) > 5) {
            throw new \RuntimeException('Service blocked! Invalid Timestamp Synchronization');
        }

        return $next($request);
    }
}