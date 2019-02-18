<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_da47cc85f870e93b7db253dfa7e56fd08f5c0068b22371e648c9bb5e0fd2f3c8 extends Twig_Template
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
        $__internal_cfd215fcf2e4fd9667643e0462ecbc95bdb658c5170a87feb4cbe8154dc8df6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd215fcf2e4fd9667643e0462ecbc95bdb658c5170a87feb4cbe8154dc8df6e->enter($__internal_cfd215fcf2e4fd9667643e0462ecbc95bdb658c5170a87feb4cbe8154dc8df6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfd215fcf2e4fd9667643e0462ecbc95bdb658c5170a87feb4cbe8154dc8df6e->leave($__internal_cfd215fcf2e4fd9667643e0462ecbc95bdb658c5170a87feb4cbe8154dc8df6e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d72f56f6fb0371252e51cda3ad75745d48a1ae154cadd81cb6fabe670fe71b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d72f56f6fb0371252e51cda3ad75745d48a1ae154cadd81cb6fabe670fe71b79->enter($__internal_d72f56f6fb0371252e51cda3ad75745d48a1ae154cadd81cb6fabe670fe71b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_d72f56f6fb0371252e51cda3ad75745d48a1ae154cadd81cb6fabe670fe71b79->leave($__internal_d72f56f6fb0371252e51cda3ad75745d48a1ae154cadd81cb6fabe670fe71b79_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ad7858e7cf3d0f927060e52da247daea84b43b118e3da420350e7ab27e66c096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad7858e7cf3d0f927060e52da247daea84b43b118e3da420350e7ab27e66c096->enter($__internal_ad7858e7cf3d0f927060e52da247daea84b43b118e3da420350e7ab27e66c096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_ad7858e7cf3d0f927060e52da247daea84b43b118e3da420350e7ab27e66c096->leave($__internal_ad7858e7cf3d0f927060e52da247daea84b43b118e3da420350e7ab27e66c096_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd032749e517fd5ce84942ab458c2f988ef5d74b47b40ccf6d04e6f39aadb786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd032749e517fd5ce84942ab458c2f988ef5d74b47b40ccf6d04e6f39aadb786->enter($__internal_dd032749e517fd5ce84942ab458c2f988ef5d74b47b40ccf6d04e6f39aadb786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_dd032749e517fd5ce84942ab458c2f988ef5d74b47b40ccf6d04e6f39aadb786->leave($__internal_dd032749e517fd5ce84942ab458c2f988ef5d74b47b40ccf6d04e6f39aadb786_prof);

    }

    // line 13
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_fef199c8bb5437acbdce8d5ec6b890cb6c4e7384b09c6013a76a088714f673ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fef199c8bb5437acbdce8d5ec6b890cb6c4e7384b09c6013a76a088714f673ab->enter($__internal_fef199c8bb5437acbdce8d5ec6b890cb6c4e7384b09c6013a76a088714f673ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        echo " ";
        
        $__internal_fef199c8bb5437acbdce8d5ec6b890cb6c4e7384b09c6013a76a088714f673ab->leave($__internal_fef199c8bb5437acbdce8d5ec6b890cb6c4e7384b09c6013a76a088714f673ab_prof);

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
{% endblock %}", "FOSUserBundle::layout.html.twig", "/home/ubuntu/workspace/src/SalexUserBundle/Resources/views/layout.html.twig");
    }
}
