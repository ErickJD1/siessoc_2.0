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
        $__internal_71bce68fba3272bf1641c3c584e571915b04d2b4c5208232c7f76f77aaf6b085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71bce68fba3272bf1641c3c584e571915b04d2b4c5208232c7f76f77aaf6b085->enter($__internal_71bce68fba3272bf1641c3c584e571915b04d2b4c5208232c7f76f77aaf6b085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_71bce68fba3272bf1641c3c584e571915b04d2b4c5208232c7f76f77aaf6b085->leave($__internal_71bce68fba3272bf1641c3c584e571915b04d2b4c5208232c7f76f77aaf6b085_prof);

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
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
