<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_783597bba868d3da86708fa71be466bb1a9ebaa30ded5a0ff5591778d7193e19 extends Twig_Template
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
        $__internal_8306766a73190b849f9a1dd49a0d73eca7811d424dd35f0287beb4b9a7d814cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8306766a73190b849f9a1dd49a0d73eca7811d424dd35f0287beb4b9a7d814cd->enter($__internal_8306766a73190b849f9a1dd49a0d73eca7811d424dd35f0287beb4b9a7d814cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8306766a73190b849f9a1dd49a0d73eca7811d424dd35f0287beb4b9a7d814cd->leave($__internal_8306766a73190b849f9a1dd49a0d73eca7811d424dd35f0287beb4b9a7d814cd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e133f0150a98ea477b89bd79b504afeec0e7afa6f98819570e44b990fabe8de1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e133f0150a98ea477b89bd79b504afeec0e7afa6f98819570e44b990fabe8de1->enter($__internal_e133f0150a98ea477b89bd79b504afeec0e7afa6f98819570e44b990fabe8de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e133f0150a98ea477b89bd79b504afeec0e7afa6f98819570e44b990fabe8de1->leave($__internal_e133f0150a98ea477b89bd79b504afeec0e7afa6f98819570e44b990fabe8de1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9aa4760f58c888d5c86276d01b2e4fce09091171ab69f0dd3ab62198dff8aeaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa4760f58c888d5c86276d01b2e4fce09091171ab69f0dd3ab62198dff8aeaf->enter($__internal_9aa4760f58c888d5c86276d01b2e4fce09091171ab69f0dd3ab62198dff8aeaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9aa4760f58c888d5c86276d01b2e4fce09091171ab69f0dd3ab62198dff8aeaf->leave($__internal_9aa4760f58c888d5c86276d01b2e4fce09091171ab69f0dd3ab62198dff8aeaf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a6be7135480fb2bf92b0914aca8e2524fdd895555701922278387fb554959169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6be7135480fb2bf92b0914aca8e2524fdd895555701922278387fb554959169->enter($__internal_a6be7135480fb2bf92b0914aca8e2524fdd895555701922278387fb554959169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a6be7135480fb2bf92b0914aca8e2524fdd895555701922278387fb554959169->leave($__internal_a6be7135480fb2bf92b0914aca8e2524fdd895555701922278387fb554959169_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
