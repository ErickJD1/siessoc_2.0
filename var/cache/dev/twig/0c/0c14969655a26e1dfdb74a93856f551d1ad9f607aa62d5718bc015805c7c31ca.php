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
        $__internal_5021899058fd960a72535ca87eff4e61b9905e4d6b6b1fa6dd15d207db5976bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5021899058fd960a72535ca87eff4e61b9905e4d6b6b1fa6dd15d207db5976bc->enter($__internal_5021899058fd960a72535ca87eff4e61b9905e4d6b6b1fa6dd15d207db5976bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5021899058fd960a72535ca87eff4e61b9905e4d6b6b1fa6dd15d207db5976bc->leave($__internal_5021899058fd960a72535ca87eff4e61b9905e4d6b6b1fa6dd15d207db5976bc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7ea4fde16ad6126a6f8e7e39220af2908717dd1e8ff8dde041281b62d8272e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea4fde16ad6126a6f8e7e39220af2908717dd1e8ff8dde041281b62d8272e56->enter($__internal_7ea4fde16ad6126a6f8e7e39220af2908717dd1e8ff8dde041281b62d8272e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7ea4fde16ad6126a6f8e7e39220af2908717dd1e8ff8dde041281b62d8272e56->leave($__internal_7ea4fde16ad6126a6f8e7e39220af2908717dd1e8ff8dde041281b62d8272e56_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6646497b96c7793ff4aa70630897ab4777510ae9d79788c18fd92be70e239b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6646497b96c7793ff4aa70630897ab4777510ae9d79788c18fd92be70e239b8->enter($__internal_d6646497b96c7793ff4aa70630897ab4777510ae9d79788c18fd92be70e239b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d6646497b96c7793ff4aa70630897ab4777510ae9d79788c18fd92be70e239b8->leave($__internal_d6646497b96c7793ff4aa70630897ab4777510ae9d79788c18fd92be70e239b8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7b8e9fe2ea62feb274edc36643675ffe1913079da4914696d53b59228acb951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b8e9fe2ea62feb274edc36643675ffe1913079da4914696d53b59228acb951->enter($__internal_f7b8e9fe2ea62feb274edc36643675ffe1913079da4914696d53b59228acb951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f7b8e9fe2ea62feb274edc36643675ffe1913079da4914696d53b59228acb951->leave($__internal_f7b8e9fe2ea62feb274edc36643675ffe1913079da4914696d53b59228acb951_prof);

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
