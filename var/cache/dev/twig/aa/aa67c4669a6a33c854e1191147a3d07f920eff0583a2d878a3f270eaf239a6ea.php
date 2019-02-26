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
        $__internal_117253d5ab11753aacc15b260ec8e9aa6d2b1c6d82ee853ca523318e83b449b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_117253d5ab11753aacc15b260ec8e9aa6d2b1c6d82ee853ca523318e83b449b1->enter($__internal_117253d5ab11753aacc15b260ec8e9aa6d2b1c6d82ee853ca523318e83b449b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_117253d5ab11753aacc15b260ec8e9aa6d2b1c6d82ee853ca523318e83b449b1->leave($__internal_117253d5ab11753aacc15b260ec8e9aa6d2b1c6d82ee853ca523318e83b449b1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_96b77748cf40483b39a31a234d3f25de56dd51d79c2132e7b38233928ff0f0e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96b77748cf40483b39a31a234d3f25de56dd51d79c2132e7b38233928ff0f0e8->enter($__internal_96b77748cf40483b39a31a234d3f25de56dd51d79c2132e7b38233928ff0f0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_96b77748cf40483b39a31a234d3f25de56dd51d79c2132e7b38233928ff0f0e8->leave($__internal_96b77748cf40483b39a31a234d3f25de56dd51d79c2132e7b38233928ff0f0e8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3f4af0c3aa797cbada6745fcd7f0563474727ef20cc147843e2d0ecffa670364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f4af0c3aa797cbada6745fcd7f0563474727ef20cc147843e2d0ecffa670364->enter($__internal_3f4af0c3aa797cbada6745fcd7f0563474727ef20cc147843e2d0ecffa670364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3f4af0c3aa797cbada6745fcd7f0563474727ef20cc147843e2d0ecffa670364->leave($__internal_3f4af0c3aa797cbada6745fcd7f0563474727ef20cc147843e2d0ecffa670364_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f9281fc904eea87183a27cb39179b88e02e97fd159ed525fea3997f4bab7707b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9281fc904eea87183a27cb39179b88e02e97fd159ed525fea3997f4bab7707b->enter($__internal_f9281fc904eea87183a27cb39179b88e02e97fd159ed525fea3997f4bab7707b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f9281fc904eea87183a27cb39179b88e02e97fd159ed525fea3997f4bab7707b->leave($__internal_f9281fc904eea87183a27cb39179b88e02e97fd159ed525fea3997f4bab7707b_prof);

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
