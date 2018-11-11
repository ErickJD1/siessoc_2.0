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
        $__internal_e123bf989255dfc690f20d56687d7d96c219ccb34b39ebe88a222a58daf1ff18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e123bf989255dfc690f20d56687d7d96c219ccb34b39ebe88a222a58daf1ff18->enter($__internal_e123bf989255dfc690f20d56687d7d96c219ccb34b39ebe88a222a58daf1ff18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e123bf989255dfc690f20d56687d7d96c219ccb34b39ebe88a222a58daf1ff18->leave($__internal_e123bf989255dfc690f20d56687d7d96c219ccb34b39ebe88a222a58daf1ff18_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4cffb69e5e9ef9febc0fa7852bc051bd203a3b1a381ef04be7f17aff2d93dc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4cffb69e5e9ef9febc0fa7852bc051bd203a3b1a381ef04be7f17aff2d93dc0->enter($__internal_d4cffb69e5e9ef9febc0fa7852bc051bd203a3b1a381ef04be7f17aff2d93dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_d4cffb69e5e9ef9febc0fa7852bc051bd203a3b1a381ef04be7f17aff2d93dc0->leave($__internal_d4cffb69e5e9ef9febc0fa7852bc051bd203a3b1a381ef04be7f17aff2d93dc0_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ee7c628e57f49af224be4b9471c99666ab8f2f7b55f835b76c294180c7533c2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee7c628e57f49af224be4b9471c99666ab8f2f7b55f835b76c294180c7533c2b->enter($__internal_ee7c628e57f49af224be4b9471c99666ab8f2f7b55f835b76c294180c7533c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_ee7c628e57f49af224be4b9471c99666ab8f2f7b55f835b76c294180c7533c2b->leave($__internal_ee7c628e57f49af224be4b9471c99666ab8f2f7b55f835b76c294180c7533c2b_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c50cafb31b9a0e2ec60544d220d886dd1b9072427f39e08ba235dae58514c6a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50cafb31b9a0e2ec60544d220d886dd1b9072427f39e08ba235dae58514c6a5->enter($__internal_c50cafb31b9a0e2ec60544d220d886dd1b9072427f39e08ba235dae58514c6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_c50cafb31b9a0e2ec60544d220d886dd1b9072427f39e08ba235dae58514c6a5->leave($__internal_c50cafb31b9a0e2ec60544d220d886dd1b9072427f39e08ba235dae58514c6a5_prof);

    }

    // line 13
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_d6652e241928e2385d4ac25f348c020ec35a0c14e0720190ca529eebce99fb02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6652e241928e2385d4ac25f348c020ec35a0c14e0720190ca529eebce99fb02->enter($__internal_d6652e241928e2385d4ac25f348c020ec35a0c14e0720190ca529eebce99fb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        echo " ";
        
        $__internal_d6652e241928e2385d4ac25f348c020ec35a0c14e0720190ca529eebce99fb02->leave($__internal_d6652e241928e2385d4ac25f348c020ec35a0c14e0720190ca529eebce99fb02_prof);

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
