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
        $__internal_a3880cdc40e18b43c89d55af573ab50eeebc34211eac9e4667a65a5f2d1d7bf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3880cdc40e18b43c89d55af573ab50eeebc34211eac9e4667a65a5f2d1d7bf6->enter($__internal_a3880cdc40e18b43c89d55af573ab50eeebc34211eac9e4667a65a5f2d1d7bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3880cdc40e18b43c89d55af573ab50eeebc34211eac9e4667a65a5f2d1d7bf6->leave($__internal_a3880cdc40e18b43c89d55af573ab50eeebc34211eac9e4667a65a5f2d1d7bf6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4c045e944c7acd794f5263ad9961b365924dd435856463e41c725a841693b8d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c045e944c7acd794f5263ad9961b365924dd435856463e41c725a841693b8d0->enter($__internal_4c045e944c7acd794f5263ad9961b365924dd435856463e41c725a841693b8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4c045e944c7acd794f5263ad9961b365924dd435856463e41c725a841693b8d0->leave($__internal_4c045e944c7acd794f5263ad9961b365924dd435856463e41c725a841693b8d0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aaa27b90f6a29f7b66417167953529ad547d7e6e2ec88b080fa8d905cbfab2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaa27b90f6a29f7b66417167953529ad547d7e6e2ec88b080fa8d905cbfab2bd->enter($__internal_aaa27b90f6a29f7b66417167953529ad547d7e6e2ec88b080fa8d905cbfab2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aaa27b90f6a29f7b66417167953529ad547d7e6e2ec88b080fa8d905cbfab2bd->leave($__internal_aaa27b90f6a29f7b66417167953529ad547d7e6e2ec88b080fa8d905cbfab2bd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_abdd7f4b823186363a61586bc11dcdba25c0631a97d80ba0144d56b098eb3546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abdd7f4b823186363a61586bc11dcdba25c0631a97d80ba0144d56b098eb3546->enter($__internal_abdd7f4b823186363a61586bc11dcdba25c0631a97d80ba0144d56b098eb3546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_abdd7f4b823186363a61586bc11dcdba25c0631a97d80ba0144d56b098eb3546->leave($__internal_abdd7f4b823186363a61586bc11dcdba25c0631a97d80ba0144d56b098eb3546_prof);

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
