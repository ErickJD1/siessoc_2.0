<?php

/* :role:new.html.twig */
class __TwigTemplate_96b1b1fdd563da52e9ad96b555efe53bc39daba299335e310e8bdbbe1d9a8fc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":role:new.html.twig", 1);
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
        $__internal_c3aaf4544b9901da04b100f8d219361df94e9989f88db6f28b320fae921d7877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3aaf4544b9901da04b100f8d219361df94e9989f88db6f28b320fae921d7877->enter($__internal_c3aaf4544b9901da04b100f8d219361df94e9989f88db6f28b320fae921d7877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":role:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3aaf4544b9901da04b100f8d219361df94e9989f88db6f28b320fae921d7877->leave($__internal_c3aaf4544b9901da04b100f8d219361df94e9989f88db6f28b320fae921d7877_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_417778240ce571506a6cf01320a23f1246a4ca618c5e7f6fb37775615db78adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_417778240ce571506a6cf01320a23f1246a4ca618c5e7f6fb37775615db78adb->enter($__internal_417778240ce571506a6cf01320a23f1246a4ca618c5e7f6fb37775615db78adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Role creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_417778240ce571506a6cf01320a23f1246a4ca618c5e7f6fb37775615db78adb->leave($__internal_417778240ce571506a6cf01320a23f1246a4ca618c5e7f6fb37775615db78adb_prof);

    }

    public function getTemplateName()
    {
        return ":role:new.html.twig";
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
    <h1>Role creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('role_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":role:new.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/role/new.html.twig");
    }
}
