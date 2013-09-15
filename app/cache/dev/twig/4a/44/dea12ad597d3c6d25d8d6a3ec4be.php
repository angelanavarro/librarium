<?php

/* LibrariumBundle:Catalog:browse.html.twig */
class __TwigTemplate_4a44dea12ad597d3c6d25d8d6a3ec4be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LibrariumBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LibrariumBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Librarium Libros - Catálogo";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        if ((isset($context["books"]) ? $context["books"] : $this->getContext($context, "books"))) {
            // line 8
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["books"]) ? $context["books"] : $this->getContext($context, "books")), "name"), "html", null, true);
            echo "
";
        }
        // line 10
        echo "  
";
    }

    public function getTemplateName()
    {
        return "LibrariumBundle:Catalog:browse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  43 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
