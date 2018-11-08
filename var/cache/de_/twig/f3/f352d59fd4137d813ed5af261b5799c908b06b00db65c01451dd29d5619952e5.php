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
        $__internal_b1edb2ed91210d8d17f18c3d601af5668e4613f450bc9e52d2ca40fb038b931b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1edb2ed91210d8d17f18c3d601af5668e4613f450bc9e52d2ca40fb038b931b->enter($__internal_b1edb2ed91210d8d17f18c3d601af5668e4613f450bc9e52d2ca40fb038b931b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1edb2ed91210d8d17f18c3d601af5668e4613f450bc9e52d2ca40fb038b931b->leave($__internal_b1edb2ed91210d8d17f18c3d601af5668e4613f450bc9e52d2ca40fb038b931b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c09e1160da73a4524c63fecf65d443688a92fe8220d99a37f5e3ea464d423a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09e1160da73a4524c63fecf65d443688a92fe8220d99a37f5e3ea464d423a14->enter($__internal_c09e1160da73a4524c63fecf65d443688a92fe8220d99a37f5e3ea464d423a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_c09e1160da73a4524c63fecf65d443688a92fe8220d99a37f5e3ea464d423a14->leave($__internal_c09e1160da73a4524c63fecf65d443688a92fe8220d99a37f5e3ea464d423a14_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_02c2523dcb06b2826b8bd6f821b6ba4b500ef78a686a4bfbe6c9e31d67e28789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c2523dcb06b2826b8bd6f821b6ba4b500ef78a686a4bfbe6c9e31d67e28789->enter($__internal_02c2523dcb06b2826b8bd6f821b6ba4b500ef78a686a4bfbe6c9e31d67e28789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_02c2523dcb06b2826b8bd6f821b6ba4b500ef78a686a4bfbe6c9e31d67e28789->leave($__internal_02c2523dcb06b2826b8bd6f821b6ba4b500ef78a686a4bfbe6c9e31d67e28789_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a05e86f9737da61e54d3849240d14450a9ae33b72c963252a70071f20d0a97ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05e86f9737da61e54d3849240d14450a9ae33b72c963252a70071f20d0a97ed->enter($__internal_a05e86f9737da61e54d3849240d14450a9ae33b72c963252a70071f20d0a97ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_a05e86f9737da61e54d3849240d14450a9ae33b72c963252a70071f20d0a97ed->leave($__internal_a05e86f9737da61e54d3849240d14450a9ae33b72c963252a70071f20d0a97ed_prof);

    }

    // line 13
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_3c03ac18ebb4a48202f00d6c097e782890c45a2abb044a410dabe885dc8a8f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c03ac18ebb4a48202f00d6c097e782890c45a2abb044a410dabe885dc8a8f9f->enter($__internal_3c03ac18ebb4a48202f00d6c097e782890c45a2abb044a410dabe885dc8a8f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        echo " ";
        
        $__internal_3c03ac18ebb4a48202f00d6c097e782890c45a2abb044a410dabe885dc8a8f9f->leave($__internal_3c03ac18ebb4a48202f00d6c097e782890c45a2abb044a410dabe885dc8a8f9f_prof);

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
{% endblock %}", "@SalexUser/layout.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\src\\SalexUserBundle\\Resources\\views\\layout.html.twig");
    }
}
