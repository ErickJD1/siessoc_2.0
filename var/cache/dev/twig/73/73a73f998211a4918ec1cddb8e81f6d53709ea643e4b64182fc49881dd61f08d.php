<?php

/* @FOSUser/Resetting/email.html.twig */
class __TwigTemplate_5b3a81301f0d2d94d994510bb114a79431c83589f362a0611297be0b2530d188 extends Twig_Template
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
        $__internal_c09a068fce7b7be64e812384620a87c28f37ed07e3902bf7852662542fda7c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09a068fce7b7be64e812384620a87c28f37ed07e3902bf7852662542fda7c42->enter($__internal_c09a068fce7b7be64e812384620a87c28f37ed07e3902bf7852662542fda7c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.html.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_html', $context, $blocks);
        // line 23
        $this->displayBlock('body_txt', $context, $blocks);
        
        $__internal_c09a068fce7b7be64e812384620a87c28f37ed07e3902bf7852662542fda7c42->leave($__internal_c09a068fce7b7be64e812384620a87c28f37ed07e3902bf7852662542fda7c42_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e37f153b633a6484c405438f5799972b1bc912ce079994cbfbe17f5a2fe54437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37f153b633a6484c405438f5799972b1bc912ce079994cbfbe17f5a2fe54437->enter($__internal_e37f153b633a6484c405438f5799972b1bc912ce079994cbfbe17f5a2fe54437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_e37f153b633a6484c405438f5799972b1bc912ce079994cbfbe17f5a2fe54437->leave($__internal_e37f153b633a6484c405438f5799972b1bc912ce079994cbfbe17f5a2fe54437_prof);

    }

    // line 8
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_242a45a888ccc49252c15fccc51d5118b0af87d5f2a12aa5a718d1aee3514c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_242a45a888ccc49252c15fccc51d5118b0af87d5f2a12aa5a718d1aee3514c32->enter($__internal_242a45a888ccc49252c15fccc51d5118b0af87d5f2a12aa5a718d1aee3514c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

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
        
        $__internal_242a45a888ccc49252c15fccc51d5118b0af87d5f2a12aa5a718d1aee3514c32->leave($__internal_242a45a888ccc49252c15fccc51d5118b0af87d5f2a12aa5a718d1aee3514c32_prof);

    }

    // line 23
    public function block_body_txt($context, array $blocks = array())
    {
        $__internal_a415129af70769ed09963a6c9af03662e46f14f00a3a558e7e7d460456478a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a415129af70769ed09963a6c9af03662e46f14f00a3a558e7e7d460456478a77->enter($__internal_a415129af70769ed09963a6c9af03662e46f14f00a3a558e7e7d460456478a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_txt"));

        // line 24
        echo "
";
        
        $__internal_a415129af70769ed09963a6c9af03662e46f14f00a3a558e7e7d460456478a77->leave($__internal_a415129af70769ed09963a6c9af03662e46f14f00a3a558e7e7d460456478a77_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.html.twig";
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
", "@FOSUser/Resetting/email.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.html.twig");
    }
}
