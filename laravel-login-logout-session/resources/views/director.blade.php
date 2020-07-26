@extends('layouts.master')
@section('title', 'Trang đăng nhập')
@section('content')
    <div class="title m-b-md">
        Laravel Session
    </div>

    <div class="links">
        <a href="{{ route('show.login') }}">
            <button class="btn btn btn-outline-primary">Đăng nhập</button>
        </a>
    </div>
@endsection
