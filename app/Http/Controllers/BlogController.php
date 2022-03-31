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
        $blogs = Blog::paginate(7);


        return view('user.blog-single',[
            'blog' => $blog,
            'blogs' => $blogs
        ]);
    }

    public function search(Request $request){

        $validator = $request->validate([
            'str' => 'required|string|max:10'
        ]);

        $blogs = Blog::all();
        $str = strtolower($validator['str']);
        $result_blogs = array();
        $test = array();

        for ($i=0; $i < count($blogs) ; $i++) {
            $id = strpos(strtolower($blogs[$i]->title), $str);
            array_push($test,$id);
            if (is_int($id)) {
                array_push($result_blogs, $blogs[$i]);
            }
        }
        
        return view('user.searcher',['blogs' => $result_blogs]);

    }
}
