<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function getUser(){
        $name="Sharjeel Khan";
        $users=['Sharjeel','Hussnain','Ahsan'];
        return view('home',["username"=>$name],["users"=>$users]);
        
    }
    function aboutUser($name){
        return $name;
    }

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

    //route grouping with prefix
    function show(){
        return "Student show successfully";
    }
    function add(){
        return "Student added successfully";
    }
    function delete(){
        return "Student deleted successfully";
    }
     
    //database data fetch
    function user (){
        $users = DB::select('select * from users');
        return view('user',['data'=>$users]);

    }

}
