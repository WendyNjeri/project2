<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create()
    {
        
    }

    public function index()
    {
        return view('login');
    }

    public function loginsubmit(Request $request)
    {
        //return "Form submitted";
        //return $request->all();

        $email = $request->input('email');
        $password = $request->input('password');

        return 'Email : '.$email . 'Password : ' .$password; 

        //validation
        $validateddata = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:12'
        ]);
    }


}
