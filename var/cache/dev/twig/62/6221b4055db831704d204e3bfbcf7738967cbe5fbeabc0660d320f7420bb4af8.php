<?php

/* FOSUserBundle:Resetting:email.html.twig */
class __TwigTemplate_a4f1cd80ca921fdb181113bd7b1c0a078e27a59be6e2d8b5b69f6071e6f46c23 extends Twig_Template
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
        $__internal_55f26847319f04d2ab8dc966d5814f652f30056833880ada6380ed5e4d2648f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55f26847319f04d2ab8dc966d5814f652f30056833880ada6380ed5e4d2648f6->enter($__internal_55f26847319f04d2ab8dc966d5814f652f30056833880ada6380ed5e4d2648f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.html.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_html', $context, $blocks);
        // line 23
        $this->displayBlock('body_txt', $context, $blocks);
        
        $__internal_55f26847319f04d2ab8dc966d5814f652f30056833880ada6380ed5e4d2648f6->leave($__internal_55f26847319f04d2ab8dc966d5814f652f30056833880ada6380ed5e4d2648f6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e1c026595bbbe21082922d869c36f228cdacea793c985f6855dd0fb2fda9283b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c026595bbbe21082922d869c36f228cdacea793c985f6855dd0fb2fda9283b->enter($__internal_e1c026595bbbe21082922d869c36f228cdacea793c985f6855dd0fb2fda9283b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_e1c026595bbbe21082922d869c36f228cdacea793c985f6855dd0fb2fda9283b->leave($__internal_e1c026595bbbe21082922d869c36f228cdacea793c985f6855dd0fb2fda9283b_prof);

    }

    // line 8
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ebdaccdbf1e1b8215c5013b488c5018865ce0b205ab91335031d7be20153f787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebdaccdbf1e1b8215c5013b488c5018865ce0b205ab91335031d7be20153f787->enter($__internal_ebdaccdbf1e1b8215c5013b488c5018865ce0b205ab91335031d7be20153f787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

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
        
        $__internal_ebdaccdbf1e1b8215c5013b488c5018865ce0b205ab91335031d7be20153f787->leave($__internal_ebdaccdbf1e1b8215c5013b488c5018865ce0b205ab91335031d7be20153f787_prof);

    }

    // line 23
    public function block_body_txt($context, array $blocks = array())
    {
        $__internal_0a4fd31fd40c7bcf9f049a262fb2bbc4c487b1c13c4347142331396d5992f002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4fd31fd40c7bcf9f049a262fb2bbc4c487b1c13c4347142331396d5992f002->enter($__internal_0a4fd31fd40c7bcf9f049a262fb2bbc4c487b1c13c4347142331396d5992f002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_txt"));

        // line 24
        echo "
";
        
        $__internal_0a4fd31fd40c7bcf9f049a262fb2bbc4c487b1c13c4347142331396d5992f002->leave($__internal_0a4fd31fd40c7bcf9f049a262fb2bbc4c487b1c13c4347142331396d5992f002_prof);

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
", "FOSUserBundle:Resetting:email.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.html.twig");
    }
}
