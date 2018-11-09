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
        $__internal_64713acd703838ef48e48378506773160fd32181ae19ad5c86ee8c64b6fe1fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64713acd703838ef48e48378506773160fd32181ae19ad5c86ee8c64b6fe1fb4->enter($__internal_64713acd703838ef48e48378506773160fd32181ae19ad5c86ee8c64b6fe1fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_64713acd703838ef48e48378506773160fd32181ae19ad5c86ee8c64b6fe1fb4->leave($__internal_64713acd703838ef48e48378506773160fd32181ae19ad5c86ee8c64b6fe1fb4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ed330ba0a9b727df8eb9bb9349098176d2027cc97c6636efb20047ebcb691d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed330ba0a9b727df8eb9bb9349098176d2027cc97c6636efb20047ebcb691d54->enter($__internal_ed330ba0a9b727df8eb9bb9349098176d2027cc97c6636efb20047ebcb691d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_ed330ba0a9b727df8eb9bb9349098176d2027cc97c6636efb20047ebcb691d54->leave($__internal_ed330ba0a9b727df8eb9bb9349098176d2027cc97c6636efb20047ebcb691d54_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d2911d45360b9495a5ecce093445a45342149b02cdf1112ebfb37d24d9dc967a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2911d45360b9495a5ecce093445a45342149b02cdf1112ebfb37d24d9dc967a->enter($__internal_d2911d45360b9495a5ecce093445a45342149b02cdf1112ebfb37d24d9dc967a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d2911d45360b9495a5ecce093445a45342149b02cdf1112ebfb37d24d9dc967a->leave($__internal_d2911d45360b9495a5ecce093445a45342149b02cdf1112ebfb37d24d9dc967a_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_41929ed9de991f05fc22233b61b7eb4c768a3721aa8d30f54b1a2ed1d2b2fe4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41929ed9de991f05fc22233b61b7eb4c768a3721aa8d30f54b1a2ed1d2b2fe4a->enter($__internal_41929ed9de991f05fc22233b61b7eb4c768a3721aa8d30f54b1a2ed1d2b2fe4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_41929ed9de991f05fc22233b61b7eb4c768a3721aa8d30f54b1a2ed1d2b2fe4a->leave($__internal_41929ed9de991f05fc22233b61b7eb4c768a3721aa8d30f54b1a2ed1d2b2fe4a_prof);

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
", "FOSUserBundle:Registration:email.txt.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
