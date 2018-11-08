<?php

/* :bitacora:edit.html.twig */
class __TwigTemplate_1b4e4da2f8337d08cec85908b5dbc6a5eb91caced96624e124036fd331b40ea2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":bitacora:edit.html.twig", 1);
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
        $__internal_62f9df7a47f57668072842c1d07c4ff21538bfa5cd859ca638b3daee185740f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f9df7a47f57668072842c1d07c4ff21538bfa5cd859ca638b3daee185740f9->enter($__internal_62f9df7a47f57668072842c1d07c4ff21538bfa5cd859ca638b3daee185740f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":bitacora:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62f9df7a47f57668072842c1d07c4ff21538bfa5cd859ca638b3daee185740f9->leave($__internal_62f9df7a47f57668072842c1d07c4ff21538bfa5cd859ca638b3daee185740f9_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_f6969682dd80c06e859504e50c193c6b07e2b5fd588aab610a13855b7f166abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6969682dd80c06e859504e50c193c6b07e2b5fd588aab610a13855b7f166abc->enter($__internal_f6969682dd80c06e859504e50c193c6b07e2b5fd588aab610a13855b7f166abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_f6969682dd80c06e859504e50c193c6b07e2b5fd588aab610a13855b7f166abc->leave($__internal_f6969682dd80c06e859504e50c193c6b07e2b5fd588aab610a13855b7f166abc_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_7f3c36db971c151c3300222f9df8ab2416d97425ae6799b91dd06c22f0ac6d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f3c36db971c151c3300222f9df8ab2416d97425ae6799b91dd06c22f0ac6d34->enter($__internal_7f3c36db971c151c3300222f9df8ab2416d97425ae6799b91dd06c22f0ac6d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7f3c36db971c151c3300222f9df8ab2416d97425ae6799b91dd06c22f0ac6d34->leave($__internal_7f3c36db971c151c3300222f9df8ab2416d97425ae6799b91dd06c22f0ac6d34_prof);

    }

    public function getTemplateName()
    {
        return ":bitacora:edit.html.twig";
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
", ":bitacora:edit.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/bitacora/edit.html.twig");
    }
}
