<?php

namespace App\Http\Controllers;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\support\Facades\Auth;

class DashbordController extends Controller
{
   public function dashBord()
    {
      
       //$profile=User::all();
       //return view('dashbord')->with('profile',$profile);
       return view('dashbord');
    }
    
    public function profile($uname)
    {
    
       $profiles=User::where('name',$uname)->get();
     
       return view('myself')->with('profiles',$profiles);
    }
    
    public function flot()
    {
        return view('flot');
    }
    
    public function morris()
    {
        return view('morris');
    }
    
    public function allUser()
    {
       $profiles=User::all();
       return view('alluser')->with('profiles',$profiles);
       
    }
}
