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
        $__internal_130c50c2ff8d89e7c936b62695eda94ee1a6f7c9eac79cd3cc9f72603de1abd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_130c50c2ff8d89e7c936b62695eda94ee1a6f7c9eac79cd3cc9f72603de1abd1->enter($__internal_130c50c2ff8d89e7c936b62695eda94ee1a6f7c9eac79cd3cc9f72603de1abd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_130c50c2ff8d89e7c936b62695eda94ee1a6f7c9eac79cd3cc9f72603de1abd1->leave($__internal_130c50c2ff8d89e7c936b62695eda94ee1a6f7c9eac79cd3cc9f72603de1abd1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9cff76a2410b8ccfb9b6187c07d9a34cad79ec62453905fae67d52714415d59f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cff76a2410b8ccfb9b6187c07d9a34cad79ec62453905fae67d52714415d59f->enter($__internal_9cff76a2410b8ccfb9b6187c07d9a34cad79ec62453905fae67d52714415d59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_9cff76a2410b8ccfb9b6187c07d9a34cad79ec62453905fae67d52714415d59f->leave($__internal_9cff76a2410b8ccfb9b6187c07d9a34cad79ec62453905fae67d52714415d59f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a191bf2854e4bf3d99a10d06b66e3dae2573d3bd31d9707e776d7401b313311f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a191bf2854e4bf3d99a10d06b66e3dae2573d3bd31d9707e776d7401b313311f->enter($__internal_a191bf2854e4bf3d99a10d06b66e3dae2573d3bd31d9707e776d7401b313311f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a191bf2854e4bf3d99a10d06b66e3dae2573d3bd31d9707e776d7401b313311f->leave($__internal_a191bf2854e4bf3d99a10d06b66e3dae2573d3bd31d9707e776d7401b313311f_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a50e00b822538fe94e8f61fbfae867fa82ec613b689ea0233b1f79eb1a5fb26a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a50e00b822538fe94e8f61fbfae867fa82ec613b689ea0233b1f79eb1a5fb26a->enter($__internal_a50e00b822538fe94e8f61fbfae867fa82ec613b689ea0233b1f79eb1a5fb26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a50e00b822538fe94e8f61fbfae867fa82ec613b689ea0233b1f79eb1a5fb26a->leave($__internal_a50e00b822538fe94e8f61fbfae867fa82ec613b689ea0233b1f79eb1a5fb26a_prof);

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
