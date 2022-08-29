<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route:: get('/users/(name)',function($name)
{
    return "hi user";
});

//accepts parameters
Route:: get('/users/(name)',function($name)
{
    return 'hi'.$name;
});

//can check using postman
//get 127.0.0.1:8000/api/users
//absolute param
Route:: get('/users/{name?}',function($name = null)
{
    return 'hi'.$name;
})->where('name','[a-zA-Z]');//accepts characters only

Route:: get('/products/{id?}',function($id = null)
{
    return 'product ID: '.$id;
})->where('id','[0-9]+');//accepts numerical only

//multiple sst routes
Route::match(['get','post'],'/students',function(Request $req)
{
    return 'student'.$req->method();
});

//all sttp routes
Route :: any('/posts',function(Request $req){
    return 'student'.$req->method();
});



