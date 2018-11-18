<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2ed12cd1b91a9af7027ed45f503d99dce532ce1c5a1d922a7271457669678ef0 extends Twig_Template
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
        $__internal_37185fad50d11036b2117ae350266029ebf38c98f9c011b00146f200261e3cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37185fad50d11036b2117ae350266029ebf38c98f9c011b00146f200261e3cb9->enter($__internal_37185fad50d11036b2117ae350266029ebf38c98f9c011b00146f200261e3cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37185fad50d11036b2117ae350266029ebf38c98f9c011b00146f200261e3cb9->leave($__internal_37185fad50d11036b2117ae350266029ebf38c98f9c011b00146f200261e3cb9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4a1a9f798b14b15d134fd586f7a34107442e3aeabab5e0ac4abcb320629e8e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1a9f798b14b15d134fd586f7a34107442e3aeabab5e0ac4abcb320629e8e21->enter($__internal_4a1a9f798b14b15d134fd586f7a34107442e3aeabab5e0ac4abcb320629e8e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4a1a9f798b14b15d134fd586f7a34107442e3aeabab5e0ac4abcb320629e8e21->leave($__internal_4a1a9f798b14b15d134fd586f7a34107442e3aeabab5e0ac4abcb320629e8e21_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa69f861461a31e15a89ba585fd073bf99d05a90a9d5bf61fd83a55bf8548a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa69f861461a31e15a89ba585fd073bf99d05a90a9d5bf61fd83a55bf8548a95->enter($__internal_fa69f861461a31e15a89ba585fd073bf99d05a90a9d5bf61fd83a55bf8548a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fa69f861461a31e15a89ba585fd073bf99d05a90a9d5bf61fd83a55bf8548a95->leave($__internal_fa69f861461a31e15a89ba585fd073bf99d05a90a9d5bf61fd83a55bf8548a95_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d7ee7367c9a2796ff40dba288c03d2c335d2bab49dc3556afc022b607ac071a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7ee7367c9a2796ff40dba288c03d2c335d2bab49dc3556afc022b607ac071a->enter($__internal_8d7ee7367c9a2796ff40dba288c03d2c335d2bab49dc3556afc022b607ac071a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8d7ee7367c9a2796ff40dba288c03d2c335d2bab49dc3556afc022b607ac071a->leave($__internal_8d7ee7367c9a2796ff40dba288c03d2c335d2bab49dc3556afc022b607ac071a_prof);

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
