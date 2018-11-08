<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_e1b839532624ebf4735ffbacf04d7f61b560e518415a80c3781732e6cf0fff6b extends Twig_Template
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
        $__internal_850d42472b7ae70af3721d022cea9b118d4e66aedd78979e98bc0a26a543dd7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_850d42472b7ae70af3721d022cea9b118d4e66aedd78979e98bc0a26a543dd7f->enter($__internal_850d42472b7ae70af3721d022cea9b118d4e66aedd78979e98bc0a26a543dd7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_850d42472b7ae70af3721d022cea9b118d4e66aedd78979e98bc0a26a543dd7f->leave($__internal_850d42472b7ae70af3721d022cea9b118d4e66aedd78979e98bc0a26a543dd7f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c9fa051fcecc5c9dadfd1887249e0a8d61a82eb64be522070586412d516554aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9fa051fcecc5c9dadfd1887249e0a8d61a82eb64be522070586412d516554aa->enter($__internal_c9fa051fcecc5c9dadfd1887249e0a8d61a82eb64be522070586412d516554aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_c9fa051fcecc5c9dadfd1887249e0a8d61a82eb64be522070586412d516554aa->leave($__internal_c9fa051fcecc5c9dadfd1887249e0a8d61a82eb64be522070586412d516554aa_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9651670ab4897bad1f0db0c677924430688e075d921e46a1110e50c591fc608d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9651670ab4897bad1f0db0c677924430688e075d921e46a1110e50c591fc608d->enter($__internal_9651670ab4897bad1f0db0c677924430688e075d921e46a1110e50c591fc608d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9651670ab4897bad1f0db0c677924430688e075d921e46a1110e50c591fc608d->leave($__internal_9651670ab4897bad1f0db0c677924430688e075d921e46a1110e50c591fc608d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e8f55cedcaffc008322c32d9124a64e9c070b11315cdee7381307e56fd034e1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f55cedcaffc008322c32d9124a64e9c070b11315cdee7381307e56fd034e1c->enter($__internal_e8f55cedcaffc008322c32d9124a64e9c070b11315cdee7381307e56fd034e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e8f55cedcaffc008322c32d9124a64e9c070b11315cdee7381307e56fd034e1c->leave($__internal_e8f55cedcaffc008322c32d9124a64e9c070b11315cdee7381307e56fd034e1c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
