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
        $__internal_e7c393f95cbfd6065ed49508554aafdfbec27855733b4f6e9f42fa2e0f9a4208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c393f95cbfd6065ed49508554aafdfbec27855733b4f6e9f42fa2e0f9a4208->enter($__internal_e7c393f95cbfd6065ed49508554aafdfbec27855733b4f6e9f42fa2e0f9a4208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7c393f95cbfd6065ed49508554aafdfbec27855733b4f6e9f42fa2e0f9a4208->leave($__internal_e7c393f95cbfd6065ed49508554aafdfbec27855733b4f6e9f42fa2e0f9a4208_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9063e602ca4101a15b6e84085b7282f95cb85c9257df63424e381b3b07cd4fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9063e602ca4101a15b6e84085b7282f95cb85c9257df63424e381b3b07cd4fab->enter($__internal_9063e602ca4101a15b6e84085b7282f95cb85c9257df63424e381b3b07cd4fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9063e602ca4101a15b6e84085b7282f95cb85c9257df63424e381b3b07cd4fab->leave($__internal_9063e602ca4101a15b6e84085b7282f95cb85c9257df63424e381b3b07cd4fab_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eb68f87eb16c8e8e764d3d060fc96dcd332839678abec5799bcbdcfa5128bac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb68f87eb16c8e8e764d3d060fc96dcd332839678abec5799bcbdcfa5128bac0->enter($__internal_eb68f87eb16c8e8e764d3d060fc96dcd332839678abec5799bcbdcfa5128bac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eb68f87eb16c8e8e764d3d060fc96dcd332839678abec5799bcbdcfa5128bac0->leave($__internal_eb68f87eb16c8e8e764d3d060fc96dcd332839678abec5799bcbdcfa5128bac0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_77706acbc9b414910d3251d7bae14504563a48ba31201b4c3eec31ccd2da5ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77706acbc9b414910d3251d7bae14504563a48ba31201b4c3eec31ccd2da5ab2->enter($__internal_77706acbc9b414910d3251d7bae14504563a48ba31201b4c3eec31ccd2da5ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_77706acbc9b414910d3251d7bae14504563a48ba31201b4c3eec31ccd2da5ab2->leave($__internal_77706acbc9b414910d3251d7bae14504563a48ba31201b4c3eec31ccd2da5ab2_prof);

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
