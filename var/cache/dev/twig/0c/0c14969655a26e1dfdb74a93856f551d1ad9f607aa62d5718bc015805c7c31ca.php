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
        $__internal_54311434c4c0de3909a0382609ea8f14820cd80cab504bfe45a38aa433f084e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54311434c4c0de3909a0382609ea8f14820cd80cab504bfe45a38aa433f084e3->enter($__internal_54311434c4c0de3909a0382609ea8f14820cd80cab504bfe45a38aa433f084e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54311434c4c0de3909a0382609ea8f14820cd80cab504bfe45a38aa433f084e3->leave($__internal_54311434c4c0de3909a0382609ea8f14820cd80cab504bfe45a38aa433f084e3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b87b895c181196af803f113acf1c112870a7debcd57ffdc3d93bdd141f370065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b87b895c181196af803f113acf1c112870a7debcd57ffdc3d93bdd141f370065->enter($__internal_b87b895c181196af803f113acf1c112870a7debcd57ffdc3d93bdd141f370065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b87b895c181196af803f113acf1c112870a7debcd57ffdc3d93bdd141f370065->leave($__internal_b87b895c181196af803f113acf1c112870a7debcd57ffdc3d93bdd141f370065_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f368a207979e703dfb3cdc3b5a3d009e942d5c70ab06e3fe7674a9b60a6d7c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f368a207979e703dfb3cdc3b5a3d009e942d5c70ab06e3fe7674a9b60a6d7c0->enter($__internal_9f368a207979e703dfb3cdc3b5a3d009e942d5c70ab06e3fe7674a9b60a6d7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9f368a207979e703dfb3cdc3b5a3d009e942d5c70ab06e3fe7674a9b60a6d7c0->leave($__internal_9f368a207979e703dfb3cdc3b5a3d009e942d5c70ab06e3fe7674a9b60a6d7c0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b05bc99dc1e6d7a10ae175474a87d4d69c822dab5a7d63d68e8e374dd4712a75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b05bc99dc1e6d7a10ae175474a87d4d69c822dab5a7d63d68e8e374dd4712a75->enter($__internal_b05bc99dc1e6d7a10ae175474a87d4d69c822dab5a7d63d68e8e374dd4712a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b05bc99dc1e6d7a10ae175474a87d4d69c822dab5a7d63d68e8e374dd4712a75->leave($__internal_b05bc99dc1e6d7a10ae175474a87d4d69c822dab5a7d63d68e8e374dd4712a75_prof);

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
