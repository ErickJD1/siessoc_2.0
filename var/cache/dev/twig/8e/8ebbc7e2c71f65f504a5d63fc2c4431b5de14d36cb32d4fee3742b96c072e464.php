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
        $__internal_fd6d305cddb343924ffebffce33a331caac55bfecb3c2eb5abd90eda4fdaf3e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd6d305cddb343924ffebffce33a331caac55bfecb3c2eb5abd90eda4fdaf3e8->enter($__internal_fd6d305cddb343924ffebffce33a331caac55bfecb3c2eb5abd90eda4fdaf3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd6d305cddb343924ffebffce33a331caac55bfecb3c2eb5abd90eda4fdaf3e8->leave($__internal_fd6d305cddb343924ffebffce33a331caac55bfecb3c2eb5abd90eda4fdaf3e8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_651c43eb0de0d0ee3df74fc534b14d68097c439c3c84046ee4638104e7bc76dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651c43eb0de0d0ee3df74fc534b14d68097c439c3c84046ee4638104e7bc76dc->enter($__internal_651c43eb0de0d0ee3df74fc534b14d68097c439c3c84046ee4638104e7bc76dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_651c43eb0de0d0ee3df74fc534b14d68097c439c3c84046ee4638104e7bc76dc->leave($__internal_651c43eb0de0d0ee3df74fc534b14d68097c439c3c84046ee4638104e7bc76dc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_992ff89e1c740a5e07806891f71476a6aafd82d6669af450ad556731bd9e9448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_992ff89e1c740a5e07806891f71476a6aafd82d6669af450ad556731bd9e9448->enter($__internal_992ff89e1c740a5e07806891f71476a6aafd82d6669af450ad556731bd9e9448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_992ff89e1c740a5e07806891f71476a6aafd82d6669af450ad556731bd9e9448->leave($__internal_992ff89e1c740a5e07806891f71476a6aafd82d6669af450ad556731bd9e9448_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3b6e85dbe91c3608605ece46efd5d8f2388a3d5d4457504f34b5c871ea6cd4a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6e85dbe91c3608605ece46efd5d8f2388a3d5d4457504f34b5c871ea6cd4a5->enter($__internal_3b6e85dbe91c3608605ece46efd5d8f2388a3d5d4457504f34b5c871ea6cd4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3b6e85dbe91c3608605ece46efd5d8f2388a3d5d4457504f34b5c871ea6cd4a5->leave($__internal_3b6e85dbe91c3608605ece46efd5d8f2388a3d5d4457504f34b5c871ea6cd4a5_prof);

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
