<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cdeb1178f3da505011052073f905e777c22e75a7e09d162d4c93b7c5241252bb extends Twig_Template
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
        $__internal_2e76aff1744197c11eba74f5c59fdf4a6014e4688c39dd72f7498664e028f61e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e76aff1744197c11eba74f5c59fdf4a6014e4688c39dd72f7498664e028f61e->enter($__internal_2e76aff1744197c11eba74f5c59fdf4a6014e4688c39dd72f7498664e028f61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e76aff1744197c11eba74f5c59fdf4a6014e4688c39dd72f7498664e028f61e->leave($__internal_2e76aff1744197c11eba74f5c59fdf4a6014e4688c39dd72f7498664e028f61e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1c9e569abe1470d2f98fd08cd739a6b802f6fb3d3bc852c1958b716e7fbdf545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9e569abe1470d2f98fd08cd739a6b802f6fb3d3bc852c1958b716e7fbdf545->enter($__internal_1c9e569abe1470d2f98fd08cd739a6b802f6fb3d3bc852c1958b716e7fbdf545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1c9e569abe1470d2f98fd08cd739a6b802f6fb3d3bc852c1958b716e7fbdf545->leave($__internal_1c9e569abe1470d2f98fd08cd739a6b802f6fb3d3bc852c1958b716e7fbdf545_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_22bdeb78ef954d34d9559f9b6ad481e97f3a432a912931a9d1fe3aa2e4d5ba66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22bdeb78ef954d34d9559f9b6ad481e97f3a432a912931a9d1fe3aa2e4d5ba66->enter($__internal_22bdeb78ef954d34d9559f9b6ad481e97f3a432a912931a9d1fe3aa2e4d5ba66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_22bdeb78ef954d34d9559f9b6ad481e97f3a432a912931a9d1fe3aa2e4d5ba66->leave($__internal_22bdeb78ef954d34d9559f9b6ad481e97f3a432a912931a9d1fe3aa2e4d5ba66_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1cbc74dc2e88bbff4e7311aa7a42128b2eb7a98f6afaefe206bd52a01a22a0d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cbc74dc2e88bbff4e7311aa7a42128b2eb7a98f6afaefe206bd52a01a22a0d4->enter($__internal_1cbc74dc2e88bbff4e7311aa7a42128b2eb7a98f6afaefe206bd52a01a22a0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1cbc74dc2e88bbff4e7311aa7a42128b2eb7a98f6afaefe206bd52a01a22a0d4->leave($__internal_1cbc74dc2e88bbff4e7311aa7a42128b2eb7a98f6afaefe206bd52a01a22a0d4_prof);

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
