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
        $request->validate([
            'username'=>'required | min:3 | max:15',
            'email'=>'required | email',
            'city'=>'required',
            'skills'=>'required'
        ],[
            'username.required'=>'O nome não pode estar vazio',
            'username.min'=>'o nome deve ter no mínimo 3 caracteres',
            'username.max'=>'o nome deve ter no máximo 15 caracteres',
            'email.email'=>'este não é um email válido'
        ]);
        return $request;
    }
}