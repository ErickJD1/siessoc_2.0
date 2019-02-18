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
        $__internal_63a081133a12a124f50f7445ff689995a59201eb76b05daad0f99f4f477570b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a081133a12a124f50f7445ff689995a59201eb76b05daad0f99f4f477570b4->enter($__internal_63a081133a12a124f50f7445ff689995a59201eb76b05daad0f99f4f477570b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63a081133a12a124f50f7445ff689995a59201eb76b05daad0f99f4f477570b4->leave($__internal_63a081133a12a124f50f7445ff689995a59201eb76b05daad0f99f4f477570b4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ee4109e9f8d04bfb7d65de62faf461078d784e3e7a9097ff5ec823348329ce03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee4109e9f8d04bfb7d65de62faf461078d784e3e7a9097ff5ec823348329ce03->enter($__internal_ee4109e9f8d04bfb7d65de62faf461078d784e3e7a9097ff5ec823348329ce03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ee4109e9f8d04bfb7d65de62faf461078d784e3e7a9097ff5ec823348329ce03->leave($__internal_ee4109e9f8d04bfb7d65de62faf461078d784e3e7a9097ff5ec823348329ce03_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7c68b728f567cc10eb0c4eaec131037916221b84aee9cc577ca38f83aee64ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c68b728f567cc10eb0c4eaec131037916221b84aee9cc577ca38f83aee64ddf->enter($__internal_7c68b728f567cc10eb0c4eaec131037916221b84aee9cc577ca38f83aee64ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7c68b728f567cc10eb0c4eaec131037916221b84aee9cc577ca38f83aee64ddf->leave($__internal_7c68b728f567cc10eb0c4eaec131037916221b84aee9cc577ca38f83aee64ddf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_383e1c399a0a899d789233e9322886ca6db4dfc03553e74702e0b705e9ac09c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_383e1c399a0a899d789233e9322886ca6db4dfc03553e74702e0b705e9ac09c2->enter($__internal_383e1c399a0a899d789233e9322886ca6db4dfc03553e74702e0b705e9ac09c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_383e1c399a0a899d789233e9322886ca6db4dfc03553e74702e0b705e9ac09c2->leave($__internal_383e1c399a0a899d789233e9322886ca6db4dfc03553e74702e0b705e9ac09c2_prof);

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
