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
        echo "\t\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "
\t\t\t<table style=\"margin: 0 auto\">
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "accion"), 'row');
        echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "bonsai"), 'row');
        echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td align=\"center\">
\t\t\t\t\t\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "enviar"), 'row');
        echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "
\t\t
\t\t<ul>
\t\t\t";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "bonsais"));
        foreach ($context['_seq'] as $context["_key"] => $context["bonsai"]) {
            // line 34
            echo "\t\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "bonsai"), "nombre"), "html", null, true);
            echo " - <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bonsai_gestor_ficha", array("id" => $this->getAttribute($this->getContext($context, "bonsai"), "id"), "nombre" => $this->getAttribute($this->getContext($context, "bonsai"), "nombre"))), "html", null, true);
            echo "\">Ver Ficha</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bonsai'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t</ul>
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
        return array (  97 => 36,  86 => 34,  82 => 33,  76 => 30,  69 => 26,  65 => 25,  56 => 19,  48 => 14,  39 => 8,  31 => 4,  28 => 3,);
    }
}
