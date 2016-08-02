<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html ng-app="app" class="ng-scope no-js"> <!--<![endif]-->
<head id="head">
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
                            {% if session.isLogged == false %}
                            .myNavButtons{
                                color: white;
                                border-right: 1px solid;
                                border-color: rgba(255, 255, 255, 0.5);
                            }
                            {% else %}
                            .overlay-bar .utility-menu .utility-inner{
                                border-bottom: 2px solid! important;
                                border-color: rgba(255, 255, 255, 0.5)! important;
                            }
                            .myNavButtons{
                                color: darkslategrey;
                                border-right: 2px solid;
                                border-color: rgba(255, 255, 255, 0.6);
                            }
                            {% endif %}
                            .myNavButtons{
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
                            }                            .top-bar.nav-sticky .utility-menu{
                                                             display: block! important;
                                                         }
                            .inline-image-right{
                                background-image: url("/css/img/new-back.png")! important;
                                background-repeat: no-repeat! important;
                                background-size: cover! important;
                            }
                            i{
                            }
                        </style>
                        <div style="float: right;">
                            {% if session.isLogged == false %}
                            <a href="/home" class="myNavButtons">Home</a>
                            <a href="/login" class="myNavButtons">Login</a>
                            <a href="/signup" class="myNavButtons">Signup</a>
                            <a href="/contactUs" class="myNavButtons">Contact us</a>
                            {% else %}
                            <a href="/contactUs" class="myNavButtons">Contact us</a>
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
                    {% if session.isLogged == false %}
                    <a href="home"><img class="logo logo-light" alt="Logo" src="/css/logos/my%20logo-%20whiteCUT.png"></a>
                    <a href="home"><img class="logo logo-dark" alt="Logo" src="/css/logos/my%20logo-%20whiteCUT.png"></a>
                    {% else %}
                    <a href="home"><img class="logo logo-light" alt="Logo" src="/css/logos/DP logoCUT.png"></a>
                    <a href="home"><img class="logo logo-dark" alt="Logo" src="/css/logos/my logo- whiteCUT.png"></a>
                    {% endif %}
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
    #btn{
        border: 2px solid aqua;
        color: aqua;
        font-size: 15px;
    }
    #btn:hover{
        color: white;
        background-color: aqua;
    }
    input, textarea{
        border: 1px solid gray;
        background: white;
        border-radius: 5px;
        margin-bottom: 25px;
    }
    #category, #categoryLabel{
        display: inline-block;
    }
    #fileInput{
        width: 430px;
        position: relative;
        bottom: 28px;
        left:151px;
        margin-bottom: 0px! important;
    }
    #choose{
    }
    #fradio{
        margin-right: 5px;
    }
    #sradio{
        margin-left: 30px;
        margin-right: 5px;
    }
    #or{
        margin: 0px 10px;
    }
    #click{
        margin-left: 5px;
    }
    #mess{
        position: absolute! important;
        color: tomato;
        top: 28px;
        left: 300px;
        font-size: 20px;
    }
</style>
<div class="main-container">
    <section class="inline-image-right">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 align-vertical no-align-mobile">
                    <form action="addArticle" method="post" enctype="multipart/form-data">
                        <h1>Make new article</h1><span id="mess"></span>
                        <p id="categoryLabel">* Choose category:</p>
                        <select name="category" id="category" style="padding: 2px; border-radius: 5px;">
                            <option value="" id="here" hidden>Here..</option>
                            {% for row in allRows %}
                                <option value="{{row.id}}">{{row.category}}</option>
                            {% endfor %}
                        </select><span id="or">or</span><input type="text" name="newCategory" id="optionNode" placeholder="  add new here>>"><a
                                href="javascript:addNew()" id="click">  Make NEW</a>
                            <input type="text" name="title" placeholder=" * Title" style="width: 581px">
                        <label id="file" for="fileInput">Upload image with URL:</label>
                        <input type="text" name="fileInput" id="fileInput" placeholder=" http://..">
                        <label for="" id="choose">Choose text editor: <small style="color: gray;">   just click double on your choice</small></label><br>
                        <input type="radio" id="reg" name="choice" checked><label style="margin-left: 5px; margin-right: 30px">Ordinary</label>
                        <input type="radio" id="fradio" name="choice" onclick="changeEditor('a')"><label for="fradio">TinyMCE</label>
                        <input type="radio" id="sradio" name="choice" onclick="changeEditor('b')"><label for="sradio">CKEditor</label>
                        <textarea name="newArticleText" id="newArticleText" placeholder=" * Text.." cols="80" rows="10">{{arttext}}</textarea><br/>
                        <input class="login-btn btn-filled" id="btn" type="submit" value="Post"/>
                        <div id="new"></div>
                    </form>
                </div>
                <div class="col-sm-6 text-center">
                    <img alt="Product Image" class="product-image" src="/css/img/devices.png">
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    var n = document.getElementById('category').length;
    function addNew(){
        var text = document.getElementById('optionNode').value;
        if  (text !== "") {
            var div = document.createElement('input');
            div.setAttribute('name', "theNew");
            div.setAttribute('value', text);
            div.style.display = "none";
            var newa = document.getElementById('new');
            newa.appendChild(div);
            var selects = document.getElementById('category');
            var option = document.createElement('option');
            var asd = document.createTextNode(text);
            option.appendChild(asd);
            option.setAttribute("value", n);
            selects.appendChild(option);
            $('#category').toggle('highlight');
            $('#category').toggle('highlight');
            var here = document.getElementById('here');
            here.innerHTML = "See the new here!";
            n++;
        } else {
            $('#mess').html("First, write it in the field below!");
        }
    }

    var n = 0;
    function changeEditor(value) {
        if (value == "a"){
            var body = document.getElementById('head');
            var tag1 = document.createElement('script');
            tag1.src = "//cdn.tinymce.com/4/tinymce.min.js";
            var tag2 = document.createElement('script');
            tag2.innerHTML = "tinymce.init({ selector:'textarea' });";
            body.appendChild(tag1);
            body.appendChild(tag2);
            n++;
            if  (n == 4 || n == 2){
                var dis = document.getElementById('fradio');
                dis.setAttribute('disabled', 'true');
                var dis2 = document.getElementById('sradio');
                dis2.setAttribute('disabled', 'true');
                var dis3 = document.getElementById('reg');
                dis3.setAttribute('disabled', 'true');
            }
        }
        if (value == "b"){
            var body = document.getElementById('head');
            var tag3 = document.createElement('script');
            tag3.src = "//cdn.ckeditor.com/4.5.10/standard/ckeditor.js";
            body.appendChild(tag3);
            n+=2;
            if  (n == 5 || n == 4){
                var dis = document.getElementById('fradio');
                dis.setAttribute('disabled', 'true');
                var dis2 = document.getElementById('sradio');
                dis2.setAttribute('disabled', 'true');
                var dis3 = document.getElementById('reg');
                dis3.setAttribute('disabled', 'true');
            }
            CKEDITOR.replace('newArticleText');
        }
    }

</script>
{% include "./common/footer.tpl" %}