<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\AdminPassword;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Book;

class BasbetController extends Controller
{
    public function book_count(){
        $books = Book::all();
        return count($books);
    }
}
