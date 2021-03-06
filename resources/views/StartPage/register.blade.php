@extends('main_layout')

@section('section')
    <div class="container-fluid header-screen-wrapper">
        <div class="row no-gutters">
            <div class="col-sm-12 text-center">
                <div class="col-sm-4 header-center-block">
                    {!! Form::open(['route' => 'proceedRegister']) !!}
                    @include('StartPage/register_form',['erorrs' => $errors])
                    {!! Form::close() !!}
                    <div class="col-sm-12">
                        @if (session('fail'))
                            <h4 style="color: firebrick">{{ session('fail') }}</h4>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(function() {
            $(".date").datepicker({
                dateFormat: "yy-mm-dd",
                showOn: "focus",
                buttonText: "Select date",
                locale: "en",
                changeYear: true,
                yearRange: "-100:+0",
                changeMonth: true,
                maxDate: "+0D",
            });
        });
    </script>
@endsection