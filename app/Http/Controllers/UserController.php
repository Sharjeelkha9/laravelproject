<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser(){
        $name="Sharjeel Khan";
        $users=['Sharjeel','Hussnain','Ahsan'];
        return view('home',["username"=>$name],["users"=>$users]);
        
    }
    // function aboutUser($name){
    //     return view(view: 'about',['user'=>$name]);
    // }

    function addUser(Request $request){

        $request->validate([
            'name'=>'required | min:3 |max:20',
            'email'=>'required |email',
            'city'=>'required | uppercase',
            'skill'=>'required',

        ],[
            'city.uppercase'=>'City name must be in uppercase'

        ]
    
    
    );

        return $request;




        // echo "User Name is  $request->name";
        // echo "<br>";
        // echo "User Email is  $request->email";
        // echo "<br>";
        // echo "User City is  $request->city";
    }

    // function addUser(Request $request){
    //     // return $request;
    //      print_r($request->skill) ;
    //      echo "<br>";
    //      echo "User Gender  $request->gender";
    //      echo "<br>";
    //      echo "User City  $request->city";
    //      echo "<br>";
    //      echo "User Age  $request->age";
    // }
}
