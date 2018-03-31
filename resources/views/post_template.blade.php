<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        html, body{
            height:100%;
        }
        div{
            font-family:"Dosis",sans-serif;
        }
        .div-2{
            display:block;
            overflow:auto;
        }
        .div-container-custom{
            padding: 3px;
        }
        p{
            font-size: 20px;
            font-weight:400;
        }
        .post-para-1{
            padding-top: 50px;
            padding-bottom: 50px;
            padding-right: 30px;
            padding-left: 30px;
        }
        .container-custom-1{
            background-color: #8accc2;
            min-height:100%;
        }
        .row-custom-1{
            background:#cee2de;
        }
        .row-custom-1 > label, img{
            display: inline;
        }
        .row-custom-1 > label{
            float: left;
            padding-top: 14px;
            font-size: 24px;
        }
        .label-right-float{

            float: right;
            background: #0faa89;
            height:100%;
            position:absolute;
            text-align: center;
        }
        .img-custom-1{
            float:left;
            border-radius: 50%;
            width:70px;
            height:70px;
        }
        .img-custom-2{
            float:left;
            border-radius: 50%;
            width:50px;
            height:50px;
        }
        .row-post-1{
            background:#ffffff;
        }
        .comment-1{
            background-color: darkslategray;
        }
        .comment-class-1{
            background-color: #534f60;
            padding: 8px;
        }
        .comment-p{
            width: 620px;
            overflow: auto;
            max-width:620px;
            border-radius: 10px;
            font-size: 15px;
            padding-left: 10px;
            float:right;
            background-color:white;
            color:black;
            border: 2px solid #483e70;
        }
        .sidebar-left-custom{
            font-family:'Dosis', sans-serif;
            position: fixed;
            width: 250px;
            height: 100%;
            background: #342463;
        }
        .sidebar-right-custom{
            font-family:'Dosis', sans-serif;
            position: fixed;
            left:1050px;
            width: 300px;
            height: 100%;
            background: #342463;
        }
        .top-padding-bar{
            display:block;
            background-color:#8accc2;
            height: 100px;
        }
        .panel-title-custom{
            margin-top:70px;
            display:block;
            background-color:inherit;
            height:8%;
            text-align:center;
            color:#342463;
        }
        .user-holder{
            display:block;
            padding: 0;
            margin : 0;
        }
        .ul-right-sidebar{
            list-style:none;
            padding:0;
            margin:0;
        }
        .ul-right-sidebar > li{
            display:inline;
            background:#000;
        }
        .list-group img{
            width:50px;
            height:50px;
            border-radius:50%;
        }
        .list-group a{
            text-decoration: none;
        }
        .ul-modified{
            border-radius:5%;
            margin:20px;
            display:block;
            background:#55457c;
            color:#d5c8f4;
            list-style: none;
        }
        .ul-modified a:hover{
            text-decoration: none;
            color:white;
        }
        .ul-modified a:focus{
            text-decoration: none;
            color:white;
        }
        .ul-modified a{
            text-decoration: none;
            color:#d5c8f4;
        }
        .ul-modified li *{
            position:relative;
            left:-30px;
            display: inline;
            padding:10px;
            line-height: auto;
        }
        .ul-img-custom{
            width:50px;
            height:50px;
            border-radius:50%;
        }
        .glyphicon-custom:hover{
            color:#c42d2d;
        }
    </style>
</head>
<body>
<!-- navbar -->
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
                                <li><a href="{{ url('/logout') }}">Logout</a></li>
                                <li><a href="{{ url('/profile') }}">Profile</a></li>
                            </ul>
                        </li>
                    </ul>
                @endif
            </div>
        </div>
    </nav>
</div>

