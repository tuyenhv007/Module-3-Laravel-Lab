<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function showBlog(Request $request)
    {
        // Kiem tra Session login co ton tai hay khong
        if ($request->session()->has('login') && $request->session()->get('login')) {

            // Session ton tai va co gia tri la true, chuyen huong nguoi dung den trang blog
            return view('blog');
        }
        // Session khong ton tai, nguoi dung chua dang nhap
        // Gan mot thong bao vao Session not-login
        $message = 'Bạn chưa đăng nhập';
        $request->session()->flash('not-login', $message);

        // Chuyen huong ve trang dang nhap
        return view('user.login');
    }
}
