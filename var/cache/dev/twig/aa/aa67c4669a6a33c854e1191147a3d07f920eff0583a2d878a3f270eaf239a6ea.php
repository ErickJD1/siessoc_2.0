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
        $__internal_e4c19c0c5d6f67d06cefd67bd6ac269a57207b41738e15c0e03bc862175b0e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c19c0c5d6f67d06cefd67bd6ac269a57207b41738e15c0e03bc862175b0e3e->enter($__internal_e4c19c0c5d6f67d06cefd67bd6ac269a57207b41738e15c0e03bc862175b0e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4c19c0c5d6f67d06cefd67bd6ac269a57207b41738e15c0e03bc862175b0e3e->leave($__internal_e4c19c0c5d6f67d06cefd67bd6ac269a57207b41738e15c0e03bc862175b0e3e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6eaf1959679b6931af129815c45386dd2e98309f8a9176a670a40407205c001f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eaf1959679b6931af129815c45386dd2e98309f8a9176a670a40407205c001f->enter($__internal_6eaf1959679b6931af129815c45386dd2e98309f8a9176a670a40407205c001f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6eaf1959679b6931af129815c45386dd2e98309f8a9176a670a40407205c001f->leave($__internal_6eaf1959679b6931af129815c45386dd2e98309f8a9176a670a40407205c001f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_016e06b49f2c24b10c2990b4866737eb5844ce9a9194b9a2012efb77cf867047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_016e06b49f2c24b10c2990b4866737eb5844ce9a9194b9a2012efb77cf867047->enter($__internal_016e06b49f2c24b10c2990b4866737eb5844ce9a9194b9a2012efb77cf867047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_016e06b49f2c24b10c2990b4866737eb5844ce9a9194b9a2012efb77cf867047->leave($__internal_016e06b49f2c24b10c2990b4866737eb5844ce9a9194b9a2012efb77cf867047_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_24c934e7b9dbcde245c28fbaccfd21f4db0a4858620b36afd07145cfa62ddc2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24c934e7b9dbcde245c28fbaccfd21f4db0a4858620b36afd07145cfa62ddc2b->enter($__internal_24c934e7b9dbcde245c28fbaccfd21f4db0a4858620b36afd07145cfa62ddc2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_24c934e7b9dbcde245c28fbaccfd21f4db0a4858620b36afd07145cfa62ddc2b->leave($__internal_24c934e7b9dbcde245c28fbaccfd21f4db0a4858620b36afd07145cfa62ddc2b_prof);

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
