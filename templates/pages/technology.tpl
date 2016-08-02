{% include("./common/header.tpl") %}
<div class="loader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>

<div class="nav-container">
    <nav class="top-bar overlay-bar">
        <div class="container">

            <div class="row utility-menu">
                <div class="col-sm-12">
                    <div class="utility-inner clearfix">
                        <div class="pull-right">
                            {% if session.isLogged == false %}
                            <a href="/login" class="btn btn-primary btn-white btn-xs">Login</a>
                            <a href="/signup" class="btn btn-primary btn-filled btn-xs">Signup</a>
                            {% else %}
                            <a href="/articles" class="btn btn-primary btn-white btn-xs">See articles</a>
                            <a href="/addArticle" class="btn btn-primary btn-white btn-xs">Add article</a>
                            <a href="/myAccount" class="btn btn-primary btn-white btn-xs">Profile</a>
                            <a href="/changePass" class="btn btn-primary btn-white btn-xs">Change Password</a>
                            <a href="/logout" class="btn btn-primary btn-filled btn-xs">Logout</a>
                            {% endif %}
                            <a href="#" class="language"><img alt="English" src="/css/img/english.png"></a>
                            <a href="#" class="language"><img alt="English" src="/css/img/denmark.png"></a>
                        </div>
                    </div>
                </div>
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
    #option{
        padding: 10px;
        font-size: 20px;
        border-radius: 10px;
        margin-right: 30px;
        width: 300px;
        margin-top: 10px;
    }
    #title{
        font-size: 30px;
        color: aqua;
        margin-bottom: 50px;
    }
    #small{
        font-size: 20px;
        margin: 0px 5px 0px 0px;
    }
</style>
<div class="main-container">
    <section class="inline-image-right">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 text-left">
                    <form action="/articles2" method="post">
                        <div id="title">Which one article, you would like to see</div>
                        <small id="small">Category:</small>
                        <select name="kategoriq" id="option">
                            <option value="{{row.category}}">News</option>
                            <option value="2">Sport</option>
                            <option value="3">Pokemons</option>
                        </select><br>
                        <small id="small">Title:</small>
                        <select name="option" id="option" style="margin-left: 40px;">
                            {% for row in select %}
                                <option value="{{row.id}}">{{row.title}}</option>
                            {% endfor %}
                        </select>
                        <input type="submit" id="btn" value="See article">
                    </form>


                    <!--<form action="/articles2" method="post">
                        <div id="title">Which one article, you would like to see</div>
                        <small id="small">Category:</small>
                        <select name="kategoriq[]" id="option" onchange="titles(this.value)">
                            <option hidden>Category</option>
                            <option value="1" name="kategoriq">News</option>
                            <option value="2" name="kategoriq">Sport</option>
                            <option value="3" name="kategoriq">Pokemons</option>
                        </select><br>
                        <small id="small">Title:</small>
                        <select name="option" id="option" style="margin-left: 40px;">
                            {% for row in select %}
                            <option value="{{row.id}}">{{row.title}}</option>
                            {% endfor %}
                        </select>
                        <input type="submit" id="btn" value="See article">
                    </form>!-->

                    <div id="myDiv"></div>
                </div>
                <div class="col-sm-5 text-center">
                    <img alt="Product Image" class="product-image" src="/css/img/devices.png">
                </div>
            </div>
        </div>
    </section>
</div>
{% include "./common/footer.tpl" %}