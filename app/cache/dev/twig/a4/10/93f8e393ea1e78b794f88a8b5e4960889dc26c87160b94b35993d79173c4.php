<?php

/* BonsaiGestorBundle:Ficha:ficha.html.twig */
class __TwigTemplate_a41093f8e393ea1e78b794f88a8b5e4960889dc26c87160b94b35993d79173c4 extends Twig_Template
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
        echo "\t<ul>
\t\t";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "acciones"));
        foreach ($context['_seq'] as $context["_key"] => $context["accion"]) {
            // line 6
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "accion"), "accion"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "accion"), "fecha"), "Y-m-d H:i:s"), "html", null, true);
            echo "</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['accion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "\t</ul>
";
    }

    public function getTemplateName()
    {
        return "BonsaiGestorBundle:Ficha:ficha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  38 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
