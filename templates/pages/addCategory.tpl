{% include("/common/header.tpl") %}

<style xmlns="http://www.w3.org/1999/html">
    #btn{
        border: 2px solid aqua;
        color: aqua;
        font-size: 15px;
        transition: 0.7s;
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
    #btnDelete:hover{
        color: white! important;
        transition: 0.7s! important;
        background: tomato! important;
    }
    #btnChange:hover{
        background-color: darkorange;
        color: white! important;
        transition: 0.7s;
    }
    #newNameCategory, #oldNameCategory{
        display: inline-block;
    }
    #newNameCategory{
        margin-left: 40px;
    }
    h1{
        padding-top: 40px;
    }
    #text{
        padding-top: 2px;
    }
    #popBackground{
        position: fixed;
        width: 100%;
        height: 900px;
        top: 0px;
        left: 0px;
        background: rgba(0, 0, 0, 0.8);
        z-index: 100;
        cursor: pointer;
        display: none;
    }
    #pop_box{
        position: fixed;
        background: white;
        width: 20%;
        height: 340px;
        margin-top: 100px;
        margin-left: 37%;
        padding: 20px;
        z-index: 150;
        border-radius: 40px;
        display: none;
    }
    #close{
        width: 30px;
        height:30px;
        border-radius: 50%;
        border: 1px solid #999;
        text-align: center;
        line-height: 30px;
        font-size: 30px;
        float: right;
        cursor: pointer;
    }
    #close:after{
        clear: both;
    }
    #yes, #no{
        font-size: 30px;
        font-weight: bold;
        cursor: pointer;
        padding: 8px 15px;
        border-radius: 30px;
        transition: .6s;
    }
    #yes{
        margin-left: 25%;
        color: limegreen;
        border: 4px solid limegreen;
    }
    #yes:hover{
        background: limegreen;
        color: white;
    }
    #no{
        margin-left: 5%;
        color: tomato;
        border: 4px solid tomato;
    }
    #no:hover{
        background: tomato;
        color: white;
    }
    h2{
        width: 240px;
        margin: 0 auto;
        text-align: center;
        margin-bottom: 70px;
        margin-top: 50px;
    }
</style>
<div id="pop_box">
    <span id="close">&times</span>
    <h2> Are you sure you want to delete this category?</h2>
    <span id="yes" onclick="conf()">&#10004;</span>
    <span id="no">&#10008;</span>
</div>
<div id="popBackground"></div>

<div class="main-container">
    <section class="inline-image-right">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 align-vertical no-align-mobile">
                    <form action="addCategory" method="post" enctype="multipart/form-data">
                        <h1>Add new category</h1>
                        <input type="text" name="newCategory" placeholder=" * Category" style="width: 581px">
                        <input class="login-btn btn-filled" id="btn" type="submit" value="add"/>
                    </form>

                    <form action="addCategory" id="deleteForm" method="post" onsubmit="return false">
                        <h1>Delete category</h1>
                        <select name="deleteText" style="width: 581px; margin-bottom: 25px; border-radius: 5px">
                            <option hidden >Choose category:</option>
                            {% for row in allRows %}
                            <option value="{{row.id}}">{{row.category}}</option>
                            {% endfor %}
                        </select>
                        <input class="login-btn btn-filled" style="border-color: tomato! important; color: tomato" onclick="popUpMaika()" id="btnDelete" type="submit" value="Delete"/>
                    </form>

                    <form action="addCategory" method="post" enctype="multipart/form-data">
                        <h1>Change name</h1>
                        <div id="oldNameCategory">
                            <h5 id="old" style="color: darkorange;">Old name</h5>
                            <select name="categoryId" id="choice">
                                <option hidden >Choose category:</option>
                                {% for row in allRows %}
                                <option value="{{row.id}}">{{row.category}}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div id="newNameCategory">
                            <h5 id="new" style="color: darkorange;">New name</h5>
                            <input type="text" name="editText" id="text" placeholder=" * Edit category" style="width: 250px"><br>
                        </div>
                        <input class="login-btn btn-filled" style="border-color: darkorange! important; color: darkorange" id="btnChange" type="submit" value="Edit"/>
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
    function conf() {
        var yes = document.getElementById('deleteForm');
        yes.submit();
    }
    function popUpMaika() {
        $(document).ready(function () {
            $(document).on("click", '#no', function () {
                $('#popBackground').fadeOut();
                $('#pop_box').fadeOut();
                return false;
            })
        });
        $(document).ready( function () {
            $(document).on("click",'#btnDelete' , function () {
                $('#popBackground').fadeIn();
                $('#pop_box').fadeIn();
                return false;
            })
        });
        $(document).ready( function () {
            $(document).on("click",'#close' , function () {
                $('#popBackground').fadeOut();
                $('#pop_box').fadeOut();
                return false;
            })
        });
        $(document).ready( function () {
            $(document).on("click",'#popBackground' , function () {
                $('#popBackground').fadeOut();
                $('#pop_box').fadeOut();
                return false;
            })
        })};
</script>
{% include "./common/footer.tpl" %}