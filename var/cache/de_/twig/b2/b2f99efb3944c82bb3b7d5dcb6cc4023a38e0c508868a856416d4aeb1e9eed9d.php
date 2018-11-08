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
        $__internal_92aaddfbfdaaa5942290a557d28c7167115ca3b1f0a3b75c888c575c72ec990e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92aaddfbfdaaa5942290a557d28c7167115ca3b1f0a3b75c888c575c72ec990e->enter($__internal_92aaddfbfdaaa5942290a557d28c7167115ca3b1f0a3b75c888c575c72ec990e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92aaddfbfdaaa5942290a557d28c7167115ca3b1f0a3b75c888c575c72ec990e->leave($__internal_92aaddfbfdaaa5942290a557d28c7167115ca3b1f0a3b75c888c575c72ec990e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cd0ef9507404c9d6174fb247623ccd1f4702593249457d53b9d83bd9119fee43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd0ef9507404c9d6174fb247623ccd1f4702593249457d53b9d83bd9119fee43->enter($__internal_cd0ef9507404c9d6174fb247623ccd1f4702593249457d53b9d83bd9119fee43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cd0ef9507404c9d6174fb247623ccd1f4702593249457d53b9d83bd9119fee43->leave($__internal_cd0ef9507404c9d6174fb247623ccd1f4702593249457d53b9d83bd9119fee43_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_deac4a027f51fda9fda3a9f18b959400375a9ecfe9af951ec72d28ccbdbc54f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deac4a027f51fda9fda3a9f18b959400375a9ecfe9af951ec72d28ccbdbc54f4->enter($__internal_deac4a027f51fda9fda3a9f18b959400375a9ecfe9af951ec72d28ccbdbc54f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_deac4a027f51fda9fda3a9f18b959400375a9ecfe9af951ec72d28ccbdbc54f4->leave($__internal_deac4a027f51fda9fda3a9f18b959400375a9ecfe9af951ec72d28ccbdbc54f4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1675d60a2fce4614b73fcb2df27c4be212b23b33c539d8de8714f1abbb2f4442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1675d60a2fce4614b73fcb2df27c4be212b23b33c539d8de8714f1abbb2f4442->enter($__internal_1675d60a2fce4614b73fcb2df27c4be212b23b33c539d8de8714f1abbb2f4442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1675d60a2fce4614b73fcb2df27c4be212b23b33c539d8de8714f1abbb2f4442->leave($__internal_1675d60a2fce4614b73fcb2df27c4be212b23b33c539d8de8714f1abbb2f4442_prof);

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
