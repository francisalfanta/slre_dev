<?php

/* helpers/sidebar-footer-bottom-left.twig */
class __TwigTemplate_0ee72b7b89eb6d4388b73351a205d14a extends Twig_Template
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
        if ((!$this->getAttribute($_wp_, "dynamic_sidebar", array(0 => "footer-bottom-left"), "method"))) {
        }
    }

    public function getTemplateName()
    {
        return "helpers/sidebar-footer-bottom-left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
