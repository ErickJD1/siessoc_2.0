<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f74d4dd66bce8e3a1352d3e7a7182997cf1fb4143d0abeaa55023d4fdef7de6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_a1b2a2f18b730d8b09929f78874c8aa6e68590beb1775f9d74054d3df4733543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b2a2f18b730d8b09929f78874c8aa6e68590beb1775f9d74054d3df4733543->enter($__internal_a1b2a2f18b730d8b09929f78874c8aa6e68590beb1775f9d74054d3df4733543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1b2a2f18b730d8b09929f78874c8aa6e68590beb1775f9d74054d3df4733543->leave($__internal_a1b2a2f18b730d8b09929f78874c8aa6e68590beb1775f9d74054d3df4733543_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_28f5b0343c6e2d9ed15c42ce1ac99054c015ec48f750a520327373fdd5fae1bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28f5b0343c6e2d9ed15c42ce1ac99054c015ec48f750a520327373fdd5fae1bc->enter($__internal_28f5b0343c6e2d9ed15c42ce1ac99054c015ec48f750a520327373fdd5fae1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_28f5b0343c6e2d9ed15c42ce1ac99054c015ec48f750a520327373fdd5fae1bc->leave($__internal_28f5b0343c6e2d9ed15c42ce1ac99054c015ec48f750a520327373fdd5fae1bc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_726978d38d21158a0b1b6224e31f493b1d04435618562d97af8ef3c2a143906a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_726978d38d21158a0b1b6224e31f493b1d04435618562d97af8ef3c2a143906a->enter($__internal_726978d38d21158a0b1b6224e31f493b1d04435618562d97af8ef3c2a143906a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_726978d38d21158a0b1b6224e31f493b1d04435618562d97af8ef3c2a143906a->leave($__internal_726978d38d21158a0b1b6224e31f493b1d04435618562d97af8ef3c2a143906a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_917992509edd19420dd7b6a0ad1b87ee9e6d842d46c38c486e9bc6880e1d48a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_917992509edd19420dd7b6a0ad1b87ee9e6d842d46c38c486e9bc6880e1d48a8->enter($__internal_917992509edd19420dd7b6a0ad1b87ee9e6d842d46c38c486e9bc6880e1d48a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_917992509edd19420dd7b6a0ad1b87ee9e6d842d46c38c486e9bc6880e1d48a8->leave($__internal_917992509edd19420dd7b6a0ad1b87ee9e6d842d46c38c486e9bc6880e1d48a8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
