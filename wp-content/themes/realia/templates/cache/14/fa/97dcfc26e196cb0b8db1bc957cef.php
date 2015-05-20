<?php

/* helpers/palette.twig */
class __TwigTemplate_14fa97dcfc26e196cb0b8db1bc957cef extends Twig_Template
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
        echo "<div class=\"palette\">
    <div class=\"toggle\">
        <a href=\"#\">";
        // line 3
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Toggle", 1 => "aviators"), "method"), "html", null, true);
        echo "</a>
    </div><!-- /.toggle -->

    <div class=\"inner\">
        <div class=\"headers\">
            <h2>";
        // line 8
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Header styles", 1 => "aviators"), "method"), "html", null, true);
        echo "</h2>
            <ul>
                <li><a class=\"header-light\">";
        // line 10
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Light", 1 => "aviators"), "method"), "html", null, true);
        echo "</a></li>
                <li><a class=\"header-normal\">";
        // line 11
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Normal", 1 => "aviators"), "method"), "html", null, true);
        echo "</a></li>
                <li><a class=\"header-dark\">";
        // line 12
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Dark", 1 => "aviators"), "method"), "html", null, true);
        echo "</a></li>
            </ul>
        </div><!-- /.headers -->

        <div class=\"patterns\">
            <h2>";
        // line 17
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Patterns", 1 => "aviators"), "method"), "html", null, true);
        echo "</h2>
            <ul>
                <li><a class=\"pattern-cloth-alike\">cloth-alike</a></li>
                <li><a class=\"pattern-corrugation\">corrugation</a></li>
                <li><a class=\"pattern-diagonal-noise\">diagonal-noise</a></li>
                <li><a class=\"pattern-dust\">dust</a></li>
                <li><a class=\"pattern-fabric-plaid\">fabric-plaid</a></li>
                <li><a class=\"pattern-farmer\">farmer</a></li>
                <li><a class=\"pattern-grid-noise\">grid-noise</a></li>
                <li><a class=\"pattern-lghtmesh\">lghtmesh</a></li>
                <li><a class=\"pattern-pw-maze-white\">pw-maze-white</a></li>
                <li><a class=\"pattern-none\">none</a></li>
            </ul>
        </div>

        <div class=\"colors\">
            <h2>";
        // line 33
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Color variants", 1 => "aviators"), "method"), "html", null, true);
        echo "</h2>
            <ul>
                <li><a href=\"";
        // line 35
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
        echo "/assets/css/realia-red.css\" class=\"red\">";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Red", 1 => "aviators"), "method"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 36
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
        echo "/assets/css/realia-magenta.css\" class=\"magenta\">";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Magenta", 1 => "aviators"), "method"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 37
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
        echo "/assets/css/realia-brown.css\" class=\"brown\">";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Brown", 1 => "aviators"), "method"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 38
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
        echo "/assets/css/realia-orange.css\" class=\"orange\">";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Orange", 1 => "aviators"), "method"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 39
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
        echo "/assets/css/realia-brown-dark.css\" class=\"brown-dark\">";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Brown dark", 1 => "aviators"), "method"), "html", null, true);
        echo "</a></li>

                <li><a href=\"";
        // line 41
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
        echo "/assets/css/realia-gray-red.css\" class=\"gray-red\">";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Gray Red", 1 => "aviators"), "method"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 42
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
        echo "/assets/css/realia-gray-magenta.css\" class=\"gray-magenta\">";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Gray Magenta", 1 => "aviators"), "method"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 43
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
        echo "/assets/css/realia-gray-brown.css\" class=\"gray-brown\">";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Gray Brown", 1 => "aviators"), "method"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 44
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
        echo "/assets/css/realia-gray-orange.css\" class=\"gray-orange\">";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Gray Orange", 1 => "aviators"), "method"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 45
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
        echo "/assets/css/realia-gray-brown-dark.css\" class=\"gray-brown-dark\">";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Gray Brown dark", 1 => "aviators"), "method"), "html", null, true);
        echo "</a></li>

                <li><a href=\"";
        // line 47
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
        echo "/assets/css/realia-green-light.css\" class=\"green-light\">";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Green light", 1 => "aviators"), "method"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 48
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
        echo "/assets/css/realia-green.css\" class=\"green\">";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Green", 1 => "aviators"), "method"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 49
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
        echo "/assets/css/realia-turquiose.css\" class=\"turquiose\">";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Turquiose", 1 => "aviators"), "method"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 50
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
        echo "/assets/css/realia-blue.css\" class=\"blue\">";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Blue", 1 => "aviators"), "method"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 51
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
        echo "/assets/css/realia-violet.css\" class=\"violet\">";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Violet", 1 => "aviators"), "method"), "html", null, true);
        echo "</a></li>

                <li><a href=\"";
        // line 53
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
        echo "/assets/css/realia-gray-green-light.css\" class=\"gray-green-light\">";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Gray Green light", 1 => "aviators"), "method"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 54
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
        echo "/assets/css/realia-gray-green.css\" class=\"gray-green\">";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Gray Green", 1 => "aviators"), "method"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 55
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
        echo "/assets/css/realia-gray-turquiose.css\" class=\"gray-turquiose\">";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Gray Turquiose", 1 => "aviators"), "method"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 56
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
        echo "/assets/css/realia-gray-blue.css\" class=\"gray-blue\">";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Gray Blue", 1 => "aviators"), "method"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 57
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
        echo "/assets/css/realia-gray-violet.css\" class=\"gray-violet\">";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Gray Violet", 1 => "aviators"), "method"), "html", null, true);
        echo "</a></li>
            </ul>
        </div><!-- /.colors -->

        <div class=\"layouts clearfix\">
            <h2>";
        // line 62
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Layouts", 1 => "aviators"), "method"), "html", null, true);
        echo "</h2>
            <p>
                <label>
                    <input type=\"radio\" name=\"layout\" value=\"wide\" checked=\"checked\"> ";
        // line 65
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Wide", 1 => "aviators"), "method"), "html", null, true);
        echo "
                </label>
            </p>

            <p>
                <label>
                    <input type=\"radio\" name=\"layout\" value=\"boxed\"> ";
        // line 71
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Boxed", 1 => "aviators"), "method"), "html", null, true);
        echo "
                </label>
            </p>
        </div><!-- /.layouts -->

        <a href=\"#\" class=\"btn btn-primary reset\">";
        // line 76
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Reset default", 1 => "aviators"), "method"), "html", null, true);
        echo "</a>
    </div><!-- /.inner -->
