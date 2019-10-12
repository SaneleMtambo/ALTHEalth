<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User_role;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
   // protected $redirectTo = '/';
   public function redirectTo(){
        
    // User role


    $roles  = User_role::where('user_id' , Auth::id())->first(); 

    // Check user role
    switch ($roles) {
        case 'Super Admin':
                return '/dashboard';
            break;
        case 'HCP':
                return '/HCP-dashboard';
            break;
             case 'GA':
                return '/GA-dashboard';
            break;
            case 'Patient':
            return '/Patient-dashboard';
        break;
        case 'Customer':
        return '/Customer-dashboard';
    break;
  
        default:
                return '/login'; 
            break;
    }
}

  

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }




}
