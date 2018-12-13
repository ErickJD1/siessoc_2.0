<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ba87cf58dede98aee9209cd394e9af0b10b68f1daafcfa73cff3872fca4c79f0 extends Twig_Template
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
        $__internal_57e84c24224c6fe1ef35b2298038c5f143533440b9b33dc865b7b627697af230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57e84c24224c6fe1ef35b2298038c5f143533440b9b33dc865b7b627697af230->enter($__internal_57e84c24224c6fe1ef35b2298038c5f143533440b9b33dc865b7b627697af230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57e84c24224c6fe1ef35b2298038c5f143533440b9b33dc865b7b627697af230->leave($__internal_57e84c24224c6fe1ef35b2298038c5f143533440b9b33dc865b7b627697af230_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_786893cc74c8aac502cd655e41f164581faf4bc6f1fc6f765cfcb3eacf22fb1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_786893cc74c8aac502cd655e41f164581faf4bc6f1fc6f765cfcb3eacf22fb1b->enter($__internal_786893cc74c8aac502cd655e41f164581faf4bc6f1fc6f765cfcb3eacf22fb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_786893cc74c8aac502cd655e41f164581faf4bc6f1fc6f765cfcb3eacf22fb1b->leave($__internal_786893cc74c8aac502cd655e41f164581faf4bc6f1fc6f765cfcb3eacf22fb1b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e70b48cea7dcda69dd618b9f62f72389ae3ca966fad1885c43d3cd2b1298184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e70b48cea7dcda69dd618b9f62f72389ae3ca966fad1885c43d3cd2b1298184->enter($__internal_8e70b48cea7dcda69dd618b9f62f72389ae3ca966fad1885c43d3cd2b1298184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8e70b48cea7dcda69dd618b9f62f72389ae3ca966fad1885c43d3cd2b1298184->leave($__internal_8e70b48cea7dcda69dd618b9f62f72389ae3ca966fad1885c43d3cd2b1298184_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7d22474863403b6839890666f18b854a8653477b9f4595a2e17b9fa57f92f686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d22474863403b6839890666f18b854a8653477b9f4595a2e17b9fa57f92f686->enter($__internal_7d22474863403b6839890666f18b854a8653477b9f4595a2e17b9fa57f92f686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7d22474863403b6839890666f18b854a8653477b9f4595a2e17b9fa57f92f686->leave($__internal_7d22474863403b6839890666f18b854a8653477b9f4595a2e17b9fa57f92f686_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
