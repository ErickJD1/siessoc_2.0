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
        $__internal_8e6804cd61e43ca69d5cd60a86b88c0ab7f9d8b709cda49ff712d574cfc621d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e6804cd61e43ca69d5cd60a86b88c0ab7f9d8b709cda49ff712d574cfc621d1->enter($__internal_8e6804cd61e43ca69d5cd60a86b88c0ab7f9d8b709cda49ff712d574cfc621d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e6804cd61e43ca69d5cd60a86b88c0ab7f9d8b709cda49ff712d574cfc621d1->leave($__internal_8e6804cd61e43ca69d5cd60a86b88c0ab7f9d8b709cda49ff712d574cfc621d1_prof);

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



", "@AvanzuAdminTheme/Default/index.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\avanzu\\admin-theme-bundle\\Resources\\views\\Default\\index.html.twig");
    }
}
