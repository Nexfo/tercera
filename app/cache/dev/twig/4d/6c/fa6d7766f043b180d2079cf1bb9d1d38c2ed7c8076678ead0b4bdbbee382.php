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
        echo "\t<div class=\"sixteen columns\">
\t\t<h1 class=\"remove-bottom\" style=\"margin-top: 40px\">Página principal</h1>
\t\t<hr />
\t</div>
\t
\t<div class=\"four columns\">
\t\t<ul>
\t\t\t<li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("bonsai_gestor_homepage");
        echo "\">Inicio</a></li>
\t\t\t<li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("bonsai_gestor_agregar");
        echo "\">Añadir Bonsai</a></li>
\t\t</ul>
\t\t
\t\t<p class=\"remove-bottom\" style=\"margin-top: 40px\">
\t\t\t";
        // line 16
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 17
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " |
\t\t\t\t<a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
\t\t\t\t\t";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
\t\t\t\t</a>
\t\t\t";
        } else {
            // line 22
            echo "\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
\t\t\t";
        }
        // line 24
        echo "\t\t</p>
\t</div>
\t
\t<div class=\"twelve columns\">
\t\t";
        // line 28
        $this->displayBlock('centro', $context, $blocks);
        // line 29
        echo "\t</div>
";
    }

    // line 28
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
        return array (  90 => 28,  85 => 29,  83 => 28,  77 => 24,  69 => 22,  63 => 19,  59 => 18,  54 => 17,  52 => 16,  45 => 12,  41 => 11,  32 => 4,  29 => 3,);
    }
}
