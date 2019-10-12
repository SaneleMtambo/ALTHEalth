<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User_role;
class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
   
        if (Auth::guard($guard)->check())
         {

            if (Auth::check())
         {
          $roles  = User_role::where('user_id' , Auth::id())->first(); 

           if($roles===null)
          {

             return $next($request);
       }

        if($roles->name ==='Super Admin')
        {

             return redirect('/Super-dashboard');
        }

        if($roles->name ==='HCP')
        {

             return redirect('/HCP-dashboard');
        }

        if($roles->name ==='GA')
        {

             return redirect('/GA-dashboard');
        }
        if($roles->name ==='Patient')
        {

             return redirect('/Patient-dashboard');
        }
        elseif ($roles->name ==='Customer') {
            
             return redirect('/Customer-dashboard');
        }


         }
           
        }

        return $next($request);
    }
}
