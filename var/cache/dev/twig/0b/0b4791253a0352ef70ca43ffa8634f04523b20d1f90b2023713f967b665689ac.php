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
        $__internal_f84672f486c7d4b56dd29a170aa3f44685eb55a64651ba4eb898fd243b7eb8bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84672f486c7d4b56dd29a170aa3f44685eb55a64651ba4eb898fd243b7eb8bc->enter($__internal_f84672f486c7d4b56dd29a170aa3f44685eb55a64651ba4eb898fd243b7eb8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f84672f486c7d4b56dd29a170aa3f44685eb55a64651ba4eb898fd243b7eb8bc->leave($__internal_f84672f486c7d4b56dd29a170aa3f44685eb55a64651ba4eb898fd243b7eb8bc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0ebbcf28dc8c3e39fa82ffb21d5d95e134e974962fb6b8e9386e193527a8102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0ebbcf28dc8c3e39fa82ffb21d5d95e134e974962fb6b8e9386e193527a8102->enter($__internal_d0ebbcf28dc8c3e39fa82ffb21d5d95e134e974962fb6b8e9386e193527a8102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d0ebbcf28dc8c3e39fa82ffb21d5d95e134e974962fb6b8e9386e193527a8102->leave($__internal_d0ebbcf28dc8c3e39fa82ffb21d5d95e134e974962fb6b8e9386e193527a8102_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee8975aee56ce81d12902b3995fb0a797dd498f76c4a845f17a992ed6b3aa9b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8975aee56ce81d12902b3995fb0a797dd498f76c4a845f17a992ed6b3aa9b3->enter($__internal_ee8975aee56ce81d12902b3995fb0a797dd498f76c4a845f17a992ed6b3aa9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ee8975aee56ce81d12902b3995fb0a797dd498f76c4a845f17a992ed6b3aa9b3->leave($__internal_ee8975aee56ce81d12902b3995fb0a797dd498f76c4a845f17a992ed6b3aa9b3_prof);

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
