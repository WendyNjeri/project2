<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function create()
    {
        //
    }

    public function getallposts()
    {
        $posts = db::table('post')->get();
        return view('posts',compact('posts'));
    }
    public function addpost()
    {
        return view('add-post');
    }
    public function addpostsubmit(Request $request)
    {
        db::table('post')->insert([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return back()->with('post_created','post created success');
    }
    public function getpostbyid($id)
    {
        $post = db::table('post')->where('id',$id)->first();
        return view('single-post',compact('post'));
    }
}
