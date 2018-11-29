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
        $__internal_efea64672ef8f61316957dfdf1964032a159441d2edd0eb19a31e146d57a6460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efea64672ef8f61316957dfdf1964032a159441d2edd0eb19a31e146d57a6460->enter($__internal_efea64672ef8f61316957dfdf1964032a159441d2edd0eb19a31e146d57a6460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efea64672ef8f61316957dfdf1964032a159441d2edd0eb19a31e146d57a6460->leave($__internal_efea64672ef8f61316957dfdf1964032a159441d2edd0eb19a31e146d57a6460_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_095a8d02e3d8dc83caf58e847b009a9a33b8a11605be25e71ca1f05a70a76381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_095a8d02e3d8dc83caf58e847b009a9a33b8a11605be25e71ca1f05a70a76381->enter($__internal_095a8d02e3d8dc83caf58e847b009a9a33b8a11605be25e71ca1f05a70a76381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_095a8d02e3d8dc83caf58e847b009a9a33b8a11605be25e71ca1f05a70a76381->leave($__internal_095a8d02e3d8dc83caf58e847b009a9a33b8a11605be25e71ca1f05a70a76381_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6c0952770fbb0cb1021a08b89a9d562df41acab3257cfc19b5ff073565feaecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c0952770fbb0cb1021a08b89a9d562df41acab3257cfc19b5ff073565feaecd->enter($__internal_6c0952770fbb0cb1021a08b89a9d562df41acab3257cfc19b5ff073565feaecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6c0952770fbb0cb1021a08b89a9d562df41acab3257cfc19b5ff073565feaecd->leave($__internal_6c0952770fbb0cb1021a08b89a9d562df41acab3257cfc19b5ff073565feaecd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9791ac21ea32de806cc2f1db9401b523ea949756d3f72ce1199f6de664224d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9791ac21ea32de806cc2f1db9401b523ea949756d3f72ce1199f6de664224d91->enter($__internal_9791ac21ea32de806cc2f1db9401b523ea949756d3f72ce1199f6de664224d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9791ac21ea32de806cc2f1db9401b523ea949756d3f72ce1199f6de664224d91->leave($__internal_9791ac21ea32de806cc2f1db9401b523ea949756d3f72ce1199f6de664224d91_prof);

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
