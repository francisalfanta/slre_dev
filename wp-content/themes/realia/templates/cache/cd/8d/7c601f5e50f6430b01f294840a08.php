<?php

/* helpers/content-loop.twig */
class __TwigTemplate_cd8d7c601f5e50f6430b01f294840a08 extends Twig_Template
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
        if ($this->getAttribute($_wp_, "have_posts", array(), "method")) {
            // line 2
            echo "
    ";
            // line 3
            if (isset($context["posts"])) { $_posts_ = $context["posts"]; } else { $_posts_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_posts_);
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 4
                echo "        ";
                if (isset($context["wp_query"])) { $_wp_query_ = $context["wp_query"]; } else { $_wp_query_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_query_, "the_post", array(), "method"), "html", null, true);
                echo "
        ";
                // line 5
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_part", array(0 => "content", 1 => $this->getAttribute($_wp_, "get_post_format", array(), "method")), "method"), "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 7
            echo "
    ";
            // line 8
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["wp_query"])) { $_wp_query_ = $context["wp_query"]; } else { $_wp_query_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_paging_nav", array(0 => "", 1 => 2, 2 => $_wp_query_), "method"), "html", null, true);
            echo "
";
        } else {
            // line 10
            echo "    ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_part", array(0 => "content", 1 => "none"), "method"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "helpers/content-loop.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 10,  48 => 8,  45 => 7,  36 => 5,  49 => 9,  39 => 6,  33 => 5,  25 => 3,  22 => 2,  19 => 1,  140 => 17,  135 => 41,  131 => 39,  125 => 37,  120 => 36,  116 => 34,  109 => 32,  106 => 31,  102 => 29,  95 => 26,  92 => 25,  89 => 24,  84 => 23,  81 => 22,  78 => 21,  75 => 20,  71 => 18,  69 => 17,  60 => 16,  57 => 15,  50 => 13,  47 => 12,  44 => 11,  42 => 10,  37 => 7,  30 => 4,  27 => 4,  20 => 1,  31 => 4,  28 => 4,);
    }
}