<!-- left sidebar : should contain all the subscribed users -->
<div class="sidebar-left-custom">
    <div class="panel-title-custom">
        <br>
        <br>
        <span class="label label-default label-custom" style="position:relative; left:auto;">Popular Users</span>
        <br>

        <div class="user-holder">
            <!-- top 5 users based on subcribers -->
            <ul class="ul-modified">
                <a href="#username/profile">
                    <li>
                        <img src="https://www.shareicon.net/download/128x128//2016/06/26/786570_people_512x512.png" class="ul-img-custom">
                        <h4>Username</h4>
                    </li>
                </a>
            </ul>
        </div>
        <div class="user-holder">
            <ul class="ul-modified">
                <a href="/post">
                    <li><h4>Post Something</h4></li>
                </a>
            </ul>
        </div>
        <div class="user-holder">
            <ul class="ul-modified">
                <a href="/series">
                    <li><h4>Explore Series</h4></li>
                </a>
            </ul>
        </div>
        <div class="user-holder">
            <ul class="ul-modified">
                <a href="/create/series">
                    <li><h4>Create Series</h4></li>
                </a>
            </ul>
        </div>
    </div>
</div>
<!-- sidebar right -->
<div class="sidebar-right-2">
    <br>
    <br>
    <br>
    <br>
    <!-- search bar -->
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <form action="" class="search-form">
                <div class="form-group has-feedback">
                    <label for="search" class="sr-only">Search</label>
                    <input type="text" class="form-control" name="search" id="search" placeholder="search">
                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
            </form>
        </div>
    </div>
    <br>
    <br>
    <span class="label label-default label-custom">Sort Posts By</span>
    <br>
    <!-- sorting section -->
    <div class="container">
        <!--Radio group-->
        <div class="form-group ">
            <input name="group100" type="radio" id="radio100">
            <label for="radio100" class="radio-btn-custom">Option 1</label>
        </div>
        <div class="form-group">
            <input name="group100" type="radio" id="radio101" checked>
            <label for="radio101" class="radio-btn-custom">Option 2</label>
        </div>
        <!--Radio group ENDS-->
    </div>

    <!-- filter by section -->
    <br>
    <br>
    <span class="label label-default label-custom">Filter Posts By</span>
    <!-- sorting section -->
    <div class="container">
        <!--Radio group-->
        @foreach($tags as $tag)
            <div class="form-group ">
                <input name="group200" type="radio" id="radio200" onclick="window.location='/posts/{{$tag["tag_name"]}}';">
                <label for="radio200" class="radio-btn-custom">{{$tag["tag_name"]}}</label>
            </div>
        @endforeach
        <!--Radio group ENDS-->
    </div>

</div>
<!-- sidebar right END -->


