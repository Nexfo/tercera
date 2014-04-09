<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_1e04c70830b887a2addd1085fe866f04149ba3a11f273deb5ddc7ce70e1af2d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
        echo "
<div>
\t";
        // line 6
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 7
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " |
\t\t<a href=\"";
            // line 8
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
\t\t\t";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
\t\t</a>
\t";
        } else {
            // line 12
            echo "\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
\t";
        }
        // line 14
        echo "</div>

";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashBag"), "all"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 17
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "messages"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 18
                echo "\t\t<div class=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "type"), "html", null, true);
                echo "\">
\t\t\t";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "message"), array(), "FOSUserBundle"), "html", null, true);
                echo "
\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
<div>
\t";
        // line 25
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 27
        echo "</div>

";
    }

    // line 25
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 26
        echo "\t";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 26,  104 => 25,  98 => 27,  96 => 25,  92 => 23,  79 => 19,  74 => 18,  69 => 17,  65 => 16,  61 => 14,  53 => 12,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  66 => 17,  62 => 15,  54 => 13,  48 => 10,  44 => 9,  39 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
