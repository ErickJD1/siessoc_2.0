<?php

/* bitacora/edit.html.twig */
class __TwigTemplate_6989778aaf43de1160996989bbc4f826438d17aec0e9a4bcaf7681c389d42205 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "bitacora/edit.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e8d9fcf4480cb80a84861107099caee1c4d7207c8803618bbc90bcfa9ef663a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e8d9fcf4480cb80a84861107099caee1c4d7207c8803618bbc90bcfa9ef663a->enter($__internal_6e8d9fcf4480cb80a84861107099caee1c4d7207c8803618bbc90bcfa9ef663a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bitacora/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e8d9fcf4480cb80a84861107099caee1c4d7207c8803618bbc90bcfa9ef663a->leave($__internal_6e8d9fcf4480cb80a84861107099caee1c4d7207c8803618bbc90bcfa9ef663a_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_d263ebb2406a7852f550cf452bc6e3a9d9b50eec0ed90f16ffec2c116b1e7793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d263ebb2406a7852f550cf452bc6e3a9d9b50eec0ed90f16ffec2c116b1e7793->enter($__internal_d263ebb2406a7852f550cf452bc6e3a9d9b50eec0ed90f16ffec2c116b1e7793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_d263ebb2406a7852f550cf452bc6e3a9d9b50eec0ed90f16ffec2c116b1e7793->leave($__internal_d263ebb2406a7852f550cf452bc6e3a9d9b50eec0ed90f16ffec2c116b1e7793_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_2554901d5f0560865ddbb5e9c73dc9a20421083f89de8c1a18912d0749135992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2554901d5f0560865ddbb5e9c73dc9a20421083f89de8c1a18912d0749135992->enter($__internal_2554901d5f0560865ddbb5e9c73dc9a20421083f89de8c1a18912d0749135992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Bitacora edit</h1>

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

            ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\" class=\"btn btn-delete btn-xs\">
                <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bitacora_index");
        echo "\" class=\"btn btn-info btn-xs\">Atrás</a>
            ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
";
        
        $__internal_2554901d5f0560865ddbb5e9c73dc9a20421083f89de8c1a18912d0749135992->leave($__internal_2554901d5f0560865ddbb5e9c73dc9a20421083f89de8c1a18912d0749135992_prof);

    }

    public function getTemplateName()
    {
        return "bitacora/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 14,  76 => 13,  71 => 11,  66 => 9,  61 => 7,  57 => 6,  53 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout/base-layout.html.twig\" %}
{% block page_content %}
{% block body %}
    <h1>Bitacora edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\" class=\"btn btn-delete btn-xs\">
                <a href=\"{{ path('bitacora_index') }}\" class=\"btn btn-info btn-xs\">Atrás</a>
            {{ form_end(delete_form) }}
{% endblock %}
{% endblock %}
", "bitacora/edit.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\bitacora\\edit.html.twig");
    }
}
