<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f74d4dd66bce8e3a1352d3e7a7182997cf1fb4143d0abeaa55023d4fdef7de6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_7ca40225d30ca994bc0884be96acbd9550ac11e3746de7ba76f7e84ac439fe21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca40225d30ca994bc0884be96acbd9550ac11e3746de7ba76f7e84ac439fe21->enter($__internal_7ca40225d30ca994bc0884be96acbd9550ac11e3746de7ba76f7e84ac439fe21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ca40225d30ca994bc0884be96acbd9550ac11e3746de7ba76f7e84ac439fe21->leave($__internal_7ca40225d30ca994bc0884be96acbd9550ac11e3746de7ba76f7e84ac439fe21_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_204dff8f2521305ec413014313c598c3914ef5a29776b1f79ad164e4261891d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204dff8f2521305ec413014313c598c3914ef5a29776b1f79ad164e4261891d3->enter($__internal_204dff8f2521305ec413014313c598c3914ef5a29776b1f79ad164e4261891d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_204dff8f2521305ec413014313c598c3914ef5a29776b1f79ad164e4261891d3->leave($__internal_204dff8f2521305ec413014313c598c3914ef5a29776b1f79ad164e4261891d3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_99a3476995cebb9b3afb737a2a283d79bd342193d0602eb9961c204c70cb4324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99a3476995cebb9b3afb737a2a283d79bd342193d0602eb9961c204c70cb4324->enter($__internal_99a3476995cebb9b3afb737a2a283d79bd342193d0602eb9961c204c70cb4324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_99a3476995cebb9b3afb737a2a283d79bd342193d0602eb9961c204c70cb4324->leave($__internal_99a3476995cebb9b3afb737a2a283d79bd342193d0602eb9961c204c70cb4324_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_17e67d4f937442372ba598477c0efb72276e74d598315c28cc4fb7f4068eedbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e67d4f937442372ba598477c0efb72276e74d598315c28cc4fb7f4068eedbd->enter($__internal_17e67d4f937442372ba598477c0efb72276e74d598315c28cc4fb7f4068eedbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_17e67d4f937442372ba598477c0efb72276e74d598315c28cc4fb7f4068eedbd->leave($__internal_17e67d4f937442372ba598477c0efb72276e74d598315c28cc4fb7f4068eedbd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
