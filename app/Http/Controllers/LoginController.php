<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function pagelogin(){
        return view('admin.login');
    }

    function authlogin(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::guard('admin')->attempt($credentials)) {
                return redirect('admin.index');
        }else {
            return back()->with('thongbao', 'Đăng nhập thất bại');
        }
    }
}