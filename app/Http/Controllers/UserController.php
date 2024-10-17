<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //
    function getUser(){
        //return "Este é o Ezequiel Muniz";
        return view('user');
    }
    function UserAbout($name){
        //return "Olá, aqui é o ". $name;
        return view('about',['name'=>$name]);
    }
    function adminLogin(){
        if (View::exists('admin.login')) {
            return view('admin.login');
        }else {
            return "Esta View não foi encontrada";
        }
        
    }
    function UserHome(){
        return view('home');
        
    }
}
