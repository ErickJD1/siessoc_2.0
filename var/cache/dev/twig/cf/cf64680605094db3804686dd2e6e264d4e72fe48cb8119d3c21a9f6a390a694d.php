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
        $__internal_cc839deedbbf0324f1952ccc6e633bfb3f8741b6f4cd0875285898534afa0907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc839deedbbf0324f1952ccc6e633bfb3f8741b6f4cd0875285898534afa0907->enter($__internal_cc839deedbbf0324f1952ccc6e633bfb3f8741b6f4cd0875285898534afa0907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_cc839deedbbf0324f1952ccc6e633bfb3f8741b6f4cd0875285898534afa0907->leave($__internal_cc839deedbbf0324f1952ccc6e633bfb3f8741b6f4cd0875285898534afa0907_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1dbff9646f5d14031b5672a7870e8f9f09e29e8515c7f8fd16dc337ad6a37e1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dbff9646f5d14031b5672a7870e8f9f09e29e8515c7f8fd16dc337ad6a37e1c->enter($__internal_1dbff9646f5d14031b5672a7870e8f9f09e29e8515c7f8fd16dc337ad6a37e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_1dbff9646f5d14031b5672a7870e8f9f09e29e8515c7f8fd16dc337ad6a37e1c->leave($__internal_1dbff9646f5d14031b5672a7870e8f9f09e29e8515c7f8fd16dc337ad6a37e1c_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_47aa55391911566876c109063f0f9c7598628b81c19d8f083ba347fb299d6cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47aa55391911566876c109063f0f9c7598628b81c19d8f083ba347fb299d6cf3->enter($__internal_47aa55391911566876c109063f0f9c7598628b81c19d8f083ba347fb299d6cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_47aa55391911566876c109063f0f9c7598628b81c19d8f083ba347fb299d6cf3->leave($__internal_47aa55391911566876c109063f0f9c7598628b81c19d8f083ba347fb299d6cf3_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d2414a850ff989ddd08e372c90adefa7b385b409b6c0b2593bb81e3d6cef7a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2414a850ff989ddd08e372c90adefa7b385b409b6c0b2593bb81e3d6cef7a13->enter($__internal_d2414a850ff989ddd08e372c90adefa7b385b409b6c0b2593bb81e3d6cef7a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d2414a850ff989ddd08e372c90adefa7b385b409b6c0b2593bb81e3d6cef7a13->leave($__internal_d2414a850ff989ddd08e372c90adefa7b385b409b6c0b2593bb81e3d6cef7a13_prof);

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
