@extends('main_layout')

@section('section')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center user-box">
                <h1>User Section</h1>
                <h2>Hello, {{$user->name}}</h2>
                <h3>This section visible for users</h3>
            </div>
        </div>
        <br><br><br><br><br>
        <div class="row">
            <div class="col-sm-12 text-center admin-box">
                @if ($user->hasRole('admin'))
                    <h3>This section visible only for user that got role <h1>{{$user->userRole}}</h1></h3>
                @endif
            </div>
        </div>
    </div>
@endsection