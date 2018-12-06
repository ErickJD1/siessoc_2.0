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
        $__internal_d29ed8b0974dbb98c8379706075193ae747b7c287b849beb2e38210405166694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d29ed8b0974dbb98c8379706075193ae747b7c287b849beb2e38210405166694->enter($__internal_d29ed8b0974dbb98c8379706075193ae747b7c287b849beb2e38210405166694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d29ed8b0974dbb98c8379706075193ae747b7c287b849beb2e38210405166694->leave($__internal_d29ed8b0974dbb98c8379706075193ae747b7c287b849beb2e38210405166694_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6b666f08f38e402f013e5f59102bd596704703c59c21e4e8e6e9308d158c84dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b666f08f38e402f013e5f59102bd596704703c59c21e4e8e6e9308d158c84dc->enter($__internal_6b666f08f38e402f013e5f59102bd596704703c59c21e4e8e6e9308d158c84dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_6b666f08f38e402f013e5f59102bd596704703c59c21e4e8e6e9308d158c84dc->leave($__internal_6b666f08f38e402f013e5f59102bd596704703c59c21e4e8e6e9308d158c84dc_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_00a30d6c72b13753d1206a7041ad07aba703f1beab229e782e34096356f01a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a30d6c72b13753d1206a7041ad07aba703f1beab229e782e34096356f01a39->enter($__internal_00a30d6c72b13753d1206a7041ad07aba703f1beab229e782e34096356f01a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_00a30d6c72b13753d1206a7041ad07aba703f1beab229e782e34096356f01a39->leave($__internal_00a30d6c72b13753d1206a7041ad07aba703f1beab229e782e34096356f01a39_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_34ddc0d95a6b1321c8b4a9ac70f625080bde93044217094df75a7ccee67241f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34ddc0d95a6b1321c8b4a9ac70f625080bde93044217094df75a7ccee67241f2->enter($__internal_34ddc0d95a6b1321c8b4a9ac70f625080bde93044217094df75a7ccee67241f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_34ddc0d95a6b1321c8b4a9ac70f625080bde93044217094df75a7ccee67241f2->leave($__internal_34ddc0d95a6b1321c8b4a9ac70f625080bde93044217094df75a7ccee67241f2_prof);

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
