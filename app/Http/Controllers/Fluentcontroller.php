<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Str;

class Fluentcontroller extends Controller
{
    public function index()
    {
        echo '<h1>Fluent string</h1>';
        //after sentence displayed
        $slice = str::of('welcome back')->after('hello stranger');
        echo $slice . '<br>';
        //before 
        $cake = str::of('App\Http\Controllers\Controller')->afterLast('\\');
        echo $cake . '<br>';
        //append
        $pie = str::of('Hello')->append('World');
        echo $pie . '<br>';
        //lower case
        $small = str::of('LARAVEL')->lower();
        echo $small . '<br>';
        //replace
        $rep = str::of('laravel 0.0')->replace('0.0','8.0');
        echo $rep . '<br>';
        //title
        $title = str::of('laravel is good')->title();
        echo $title . '<br>';
        //slug
        $slug = str::of('laravel is as frame work')->slug('-');
        echo $slug . '<br>';
        //substr
        $sub = str::of('laravel is good')->substr('8','5');
        echo $sub. '<br>';
        
        
        
    }
}
