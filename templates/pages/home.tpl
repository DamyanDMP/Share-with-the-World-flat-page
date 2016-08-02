<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html ng-app="app" class="ng-scope no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Pivot - {{title}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="/css/css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/css/css/line-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/css/css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/css/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/css/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/css/css/theme-zest.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/css/css/custom.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="/css/js/jquery-3.1.0.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!--[if gte IE 9]>
    <link rel="stylesheet" type="text/css" href="/css/ie9.css" />
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
    <script src="/css/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Roboto:300italic,400,300,700" rel="stylesheet" type="text/css">
    <link href="/css/css/font-roboto.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/slaider/css/full-slider.css">
    <link rel="stylesheet" href="/css/slaider/css/bootstrap.css">
    <link rel="stylesheet" href="/css/slaider/css/bootstrap.min.css">

</head>

<body>
<div class="loader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>

<div class="nav-container">
    <nav class="top-bar overlay-bar">
        <div class="container">

            <div class="row utility-menu" style="margin-top: 0px">
                <div class="col-sm-12">
                    <div class="utility-inner clearfix" style="padding-bottom: 0px">
                        <style>
                            footer{
                                padding: 0px! important;
                                margin: 0px! important;
                            }
                            .overlay-bar .utility-menu .utility-inner{
                                border-bottom: 2px solid! important;
                                border-color: rgba(255, 255, 255, 0.5)! important;
                            }
                            .myNavButtons{
                                color: white;
                                border-right: 2px solid;
                                border-color: rgba(255, 255, 255, 0.5);
                                float: left;
                                padding: 21px 20px;
                                font-weight: bold;
                                transition-timing-function: linear;
                                transition: 0.6s;
                                border-left: none;
                                margin-left: 0px! important;
                            }
                            .myNavButtons:hover{
                                color: white;
                                text-decoration: none;
                                background: darkorange! important;
                                border-color: white;
                            }
                            .myNavButtons:active{
                                color: white;
                                text-decoration: none;
                            }
                            .top-bar.nav-sticky{
                                background: rgba(0, 0, 0, 0.7)! important;
                            }
                            i{
                                color: darkslategrey;
                            }
                            .top-bar.nav-sticky i{
                                color: white! important;
                            }
                            .top-bar.nav-sticky a{
                                color: white! important;
                            }
                            .top-bar.nav-sticky .utility-menu{
                                 display: block! important;
                             }
                            .inline-image-right{
                                background-image: url("/css/img/new-back.png")! important;
                                background-repeat: no-repeat! important;
                                background-size: cover! important;
                            }
                            i{
                                color: white;
                            }
                        </style>
                        <div style="float: right;">
                            {% if session.isLogged == false %}
                            <a href="/home" class="myNavButtons">Home</a>
                            <a href="/login" class="myNavButtons">Login</a>
                            <a href="/signup" class="myNavButtons">Signup</a>
                            <a href="/contactUs" class="myNavButtons">Contact us</a>
                            {% else %}
                            <a href="/addCategory" class="myNavButtons">Add/Remove cat..</a>
                            <a href="/articles" class="myNavButtons">See articles</a>
                            <a href="/addArticle" class="myNavButtons">Add article</a>
                            <a href="/myAccount" class="myNavButtons">Profile</a>
                            <a href="/changePass" class="myNavButtons">Change Password</a>
                            <a href="/logout" class="myNavButtons">Logout</a>
                            {% endif %}
                            <div style="float:right;">
                                <a href="#" class="language"><img alt="English" src="/css/img/english.png"></a>
                                <a href="#" class="language"><img alt="English" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Bulgaria.svg/2000px-Flag_of_Bulgaria.svg.png"></a>
                            </div><br>
                            <a href="#" class="language"><img alt="English" src="http://www.shauntmax30.com/data/out/44/1331093-new-usa-wallpapers.gif"></a>
                            <a href="#" class="language"><img alt="English" src="https://upload.wikimedia.org/wikipedia/en/thumb/b/ba/Flag_of_Germany.svg/1280px-Flag_of_Germany.svg.png"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row nav-menu">
                <div class="col-md-2 col-sm-3 columns">
                    <a href="home"><img class="logo logo-light" alt="Logo" src="/css/logos/my%20logo-%20whiteCUT.png"></a>
                    <a href="home"><img class="logo logo-dark" alt="Logo" src="/css/logos/my%20logo-%20whiteCUT.png"></a>
                </div>
                <div style="display: none" class="col-md-10 col-sm-9 columns">
                    <ul class="menu">
                        <li><a href="home">Home</a></li>
                        <li class="has-dropdown"><a href="#">Categories</a>
                            <ul class="subnav">

                            </ul>
                        </li>
                        <div style="display: none"><li class="has-dropdown"><a href="#">Half Width</a>
                                <div class="subnav subnav-halfwidth">
                                    <div class="col-md-6">
                                        <h6 class="alt-font">Subnav Title</h6>
                                        <ul class="subnav">
                                            <li><a href="#">Example</a></li>
                                            <li><a href="#">Example</a></li>
                                            <li><a href="#">Example</a></li>
                                            <li><a href="#">Example</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-md-6">
                                        <h6 class="alt-font">Subnav Title</h6>
                                        <ul class="subnav">
                                            <li><a href="#">Example</a></li>
                                            <li><a href="#">Example</a></li>
                                            <li><a href="#">Example</a></li>
                                            <li><a href="#">Example</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="has-dropdown"><a href="#">Fullwidth</a>
                                <div class="subnav subnav-fullwidth">
                                    <div class="col-md-3">
                                        <h6 class="alt-font">Subnav Title</h6>
                                        <ul class="subnav">
                                            <li><a href="#">Example</a></li>
                                            <li><a href="#">Example</a></li>
                                            <li><a href="#">Example</a></li>
                                            <li><a href="#">Example</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-md-3">
                                        <h6 class="alt-font">Subnav Title</h6>
                                        <ul class="subnav">
                                            <li><a href="#">Example</a></li>
                                            <li><a href="#">Example</a></li>
                                            <li><a href="#">Example</a></li>
                                            <li><a href="#">Example</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-md-3">
                                        <h6 class="alt-font">Subnav Title</h6>
                                        <ul class="subnav">
                                            <li><a href="#">Example</a></li>
                                            <li><a href="#">Example</a></li>
                                            <li><a href="#">Example</a></li>
                                            <li><a href="#">Example</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-md-3">
                                        <h6 class="alt-font">Subnav Title</h6>
                                        <ul class="subnav">
                                            <li><a href="#">Example</a></li>
                                            <li><a href="#">Example</a></li>
                                            <li><a href="#">Example</a></li>
                                            <li><a href="#">Example</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                    </ul>
                </div>
                <ul class="social-icons text-right">
                    <li>
                        <a href="#">
                            <i class="icon social_twitter"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="icon social_facebook"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="icon social_instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mobile-toggle">
            <i class="icon icon_menu"></i>
        </div>

