<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_01a22add8bdb20d7d9b93509479663d9d546d6705df85d276d4f3f1d39fc2da1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->env->loadTemplate("FOSUserBundle:Registration:register_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 23,  82 => 21,  76 => 13,  71 => 12,  68 => 11,  62 => 8,  56 => 24,  54 => 23,  51 => 22,  49 => 21,  43 => 17,  40 => 15,  23 => 1,  35 => 5,  32 => 8,  29 => 3,  38 => 11,  34 => 5,  31 => 4,  28 => 3,);
    }
}
