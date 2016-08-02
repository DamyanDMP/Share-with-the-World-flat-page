<?php

/* pages/Articles2.tpl */
class __TwigTemplate_4ae4da0560417c6cab003e2c2d307595141141770772c803c82a3123141b12bf extends Twig_Template
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
        $this->env->loadTemplate("/common/header.tpl")->display($context);
        // line 2
        echo "
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
<div class=\"main-container\">
    <section class=\"inline-image-right\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-7 text-left\">
                    <div id='article' style='width: 600px'>
                        <h2 style='margin-bottom: 0px! important'>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "title"), "html", null, true);
        echo "</h2><br><br>
                        <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "picture"), "html", null, true);
        echo "\" style=\"width: 600px\">
                        <small>Date: ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "date"), "html", null, true);
        echo " --- Uploaded form: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "authorId"), "html", null, true);
        echo "</small><br>
                        <h4 style=\"width: 600px\">";
        // line 31
        echo $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "articleContent");
        echo "</h4>
                    </div>
                    <br><br><br>
                </div>
                <div class=\"col-sm-5 text-center\">
                    <img alt=\"Product Image\" class=\"product-image\" src=\"/css/img/devices.png\">
                </div>
                <a href=\"/articles\">
                    <input type=\"submit\" id=\"btn\" value=\"Get back\">
                </a>
            </div>
        </div>
    </section>
</div>
";
        // line 45
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/Articles2.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 45,  63 => 31,  57 => 30,  53 => 29,  49 => 28,  21 => 2,  19 => 1,);
    }
}
