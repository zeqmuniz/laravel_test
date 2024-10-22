<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //
  
    function UserAbout(){
        return view('about');
    }
    function UserHome(){
        return view('home');
        
    }
    function UserForm(){
        return view('user-form');
        
    }
    function addUser(Request $request){
        

    }
}