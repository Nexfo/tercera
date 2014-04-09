<?php

/* PaginasPrincipalBundle::layout.html.twig */
class __TwigTemplate_13f080a3f2803be172c1d1b8f91363203f185de736b509922c0203372de32a10 extends Twig_Template
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
\t<div>
\t\t<a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("bonsai_gestor_homepage");
        echo "\">Gestor</a>
\t</div>
\t
\t";
        // line 19
        $this->displayBlock('centro', $context, $blocks);
    }

    public function block_centro($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "PaginasPrincipalBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  65 => 16,  60 => 13,  52 => 11,  46 => 8,  42 => 7,  37 => 6,  35 => 5,  32 => 4,  29 => 3,);
    }
}
