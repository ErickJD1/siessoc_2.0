<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a10a9c9ddc275767a11b82ac7c990454a2b5e51c2cd1acb4a05ad49a23cbaa96 extends Twig_Template
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
        $__internal_3a04b175fd5c690cd1b8a91346b1e79b38fd96a5752268d51e12b5b167bfb43d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a04b175fd5c690cd1b8a91346b1e79b38fd96a5752268d51e12b5b167bfb43d->enter($__internal_3a04b175fd5c690cd1b8a91346b1e79b38fd96a5752268d51e12b5b167bfb43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a04b175fd5c690cd1b8a91346b1e79b38fd96a5752268d51e12b5b167bfb43d->leave($__internal_3a04b175fd5c690cd1b8a91346b1e79b38fd96a5752268d51e12b5b167bfb43d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_de1bcb5c3c76a004c065b12451b7050bc680a9d43dd7a8a6ceb586d2d6b50353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de1bcb5c3c76a004c065b12451b7050bc680a9d43dd7a8a6ceb586d2d6b50353->enter($__internal_de1bcb5c3c76a004c065b12451b7050bc680a9d43dd7a8a6ceb586d2d6b50353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_de1bcb5c3c76a004c065b12451b7050bc680a9d43dd7a8a6ceb586d2d6b50353->leave($__internal_de1bcb5c3c76a004c065b12451b7050bc680a9d43dd7a8a6ceb586d2d6b50353_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eafcb9c5709298af62cbd1fa1d62e41c4b8eafa0aee9ee93b2a2d04f02beb8ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eafcb9c5709298af62cbd1fa1d62e41c4b8eafa0aee9ee93b2a2d04f02beb8ba->enter($__internal_eafcb9c5709298af62cbd1fa1d62e41c4b8eafa0aee9ee93b2a2d04f02beb8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eafcb9c5709298af62cbd1fa1d62e41c4b8eafa0aee9ee93b2a2d04f02beb8ba->leave($__internal_eafcb9c5709298af62cbd1fa1d62e41c4b8eafa0aee9ee93b2a2d04f02beb8ba_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0356eda6800f4ddabdf1c68fc9bc845c7813f455c2bda8b6b8dfb9f8f6ff2156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0356eda6800f4ddabdf1c68fc9bc845c7813f455c2bda8b6b8dfb9f8f6ff2156->enter($__internal_0356eda6800f4ddabdf1c68fc9bc845c7813f455c2bda8b6b8dfb9f8f6ff2156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0356eda6800f4ddabdf1c68fc9bc845c7813f455c2bda8b6b8dfb9f8f6ff2156->leave($__internal_0356eda6800f4ddabdf1c68fc9bc845c7813f455c2bda8b6b8dfb9f8f6ff2156_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
