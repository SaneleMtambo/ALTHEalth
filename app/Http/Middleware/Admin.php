<?php

namespace App\Http\Middleware;
use Auth; 
use Closure;
use User_role; 
class Admin
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
      
         $getOjectRole = User_role::where('user_id' , '=' ,Auth()
            ->user()->id)
            ->first() ; 
        if($getOjectRole->name =='HCP'){

       return redirect('home')->with('error','You have not admin access');

        }elseif($getOjectRole->name =='secretary')

        return redirect('home')->with('error','You have not admin access');
        

}
}