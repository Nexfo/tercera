<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_74df694afb011b5082214e0c902fffccfdbac75b03f41cf91c7bc19907a99a27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  19 => 1,  87 => 23,  82 => 21,  76 => 13,  71 => 12,  68 => 11,  62 => 8,  56 => 24,  54 => 23,  51 => 22,  49 => 21,  43 => 17,  40 => 15,  23 => 1,  35 => 5,  32 => 8,  29 => 3,  38 => 11,  34 => 5,  31 => 4,  28 => 3,);
    }
}
