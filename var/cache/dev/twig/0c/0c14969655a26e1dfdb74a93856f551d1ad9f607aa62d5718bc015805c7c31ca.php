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
        $__internal_b5ffd21aff88a9a7821d54febe6bbe9216e38dfcdb15f5b4fabc78e4bb4d01df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5ffd21aff88a9a7821d54febe6bbe9216e38dfcdb15f5b4fabc78e4bb4d01df->enter($__internal_b5ffd21aff88a9a7821d54febe6bbe9216e38dfcdb15f5b4fabc78e4bb4d01df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5ffd21aff88a9a7821d54febe6bbe9216e38dfcdb15f5b4fabc78e4bb4d01df->leave($__internal_b5ffd21aff88a9a7821d54febe6bbe9216e38dfcdb15f5b4fabc78e4bb4d01df_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_04af9dcb499d79d85d80bc6552a6ea5f363813db5cf16c5dc25c22a125b8cb0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04af9dcb499d79d85d80bc6552a6ea5f363813db5cf16c5dc25c22a125b8cb0e->enter($__internal_04af9dcb499d79d85d80bc6552a6ea5f363813db5cf16c5dc25c22a125b8cb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_04af9dcb499d79d85d80bc6552a6ea5f363813db5cf16c5dc25c22a125b8cb0e->leave($__internal_04af9dcb499d79d85d80bc6552a6ea5f363813db5cf16c5dc25c22a125b8cb0e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0cfd2012c6a00090eba7e6f196969b351aaea4fc866b971d843e614ffe071f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cfd2012c6a00090eba7e6f196969b351aaea4fc866b971d843e614ffe071f63->enter($__internal_0cfd2012c6a00090eba7e6f196969b351aaea4fc866b971d843e614ffe071f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0cfd2012c6a00090eba7e6f196969b351aaea4fc866b971d843e614ffe071f63->leave($__internal_0cfd2012c6a00090eba7e6f196969b351aaea4fc866b971d843e614ffe071f63_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_22907a844edea189d12d65586b3661f15cf18e3f560e0c8f31e7f13ae236eae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22907a844edea189d12d65586b3661f15cf18e3f560e0c8f31e7f13ae236eae5->enter($__internal_22907a844edea189d12d65586b3661f15cf18e3f560e0c8f31e7f13ae236eae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_22907a844edea189d12d65586b3661f15cf18e3f560e0c8f31e7f13ae236eae5->leave($__internal_22907a844edea189d12d65586b3661f15cf18e3f560e0c8f31e7f13ae236eae5_prof);

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
