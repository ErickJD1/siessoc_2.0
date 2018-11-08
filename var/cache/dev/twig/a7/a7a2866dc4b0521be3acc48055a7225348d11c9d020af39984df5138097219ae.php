<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_850c1d171d2bcf91ecaa77416c6529803dddcbed06af798d75a270840180a7ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_671c70913a8da8013701f051d059cdbc9dee958922bf1b568806b473098efddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_671c70913a8da8013701f051d059cdbc9dee958922bf1b568806b473098efddb->enter($__internal_671c70913a8da8013701f051d059cdbc9dee958922bf1b568806b473098efddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_671c70913a8da8013701f051d059cdbc9dee958922bf1b568806b473098efddb->leave($__internal_671c70913a8da8013701f051d059cdbc9dee958922bf1b568806b473098efddb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a8d59b9812ba373d37a203642ceaba9df72148c5019a6ceb9eb84d40c1b73a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d59b9812ba373d37a203642ceaba9df72148c5019a6ceb9eb84d40c1b73a63->enter($__internal_a8d59b9812ba373d37a203642ceaba9df72148c5019a6ceb9eb84d40c1b73a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a8d59b9812ba373d37a203642ceaba9df72148c5019a6ceb9eb84d40c1b73a63->leave($__internal_a8d59b9812ba373d37a203642ceaba9df72148c5019a6ceb9eb84d40c1b73a63_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_274cb9a7de6d4d1e16f891c6231b93aa5f33b5286de1867924ff453416cc69f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_274cb9a7de6d4d1e16f891c6231b93aa5f33b5286de1867924ff453416cc69f9->enter($__internal_274cb9a7de6d4d1e16f891c6231b93aa5f33b5286de1867924ff453416cc69f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_274cb9a7de6d4d1e16f891c6231b93aa5f33b5286de1867924ff453416cc69f9->leave($__internal_274cb9a7de6d4d1e16f891c6231b93aa5f33b5286de1867924ff453416cc69f9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0d4d7faf826ad76c8fd4d35912071860f98c712bb732af3a5f2e29416b89908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d4d7faf826ad76c8fd4d35912071860f98c712bb732af3a5f2e29416b89908->enter($__internal_e0d4d7faf826ad76c8fd4d35912071860f98c712bb732af3a5f2e29416b89908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e0d4d7faf826ad76c8fd4d35912071860f98c712bb732af3a5f2e29416b89908->leave($__internal_e0d4d7faf826ad76c8fd4d35912071860f98c712bb732af3a5f2e29416b89908_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
