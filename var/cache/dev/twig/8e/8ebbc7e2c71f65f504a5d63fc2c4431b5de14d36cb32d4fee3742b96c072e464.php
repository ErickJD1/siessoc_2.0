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
        $__internal_149c24d52d131c85b5d77781cff91482b35f58775fd3d1fb39bd966dd36b6851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_149c24d52d131c85b5d77781cff91482b35f58775fd3d1fb39bd966dd36b6851->enter($__internal_149c24d52d131c85b5d77781cff91482b35f58775fd3d1fb39bd966dd36b6851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_149c24d52d131c85b5d77781cff91482b35f58775fd3d1fb39bd966dd36b6851->leave($__internal_149c24d52d131c85b5d77781cff91482b35f58775fd3d1fb39bd966dd36b6851_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b26fa19dee0d5bd2483b3988922f3ab300b5b9cf10226264c6351140f3bae584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b26fa19dee0d5bd2483b3988922f3ab300b5b9cf10226264c6351140f3bae584->enter($__internal_b26fa19dee0d5bd2483b3988922f3ab300b5b9cf10226264c6351140f3bae584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b26fa19dee0d5bd2483b3988922f3ab300b5b9cf10226264c6351140f3bae584->leave($__internal_b26fa19dee0d5bd2483b3988922f3ab300b5b9cf10226264c6351140f3bae584_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eac1320581200d8133a966b07cbac79011f251ebe4e2c87c012311396e79b4e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac1320581200d8133a966b07cbac79011f251ebe4e2c87c012311396e79b4e6->enter($__internal_eac1320581200d8133a966b07cbac79011f251ebe4e2c87c012311396e79b4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eac1320581200d8133a966b07cbac79011f251ebe4e2c87c012311396e79b4e6->leave($__internal_eac1320581200d8133a966b07cbac79011f251ebe4e2c87c012311396e79b4e6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b6cdda5ca9ceabcf38b0df50f3a0af8ba9a2f4e1fef97fff42ffdf1b0ea772e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6cdda5ca9ceabcf38b0df50f3a0af8ba9a2f4e1fef97fff42ffdf1b0ea772e7->enter($__internal_b6cdda5ca9ceabcf38b0df50f3a0af8ba9a2f4e1fef97fff42ffdf1b0ea772e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b6cdda5ca9ceabcf38b0df50f3a0af8ba9a2f4e1fef97fff42ffdf1b0ea772e7->leave($__internal_b6cdda5ca9ceabcf38b0df50f3a0af8ba9a2f4e1fef97fff42ffdf1b0ea772e7_prof);

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
