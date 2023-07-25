@extends('dashboard.layouts.main')

@section('content')
    <style>
        .icon {
            width: 80px;
            height: 80px;
        }
    </style>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome Back, {{ auth()->user()->name }}</h1>
    </div>
    <div class="row">
        <div class="col-lg-4 ">
            <div class="card-data books">
                <div class="row ">
                    <div class="col-6"><span class="icon" data-feather="file-text"></span></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-name">My Post</div>
                        <div class="card-count">{{ $post }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
