<?php

use App\Http\Controllers\Clientcontroller;
use App\Http\Controllers\Fluentcontroller;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Productcontroller;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\Usercontroller;
use Facade\FlareClient\Http\Client;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//welcome orgn index

/*
Route::get('/', function () {
    return view('welcome');
});
*/

//product controller
Route::get('/',[Productcontroller::class,'index'])->name('product.index');

Route::get('/home',[Homecontroller::class,'index'])->name('home.index');

//pass param
Route::get('/home/{name}',[Homecontroller::class,'index'])->name('home.index');

//oboslete
Route::get('/home/{name?}',[Homecontroller::class,'index'])->name('home.index');

//views
Route::get('/user',function()
{
    return view('user');
});
//controller to render view
Route::get('/user',[Usercontroller::class,'index'])-> name('user.index');

//http client from controller
Route::get('/posts',[Clientcontroller::class,'getallposts'])->name('posts.getallposts');
//
Route::get('/posts/{id}',[Clientcontroller::class,'getpostbyid'])->name('posts.getpostbyid');
//
Route::get('add-post',[Clientcontroller::class,'addpost'])->name('posts.addpost');
//
Route::get('/update-post',[Clientcontroller::class,'updatepost'])->name('posts.updatepost');
//
Route::get('/delete-post/{id}',[Clientcontroller::class,'deletepost'])->name('posts.deleteposts');
//fluent 
Route::get('/fluent-string',[Fluentcontroller::class,'index'])->name('fluent.index');
//login
Route::get('/login',[LoginController::class,'index'])->name('login.index')->middleware('checkuser');
//submit
Route::post('/login',[LoginController::class,'loginsubmit'])->name('login.submit');
//getsession
Route::get('/session',[SesionController::class,'getsessiondata'])->name('get.session');
//storesession
Route::get('/session/set',[SesionController::class,'storesessiondata'])->name('store.session');
//deletesession
Route::get('/session/delete',[SesionController::class,'deletesessiondata'])->name('delete.session');
//db
Route::get('/posts',[PostController::class,'getallposts'])->name('posts.getall');
//addpost
Route::get('/add-post',[PostController::class,'addpost'])->name('add.post');
//
Route::post('/add-post',[PostController::class,'addpostsubmit'])->name('add.postsubmit');
//
Route::get('/post/{id}',[PostController::class,'getpostbyid'])->name('post.getid');