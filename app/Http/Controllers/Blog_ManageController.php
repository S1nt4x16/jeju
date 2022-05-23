<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Blog_ManageController extends Controller
{
    public function index()
    {
        $blog_manage = DB::table('blogs')
            ->select("id", "title", "slug", "author", "created_at")
            ->get();
        return view(
            'blog_manage_crud.index',
            [
                "title" => "Blog_Manage",
                "blog" => $blog_manage
            ]
        );
    }

    public function create()
    {
        return view('blog_manage_crud.create', [
            "title" => "Blog_Manage-Create"
        ]);
    }

    public function store(Request $request)
    {
        $title = $request->input('title');
        $slug = $request->input('slug');
        $author = $request->input('author');
        $body = $request->input('body');

        DB::table('blogs')
        ->insert([
            'title'=> $title,
            'slug' => $slug,
            'author' => $author,
            'body' => $body,
            'created_at' => now()
        ]);

        return redirect()->route('blog_manage');
          
    }

    public function edit($id)
    {
        $blog_manage = DB::table('blogs')
            ->select("title", "slug", "author", "body")
            ->where('id',$id)
            ->first();
        return view('blog_manage_crud.edit', [
            "title" => "Blog_Manage-Edit",
            "bm" => $blog_manage,
            "id" => $id
        ]);
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $title = $request->input('title');
        $slug = $request->input('slug');
        $author = $request->input('author');
        $body = $request->input('body');

        DB::table('blogs')
        ->where('id', $id)
        ->update([
            'title'=> $title,
            'slug' => $slug,
            'author' => $author,
            'body' => $body,
            'created_at' => now()
        ]);

        return redirect()->route('blog_manage');
          
    }

    public function delete($id) 
    {
        DB::table('blogs')->where('id', $id)->delete();

        return redirect()->route('blog_manage');
    }
}
