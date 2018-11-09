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
        $__internal_aaf24dd6a824ac31acf51577b88abcdac7bd89c6fe0f320d609ae0d243b491b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf24dd6a824ac31acf51577b88abcdac7bd89c6fe0f320d609ae0d243b491b1->enter($__internal_aaf24dd6a824ac31acf51577b88abcdac7bd89c6fe0f320d609ae0d243b491b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaf24dd6a824ac31acf51577b88abcdac7bd89c6fe0f320d609ae0d243b491b1->leave($__internal_aaf24dd6a824ac31acf51577b88abcdac7bd89c6fe0f320d609ae0d243b491b1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_775d8e59b355e24aaee45ef112ee388ab5e45b4bdcb4a321e0d2951e9e94dcae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_775d8e59b355e24aaee45ef112ee388ab5e45b4bdcb4a321e0d2951e9e94dcae->enter($__internal_775d8e59b355e24aaee45ef112ee388ab5e45b4bdcb4a321e0d2951e9e94dcae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_775d8e59b355e24aaee45ef112ee388ab5e45b4bdcb4a321e0d2951e9e94dcae->leave($__internal_775d8e59b355e24aaee45ef112ee388ab5e45b4bdcb4a321e0d2951e9e94dcae_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_16a09f22ce62c1aac392e1695dcdee5fa32756e97c666c84c22672c15f1c06af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a09f22ce62c1aac392e1695dcdee5fa32756e97c666c84c22672c15f1c06af->enter($__internal_16a09f22ce62c1aac392e1695dcdee5fa32756e97c666c84c22672c15f1c06af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_16a09f22ce62c1aac392e1695dcdee5fa32756e97c666c84c22672c15f1c06af->leave($__internal_16a09f22ce62c1aac392e1695dcdee5fa32756e97c666c84c22672c15f1c06af_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0931f5bbceaab61b71ae76a34eac9f9f6b40cd333dc386728c5d1a57a36186cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0931f5bbceaab61b71ae76a34eac9f9f6b40cd333dc386728c5d1a57a36186cf->enter($__internal_0931f5bbceaab61b71ae76a34eac9f9f6b40cd333dc386728c5d1a57a36186cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0931f5bbceaab61b71ae76a34eac9f9f6b40cd333dc386728c5d1a57a36186cf->leave($__internal_0931f5bbceaab61b71ae76a34eac9f9f6b40cd333dc386728c5d1a57a36186cf_prof);

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
