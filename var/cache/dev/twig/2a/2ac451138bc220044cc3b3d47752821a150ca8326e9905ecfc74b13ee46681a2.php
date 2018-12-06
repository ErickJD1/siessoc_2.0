<?php

/* @SalexUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_a5c775cdbbdda263546b4a66068ef51a65e257620965f13891b54ea32d3d7cd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@SalexUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_7f5835369eb197b87c497c789ec0ea9e117fdb06670a224647a39283fa04601b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5835369eb197b87c497c789ec0ea9e117fdb06670a224647a39283fa04601b->enter($__internal_7f5835369eb197b87c497c789ec0ea9e117fdb06670a224647a39283fa04601b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f5835369eb197b87c497c789ec0ea9e117fdb06670a224647a39283fa04601b->leave($__internal_7f5835369eb197b87c497c789ec0ea9e117fdb06670a224647a39283fa04601b_prof);

    }

    // line 5
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_ac35c22df34bec9a77b25aa46b2cefe9a4e176cbdef35798e8b1a2e119466f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac35c22df34bec9a77b25aa46b2cefe9a4e176cbdef35798e8b1a2e119466f1f->enter($__internal_ac35c22df34bec9a77b25aa46b2cefe9a4e176cbdef35798e8b1a2e119466f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ac35c22df34bec9a77b25aa46b2cefe9a4e176cbdef35798e8b1a2e119466f1f->leave($__internal_ac35c22df34bec9a77b25aa46b2cefe9a4e176cbdef35798e8b1a2e119466f1f_prof);

    }

    public function getTemplateName()
    {
        return "@SalexUser/Resetting/passwordAlreadyRequested.html.twig";
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
", "@SalexUser/Resetting/passwordAlreadyRequested.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle\\Resources\\views\\Resetting\\passwordAlreadyRequested.html.twig");
    }
}
