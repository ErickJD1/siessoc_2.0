<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_acb17e2a1712f3fa79c241a5f1d22c01491100bfece92b702b2d73352bdce857 extends Twig_Template
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
        $__internal_2f103ce1d54105b11404a2a82ca084cf201ffb7a13610b4125eed3b0943d01dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f103ce1d54105b11404a2a82ca084cf201ffb7a13610b4125eed3b0943d01dd->enter($__internal_2f103ce1d54105b11404a2a82ca084cf201ffb7a13610b4125eed3b0943d01dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f103ce1d54105b11404a2a82ca084cf201ffb7a13610b4125eed3b0943d01dd->leave($__internal_2f103ce1d54105b11404a2a82ca084cf201ffb7a13610b4125eed3b0943d01dd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9df849f80945180c64ff36ee8806677731593f3343f115a35cba647b21dfb10a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df849f80945180c64ff36ee8806677731593f3343f115a35cba647b21dfb10a->enter($__internal_9df849f80945180c64ff36ee8806677731593f3343f115a35cba647b21dfb10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9df849f80945180c64ff36ee8806677731593f3343f115a35cba647b21dfb10a->leave($__internal_9df849f80945180c64ff36ee8806677731593f3343f115a35cba647b21dfb10a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_34ac62531512d83e52071439231f8b5f26788fb5e0f5acbee79265ff200ea403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34ac62531512d83e52071439231f8b5f26788fb5e0f5acbee79265ff200ea403->enter($__internal_34ac62531512d83e52071439231f8b5f26788fb5e0f5acbee79265ff200ea403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_34ac62531512d83e52071439231f8b5f26788fb5e0f5acbee79265ff200ea403->leave($__internal_34ac62531512d83e52071439231f8b5f26788fb5e0f5acbee79265ff200ea403_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a058357ce20af12c2b5d6b3c81c0c62c4d083976b3a5f660d37235c20b910dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a058357ce20af12c2b5d6b3c81c0c62c4d083976b3a5f660d37235c20b910dcf->enter($__internal_a058357ce20af12c2b5d6b3c81c0c62c4d083976b3a5f660d37235c20b910dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a058357ce20af12c2b5d6b3c81c0c62c4d083976b3a5f660d37235c20b910dcf->leave($__internal_a058357ce20af12c2b5d6b3c81c0c62c4d083976b3a5f660d37235c20b910dcf_prof);

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
