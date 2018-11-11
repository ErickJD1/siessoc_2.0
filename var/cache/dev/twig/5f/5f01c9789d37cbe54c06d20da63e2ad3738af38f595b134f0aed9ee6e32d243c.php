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
        $__internal_51daf374f2821e3dc425ebb7d3221ebf9cace33cce33ad93075a72e8258aa3d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51daf374f2821e3dc425ebb7d3221ebf9cace33cce33ad93075a72e8258aa3d6->enter($__internal_51daf374f2821e3dc425ebb7d3221ebf9cace33cce33ad93075a72e8258aa3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51daf374f2821e3dc425ebb7d3221ebf9cace33cce33ad93075a72e8258aa3d6->leave($__internal_51daf374f2821e3dc425ebb7d3221ebf9cace33cce33ad93075a72e8258aa3d6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_99aa0fda4834b79fd396e793e8d5ff49f3ff2561457c2c844cf2dbcfa6776abb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99aa0fda4834b79fd396e793e8d5ff49f3ff2561457c2c844cf2dbcfa6776abb->enter($__internal_99aa0fda4834b79fd396e793e8d5ff49f3ff2561457c2c844cf2dbcfa6776abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_99aa0fda4834b79fd396e793e8d5ff49f3ff2561457c2c844cf2dbcfa6776abb->leave($__internal_99aa0fda4834b79fd396e793e8d5ff49f3ff2561457c2c844cf2dbcfa6776abb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0c394d1db672c1cae8b3e7ab2a59abde1b6fe6f88cb20a31c035e24a30e2568e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c394d1db672c1cae8b3e7ab2a59abde1b6fe6f88cb20a31c035e24a30e2568e->enter($__internal_0c394d1db672c1cae8b3e7ab2a59abde1b6fe6f88cb20a31c035e24a30e2568e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0c394d1db672c1cae8b3e7ab2a59abde1b6fe6f88cb20a31c035e24a30e2568e->leave($__internal_0c394d1db672c1cae8b3e7ab2a59abde1b6fe6f88cb20a31c035e24a30e2568e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_487a9182c980606893855144801dc8283a04730f6d89938c26002e873d97abe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_487a9182c980606893855144801dc8283a04730f6d89938c26002e873d97abe8->enter($__internal_487a9182c980606893855144801dc8283a04730f6d89938c26002e873d97abe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_487a9182c980606893855144801dc8283a04730f6d89938c26002e873d97abe8->leave($__internal_487a9182c980606893855144801dc8283a04730f6d89938c26002e873d97abe8_prof);

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
