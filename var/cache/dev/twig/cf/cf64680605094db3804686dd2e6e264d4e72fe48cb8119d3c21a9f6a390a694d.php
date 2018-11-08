<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_6ba9aac5ec6a83998b8704aa4170587a118152751c4122a241e0f7d50b7a07fa extends Twig_Template
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
        $__internal_bd6ae1a0355ed6c771f86ed4cabafac0123a3788db84661b7b9d28a1c9d61c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6ae1a0355ed6c771f86ed4cabafac0123a3788db84661b7b9d28a1c9d61c0b->enter($__internal_bd6ae1a0355ed6c771f86ed4cabafac0123a3788db84661b7b9d28a1c9d61c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_bd6ae1a0355ed6c771f86ed4cabafac0123a3788db84661b7b9d28a1c9d61c0b->leave($__internal_bd6ae1a0355ed6c771f86ed4cabafac0123a3788db84661b7b9d28a1c9d61c0b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d54b96998c8ac75a7399f2f7a823891565ceab580ef046444813481543970cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d54b96998c8ac75a7399f2f7a823891565ceab580ef046444813481543970cef->enter($__internal_d54b96998c8ac75a7399f2f7a823891565ceab580ef046444813481543970cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_d54b96998c8ac75a7399f2f7a823891565ceab580ef046444813481543970cef->leave($__internal_d54b96998c8ac75a7399f2f7a823891565ceab580ef046444813481543970cef_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cdf98be11ea6264081f286f4805d2328db2f5f95a170839f4bc2889cf8a9f35e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf98be11ea6264081f286f4805d2328db2f5f95a170839f4bc2889cf8a9f35e->enter($__internal_cdf98be11ea6264081f286f4805d2328db2f5f95a170839f4bc2889cf8a9f35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cdf98be11ea6264081f286f4805d2328db2f5f95a170839f4bc2889cf8a9f35e->leave($__internal_cdf98be11ea6264081f286f4805d2328db2f5f95a170839f4bc2889cf8a9f35e_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_118e3ced19154bd6c699b1a89d41c7b9fffea4af9022be6cbdc63bc67f1e55de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_118e3ced19154bd6c699b1a89d41c7b9fffea4af9022be6cbdc63bc67f1e55de->enter($__internal_118e3ced19154bd6c699b1a89d41c7b9fffea4af9022be6cbdc63bc67f1e55de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_118e3ced19154bd6c699b1a89d41c7b9fffea4af9022be6cbdc63bc67f1e55de->leave($__internal_118e3ced19154bd6c699b1a89d41c7b9fffea4af9022be6cbdc63bc67f1e55de_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
