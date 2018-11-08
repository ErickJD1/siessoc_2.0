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
        $__internal_cfb2c7c5dc372c225dfd1ddeaff100209a332a03dc30af995d896569bcf5f260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb2c7c5dc372c225dfd1ddeaff100209a332a03dc30af995d896569bcf5f260->enter($__internal_cfb2c7c5dc372c225dfd1ddeaff100209a332a03dc30af995d896569bcf5f260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_cfb2c7c5dc372c225dfd1ddeaff100209a332a03dc30af995d896569bcf5f260->leave($__internal_cfb2c7c5dc372c225dfd1ddeaff100209a332a03dc30af995d896569bcf5f260_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0a553df038dfadd15ac636448f10aab9eb78ff0c4a6c5f639bbe9e82c663fc78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a553df038dfadd15ac636448f10aab9eb78ff0c4a6c5f639bbe9e82c663fc78->enter($__internal_0a553df038dfadd15ac636448f10aab9eb78ff0c4a6c5f639bbe9e82c663fc78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_0a553df038dfadd15ac636448f10aab9eb78ff0c4a6c5f639bbe9e82c663fc78->leave($__internal_0a553df038dfadd15ac636448f10aab9eb78ff0c4a6c5f639bbe9e82c663fc78_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b3a347226f8a60e8eceadd493fe63977776b3b057d17663591ad6cc63a6f8a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a347226f8a60e8eceadd493fe63977776b3b057d17663591ad6cc63a6f8a60->enter($__internal_b3a347226f8a60e8eceadd493fe63977776b3b057d17663591ad6cc63a6f8a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b3a347226f8a60e8eceadd493fe63977776b3b057d17663591ad6cc63a6f8a60->leave($__internal_b3a347226f8a60e8eceadd493fe63977776b3b057d17663591ad6cc63a6f8a60_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c1cd5996787fb47f12c1773a2d5f5c3b71713c1c1f9866cf01a0d67f2c5f3cd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1cd5996787fb47f12c1773a2d5f5c3b71713c1c1f9866cf01a0d67f2c5f3cd6->enter($__internal_c1cd5996787fb47f12c1773a2d5f5c3b71713c1c1f9866cf01a0d67f2c5f3cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c1cd5996787fb47f12c1773a2d5f5c3b71713c1c1f9866cf01a0d67f2c5f3cd6->leave($__internal_c1cd5996787fb47f12c1773a2d5f5c3b71713c1c1f9866cf01a0d67f2c5f3cd6_prof);

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
", "FOSUserBundle:Registration:email.txt.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
