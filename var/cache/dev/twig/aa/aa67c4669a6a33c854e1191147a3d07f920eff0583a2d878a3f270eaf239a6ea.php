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
        $__internal_cb0f8706ba593ae9d815e1e4368bc60a7f3adfa671a21e343d784b9fccd00750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb0f8706ba593ae9d815e1e4368bc60a7f3adfa671a21e343d784b9fccd00750->enter($__internal_cb0f8706ba593ae9d815e1e4368bc60a7f3adfa671a21e343d784b9fccd00750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb0f8706ba593ae9d815e1e4368bc60a7f3adfa671a21e343d784b9fccd00750->leave($__internal_cb0f8706ba593ae9d815e1e4368bc60a7f3adfa671a21e343d784b9fccd00750_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ca1dc0b5867f867d4f337cb6294ecf1ee9110401015bcd6eb98e8669885027f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1dc0b5867f867d4f337cb6294ecf1ee9110401015bcd6eb98e8669885027f9->enter($__internal_ca1dc0b5867f867d4f337cb6294ecf1ee9110401015bcd6eb98e8669885027f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ca1dc0b5867f867d4f337cb6294ecf1ee9110401015bcd6eb98e8669885027f9->leave($__internal_ca1dc0b5867f867d4f337cb6294ecf1ee9110401015bcd6eb98e8669885027f9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_abd71fcd5ed67fb952c2aba4f2ca9de3134ebfe6ffb938d5583d9e3384dc52ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abd71fcd5ed67fb952c2aba4f2ca9de3134ebfe6ffb938d5583d9e3384dc52ef->enter($__internal_abd71fcd5ed67fb952c2aba4f2ca9de3134ebfe6ffb938d5583d9e3384dc52ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_abd71fcd5ed67fb952c2aba4f2ca9de3134ebfe6ffb938d5583d9e3384dc52ef->leave($__internal_abd71fcd5ed67fb952c2aba4f2ca9de3134ebfe6ffb938d5583d9e3384dc52ef_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e9ba43bb5593b37d63e5c3f8d0427916da549d89edb15fb1247edc93c4db13bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ba43bb5593b37d63e5c3f8d0427916da549d89edb15fb1247edc93c4db13bd->enter($__internal_e9ba43bb5593b37d63e5c3f8d0427916da549d89edb15fb1247edc93c4db13bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e9ba43bb5593b37d63e5c3f8d0427916da549d89edb15fb1247edc93c4db13bd->leave($__internal_e9ba43bb5593b37d63e5c3f8d0427916da549d89edb15fb1247edc93c4db13bd_prof);

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
