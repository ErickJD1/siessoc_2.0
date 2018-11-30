<?php

/* AvanzuAdminThemeBundle:Default:index.html.twig */
class __TwigTemplate_0a838dccf659a7ec82eb9e9ec18eecdabb26832d485e90ed57724b451ad99eaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21fd8d0c0cc31f4d3f23de4e2f9097fec9d4ae9f74299ce10b4f3c1ff21520fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21fd8d0c0cc31f4d3f23de4e2f9097fec9d4ae9f74299ce10b4f3c1ff21520fe->enter($__internal_21fd8d0c0cc31f4d3f23de4e2f9097fec9d4ae9f74299ce10b4f3c1ff21520fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21fd8d0c0cc31f4d3f23de4e2f9097fec9d4ae9f74299ce10b4f3c1ff21520fe->leave($__internal_21fd8d0c0cc31f4d3f23de4e2f9097fec9d4ae9f74299ce10b4f3c1ff21520fe_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Default:index.html.twig";
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



", "AvanzuAdminThemeBundle:Default:index.html.twig", "/home/ubuntu/workspace/vendor/avanzu/admin-theme-bundle/Resources/views/Default/index.html.twig");
    }
}
