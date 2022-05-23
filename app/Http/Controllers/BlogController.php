<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $blog_posts =  DB::table('blogs')
            ->select("title", "slug", "author", "body")
            ->get();
        return view('posts', 
        [
            "title" => "Posts",
            "posts" => $blog_posts
        ]);
    }

    public function show($slug) 
    {   
    
        $new_post = DB::table('blogs')
            ->select("title", "slug", "author", "body")
            ->where("slug", $slug)
            ->first();
        return view('post', 
        [
            "title" => "Single Post",
            "post" => $new_post
        ]);

    }
}


