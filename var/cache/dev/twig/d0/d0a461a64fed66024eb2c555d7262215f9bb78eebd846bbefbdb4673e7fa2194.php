<?php

/* :banco:new.html.twig */
class __TwigTemplate_067bfd2f98b5d3cf6cb873bb8264994208c59c04b9244c4d73c532d367fa54f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":banco:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91f835f527ee8d42f50f4d7aa2717995bb931d84b5ba751e55c0e3583491d2c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f835f527ee8d42f50f4d7aa2717995bb931d84b5ba751e55c0e3583491d2c3->enter($__internal_91f835f527ee8d42f50f4d7aa2717995bb931d84b5ba751e55c0e3583491d2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":banco:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91f835f527ee8d42f50f4d7aa2717995bb931d84b5ba751e55c0e3583491d2c3->leave($__internal_91f835f527ee8d42f50f4d7aa2717995bb931d84b5ba751e55c0e3583491d2c3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_381c3790c5088c79ed4872afeb264a8be00e6f06cd97bba1935b5a1aa0b49956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_381c3790c5088c79ed4872afeb264a8be00e6f06cd97bba1935b5a1aa0b49956->enter($__internal_381c3790c5088c79ed4872afeb264a8be00e6f06cd97bba1935b5a1aa0b49956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Banco creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("banco_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_381c3790c5088c79ed4872afeb264a8be00e6f06cd97bba1935b5a1aa0b49956->leave($__internal_381c3790c5088c79ed4872afeb264a8be00e6f06cd97bba1935b5a1aa0b49956_prof);

    }

    public function getTemplateName()
    {
        return ":banco:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Banco creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('banco_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":banco:new.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\app/Resources\\views/banco/new.html.twig");
    }
}
