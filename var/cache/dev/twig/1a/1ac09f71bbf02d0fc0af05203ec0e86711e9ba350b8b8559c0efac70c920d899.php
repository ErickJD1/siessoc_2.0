<?php

/* :banco:Bancoedit.html.twig */
class __TwigTemplate_5b6217ad051f875c1c94597a0b9f17414c524b1b9f4358cc0cbc004b98329a2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":banco:Bancoedit.html.twig", 1);
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
        $__internal_021b8e53bfa3e252456338de98e8c2b53cac69c70ddb4febfa968ab14cafbd45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_021b8e53bfa3e252456338de98e8c2b53cac69c70ddb4febfa968ab14cafbd45->enter($__internal_021b8e53bfa3e252456338de98e8c2b53cac69c70ddb4febfa968ab14cafbd45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":banco:Bancoedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_021b8e53bfa3e252456338de98e8c2b53cac69c70ddb4febfa968ab14cafbd45->leave($__internal_021b8e53bfa3e252456338de98e8c2b53cac69c70ddb4febfa968ab14cafbd45_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3c84544452ca8bad811c6348db1260e5c119f194c2671ab5dfab85aa2863833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c84544452ca8bad811c6348db1260e5c119f194c2671ab5dfab85aa2863833->enter($__internal_a3c84544452ca8bad811c6348db1260e5c119f194c2671ab5dfab85aa2863833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Banco edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("banco_index");
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
        
        $__internal_a3c84544452ca8bad811c6348db1260e5c119f194c2671ab5dfab85aa2863833->leave($__internal_a3c84544452ca8bad811c6348db1260e5c119f194c2671ab5dfab85aa2863833_prof);

    }

    public function getTemplateName()
    {
        return ":banco:Bancoedit.html.twig";
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
    <h1>Banco edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('banco_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":banco:Bancoedit.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/banco/Bancoedit.html.twig");
    }
}
