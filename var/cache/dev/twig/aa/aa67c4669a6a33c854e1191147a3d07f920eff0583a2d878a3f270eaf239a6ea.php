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
        $__internal_27012c31a31f831425f8ef4291d68b6b87cea2b8c8ee530ff1dd17da949ff769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27012c31a31f831425f8ef4291d68b6b87cea2b8c8ee530ff1dd17da949ff769->enter($__internal_27012c31a31f831425f8ef4291d68b6b87cea2b8c8ee530ff1dd17da949ff769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27012c31a31f831425f8ef4291d68b6b87cea2b8c8ee530ff1dd17da949ff769->leave($__internal_27012c31a31f831425f8ef4291d68b6b87cea2b8c8ee530ff1dd17da949ff769_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_36a82606c87551061b938257e59be2192e8860cf1b44641bff4f0e8093e96c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36a82606c87551061b938257e59be2192e8860cf1b44641bff4f0e8093e96c6f->enter($__internal_36a82606c87551061b938257e59be2192e8860cf1b44641bff4f0e8093e96c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_36a82606c87551061b938257e59be2192e8860cf1b44641bff4f0e8093e96c6f->leave($__internal_36a82606c87551061b938257e59be2192e8860cf1b44641bff4f0e8093e96c6f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e4009994070a8c083aa4e8e9323b20ed4691a13bc61b911925fb447e8ef171d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e4009994070a8c083aa4e8e9323b20ed4691a13bc61b911925fb447e8ef171d->enter($__internal_8e4009994070a8c083aa4e8e9323b20ed4691a13bc61b911925fb447e8ef171d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8e4009994070a8c083aa4e8e9323b20ed4691a13bc61b911925fb447e8ef171d->leave($__internal_8e4009994070a8c083aa4e8e9323b20ed4691a13bc61b911925fb447e8ef171d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b421ee67ac5a0ad0d10a5418659750743cc2a4fcb10b3922b1dd0f67ce40011d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b421ee67ac5a0ad0d10a5418659750743cc2a4fcb10b3922b1dd0f67ce40011d->enter($__internal_b421ee67ac5a0ad0d10a5418659750743cc2a4fcb10b3922b1dd0f67ce40011d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b421ee67ac5a0ad0d10a5418659750743cc2a4fcb10b3922b1dd0f67ce40011d->leave($__internal_b421ee67ac5a0ad0d10a5418659750743cc2a4fcb10b3922b1dd0f67ce40011d_prof);

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
