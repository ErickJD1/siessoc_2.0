<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cdeb1178f3da505011052073f905e777c22e75a7e09d162d4c93b7c5241252bb extends Twig_Template
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
        $__internal_6bb1ef01b289eefdee1fd807eecd6789ef8ec6ac4503df5580884903b0e7fdad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bb1ef01b289eefdee1fd807eecd6789ef8ec6ac4503df5580884903b0e7fdad->enter($__internal_6bb1ef01b289eefdee1fd807eecd6789ef8ec6ac4503df5580884903b0e7fdad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bb1ef01b289eefdee1fd807eecd6789ef8ec6ac4503df5580884903b0e7fdad->leave($__internal_6bb1ef01b289eefdee1fd807eecd6789ef8ec6ac4503df5580884903b0e7fdad_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1e70c259b5634101b3da3255b5eb9ece44b661c0b72680a7ebf1cf0ae5ca7d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e70c259b5634101b3da3255b5eb9ece44b661c0b72680a7ebf1cf0ae5ca7d2a->enter($__internal_1e70c259b5634101b3da3255b5eb9ece44b661c0b72680a7ebf1cf0ae5ca7d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1e70c259b5634101b3da3255b5eb9ece44b661c0b72680a7ebf1cf0ae5ca7d2a->leave($__internal_1e70c259b5634101b3da3255b5eb9ece44b661c0b72680a7ebf1cf0ae5ca7d2a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8d76acf225ec2030d261ecd9a902ef12e6a6d932434e9bbe6a66cc6c3747ab59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d76acf225ec2030d261ecd9a902ef12e6a6d932434e9bbe6a66cc6c3747ab59->enter($__internal_8d76acf225ec2030d261ecd9a902ef12e6a6d932434e9bbe6a66cc6c3747ab59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8d76acf225ec2030d261ecd9a902ef12e6a6d932434e9bbe6a66cc6c3747ab59->leave($__internal_8d76acf225ec2030d261ecd9a902ef12e6a6d932434e9bbe6a66cc6c3747ab59_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8dab0db385d427c7719dfd35c7384dd2381b328e29293b2377b2dd7b44466a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dab0db385d427c7719dfd35c7384dd2381b328e29293b2377b2dd7b44466a14->enter($__internal_8dab0db385d427c7719dfd35c7384dd2381b328e29293b2377b2dd7b44466a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8dab0db385d427c7719dfd35c7384dd2381b328e29293b2377b2dd7b44466a14->leave($__internal_8dab0db385d427c7719dfd35c7384dd2381b328e29293b2377b2dd7b44466a14_prof);

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
