<?php

/* BonsaiGestorBundle:Gestor:index.html.twig */
class __TwigTemplate_96812c49fcd7c00f90cd157f30d973917e11e40bceaee15d0a0f292f6b15e6c1 extends Twig_Template
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
        echo "\t<h1>Página principal</h1>
\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("bonsai_gestor_registro");
        echo "\">Registro</a>
";
    }

    public function getTemplateName()
    {
        return "BonsaiGestorBundle:Gestor:index.html.twig";
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
