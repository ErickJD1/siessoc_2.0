<?php

/* SalexUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_cb55aa6da135c3b9be6f03f35cc077660bdf6152682fcf1fa7f6f0a02525ff80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "SalexUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_d1e53ea5795efd122f21374d7cf6a1ef4d8f4f556bb9adff1a4927e6162bec23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e53ea5795efd122f21374d7cf6a1ef4d8f4f556bb9adff1a4927e6162bec23->enter($__internal_d1e53ea5795efd122f21374d7cf6a1ef4d8f4f556bb9adff1a4927e6162bec23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalexUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1e53ea5795efd122f21374d7cf6a1ef4d8f4f556bb9adff1a4927e6162bec23->leave($__internal_d1e53ea5795efd122f21374d7cf6a1ef4d8f4f556bb9adff1a4927e6162bec23_prof);

    }

    // line 5
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_a8e45aa3963f0bb3025e7131f304fc49fff476eb8d1c56b2e0a7767f5d47cd55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8e45aa3963f0bb3025e7131f304fc49fff476eb8d1c56b2e0a7767f5d47cd55->enter($__internal_a8e45aa3963f0bb3025e7131f304fc49fff476eb8d1c56b2e0a7767f5d47cd55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a8e45aa3963f0bb3025e7131f304fc49fff476eb8d1c56b2e0a7767f5d47cd55->leave($__internal_a8e45aa3963f0bb3025e7131f304fc49fff476eb8d1c56b2e0a7767f5d47cd55_prof);

    }

    public function getTemplateName()
    {
        return "SalexUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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
<p>{{ 'resetting.password_already_requested'|trans }}</p>
{% endblock user_auth_contents %}
", "SalexUserBundle:Resetting:passwordAlreadyRequested.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle/Resources/views/Resetting/passwordAlreadyRequested.html.twig");
    }
}
