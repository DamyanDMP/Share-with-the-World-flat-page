<?php

/* pages/contactUs.tpl */
class __TwigTemplate_7b38fc0d2d19aadcd8759dfffeb6aa80be606681d023d7da42c930673c2f4b3c extends Twig_Template
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
        echo "<link rel=\"stylesheet\" href=\"./css/css/contactUsStyleSocialIcons.css\">
<div class=\"fill\" style=\"background-image:url('/css/img/picContacts.jpg');\">
    <table id=\"table\">
        <tr><th colspan=\"4\"><h2 align=\"center\">Social</h2></th></tr>
        <tr align=\"center\" id=\"socialCont\">
            <td>
                <a href=\"\" id=\"f-icon\"><i class=\"icons\" id=\"facebook\"></i></a>
            </td>
            <td>
                <a href=\"\" class=\"icon\"><i class=\"icons\" id=\"youtube\"></i></a>
            </td>
            <td>
                <a href=\"\" class=\"icon\"><i class=\"icons\" id=\"twitter\"></i></a>
            </td>
            <td>
                <a href=\"\" class=\"icon\"><i class=\"icons\" id=\"google\"></i></a>
            </td>
        </tr>
    </table>
    <div id=\"fields\">
        <div id=\"f-row\">
            <input type=\"text\" class=\"text names\" name=\"getName\" id=\"name\" placeholder=\"Name\">
            <input type=\"text\" class=\"text names\" name=\"getEmail\" id=\"email\" placeholder=\"Email\">
        </div>
        <div align=\"center\">
            <textarea name=\"message\" id=\"mess\" class=\"text\" style=\"resize: vertical; max-height: 300px\" cols=\"46\" rows=\"10\" placeholder=\"Text..\"></textarea>
        </div>
        <div align=\"center\">
            <button class=\"myBtn\">Send</button>
        </div>
    </div>
</div>
<script src=\"/css/slaider/js/jquery.js\"></script>
<script src=\"/css/slaider/js/bootstrap.js\"></script>
<script src=\"/css/slaider/js/bootstrap.min.js\"></script>
<script src=\"https://www.youtube.com/iframe_api\"></script>
<script src=\"/css/js/jquery.min.js\"></script>
<script src=\"/css/js/jquery.plugin.min.js\"></script>
<script src=\"/css/js/bootstrap.min.js\"></script>
<script src=\"/css/js/jquery.flexslider-min.js\"></script>
<script src=\"/css/js/smooth-scroll.min.js\"></script>
<script src=\"/css/js/skrollr.min.js\"></script>
<script src=\"/css/js/spectragram.min.js\"></script>
<script src=\"/css/js/scrollReveal.min.js\"></script>
<script src=\"/css/js/isotope.min.js\"></script>
<script src=\"/css/js/twitterFetcher_v10_min.js\"></script>
<script src=\"/css/js/lightbox.min.js\"></script>
<script src=\"/css/js/jquery.countdown.min.js\"></script>
<script src=\"/css/js/scripts.js\"></script>
</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "pages/contactUs.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
