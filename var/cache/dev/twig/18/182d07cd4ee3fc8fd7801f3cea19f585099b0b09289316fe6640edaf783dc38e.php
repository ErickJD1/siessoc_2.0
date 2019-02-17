<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_3d147636c90dcc2bf1968013e9174ba0d4875e1f0d97de3e1b7c40f72b3ed188 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b610710a371e3cd0085360c8823dbd92d4136650576ad72d857687cf2b5a42ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b610710a371e3cd0085360c8823dbd92d4136650576ad72d857687cf2b5a42ef->enter($__internal_b610710a371e3cd0085360c8823dbd92d4136650576ad72d857687cf2b5a42ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b610710a371e3cd0085360c8823dbd92d4136650576ad72d857687cf2b5a42ef->leave($__internal_b610710a371e3cd0085360c8823dbd92d4136650576ad72d857687cf2b5a42ef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e1f80b8339c18d0afb1dbc1c75e8ffd0306527ec40502e2bd00d78fcb189b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1f80b8339c18d0afb1dbc1c75e8ffd0306527ec40502e2bd00d78fcb189b5e->enter($__internal_9e1f80b8339c18d0afb1dbc1c75e8ffd0306527ec40502e2bd00d78fcb189b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9e1f80b8339c18d0afb1dbc1c75e8ffd0306527ec40502e2bd00d78fcb189b5e->leave($__internal_9e1f80b8339c18d0afb1dbc1c75e8ffd0306527ec40502e2bd00d78fcb189b5e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d027a87480c96beee48ba37aa28cc1714b4d4b62d4a407ed83bfa92ebc0624e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d027a87480c96beee48ba37aa28cc1714b4d4b62d4a407ed83bfa92ebc0624e4->enter($__internal_d027a87480c96beee48ba37aa28cc1714b4d4b62d4a407ed83bfa92ebc0624e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d027a87480c96beee48ba37aa28cc1714b4d4b62d4a407ed83bfa92ebc0624e4->leave($__internal_d027a87480c96beee48ba37aa28cc1714b4d4b62d4a407ed83bfa92ebc0624e4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5e23676b518264ceac6d1fe0c8422087b66a4ab1cf7ad45e47764a2c6b6e8543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e23676b518264ceac6d1fe0c8422087b66a4ab1cf7ad45e47764a2c6b6e8543->enter($__internal_5e23676b518264ceac6d1fe0c8422087b66a4ab1cf7ad45e47764a2c6b6e8543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5e23676b518264ceac6d1fe0c8422087b66a4ab1cf7ad45e47764a2c6b6e8543->leave($__internal_5e23676b518264ceac6d1fe0c8422087b66a4ab1cf7ad45e47764a2c6b6e8543_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
