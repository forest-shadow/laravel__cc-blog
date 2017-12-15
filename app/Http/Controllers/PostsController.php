<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(Post $post)
    {
        return view('home')->with([
            'posts' => $post->latestFirst()->get()
        ]);
    }
}
