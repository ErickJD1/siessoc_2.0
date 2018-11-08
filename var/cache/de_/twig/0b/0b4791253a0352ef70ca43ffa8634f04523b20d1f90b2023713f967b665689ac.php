<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_00d6a8d0e97cf4a62114af54999ba532a0027a0847b1c14599dfe4f6d52308cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fde7c673cb37f213f9da92ae45846ef03e221ac34a03bc103dbb73a3abf5537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fde7c673cb37f213f9da92ae45846ef03e221ac34a03bc103dbb73a3abf5537->enter($__internal_0fde7c673cb37f213f9da92ae45846ef03e221ac34a03bc103dbb73a3abf5537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fde7c673cb37f213f9da92ae45846ef03e221ac34a03bc103dbb73a3abf5537->leave($__internal_0fde7c673cb37f213f9da92ae45846ef03e221ac34a03bc103dbb73a3abf5537_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_04a12313c56671f814e9c1d27b7d33bc454f1503eb473e56e37c26936e8f9a98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a12313c56671f814e9c1d27b7d33bc454f1503eb473e56e37c26936e8f9a98->enter($__internal_04a12313c56671f814e9c1d27b7d33bc454f1503eb473e56e37c26936e8f9a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_04a12313c56671f814e9c1d27b7d33bc454f1503eb473e56e37c26936e8f9a98->leave($__internal_04a12313c56671f814e9c1d27b7d33bc454f1503eb473e56e37c26936e8f9a98_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a293f7c814195d0e7044b25a705dabfc7bbc30f55591e7b73a4592afc7e0d4a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a293f7c814195d0e7044b25a705dabfc7bbc30f55591e7b73a4592afc7e0d4a2->enter($__internal_a293f7c814195d0e7044b25a705dabfc7bbc30f55591e7b73a4592afc7e0d4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a293f7c814195d0e7044b25a705dabfc7bbc30f55591e7b73a4592afc7e0d4a2->leave($__internal_a293f7c814195d0e7044b25a705dabfc7bbc30f55591e7b73a4592afc7e0d4a2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
