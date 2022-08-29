<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function index(Request $request)
    {
        //pass variable
        /*
        $name = 'wendy';
        $users = array(
            "name" => "kkk",
            "age" => "kkk",
            "id" => "kkk",
            "email" => "kkk"
        );
        return view('user',compact('name','users'));
        */
        //http requests
        //return $request->method(); returns get
        //return $request->path(); //returns the user path
        //return $request->url(); //http://localhost:8000/user
        return $request->fullurl(); //http://localhost:8000/user?age=12&name=smith


    }
}
