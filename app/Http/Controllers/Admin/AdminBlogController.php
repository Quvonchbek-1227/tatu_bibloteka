<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\URL;

class AdminBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();
        return view('admin.all_blogs',[
            'blogs' => $blog
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create.create_blog');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'img' => 'required|image|mimes:jpg,png,jpeg',
        ]);

        $img_name = $validate['img']->getClientOriginalName();
        $img_new_name = time().'_'.$img_name;
        $img_url = asset('assets/img/blog/'.$img_new_name);
        $validate['img']->move('assets/img/blog',$img_new_name);


        $blog = Blog::create([
            'title' => $validate['title'],
            'content' => $validate['content'],
            'img' => $img_url,
            'date' => date("Y-m-d"),
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.edit.edit-blog',['blog' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $old_img = $blog->img;

        $validator = $request->validate([
            'title' => 'required|string|max:255',
            'img' => 'image|mimes:jpg,png,jpeg,',
            'content' => 'required|string',
        ]);

        $blog = Blog::find($id);
        $old_date = $blog->date;
        if (isset($validator['img'])) {
            $img_name = $validator['img']->getClientOriginalName();
            $img_new_name = time().'_'.$img_name;
            $path = public_path('assets/img/blog/');
            $img_url = asset('assets/img/blog/'.$img_new_name);
            unlink(public_path(explode(URL::to('/'),$old_img)[1]));
            $blog->update([
                'title' => $validator['title'],
                'content' => $validator['content'],
                'img' => $img_url,
                'date' => $old_date
            ]);
            $validator['img']->move($path,$img_new_name);
            return back();

        }else{

            $blog->update([
                'title' => $validator['title'],
                'content' => $validator['content'],
                'img' => $old_img,
                'date' => $old_date
            ]);

            return back();

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        if ($blog) {
            $blog->delete();
            $img = $blog->img;
            unlink(public_path(explode(URL::to('/'),$img)[1]));
            return back();
        }else{
            return 404;
        }
    }
}
