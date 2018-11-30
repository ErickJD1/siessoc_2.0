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
        $__internal_fb4f365f9ba44ab259896346f111909e6c73da9b08a3b65d27e690b0c7b02707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4f365f9ba44ab259896346f111909e6c73da9b08a3b65d27e690b0c7b02707->enter($__internal_fb4f365f9ba44ab259896346f111909e6c73da9b08a3b65d27e690b0c7b02707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb4f365f9ba44ab259896346f111909e6c73da9b08a3b65d27e690b0c7b02707->leave($__internal_fb4f365f9ba44ab259896346f111909e6c73da9b08a3b65d27e690b0c7b02707_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f7b0a772e9b45353c81b86bbb486e466c12ab534f2115c1af8d26ad074641f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b0a772e9b45353c81b86bbb486e466c12ab534f2115c1af8d26ad074641f23->enter($__internal_f7b0a772e9b45353c81b86bbb486e466c12ab534f2115c1af8d26ad074641f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f7b0a772e9b45353c81b86bbb486e466c12ab534f2115c1af8d26ad074641f23->leave($__internal_f7b0a772e9b45353c81b86bbb486e466c12ab534f2115c1af8d26ad074641f23_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a079b89130449aa3cdee3ee3f25b9ef62a8bcdb092e4680df129d7071e2df10e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a079b89130449aa3cdee3ee3f25b9ef62a8bcdb092e4680df129d7071e2df10e->enter($__internal_a079b89130449aa3cdee3ee3f25b9ef62a8bcdb092e4680df129d7071e2df10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a079b89130449aa3cdee3ee3f25b9ef62a8bcdb092e4680df129d7071e2df10e->leave($__internal_a079b89130449aa3cdee3ee3f25b9ef62a8bcdb092e4680df129d7071e2df10e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_08f7cfec69996cc0c8904f2f96a5c75e022044cae157efe8d59d9c17cf0713f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f7cfec69996cc0c8904f2f96a5c75e022044cae157efe8d59d9c17cf0713f0->enter($__internal_08f7cfec69996cc0c8904f2f96a5c75e022044cae157efe8d59d9c17cf0713f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_08f7cfec69996cc0c8904f2f96a5c75e022044cae157efe8d59d9c17cf0713f0->leave($__internal_08f7cfec69996cc0c8904f2f96a5c75e022044cae157efe8d59d9c17cf0713f0_prof);

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
