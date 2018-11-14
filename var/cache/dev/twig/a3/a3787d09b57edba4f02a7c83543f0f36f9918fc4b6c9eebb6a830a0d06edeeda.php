<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_8af5ff30dc95a4c2c272f2bca51b35158df8498a77c5a25e06ea3b654adb454c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/loginBase.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_content' => array($this, 'block_page_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'user_auth_contents' => array($this, 'block_user_auth_contents'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/loginBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7754f6b7eff17481196c9466d762ddc1b211388dc7f4c0f1e58486a09d11abe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7754f6b7eff17481196c9466d762ddc1b211388dc7f4c0f1e58486a09d11abe6->enter($__internal_7754f6b7eff17481196c9466d762ddc1b211388dc7f4c0f1e58486a09d11abe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7754f6b7eff17481196c9466d762ddc1b211388dc7f4c0f1e58486a09d11abe6->leave($__internal_7754f6b7eff17481196c9466d762ddc1b211388dc7f4c0f1e58486a09d11abe6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_192bf87510661a502fb6ed7d2a6be2450c130689a0d3c76fd77d6d57b7bc2441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_192bf87510661a502fb6ed7d2a6be2450c130689a0d3c76fd77d6d57b7bc2441->enter($__internal_192bf87510661a502fb6ed7d2a6be2450c130689a0d3c76fd77d6d57b7bc2441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_192bf87510661a502fb6ed7d2a6be2450c130689a0d3c76fd77d6d57b7bc2441->leave($__internal_192bf87510661a502fb6ed7d2a6be2450c130689a0d3c76fd77d6d57b7bc2441_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_6dc89a3d1ec6803b387d4364a454bdfcb190bf99fb5943e9f268bbd04b9b607c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc89a3d1ec6803b387d4364a454bdfcb190bf99fb5943e9f268bbd04b9b607c->enter($__internal_6dc89a3d1ec6803b387d4364a454bdfcb190bf99fb5943e9f268bbd04b9b607c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_6dc89a3d1ec6803b387d4364a454bdfcb190bf99fb5943e9f268bbd04b9b607c->leave($__internal_6dc89a3d1ec6803b387d4364a454bdfcb190bf99fb5943e9f268bbd04b9b607c_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4bbadc4db1c172a717535c23ea8148fb8689d48aa2b09c8591f695b67dd35c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bbadc4db1c172a717535c23ea8148fb8689d48aa2b09c8591f695b67dd35c8c->enter($__internal_4bbadc4db1c172a717535c23ea8148fb8689d48aa2b09c8591f695b67dd35c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "\t\t<div class=\"login-box\">
\t\t\t<div class=\"login-logo\">
\t\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo.jpg"), "html", null, true);
        echo "\"></a>
\t\t\t</div><!-- /.login-logo -->

\t\t\t<div class=\"login-box-body\">
\t\t\t\t";
        // line 13
        $this->displayBlock('user_auth_contents', $context, $blocks);
        // line 14
        echo "\t\t\t</div> <!-- End of login-box-body -->
\t\t</div><!-- End of login-box -->
\t";
        
        $__internal_4bbadc4db1c172a717535c23ea8148fb8689d48aa2b09c8591f695b67dd35c8c->leave($__internal_4bbadc4db1c172a717535c23ea8148fb8689d48aa2b09c8591f695b67dd35c8c_prof);

    }

    // line 13
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_71a663ac7a1c86305f30dd8b46ef3246f245bcf1b95f72cdf61fb10660ce9c1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a663ac7a1c86305f30dd8b46ef3246f245bcf1b95f72cdf61fb10660ce9c1f->enter($__internal_71a663ac7a1c86305f30dd8b46ef3246f245bcf1b95f72cdf61fb10660ce9c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        echo " ";
        
        $__internal_71a663ac7a1c86305f30dd8b46ef3246f245bcf1b95f72cdf61fb10660ce9c1f->leave($__internal_71a663ac7a1c86305f30dd8b46ef3246f245bcf1b95f72cdf61fb10660ce9c1f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 13,  83 => 14,  81 => 13,  72 => 9,  68 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout/loginBase.html.twig' %}

{% block title %}{{ site_name }}{% endblock %}

{% block page_content %}
\t{% block fos_user_content %}
\t\t<div class=\"login-box\">
\t\t\t<div class=\"login-logo\">
\t\t\t\t<a href=\"{{ path('homepage') }}\"><img src=\"{{ asset('bundles/app/images/logo.jpg') }}\"></a>
\t\t\t</div><!-- /.login-logo -->

\t\t\t<div class=\"login-box-body\">
\t\t\t\t{% block user_auth_contents %} {% endblock %}
\t\t\t</div> <!-- End of login-box-body -->
\t\t</div><!-- End of login-box -->
\t{% endblock %}
{% endblock %}", "FOSUserBundle::layout.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\src\\SalexUserBundle/Resources/views/layout.html.twig");
    }
}
