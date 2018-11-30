<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_6d2043f46666236686f8a90c67573fde7befac3a898f7afe65475ba3a0e1ea70 extends Twig_Template
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
        $__internal_27c53e208418760a6e1bae31e4589648eae6c4fecca137707cc758b6a6bd4177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27c53e208418760a6e1bae31e4589648eae6c4fecca137707cc758b6a6bd4177->enter($__internal_27c53e208418760a6e1bae31e4589648eae6c4fecca137707cc758b6a6bd4177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_27c53e208418760a6e1bae31e4589648eae6c4fecca137707cc758b6a6bd4177->leave($__internal_27c53e208418760a6e1bae31e4589648eae6c4fecca137707cc758b6a6bd4177_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a33dee65b9ecef3e903ca778cf2e684c94b78c50d8677e8b61659ece62d94416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33dee65b9ecef3e903ca778cf2e684c94b78c50d8677e8b61659ece62d94416->enter($__internal_a33dee65b9ecef3e903ca778cf2e684c94b78c50d8677e8b61659ece62d94416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_a33dee65b9ecef3e903ca778cf2e684c94b78c50d8677e8b61659ece62d94416->leave($__internal_a33dee65b9ecef3e903ca778cf2e684c94b78c50d8677e8b61659ece62d94416_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f67eba0818b656c08d094e33e6b44558ba689c5a3e82bb2b407d2bd81934f224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f67eba0818b656c08d094e33e6b44558ba689c5a3e82bb2b407d2bd81934f224->enter($__internal_f67eba0818b656c08d094e33e6b44558ba689c5a3e82bb2b407d2bd81934f224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f67eba0818b656c08d094e33e6b44558ba689c5a3e82bb2b407d2bd81934f224->leave($__internal_f67eba0818b656c08d094e33e6b44558ba689c5a3e82bb2b407d2bd81934f224_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_89ea87d7073cb0279616586721fa4848b96ebcf0193e198c506ad93b46d1be0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ea87d7073cb0279616586721fa4848b96ebcf0193e198c506ad93b46d1be0a->enter($__internal_89ea87d7073cb0279616586721fa4848b96ebcf0193e198c506ad93b46d1be0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_89ea87d7073cb0279616586721fa4848b96ebcf0193e198c506ad93b46d1be0a->leave($__internal_89ea87d7073cb0279616586721fa4848b96ebcf0193e198c506ad93b46d1be0a_prof);

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
", "FOSUserBundle:Resetting:email.txt.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
