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
        $__internal_d2f7be0423f482f99641fbe717bc62fdb333bf2cee7a3224500496291e6f2738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f7be0423f482f99641fbe717bc62fdb333bf2cee7a3224500496291e6f2738->enter($__internal_d2f7be0423f482f99641fbe717bc62fdb333bf2cee7a3224500496291e6f2738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2f7be0423f482f99641fbe717bc62fdb333bf2cee7a3224500496291e6f2738->leave($__internal_d2f7be0423f482f99641fbe717bc62fdb333bf2cee7a3224500496291e6f2738_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7ac66adb297364c29cc6449dc0625f3da94b63de716b36afb136970d302641b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ac66adb297364c29cc6449dc0625f3da94b63de716b36afb136970d302641b2->enter($__internal_7ac66adb297364c29cc6449dc0625f3da94b63de716b36afb136970d302641b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7ac66adb297364c29cc6449dc0625f3da94b63de716b36afb136970d302641b2->leave($__internal_7ac66adb297364c29cc6449dc0625f3da94b63de716b36afb136970d302641b2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4683ed3943b84ea4c76c9347823f7e6104b5afdd354aca45c3bb105b551509ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4683ed3943b84ea4c76c9347823f7e6104b5afdd354aca45c3bb105b551509ed->enter($__internal_4683ed3943b84ea4c76c9347823f7e6104b5afdd354aca45c3bb105b551509ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4683ed3943b84ea4c76c9347823f7e6104b5afdd354aca45c3bb105b551509ed->leave($__internal_4683ed3943b84ea4c76c9347823f7e6104b5afdd354aca45c3bb105b551509ed_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5762e0a00e7231a92ed89d526d5bcc562e185dc46ea06070697f7bafa88f3d48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5762e0a00e7231a92ed89d526d5bcc562e185dc46ea06070697f7bafa88f3d48->enter($__internal_5762e0a00e7231a92ed89d526d5bcc562e185dc46ea06070697f7bafa88f3d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5762e0a00e7231a92ed89d526d5bcc562e185dc46ea06070697f7bafa88f3d48->leave($__internal_5762e0a00e7231a92ed89d526d5bcc562e185dc46ea06070697f7bafa88f3d48_prof);

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
