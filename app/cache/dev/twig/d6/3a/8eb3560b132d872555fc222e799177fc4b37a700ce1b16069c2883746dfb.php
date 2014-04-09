<?php

/* BonsaiGestorBundle:Agregar:agregar.html.twig */
class __TwigTemplate_d63a8eb3560b132d872555fc222e799177fc4b37a700ce1b16069c2883746dfb extends Twig_Template
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
        echo "\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
        echo "
";
    }

    public function getTemplateName()
    {
        return "BonsaiGestorBundle:Agregar:agregar.html.twig";
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
