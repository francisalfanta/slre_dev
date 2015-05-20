<?php

/* content.twig */
class __TwigTemplate_cbe6c6fc8176a49a988a7b6ebae45c49 extends Twig_Template
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
        echo "<article id=\"post-";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "the_ID", array(), "method"), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, aviators_templates_helpers_post_class(), "html", null, true);
        echo ">
    ";
        // line 3
        echo "    <header class=\"entry-header\">

        ";
        // line 5
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (($this->getAttribute($_wp_, "aviators_entry_meta", array(), "method") || $this->getAttribute($_wp_, "aviators_edit_post_link", array(), "method"))) {
            // line 6
            echo "            <div class=\"entry-meta\">
                ";
            // line 7
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_entry_meta", array(), "method"), "html", null, true);
            echo "
                ";
            // line 8
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_edit_post_link", array(), "method"), "html", null, true);
            echo "
            </div><!-- .entry-meta -->
        ";
        }
        // line 11
        echo "
        ";
        // line 12
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "is_single", array(), "method")) {
            // line 13
            echo "            <h1 class=\"page-header entry-title\">";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "the_title", array(), "method"), "html", null, true);
            echo "</h1>
        ";
        } else {
            // line 15
            echo "            <h1 class=\"page-header entry-title\">
                <a href=\"";
            // line 16
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "the_permalink", array(), "method"), "html", null, true);
            echo "\" rel=\"bookmark\">";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "the_title", array(), "method"), "html", null, true);
            echo "</a>
            </h1>
        ";
        }
        // line 19
        echo "
        ";
        // line 21
        echo "        ";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (($this->getAttribute($_wp_, "has_post_thumbnail", array(), "method") && (!$this->getAttribute($_wp_, "post_password_required", array(), "method")))) {
            // line 22
            echo "            <div class=\"entry-thumbnail\">
                ";
            // line 23
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "the_post_thumbnail", array(), "method"), "html", null, true);
            echo "
            </div><!-- /.entry-thumbnail -->
        ";
        }
        // line 26
        echo "    </header><!-- .entry-header -->

    ";
        // line 29
        echo "    ";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "is_search", array(), "method")) {
            // line 30
            echo "        <div class=\"entry-summary\">
            ";
            // line 31
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "the_excerpt", array(), "method"), "html", null, true);
            echo "
        </div><!-- .entry-summary -->
    ";
        } else {
            // line 34
            echo "        <div class=\"entry-content\">
            ";
            // line 35
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_the_content", array(), "method"), "html", null, true);
            echo "
            ";
            // line 36
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_link_pages", array(), "method"), "html", null, true);
            echo "
        </div><!-- .entry-content -->
    ";
        }
        // line 39
        echo "</article><!-- /#post -->
";
    }

    public function getTemplateName()
    {
        return "content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 39,  118 => 36,  113 => 35,  110 => 34,  103 => 31,  100 => 30,  96 => 29,  92 => 26,  85 => 23,  82 => 22,  78 => 21,  75 => 19,  65 => 16,  62 => 15,  55 => 13,  52 => 12,  49 => 11,  42 => 8,  37 => 7,  34 => 6,  31 => 5,  27 => 3,  19 => 1,);
    }
}
