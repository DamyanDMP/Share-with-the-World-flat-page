<?php

/* pages/header.tpl */
class __TwigTemplate_cc70a2e62e2236b89d1d3f6704a6cf189a63c34591bf4c39332e060e70f15cf3 extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html ng-app=\"app\" class=\"ng-scope no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <title>Pivot - ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <link href=\"/css/css/flexslider.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
    <link href=\"/css/css/line-icons.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
    <link href=\"/css/css/elegant-icons.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
    <link href=\"/css/css/lightbox.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
    <link href=\"/css/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
    <link href=\"/css/css/theme-zest.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
    <link href=\"/css/css/custom.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
    <script src=\"/css/js/jquery-3.1.0.min.js\"></script>
    <link href=\"https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">

    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
    <!--[if gte IE 9]>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/ie9.css\" />
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
    <script src=\"/css/js/modernizr-2.6.2-respond-1.1.0.min.js\"></script>
    <link href=\"http://fonts.googleapis.com/css?family=Roboto:300italic,400,300,700\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/css/css/font-roboto.css\" rel=\"stylesheet\" type=\"text/css\">
</head>
<style>
    nav, div{
        background: gray;
    }
</style>
<body>
<div class=\"loader\">
    <div class=\"spinner\">
        <div class=\"double-bounce1\"></div>
        <div class=\"double-bounce2\"></div>
    </div>
</div>

<div class=\"nav-container\">
    <nav class=\"top-bar overlay-bar\">
        <div class=\"container\">

            <div class=\"row utility-menu\">
                <div class=\"col-sm-12\">
                    <div class=\"utility-inner clearfix\">

                        <div class=\"pull-right\">
                            ";
        // line 59
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "isLogged") == false)) {
            // line 60
            echo "                            <a href=\"/login\" class=\"btn btn-primary btn-white btn-xs\">Login</a>
                            <a href=\"/signup\" class=\"btn btn-primary btn-filled btn-xs\">Signup</a>
                            ";
        } else {
            // line 63
            echo "                            <a href=\"/addCategory\" class=\"btn btn-primary btn-white btn-xs\">Add category</a>
                            <a href=\"/articles\" class=\"btn btn-primary btn-white btn-xs\">See articles</a>
                            <a href=\"/addArticle\" class=\"btn btn-primary btn-white btn-xs\">Add article</a>
                            <a href=\"/myAccount\" class=\"btn btn-primary btn-white btn-xs\">Profile</a>
                            <a href=\"/changePass\" class=\"btn btn-primary btn-white btn-xs\">Change Password</a>
                            <a href=\"/logout\" class=\"btn btn-primary btn-filled btn-xs\">Logout</a>
                            ";
        }
        // line 70
        echo "                            <a href=\"#\" class=\"language\"><img alt=\"English\" src=\"/css/img/english.png\"></a>
                            <a href=\"#\" class=\"language\"><img alt=\"English\" src=\"/css/img/denmark.png\"></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class=\"row nav-menu\">
                <div class=\"col-md-2 col-sm-3 columns\">
                    <a href=\"home\"><img class=\"logo logo-light\" alt=\"Logo\" src=\"/css/img/logo-light.png\"></a>
                    <a href=\"home\"><img class=\"logo logo-dark\" alt=\"Logo\" src=\"/css/img/logo-dark.png\"></a>
                </div>

                <div class=\"col-md-10 col-sm-9 columns\">
                    <ul class=\"menu\">
                        <li><a href=\"home\">Home</a></li>
                        <li class=\"has-dropdown\"><a href=\"#\">Categories</a>
                            <ul class=\"subnav\">
                                ";
        // line 89
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["select"]) ? $context["select"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 90
            echo "                                <li><a href=\"/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "category"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "category"), "html", null, true);
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                            </ul>
                        </li>
                        <div style=\"display: none\"><li class=\"has-dropdown\"><a href=\"#\">Half Width</a>
                            <div class=\"subnav subnav-halfwidth\">
                                <div class=\"col-md-6\">
                                    <h6 class=\"alt-font\">Subnav Title</h6>
                                    <ul class=\"subnav\">
                                        <li><a href=\"#\">Example</a></li>
                                        <li><a href=\"#\">Example</a></li>
                                        <li><a href=\"#\">Example</a></li>
                                        <li><a href=\"#\">Example</a></li>
                                    </ul>
                                </div>

                                <div class=\"col-md-6\">
                                    <h6 class=\"alt-font\">Subnav Title</h6>
                                    <ul class=\"subnav\">
                                        <li><a href=\"#\">Example</a></li>
                                        <li><a href=\"#\">Example</a></li>
                                        <li><a href=\"#\">Example</a></li>
                                        <li><a href=\"#\">Example</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class=\"has-dropdown\"><a href=\"#\">Fullwidth</a>
                            <div class=\"subnav subnav-fullwidth\">
                                <div class=\"col-md-3\">
                                    <h6 class=\"alt-font\">Subnav Title</h6>
                                    <ul class=\"subnav\">
                                        <li><a href=\"#\">Example</a></li>
                                        <li><a href=\"#\">Example</a></li>
                                        <li><a href=\"#\">Example</a></li>
                                        <li><a href=\"#\">Example</a></li>
                                    </ul>
                                </div>

                                <div class=\"col-md-3\">
                                    <h6 class=\"alt-font\">Subnav Title</h6>
                                    <ul class=\"subnav\">
                                        <li><a href=\"#\">Example</a></li>
                                        <li><a href=\"#\">Example</a></li>
                                        <li><a href=\"#\">Example</a></li>
                                        <li><a href=\"#\">Example</a></li>
                                    </ul>
                                </div>

                                <div class=\"col-md-3\">
                                    <h6 class=\"alt-font\">Subnav Title</h6>
                                    <ul class=\"subnav\">
                                        <li><a href=\"#\">Example</a></li>
                                        <li><a href=\"#\">Example</a></li>
                                        <li><a href=\"#\">Example</a></li>
                                        <li><a href=\"#\">Example</a></li>
                                    </ul>
                                </div>

                                <div class=\"col-md-3\">
                                    <h6 class=\"alt-font\">Subnav Title</h6>
                                    <ul class=\"subnav\">
                                        <li><a href=\"#\">Example</a></li>
                                        <li><a href=\"#\">Example</a></li>
                                        <li><a href=\"#\">Example</a></li>
                                        <li><a href=\"#\">Example</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                    <ul class=\"social-icons text-right\">
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
                    </ul>
                </div>
            </div>

            <div class=\"mobile-toggle\">
                <i class=\"icon icon_menu\"></i>
            </div>

        </div>
    </nav>

</div>

    ";
        // line 193
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 193,  134 => 92,  123 => 90,  119 => 89,  98 => 70,  89 => 63,  84 => 60,  82 => 59,  29 => 9,  19 => 1,);
    }
}