</div><!-- /.palette -->";
    }

    public function getTemplateName()
    {
        return "helpers/palette.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 76,  267 => 71,  257 => 65,  250 => 62,  238 => 57,  230 => 56,  222 => 55,  206 => 53,  197 => 51,  181 => 49,  165 => 47,  156 => 45,  148 => 44,  140 => 43,  132 => 42,  115 => 39,  107 => 38,  99 => 37,  91 => 36,  83 => 35,  77 => 33,  48 => 12,  43 => 11,  38 => 10,  32 => 8,  239 => 96,  236 => 95,  226 => 89,  223 => 88,  220 => 87,  217 => 86,  214 => 54,  211 => 84,  208 => 83,  196 => 73,  189 => 50,  186 => 70,  183 => 69,  176 => 67,  173 => 48,  170 => 65,  163 => 63,  160 => 62,  157 => 61,  150 => 59,  147 => 58,  144 => 57,  137 => 55,  134 => 54,  131 => 53,  124 => 41,  121 => 49,  118 => 48,  108 => 42,  101 => 37,  94 => 32,  87 => 30,  84 => 29,  79 => 26,  72 => 24,  69 => 23,  64 => 20,  57 => 17,  54 => 17,  49 => 14,  42 => 12,  39 => 11,  33 => 7,  30 => 6,  23 => 3,  19 => 1,);
    }
}
