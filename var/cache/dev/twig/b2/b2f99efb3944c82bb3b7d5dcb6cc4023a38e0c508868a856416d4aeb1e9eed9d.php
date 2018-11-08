<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_acb17e2a1712f3fa79c241a5f1d22c01491100bfece92b702b2d73352bdce857 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc9d86e255eb20b66c31ea3b5b102408c10c1969d5959360725ff095edf144f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc9d86e255eb20b66c31ea3b5b102408c10c1969d5959360725ff095edf144f9->enter($__internal_dc9d86e255eb20b66c31ea3b5b102408c10c1969d5959360725ff095edf144f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc9d86e255eb20b66c31ea3b5b102408c10c1969d5959360725ff095edf144f9->leave($__internal_dc9d86e255eb20b66c31ea3b5b102408c10c1969d5959360725ff095edf144f9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dd850b915527c673aec12648a4831d690ccbab788cf7a0ecd82be817ad10794f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd850b915527c673aec12648a4831d690ccbab788cf7a0ecd82be817ad10794f->enter($__internal_dd850b915527c673aec12648a4831d690ccbab788cf7a0ecd82be817ad10794f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dd850b915527c673aec12648a4831d690ccbab788cf7a0ecd82be817ad10794f->leave($__internal_dd850b915527c673aec12648a4831d690ccbab788cf7a0ecd82be817ad10794f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d766d8418061341cbfc537d5b0d3c4da7465333e5e82107ab9fe02a97bb37964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d766d8418061341cbfc537d5b0d3c4da7465333e5e82107ab9fe02a97bb37964->enter($__internal_d766d8418061341cbfc537d5b0d3c4da7465333e5e82107ab9fe02a97bb37964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d766d8418061341cbfc537d5b0d3c4da7465333e5e82107ab9fe02a97bb37964->leave($__internal_d766d8418061341cbfc537d5b0d3c4da7465333e5e82107ab9fe02a97bb37964_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6526e64682f3a3a6a8ed0b8f243860377df89e2beea865583a47d334851fc684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6526e64682f3a3a6a8ed0b8f243860377df89e2beea865583a47d334851fc684->enter($__internal_6526e64682f3a3a6a8ed0b8f243860377df89e2beea865583a47d334851fc684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6526e64682f3a3a6a8ed0b8f243860377df89e2beea865583a47d334851fc684->leave($__internal_6526e64682f3a3a6a8ed0b8f243860377df89e2beea865583a47d334851fc684_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
