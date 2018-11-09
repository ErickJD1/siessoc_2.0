<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3dec8a6fdc1a40ee0cf6e8c9835e201b76526fa35e9290181a080a13c6dcb6eb extends Twig_Template
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
        $__internal_8b0c771ad9095d245f21ad757cc7422345b85260452f7ca5e08b37d4180075b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b0c771ad9095d245f21ad757cc7422345b85260452f7ca5e08b37d4180075b2->enter($__internal_8b0c771ad9095d245f21ad757cc7422345b85260452f7ca5e08b37d4180075b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b0c771ad9095d245f21ad757cc7422345b85260452f7ca5e08b37d4180075b2->leave($__internal_8b0c771ad9095d245f21ad757cc7422345b85260452f7ca5e08b37d4180075b2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f644a567108f8ec45ea89258bfa4cd69ed658c326ac58f9054d6e07b7633ca3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f644a567108f8ec45ea89258bfa4cd69ed658c326ac58f9054d6e07b7633ca3f->enter($__internal_f644a567108f8ec45ea89258bfa4cd69ed658c326ac58f9054d6e07b7633ca3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f644a567108f8ec45ea89258bfa4cd69ed658c326ac58f9054d6e07b7633ca3f->leave($__internal_f644a567108f8ec45ea89258bfa4cd69ed658c326ac58f9054d6e07b7633ca3f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_592308a939c09547de30e8343022379aab726617e09fed5770ad2266a14902f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_592308a939c09547de30e8343022379aab726617e09fed5770ad2266a14902f7->enter($__internal_592308a939c09547de30e8343022379aab726617e09fed5770ad2266a14902f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_592308a939c09547de30e8343022379aab726617e09fed5770ad2266a14902f7->leave($__internal_592308a939c09547de30e8343022379aab726617e09fed5770ad2266a14902f7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfee9f9507dd71f2d8186f7f990526053453e6a6f6d847613ae0547f017ad2e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfee9f9507dd71f2d8186f7f990526053453e6a6f6d847613ae0547f017ad2e5->enter($__internal_cfee9f9507dd71f2d8186f7f990526053453e6a6f6d847613ae0547f017ad2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cfee9f9507dd71f2d8186f7f990526053453e6a6f6d847613ae0547f017ad2e5->leave($__internal_cfee9f9507dd71f2d8186f7f990526053453e6a6f6d847613ae0547f017ad2e5_prof);

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
