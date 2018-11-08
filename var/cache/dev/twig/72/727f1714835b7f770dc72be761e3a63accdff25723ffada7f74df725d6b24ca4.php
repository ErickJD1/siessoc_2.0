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
        $__internal_eb5d77ce54445db74f2b0b9c1099219a55688631c2efc0f61167e950c41f42a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb5d77ce54445db74f2b0b9c1099219a55688631c2efc0f61167e950c41f42a0->enter($__internal_eb5d77ce54445db74f2b0b9c1099219a55688631c2efc0f61167e950c41f42a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_eb5d77ce54445db74f2b0b9c1099219a55688631c2efc0f61167e950c41f42a0->leave($__internal_eb5d77ce54445db74f2b0b9c1099219a55688631c2efc0f61167e950c41f42a0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_994d4c10f62339364b1325e43c51e9a6a6aee9cdeb054b0e6b4fb7c929cd5378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_994d4c10f62339364b1325e43c51e9a6a6aee9cdeb054b0e6b4fb7c929cd5378->enter($__internal_994d4c10f62339364b1325e43c51e9a6a6aee9cdeb054b0e6b4fb7c929cd5378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_994d4c10f62339364b1325e43c51e9a6a6aee9cdeb054b0e6b4fb7c929cd5378->leave($__internal_994d4c10f62339364b1325e43c51e9a6a6aee9cdeb054b0e6b4fb7c929cd5378_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_17acaf0724f32a68b9630d43bd220ec1fc90fb21c7b49f58c58bc9159489279a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17acaf0724f32a68b9630d43bd220ec1fc90fb21c7b49f58c58bc9159489279a->enter($__internal_17acaf0724f32a68b9630d43bd220ec1fc90fb21c7b49f58c58bc9159489279a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_17acaf0724f32a68b9630d43bd220ec1fc90fb21c7b49f58c58bc9159489279a->leave($__internal_17acaf0724f32a68b9630d43bd220ec1fc90fb21c7b49f58c58bc9159489279a_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0703b2f09d0efe890e825f717f0ab567661e7a2d38a54a9f7f03bbb18fbf46bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0703b2f09d0efe890e825f717f0ab567661e7a2d38a54a9f7f03bbb18fbf46bc->enter($__internal_0703b2f09d0efe890e825f717f0ab567661e7a2d38a54a9f7f03bbb18fbf46bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0703b2f09d0efe890e825f717f0ab567661e7a2d38a54a9f7f03bbb18fbf46bc->leave($__internal_0703b2f09d0efe890e825f717f0ab567661e7a2d38a54a9f7f03bbb18fbf46bc_prof);

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
", "FOSUserBundle:Registration:email.txt.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
