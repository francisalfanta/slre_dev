<?php

/* helpers/header.twig */
class __TwigTemplate_d6a927405da489323fb9bce78e2f859b extends Twig_Template
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
<!--[if IE 7]>
<html class=\"ie ie7\" ";
        // line 3
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "language_attributes", array(), "method"), "html", null, true);
        echo ">
<![endif]-->
<!--[if IE 8]>
<html class=\"ie ie8\" ";
        // line 6
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "language_attributes", array(), "method"), "html", null, true);
        echo ">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html ";
        // line 9
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "language_attributes", array(), "method"), "html", null, true);
        echo ">
<!--<![endif]-->

<head>
    <meta charset=\"";
        // line 13
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "bloginfo", array(0 => "charset"), "method"), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"author\" content=\"Aviators, http://themes.byaviators.com\">

    <link rel=\"shortcut icon\" href=\"";
        // line 17
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_stylesheet_directory_uri", array(), "method"), "html", null, true);
        echo "/assets/img/favicon.png\" type=\"image/png\">
    <link rel=\"profile\" href=\"http://gmpg.org/xfn/11\">
    <link rel=\"pingback\" href=\"";
        // line 19
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "bloginfo", array(0 => "pingback_url"), "method"), "html", null, true);
        echo "\">

    <!--[if lt IE 9]>
        <script src=\"";
        // line 22
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
        echo "/assets/js/html5.js\" type=\"text/javascript\"></script>
    <![endif]-->

    ";
        // line 25
        echo twig_escape_filter($this->env, aviators_templates_helpers_wp_head(), "html", null, true);
        echo "

    ";
        // line 27
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "is_singular", array(), "method")) {
            // line 28
            echo "        ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "wp_enqueue_script", array(0 => "comment-reply"), "method"), "html", null, true);
            echo "
    ";
        }
        // line 30
        echo "
    ";
        // line 31
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (($this->getAttribute($_wp_, "get_theme_mod", array(0 => "general_palette_is_hidden"), "method") == "")) {
            // line 32
            echo "        <link rel=\"stylesheet\" href=\"#\" type=\"text/css\" id=\"color-variant\">
    ";
        }
        // line 34
        echo "
    <title>";
        // line 35
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo $this->getAttribute($_wp_, "wp_title", array(0 => "|", 1 => false, 2 => "right"), "method");
        echo "</title>
</head>

<body class=\"";
        // line 38
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_wp_, "get_body_class"));
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, $_class_, "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo " ";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_theme_mod", array(0 => "header_variant"), "method"), "html", null, true);
        echo " color-";
        if (isset($context["color_class"])) { $_color_class_ = $context["color_class"]; } else { $_color_class_ = null; }
        echo twig_escape_filter($this->env, $_color_class_, "html", null, true);
        echo " ";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_theme_mod", array(0 => "general_pattern"), "method"), "html", null, true);
        echo " ";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_theme_mod", array(0 => "general_layout"), "method"), "html", null, true);
        echo " ";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "get_theme_mod", array(0 => "header_position_is_fixed"), "method")) {
            echo "header-fixed";
        }
        echo "\">

