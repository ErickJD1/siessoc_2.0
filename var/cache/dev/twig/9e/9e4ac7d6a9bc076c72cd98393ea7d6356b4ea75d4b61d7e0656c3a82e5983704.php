<?php

/* @SalexUser/Resetting/check_email.html.twig */
class __TwigTemplate_d67bb966c024f81232dd1892a93e9b8f141344bd79b5f85b598b0b9c0e773bde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@SalexUser/Resetting/check_email.html.twig", 1);
        $this->blocks = array(
            'user_auth_contents' => array($this, 'block_user_auth_contents'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e8aa2669300611596ef7d523a83dc438972ee03dcc3cf3e07af787bba74f31a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e8aa2669300611596ef7d523a83dc438972ee03dcc3cf3e07af787bba74f31a->enter($__internal_8e8aa2669300611596ef7d523a83dc438972ee03dcc3cf3e07af787bba74f31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e8aa2669300611596ef7d523a83dc438972ee03dcc3cf3e07af787bba74f31a->leave($__internal_8e8aa2669300611596ef7d523a83dc438972ee03dcc3cf3e07af787bba74f31a_prof);

    }

    // line 5
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_77289aaf8ee7ddd9b0f9b2ac04585459f49b7130b0bbfc13ca4a4b0685e75993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77289aaf8ee7ddd9b0f9b2ac04585459f49b7130b0bbfc13ca4a4b0685e75993->enter($__internal_77289aaf8ee7ddd9b0f9b2ac04585459f49b7130b0bbfc13ca4a4b0685e75993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        // line 6
        echo "\t<div class=\"alert alert-success alert-dismissible\">
        ";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
\t</div>
";
        
        $__internal_77289aaf8ee7ddd9b0f9b2ac04585459f49b7130b0bbfc13ca4a4b0685e75993->leave($__internal_77289aaf8ee7ddd9b0f9b2ac04585459f49b7130b0bbfc13ca4a4b0685e75993_prof);

    }

    public function getTemplateName()
    {
        return "@SalexUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block user_auth_contents %}
\t<div class=\"alert alert-success alert-dismissible\">
        {{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
\t</div>
{% endblock user_auth_contents %}
", "@SalexUser/Resetting/check_email.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
