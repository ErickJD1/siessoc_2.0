<?php

/* :movimientoinventario:edit.html.twig */
class __TwigTemplate_8dddece8e6a4a4ab688f1301b94a42ac7c58e4f5d2efab76a22c7dbe3fa55ba5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":movimientoinventario:edit.html.twig", 1);
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
        $__internal_d65ec3e06d756d041a9a2e99ee1c0e9d2e3980b177733a95d5479dac5592f600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d65ec3e06d756d041a9a2e99ee1c0e9d2e3980b177733a95d5479dac5592f600->enter($__internal_d65ec3e06d756d041a9a2e99ee1c0e9d2e3980b177733a95d5479dac5592f600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":movimientoinventario:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d65ec3e06d756d041a9a2e99ee1c0e9d2e3980b177733a95d5479dac5592f600->leave($__internal_d65ec3e06d756d041a9a2e99ee1c0e9d2e3980b177733a95d5479dac5592f600_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_009474dde31786c224624974bd6c90a1788a6fe75f26fb195a0adaa2f2a0db7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009474dde31786c224624974bd6c90a1788a6fe75f26fb195a0adaa2f2a0db7e->enter($__internal_009474dde31786c224624974bd6c90a1788a6fe75f26fb195a0adaa2f2a0db7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Movimientoinventario edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movimientoinventario_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_009474dde31786c224624974bd6c90a1788a6fe75f26fb195a0adaa2f2a0db7e->leave($__internal_009474dde31786c224624974bd6c90a1788a6fe75f26fb195a0adaa2f2a0db7e_prof);

    }

    public function getTemplateName()
    {
        return ":movimientoinventario:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Movimientoinventario edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('movimientoinventario_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":movimientoinventario:edit.html.twig", "/home/ubuntu/workspace/app/Resources/views/movimientoinventario/edit.html.twig");
    }
}
