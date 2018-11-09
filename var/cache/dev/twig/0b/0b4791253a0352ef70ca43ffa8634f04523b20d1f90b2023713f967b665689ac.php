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
        $__internal_303a947b3c810d7977e98e54c1b6eda0bf7df22b6cb7a3f95b830a5450e40c7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_303a947b3c810d7977e98e54c1b6eda0bf7df22b6cb7a3f95b830a5450e40c7e->enter($__internal_303a947b3c810d7977e98e54c1b6eda0bf7df22b6cb7a3f95b830a5450e40c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_303a947b3c810d7977e98e54c1b6eda0bf7df22b6cb7a3f95b830a5450e40c7e->leave($__internal_303a947b3c810d7977e98e54c1b6eda0bf7df22b6cb7a3f95b830a5450e40c7e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_95b02cd8c3f463a08115b4064b6e45b9169ebda28cbbf9d45191f9b0fb5c3c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95b02cd8c3f463a08115b4064b6e45b9169ebda28cbbf9d45191f9b0fb5c3c7c->enter($__internal_95b02cd8c3f463a08115b4064b6e45b9169ebda28cbbf9d45191f9b0fb5c3c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_95b02cd8c3f463a08115b4064b6e45b9169ebda28cbbf9d45191f9b0fb5c3c7c->leave($__internal_95b02cd8c3f463a08115b4064b6e45b9169ebda28cbbf9d45191f9b0fb5c3c7c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_769cafc98850eab3088c60d848d9208e9a1a02d14e678dadcaabc1aa351bfe41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769cafc98850eab3088c60d848d9208e9a1a02d14e678dadcaabc1aa351bfe41->enter($__internal_769cafc98850eab3088c60d848d9208e9a1a02d14e678dadcaabc1aa351bfe41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_769cafc98850eab3088c60d848d9208e9a1a02d14e678dadcaabc1aa351bfe41->leave($__internal_769cafc98850eab3088c60d848d9208e9a1a02d14e678dadcaabc1aa351bfe41_prof);

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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
