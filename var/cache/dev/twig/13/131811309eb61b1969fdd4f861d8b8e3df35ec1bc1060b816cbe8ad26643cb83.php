<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_0524328f818e50258409713506b5cf81c62c45643fef40ffacb5b2605f446361 extends Twig_Template
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
        $__internal_cc48185ddfd9681d4138fd6408fddbe7a9645bea49bd224d0488a259ff6d58cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc48185ddfd9681d4138fd6408fddbe7a9645bea49bd224d0488a259ff6d58cd->enter($__internal_cc48185ddfd9681d4138fd6408fddbe7a9645bea49bd224d0488a259ff6d58cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_cc48185ddfd9681d4138fd6408fddbe7a9645bea49bd224d0488a259ff6d58cd->leave($__internal_cc48185ddfd9681d4138fd6408fddbe7a9645bea49bd224d0488a259ff6d58cd_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_09dec15846a9ca3cb18a93235ab17ed81edc0955c34fe113751ab871af80d3d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09dec15846a9ca3cb18a93235ab17ed81edc0955c34fe113751ab871af80d3d6->enter($__internal_09dec15846a9ca3cb18a93235ab17ed81edc0955c34fe113751ab871af80d3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_09dec15846a9ca3cb18a93235ab17ed81edc0955c34fe113751ab871af80d3d6->leave($__internal_09dec15846a9ca3cb18a93235ab17ed81edc0955c34fe113751ab871af80d3d6_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c80f2a0b9b4acb610be7fdbdb7773f8ffec5a00b707128209c3a6e3ff8d5f630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c80f2a0b9b4acb610be7fdbdb7773f8ffec5a00b707128209c3a6e3ff8d5f630->enter($__internal_c80f2a0b9b4acb610be7fdbdb7773f8ffec5a00b707128209c3a6e3ff8d5f630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c80f2a0b9b4acb610be7fdbdb7773f8ffec5a00b707128209c3a6e3ff8d5f630->leave($__internal_c80f2a0b9b4acb610be7fdbdb7773f8ffec5a00b707128209c3a6e3ff8d5f630_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_be68d48c2560787f576e753d296acb934cfb7328242bdd1c8ee504f169e0defc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be68d48c2560787f576e753d296acb934cfb7328242bdd1c8ee504f169e0defc->enter($__internal_be68d48c2560787f576e753d296acb934cfb7328242bdd1c8ee504f169e0defc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_be68d48c2560787f576e753d296acb934cfb7328242bdd1c8ee504f169e0defc->leave($__internal_be68d48c2560787f576e753d296acb934cfb7328242bdd1c8ee504f169e0defc_prof);

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
