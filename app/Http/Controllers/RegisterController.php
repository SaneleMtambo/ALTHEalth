<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\User_role;





class RegisterController extends Controller
{
    


    protected $redirectTo = '/home';

    protected function create(array $data)
    {
        $MobjectUser = new User () ; 
        $MobjectUser->name = $data['name']; 
        $MobjectUser->email = $data['email']; 
        $MobjectUser ->user_role = $data['user_role'];
        $MobjectUser ->password = Hash::make($data['password']);
        $MobjectUser ->user_role =$data['user_role'];
 
        $MobjectUser->save();
            
        $UserRole  = new  User_role() ; 
        $UserRole->user_id= $MobjectUser->id;
        $UserRole->name=$data['user_role'];
        $UserRole->save();
           
    }

}
