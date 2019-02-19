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
        $__internal_000c42e8f30d3bbb29550f4fb644146f949b4e3446f0dfb11b5768010232d0ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_000c42e8f30d3bbb29550f4fb644146f949b4e3446f0dfb11b5768010232d0ac->enter($__internal_000c42e8f30d3bbb29550f4fb644146f949b4e3446f0dfb11b5768010232d0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_000c42e8f30d3bbb29550f4fb644146f949b4e3446f0dfb11b5768010232d0ac->leave($__internal_000c42e8f30d3bbb29550f4fb644146f949b4e3446f0dfb11b5768010232d0ac_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_60167f5c9e42d157c20176c6eeb4968465dc72527416ba509445088429fef9fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60167f5c9e42d157c20176c6eeb4968465dc72527416ba509445088429fef9fa->enter($__internal_60167f5c9e42d157c20176c6eeb4968465dc72527416ba509445088429fef9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_60167f5c9e42d157c20176c6eeb4968465dc72527416ba509445088429fef9fa->leave($__internal_60167f5c9e42d157c20176c6eeb4968465dc72527416ba509445088429fef9fa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8596ad1a15fd22d49e4e9de8e7e095f1ba266f3ee78937c22b499bb3c8bc567c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8596ad1a15fd22d49e4e9de8e7e095f1ba266f3ee78937c22b499bb3c8bc567c->enter($__internal_8596ad1a15fd22d49e4e9de8e7e095f1ba266f3ee78937c22b499bb3c8bc567c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8596ad1a15fd22d49e4e9de8e7e095f1ba266f3ee78937c22b499bb3c8bc567c->leave($__internal_8596ad1a15fd22d49e4e9de8e7e095f1ba266f3ee78937c22b499bb3c8bc567c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_68a376d4c55ae36208e2832045aa1c23cd2a41cb8c26fc1ab82d0a3a50ba1920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a376d4c55ae36208e2832045aa1c23cd2a41cb8c26fc1ab82d0a3a50ba1920->enter($__internal_68a376d4c55ae36208e2832045aa1c23cd2a41cb8c26fc1ab82d0a3a50ba1920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_68a376d4c55ae36208e2832045aa1c23cd2a41cb8c26fc1ab82d0a3a50ba1920->leave($__internal_68a376d4c55ae36208e2832045aa1c23cd2a41cb8c26fc1ab82d0a3a50ba1920_prof);

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
