<?php

/* BonsaiGestorBundle:Gestor:index.html.twig */
class __TwigTemplate_96812c49fcd7c00f90cd157f30d973917e11e40bceaee15d0a0f292f6b15e6c1 extends Twig_Template
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
        echo "\t<h1>Página principal</h1>
\t<ul>
\t\t<li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("bonsai_gestor_agregar");
        echo "\">Añadir Bonsai</a></li>
\t</ul>
\t
\t<ul>
\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "bonsais"));
        foreach ($context['_seq'] as $context["_key"] => $context["bonsai"]) {
            // line 11
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "bonsai"), "nombre"), "html", null, true);
            echo "</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bonsai'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t</ul>
\t
\t";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
        echo "
\t
";
    }

    public function getTemplateName()
    {
        return "BonsaiGestorBundle:Gestor:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  55 => 13,  46 => 11,  42 => 10,  35 => 6,  31 => 4,  28 => 3,);
    }
}
