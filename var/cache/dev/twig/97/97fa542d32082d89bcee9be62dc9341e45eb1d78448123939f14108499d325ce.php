<?php

/* role/new.html.twig */
class __TwigTemplate_4a2df5ef4a11b9f786d10bd535f4cd29f4f7f0c5a2e9de26efb74344ba9692ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "role/new.html.twig", 1);
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
        $__internal_3498fe8e3280729f83864418d5d58a1ebc3cc3250ec545b5f90dc1a9291ebe0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3498fe8e3280729f83864418d5d58a1ebc3cc3250ec545b5f90dc1a9291ebe0f->enter($__internal_3498fe8e3280729f83864418d5d58a1ebc3cc3250ec545b5f90dc1a9291ebe0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "role/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3498fe8e3280729f83864418d5d58a1ebc3cc3250ec545b5f90dc1a9291ebe0f->leave($__internal_3498fe8e3280729f83864418d5d58a1ebc3cc3250ec545b5f90dc1a9291ebe0f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f81fc1a9fd82ff5a755be9047edccf51869208d021a05175df7c3dadb080a8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f81fc1a9fd82ff5a755be9047edccf51869208d021a05175df7c3dadb080a8b->enter($__internal_7f81fc1a9fd82ff5a755be9047edccf51869208d021a05175df7c3dadb080a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7f81fc1a9fd82ff5a755be9047edccf51869208d021a05175df7c3dadb080a8b->leave($__internal_7f81fc1a9fd82ff5a755be9047edccf51869208d021a05175df7c3dadb080a8b_prof);

    }

    public function getTemplateName()
    {
        return "role/new.html.twig";
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
", "role/new.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\role\\new.html.twig");
    }
}
