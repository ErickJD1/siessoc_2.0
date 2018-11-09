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
        $__internal_b3c4f7944262b4f8648a11e45fc3f7267af116af60277b1b42ab698afa2a9ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c4f7944262b4f8648a11e45fc3f7267af116af60277b1b42ab698afa2a9ace->enter($__internal_b3c4f7944262b4f8648a11e45fc3f7267af116af60277b1b42ab698afa2a9ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3c4f7944262b4f8648a11e45fc3f7267af116af60277b1b42ab698afa2a9ace->leave($__internal_b3c4f7944262b4f8648a11e45fc3f7267af116af60277b1b42ab698afa2a9ace_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a25631ab9847746283011050b13fc068d0289c90e6325be0e7b8e6c5359007e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a25631ab9847746283011050b13fc068d0289c90e6325be0e7b8e6c5359007e8->enter($__internal_a25631ab9847746283011050b13fc068d0289c90e6325be0e7b8e6c5359007e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_a25631ab9847746283011050b13fc068d0289c90e6325be0e7b8e6c5359007e8->leave($__internal_a25631ab9847746283011050b13fc068d0289c90e6325be0e7b8e6c5359007e8_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_7dd7c99d7dc0a2a8f814462aa2e3984a9955fd7375baa765f833d448b69c48a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd7c99d7dc0a2a8f814462aa2e3984a9955fd7375baa765f833d448b69c48a8->enter($__internal_7dd7c99d7dc0a2a8f814462aa2e3984a9955fd7375baa765f833d448b69c48a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_7dd7c99d7dc0a2a8f814462aa2e3984a9955fd7375baa765f833d448b69c48a8->leave($__internal_7dd7c99d7dc0a2a8f814462aa2e3984a9955fd7375baa765f833d448b69c48a8_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7ad22666f9c87c02b0cb41c92aa44377d41388ffafadf7d88240db0a0adbe4fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ad22666f9c87c02b0cb41c92aa44377d41388ffafadf7d88240db0a0adbe4fe->enter($__internal_7ad22666f9c87c02b0cb41c92aa44377d41388ffafadf7d88240db0a0adbe4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_7ad22666f9c87c02b0cb41c92aa44377d41388ffafadf7d88240db0a0adbe4fe->leave($__internal_7ad22666f9c87c02b0cb41c92aa44377d41388ffafadf7d88240db0a0adbe4fe_prof);

    }

    // line 13
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_8477829cbd6f1563544d78c89dbbf85646c349617b623bbd24a407c6df978ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8477829cbd6f1563544d78c89dbbf85646c349617b623bbd24a407c6df978ba6->enter($__internal_8477829cbd6f1563544d78c89dbbf85646c349617b623bbd24a407c6df978ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        echo " ";
        
        $__internal_8477829cbd6f1563544d78c89dbbf85646c349617b623bbd24a407c6df978ba6->leave($__internal_8477829cbd6f1563544d78c89dbbf85646c349617b623bbd24a407c6df978ba6_prof);

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
