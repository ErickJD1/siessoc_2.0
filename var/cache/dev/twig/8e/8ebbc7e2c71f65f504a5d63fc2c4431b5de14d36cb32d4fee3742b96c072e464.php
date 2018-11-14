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
        $__internal_121578798052c1f8343b53a33bfe16a79f39ef4714f03ed49771a19720be6ab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_121578798052c1f8343b53a33bfe16a79f39ef4714f03ed49771a19720be6ab8->enter($__internal_121578798052c1f8343b53a33bfe16a79f39ef4714f03ed49771a19720be6ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_121578798052c1f8343b53a33bfe16a79f39ef4714f03ed49771a19720be6ab8->leave($__internal_121578798052c1f8343b53a33bfe16a79f39ef4714f03ed49771a19720be6ab8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_30c1e8c4de59dd0828726312962a48aa855c555c4a1e35aefef979d3ccf3d237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c1e8c4de59dd0828726312962a48aa855c555c4a1e35aefef979d3ccf3d237->enter($__internal_30c1e8c4de59dd0828726312962a48aa855c555c4a1e35aefef979d3ccf3d237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_30c1e8c4de59dd0828726312962a48aa855c555c4a1e35aefef979d3ccf3d237->leave($__internal_30c1e8c4de59dd0828726312962a48aa855c555c4a1e35aefef979d3ccf3d237_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_674c5ed24d993f35ae403a185455f6ea9891da63781b953ebcb46e3a81de24d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_674c5ed24d993f35ae403a185455f6ea9891da63781b953ebcb46e3a81de24d4->enter($__internal_674c5ed24d993f35ae403a185455f6ea9891da63781b953ebcb46e3a81de24d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_674c5ed24d993f35ae403a185455f6ea9891da63781b953ebcb46e3a81de24d4->leave($__internal_674c5ed24d993f35ae403a185455f6ea9891da63781b953ebcb46e3a81de24d4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d1b24b7825d9cb934074c605295b254bc6d075420320c40c7f576d2d54f78dca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b24b7825d9cb934074c605295b254bc6d075420320c40c7f576d2d54f78dca->enter($__internal_d1b24b7825d9cb934074c605295b254bc6d075420320c40c7f576d2d54f78dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d1b24b7825d9cb934074c605295b254bc6d075420320c40c7f576d2d54f78dca->leave($__internal_d1b24b7825d9cb934074c605295b254bc6d075420320c40c7f576d2d54f78dca_prof);

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
