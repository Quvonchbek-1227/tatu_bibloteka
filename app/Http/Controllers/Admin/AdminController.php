<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminPassword;
use App\Models\Book;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function index(){
        $books = Book::all();
        $countof_book =  count($books);
        return view('admin.home',[
            "count_book" => $countof_book
        ]);
    }

    public function check_admin(Request $request){
        $admin_pass = AdminPassword::first();
        // return $request;
        $db_key = $admin_pass->kalit;
        $db_value = $admin_pass->qiymat;
        $key = $request->key;
        $value = $request->value;

        if ($db_key === $key && $db_value === $value) {
            session(['admin' => 'login']);
            return redirect()->route('admin.home');
        }else{
            return view('admin.login',[
                'error' => 'Kalit Yoki Qiymat Noto`g`ri Kiritildi!'
            ]);
        }

    }

    public function login_admin(){
        return view('admin.login');
    }

    public function logout(){
        session()->forget('admin');
        return redirect()->route('home');
    }

    public function profile(Request $request){
        $user = $request->user();
        $role = Role::find($user->role_id);
        $roles =  Role::all();
        return view('admin.profile',[
            'user' => $user,
            'role' => $role,
            'roles' => $roles
        ]);
    }

    public function update_user(Request $request,$id){
        $validator = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|string|max:50',
            'id_role' => 'required|integer',
        ]);

        $user = User::find($id);

        if ($request->old_pass) {
            
            $old_pass = $user->password;
            $input_old_pass = bcrypt($request->old_pass);
            return $input_old_pass;
            if (Hash::check($old_pass,$input_old_pass)) {
                return 'tog`ri';
            }else{
                return 'qate';
            }

        }else{
            return 'joq';
        }

    }
}
