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
        $__internal_4e58f85690c013a88bae88160f34fe8c4bed358e12d51121841784b59843fbd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e58f85690c013a88bae88160f34fe8c4bed358e12d51121841784b59843fbd1->enter($__internal_4e58f85690c013a88bae88160f34fe8c4bed358e12d51121841784b59843fbd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e58f85690c013a88bae88160f34fe8c4bed358e12d51121841784b59843fbd1->leave($__internal_4e58f85690c013a88bae88160f34fe8c4bed358e12d51121841784b59843fbd1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d91109e9dda3634982a8f8a9aa144e1c73555c95e1897094278fe73d0cc28b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d91109e9dda3634982a8f8a9aa144e1c73555c95e1897094278fe73d0cc28b79->enter($__internal_d91109e9dda3634982a8f8a9aa144e1c73555c95e1897094278fe73d0cc28b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d91109e9dda3634982a8f8a9aa144e1c73555c95e1897094278fe73d0cc28b79->leave($__internal_d91109e9dda3634982a8f8a9aa144e1c73555c95e1897094278fe73d0cc28b79_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7c54594cfefbf21585570af9cefb185f646c50d2eaa9f0940b479c7c0b615eac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c54594cfefbf21585570af9cefb185f646c50d2eaa9f0940b479c7c0b615eac->enter($__internal_7c54594cfefbf21585570af9cefb185f646c50d2eaa9f0940b479c7c0b615eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7c54594cfefbf21585570af9cefb185f646c50d2eaa9f0940b479c7c0b615eac->leave($__internal_7c54594cfefbf21585570af9cefb185f646c50d2eaa9f0940b479c7c0b615eac_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_00bb8e22ce60a4e1e10bdcd656541d3a5bf65ad5a06acbd29089707ad98c557f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00bb8e22ce60a4e1e10bdcd656541d3a5bf65ad5a06acbd29089707ad98c557f->enter($__internal_00bb8e22ce60a4e1e10bdcd656541d3a5bf65ad5a06acbd29089707ad98c557f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_00bb8e22ce60a4e1e10bdcd656541d3a5bf65ad5a06acbd29089707ad98c557f->leave($__internal_00bb8e22ce60a4e1e10bdcd656541d3a5bf65ad5a06acbd29089707ad98c557f_prof);

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
