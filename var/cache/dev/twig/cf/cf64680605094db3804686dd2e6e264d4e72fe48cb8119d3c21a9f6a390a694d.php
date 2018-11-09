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
        $__internal_4451ae344c999b034f3cf98ad3013513f915c2a31f9daf3cfd30a9095503ac7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4451ae344c999b034f3cf98ad3013513f915c2a31f9daf3cfd30a9095503ac7e->enter($__internal_4451ae344c999b034f3cf98ad3013513f915c2a31f9daf3cfd30a9095503ac7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4451ae344c999b034f3cf98ad3013513f915c2a31f9daf3cfd30a9095503ac7e->leave($__internal_4451ae344c999b034f3cf98ad3013513f915c2a31f9daf3cfd30a9095503ac7e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b6a09b2ee5e23ae0ef8502fa8176d0c6b18be7223d06dd8c3880e6184dff78cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a09b2ee5e23ae0ef8502fa8176d0c6b18be7223d06dd8c3880e6184dff78cf->enter($__internal_b6a09b2ee5e23ae0ef8502fa8176d0c6b18be7223d06dd8c3880e6184dff78cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_b6a09b2ee5e23ae0ef8502fa8176d0c6b18be7223d06dd8c3880e6184dff78cf->leave($__internal_b6a09b2ee5e23ae0ef8502fa8176d0c6b18be7223d06dd8c3880e6184dff78cf_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_156e2222e03420fb5bbac74b7d1816860b6374f38936d8aba2272c81bb33ef03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156e2222e03420fb5bbac74b7d1816860b6374f38936d8aba2272c81bb33ef03->enter($__internal_156e2222e03420fb5bbac74b7d1816860b6374f38936d8aba2272c81bb33ef03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_156e2222e03420fb5bbac74b7d1816860b6374f38936d8aba2272c81bb33ef03->leave($__internal_156e2222e03420fb5bbac74b7d1816860b6374f38936d8aba2272c81bb33ef03_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5685b2d6ccbfff484efa3af05c1e2d8e4100c8df0474021cd83e31d4b83e143e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5685b2d6ccbfff484efa3af05c1e2d8e4100c8df0474021cd83e31d4b83e143e->enter($__internal_5685b2d6ccbfff484efa3af05c1e2d8e4100c8df0474021cd83e31d4b83e143e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5685b2d6ccbfff484efa3af05c1e2d8e4100c8df0474021cd83e31d4b83e143e->leave($__internal_5685b2d6ccbfff484efa3af05c1e2d8e4100c8df0474021cd83e31d4b83e143e_prof);

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
