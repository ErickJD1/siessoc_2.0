<?php

/* :movimientoinventario:new.html.twig */
class __TwigTemplate_e5967d56156dcf6a11133fbc0393ab4d1497d64c396b45379a4175ffff2d85a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":movimientoinventario:new.html.twig", 1);
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
        $__internal_6930e00f747201cdd459bd5d16ba6366081c0b55b02d299612eb4f1a07e3ab25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6930e00f747201cdd459bd5d16ba6366081c0b55b02d299612eb4f1a07e3ab25->enter($__internal_6930e00f747201cdd459bd5d16ba6366081c0b55b02d299612eb4f1a07e3ab25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":movimientoinventario:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6930e00f747201cdd459bd5d16ba6366081c0b55b02d299612eb4f1a07e3ab25->leave($__internal_6930e00f747201cdd459bd5d16ba6366081c0b55b02d299612eb4f1a07e3ab25_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f858b291f4e63d42e02d7a7d1212e02c9e84bbf5f6978776cadea8296b6cc5da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f858b291f4e63d42e02d7a7d1212e02c9e84bbf5f6978776cadea8296b6cc5da->enter($__internal_f858b291f4e63d42e02d7a7d1212e02c9e84bbf5f6978776cadea8296b6cc5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Movimientoinventario creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movimientoinventario_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_f858b291f4e63d42e02d7a7d1212e02c9e84bbf5f6978776cadea8296b6cc5da->leave($__internal_f858b291f4e63d42e02d7a7d1212e02c9e84bbf5f6978776cadea8296b6cc5da_prof);

    }

    public function getTemplateName()
    {
        return ":movimientoinventario:new.html.twig";
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
    <h1>Movimientoinventario creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('movimientoinventario_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":movimientoinventario:new.html.twig", "/home/ubuntu/workspace/app/Resources/views/movimientoinventario/new.html.twig");
    }
}
