<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CatchAbook') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=East+Sea+Dokdo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">    
    <!-- Styles -->
     <style>
        html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
        body{
            font-size:14px;
        }

        .navbar-brand{
            font-size: 4em;
            margin-top: -74px;
            font-family: 'East Sea Dokdo', cursive;
            color:#f90 !important;
        }
        .dropdown-item{font-size: 14px;}
        a:hover{
            color:#f90 !important;
        }
        .ceil{
            width:100%;
            height:5px;
            background-color:#f90;
        }
        .search-input{
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #f90;
            padding-left: 35px;
            margin-right: 10px;
            margin-bottom: 0px;
            margin-top: 2px;
            height: 32px;
            position:relative;
            width:250px;
        }
        .search-input:focus{
            outline: none;
            border: 1px solid #f90;
            box-shadow: 0 0 4px rgb(255, 217, 103);
        }
        a.searchicon{
            position: absolute !important;
            font-size: 1.4em !important;
            padding-top: 8px !important;
            padding-bottom: 5px !important;
            padding-left: 8px !important;
            color: rgba(107, 107, 107, 0.5) !important;
        }
        a.searchicon:hover{
            color:#f90 !important;
            cursor:pointer;
        }

        footer{
            background:transparent;
        }
    </style>

    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div id="app">
    <div class="ceil">
    </div>
    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                CatchAbook
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @else
                        <li style="margin-top: 7px; display:flex;">
                            <input class="search-input" placeholder="Search books" type="text" />
                            <a class="searchicon" href="{{ route('search') }} "><i class="fas fa-search"></i></a>
                        </li>
                        <li><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a href="{{ route('add') }}" class="dropdown-item" href="#" onclick="">Add Book</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>

                        </li>

                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>

<!--
    <footer>
        <nav class="navbar sticky-bottom navbar-light mx-auto border-top">
            <p>KingOfWrongAnswer OSC</p>
        </nav>

    </footer>
-->
    
</div>
</body>
</html>
