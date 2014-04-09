<?php

/* ::base.html.twig */
class __TwigTemplate_13cfa67ee86bb205ccfee4a6bdec39d8d36652366ede624aef8d4a9c05209501 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7 ]><html class=\"ie ie6\" lang=\"en\"> <![endif]-->
<!--[if IE 7 ]><html class=\"ie ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 8 ]><html class=\"ie ie8\" lang=\"en\"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang=\"en\"> <!--<![endif]-->
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
\t\t
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "\t\t
        ";
        // line 18
        echo "\t\t
    </head>
    <body>
\t\t<div class=\"container\">
\t\t\t";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "\t\t</div>
        ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "    </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/base.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/adp.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/layout.css"), "html", null, true);
        echo "\">
\t\t";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 24,  86 => 22,  80 => 14,  76 => 13,  71 => 12,  68 => 11,  62 => 8,  56 => 25,  54 => 24,  51 => 23,  49 => 22,  43 => 18,  40 => 16,  38 => 11,  32 => 8,  23 => 1,);
    }
}
