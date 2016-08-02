<?php

/* ./common/belowHeader.tpl */
class __TwigTemplate_6bb9c473459da5ac903a7e4516476eef920241cf4f109d09ece0aeb12ac92150 extends Twig_Template
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
        echo "
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
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["select"]) ? $context["select"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 15
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
        // line 17
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
    }

    public function getTemplateName()
    {
        return "./common/belowHeader.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 17,  39 => 15,  35 => 14,  21 => 2,  102 => 78,  100 => 77,  24 => 3,  22 => 2,  19 => 1,);
    }
}
