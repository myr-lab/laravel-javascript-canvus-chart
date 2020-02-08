<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
       $posts = Post::latest()->get();

       return view('home',compact('posts'));
    }

    public function cat()
    {
        $parentCategories = \App\Category::where('parent_id',0)->get();

        return view('cat', compact('parentCategories'));
    }
}
