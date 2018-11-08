<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_e1b839532624ebf4735ffbacf04d7f61b560e518415a80c3781732e6cf0fff6b extends Twig_Template
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
        $__internal_18a0717c0b3792114b8b39d4648a94ebaf44f374587708746d0a183f20adec83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a0717c0b3792114b8b39d4648a94ebaf44f374587708746d0a183f20adec83->enter($__internal_18a0717c0b3792114b8b39d4648a94ebaf44f374587708746d0a183f20adec83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_18a0717c0b3792114b8b39d4648a94ebaf44f374587708746d0a183f20adec83->leave($__internal_18a0717c0b3792114b8b39d4648a94ebaf44f374587708746d0a183f20adec83_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_406b5b5f903dbf237dc5cd36efa08b1e9b5d4d85f79fcf81020113133f037a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_406b5b5f903dbf237dc5cd36efa08b1e9b5d4d85f79fcf81020113133f037a71->enter($__internal_406b5b5f903dbf237dc5cd36efa08b1e9b5d4d85f79fcf81020113133f037a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_406b5b5f903dbf237dc5cd36efa08b1e9b5d4d85f79fcf81020113133f037a71->leave($__internal_406b5b5f903dbf237dc5cd36efa08b1e9b5d4d85f79fcf81020113133f037a71_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2cbe209968af071dd7ad909ca6e566881127c7998a90911ea02b39971c9d2153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cbe209968af071dd7ad909ca6e566881127c7998a90911ea02b39971c9d2153->enter($__internal_2cbe209968af071dd7ad909ca6e566881127c7998a90911ea02b39971c9d2153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2cbe209968af071dd7ad909ca6e566881127c7998a90911ea02b39971c9d2153->leave($__internal_2cbe209968af071dd7ad909ca6e566881127c7998a90911ea02b39971c9d2153_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_aaa480393c1b2fa4c94a23389a5f8e92997c786bc6870981975cb451ff593357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaa480393c1b2fa4c94a23389a5f8e92997c786bc6870981975cb451ff593357->enter($__internal_aaa480393c1b2fa4c94a23389a5f8e92997c786bc6870981975cb451ff593357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_aaa480393c1b2fa4c94a23389a5f8e92997c786bc6870981975cb451ff593357->leave($__internal_aaa480393c1b2fa4c94a23389a5f8e92997c786bc6870981975cb451ff593357_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
