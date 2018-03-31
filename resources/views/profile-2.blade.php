<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/eduHouse.js"></script>

    <link href="css/profile2.css" rel="stylesheet">
</head>
<body>

<!-- navbar -->
<div class="container-fluid" id="div1">
    <nav class="navbar navbar-inverse navbar-fixed-top myNavBar">
        <div class="container-fluid" id="navbar-div">
            <div class="navbar-header">
                <a class="myA" href="" style="text-decoration-color: aqua">edu<span class="mySpan">House</span></a>
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
                            </ul>
                        </li>
                    </ul>
                @endif
            </div>
        </div>
    </nav>
</div>

<div class="master-div">
    <!-- sidebar left -->
    <div class="sidebar-custom">
        <ul class="ul-custom">
            <li><a href="/home" id="home-btn"><b>Home</b></a></li>
            <li><a href="#info-section" id="info-section-btn"><b>Info</b></a></li>
            <li><a href="#series-section" id="series-section-btn"><b>Series</b></a></li>
            {{--<li><a href="/changeImage">ChangeImage</a></li>--}}
        </ul>
    </div>
    <!-- blank spacing div -->
    <div class="div-blank-top">

    </div>



    <!-- center content -->
    <div class="container" id="info-section">
        <div class="row">
            <div class="col-md-7 col-md-offset-2">

                <div class="panel panel-default">
                    <div class="panel-heading" style="border-bottom:2px solid #201738;">  <h3 ><b>User Profile</b></h3></div>
                    <div class="panel-body">

                        <div class="box box-info">

                            <div class="box-body">

                                <div class="col-sm-6">

                                    <div id="imageSection" align="center">
                                        <img alt="User Pic" src="{{Auth::user()->profile_pic_path}}" id="profile-image1" class="img-circle img-responsive">
                                        <input id="profile-image-upload" class="hidden" type="file">
                                        <!--Upload Image Js And Css-->
                                    </div>

                                    <br>

                                    <!-- /input-group -->
                                </div>
                                <div class="col-sm-6">
                                    <h3 style="color:#624caa;"><b>{{Auth::user()->name}}</b> </h3>
                                    <span><p>Aspirant</p></span>
                                </div>
                                <div class="clearfix"></div>
                                <hr style="margin:5px 0 5px 0;">


                                <div class="col-sm-5 col-xs-6 tital " ><b>Name:</b></div><div class="col-sm-7 col-xs-6 ">{{Auth::user()->name}}</div>
                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital " ><b>User Name:</b></div><div class="col-sm-7"> {{Auth::user()->user_name}}</div>
                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital " ><b>Email :</b></div><div class="col-sm-7">{{Auth::user()->email}}</div>

                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital " ><b>Joined :</b></div><div class="col-sm-7">{{Auth::user()->created_at}}</div>

                                <div class="clearfix"></div>
                                <div class="bot-border"></div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- series div -->
    <div class="container" id="series-section">
        <div class="row">
            <div class="col-md-7 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="border-bottom:2px solid #201738;">  <h3 ><b>My Series</b></h3></div>
                    <ul class="series-list">
                        <li class="series-heads">Series 1</li>
                        <ul class="series-list-child">
                            <li class="post-heads">
                                Post 1 Title
                            </li>
                            <!-- user Single post sample -->
                            <div class="container-fluid container-custom-1">
                                <!-- this div will contain and stretch to all the posts -->
                                <div class="div-2">
                                    <div class="row-custom-1 col-md-12">
                                        <img src="images/avatar.png" class="img-custom-1">
                                        <label class="col-md-4">Username</label>
                                        <!--                <label class="col-md-4 label-right-float">Category</label>-->
                                        <div class="d-inline col-md-4 bg-primary text-white" style="height:70px; text-align: center; float:right">
                                            <label style="padding-top:20px; font-size:18px;">Category</label>
                                        </div>
                                    </div>
                                    <div class="row-post-1 col-md-12">
                                        <p class="post-para-1">This is the required post we wanna fetch from the database You know, this paragraph should be really big! but due to shortage of our stories, we could not provide any set of sentences than this! lol, actually its the laziness that drove us being casual about this very own post.</p>
                                        <div class="panel-body" style="background-color: #aec1bd; border-radius: 8px; margin-bottom: 8px;">
                                            <label style="color:white;">Likes</label>
                                        </div>
                                        <div class="row comment-class-1">
                                            <img src="images/avatar.png" class="img-custom-1" style="width: 30px; height:30px;">
                                            <label style="color:white; padding-left: 10px; float:left; padding-top:5px;"> Username</label>
                                            <p class="comment-p">This is a comment,you need to verify that will it go out of the box, or not, just make sure that the p stays inside the box.this should be a huge comment, that should go beyond the comment box, but actually we have set the things so well so that it still remains inside the box</p>
                                        </div>
                                        <div class="row comment-class-1">
                                            <img src="images/avatar.png" class="img-custom-1" style="width: 30px; height:30px;">
                                            <label style="color:white; padding-left: 10px; float:left; padding-top:5px;"> Username</label>
                                            <p class="comment-p">This is a comment,you need to verify that will it go out of the box, or not, just make sure that the p stays inside the box.this should be a huge comment, that should go beyond the comment box, but actually we have set the things so well so that it still remains inside the box</p>
                                        </div>
                                        <div class="row comment-class-1">
                                            <img src="images/avatar.png" class="img-custom-1" style="width: 30px; height:30px;">
                                            <label style="color:white; padding-left: 10px; float:left; padding-top:5px;"> Username</label>
                                            <p class="comment-p">This is a comment,you need to verify that will it go out of the box, or not, just make sure that the p stays inside the box.this should be a huge comment, that should go beyond the comment box, but actually we have set the things so well so that it still remains inside the box</p>
                                        </div>

                                        <!-- the comment we will post -->
                                        <div class="row" style="background-color: #342463; padding: 8px;">
                                            <img src="images/avatar.png" class="img-custom-1" style="width: 30px; height:30px;">
                                            <label style="color:white; padding-left: 10px; float:left; padding-top:5px;"> Your Username</label>
                                            <input class="comment-p float-left" style="width: 500px; border-radius: 10px;" type="input" name="comment">
                                            <button class="glyphicon glyphicon-ok" style="border-radius: 5px; float:right;"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="top-padding-bar"></div>

                            <li class="post-heads">
                                Post 2
                            </li>
                            <!-- user Single post sample -->
                            <div class="container-fluid container-custom-1">
                                <!-- this div will contain and stretch to all the posts -->
                                <div class="div-2">
                                    <div class="row-custom-1 col-md-12">
                                        <img src="images/avatar.png" class="img-custom-1">
                                        <label class="col-md-4">Username</label>
                                        <!--                <label class="col-md-4 label-right-float">Category</label>-->
                                        <div class="d-inline col-md-4 bg-primary text-white" style="height:70px; text-align: center; float:right">
                                            <label style="padding-top:20px; font-size:18px;">Category</label>
                                        </div>
                                    </div>
                                    <div class="row-post-1 col-md-12">
                                        <p class="post-para-1">This is the required post we wanna fetch from the database You know, this paragraph should be really big! but due to shortage of our stories, we could not provide any set of sentences than this! lol, actually its the laziness that drove us being casual about this very own post.</p>
                                        <div class="panel-body" style="background-color: #aec1bd; border-radius: 8px; margin-bottom: 8px;">
                                            <label style="color:white;">Likes</label>
                                        </div>
                                        <div class="row comment-class-1">
                                            <img src="images/avatar.png" class="img-custom-1" style="width: 30px; height:30px;">
                                            <label style="color:white; padding-left: 10px; float:left; padding-top:5px;"> Username</label>
                                            <p class="comment-p">This is a comment,you need to verify that will it go out of the box, or not, just make sure that the p stays inside the box.this should be a huge comment, that should go beyond the comment box, but actually we have set the things so well so that it still remains inside the box</p>
                                        </div>
                                        <div class="row comment-class-1">
                                            <img src="images/avatar.png" class="img-custom-1" style="width: 30px; height:30px;">
                                            <label style="color:white; padding-left: 10px; float:left; padding-top:5px;"> Username</label>
                                            <p class="comment-p">This is a comment,you need to verify that will it go out of the box, or not, just make sure that the p stays inside the box.this should be a huge comment, that should go beyond the comment box, but actually we have set the things so well so that it still remains inside the box</p>
                                        </div>
                                        <div class="row comment-class-1">
                                            <img src="images/avatar.png" class="img-custom-1" style="width: 30px; height:30px;">
                                            <label style="color:white; padding-left: 10px; float:left; padding-top:5px;"> Username</label>
                                            <p class="comment-p">This is a comment,you need to verify that will it go out of the box, or not, just make sure that the p stays inside the box.this should be a huge comment, that should go beyond the comment box, but actually we have set the things so well so that it still remains inside the box</p>
                                        </div>

                                        <!-- the comment we will post -->
                                        <div class="row" style="background-color: #342463; padding: 8px;">
                                            <img src="images/avatar.png" class="img-custom-1" style="width: 30px; height:30px;">
                                            <label style="color:white; padding-left: 10px; float:left; padding-top:5px;"> Your Username</label>
                                            <input class="comment-p float-left" style="width: 500px; border-radius: 10px;" type="input" name="comment">
                                            <button class="glyphicon glyphicon-ok" style="border-radius: 5px; float:right;"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="top-padding-bar"></div>

                            <!-- add post button -->
                            <li class="post-heads">
                                <button onclick="window.location.href='location_of_the_page'" class="btn-block btn-primary btn-lg li-button"><b>Add Post</b></button>
                            </li>
                        </ul>
                        <!-- series 1 ends -->
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(
            function() {
                //hide all the elements at first step
                $('.series-list-child').hide();

                //click events
                $('.series-list>li').click(function(){
                    var x = $(this).next('ul').children('div');
//                if($(this).next('ul').is(':visible')){
//                    x.hide();
//                }else{
//                    x.hide();
//                }
                    x.hide();
                    $(this).next('ul').slideToggle(400);
                });
                $('.series-list-child>li').click(function(){
                    $(this).next('div').slideToggle(400);
                });

                $('#profile-image1').on('click', function() {
                    $('#profile-image-upload').click();
                });
                $('#info-section-btn').on('click', function() {
                    $('html, body').animate({
                        scrollTop: $('#info-section').offset().top
                    }, 1000);
                });
                $('#series-section-btn').click(function() {
                    $('html, body').animate({
                        scrollTop: $('#series-section').offset().top
                    }, 1000);
                });
//              change profile picture
                $('#profile-image-upload').on('change' , function (e) {
//                    var file = document.getElementById('profile-image-upload') ;
                    alert('called') ;
                    var file = $("input[name=profile-image-upload]").val();
                    if ( file.length == 0 ) {
                        return false ;
                    }
                    alert('called') ;
                    $.ajax({
                        type :'POST' ,
                        url : 'changeImage' ,
                        data(file:file) ,
                        success : function(data) {
                            var img = '<'+'img alt="User Pic" src=" ' +data.profile_pic_path+' " id="profile-image1" class="img-circle img-responsive">' ;
                            var upButton = '<'+'input id="profile-image-upload" class="hidden" type="file">' ;
                            var res = img + upButton ;
                            $('#imageSection').append(res) ;
                        },
                        error : function(data) {
                            alert('something went wrong') ;
                        }
                    }) ;
//                })
            });

</script>
</body>
</html>