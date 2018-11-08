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
        $__internal_b7c72377051c2539e8787e5024669f0c57a2976e443f56014bacbfe6bdd98555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c72377051c2539e8787e5024669f0c57a2976e443f56014bacbfe6bdd98555->enter($__internal_b7c72377051c2539e8787e5024669f0c57a2976e443f56014bacbfe6bdd98555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b7c72377051c2539e8787e5024669f0c57a2976e443f56014bacbfe6bdd98555->leave($__internal_b7c72377051c2539e8787e5024669f0c57a2976e443f56014bacbfe6bdd98555_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_13b0621b057d5720d81ec8b1ecd70e3b859348cd842921ca4b095f7ac8121823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b0621b057d5720d81ec8b1ecd70e3b859348cd842921ca4b095f7ac8121823->enter($__internal_13b0621b057d5720d81ec8b1ecd70e3b859348cd842921ca4b095f7ac8121823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_13b0621b057d5720d81ec8b1ecd70e3b859348cd842921ca4b095f7ac8121823->leave($__internal_13b0621b057d5720d81ec8b1ecd70e3b859348cd842921ca4b095f7ac8121823_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b3c29d959b917f038b12be3958fd772128229d115bca10e35ef678089704e1a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c29d959b917f038b12be3958fd772128229d115bca10e35ef678089704e1a7->enter($__internal_b3c29d959b917f038b12be3958fd772128229d115bca10e35ef678089704e1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b3c29d959b917f038b12be3958fd772128229d115bca10e35ef678089704e1a7->leave($__internal_b3c29d959b917f038b12be3958fd772128229d115bca10e35ef678089704e1a7_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0f778021f79b1d48d01709bdf588a77337b7f9431058de54f1e3b2f7a424c5e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f778021f79b1d48d01709bdf588a77337b7f9431058de54f1e3b2f7a424c5e6->enter($__internal_0f778021f79b1d48d01709bdf588a77337b7f9431058de54f1e3b2f7a424c5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0f778021f79b1d48d01709bdf588a77337b7f9431058de54f1e3b2f7a424c5e6->leave($__internal_0f778021f79b1d48d01709bdf588a77337b7f9431058de54f1e3b2f7a424c5e6_prof);

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
