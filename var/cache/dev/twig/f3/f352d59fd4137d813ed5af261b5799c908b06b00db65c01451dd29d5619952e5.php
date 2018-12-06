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
        $__internal_a81f2b9fce0bca51d1968d3fbf48b0623111920c9230504549f04ca41d009b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a81f2b9fce0bca51d1968d3fbf48b0623111920c9230504549f04ca41d009b17->enter($__internal_a81f2b9fce0bca51d1968d3fbf48b0623111920c9230504549f04ca41d009b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a81f2b9fce0bca51d1968d3fbf48b0623111920c9230504549f04ca41d009b17->leave($__internal_a81f2b9fce0bca51d1968d3fbf48b0623111920c9230504549f04ca41d009b17_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3509d719cd4fc078f551d999ab93efb166e3906aab38c163203399e1b1508fb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3509d719cd4fc078f551d999ab93efb166e3906aab38c163203399e1b1508fb9->enter($__internal_3509d719cd4fc078f551d999ab93efb166e3906aab38c163203399e1b1508fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_3509d719cd4fc078f551d999ab93efb166e3906aab38c163203399e1b1508fb9->leave($__internal_3509d719cd4fc078f551d999ab93efb166e3906aab38c163203399e1b1508fb9_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_885942e97ea33249f6ddd2cc327515f982dffe8e53d4d6f9a993b2f5222f95e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_885942e97ea33249f6ddd2cc327515f982dffe8e53d4d6f9a993b2f5222f95e9->enter($__internal_885942e97ea33249f6ddd2cc327515f982dffe8e53d4d6f9a993b2f5222f95e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_885942e97ea33249f6ddd2cc327515f982dffe8e53d4d6f9a993b2f5222f95e9->leave($__internal_885942e97ea33249f6ddd2cc327515f982dffe8e53d4d6f9a993b2f5222f95e9_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5045c358f0a6982fce787777503d239a3f9267d7b74f2e110d043af7ead51108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5045c358f0a6982fce787777503d239a3f9267d7b74f2e110d043af7ead51108->enter($__internal_5045c358f0a6982fce787777503d239a3f9267d7b74f2e110d043af7ead51108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_5045c358f0a6982fce787777503d239a3f9267d7b74f2e110d043af7ead51108->leave($__internal_5045c358f0a6982fce787777503d239a3f9267d7b74f2e110d043af7ead51108_prof);

    }

    // line 13
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_3999c050a35fd0448fabe78e43605a51dcd6d5a6e5d3a6f4a2318b9e2705e2c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3999c050a35fd0448fabe78e43605a51dcd6d5a6e5d3a6f4a2318b9e2705e2c5->enter($__internal_3999c050a35fd0448fabe78e43605a51dcd6d5a6e5d3a6f4a2318b9e2705e2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        echo " ";
        
        $__internal_3999c050a35fd0448fabe78e43605a51dcd6d5a6e5d3a6f4a2318b9e2705e2c5->leave($__internal_3999c050a35fd0448fabe78e43605a51dcd6d5a6e5d3a6f4a2318b9e2705e2c5_prof);

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
