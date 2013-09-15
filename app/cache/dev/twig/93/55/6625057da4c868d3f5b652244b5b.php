<?php

/* LibrariumBundle::layout.html.twig */
class __TwigTemplate_93556625057da4c868d3f5b652244b5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\"/>
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/librarium/css/common.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    ";
        // line 6
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  </head>
  <body>
    <div class=\"header\">
      <div class=\"content intro\">
      </div>      
    </div>
    <div class=\"content\">
  \t   ";
        // line 22
        $this->displayBlock('content', $context, $blocks);
        echo "     
      <div class=\"footer\">
        <span>Librarium Libros &nbsp;&nbsp&nbsp;&nbsp Calle 35 22-32 Of. 201 &nbsp;&nbsp Bucaramanga, Santander.
        &nbsp;&nbsp; Tel: 300.561.2591 &nbsp;&nbsp;&nbsp;&nbsp <a href=\"mailto:libros@librarium.com.co\">libros@librarium.com.co</a>
        </span>
      </div>
    </div>  
  </body>
</html>
";
    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        // line 7
        echo "      ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7e83837_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e83837_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/7e83837_jquery-1.8.0.min_1.js");
            // line 11
            echo "      <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
      ";
            // asset "7e83837_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e83837_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/7e83837_jquery-ui_2.js");
            echo "      <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
      ";
            // asset "7e83837_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e83837_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/7e83837_jquery.slides.min_3.js");
            echo "      <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
      ";
        } else {
            // asset "7e83837"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e83837") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/7e83837.js");
            echo "      <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
      ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "    ";
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "LibrariumBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 22,  101 => 14,  97 => 13,  71 => 11,  66 => 7,  63 => 6,  49 => 22,  37 => 14,  31 => 5,  27 => 4,  22 => 1,  62 => 17,  48 => 16,  44 => 10,  35 => 6,  29 => 3,);
    }
}
