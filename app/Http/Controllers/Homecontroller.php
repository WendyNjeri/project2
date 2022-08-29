<?php

namespace App\Http\Controllers;

use Illuminate\Cache\NullStore;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index($name = null)
    {
        return 'hi from home controller Name: '. $name;
    }
}
