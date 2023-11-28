<?php

namespace App\Http\Middleware;

use Closure;
use App\Services\ACLService;
use Illuminate\Http\Request;

class CheckACL
{
    protected $aclService;

    public function __construct(ACLService $aclService)
    {
        $this->aclService = $aclService;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $resource, $action)
    {
        $user = $request->user();

        if (!$this->aclService->checkACL($user->level, $user->id, $resource, $action)) {
            return response()->json(['error' => true, 'message' => trans('validation.unauthorized')], 403);
        }

        return $next($request);
    }
}
