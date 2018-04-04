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
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>

    body{
        font-size:14px;
    }
        .Home a{
            text-decoration: none;
        }
        .Home .header {
            width: 300px;
            height: 240px;
            overflow: hidden;
            border-bottom: 1px solid #666;
        }

        .Home img.circle {
            border-radius: 70%;
            border: 2px solid #ccc;
            position: absolute;
            top: 40px;
            left: 110px;
        }

        .Home img.imgBc {
            position: relative;
            top: 0;
            left: 0;
            filter: blur(9px);
            transform: scale(1.2);
        }

        .Home h3 {
            position: absolute;
            top: 160px;
            left: 115px;
            color: #ccc;
            font-weight: 200;
            white-space: nowrap;
            text-align: center;
        }

        .Home ul.options {
            width: 300px;
            background-color: #666;
        }

        .Home li {
            background-color: #333;
            color: #ccc;
            padding: 1.4rem 1.4rem 1.8rem 2rem;
            font-weight: 200;
            letter-spacing: 1px;
            border-left: 6px solid #333;
            margin-bottom: 1px;
            transition: all .1s ease;
            cursor: pointer;
        }

        .Home li:hover {
            background-color: #383838;
            border-left: 6px solid rgb(109, 28, 211);
            color: #f5f5f5;
        }

        .Home .glyphicon {
            width: 40px;
            font-size: 16px;
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
    </style>
</head>
<body>
    <div id="app">
    <div class="ceil">
    </div>
        <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'CatchAbook') }}
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
                            <input class="search-input" placeholder="Search books" type="text"/>
                            <a class="searchicon"><i class="fas fa-search"></i></a>
                            </li>
                            <li><a class="nav-link" href="{{ route('home') }}">Home</a></li>                    
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#" onclick="">Profile</a>
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


        <footer>
            <nav class="navbar sticky-bottom navbar-light mx-auto border-top">
            <p>Lorem.</p>
            </nav>

        </footer>
    </div>
</body>
</html>
