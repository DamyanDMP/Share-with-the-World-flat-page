<?php

/* pages/Category.tpl */
class __TwigTemplate_54b57d850df7417ab9c600220bd1881d3b8c10bec2dd099fbe3d34f0a684834e extends Twig_Template
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
        echo "<style>
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
<div class=\"col-lg-3 col-md-3 col-sm-3\" style=\"
            position:fixed! important;
            left: 11%;
            top: 190px;
            z-index: 100;\">
    <p id=\"catName\" align=\"center\">Choose category:</p>
    <ul>
        ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 32
            echo "        <li><a href=\"/articles2/category/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category"), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </ul>
</div>
<div class=\"main-container\">
    <div class=\"inline-image-right col-lg-12 col-md-12 col-sm-12\">
        <div class=\"col-lg-12 col-md-12 col-sm-12\" style=\"height: 150px\"></div>
        <div class=\"col-lg-12 col-md-12 col-sm-12\">
            <div class=\"col-lg-1 col-md-1 col-sm-1\"></div>
            <div class=\"col-lg-10 col-md-10 col-sm-10\" style=\"background: white; min-height: 500px; margin: 0 auto! important; border-radius: 30px; margin-bottom: 80px! important\">
                <div class=\"col-lg-12 col-md-12 col-sm-12\" style=\"height: 30px\"></div>
                <div class=\"col-lg-4 col-md-4 col-sm-4\">
                    <div class=\"col-lg-3 col-md-3 col-sm-3\" align=\"center\">
                    </div>
                </div>
                <div class=\"col-lg-8 col-md-8 col-sm-8\" style=\"padding-left: 30px\">
                    ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 49
            echo "                        <div class=\"col-sm-4 row\" style=\"margin-left: 0px; border-top: 2px solid gray;\">
                            <form action=\"/articles2\" method=\"get\">
                                <div>
                                    <h2>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "title"), "html", null, true);
            echo "</h2>
                                    <a href=\"/articles2/";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "id"), "html", null, true);
            echo "\"  name=\"getId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "id"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "picture"), "html", null, true);
            echo "\" alt=\"\"></a>
                                    <small id=\"small\" style=\"margin-left: 13px\">Uploaded form: ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "authorId"), "html", null, true);
            echo ", on ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "date"), "html", null, true);
            echo "</small>
                                </div><br><br>
                            </form>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<div id=\"myDiv\"></div>
";
        // line 66
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/Category.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 66,  117 => 59,  104 => 54,  96 => 53,  92 => 52,  87 => 49,  83 => 48,  67 => 34,  56 => 32,  52 => 31,  21 => 2,  19 => 1,);
    }
}
