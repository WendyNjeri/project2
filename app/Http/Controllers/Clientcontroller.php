<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Clientcontroller extends Controller
{
    public function getallposts()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }
//didnt
    public function getpostbyid($id)
    {
        $post = Http::get('https://jsonplaceholder.typicode.com/posts'.$id);
        return $post->json();
    }
//worked
    public function addpost()
    {
        $post = Http::post('https://jsonplaceholder.typicode.com/posts',[
            'userid' => 1,
            'title' => 'new post title',
            'body' => 'new post description'
        ]);
        return $post->json();
    }

    public function updatepost()
    {
        $response = Http::put('https://jsonplaceholder.typicode.com/posts/1',[
            'title' => 'updated title',
            'body' => 'update description'
        ]);
        return $response->json();
    }

    public function deletepost($id)
    {
        $response = Http::put('https://jsonplaceholder.typicode.com/posts'.$id);
        return $response->json();
    }
}
