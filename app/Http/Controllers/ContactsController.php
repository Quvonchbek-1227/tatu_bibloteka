<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactsController extends Controller
{
    public function index(){
        return view('user.contact');
    }

    public function message(Request $request){
        //Viewden kelgen xabardi bazag`a saqlaw
        $validator = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);


        $message = Contact::create([
            'name' => $validator['name'],
            'email' => $validator['email'],
            'subject' => $validator['subject'],
            'message' => $validator['message'],
        ]);

        return back()->with(['sucess' => 'Xabar Bazag`a Saqlandi!']);
    }

    public function get_messages(){
        $messages = Contact::all();
        return view('admin.all_messages',['messages' => $messages]);
    }

    public function delete_message($id){
        $message = Contact::find($id);

        if ($message) {
            $message->delete();
            return back();
        }else{
            return 404;
        }
    }
}
