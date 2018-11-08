<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e5c2d8b1aea804925193899019206f657fe1c578b6da0fd19439c95d4f9d0321 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_75bf70397c4c73d5365fae23ad77d36a0fbebae666818a241f90d4477fdebc61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75bf70397c4c73d5365fae23ad77d36a0fbebae666818a241f90d4477fdebc61->enter($__internal_75bf70397c4c73d5365fae23ad77d36a0fbebae666818a241f90d4477fdebc61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75bf70397c4c73d5365fae23ad77d36a0fbebae666818a241f90d4477fdebc61->leave($__internal_75bf70397c4c73d5365fae23ad77d36a0fbebae666818a241f90d4477fdebc61_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_de7f122435fd8c7c9689d424d9550d534c1f275cafd4c3919f274e055f530089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de7f122435fd8c7c9689d424d9550d534c1f275cafd4c3919f274e055f530089->enter($__internal_de7f122435fd8c7c9689d424d9550d534c1f275cafd4c3919f274e055f530089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_de7f122435fd8c7c9689d424d9550d534c1f275cafd4c3919f274e055f530089->leave($__internal_de7f122435fd8c7c9689d424d9550d534c1f275cafd4c3919f274e055f530089_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_77b222561ade0bd30225e9525db93d1b7183720152019e0a3134e69da4cb09ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77b222561ade0bd30225e9525db93d1b7183720152019e0a3134e69da4cb09ba->enter($__internal_77b222561ade0bd30225e9525db93d1b7183720152019e0a3134e69da4cb09ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_77b222561ade0bd30225e9525db93d1b7183720152019e0a3134e69da4cb09ba->leave($__internal_77b222561ade0bd30225e9525db93d1b7183720152019e0a3134e69da4cb09ba_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
