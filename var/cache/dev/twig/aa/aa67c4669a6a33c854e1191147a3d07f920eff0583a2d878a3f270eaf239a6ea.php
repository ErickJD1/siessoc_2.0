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
        $__internal_8d1d5d5e44a55c54c8a2832be5ea4df951b06dad42188105f7e00f3687508f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d1d5d5e44a55c54c8a2832be5ea4df951b06dad42188105f7e00f3687508f1f->enter($__internal_8d1d5d5e44a55c54c8a2832be5ea4df951b06dad42188105f7e00f3687508f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d1d5d5e44a55c54c8a2832be5ea4df951b06dad42188105f7e00f3687508f1f->leave($__internal_8d1d5d5e44a55c54c8a2832be5ea4df951b06dad42188105f7e00f3687508f1f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c2a73e23aaa3d042182e21332b90909109f0b933016a75f31917bdce03f9e398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a73e23aaa3d042182e21332b90909109f0b933016a75f31917bdce03f9e398->enter($__internal_c2a73e23aaa3d042182e21332b90909109f0b933016a75f31917bdce03f9e398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c2a73e23aaa3d042182e21332b90909109f0b933016a75f31917bdce03f9e398->leave($__internal_c2a73e23aaa3d042182e21332b90909109f0b933016a75f31917bdce03f9e398_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b7a715015ed38365bfb4b143ef72ff81d3a9a6320b34521afc6efe389df41831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7a715015ed38365bfb4b143ef72ff81d3a9a6320b34521afc6efe389df41831->enter($__internal_b7a715015ed38365bfb4b143ef72ff81d3a9a6320b34521afc6efe389df41831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b7a715015ed38365bfb4b143ef72ff81d3a9a6320b34521afc6efe389df41831->leave($__internal_b7a715015ed38365bfb4b143ef72ff81d3a9a6320b34521afc6efe389df41831_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9f22f2c65183ee997b62d3c787473762a2c667d4e42045636c502940402d00cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f22f2c65183ee997b62d3c787473762a2c667d4e42045636c502940402d00cd->enter($__internal_9f22f2c65183ee997b62d3c787473762a2c667d4e42045636c502940402d00cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9f22f2c65183ee997b62d3c787473762a2c667d4e42045636c502940402d00cd->leave($__internal_9f22f2c65183ee997b62d3c787473762a2c667d4e42045636c502940402d00cd_prof);

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
