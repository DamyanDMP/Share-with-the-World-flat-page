{% include("/common/header.tpl") %}
<style>
    .article{
        padding: 10px;
        border-radius: 10px;
        width: 500px;
    }
    #title{
        font-size: 30px;
        color: aqua;
        margin-bottom: 20px;
    }
    ul li a{
        font-size: 25px;
    }
    #catName{
        font-size: 30px;
        border-bottom: 2px solid gray;
    }
    ul li{
        margin-left: 10px;
    }
</style>
<div class="col-lg-3 col-md-3 col-sm-3" style="
            position:fixed! important;
            left: 11%;
            top: 190px;
            z-index: 100;">
    <p id="catName" align="center">Choose category:</p>
    <ul>
        {% for category in categories %}
        <li><a href="/articles2/category/{{category.id}}">{{category.category}}</a></li>
        {% endfor %}
    </ul>
</div>
<div class="main-container">
    <div class="inline-image-right col-lg-12 col-md-12 col-sm-12">
        <div class="col-lg-12 col-md-12 col-sm-12" style="height: 150px"></div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="col-lg-1 col-md-1 col-sm-1"></div>
            <div class="col-lg-10 col-md-10 col-sm-10" style="background: white; margin: 0 auto! important;min-height: 500px! important; border-radius: 30px; margin-bottom: 80px! important">
                <div class="col-lg-12 col-md-12 col-sm-12" style="height: 30px"></div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="col-lg-3 col-md-3 col-sm-3" align="center">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8" style="padding-left: 30px">
                    {% for row in news %}
                        <div class="col-sm-4 row" style="margin-left: 0px; border-top: 2px solid gray;">
                            <form action="/articles2" method="get">
                                <div>
                                    <h2>{{row.title}}</h2>
                                    <a href="/articles2/{{row.id}}"  name="getId" value="{{row.id}}"><img src="{{row.picture}}" alt=""></a>
                                    <small id="small" style="margin-left: 13px">Uploaded form: {{row.authorId}}, on {{row.date}}</small>
                                </div><br><br>
                            </form>
                        </div>
                    {% endfor %}
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="myDiv"></div>
{% include "./common/footer.tpl" %}