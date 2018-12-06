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
        $__internal_31f8081ee645eed70ab2209eaa7ef5398acf010dc10fc119f06ff2d0895f55f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f8081ee645eed70ab2209eaa7ef5398acf010dc10fc119f06ff2d0895f55f6->enter($__internal_31f8081ee645eed70ab2209eaa7ef5398acf010dc10fc119f06ff2d0895f55f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_31f8081ee645eed70ab2209eaa7ef5398acf010dc10fc119f06ff2d0895f55f6->leave($__internal_31f8081ee645eed70ab2209eaa7ef5398acf010dc10fc119f06ff2d0895f55f6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fdab2497a65d503f51b8e903a62d49263cd819fa2357a9c6f06e8c27a45f6ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdab2497a65d503f51b8e903a62d49263cd819fa2357a9c6f06e8c27a45f6ff0->enter($__internal_fdab2497a65d503f51b8e903a62d49263cd819fa2357a9c6f06e8c27a45f6ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_fdab2497a65d503f51b8e903a62d49263cd819fa2357a9c6f06e8c27a45f6ff0->leave($__internal_fdab2497a65d503f51b8e903a62d49263cd819fa2357a9c6f06e8c27a45f6ff0_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_86163127a6714811467cf947ae93369a24d69db8adb69fc52bbdd6aae9a0bfc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86163127a6714811467cf947ae93369a24d69db8adb69fc52bbdd6aae9a0bfc9->enter($__internal_86163127a6714811467cf947ae93369a24d69db8adb69fc52bbdd6aae9a0bfc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_86163127a6714811467cf947ae93369a24d69db8adb69fc52bbdd6aae9a0bfc9->leave($__internal_86163127a6714811467cf947ae93369a24d69db8adb69fc52bbdd6aae9a0bfc9_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f6bdeaa9286cb9a764093c6fc55f2522b00230d782b410d8c8872d4b78e3eb76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6bdeaa9286cb9a764093c6fc55f2522b00230d782b410d8c8872d4b78e3eb76->enter($__internal_f6bdeaa9286cb9a764093c6fc55f2522b00230d782b410d8c8872d4b78e3eb76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f6bdeaa9286cb9a764093c6fc55f2522b00230d782b410d8c8872d4b78e3eb76->leave($__internal_f6bdeaa9286cb9a764093c6fc55f2522b00230d782b410d8c8872d4b78e3eb76_prof);

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
", "@FOSUser/Registration/email.txt.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
