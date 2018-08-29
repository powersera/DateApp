@extends('main_layout')

@section('section')
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-6">
                @if ($user->hasRole('admin') || $user->hasRole('superAdmin'))
                    <h2><a href="{{route('adminPage')}}">Admin Page</a></h2>
                @endif
            </div>
            @if ($user->hasRole('superAdmin'))
            <div class="col-sm-6">
                    <h2><a href="{{route('superAdminPage')}}">Super Admin Page</a></h2>
            </div>
            @endif

        </div>
        <div class="row">
            <div class="col-sm-12 text-center user-box">
                <h1>User Section</h1>
                <h2>Hello, {{$user->name}}</h2>
                <h3>This section visible for users</h3>
            </div>
        </div>
    </div>
@endsection