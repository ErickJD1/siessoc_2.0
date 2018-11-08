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
        $__internal_1f957722cbcec0dc3047ae2d890af9f567fa3e88bc290f343664b5c233bd9546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f957722cbcec0dc3047ae2d890af9f567fa3e88bc290f343664b5c233bd9546->enter($__internal_1f957722cbcec0dc3047ae2d890af9f567fa3e88bc290f343664b5c233bd9546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1f957722cbcec0dc3047ae2d890af9f567fa3e88bc290f343664b5c233bd9546->leave($__internal_1f957722cbcec0dc3047ae2d890af9f567fa3e88bc290f343664b5c233bd9546_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9961415cd5ecdfe61c73a016878da19bc7a656c00e1f388e3c844e67a993e4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9961415cd5ecdfe61c73a016878da19bc7a656c00e1f388e3c844e67a993e4a0->enter($__internal_9961415cd5ecdfe61c73a016878da19bc7a656c00e1f388e3c844e67a993e4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_9961415cd5ecdfe61c73a016878da19bc7a656c00e1f388e3c844e67a993e4a0->leave($__internal_9961415cd5ecdfe61c73a016878da19bc7a656c00e1f388e3c844e67a993e4a0_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_62407edf754098788a2014e17f46ae8726ef0ea864c4df558c928d48149fc835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62407edf754098788a2014e17f46ae8726ef0ea864c4df558c928d48149fc835->enter($__internal_62407edf754098788a2014e17f46ae8726ef0ea864c4df558c928d48149fc835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_62407edf754098788a2014e17f46ae8726ef0ea864c4df558c928d48149fc835->leave($__internal_62407edf754098788a2014e17f46ae8726ef0ea864c4df558c928d48149fc835_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_261c9a932a122cea77e89f887c20b4ec4c832730607a0672ce41859194985381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_261c9a932a122cea77e89f887c20b4ec4c832730607a0672ce41859194985381->enter($__internal_261c9a932a122cea77e89f887c20b4ec4c832730607a0672ce41859194985381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_261c9a932a122cea77e89f887c20b4ec4c832730607a0672ce41859194985381->leave($__internal_261c9a932a122cea77e89f887c20b4ec4c832730607a0672ce41859194985381_prof);

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
