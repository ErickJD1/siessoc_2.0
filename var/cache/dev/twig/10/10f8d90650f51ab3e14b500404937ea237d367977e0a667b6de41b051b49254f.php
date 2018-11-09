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
        $__internal_c26996707db39b95541ca18f353b4cfba8640ce6433245e9df4280461939c05a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c26996707db39b95541ca18f353b4cfba8640ce6433245e9df4280461939c05a->enter($__internal_c26996707db39b95541ca18f353b4cfba8640ce6433245e9df4280461939c05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c26996707db39b95541ca18f353b4cfba8640ce6433245e9df4280461939c05a->leave($__internal_c26996707db39b95541ca18f353b4cfba8640ce6433245e9df4280461939c05a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_eb16a08ae8d11c93db555689aef9493c6a671b5f85b3146e23f8db1b80be9501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb16a08ae8d11c93db555689aef9493c6a671b5f85b3146e23f8db1b80be9501->enter($__internal_eb16a08ae8d11c93db555689aef9493c6a671b5f85b3146e23f8db1b80be9501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_eb16a08ae8d11c93db555689aef9493c6a671b5f85b3146e23f8db1b80be9501->leave($__internal_eb16a08ae8d11c93db555689aef9493c6a671b5f85b3146e23f8db1b80be9501_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_93cbfd2187864b2a22c9de4e12ea59f2e9f80c1cda9191a79dac230ef72bb750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93cbfd2187864b2a22c9de4e12ea59f2e9f80c1cda9191a79dac230ef72bb750->enter($__internal_93cbfd2187864b2a22c9de4e12ea59f2e9f80c1cda9191a79dac230ef72bb750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_93cbfd2187864b2a22c9de4e12ea59f2e9f80c1cda9191a79dac230ef72bb750->leave($__internal_93cbfd2187864b2a22c9de4e12ea59f2e9f80c1cda9191a79dac230ef72bb750_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c156d3fc11129509e20f343b7dcfe6dc4b9100a5311061045edbdcabd7c90ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c156d3fc11129509e20f343b7dcfe6dc4b9100a5311061045edbdcabd7c90ea5->enter($__internal_c156d3fc11129509e20f343b7dcfe6dc4b9100a5311061045edbdcabd7c90ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c156d3fc11129509e20f343b7dcfe6dc4b9100a5311061045edbdcabd7c90ea5->leave($__internal_c156d3fc11129509e20f343b7dcfe6dc4b9100a5311061045edbdcabd7c90ea5_prof);

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
", "@FOSUser/Resetting/email.txt.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
