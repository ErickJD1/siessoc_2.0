<?php

/* @SalexUser/layout.html.twig */
class __TwigTemplate_5836f73dd82bf477bee06e5e1ab7984d9f1582db7041565be22f0f8e66b0af5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/loginBase.html.twig", "@SalexUser/layout.html.twig", 1);
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
        $__internal_5f2f5d1897490a92a6a09a010af7f704c8a789c4dccf622e76fd3044535d2710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2f5d1897490a92a6a09a010af7f704c8a789c4dccf622e76fd3044535d2710->enter($__internal_5f2f5d1897490a92a6a09a010af7f704c8a789c4dccf622e76fd3044535d2710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f2f5d1897490a92a6a09a010af7f704c8a789c4dccf622e76fd3044535d2710->leave($__internal_5f2f5d1897490a92a6a09a010af7f704c8a789c4dccf622e76fd3044535d2710_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_437ffb667b5e6df4f0ad9cf7923d7d6a04517e22c6bd769e2d836712a9eef7f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437ffb667b5e6df4f0ad9cf7923d7d6a04517e22c6bd769e2d836712a9eef7f7->enter($__internal_437ffb667b5e6df4f0ad9cf7923d7d6a04517e22c6bd769e2d836712a9eef7f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_437ffb667b5e6df4f0ad9cf7923d7d6a04517e22c6bd769e2d836712a9eef7f7->leave($__internal_437ffb667b5e6df4f0ad9cf7923d7d6a04517e22c6bd769e2d836712a9eef7f7_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_3973ff25823b917fc78062b9d69628068bcc5163be590b06fcc8af856b3ac402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3973ff25823b917fc78062b9d69628068bcc5163be590b06fcc8af856b3ac402->enter($__internal_3973ff25823b917fc78062b9d69628068bcc5163be590b06fcc8af856b3ac402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_3973ff25823b917fc78062b9d69628068bcc5163be590b06fcc8af856b3ac402->leave($__internal_3973ff25823b917fc78062b9d69628068bcc5163be590b06fcc8af856b3ac402_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_93f091ec35e600416cb6e644b3d394abeb9409c3f3f67547a919ea6faf336e7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93f091ec35e600416cb6e644b3d394abeb9409c3f3f67547a919ea6faf336e7e->enter($__internal_93f091ec35e600416cb6e644b3d394abeb9409c3f3f67547a919ea6faf336e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_93f091ec35e600416cb6e644b3d394abeb9409c3f3f67547a919ea6faf336e7e->leave($__internal_93f091ec35e600416cb6e644b3d394abeb9409c3f3f67547a919ea6faf336e7e_prof);

    }

    // line 13
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_5ae8cfab5a3a2550ea83077ac9baa0d6020d28cea25c806b9e3bfbc58b142639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ae8cfab5a3a2550ea83077ac9baa0d6020d28cea25c806b9e3bfbc58b142639->enter($__internal_5ae8cfab5a3a2550ea83077ac9baa0d6020d28cea25c806b9e3bfbc58b142639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        echo " ";
        
        $__internal_5ae8cfab5a3a2550ea83077ac9baa0d6020d28cea25c806b9e3bfbc58b142639->leave($__internal_5ae8cfab5a3a2550ea83077ac9baa0d6020d28cea25c806b9e3bfbc58b142639_prof);

    }

    public function getTemplateName()
    {
        return "@SalexUser/layout.html.twig";
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
{% endblock %}", "@SalexUser/layout.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle\\Resources\\views\\layout.html.twig");
    }
}
