<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_8653095e355a2b046b4d6d73c5aaa52fbc3fae1a4ce3cbc437a5d75cecba8246 extends Twig_Template
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
        $__internal_c7205cccbfae7b199e2857b86d18c8a0ade03405fe02cb0c4c813355e82992ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7205cccbfae7b199e2857b86d18c8a0ade03405fe02cb0c4c813355e82992ea->enter($__internal_c7205cccbfae7b199e2857b86d18c8a0ade03405fe02cb0c4c813355e82992ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c7205cccbfae7b199e2857b86d18c8a0ade03405fe02cb0c4c813355e82992ea->leave($__internal_c7205cccbfae7b199e2857b86d18c8a0ade03405fe02cb0c4c813355e82992ea_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a0c5b1ad409941c07395907c1296f0bbbcb556bf75ec8a911c9366a6929f56e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0c5b1ad409941c07395907c1296f0bbbcb556bf75ec8a911c9366a6929f56e2->enter($__internal_a0c5b1ad409941c07395907c1296f0bbbcb556bf75ec8a911c9366a6929f56e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_a0c5b1ad409941c07395907c1296f0bbbcb556bf75ec8a911c9366a6929f56e2->leave($__internal_a0c5b1ad409941c07395907c1296f0bbbcb556bf75ec8a911c9366a6929f56e2_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0ba5e0375910e0430da19b2688ad7f5b04abfdccb9e578ee68dc485d5f791018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ba5e0375910e0430da19b2688ad7f5b04abfdccb9e578ee68dc485d5f791018->enter($__internal_0ba5e0375910e0430da19b2688ad7f5b04abfdccb9e578ee68dc485d5f791018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0ba5e0375910e0430da19b2688ad7f5b04abfdccb9e578ee68dc485d5f791018->leave($__internal_0ba5e0375910e0430da19b2688ad7f5b04abfdccb9e578ee68dc485d5f791018_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1699dfeb6026440be377f914242b82340fff69f208fa7b02282f5082f09e09b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1699dfeb6026440be377f914242b82340fff69f208fa7b02282f5082f09e09b7->enter($__internal_1699dfeb6026440be377f914242b82340fff69f208fa7b02282f5082f09e09b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1699dfeb6026440be377f914242b82340fff69f208fa7b02282f5082f09e09b7->leave($__internal_1699dfeb6026440be377f914242b82340fff69f208fa7b02282f5082f09e09b7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
