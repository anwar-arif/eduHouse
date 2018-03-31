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
</head>
<body>

<div class="container-fluid" id="div1">
    <nav class="navbar navbar-inverse navbar-fixed-top myNavBar">
        <div class="container-fluid" id="navbar-div">
            <div class="navbar-header">
                <a class="myA" href="#" style="text-decoration-color: aqua">edu<span class="mySpan">House</span></a>
            </div>
            <div class="container-fluid-right" id="div2">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#loginModal">Login</a></li>
                    <li><a href="#signUpModal">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="container-fluid jumbotron" id="div3">
    <h2>This is my <b>Test Line </b>, Everyone should edit it and then test it</h2>
    <h4> A Place To Learn . . . </h4>
</div>
<!-- myModal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login or Sign up to view content</h4>
            </div>
            <div class="modal-footer" style="text-align: center;">
                <button type="button" class="btn btn-success" data-toggle="modal" data-dismiss="modal" data-target="#loginModal">Login</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-dismiss="modal" data-target="#signUpModal">Sign Up</button>
            </div>
        </div>
    </div>
</div>

<!--Login Modal -->
<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" align="center">
                <img class="img-circle" id="img_logo" src="http://bootsnipp.com/img/logo.jpg">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
            </div>
            <!-- Begin # DIV Form -->
            <div id="div-forms">
                <!-- Begin # Login Form -->
                <form id="login-form">
                    <div class="modal-body">
                        <div id="div-login-msg">
                            <div><span style="color:aqua">edu</span><span class="mySpan">House</span></div>
                            <span id="text-login-msg">Type your username and password.</span>
                        </div>
                        <input id="login_username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required>
                        <input id="login_password" class="form-control" type="password" placeholder="Password" required>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                        </div>
                        <div>
                            <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                            <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                        </div>
                    </div>
                </form>
                <!-- End # Login Form -->

                <!-- Begin | Lost Password Form -->
                <form id="lostPasswordForm" style="display:none;">
                    <div class="modal-body">
                        <div id="div-lost-msg">
                            <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                            <span id="text-lost-msg">Type your e-mail.</span>
                        </div>
                        <input id="lost_email" class="form-control" type="text" placeholder="E-Mail (type ERROR for error effect)" required>
                    </div>
                    <div class="modal-footer">
                        <div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                        </div>
                        <div>
                            <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                            <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                        </div>
                    </div>
                </form>
                <!-- End | Lost Password Form -->

                <!-- Begin | Register Form -->
                <form id="register-form" style="display:none;">
                    <div class="modal-body">
                        <div id="div-register-msg">
                            <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                            <span id="text-register-msg">Register an account.</span>
                        </div>
                        <input id="register_username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required>
                        <input id="register_email" class="form-control" type="text" placeholder="E-Mail" required>
                        <input id="register_password" class="form-control" type="password" placeholder="Password" required>
                    </div>
                    <div class="modal-footer">
                        <div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                        </div>
                        <div>
                            <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                            <button id="register_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                        </div>
                    </div>
                </form>
                <!-- End | Register Form -->

            </div>
            <!-- End # DIV Form -->

        </div>
    </div>
</div>
<!-- END # MODAL LOGIN -->

