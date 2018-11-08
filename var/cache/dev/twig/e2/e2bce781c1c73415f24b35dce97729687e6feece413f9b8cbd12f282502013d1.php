<?php

/* banco/new.html.twig */
class __TwigTemplate_3ea50d701f3ad872d5f84113da6c3916a76f0dc599a3b0c37da52fb1fc88ac49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "banco/new.html.twig", 1);
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
        $__internal_2bbb0fa2b975d61817909dea5baf7e9864bc1ac401e92f7d85e0d7f2efffa063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bbb0fa2b975d61817909dea5baf7e9864bc1ac401e92f7d85e0d7f2efffa063->enter($__internal_2bbb0fa2b975d61817909dea5baf7e9864bc1ac401e92f7d85e0d7f2efffa063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "banco/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bbb0fa2b975d61817909dea5baf7e9864bc1ac401e92f7d85e0d7f2efffa063->leave($__internal_2bbb0fa2b975d61817909dea5baf7e9864bc1ac401e92f7d85e0d7f2efffa063_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6129e19c18b972acd51004f63f2b97153bc74d8ae1f5906a1d4623778cca024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6129e19c18b972acd51004f63f2b97153bc74d8ae1f5906a1d4623778cca024->enter($__internal_e6129e19c18b972acd51004f63f2b97153bc74d8ae1f5906a1d4623778cca024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e6129e19c18b972acd51004f63f2b97153bc74d8ae1f5906a1d4623778cca024->leave($__internal_e6129e19c18b972acd51004f63f2b97153bc74d8ae1f5906a1d4623778cca024_prof);

    }

    public function getTemplateName()
    {
        return "banco/new.html.twig";
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
", "banco/new.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\banco\\new.html.twig");
    }
}