<div id=\"wrapper-outer\">
    <div id=\"wrapper\">
        <div id=\"wrapper-inner\">
            <div class=\"header-top-wrapper\">
                <div class=\"header-top\">
                    ";
        // line 45
        $this->env->loadTemplate("helpers/topbar.twig")->display($context);
        // line 46
        echo "
                    <!-- HEADER -->
                    <div id=\"header-wrapper\">
                        <div id=\"header\">
                            <div id=\"header-inner\">
                                <div class=\"container\">
                                    <div class=\"navbar\">
                                        <div class=\"navbar-inner\">
                                            <div class=\"row\">
                                                <div class=\"logo-wrapper span4\">
                                                    <a href=\"#nav\" id=\"btn-nav\">";
        // line 56
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Toggle navigation", 1 => "aviators"), "method"), "html", null, true);
        echo "</a>

                                                    ";
        // line 59
        echo "                                                    <div class=\"logo\">
                                                        ";
        // line 60
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "defined", array(0 => "ICL_LANGUAGE_CODE"), "method")) {
            // line 61
            echo "                                                            <a href=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "icl_get_home_url", array(), "method"), "html", null, true);
            echo "\" title=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Home", 1 => "aviators"), "method"), "html", null, true);
            echo "\">
                                                        ";
        } else {
            // line 63
            echo "                                                            <a href=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_bloginfo", array(0 => "wpurl"), "method"), "html", null, true);
            echo "\" title=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Home", 1 => "aviators"), "method"), "html", null, true);
            echo "\">
                                                        ";
        }
        // line 65
        echo "                                                            ";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "get_theme_mod", array(0 => "header_logo"), "method")) {
            // line 66
            echo "                                                                <img src=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_theme_mod", array(0 => "header_logo"), "method"), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Home", 1 => "aviators"), "method"), "html", null, true);
            echo "\">
                                                            ";
        } else {
            // line 68
            echo "                                                                <img src=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
            echo "/assets/img/logo.png\" alt=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Home", 1 => "aviators"), "method"), "html", null, true);
            echo "\">
                                                            ";
        }
        // line 70
        echo "                                                        </a>
                                                    </div><!-- /.logo -->

                                                    ";
        // line 74
        echo "                                                    ";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (($this->getAttribute($_wp_, "get_theme_mod", array(0 => "header_title_is_hidden"), "method") == "")) {
            // line 75
            echo "                                                        ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if ($this->getAttribute($_wp_, "get_bloginfo", array(0 => "name"), "method")) {
                // line 76
                echo "                                                            <div class=\"site-name\">
                                                                <a href=\"";
                // line 77
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_bloginfo", array(0 => "wpurl"), "method"), "html", null, true);
                echo "\" title=\"";
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Home"), "method"), "html", null, true);
                echo "\" class=\"brand\">
                                                                    ";
                // line 78
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_bloginfo", array(0 => "name"), "method"), "html", null, true);
                echo "
                                                                </a>
                                                            </div><!-- /.site-name -->
                                                        ";
            }
            // line 82
            echo "                                                    ";
        }
        // line 83
        echo "
                                                    ";
        // line 85
        echo "                                                    ";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (($this->getAttribute($_wp_, "get_theme_mod", array(0 => "header_description_is_hidden"), "method") == "")) {
            // line 86
            echo "                                                        ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if ($this->getAttribute($_wp_, "get_bloginfo", array(0 => "description"), "method")) {
                // line 87
                echo "                                                            <div class=\"site-slogan\">
                                                                <span>";
                // line 88
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo $this->env->getExtension('html_decode_twig_extension')->htmldecode($this->getAttribute($_wp_, "get_bloginfo", array(0 => "description"), "method"));
                echo "</span>
                                                            </div><!-- /.site-slogan -->
                                                        ";
            }
            // line 91
            echo "                                                    ";
        }
        // line 92
        echo "                                                </div><!-- /.logo-wrapper -->

                                                ";
        // line 94
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((($this->getAttribute($_wp_, "get_theme_mod", array(0 => "header_email_is_hidden"), "method") == "") || ($this->getAttribute($_wp_, "get_theme_mod", array(0 => "header_phone_is_hidden"), "method") == ""))) {
            // line 95
            echo "                                                    <div class=\"info\">
                                                        ";
            // line 97
            echo "                                                        ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (($this->getAttribute($_wp_, "get_theme_mod", array(0 => "header_email_is_hidden"), "method") == "")) {
                // line 98
                echo "                                                            <div class=\"site-email\">
                                                                <a href=\"mailto:";
                // line 99
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_option", array(0 => "header_email", 1 => "info@byaviators.com"), "method"), "html", null, true);
                echo "\">
                                                                    ";
                // line 100
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_option", array(0 => "header_email", 1 => "info@byaviators.com"), "method"), "html", null, true);
                echo "
                                                                </a>
                                                            </div><!-- /.site-email -->
                                                        ";
            }
            // line 104
            echo "
                                                        ";
            // line 106
            echo "                                                        ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (($this->getAttribute($_wp_, "get_theme_mod", array(0 => "header_phone_is_hidden"), "method") == "")) {
                // line 107
                echo "                                                            <div class=\"site-phone\">
                                                                <span>";
                // line 108
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_option", array(0 => "header_phone", 1 => "333-444-555"), "method"), "html", null, true);
                echo "</span>
                                                            </div><!-- /.site-phone -->
                                                        ";
            }
            // line 111
            echo "                                                    </div><!-- /.info -->
                                                ";
        }
        // line 113
        echo "
                                                ";
        // line 115
        echo "                                                ";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (($this->getAttribute($_wp_, "get_theme_mod", array(0 => "header_call_to_action_is_hidden"), "method") == "")) {
            // line 116
            echo "
                                                    <a class=\"btn btn-primary btn-large list-your-property arrow-right\"
                                                        href=\"";
            // line 118
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_property_submission_button_get", array(0 => "url"), "method"), "html", null, true);
            echo "\">
                                                        ";
            // line 119
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_property_submission_button_get", array(0 => "text"), "method"), "html", null, true);
            echo "
                                                    </a>
                                                ";
        }
        // line 122
        echo "                                            </div><!-- /.row -->
                                        </div><!-- /.navbar-inner -->
                                    </div><!-- /.navbar -->
                                </div><!-- /.container -->
                            </div><!-- /#header-inner -->
                        </div><!-- /#header -->
                    </div><!-- /#header-wrapper -->
                </div><!-- /.top -->
            </div><!-- /.top-wrapper -->

            <!-- NAVIGATION -->
            <div id=\"navigation\">
                <div class=\"container\">
                    <div class=\"navigation-wrapper\">
                        <div class=\"navigation clearfix-normal\">
                            ";
        // line 137
        if (isset($context["main_menu"])) { $_main_menu_ = $context["main_menu"]; } else { $_main_menu_ = null; }
        echo $_main_menu_;
        echo "

                            ";
        // line 139
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "dynamic_sidebar", array(0 => "navigation-right"), "method")) {
        }
        // line 140
        echo "                            ";
        // line 141
        echo "                                ";
        // line 142
        echo "                            ";
        // line 143
        echo "                        </div><!-- /.navigation -->
                    </div><!-- /.navigation-wrapper -->
                </div><!-- /.container -->
            </div><!-- /.navigation -->";
    }

    public function getTemplateName()
    {
        return "helpers/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 143,  379 => 142,  377 => 141,  375 => 140,  371 => 139,  365 => 137,  348 => 122,  341 => 119,  336 => 118,  332 => 116,  328 => 115,  325 => 113,  321 => 111,  314 => 108,  311 => 107,  307 => 106,  304 => 104,  296 => 100,  291 => 99,  288 => 98,  284 => 97,  281 => 95,  278 => 94,  274 => 92,  271 => 91,  264 => 88,  261 => 87,  257 => 86,  253 => 85,  250 => 83,  247 => 82,  239 => 78,  231 => 77,  228 => 76,  224 => 75,  220 => 74,  215 => 70,  205 => 68,  195 => 66,  191 => 65,  181 => 63,  171 => 61,  168 => 60,  165 => 59,  159 => 56,  147 => 46,  145 => 45,  108 => 38,  101 => 35,  98 => 34,  94 => 32,  91 => 31,  88 => 30,  81 => 28,  78 => 27,  73 => 25,  66 => 22,  59 => 19,  53 => 17,  45 => 13,  37 => 9,  30 => 6,  23 => 3,  19 => 1,);
    }
}
