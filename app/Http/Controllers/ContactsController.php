<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index(){
        return view('user.contact');
    }
    public function message(Request $request){
        return $request;
    }
}
