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
        $__internal_adcdca8eb19304e9a7fbc29e5ae2a604190a833cc11868c6569b6fe1db95c03b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adcdca8eb19304e9a7fbc29e5ae2a604190a833cc11868c6569b6fe1db95c03b->enter($__internal_adcdca8eb19304e9a7fbc29e5ae2a604190a833cc11868c6569b6fe1db95c03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_adcdca8eb19304e9a7fbc29e5ae2a604190a833cc11868c6569b6fe1db95c03b->leave($__internal_adcdca8eb19304e9a7fbc29e5ae2a604190a833cc11868c6569b6fe1db95c03b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_85b1297c642522dbf5c1f7cc380f8aa17921f6931a241f53187c65121c421416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b1297c642522dbf5c1f7cc380f8aa17921f6931a241f53187c65121c421416->enter($__internal_85b1297c642522dbf5c1f7cc380f8aa17921f6931a241f53187c65121c421416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_85b1297c642522dbf5c1f7cc380f8aa17921f6931a241f53187c65121c421416->leave($__internal_85b1297c642522dbf5c1f7cc380f8aa17921f6931a241f53187c65121c421416_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_682219badb7744261bba5b3d76442c75257d482ef1b6676a631cb64c90657e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_682219badb7744261bba5b3d76442c75257d482ef1b6676a631cb64c90657e9b->enter($__internal_682219badb7744261bba5b3d76442c75257d482ef1b6676a631cb64c90657e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_682219badb7744261bba5b3d76442c75257d482ef1b6676a631cb64c90657e9b->leave($__internal_682219badb7744261bba5b3d76442c75257d482ef1b6676a631cb64c90657e9b_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_93e787683061bbacd93ad82993ba07cd8abe92ae68bc167dcd65e336140a14d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93e787683061bbacd93ad82993ba07cd8abe92ae68bc167dcd65e336140a14d8->enter($__internal_93e787683061bbacd93ad82993ba07cd8abe92ae68bc167dcd65e336140a14d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_93e787683061bbacd93ad82993ba07cd8abe92ae68bc167dcd65e336140a14d8->leave($__internal_93e787683061bbacd93ad82993ba07cd8abe92ae68bc167dcd65e336140a14d8_prof);

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
