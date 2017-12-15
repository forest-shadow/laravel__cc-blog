<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(Post $post)
    {
        return view('home')->with([
            'posts' => $post->latestFirst()->get()
        ]);
    }

    public function tagged(Tag $tag)
    {
        return view('posts.tag-posts')->with([
            'posts' => $tag->posts()->latestFirst()->get(),
            'tag'   => $tag
        ]);
    }
}
