<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ba87cf58dede98aee9209cd394e9af0b10b68f1daafcfa73cff3872fca4c79f0 extends Twig_Template
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
        $__internal_2205f422a67fea83803a4331c950ee326727b40a4a14a2410b3c87635d571617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2205f422a67fea83803a4331c950ee326727b40a4a14a2410b3c87635d571617->enter($__internal_2205f422a67fea83803a4331c950ee326727b40a4a14a2410b3c87635d571617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2205f422a67fea83803a4331c950ee326727b40a4a14a2410b3c87635d571617->leave($__internal_2205f422a67fea83803a4331c950ee326727b40a4a14a2410b3c87635d571617_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_095e734a701935ba1d2868bac44e7bb972c7f7d633190f77cc26984440a1b561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_095e734a701935ba1d2868bac44e7bb972c7f7d633190f77cc26984440a1b561->enter($__internal_095e734a701935ba1d2868bac44e7bb972c7f7d633190f77cc26984440a1b561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_095e734a701935ba1d2868bac44e7bb972c7f7d633190f77cc26984440a1b561->leave($__internal_095e734a701935ba1d2868bac44e7bb972c7f7d633190f77cc26984440a1b561_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_30cc08059b347ac6cfeb574111a2d02ba8c7186eb20297c25faa5068adf4b7ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30cc08059b347ac6cfeb574111a2d02ba8c7186eb20297c25faa5068adf4b7ea->enter($__internal_30cc08059b347ac6cfeb574111a2d02ba8c7186eb20297c25faa5068adf4b7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_30cc08059b347ac6cfeb574111a2d02ba8c7186eb20297c25faa5068adf4b7ea->leave($__internal_30cc08059b347ac6cfeb574111a2d02ba8c7186eb20297c25faa5068adf4b7ea_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_449df4d3e076131cb9ef634165e3985b8acdfce3d9fffe88de4e342f18b307ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_449df4d3e076131cb9ef634165e3985b8acdfce3d9fffe88de4e342f18b307ae->enter($__internal_449df4d3e076131cb9ef634165e3985b8acdfce3d9fffe88de4e342f18b307ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_449df4d3e076131cb9ef634165e3985b8acdfce3d9fffe88de4e342f18b307ae->leave($__internal_449df4d3e076131cb9ef634165e3985b8acdfce3d9fffe88de4e342f18b307ae_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
