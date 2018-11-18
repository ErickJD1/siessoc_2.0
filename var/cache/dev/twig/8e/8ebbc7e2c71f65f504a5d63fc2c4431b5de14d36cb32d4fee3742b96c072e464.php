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
        $__internal_e0b6b28588d86416ff11114cfe98a92ce46875f76882c2aeeec3e6d9f83b5a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b6b28588d86416ff11114cfe98a92ce46875f76882c2aeeec3e6d9f83b5a9d->enter($__internal_e0b6b28588d86416ff11114cfe98a92ce46875f76882c2aeeec3e6d9f83b5a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0b6b28588d86416ff11114cfe98a92ce46875f76882c2aeeec3e6d9f83b5a9d->leave($__internal_e0b6b28588d86416ff11114cfe98a92ce46875f76882c2aeeec3e6d9f83b5a9d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e9fb9d85390bd669e44435c1925d6975751ff865eb11b51e28b753f4dfe8ef8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9fb9d85390bd669e44435c1925d6975751ff865eb11b51e28b753f4dfe8ef8d->enter($__internal_e9fb9d85390bd669e44435c1925d6975751ff865eb11b51e28b753f4dfe8ef8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e9fb9d85390bd669e44435c1925d6975751ff865eb11b51e28b753f4dfe8ef8d->leave($__internal_e9fb9d85390bd669e44435c1925d6975751ff865eb11b51e28b753f4dfe8ef8d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_07b85751c50c63d53cebf6633cca612413ceccb66ac6b2fac58600c65a61cc87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b85751c50c63d53cebf6633cca612413ceccb66ac6b2fac58600c65a61cc87->enter($__internal_07b85751c50c63d53cebf6633cca612413ceccb66ac6b2fac58600c65a61cc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_07b85751c50c63d53cebf6633cca612413ceccb66ac6b2fac58600c65a61cc87->leave($__internal_07b85751c50c63d53cebf6633cca612413ceccb66ac6b2fac58600c65a61cc87_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_425dac1b4abefa4bf6fb556139407af8b44bbd4a77104a6cee8622f405fa8cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_425dac1b4abefa4bf6fb556139407af8b44bbd4a77104a6cee8622f405fa8cc8->enter($__internal_425dac1b4abefa4bf6fb556139407af8b44bbd4a77104a6cee8622f405fa8cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_425dac1b4abefa4bf6fb556139407af8b44bbd4a77104a6cee8622f405fa8cc8->leave($__internal_425dac1b4abefa4bf6fb556139407af8b44bbd4a77104a6cee8622f405fa8cc8_prof);

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
