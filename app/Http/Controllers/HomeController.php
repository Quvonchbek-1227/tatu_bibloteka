<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class HomeController extends Controller
{
    public function index(){

        $books = Book::select('books.*','books.id as id_book','books.description as book_desc',
            'book_imgs.*',
            'book_imgs.id as id_book_img',
            'book_categories.*',
            'book_categories.description as bk_desc'
        )
        ->join('book_imgs','books.id','=','book_imgs.id_book')
        ->join('book_categories','books.id_category','=','book_categories.id')
        ->take(8)
        ->get();

        return view('user.index',[
            'books' => $books
        ]);

    }
    public function show_book($id){
        $book = Book::select('books.*','books.id as id_book','books.description as book_desc',
            'book_imgs.*',
            'book_imgs.id as id_book_img',
            'book_categories.*',
            'book_categories.description as bk_desc'
        )
        ->join('book_imgs','books.id','=','book_imgs.id_book')
        ->join('book_categories','books.id_category','=','book_categories.id')
        ->where('id_book',$id)->first();
        // return $book;
        return view('user.book-details',[
            'book' => $book
        ]);


    }
    public function about(){
        return view('user.about');
    }
}
