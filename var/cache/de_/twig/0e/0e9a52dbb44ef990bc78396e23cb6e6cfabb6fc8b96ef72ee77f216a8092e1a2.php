<?php

/* @AvanzuAdminTheme/Default/index.html.twig */
class __TwigTemplate_5ab7831dfeb06bf27d6877ac09d2e8e8d3c139bcf8d29acc66859f6c53beac77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "@AvanzuAdminTheme/Default/index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d1ae7403be4dcb03dcd701a4ca712a6972fb8a89046eeefa4ac544b90c6f7e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d1ae7403be4dcb03dcd701a4ca712a6972fb8a89046eeefa4ac544b90c6f7e6->enter($__internal_7d1ae7403be4dcb03dcd701a4ca712a6972fb8a89046eeefa4ac544b90c6f7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d1ae7403be4dcb03dcd701a4ca712a6972fb8a89046eeefa4ac544b90c6f7e6->leave($__internal_7d1ae7403be4dcb03dcd701a4ca712a6972fb8a89046eeefa4ac544b90c6f7e6_prof);

    }

    public function getTemplateName()
    {
        return "@AvanzuAdminTheme/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}



", "@AvanzuAdminTheme/Default/index.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\avanzu\\admin-theme-bundle\\Resources\\views\\Default\\index.html.twig");
    }
}
