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
        $__internal_1cdd2c63f1a452c9fe665cc4e6cadbca935b8005fcde2b8d1378d2518086f1fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cdd2c63f1a452c9fe665cc4e6cadbca935b8005fcde2b8d1378d2518086f1fd->enter($__internal_1cdd2c63f1a452c9fe665cc4e6cadbca935b8005fcde2b8d1378d2518086f1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1cdd2c63f1a452c9fe665cc4e6cadbca935b8005fcde2b8d1378d2518086f1fd->leave($__internal_1cdd2c63f1a452c9fe665cc4e6cadbca935b8005fcde2b8d1378d2518086f1fd_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_eea906b971d42a68696aeaedbfc01792020ed86e2fb09254058c98155b2b2bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea906b971d42a68696aeaedbfc01792020ed86e2fb09254058c98155b2b2bfb->enter($__internal_eea906b971d42a68696aeaedbfc01792020ed86e2fb09254058c98155b2b2bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_eea906b971d42a68696aeaedbfc01792020ed86e2fb09254058c98155b2b2bfb->leave($__internal_eea906b971d42a68696aeaedbfc01792020ed86e2fb09254058c98155b2b2bfb_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a6b4ba4d286d35ba4f35d4134a86d89ef13c204476f05bab436316baee3fe3b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b4ba4d286d35ba4f35d4134a86d89ef13c204476f05bab436316baee3fe3b8->enter($__internal_a6b4ba4d286d35ba4f35d4134a86d89ef13c204476f05bab436316baee3fe3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a6b4ba4d286d35ba4f35d4134a86d89ef13c204476f05bab436316baee3fe3b8->leave($__internal_a6b4ba4d286d35ba4f35d4134a86d89ef13c204476f05bab436316baee3fe3b8_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e013a2c4525a49d6b94ac09b87d55e7dbfc55dd7278369a9e73f98f357f24d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e013a2c4525a49d6b94ac09b87d55e7dbfc55dd7278369a9e73f98f357f24d27->enter($__internal_e013a2c4525a49d6b94ac09b87d55e7dbfc55dd7278369a9e73f98f357f24d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e013a2c4525a49d6b94ac09b87d55e7dbfc55dd7278369a9e73f98f357f24d27->leave($__internal_e013a2c4525a49d6b94ac09b87d55e7dbfc55dd7278369a9e73f98f357f24d27_prof);

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
