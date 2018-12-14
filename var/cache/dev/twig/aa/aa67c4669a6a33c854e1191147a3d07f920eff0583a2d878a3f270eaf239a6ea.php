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
        $__internal_e54bab35f0e240f817d0f99251e81af4110b035bbee4003188f6e044995bd4ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e54bab35f0e240f817d0f99251e81af4110b035bbee4003188f6e044995bd4ea->enter($__internal_e54bab35f0e240f817d0f99251e81af4110b035bbee4003188f6e044995bd4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e54bab35f0e240f817d0f99251e81af4110b035bbee4003188f6e044995bd4ea->leave($__internal_e54bab35f0e240f817d0f99251e81af4110b035bbee4003188f6e044995bd4ea_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f0071315bfdb0dc4d6a5cc9ae54ea8dc8f9ed91887c495c66f0a86e18fc9e7d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0071315bfdb0dc4d6a5cc9ae54ea8dc8f9ed91887c495c66f0a86e18fc9e7d9->enter($__internal_f0071315bfdb0dc4d6a5cc9ae54ea8dc8f9ed91887c495c66f0a86e18fc9e7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f0071315bfdb0dc4d6a5cc9ae54ea8dc8f9ed91887c495c66f0a86e18fc9e7d9->leave($__internal_f0071315bfdb0dc4d6a5cc9ae54ea8dc8f9ed91887c495c66f0a86e18fc9e7d9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d9d75f74d366b5d09bb1bcbb991fb2c850aa9f73173046b17281c11d304cb554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d75f74d366b5d09bb1bcbb991fb2c850aa9f73173046b17281c11d304cb554->enter($__internal_d9d75f74d366b5d09bb1bcbb991fb2c850aa9f73173046b17281c11d304cb554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d9d75f74d366b5d09bb1bcbb991fb2c850aa9f73173046b17281c11d304cb554->leave($__internal_d9d75f74d366b5d09bb1bcbb991fb2c850aa9f73173046b17281c11d304cb554_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_caa1d4ce2f139e54508166dfccf56a1af2ad4ed9b96467808c1aa4e4e5f9f4f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa1d4ce2f139e54508166dfccf56a1af2ad4ed9b96467808c1aa4e4e5f9f4f9->enter($__internal_caa1d4ce2f139e54508166dfccf56a1af2ad4ed9b96467808c1aa4e4e5f9f4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_caa1d4ce2f139e54508166dfccf56a1af2ad4ed9b96467808c1aa4e4e5f9f4f9->leave($__internal_caa1d4ce2f139e54508166dfccf56a1af2ad4ed9b96467808c1aa4e4e5f9f4f9_prof);

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
