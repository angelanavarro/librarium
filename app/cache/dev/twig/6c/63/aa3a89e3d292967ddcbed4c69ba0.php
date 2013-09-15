<?php

/* LibrariumBundle:Index:index.html.twig */
class __TwigTemplate_6c63aa3a89e3d292967ddcbed4c69ba0 extends Twig_Template
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
        echo "Librarium Libros";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo " 
      <p>\t
      Recuperamos, para un nuevo lector, libros que por alguna circunstancia han dejado de circular, no se reimprimieron, se agotaron o se refundieron tanto que se volvieron difíciles encontrar.\t  \t      \t\t    
      </p>\t
      <div id=\"gallery\">
        ";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5abb17a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5abb17a_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/5abb17a_galeria_6_1.jpg");
            // line 16
            echo "          <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
        ";
        } else {
            // asset "5abb17a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5abb17a") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/5abb17a.jpg");
            echo "          <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
        ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "        
        <span class=\"slidesjs-previous slidesjs-navigation\"><i class=\"icon-angle-left\"> < </i></span>
        <span class=\"slidesjs-next slidesjs-navigation\"><i class=\"icon-angle-right\"> > </i></span>
      </div>
       <p>
       <h3>Contactenos</h3>
       Calle 35 22-32 Of. 201 <br/>
       Bucaramanga, Santander. <br/>
       Tel: 300.561.2591  </br>
       Email: <a href=\"mailto:libros@librarium.com.co\">libros@librarium.com.co</a>
       </p>


        <br/>
        <h3>Un mensaje de <strong>Librarium</strong></h3>
        <p>
        La idea es recuperar, para un nuevo lector, libros que por alguna circunstancia han dejado de circular, no se reimprimieron, se agotaron o se refundieron tanto que se volvieron difíciles encontrar. 
        Los libros dentro de ese mundillo editorial, a donde también ha llegado el mal de las modas, se han vuelto efímeros, destinados a la oscuridad de la bodega en pocos meses.
        Nuestra cultura, la literaria, la filosófica, la histórica, es decir, la humanística, es de lento andar, por eso se merece no una segunda sino una infinita  oportunidad y si algo nos brinda esa oportunidad es el libro leído. <br/>
        El analfabetismo militante se nutre de los que no leen para no dejarse influenciar, “para ser más auténticos”, alimenta a los que no quieren hablar más que consigo mismos. Diga no al analfabetismo militante… Lea… Y si no consigue qué leer, nosotros le ayudamos a encontrarlo.
        </p>

      \t<div id=\"findme\">   
        \t<a target=\"_blank\" href=\"https://www.facebook.com/librarium.bucaramanga?fref=ts\" title=\"Facebook\">      
          \t<img src=\"img/FB-f-Logo_50.png\" border=\"0\" alt=\"CV\"/>
        \t</a>          
      \t</div>
      \t<br clear=\"all\"/> 
    <script type=\"text/javascript\">
      \$(function(){
        \$(\"#gallery\").slidesjs({
          width: 340,
          height: 228,      
          navigation: {
            active: false
          },
          pagination: {
            active: false
          }
         
        });
      });
    </script>
";
    }

    public function getTemplateName()
    {
        return "LibrariumBundle:Index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  48 => 16,  44 => 10,  35 => 5,  29 => 3,);
    }
}
