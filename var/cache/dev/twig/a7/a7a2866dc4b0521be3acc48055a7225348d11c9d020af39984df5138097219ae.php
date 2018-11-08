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
        $__internal_9ceacba90dfbdc3c1aaeb30931e5d6897652da8562b51d489e25da913027e56d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ceacba90dfbdc3c1aaeb30931e5d6897652da8562b51d489e25da913027e56d->enter($__internal_9ceacba90dfbdc3c1aaeb30931e5d6897652da8562b51d489e25da913027e56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ceacba90dfbdc3c1aaeb30931e5d6897652da8562b51d489e25da913027e56d->leave($__internal_9ceacba90dfbdc3c1aaeb30931e5d6897652da8562b51d489e25da913027e56d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2d95243075cdb867e84c4f03bdfe867f5897665bee24868d4047f89bab4aa6f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d95243075cdb867e84c4f03bdfe867f5897665bee24868d4047f89bab4aa6f2->enter($__internal_2d95243075cdb867e84c4f03bdfe867f5897665bee24868d4047f89bab4aa6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2d95243075cdb867e84c4f03bdfe867f5897665bee24868d4047f89bab4aa6f2->leave($__internal_2d95243075cdb867e84c4f03bdfe867f5897665bee24868d4047f89bab4aa6f2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9d72f06a7733efc3e5143135dae8129e6909abb4895f80fac96fd7a38e939c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d72f06a7733efc3e5143135dae8129e6909abb4895f80fac96fd7a38e939c2->enter($__internal_d9d72f06a7733efc3e5143135dae8129e6909abb4895f80fac96fd7a38e939c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d9d72f06a7733efc3e5143135dae8129e6909abb4895f80fac96fd7a38e939c2->leave($__internal_d9d72f06a7733efc3e5143135dae8129e6909abb4895f80fac96fd7a38e939c2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_16e2dc1b7d30b11d8706acfce07c0c5a954cf52a910a025901c2dc697fa3b1df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e2dc1b7d30b11d8706acfce07c0c5a954cf52a910a025901c2dc697fa3b1df->enter($__internal_16e2dc1b7d30b11d8706acfce07c0c5a954cf52a910a025901c2dc697fa3b1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_16e2dc1b7d30b11d8706acfce07c0c5a954cf52a910a025901c2dc697fa3b1df->leave($__internal_16e2dc1b7d30b11d8706acfce07c0c5a954cf52a910a025901c2dc697fa3b1df_prof);

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
