<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //
   /*  function getUser(){
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
        
    } */
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
        print_r($request->skill);
        echo "<br>";
        echo $request->gender;
        echo "<br>";
        echo $request->age;
        echo "<br>";
        echo $request->city;

    }
}