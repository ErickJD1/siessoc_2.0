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
        $__internal_79e0a7eabf62f7016c602279bf4cd8f0664c717d5e2bbd8743f83d868f5d8546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79e0a7eabf62f7016c602279bf4cd8f0664c717d5e2bbd8743f83d868f5d8546->enter($__internal_79e0a7eabf62f7016c602279bf4cd8f0664c717d5e2bbd8743f83d868f5d8546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79e0a7eabf62f7016c602279bf4cd8f0664c717d5e2bbd8743f83d868f5d8546->leave($__internal_79e0a7eabf62f7016c602279bf4cd8f0664c717d5e2bbd8743f83d868f5d8546_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9bbff8c1a741b1bc2f9c7e7862106668c85fb9e95f291c8f90444cb56fcdfee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bbff8c1a741b1bc2f9c7e7862106668c85fb9e95f291c8f90444cb56fcdfee7->enter($__internal_9bbff8c1a741b1bc2f9c7e7862106668c85fb9e95f291c8f90444cb56fcdfee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9bbff8c1a741b1bc2f9c7e7862106668c85fb9e95f291c8f90444cb56fcdfee7->leave($__internal_9bbff8c1a741b1bc2f9c7e7862106668c85fb9e95f291c8f90444cb56fcdfee7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_21dec4962d2169280480a422f28de911d1862f07b71b242bfa6a68c739061a54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21dec4962d2169280480a422f28de911d1862f07b71b242bfa6a68c739061a54->enter($__internal_21dec4962d2169280480a422f28de911d1862f07b71b242bfa6a68c739061a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_21dec4962d2169280480a422f28de911d1862f07b71b242bfa6a68c739061a54->leave($__internal_21dec4962d2169280480a422f28de911d1862f07b71b242bfa6a68c739061a54_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cf737b0126382e6150c59c49b8cc99b6c97bf0e2775c88400ef45e4c04193be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf737b0126382e6150c59c49b8cc99b6c97bf0e2775c88400ef45e4c04193be->enter($__internal_7cf737b0126382e6150c59c49b8cc99b6c97bf0e2775c88400ef45e4c04193be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7cf737b0126382e6150c59c49b8cc99b6c97bf0e2775c88400ef45e4c04193be->leave($__internal_7cf737b0126382e6150c59c49b8cc99b6c97bf0e2775c88400ef45e4c04193be_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
