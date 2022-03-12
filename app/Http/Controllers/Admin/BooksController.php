<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BookCategory;
use App\Models\Book;
use App\Models\BookImg;
use Illuminate\Support\Facades\URL;


class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function index()
    {
        $books = Book::select('books.*','books.id as id_book','books.description as book_desc',
            'book_imgs.*',
            'book_imgs.id as id_book_img',
            'book_categories.*',
            'book_categories.description as bk_desc'
        )
        ->join('book_imgs','books.id','=','book_imgs.id_book')
        ->join('book_categories','books.id_category','=','book_categories.id')
        ->get();
        // return $books;
        return view('admin.all_books',[
            'books' => $books,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categs = BookCategory::all();
        if (count($categs) > 0) {
            return view('admin.create.create_book',[
                'categs' => $categs
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatior = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'img' => 'required|image|mimes:jpg,png,jpeg',
            'made' => 'required|date',
            'id_category' => 'required|integer',
            'author' => 'required|string',
        ]);

        $book = Book::create([
            'name' => $validatior['name'],
            'description' => $validatior['description'],
            'made' =>$validatior['made'],
            'id_category' =>$validatior['id_category'],
            'author' => $validatior['author'],
        ]);

        // return $book;

        $img_name = $validatior['img']->getClientOriginalName();
        $img_new_name = time().'_'.$img_name;
        $img_url = asset('assets/img/book/'.$img_new_name);
        $validatior['img']->move('assets/img/book/',$img_new_name);
        $book_img = BookImg::create([
            'id_book' => $book->id,
            'img' =>$img_url
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
        $book = Book::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book_img = BookImg::where('id_book',$id)->get();
        // return $book_img[0]->img;
        $img = $book_img[0]->img;
        unlink(public_path(explode(URL::to('/'), $img)[1]));
        $book->delete();
        BookImg::where('id_book',$id)->delete();
        return back();
    }
}
