<?php

/* properties/helpers/locations.twig */
class __TwigTemplate_ae6093b9062baebaedf84831e8e14346 extends Twig_Template
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
        echo "new Array(";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) ? $context["properties"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            echo "[";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_latitude"), 0), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_longitude"), 0), "html", null, true);
            echo "]";
            if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                echo ",";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo ")";
    }

    public function getTemplateName()
    {
        return "properties/helpers/locations.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  614 => 233,  610 => 231,  601 => 227,  594 => 223,  590 => 222,  587 => 221,  585 => 220,  582 => 219,  573 => 215,  566 => 211,  562 => 210,  559 => 209,  557 => 208,  554 => 207,  545 => 203,  538 => 199,  534 => 198,  531 => 197,  529 => 196,  526 => 195,  518 => 189,  503 => 187,  499 => 186,  494 => 184,  487 => 180,  483 => 179,  480 => 178,  478 => 177,  475 => 176,  467 => 170,  452 => 168,  448 => 167,  443 => 165,  436 => 161,  432 => 160,  429 => 159,  427 => 158,  422 => 155,  414 => 149,  399 => 147,  395 => 146,  390 => 144,  383 => 140,  379 => 139,  376 => 138,  374 => 137,  371 => 136,  363 => 130,  348 => 128,  344 => 127,  339 => 125,  332 => 121,  328 => 120,  325 => 119,  323 => 118,  320 => 117,  312 => 111,  297 => 109,  293 => 108,  288 => 106,  281 => 102,  277 => 101,  274 => 100,  272 => 99,  269 => 98,  261 => 92,  246 => 90,  242 => 89,  237 => 87,  230 => 83,  226 => 82,  223 => 81,  221 => 80,  218 => 79,  211 => 74,  208 => 73,  193 => 71,  188 => 70,  186 => 69,  181 => 66,  178 => 65,  175 => 64,  173 => 63,  166 => 59,  162 => 57,  160 => 56,  157 => 55,  150 => 50,  147 => 49,  132 => 47,  127 => 46,  120 => 42,  117 => 41,  105 => 35,  101 => 33,  99 => 32,  89 => 26,  74 => 24,  70 => 23,  55 => 14,  52 => 13,  44 => 11,  39 => 9,  36 => 8,  29 => 4,  21 => 2,  125 => 45,  122 => 52,  114 => 40,  112 => 39,  107 => 42,  104 => 41,  102 => 40,  96 => 31,  88 => 32,  82 => 29,  78 => 28,  73 => 26,  69 => 25,  65 => 24,  61 => 17,  57 => 15,  53 => 21,  45 => 15,  42 => 14,  34 => 7,  32 => 7,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
