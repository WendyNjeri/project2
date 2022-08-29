<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SesionController extends Controller
{
    public function create()
    {
        //
    }
    public function getsessiondata(Request $request)
    {
        if($request->session()->has('name'))
        {
            echo $request->session()->get('name');
        }
        else
        {
            echo 'no data in the session';
        }
    }

    public function storesessiondata(Request $request)
    {
        $request->session()->put('name','jennie');
        echo 'data has benn added to the session';
    }

    public function deletesessiondata(Request $request)
    {
        $request->session()->forget('name');
        echo 'data has been deleted from the session';
    }
}