</div>
</nav>

</div>
<style>
    .myBtn{
        font-size: 25px;
        padding: 10px 35px;
        border-radius: 20px;
        color: #0A7ED5;
        border: 3px solid #0A7ED5;
        margin-right: 75px;
        text-decoration: none;
    }
    h1{
        margin-bottom: 20px;
    }
    .myBtn:hover{
        text-decoration: none;
        background: #0A7ED5;
        border-color: #0A7ED5;
        color: white;
        transition: 0.6s;
    }
    .cont{
        color: #0A7ED5;
        margin-right: 650px;
        bottom: 200px;
    }
    .text3{
        color: #0A7ED5;
        position: relative;
        bottom: 500px;
        margin-right: -660px! important;
    }
    .text3 a{
        margin-left: 60px;
    }
    .text2{
        color: #0A7ED5;
        position: relative;
        bottom: 500px;
        margin-right: -560px! important;
    }
    .text2 a{
        margin-left: 145px;
    }
    .nav-menu{
        padding-top: 20px! important;
    }
    #forTwo{
        bottom: 570px;
    }
    #shineBtn{
        margin-right: 535px;
        color: white;
        border: 3px solid white;
    }
    #shineBtn:hover{
        border-color: #0A7ED5;
    }
</style>
<!-- Full Page Image Background Carousel Header -->
<main id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <div class="item active">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url('/css/slaider/img/pic5.png');"></div>
            <div class="carousel-caption">
                <a href="/signup" class="myBtn" id="shineBtn">Get start>></a>
            </div>
        </div>
        <div class="item">
            <!-- Set the first background image using inline CSS below. -->
            <div class="fill" style="background-image:url('/css/slaider/img/pic1.jpg');"></div>
            <div class="carousel-caption cont">
                <h1>Get start, with us!</h1>
                <a href="/signup" class="myBtn">Get start>></a>
            </div>
        </div>
        <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="fill" style="background-image:url('/css/slaider/img/deals.png');"></div>
            <div class="carousel-caption cont text2" id="forTwo" >
                <h1>Get start, with us!</h1>
                <a href="/signup" class="myBtn">Get start>></a>
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url('/css/slaider/img/pic3.png');"></div>
            <div class="carousel-caption text3">
                <h1>Try with us!</h1>
                <a href="/signup" class="myBtn">Get start>></a>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" style="display: none;"  href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" style="display: none;" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>

</main>
<script src="/css/slaider/js/jquery.js"></script>
<script src="/css/slaider/js/bootstrap.js"></script>
<script src="/css/slaider/js/bootstrap.min.js"></script>

<script>
    $('.carousel').carousel({
        interval: 4000, //changes the speed
        pause: 'none'
    });
</script>
{% include("./common/footer.tpl") %}

