<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_be7ffe4035887828cf6988a95415643e7f2dc57eac51c1b83e30885e99e6f646 extends Twig_Template
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
        $__internal_e56a63d0c71677a8d4ee1942ce122e43b9244e07812ed3185abae1209c683eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e56a63d0c71677a8d4ee1942ce122e43b9244e07812ed3185abae1209c683eb1->enter($__internal_e56a63d0c71677a8d4ee1942ce122e43b9244e07812ed3185abae1209c683eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e56a63d0c71677a8d4ee1942ce122e43b9244e07812ed3185abae1209c683eb1->leave($__internal_e56a63d0c71677a8d4ee1942ce122e43b9244e07812ed3185abae1209c683eb1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec810f37d523963760374da7c9361bc0d49f683e6c309ceadc383b9d4a20e245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec810f37d523963760374da7c9361bc0d49f683e6c309ceadc383b9d4a20e245->enter($__internal_ec810f37d523963760374da7c9361bc0d49f683e6c309ceadc383b9d4a20e245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_ec810f37d523963760374da7c9361bc0d49f683e6c309ceadc383b9d4a20e245->leave($__internal_ec810f37d523963760374da7c9361bc0d49f683e6c309ceadc383b9d4a20e245_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_532c9476c68163270c8681b755f6dc114c7d95b06025c3288694cc27ef0589b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_532c9476c68163270c8681b755f6dc114c7d95b06025c3288694cc27ef0589b5->enter($__internal_532c9476c68163270c8681b755f6dc114c7d95b06025c3288694cc27ef0589b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_532c9476c68163270c8681b755f6dc114c7d95b06025c3288694cc27ef0589b5->leave($__internal_532c9476c68163270c8681b755f6dc114c7d95b06025c3288694cc27ef0589b5_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8a427078105368919626d1197eb628b68af81dd2e05e86e402203f9e7b1b496d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a427078105368919626d1197eb628b68af81dd2e05e86e402203f9e7b1b496d->enter($__internal_8a427078105368919626d1197eb628b68af81dd2e05e86e402203f9e7b1b496d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_8a427078105368919626d1197eb628b68af81dd2e05e86e402203f9e7b1b496d->leave($__internal_8a427078105368919626d1197eb628b68af81dd2e05e86e402203f9e7b1b496d_prof);

    }

    // line 13
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_45390abd2f67795923992046659f8f6b980b1a2e6abe7ad2b93f582cf2e9149d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45390abd2f67795923992046659f8f6b980b1a2e6abe7ad2b93f582cf2e9149d->enter($__internal_45390abd2f67795923992046659f8f6b980b1a2e6abe7ad2b93f582cf2e9149d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        echo " ";
        
        $__internal_45390abd2f67795923992046659f8f6b980b1a2e6abe7ad2b93f582cf2e9149d->leave($__internal_45390abd2f67795923992046659f8f6b980b1a2e6abe7ad2b93f582cf2e9149d_prof);

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
{% endblock %}", "FOSUserBundle::layout.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle/Resources/views/layout.html.twig");
    }
}
