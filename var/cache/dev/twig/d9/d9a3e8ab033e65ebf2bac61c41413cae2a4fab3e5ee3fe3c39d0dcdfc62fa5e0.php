<?php

/* FOSUserBundle:Resetting:email.html.twig */
class __TwigTemplate_f1a195d181f32efbd7a81a565822e9698c2f25a872286c4e9928dea76d361b23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_html' => array($this, 'block_body_html'),
            'body_txt' => array($this, 'block_body_txt'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1c65dbd7cf81cf7b4491c88fe04a6f43b4779190f70e659abbfd0664e2aaf5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c65dbd7cf81cf7b4491c88fe04a6f43b4779190f70e659abbfd0664e2aaf5a->enter($__internal_c1c65dbd7cf81cf7b4491c88fe04a6f43b4779190f70e659abbfd0664e2aaf5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.html.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_html', $context, $blocks);
        // line 23
        $this->displayBlock('body_txt', $context, $blocks);
        
        $__internal_c1c65dbd7cf81cf7b4491c88fe04a6f43b4779190f70e659abbfd0664e2aaf5a->leave($__internal_c1c65dbd7cf81cf7b4491c88fe04a6f43b4779190f70e659abbfd0664e2aaf5a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9a7f83ffab6c98b20b033424c2b97368fe454389e57550883827c60849726d3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a7f83ffab6c98b20b033424c2b97368fe454389e57550883827c60849726d3f->enter($__internal_9a7f83ffab6c98b20b033424c2b97368fe454389e57550883827c60849726d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_9a7f83ffab6c98b20b033424c2b97368fe454389e57550883827c60849726d3f->leave($__internal_9a7f83ffab6c98b20b033424c2b97368fe454389e57550883827c60849726d3f_prof);

    }

    // line 8
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_eeee37f3c995c046c990300e23e85dd13f4ea78922f141c600af076487e86ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeee37f3c995c046c990300e23e85dd13f4ea78922f141c600af076487e86ea6->enter($__internal_eeee37f3c995c046c990300e23e85dd13f4ea78922f141c600af076487e86ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
<!DOCTYPE html>
 <html>
        <head>
        <title>Welcome to Symfony!</title>
        </head>
        <body>
    <h1 Style=\"color:red\">Hola Mundo</h1>
    </body>
</html>
";
        // line 21
        echo "
";
        
        $__internal_eeee37f3c995c046c990300e23e85dd13f4ea78922f141c600af076487e86ea6->leave($__internal_eeee37f3c995c046c990300e23e85dd13f4ea78922f141c600af076487e86ea6_prof);

    }

    // line 23
    public function block_body_txt($context, array $blocks = array())
    {
        $__internal_31f0ebbb29d630f9e75ee212966c7d4f6b0af82ced53222acf84ce5eb3c027ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f0ebbb29d630f9e75ee212966c7d4f6b0af82ced53222acf84ce5eb3c027ca->enter($__internal_31f0ebbb29d630f9e75ee212966c7d4f6b0af82ced53222acf84ce5eb3c027ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_txt"));

        // line 24
        echo "
";
        
        $__internal_31f0ebbb29d630f9e75ee212966c7d4f6b0af82ced53222acf84ce5eb3c027ca->leave($__internal_31f0ebbb29d630f9e75ee212966c7d4f6b0af82ced53222acf84ce5eb3c027ca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 24,  79 => 23,  71 => 21,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 23,  30 => 8,  27 => 7,  25 => 2,);
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

{% block body_html %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
<!DOCTYPE html>
 <html>
        <head>
        <title>Welcome to Symfony!</title>
        </head>
        <body>
    <h1 Style=\"color:red\">Hola Mundo</h1>
    </body>
</html>
{% endautoescape %}

{% endblock %}
{% block body_txt %}

{% endblock %}
", "FOSUserBundle:Resetting:email.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.html.twig");
    }
}
