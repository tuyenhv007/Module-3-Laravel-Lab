<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
        //lay thong tin dang nhap tu request duoc gui len tu trinh duyet
        $username = $request->username;
        $password = $request->password;

        // Kiem tra thong tin dang nhap
        if ($username == 'admin' && $password == '123456') {

            // Neu thong tin dang nhap chinh xac, Tao mot Session luu tru trang thai dang nhap
            $request->session()->push('login', true);

            // Di den route show.blog de chuyen huong nguoi dung den trang blog
            return redirect()->route('show.blog');
        }
        // Neu thong tin dang nhap khong chinh xac, gan thong bao vao Session
        $message = 'Đăng nhập không thành công. Tên người dùng hoặc mật khẩu không đúng';
        $request->session()->flash('login-fail', $message);

        // Quay tro lai trang dang nhap
        return view('user.login');
    }
}
