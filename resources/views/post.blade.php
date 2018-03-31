<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'eduHouse') }}</title>

        <!-- Fonts -->
        {{--<link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800" rel="stylesheet">--}}
        {{--<link href="https://fonts.googleapis.com/css?family=Oswald:500,600" rel="stylesheet">--}}
        {{--<link href="https://fonts.googleapis.com/css?family=Dosis:400,500" rel="stylesheet">--}}

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

        <div class="top-blank-div" style="width:800px; margin:0 auto;">
            <br><br><br>
            <h2>Post Something</h2>
        </div>
        <div id="sample" style="width:800px; margin:0 auto;">
            <script type="text/javascript" src="js/nicedit.js"></script> <script type="text/javascript">
                //<![CDATA[
                bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
                //]]>
            </script>
            <style>
                .nicEdit-main {
                    overflow: auto !important;
                    height: 5.5em;
                }
            </style>
            <form id="postForm" name="postForm" action="/home" method="POST" onsubmit="return validateForm()">
                {{csrf_field()}}
                <select id="tag" name="tag" style="width: 800px; height: 30px" >
                    <option style="width: 800px; height: 30px" value="" selected disabled hidden>Select Tag</option>
                    @foreach($tags as $tag )
                        <option style="width: 800px; height: 30px" id="tag" name="tag" value="{{$tag["tag_name"]}}" >{{$tag["tag_name"]}}</option>
                    @endforeach
                </select>
                <br>
                <input id = "title" name="title" placeholder="Set Title" type="text" name="title" style="width: 800px; height: 30px" ></input>

                <textarea id="content" name="content" style="width: 800px; height: 400px;">

                </textarea>
                <input type="submit" value="submit" id="post_submit">
            </form>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">
        function validateForm() {
            var tag =  document.forms["postForm"]["tag"].value ;
            var title = document.forms["postForm"]["title"].value ;
            var content = document.forms["postForm"]["content"].value ;
            var okay = 1 ;
            var error = "" ;
            if( tag == "" ) error += "Tag " , okay = 0 ;
            if( title == "" ) error += "Title " , okay = 0 ;
            if( content == "" ) error += "Content " , okay = 0 ;
            if( okay == 0 ) {
                error = "" ;
                error += "Tag , Title , Content must be filled out" ;
                alert(error) ;
                return false ;
            }
            return true ;
        }
    </script>
    </body>
</html>