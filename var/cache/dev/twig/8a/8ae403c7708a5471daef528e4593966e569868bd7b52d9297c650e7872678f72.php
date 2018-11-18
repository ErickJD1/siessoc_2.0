<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6118fc32de9507cc2bd17bd6b2c126e585ac25da4bd125dcffea1f3bc2c81174 extends Twig_Template
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
        $__internal_a4b4594bef3d269501ba93cc0955391012e546ce64cf0384eb69165c86d9e241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b4594bef3d269501ba93cc0955391012e546ce64cf0384eb69165c86d9e241->enter($__internal_a4b4594bef3d269501ba93cc0955391012e546ce64cf0384eb69165c86d9e241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4b4594bef3d269501ba93cc0955391012e546ce64cf0384eb69165c86d9e241->leave($__internal_a4b4594bef3d269501ba93cc0955391012e546ce64cf0384eb69165c86d9e241_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b5b15766bb954ae699e356c6a9023f6473036c2f1bcbc9ff2df9923997e3f175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b15766bb954ae699e356c6a9023f6473036c2f1bcbc9ff2df9923997e3f175->enter($__internal_b5b15766bb954ae699e356c6a9023f6473036c2f1bcbc9ff2df9923997e3f175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b5b15766bb954ae699e356c6a9023f6473036c2f1bcbc9ff2df9923997e3f175->leave($__internal_b5b15766bb954ae699e356c6a9023f6473036c2f1bcbc9ff2df9923997e3f175_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0bdd0efaa4e48a9db34d6378f394c2da7916ed1eba3f9a43b380d16c67ceb85b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bdd0efaa4e48a9db34d6378f394c2da7916ed1eba3f9a43b380d16c67ceb85b->enter($__internal_0bdd0efaa4e48a9db34d6378f394c2da7916ed1eba3f9a43b380d16c67ceb85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_0bdd0efaa4e48a9db34d6378f394c2da7916ed1eba3f9a43b380d16c67ceb85b->leave($__internal_0bdd0efaa4e48a9db34d6378f394c2da7916ed1eba3f9a43b380d16c67ceb85b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_df2c5e38b41f6a3b0bc8db00a4163e3b720b0d39d3a4e24c2529d46551b162ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2c5e38b41f6a3b0bc8db00a4163e3b720b0d39d3a4e24c2529d46551b162ab->enter($__internal_df2c5e38b41f6a3b0bc8db00a4163e3b720b0d39d3a4e24c2529d46551b162ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_df2c5e38b41f6a3b0bc8db00a4163e3b720b0d39d3a4e24c2529d46551b162ab->leave($__internal_df2c5e38b41f6a3b0bc8db00a4163e3b720b0d39d3a4e24c2529d46551b162ab_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
