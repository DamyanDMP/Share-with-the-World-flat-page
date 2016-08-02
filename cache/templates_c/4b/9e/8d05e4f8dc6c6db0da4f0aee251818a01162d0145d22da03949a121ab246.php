<?php

/* pages/changePass.tpl */
class __TwigTemplate_4b9e8d05e4f8dc6c6db0da4f0aee251818a01162d0145d22da03949a121ab246 extends Twig_Template
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
    #edit, #save{
        padding: 3px 10px 3px 10px;
        color: white;
        border-radius: 15px;
        border: 2px solid white;
        margin-left: 20px;
        margin-bottom: 10px;
    }
    input{
        margin: 10px 0px 10px! important;
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
        // line 24
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
                            <div id=\"mess\" style=\"font-size: 20px; color: tomato\"></div>
                            <div id=\"just\" style=\"font-size: 20px; color: tomato\"></div>
                            <table class=\"table\">
                                <form id=\"myAccForm\" method=\"post\">
                                    <tr class=\"success\"><td ><input type=\"password\" id=\"editPassword\" name=\"editPassword\" disabled=\"true\" class=\"form-editPassword div_2\" data-type=\"password\" placeholder=\"Enter new password\"></td></tr>
                                    <tr class=\"success\"><td><input type=\"password\" id=\"editrepeatPassword\" name=\"editRepeatPassword\" disabled=\"true\" class=\"form-repeatPassword div_2\" data-type=\"password\" placeholder=\"Confirm new password\"></td></tr>
                                    <tr><td align=\"center\"><input class=\"login-btn btn-filled\"  type=\"submit\" value=\"Submit\"></td></tr>
                                </form>
                                <button id=\"edit\" class=\"btn-filled\">Edit</button>
                                <button id=\"save\" class=\"btn-filled\">Save changes</button>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
    </header>
</div>
<script>
    var div = document.getElementsByClassName('div_2');
    var save = document.getElementById('save');
    var event = document.getElementById('edit');

    event.addEventListener('click', function () {
        for (var i = 0; i < div.length; i++) {
            div[i].disabled = false;
        }
        document.getElementById('mess').innerHTML = \"Can change every field!\";
        document.getElementById('just').innerHTML = \"\";
    });

    save.addEventListener('click', function () {
        for (var i = 0; i < div.length; i++) {
            div[i].disabled = true;
        }
        document.getElementById('mess').innerHTML = \"Fields are locked\";
        document.getElementById('just').innerHTML = \"Now just click submit\";
    });
</script>

";
        // line 96
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/changePass.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 96,  45 => 24,  21 => 2,  19 => 1,);
    }
}
