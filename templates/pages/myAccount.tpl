{% include "./common/header.tpl" %}
<style>
    .editable-clear-x{
        display: none! important;
    }
    input{
        margin: 0px! important;
    }
    table tr td{
        vertical-align: middle! important;
    }
    #changePass{
        color: white;
    }
    #changePass:hover{
        color: cyan! important;
    }
    #editFirstName, #editLastName{
        color: black;
    }
    i{
        color: white;
    }
</style>
<div class="main-container">
    <header class="page-header resume-header">
        <div class="background-image-holder parallax-background">
            <img class="background-image" alt="Background Image" src="/css/img/hero21.jpg">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-white space-bottom-medium">{{session.email}}</h1>
                    <span>Web &amp; Interaction Designer</span>
                    <ul class="social-icons">
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

                        <li>
                            <a href="#">
                                <i class="icon social_dribbble"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
                        <div class="photo-form-wrapper clearfix">
                            <div style="display: none" id="success" class="alert alert-success" role="alert"></div>
                            <div style="display: none" id="error-password" class="alert alert-danger" role="alert"></div>
                            <table class="table">
                                <form id="myAccForm" method="post">
                                    {{row.email}} and sign up date: {{row.signupDate}}
                                    <tr class="success"><td>Email:</td><td><div id="email" name="email" disabled class="form-email div_2" type="text" value="{{session.email}}" disabled>{{session.email}}</div></td></tr>
                                    <tr class="success"><td>First name:</td><td><a href="#" id="editFirstName" data-type="text" data-pk="1" data-url="/ajax/updateMyAccount" data-title="Enter first name">{{row.firstName}}</a></td></tr>
                                    <tr class="success"><td>Last name:</td><td><a href="#" id="editLastName" name="editLastName" data-type="text" data-pk="1" data-url="/ajax/updateMyAccount" data-title="Enter first name">{{row.lastName}}</a></td></td></tr>
                                    <tr><td colspan="2"><!--<input class="login-btn btn-filled" type="submit" value="Submit">!-->
                                 </form>
                                <a href="/changePass" id="changePass">Change password</a></td></tr>
                                <div id="mess" style="font-size: 20px; color: tomato"></div>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
    </header>
</div>
<script>
    $(document).ready(function () {
        $.fn.editable.defaults.mode = 'popup';
        $('#editFirstName').editable();
        $('#editLastName').editable();
    });

    $("#myAccForm").submit(function(e){
        var url = "/myAccount";
        $.ajax({
            type: "POST",
            url: url,
            data: $("#myAccForm").serialize(),
            dataType : 'json',
            success: document.getElementById("mess").innerHTML = "Success!"
        });

        e.preventDefault();
    });
</script>

{% include "./common/footer.tpl" %}