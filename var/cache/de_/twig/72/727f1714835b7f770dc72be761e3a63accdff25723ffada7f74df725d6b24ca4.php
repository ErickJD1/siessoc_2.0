<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_af901365e46c4819c65427f04a4543e3f556fc4d8f866038bcd6ae411c5a1d98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_947f2dea08816973c0f6049bbc180ceba0b0667bbb9d054c84b0bdd82ee08c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_947f2dea08816973c0f6049bbc180ceba0b0667bbb9d054c84b0bdd82ee08c85->enter($__internal_947f2dea08816973c0f6049bbc180ceba0b0667bbb9d054c84b0bdd82ee08c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_947f2dea08816973c0f6049bbc180ceba0b0667bbb9d054c84b0bdd82ee08c85->leave($__internal_947f2dea08816973c0f6049bbc180ceba0b0667bbb9d054c84b0bdd82ee08c85_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c73fb90e5a32673d38b67d35ee528e8f86a64e4dcfaf36014ba459521e2bf5c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c73fb90e5a32673d38b67d35ee528e8f86a64e4dcfaf36014ba459521e2bf5c6->enter($__internal_c73fb90e5a32673d38b67d35ee528e8f86a64e4dcfaf36014ba459521e2bf5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_c73fb90e5a32673d38b67d35ee528e8f86a64e4dcfaf36014ba459521e2bf5c6->leave($__internal_c73fb90e5a32673d38b67d35ee528e8f86a64e4dcfaf36014ba459521e2bf5c6_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_484802dcec8b32d0925dd4b40f380f13d42d5da5fc98214ea09cf213be5e44ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_484802dcec8b32d0925dd4b40f380f13d42d5da5fc98214ea09cf213be5e44ee->enter($__internal_484802dcec8b32d0925dd4b40f380f13d42d5da5fc98214ea09cf213be5e44ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_484802dcec8b32d0925dd4b40f380f13d42d5da5fc98214ea09cf213be5e44ee->leave($__internal_484802dcec8b32d0925dd4b40f380f13d42d5da5fc98214ea09cf213be5e44ee_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7c0dd696219b43950004df2f4cae639b64ce86ca03b2291425eead57d0b1d59e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c0dd696219b43950004df2f4cae639b64ce86ca03b2291425eead57d0b1d59e->enter($__internal_7c0dd696219b43950004df2f4cae639b64ce86ca03b2291425eead57d0b1d59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7c0dd696219b43950004df2f4cae639b64ce86ca03b2291425eead57d0b1d59e->leave($__internal_7c0dd696219b43950004df2f4cae639b64ce86ca03b2291425eead57d0b1d59e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
