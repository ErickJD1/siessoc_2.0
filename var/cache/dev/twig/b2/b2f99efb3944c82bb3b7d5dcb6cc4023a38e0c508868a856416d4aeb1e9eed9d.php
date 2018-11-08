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
        $__internal_6a8c540c5a7d292a6df7700043beed1c2b513544b915582b02f4053cae4b12d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a8c540c5a7d292a6df7700043beed1c2b513544b915582b02f4053cae4b12d1->enter($__internal_6a8c540c5a7d292a6df7700043beed1c2b513544b915582b02f4053cae4b12d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a8c540c5a7d292a6df7700043beed1c2b513544b915582b02f4053cae4b12d1->leave($__internal_6a8c540c5a7d292a6df7700043beed1c2b513544b915582b02f4053cae4b12d1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fa7c9de5975c40453af60e8099e47410666f83c6d5dae50e80df4206b1f4534e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7c9de5975c40453af60e8099e47410666f83c6d5dae50e80df4206b1f4534e->enter($__internal_fa7c9de5975c40453af60e8099e47410666f83c6d5dae50e80df4206b1f4534e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fa7c9de5975c40453af60e8099e47410666f83c6d5dae50e80df4206b1f4534e->leave($__internal_fa7c9de5975c40453af60e8099e47410666f83c6d5dae50e80df4206b1f4534e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_db5e7d57edad13cca7a9928d999a524ad9dde5a017d3b14d576fb3bea3928105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5e7d57edad13cca7a9928d999a524ad9dde5a017d3b14d576fb3bea3928105->enter($__internal_db5e7d57edad13cca7a9928d999a524ad9dde5a017d3b14d576fb3bea3928105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_db5e7d57edad13cca7a9928d999a524ad9dde5a017d3b14d576fb3bea3928105->leave($__internal_db5e7d57edad13cca7a9928d999a524ad9dde5a017d3b14d576fb3bea3928105_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_58f88858dfb48bc7e430f05b9d67c784bbcb367af98f509348ba54181bf807b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f88858dfb48bc7e430f05b9d67c784bbcb367af98f509348ba54181bf807b1->enter($__internal_58f88858dfb48bc7e430f05b9d67c784bbcb367af98f509348ba54181bf807b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_58f88858dfb48bc7e430f05b9d67c784bbcb367af98f509348ba54181bf807b1->leave($__internal_58f88858dfb48bc7e430f05b9d67c784bbcb367af98f509348ba54181bf807b1_prof);

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
