{% include("/common/header.tpl") %}

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
    h2{
        display: inline-block;
        margin-bottom: 0px! important;
    }
    small{
        display: inline-block;
        color: gray;
    }
</style>
<div class="main-container">
    <section class="inline-image-right">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 text-left">
                    <div id='article' style='width: 600px'>
                        <h2 style='margin-bottom: 0px! important'>{{news.title}}</h2><br><br>
                        <img src="{{news.picture}}" style="width: 600px">
                        <small>Date: {{news.date}} --- Uploaded form: {{news.authorId}}</small><br>
                        <h4 style="width: 600px">{{news.articleContent | raw}}</h4>
                    </div>
                    <br><br><br>
                </div>
                <div class="col-sm-5 text-center">
                    <img alt="Product Image" class="product-image" src="/css/img/devices.png">
                </div>
                <a href="/articles">
                    <input type="submit" id="btn" value="Get back">
                </a>
            </div>
        </div>
    </section>
</div>
{% include "./common/footer.tpl" %}