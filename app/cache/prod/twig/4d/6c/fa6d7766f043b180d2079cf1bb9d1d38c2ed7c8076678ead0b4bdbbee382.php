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
        echo "\t<div>
\t\t";
        // line 5
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " |
\t\t\t<a href=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
\t\t\t\t";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
\t\t\t</a>
\t\t";
        } else {
            // line 11
            echo "\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
\t\t";
        }
        // line 13
        echo "\t</div>
\t
\t";
        // line 15
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
        return array (  64 => 15,  60 => 13,  52 => 11,  46 => 8,  42 => 7,  37 => 6,  35 => 5,  32 => 4,  29 => 3,  31 => 4,  28 => 3,);
    }
}
