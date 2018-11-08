<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_224b7fc58b233e05a9d4e59f755735e7b378bc1f6df559c0d4d52c4b9aacf064 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b06369f9885dff10750c9a40b6abad334b7d5bee672a21af22e105bee326a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b06369f9885dff10750c9a40b6abad334b7d5bee672a21af22e105bee326a37->enter($__internal_9b06369f9885dff10750c9a40b6abad334b7d5bee672a21af22e105bee326a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b06369f9885dff10750c9a40b6abad334b7d5bee672a21af22e105bee326a37->leave($__internal_9b06369f9885dff10750c9a40b6abad334b7d5bee672a21af22e105bee326a37_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8490e26bb00db922a605d3825ae4b025d5c326151ca59e72224cd7c72d35804e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8490e26bb00db922a605d3825ae4b025d5c326151ca59e72224cd7c72d35804e->enter($__internal_8490e26bb00db922a605d3825ae4b025d5c326151ca59e72224cd7c72d35804e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_8490e26bb00db922a605d3825ae4b025d5c326151ca59e72224cd7c72d35804e->leave($__internal_8490e26bb00db922a605d3825ae4b025d5c326151ca59e72224cd7c72d35804e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
