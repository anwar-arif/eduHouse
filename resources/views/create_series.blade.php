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
        <h2>Make Series With A Post</h2>
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
        <form id="seriesForm" name="seriesForm" action="/addSeries" method="POST" onsubmit="return validateForm()">
            {{csrf_field()}}
            <input id = "series_name" name="series_name" placeholder="Series Name" type="text" name="title" style="width: 800px; height: 30px" ></input>
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
            <input type="submit" value="submit" id="series_submit">
        </form>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">

</script>
<script type="text/javascript">
//    $.ajaxSetup({
//        headers: {
//            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//        }
//    });
//    $("#comment_submit").on('click' , function (e) {
//        e.preventDefault();
//        var post_id = $(this).data('id') ;
//        var comment = $("input[name=comment]").val();
////        alert(post_id + comment) ;
//        $.ajax({
//            type:'POST',
//            url:'/addComment',
////            dataType:'json',
//            data:{post_id:post_id , comment:comment},
//            success: function( data ){
////                alert('comment created succesfully') ;
//                console.log("Success" , data);
//                var div = '<'+'div class="row comment-class-1" >' ;
//                var img = '<'+'img src="'+data.profile_pic_path+'" class="img-custom-1" style="width: 30px; height:30px;">' ;
//                var user_name = '<'+'label style="color:white; padding-left: 10px; float:left; padding-top:5px;">'+data.user_name+'</label>' ;
//                var created_at = '<'+'label style="color:#e1e4f2; font-size: 13px; padding-right:10px; float:right; padding-top:5px;">'+data.created_at+'</label>' ;
//                var comment = '<'+'p class="comment-p">'+data.comment_desc+ '</p>' ;
//                var endDiv = '<'+'/div>';
//                var res = div + img + user_name + created_at + comment + endDiv ;
////                alert('here is code '+ res) ;
//                $('#emptySpan').append(res);
//                $('#comment').val("");
//            },
//            error: function( data ){
//                alert('error') ;
//                console.log("Error:" , data);
//            }
//        }) ;
//    });
//    $(document).ready(
//         function() {
//             //hide all the elements at first step
//             $('.comment-span').hide();
//             $('#comment-msg').show();
//
//                //click events
//             $('.comment-toggler').click(function(){
//                 $('.comment-span').slideToggle(300);
//                 $('#comment-msg').toggle();
//             });
//
//         }
//    );
    function validateForm() {
        var series_name = document.forms["seriesForm"]["series_name"] ;
        var tag =  document.forms["seriesForm"]["tag"].value ;
        var title = document.forms["seriesForm"]["title"].value ;
        var content = document.forms["seriesForm"]["content"].value ;
        var okay = 1 ;
        var error = "" ;
        if( series_name == "" ) error += "Series Name " , okay = 0 ;
        if( tag == "" ) error += "Tag " , okay = 0 ;
        if( title == "" ) error += "Title " , okay = 0 ;
        if( content == "" ) error += "Content " , okay = 0 ;
        if( okay == 0 ) {
            error = "" ;
            error += "Series Name , Tag , Title , Content must be filled out" ;
            alert(error) ;
            return false ;
        }
        return true ;
    }
</script>
</body>
</html>