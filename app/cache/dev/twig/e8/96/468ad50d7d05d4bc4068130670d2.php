<?php

/* LibrariumBundle:Index:acerca.html.twig */
class __TwigTemplate_e896468ad50d7d05d4bc4068130670d2 extends Twig_Template
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
        // line 6
        echo "
  <h2>Librarium Libros</h2>
  <p>
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
";
    }

    public function getTemplateName()
    {
        return "LibrariumBundle:Index:acerca.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,);
    }
}
