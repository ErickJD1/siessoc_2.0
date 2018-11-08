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
        $__internal_e7133a7084497f508a54516b32f36f1300f43b1f8c90a2d6b52851c117a665b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7133a7084497f508a54516b32f36f1300f43b1f8c90a2d6b52851c117a665b9->enter($__internal_e7133a7084497f508a54516b32f36f1300f43b1f8c90a2d6b52851c117a665b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":banco:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7133a7084497f508a54516b32f36f1300f43b1f8c90a2d6b52851c117a665b9->leave($__internal_e7133a7084497f508a54516b32f36f1300f43b1f8c90a2d6b52851c117a665b9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_de039ad53d379c2dcf999252ed84daefda84d94e30965c095ad0065de70df253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de039ad53d379c2dcf999252ed84daefda84d94e30965c095ad0065de70df253->enter($__internal_de039ad53d379c2dcf999252ed84daefda84d94e30965c095ad0065de70df253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_de039ad53d379c2dcf999252ed84daefda84d94e30965c095ad0065de70df253->leave($__internal_de039ad53d379c2dcf999252ed84daefda84d94e30965c095ad0065de70df253_prof);

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
", ":banco:new.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/banco/new.html.twig");
    }
}
