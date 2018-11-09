<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_783597bba868d3da86708fa71be466bb1a9ebaa30ded5a0ff5591778d7193e19 extends Twig_Template
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
        $__internal_f6527cbafd56fa398ec592eec16c49ffe1c61325e2f75f127634ebc81e649fb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6527cbafd56fa398ec592eec16c49ffe1c61325e2f75f127634ebc81e649fb9->enter($__internal_f6527cbafd56fa398ec592eec16c49ffe1c61325e2f75f127634ebc81e649fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6527cbafd56fa398ec592eec16c49ffe1c61325e2f75f127634ebc81e649fb9->leave($__internal_f6527cbafd56fa398ec592eec16c49ffe1c61325e2f75f127634ebc81e649fb9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c71b21b4dad638e3918f58ae0ae40bc466ba4215a1386e9c16ab3165d17c714d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c71b21b4dad638e3918f58ae0ae40bc466ba4215a1386e9c16ab3165d17c714d->enter($__internal_c71b21b4dad638e3918f58ae0ae40bc466ba4215a1386e9c16ab3165d17c714d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c71b21b4dad638e3918f58ae0ae40bc466ba4215a1386e9c16ab3165d17c714d->leave($__internal_c71b21b4dad638e3918f58ae0ae40bc466ba4215a1386e9c16ab3165d17c714d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8a71cff43533a3880df30819fff56c8f83f48c45898f2b71fb389fc5024ff2a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a71cff43533a3880df30819fff56c8f83f48c45898f2b71fb389fc5024ff2a5->enter($__internal_8a71cff43533a3880df30819fff56c8f83f48c45898f2b71fb389fc5024ff2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8a71cff43533a3880df30819fff56c8f83f48c45898f2b71fb389fc5024ff2a5->leave($__internal_8a71cff43533a3880df30819fff56c8f83f48c45898f2b71fb389fc5024ff2a5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_825326742db27fa27e8b0916a16e365637fc2927b7d32ecb7198e09218fa1ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_825326742db27fa27e8b0916a16e365637fc2927b7d32ecb7198e09218fa1ed6->enter($__internal_825326742db27fa27e8b0916a16e365637fc2927b7d32ecb7198e09218fa1ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_825326742db27fa27e8b0916a16e365637fc2927b7d32ecb7198e09218fa1ed6->leave($__internal_825326742db27fa27e8b0916a16e365637fc2927b7d32ecb7198e09218fa1ed6_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
