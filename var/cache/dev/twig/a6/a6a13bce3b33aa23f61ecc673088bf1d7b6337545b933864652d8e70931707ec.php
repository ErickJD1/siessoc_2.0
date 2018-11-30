<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_beaf3fec7725003b59afc9d270a7b31a56b52c45056cdef32e8cb3a2eff295c6 extends Twig_Template
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
        $__internal_e31d757de593d1b56e9d190f68184dedf93722be2eb07dee3f65087a464af34d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e31d757de593d1b56e9d190f68184dedf93722be2eb07dee3f65087a464af34d->enter($__internal_e31d757de593d1b56e9d190f68184dedf93722be2eb07dee3f65087a464af34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e31d757de593d1b56e9d190f68184dedf93722be2eb07dee3f65087a464af34d->leave($__internal_e31d757de593d1b56e9d190f68184dedf93722be2eb07dee3f65087a464af34d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b280ec337abda0e01c7279e9cbe53f84ef91496692400ba361b383f2798f5deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b280ec337abda0e01c7279e9cbe53f84ef91496692400ba361b383f2798f5deb->enter($__internal_b280ec337abda0e01c7279e9cbe53f84ef91496692400ba361b383f2798f5deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_b280ec337abda0e01c7279e9cbe53f84ef91496692400ba361b383f2798f5deb->leave($__internal_b280ec337abda0e01c7279e9cbe53f84ef91496692400ba361b383f2798f5deb_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3d366f1aa593cf830115dede48577c333c70dfe99e11da5882dfc24699211eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d366f1aa593cf830115dede48577c333c70dfe99e11da5882dfc24699211eae->enter($__internal_3d366f1aa593cf830115dede48577c333c70dfe99e11da5882dfc24699211eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3d366f1aa593cf830115dede48577c333c70dfe99e11da5882dfc24699211eae->leave($__internal_3d366f1aa593cf830115dede48577c333c70dfe99e11da5882dfc24699211eae_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a02ff4194721f1f27a829153abba2fa8e556e1d6235d15222d978e7e270915e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a02ff4194721f1f27a829153abba2fa8e556e1d6235d15222d978e7e270915e6->enter($__internal_a02ff4194721f1f27a829153abba2fa8e556e1d6235d15222d978e7e270915e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a02ff4194721f1f27a829153abba2fa8e556e1d6235d15222d978e7e270915e6->leave($__internal_a02ff4194721f1f27a829153abba2fa8e556e1d6235d15222d978e7e270915e6_prof);

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
", "FOSUserBundle:Registration:email.txt.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
