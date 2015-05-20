<?php

/* helpers/topbar.twig */
class __TwigTemplate_0413a5e59b35e3a9e8f1b1bde698a31f extends Twig_Template
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
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((($this->getAttribute($_wp_, "get_theme_mod", array(0 => "topbar_breadcrumb_is_hidden"), "method") == "") || ($this->getAttribute($_wp_, "get_theme_mod", array(0 => "topbar_user_links_is_hidden"), "method") == ""))) {
            // line 2
            echo "    <div class=\"breadcrumb-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span12\">
                    ";
            // line 7
            echo "                    ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (($this->getAttribute($_wp_, "get_theme_mod", array(0 => "topbar_breadcrumb_is_hidden"), "method") == "")) {
                // line 8
                echo "                        <div class=\"breadcrumb pull-left\">
                            ";
                // line 9
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if ($this->getAttribute($_wp_, "function_exists", array(0 => "bcn_display"), "method")) {
                    // line 10
                    echo "                                ";
                    if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                    if (($this->getAttribute($_wp_, "get_the_ID") != 0)) {
                        // line 11
                        echo "                                    ";
                        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "bcn_display"), "html", null, true);
                        echo "
                                ";
                    }
                    // line 13
                    echo "                            ";
                }
                // line 14
                echo "                        </div><!-- /.breadcrumb -->
                    ";
            }
            // line 16
            echo "
                    ";
            // line 18
            echo "                    ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (($this->getAttribute($_wp_, "get_theme_mod", array(0 => "topbar_user_links_is_hidden"), "method") == "")) {
                // line 19
                echo "                        <div class=\"account pull-right\">
                            ";
                // line 20
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if ($this->getAttribute($_wp_, "is_user_logged_in", array(), "method")) {
                    // line 21
                    echo "                                ";
                    if (isset($context["authenticated_menu"])) { $_authenticated_menu_ = $context["authenticated_menu"]; } else { $_authenticated_menu_ = null; }
                    echo $_authenticated_menu_;
                    echo "
                            ";
                } else {
                    // line 23
                    echo "                                ";
                    if (isset($context["anonymous_menu"])) { $_anonymous_menu_ = $context["anonymous_menu"]; } else { $_anonymous_menu_ = null; }
                    echo $_anonymous_menu_;
                    echo "
                            ";
                }
                // line 24
                echo "                        
                        </div>
                    ";
            }
            // line 27
            echo "                </div><!-- /.span12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb-wrapper -->
";
        }
    }

    public function getTemplateName()
    {
        return "helpers/topbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 24,  76 => 23,  69 => 21,  63 => 19,  56 => 16,  52 => 14,  49 => 13,  42 => 11,  38 => 10,  35 => 9,  32 => 8,  28 => 7,  22 => 2,  381 => 143,  379 => 142,  377 => 141,  375 => 140,  371 => 139,  365 => 137,  348 => 122,  341 => 119,  336 => 118,  332 => 116,  328 => 115,  325 => 113,  321 => 111,  314 => 108,  311 => 107,  307 => 106,  304 => 104,  296 => 100,  291 => 99,  288 => 98,  284 => 97,  281 => 95,  278 => 94,  274 => 92,  271 => 91,  264 => 88,  261 => 87,  257 => 86,  253 => 85,  250 => 83,  247 => 82,  239 => 78,  231 => 77,  228 => 76,  224 => 75,  220 => 74,  215 => 70,  205 => 68,  195 => 66,  191 => 65,  181 => 63,  171 => 61,  168 => 60,  165 => 59,  159 => 56,  147 => 46,  145 => 45,  108 => 38,  101 => 35,  98 => 34,  94 => 32,  91 => 31,  88 => 27,  81 => 28,  78 => 27,  73 => 25,  66 => 20,  59 => 18,  53 => 17,  45 => 13,  37 => 9,  30 => 6,  23 => 3,  19 => 1,);
    }
}
