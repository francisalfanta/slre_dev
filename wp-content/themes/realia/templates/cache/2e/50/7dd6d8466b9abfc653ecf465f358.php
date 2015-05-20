<?php

/* properties/map-infobox.twig */
class __TwigTemplate_2e507dd6d8466b9abfc653ecf465f358 extends Twig_Template
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
        ob_start();
        // line 2
        echo "    <div class=\"infobox\">
        <div class=\"close\">
            <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_template_directory_uri", array(), "method"), "html", null, true);
        echo "/assets/img/close.png\" alt=\"\">
        </div>

        <div class=\"image\">
            <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_permalink", array(0 => $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "ID")), "method"), "html", null, true);
        echo "\">";
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_the_post_thumbnail", array(0 => $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "ID")), "method")) {
            echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_the_post_thumbnail", array(0 => $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "ID"), 1 => "admin-thumb"), "method");
        } else {
            // line 9
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_template_directory_uri", array(), "method"), "html", null, true);
            echo "/assets/img/property-tmp-small.png\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "post_title"), "html", null, true);
            echo "\" width=\"80\">";
        }
        // line 10
        echo "            </a>
        </div>

        <div class=\"title\">
            <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_permalink", array(0 => $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "ID")), "method"), "html", null, true);
        echo "\">";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_title"), 0)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_title"), 0), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "post_title"), "html", null, true);
        }
        echo "</a>
        </div>

        <div class=\"area\">
            <span class=\"key\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Area", 1 => "aviators"), "method"), "html", null, true);
        echo ":</span>
            <span class=\"value\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_area"), 0), "html", null, true);
        echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "units", 2 => "area"), "method");
        echo "</span>
        </div>

        <div class=\"price\">";
        // line 22
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_custom_text"), 0)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_custom_text"), 0), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_price_format", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_price"), 0)), "method"), "html", null, true);
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_price_suffix"), 0)) {
                // line 23
                echo "                <span class=\"suffix\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_price_suffix"), 0), "html", null, true);
                echo "</span>";
            }
        }
        echo "</div>

        <div class=\"link\">
            <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_permalink", array(0 => $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "ID")), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "View more", 1 => "aviators"), "method"), "html", null, true);
        echo "</a>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "properties/map-infobox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 26,  81 => 23,  75 => 22,  68 => 19,  64 => 18,  51 => 14,  38 => 9,  25 => 4,  614 => 233,  610 => 231,  601 => 227,  594 => 223,  590 => 222,  587 => 221,  585 => 220,  582 => 219,  573 => 215,  566 => 211,  562 => 210,  559 => 209,  557 => 208,  554 => 207,  545 => 203,  538 => 199,  534 => 198,  531 => 197,  529 => 196,  526 => 195,  518 => 189,  503 => 187,  499 => 186,  494 => 184,  487 => 180,  483 => 179,  480 => 178,  478 => 177,  475 => 176,  467 => 170,  452 => 168,  448 => 167,  443 => 165,  436 => 161,  432 => 160,  429 => 159,  427 => 158,  422 => 155,  414 => 149,  399 => 147,  395 => 146,  390 => 144,  383 => 140,  379 => 139,  376 => 138,  374 => 137,  371 => 136,  363 => 130,  348 => 128,  344 => 127,  339 => 125,  332 => 121,  328 => 120,  325 => 119,  323 => 118,  320 => 117,  312 => 111,  297 => 109,  293 => 108,  288 => 106,  281 => 102,  277 => 101,  274 => 100,  272 => 99,  269 => 98,  261 => 92,  246 => 90,  242 => 89,  237 => 87,  230 => 83,  226 => 82,  223 => 81,  221 => 80,  218 => 79,  211 => 74,  208 => 73,  193 => 71,  188 => 70,  186 => 69,  181 => 66,  178 => 65,  175 => 64,  173 => 63,  166 => 59,  162 => 57,  160 => 56,  157 => 55,  150 => 50,  147 => 49,  132 => 47,  127 => 46,  120 => 42,  117 => 41,  105 => 35,  101 => 33,  99 => 32,  89 => 26,  74 => 24,  70 => 23,  55 => 14,  52 => 13,  44 => 11,  39 => 9,  36 => 8,  29 => 4,  21 => 2,  125 => 45,  122 => 52,  114 => 40,  112 => 39,  107 => 42,  104 => 41,  102 => 40,  96 => 31,  88 => 32,  82 => 29,  78 => 28,  73 => 26,  69 => 25,  65 => 24,  61 => 17,  57 => 15,  53 => 21,  45 => 10,  42 => 14,  34 => 7,  32 => 8,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
