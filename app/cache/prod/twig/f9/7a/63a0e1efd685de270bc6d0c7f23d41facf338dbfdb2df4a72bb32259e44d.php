<?php

/* BonsaiGestorBundle:Gestor:registrar.html.twig */
class __TwigTemplate_f97a63a0e1efd685de270bc6d0c7f23d41facf338dbfdb2df4a72bb32259e44d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BonsaiGestorBundle::layout.html.twig");

        $this->blocks = array(
            'centro' => array($this, 'block_centro'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BonsaiGestorBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_centro($context, array $blocks = array())
    {
        // line 4
        echo "\t<h1>Registro</h1>
\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("bonsai_gestor_homepage");
        echo "\">Volver</a>
";
    }

    public function getTemplateName()
    {
        return "BonsaiGestorBundle:Gestor:registrar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,);
    }
}