<!-- user Single post sample -->
<div class="container-fluid container-custom-1">
    <!-- the top padding bar -->
    <div class="top-padding-bar"></div>
    <!-- this div will contain and stretch to all the posts -->
    @foreach($posts as $post)
        <div class="div-2"  >
            <div class="row-custom-1 col-md-6 col-md-offset-3">
                <img src="{{$post["profile_pic_path"]}}" class="img-custom-1">
                <label class="col-md-4">{{$post["user_name"]}}</label>
                <label style="position:relative; top:35px; left:-190px;font-size:12px; color:#636f9e; display: block;"><b>{{$post["created_at"]}}</b></label>
                <!--                <label class="col-md-4 label-right-float">Category</label>-->
                <div class="d-inline col-md-4 bg-primary text-white" style="height:70px; text-align: center; float:right">
                    <label style="padding-top:20px; font-size:18px;">{{$post["post_tag"]}}</label>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-3" style="background-color:#8baabc; display:block;">
                <h4 style="color:#222e63; font-size:20px; font-weight:600; padding-left:20px;">{{$post["post_title"]}}</h4>
            </div>
            <div class="row-post-1 col-md-6 col-md-offset-3">
                <!-- this is the post description -->
                <p class="post-para-1">
                    <?php echo $post["post_content"] ; ?>
                </p>
                <!-- post description ends -->
                <div class="panel-body" style="background-color: #aec1bd; border-radius: 8px; margin-bottom: 8px;">
                    <button class="btn btn-primary btn" style="border-radius:50%; display : inline; position:relative; left : 0; padding:0; margin:0;"><i class="glyphicon glyphicon-heart glyphicon-custom" style="font-size:20px; padding:7px;"></i></button>
                    <label style="color:white; display: inline; padding-left:20px; padding-top:10px; font-size:18px;">{{$post["like_count"]}} Likes</label>
                </div>
                <!-- comment counts shows here -->
                <div class="col-md-12 comment-toggler" style="margin: 0; padding: 0;background-color:#bbdaed; display:block; margin-left:0; margin-right:0; margin-top:10px; margin-bottom:10px; border-radius:6px;">
                    <h4 style="color:#222e63; font-size:14px; font-weight:600; padding-left:20px;">{{count($post["comments"])}} Comments</h4>
                    <h4 style="color:#3e4d8e; font-size:12px; padding-left: 20px; margin-top:5px;" id="comment-msg"> Show More Comments</h4>
                </div>

                <span id="emptySpan"></span>
                <!-- this portion is hidden until clicked to show -->
                <span class="comment-span" id="show_comment">
                    @if(!empty($post["comments"]))
                        @foreach($post["comments"] as $com )
                            <div class="row comment-class-1" >
                                <img src="{{$com["profile_pic_path"]}}" class="img-custom-1" style="width: 30px; height:30px;">
                                <label style="color:white; padding-left: 10px; float:left; padding-top:5px;">{{$com["user_name"]}}</label>
                                <label style="color:#e1e4f2; font-size: 13px; padding-right:10px; float:right; padding-top:5px;">{{$com["created_at"]}}</label>
                                <p class="comment-p"><?php echo $com["comment_desc"] ; ?></p>
                            </div>
                        @endforeach
                    @endif
                </span>
                <!-- the comment we will post -->
                <div class="row" style="background-color: #342463; padding: 8px;">
                    <img src="images/avatar.png" class="img-custom-1" style="width: 30px; height:30px;">
                    <label style="color:white; padding-left: 10px; float:left; padding-top:5px;"> Your Username</label>
                    <form>
                        <input id="comment" name="comment" type="text"  class="comment-p float-left" style="width: 500px; border-radius: 10px;">
                        <button id="comment_submit"  name="comment_submit" data-id = "{{$post["post_id"]}}" class="glyphicon glyphicon-ok" style="border-radius: 5px; float:right;"></button>
                    </form>
                </div>

            </div>
        </div>
    @endforeach
</div>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#comment_submit").on('click' , function (e) {
        e.preventDefault();
        var post_id = $(this).data('id') ;
        var comment = $("input[name=comment]").val();
//        alert(post_id + comment) ;
        $.ajax({
            type:'POST',
            url:'/addComment',
//            dataType:'json',
            data:{post_id:post_id , comment:comment},
            success: function( data ){
//                alert('comment created succesfully '+comment+' ' + post_id ) ;
                console.log("Success" , data);
                var div = '<'+'div class="row comment-class-1" >' ;
                var img = '<'+'img src="'+data.profile_pic_path+'" class="img-custom-1" style="width: 30px; height:30px;">' ;
                var user_name = '<'+'label style="color:white; padding-left: 10px; float:left; padding-top:5px;">'+data.user_name+'</label>' ;
                var created_at = '<'+'label style="color:#e1e4f2; font-size: 13px; padding-right:10px; float:right; padding-top:5px;">'+data.created_at+'</label>' ;
                var comment = '<'+'p class="comment-p">'+data.comment_desc+ '</p>' ;
                var endDiv = '<'+'/div>';
                var res = div + img + user_name + created_at + comment + endDiv ;
//                alert('here is code '+ res) ;
                $('#emptySpan').append(res);
                $('#comment').val("");
            },
            error: function( data ){
                alert('error') ;
                console.log("Error:" , data);
            }
        }) ;
    });
    $(document).ready(
            function() {
                //hide all the elements at first step
                $('.comment-span').hide();
                $('#comment-msg').show();

                //click events
                $('.comment-toggler').click(function(){
                    $('.comment-span').slideToggle(300);
                    $('#comment-msg').toggle();
                });

            });
</script>
</body>
</html>
