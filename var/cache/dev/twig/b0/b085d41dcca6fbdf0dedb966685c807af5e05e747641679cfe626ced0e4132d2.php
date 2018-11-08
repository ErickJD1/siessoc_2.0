<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_5ab75b0f4238ee8ba9591869520a786008096907037d8bb94b7dd92277fa2d3c extends Twig_Template
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
        $__internal_e5cdfa315a11bb6696da9cadc162f6725d309a9e9e3e6fc786cac878f60ca2dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5cdfa315a11bb6696da9cadc162f6725d309a9e9e3e6fc786cac878f60ca2dd->enter($__internal_e5cdfa315a11bb6696da9cadc162f6725d309a9e9e3e6fc786cac878f60ca2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5cdfa315a11bb6696da9cadc162f6725d309a9e9e3e6fc786cac878f60ca2dd->leave($__internal_e5cdfa315a11bb6696da9cadc162f6725d309a9e9e3e6fc786cac878f60ca2dd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1d0ba0fd0849acd013248845b352703f1fe2c5f8c4c75bb822dc25147255534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d0ba0fd0849acd013248845b352703f1fe2c5f8c4c75bb822dc25147255534->enter($__internal_d1d0ba0fd0849acd013248845b352703f1fe2c5f8c4c75bb822dc25147255534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_d1d0ba0fd0849acd013248845b352703f1fe2c5f8c4c75bb822dc25147255534->leave($__internal_d1d0ba0fd0849acd013248845b352703f1fe2c5f8c4c75bb822dc25147255534_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_b48d6bc00c53b274f844e7133d7258ea547b3bb575f48011b0576fe14e8e8ac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b48d6bc00c53b274f844e7133d7258ea547b3bb575f48011b0576fe14e8e8ac5->enter($__internal_b48d6bc00c53b274f844e7133d7258ea547b3bb575f48011b0576fe14e8e8ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_b48d6bc00c53b274f844e7133d7258ea547b3bb575f48011b0576fe14e8e8ac5->leave($__internal_b48d6bc00c53b274f844e7133d7258ea547b3bb575f48011b0576fe14e8e8ac5_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bca189c77dacf7ed2b6421e40be2b39808a72834172eaa868167e25e2e2b31e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bca189c77dacf7ed2b6421e40be2b39808a72834172eaa868167e25e2e2b31e6->enter($__internal_bca189c77dacf7ed2b6421e40be2b39808a72834172eaa868167e25e2e2b31e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_bca189c77dacf7ed2b6421e40be2b39808a72834172eaa868167e25e2e2b31e6->leave($__internal_bca189c77dacf7ed2b6421e40be2b39808a72834172eaa868167e25e2e2b31e6_prof);

    }

    // line 13
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_ef9e585a2cbc3c6bd48128d10942855b75d09ff457627797396b1a1b3b0cbb78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9e585a2cbc3c6bd48128d10942855b75d09ff457627797396b1a1b3b0cbb78->enter($__internal_ef9e585a2cbc3c6bd48128d10942855b75d09ff457627797396b1a1b3b0cbb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        echo " ";
        
        $__internal_ef9e585a2cbc3c6bd48128d10942855b75d09ff457627797396b1a1b3b0cbb78->leave($__internal_ef9e585a2cbc3c6bd48128d10942855b75d09ff457627797396b1a1b3b0cbb78_prof);

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
