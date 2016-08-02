<?php

/* pages/myAccount.tpl */
class __TwigTemplate_dc35536f4ec51135399b8d24f48520ecd8d9303dbbf278aaefe47e8476532b31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("./common/header.tpl")->display($context);
        // line 2
        echo "<style>
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
<div class=\"main-container\">
    <header class=\"page-header resume-header\">
        <div class=\"background-image-holder parallax-background\">
            <img class=\"background-image\" alt=\"Background Image\" src=\"/css/img/hero21.jpg\">
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <h1 class=\"text-white space-bottom-medium\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "email"), "html", null, true);
        echo "</h1>
                    <span>Web &amp; Interaction Designer</span>
                    <ul class=\"social-icons\">
                        <li>
                            <a href=\"#\">
                                <i class=\"icon social_twitter\"></i>
                            </a>
                        </li>

                        <li>
                            <a href=\"#\">
                                <i class=\"icon social_facebook\"></i>
                            </a>
                        </li>

                        <li>
                            <a href=\"#\">
                                <i class=\"icon social_instagram\"></i>
                            </a>
                        </li>

                        <li>
                            <a href=\"#\">
                                <i class=\"icon social_dribbble\"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center\">
                        <div class=\"photo-form-wrapper clearfix\">
                            <div style=\"display: none\" id=\"success\" class=\"alert alert-success\" role=\"alert\"></div>
                            <div style=\"display: none\" id=\"error-password\" class=\"alert alert-danger\" role=\"alert\"></div>
                            <table class=\"table\">
                                <form id=\"myAccForm\" method=\"post\">
                                    ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "email"), "html", null, true);
        echo " and sign up date: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "signupDate"), "html", null, true);
        echo "
                                    <tr class=\"success\"><td>Email:</td><td><div id=\"email\" name=\"email\" disabled class=\"form-email div_2\" type=\"text\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "email"), "html", null, true);
        echo "\" disabled>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "email"), "html", null, true);
        echo "</div></td></tr>
                                    <tr class=\"success\"><td>First name:</td><td><a href=\"#\" id=\"editFirstName\" data-type=\"text\" data-pk=\"1\" data-url=\"/ajax/updateMyAccount\" data-title=\"Enter first name\">";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "firstName"), "html", null, true);
        echo "</a></td></tr>
                                    <tr class=\"success\"><td>Last name:</td><td><a href=\"#\" id=\"editLastName\" name=\"editLastName\" data-type=\"text\" data-pk=\"1\" data-url=\"/ajax/updateMyAccount\" data-title=\"Enter first name\">";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "lastName"), "html", null, true);
        echo "</a></td></td></tr>
                                    <tr><td colspan=\"2\"><!--<input class=\"login-btn btn-filled\" type=\"submit\" value=\"Submit\">!-->
                                 </form>
                                <a href=\"/changePass\" id=\"changePass\">Change password</a></td></tr>
                                <div id=\"mess\" style=\"font-size: 20px; color: tomato\"></div>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
    </header>
</div>
<script>
    \$(document).ready(function () {
        \$.fn.editable.defaults.mode = 'popup';
        \$('#editFirstName').editable();
        \$('#editLastName').editable();
    });

    \$(\"#myAccForm\").submit(function(e){
        var url = \"/myAccount\";
        \$.ajax({
            type: \"POST\",
            url: url,
            data: \$(\"#myAccForm\").serialize(),
            dataType : 'json',
            success: document.getElementById(\"mess\").innerHTML = \"Success!\"
        });

        e.preventDefault();
    });
</script>

";
        // line 105
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/myAccount.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 105,  109 => 72,  105 => 71,  99 => 70,  93 => 69,  55 => 34,  21 => 2,  19 => 1,);
    }
}