<!--Row START -->
<div class="container-fluid" id=div5>
    <div class="container-fluid" id="div4">
        <div class="row text-center row-custom">
            <a href="#myModal" data-toggle="modal" role="button">
                <div class="col-sm-3 padding-0">
                    <div class="thumbnail">
                        <div class="crop-img"><img src="http://moheban-ahlebeit.com/images/1024X600-Hd-Wallpaper/1024X600-Hd-Wallpaper-3.jpg"  class="img-custom" alt="Paris"></div>
                        <p class="myArticle">This is some article. This article will contain the relevant post of the upper image. We can not see the user, but we can see some portion of this post. If you click it, it won't show the post,rather show the signup message. <b>See More . . .</b></p>
                    </div>
                </div>
            </a>
            <a href="#myModal" data-toggle="modal" role="button">
                <div class="col-sm-3 padding-0">
                    <div class="thumbnail">
                        <div class="crop-img"><img src="http://moheban-ahlebeit.com/images/1024X600-Hd-Wallpaper/1024X600-Hd-Wallpaper-3.jpg"  class="img-custom" alt="Paris"></div>
                        <p class="myArticle">This is some article. This article will contain the relevant post of the upper image. We can not see the user, but we can see some portion of this post. If you click it, it won't show the post,rather show the login / signup message <b>See More . . .</b></p>
                    </div>
                </div>
            </a>
            <a href="#myModal" data-toggle="modal" role="button">
                <div class="col-sm-3 padding-0">
                    <div class="thumbnail">
                        <div class="crop-img"><img src="http://img1.jurko.net/wall/paper/donald_duck_4.jpg"  class="img-custom" alt="Paris"></div>
                        <p class="myArticle">This is some article. This article will contain the relevant post of the upper image. We can not see the user, but we can see some portion of this post. If you click it, it won't show the post,rather show the login / signup message </p>
                    </div>
                </div>
            </a>
            <a href="#myModal" data-toggle="modal" role="button">
                <div class="col-sm-3 padding-0">
                    <div class="thumbnail">
                        <div class="crop-img"><img src="http://moheban-ahlebeit.com/images/1024X600-Hd-Wallpaper/1024X600-Hd-Wallpaper-3.jpg"  class="img-custom" alt="Paris"></div>
                        <p class="myArticle">This is some article. This article will contain the relevant post of the upper image. We can not see the user, but we can see some portion of this post. If you click it, it won't show the post,rather show the signup message. <b>See More . . .</b></p>
                    </div>
                </div>
            </a>
        </div>

        <div class="row text-center row-custom">
            <a href="#myModal" data-toggle="modal" role="button">
                <div class="col-sm-3 padding-0">
                    <div class="thumbnail">
                        <div class="crop-img"><img src="http://img1.jurko.net/wall/paper/donald_duck_4.jpg"  class="img-custom" alt="Paris"></div>
                        <p class="myArticle">This is some article. This article will contain the relevant post of the upper image. We can not see the user, but we can see some portion of this post. If you click it, it won't show the post,rather show the signup message. <b>See More . . .</b></p>
                    </div>
                </div>
            </a>
            <a href="#myModal" data-toggle="modal" role="button">
                <div class="col-sm-3 padding-0">
                    <div class="thumbnail">
                        <div class="crop-img"><img src="http://img1.jurko.net/wall/paper/donald_duck_4.jpg"  class="img-custom" alt="Paris"></div>
                        <p class="myArticle">This is some article. This article will contain the relevant post of the upper image. We can not see the user, but we can see some portion of this post. If you click it, it won't show the post,rather show the signup message. <b>See More . . .</b></p>
                    </div>
                </div>
            </a>
            <a href="#myModal" data-toggle="modal" role="button">
                <div class="col-sm-3 padding-0">
                    <div class="thumbnail">
                        <div class="crop-img"><img src="http://img1.jurko.net/wall/paper/donald_duck_4.jpg"  class="img-custom" alt="Paris"></div>
                        <p class="myArticle">We Could use more examples here. Due to shortage of info,all we did is copy and paste randomly from all over the internet and then make our way throught the website! <b>See More . . .</b></p>
                    </div>
                </div>
            </a>
            <a href="#myModal" data-toggle="modal" role="button">
                <div class="col-sm-3 padding-0">
                    <div class="thumbnail">
                        <div class="crop-img"><img src="http://img1.jurko.net/wall/paper/donald_duck_4.jpg"  class="img-custom" alt="Paris"></div>
                        <p class="myArticle">This is some article. This article will contain the relevant post of the upper image. We can not see the user, but we can see some portion of this post. If you click it, it won't show the post,rather show the signup message. <b>See More . . .</b></p>
                    </div>
                </div>
            </a>
        </div>
        <div class="row text-center row-custom">
            <a href="#myModal" data-toggle="modal" role="button">
                <div class="col-sm-3 padding-0">
                    <div class="thumbnail">
                        <div class="crop-img"><img src="http://img1.jurko.net/wall/paper/donald_duck_4.jpg"  class="img-custom" alt="Paris"></div>
                        <p class="myArticle">This is some article. This article will contain the relevant post of the upper image. We can not see the user, but we can see some portion of this post. If you click it, it won't show the post,rather show the signup message. <b>See More . . .</b></p>
                    </div>
                </div>
            </a>
            <a href="#myModal" data-toggle="modal" role="button">
                <div class="col-sm-3 padding-0">
                    <div class="thumbnail">
                        <div class="crop-img"><img src="http://img1.jurko.net/wall/paper/donald_duck_4.jpg"  class="img-custom" alt="Paris"></div>
                        <p class="myArticle">This is some article. This article will contain the relevant post of the upper image. We can not see the user, but we can see some portion of this post. If you click it, it won't show the post,rather show the signup message. <b>See More . . .</b></p>
                    </div>
                </div>
            </a>
            <a href="#myModal" data-toggle="modal" role="button">
                <div class="col-sm-3 padding-0">
                    <div class="thumbnail">
                        <div class="crop-img"><img src="http://img1.jurko.net/wall/paper/donald_duck_4.jpg"  class="img-custom" alt="Paris"></div>
                        <p class="myArticle">We Could use more examples here. Due to shortage of info,all we did is copy and paste randomly from all over the internet and then make our way throught the website! <b>See More . . .</b></p>
                    </div>
                </div>
            </a>
            <a href="#myModal" data-toggle="modal" role="button">
                <div class="col-sm-3 padding-0">
                    <div class="thumbnail">
                        <div class="crop-img"><img src="http://img1.jurko.net/wall/paper/donald_duck_4.jpg"  class="img-custom" alt="Paris"></div>
                        <p class="myArticle">This is some article. This article will contain the relevant post of the upper image. We can not see the user, but we can see some portion of this post. If you click it, it won't show the post,rather show the signup message. <b>See More . . .</b></p>
                    </div>
                </div>
            </a>
        </div>

    </div>

</div>
<!--Row END -->

<div class="container-fluid jumbotron" id="div3" style="background-color: darkgrey">
    <h4 class="text-center" style="color: dimgrey; font-size: 35px;">. . . Sign Up to Find More . . . </h4>
</div>

<!--
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="js/parallax.min.js"></script>
-->
</body>
</html>