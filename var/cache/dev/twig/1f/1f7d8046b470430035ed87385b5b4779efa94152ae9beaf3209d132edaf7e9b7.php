<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7bcd0571319550da35307f88f79bd62cbe3f14cb37fe237a2b534af1527a6ca9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_ba8f2a9f8968c2df2b37b913abb94dafa70c1cc903474ad5bc0d5f989cc43477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba8f2a9f8968c2df2b37b913abb94dafa70c1cc903474ad5bc0d5f989cc43477->enter($__internal_ba8f2a9f8968c2df2b37b913abb94dafa70c1cc903474ad5bc0d5f989cc43477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba8f2a9f8968c2df2b37b913abb94dafa70c1cc903474ad5bc0d5f989cc43477->leave($__internal_ba8f2a9f8968c2df2b37b913abb94dafa70c1cc903474ad5bc0d5f989cc43477_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e95212aa60d141d58280cbb8297d828e6f07deba32dce008b769f1196edaf9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e95212aa60d141d58280cbb8297d828e6f07deba32dce008b769f1196edaf9b1->enter($__internal_e95212aa60d141d58280cbb8297d828e6f07deba32dce008b769f1196edaf9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e95212aa60d141d58280cbb8297d828e6f07deba32dce008b769f1196edaf9b1->leave($__internal_e95212aa60d141d58280cbb8297d828e6f07deba32dce008b769f1196edaf9b1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_32549bd3f73818ad11d10fe0015c1c9c9c32d54fc1d571027ffe0630fdb41cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32549bd3f73818ad11d10fe0015c1c9c9c32d54fc1d571027ffe0630fdb41cfa->enter($__internal_32549bd3f73818ad11d10fe0015c1c9c9c32d54fc1d571027ffe0630fdb41cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_32549bd3f73818ad11d10fe0015c1c9c9c32d54fc1d571027ffe0630fdb41cfa->leave($__internal_32549bd3f73818ad11d10fe0015c1c9c9c32d54fc1d571027ffe0630fdb41cfa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d8a614e58ea1ac2070d843958856bdd24b53897b89233dde4447fd4104309e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d8a614e58ea1ac2070d843958856bdd24b53897b89233dde4447fd4104309e8->enter($__internal_1d8a614e58ea1ac2070d843958856bdd24b53897b89233dde4447fd4104309e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1d8a614e58ea1ac2070d843958856bdd24b53897b89233dde4447fd4104309e8->leave($__internal_1d8a614e58ea1ac2070d843958856bdd24b53897b89233dde4447fd4104309e8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
