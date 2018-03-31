<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'eduHouse') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/loginStyle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>



<div id="app">

    <div class="container-fluid" id="div1">
        <nav class="navbar navbar-inverse navbar-fixed-top myNavBar">
            <div class="container-fluid" id="navbar-div">
                <div class="navbar-header">
                    <a class="myA" href="#" style="text-decoration-color: aqua">edu<span class="mySpan">House</span></a>
                </div>
                <div class="container-fluid-right" id="div2">
                    @if (Auth::guest())
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        </ul>
                    @else
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{url('/logout')}}">Logout</a></li>
                                    <li><a href="{{url('/profile')}}">Profile</a></li>
                                </ul>
                            </li>
                        </ul>
                    @endif
                </div>
            </div>
        </nav>
    </div>

    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>