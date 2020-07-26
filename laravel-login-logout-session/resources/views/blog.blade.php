@extends('layouts.master')
@section('title', 'Blog')

@section('content')
    <div class="title m-b-md">
        Raising the bar Blog
    </div>
    <a href="{{ route('user.logout') }}">
        <button class="btn btn-outline-primary">Đăng xuất</button>
    </a>
    <hr>
@endsection
