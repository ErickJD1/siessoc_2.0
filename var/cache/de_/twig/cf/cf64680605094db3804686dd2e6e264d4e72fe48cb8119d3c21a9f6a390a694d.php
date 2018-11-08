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
        $__internal_7891519a2a01d20be9dd55bc6db936ead6a1f1dfb865b507708c7cd5fe6126e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7891519a2a01d20be9dd55bc6db936ead6a1f1dfb865b507708c7cd5fe6126e9->enter($__internal_7891519a2a01d20be9dd55bc6db936ead6a1f1dfb865b507708c7cd5fe6126e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7891519a2a01d20be9dd55bc6db936ead6a1f1dfb865b507708c7cd5fe6126e9->leave($__internal_7891519a2a01d20be9dd55bc6db936ead6a1f1dfb865b507708c7cd5fe6126e9_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d9891d94dc6a8adb05dad8db2adb9d692326c00edab8cf11a6d6f451f49958c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9891d94dc6a8adb05dad8db2adb9d692326c00edab8cf11a6d6f451f49958c6->enter($__internal_d9891d94dc6a8adb05dad8db2adb9d692326c00edab8cf11a6d6f451f49958c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_d9891d94dc6a8adb05dad8db2adb9d692326c00edab8cf11a6d6f451f49958c6->leave($__internal_d9891d94dc6a8adb05dad8db2adb9d692326c00edab8cf11a6d6f451f49958c6_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c9e8a2f3c6148e68e90ae3d8517730f8e4a47420bbd435dc5b04c3996f29d6fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e8a2f3c6148e68e90ae3d8517730f8e4a47420bbd435dc5b04c3996f29d6fe->enter($__internal_c9e8a2f3c6148e68e90ae3d8517730f8e4a47420bbd435dc5b04c3996f29d6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c9e8a2f3c6148e68e90ae3d8517730f8e4a47420bbd435dc5b04c3996f29d6fe->leave($__internal_c9e8a2f3c6148e68e90ae3d8517730f8e4a47420bbd435dc5b04c3996f29d6fe_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5737dcdec8c726f4ca00df88284d6305a95d219d86283b91b5bca25d19a7242b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5737dcdec8c726f4ca00df88284d6305a95d219d86283b91b5bca25d19a7242b->enter($__internal_5737dcdec8c726f4ca00df88284d6305a95d219d86283b91b5bca25d19a7242b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5737dcdec8c726f4ca00df88284d6305a95d219d86283b91b5bca25d19a7242b->leave($__internal_5737dcdec8c726f4ca00df88284d6305a95d219d86283b91b5bca25d19a7242b_prof);

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
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
