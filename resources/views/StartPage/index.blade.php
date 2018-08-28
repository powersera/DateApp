@extends('main_layout')

@section('section')
    <div class="container-fluid header-screen-wrapper">
        <div class="row">
            <div class="col-sm-12 text-center">
                @guest
                    <div class="col-sm-4 header-center-block login-box">
                        {!! Form::open(['route' => 'login']) !!}
                        @include('StartPage/login_form',['erorrs' => $errors])
                        {!! Form::close() !!}

                        <div class="col-sm-12">
                            @if (session('fail'))
                                <h4 style="color: firebrick">{{ session('fail') }}</h4>
                            @endif
                        </div>
                    </div>
                    @endguest
                    @auth
                            <div class="col-sm-4 header-center-block">
                                <h2>You are already logged</h2>
                                <h2><a href="{{route('userPage')}}">Go for dating</a></h2>
                            </div>
                    @endauth
            </div>
        </div>
    </div>
@endsection