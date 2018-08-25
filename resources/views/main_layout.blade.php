<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Date App</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
                <a class="navbar-brand custom-brand" href="{{route('start')}}"><img src="/icons/heart.png" alt=""></a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="menu-item">
                        <a class="menu-link" href="{{route('start')}}">Start Page <span class="sr-only">(current)</span></a>
                    </li>
                    @guest
                        <li class="menu-item">
                            <a class="menu-link" href="{{route('register')}}">Registration</a>
                        </li>
                    @endguest
                    @auth
                        <li class="menu-item">
                            <a class="menu-link" href="{{route('logout')}}">Logout</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</header>
<body>

@yield('section')

</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="/js/bootstrap.min.js"></script>
@yield('scripts')
</html>
