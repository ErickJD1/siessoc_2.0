<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_acb17e2a1712f3fa79c241a5f1d22c01491100bfece92b702b2d73352bdce857 extends Twig_Template
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
        $__internal_d0cae326714f428f206a0e3c4de7b1764903de6f458a5f44a5925eb9f974781d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0cae326714f428f206a0e3c4de7b1764903de6f458a5f44a5925eb9f974781d->enter($__internal_d0cae326714f428f206a0e3c4de7b1764903de6f458a5f44a5925eb9f974781d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0cae326714f428f206a0e3c4de7b1764903de6f458a5f44a5925eb9f974781d->leave($__internal_d0cae326714f428f206a0e3c4de7b1764903de6f458a5f44a5925eb9f974781d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0d1f809f43cf3ad8b786888379107128e01b7c386ca2695c440eb0eb6244a18e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d1f809f43cf3ad8b786888379107128e01b7c386ca2695c440eb0eb6244a18e->enter($__internal_0d1f809f43cf3ad8b786888379107128e01b7c386ca2695c440eb0eb6244a18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0d1f809f43cf3ad8b786888379107128e01b7c386ca2695c440eb0eb6244a18e->leave($__internal_0d1f809f43cf3ad8b786888379107128e01b7c386ca2695c440eb0eb6244a18e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4301f520d7f8f6984404d294715991b336dd2824e6a4d434a8a755831e448172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4301f520d7f8f6984404d294715991b336dd2824e6a4d434a8a755831e448172->enter($__internal_4301f520d7f8f6984404d294715991b336dd2824e6a4d434a8a755831e448172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4301f520d7f8f6984404d294715991b336dd2824e6a4d434a8a755831e448172->leave($__internal_4301f520d7f8f6984404d294715991b336dd2824e6a4d434a8a755831e448172_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5991e71cd07951d9ace17ef34a0c7ccbefcad82835ca904a9eaca2ff20616033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5991e71cd07951d9ace17ef34a0c7ccbefcad82835ca904a9eaca2ff20616033->enter($__internal_5991e71cd07951d9ace17ef34a0c7ccbefcad82835ca904a9eaca2ff20616033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5991e71cd07951d9ace17ef34a0c7ccbefcad82835ca904a9eaca2ff20616033->leave($__internal_5991e71cd07951d9ace17ef34a0c7ccbefcad82835ca904a9eaca2ff20616033_prof);

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
