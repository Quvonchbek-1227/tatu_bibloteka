<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BookCategory;

class BookCategoryCantroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = BookCategory::all();
        return view('admin.all_category',[
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create.create_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'category' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $category = BookCategory::create([
            'category' => $validator['category'],
            'description' => $validator['description'],
        ]);
        return redirect()->back();
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
        $category = BookCategory::find($id);
        return view('admin.edit.edit-category',
            ['category' => $category]);
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

        $validator = $request->validate([
            'category' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        $category = BookCategory::find($id);
        
        $category->update([
            'category' => $validator['category'],
            'description' => $validator['description'],
        ]);

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        
        try {
            BookCategory::find($id)->delete();
            return redirect()->back();
        } catch (Exception $e) {
            return $e;
        }
    }
}
