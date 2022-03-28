<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminPassword;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home');
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
}
