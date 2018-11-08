<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_116e49044ed501ce33c2f3b04c4bcf2954da40933a814f81956ae99110896026 extends Twig_Template
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
        $__internal_9bd073574f405ed433c92d79d13795fd303dfc8eb1d71a31f46c1cf62175b3db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd073574f405ed433c92d79d13795fd303dfc8eb1d71a31f46c1cf62175b3db->enter($__internal_9bd073574f405ed433c92d79d13795fd303dfc8eb1d71a31f46c1cf62175b3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_9bd073574f405ed433c92d79d13795fd303dfc8eb1d71a31f46c1cf62175b3db->leave($__internal_9bd073574f405ed433c92d79d13795fd303dfc8eb1d71a31f46c1cf62175b3db_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
