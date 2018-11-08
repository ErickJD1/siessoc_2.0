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
        $__internal_b2f41a8451995861493cb84c341a70c1768face5d43c1474d0233159db3ed5d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2f41a8451995861493cb84c341a70c1768face5d43c1474d0233159db3ed5d9->enter($__internal_b2f41a8451995861493cb84c341a70c1768face5d43c1474d0233159db3ed5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b2f41a8451995861493cb84c341a70c1768face5d43c1474d0233159db3ed5d9->leave($__internal_b2f41a8451995861493cb84c341a70c1768face5d43c1474d0233159db3ed5d9_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5f6ee2bb09ef78fb316e6377d6c78f58839391f20634248ff4a21b00517c9d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f6ee2bb09ef78fb316e6377d6c78f58839391f20634248ff4a21b00517c9d6d->enter($__internal_5f6ee2bb09ef78fb316e6377d6c78f58839391f20634248ff4a21b00517c9d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_5f6ee2bb09ef78fb316e6377d6c78f58839391f20634248ff4a21b00517c9d6d->leave($__internal_5f6ee2bb09ef78fb316e6377d6c78f58839391f20634248ff4a21b00517c9d6d_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c6087dc244e5d5dbdd03f303c13a29bcd7232ceef9453649945b39c6f0fa6702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6087dc244e5d5dbdd03f303c13a29bcd7232ceef9453649945b39c6f0fa6702->enter($__internal_c6087dc244e5d5dbdd03f303c13a29bcd7232ceef9453649945b39c6f0fa6702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c6087dc244e5d5dbdd03f303c13a29bcd7232ceef9453649945b39c6f0fa6702->leave($__internal_c6087dc244e5d5dbdd03f303c13a29bcd7232ceef9453649945b39c6f0fa6702_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3777e1f625ba46edaf42f4f0b1ec920b8ec96e6be24bceda47a7507975d40d0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3777e1f625ba46edaf42f4f0b1ec920b8ec96e6be24bceda47a7507975d40d0a->enter($__internal_3777e1f625ba46edaf42f4f0b1ec920b8ec96e6be24bceda47a7507975d40d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3777e1f625ba46edaf42f4f0b1ec920b8ec96e6be24bceda47a7507975d40d0a->leave($__internal_3777e1f625ba46edaf42f4f0b1ec920b8ec96e6be24bceda47a7507975d40d0a_prof);

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
