<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckProfile
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->role) {
            if ($request->user()->role->name == "Staff") {
                //check if profile is completed
                if ($request->user()->staff_profile->employment_status == "Open") {
                    return redirect()->route('users.staff.update_staff_profile');
                } elseif ($request->user()->staff_profile->employment_status == "Pending") {
                } else {
                }
            }
        }
        return $next($request);
    }
}
