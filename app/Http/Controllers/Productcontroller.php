<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Productcontroller extends Controller
{
    public function index()
    {
        //create an array
        $fruits = array(
            "mango",
            "orange", "banana" , "apple"
        );
        return view('welcome',compact('fruits'));
    }
}
