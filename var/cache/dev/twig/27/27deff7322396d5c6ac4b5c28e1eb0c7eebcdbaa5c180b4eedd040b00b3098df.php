<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_65878d5f7b2dc2041e94c6eaa1619f7798173951ea88eded376e996354d6de8d extends Twig_Template
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
        $__internal_8ab3d4bcf6752aeda5b17d4c6497f04f39d00ab9f3525bfdb608e9c3cd0e5c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ab3d4bcf6752aeda5b17d4c6497f04f39d00ab9f3525bfdb608e9c3cd0e5c6c->enter($__internal_8ab3d4bcf6752aeda5b17d4c6497f04f39d00ab9f3525bfdb608e9c3cd0e5c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_8ab3d4bcf6752aeda5b17d4c6497f04f39d00ab9f3525bfdb608e9c3cd0e5c6c->leave($__internal_8ab3d4bcf6752aeda5b17d4c6497f04f39d00ab9f3525bfdb608e9c3cd0e5c6c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
