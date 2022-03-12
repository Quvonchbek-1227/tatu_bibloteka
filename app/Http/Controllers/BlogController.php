<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;


class BlogController extends Controller
{
    public function index(){

        $blogs = Blog::paginate(7);
        return view('user.blog',[
            'blogs' => $blogs
        ]);
    }

    public function show($id){
        $blog = Blog::find($id);
        // return $blog;
        return view('user.blog-single',[
            'blog' => $blog
        ]);
    }
}
