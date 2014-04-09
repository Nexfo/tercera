<?php

/* PaginasPrincipalBundle:Index:index.html.twig */
class __TwigTemplate_c28079e1be99bc317a691894b84311b40722c61ceb48d76e1f596da02d0b25de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PaginasPrincipalBundle::layout.html.twig");

        $this->blocks = array(
            'centro' => array($this, 'block_centro'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PaginasPrincipalBundle::layout.html.twig";
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
";
    }

    public function getTemplateName()
    {
        return "PaginasPrincipalBundle:Index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
