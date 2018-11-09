<?php

/* AvanzuAdminThemeBundle:Default:index.html.twig */
class __TwigTemplate_98a37c2a18fa7bbcc7110a909afef658d8256eef0c31b79b06fc23d1468a83db extends Twig_Template
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
        $__internal_3f3202ae83b40240be3973542c610c3c223e6b8793cc46b81414dcd6b25a21f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f3202ae83b40240be3973542c610c3c223e6b8793cc46b81414dcd6b25a21f3->enter($__internal_3f3202ae83b40240be3973542c610c3c223e6b8793cc46b81414dcd6b25a21f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f3202ae83b40240be3973542c610c3c223e6b8793cc46b81414dcd6b25a21f3->leave($__internal_3f3202ae83b40240be3973542c610c3c223e6b8793cc46b81414dcd6b25a21f3_prof);

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



", "AvanzuAdminThemeBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\avanzu\\admin-theme-bundle/Resources/views/Default/index.html.twig");
    }
}
