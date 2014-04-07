<?php

/* BonsaiGestorBundle::layout.html.twig */
class __TwigTemplate_4d6cfa6d7766f043b180d2079cf1bb9d1d38c2ed7c8076678ead0b4bdbbee382 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'centro' => array($this, 'block_centro'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\tSección central
\t";
        // line 5
        $this->displayBlock('centro', $context, $blocks);
    }

    public function block_centro($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "BonsaiGestorBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  32 => 4,  29 => 3,  34 => 5,  31 => 4,  28 => 3,);
    }
}
