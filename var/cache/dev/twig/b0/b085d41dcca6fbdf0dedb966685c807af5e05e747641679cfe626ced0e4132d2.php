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
        $__internal_01443b28de77108d67d937ef2b6ba1a9ea592634a6b5a9f490a26c31f04b9ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01443b28de77108d67d937ef2b6ba1a9ea592634a6b5a9f490a26c31f04b9ac0->enter($__internal_01443b28de77108d67d937ef2b6ba1a9ea592634a6b5a9f490a26c31f04b9ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01443b28de77108d67d937ef2b6ba1a9ea592634a6b5a9f490a26c31f04b9ac0->leave($__internal_01443b28de77108d67d937ef2b6ba1a9ea592634a6b5a9f490a26c31f04b9ac0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1920ec1bb207a04d7bf82527a97cd95d1132cc4d36a1681d996f0fbb08e0c446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1920ec1bb207a04d7bf82527a97cd95d1132cc4d36a1681d996f0fbb08e0c446->enter($__internal_1920ec1bb207a04d7bf82527a97cd95d1132cc4d36a1681d996f0fbb08e0c446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_1920ec1bb207a04d7bf82527a97cd95d1132cc4d36a1681d996f0fbb08e0c446->leave($__internal_1920ec1bb207a04d7bf82527a97cd95d1132cc4d36a1681d996f0fbb08e0c446_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_781ea3754a3452e7dc6f3f7b91b0113a9ed702953b77834f7c5908614ccac568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_781ea3754a3452e7dc6f3f7b91b0113a9ed702953b77834f7c5908614ccac568->enter($__internal_781ea3754a3452e7dc6f3f7b91b0113a9ed702953b77834f7c5908614ccac568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_781ea3754a3452e7dc6f3f7b91b0113a9ed702953b77834f7c5908614ccac568->leave($__internal_781ea3754a3452e7dc6f3f7b91b0113a9ed702953b77834f7c5908614ccac568_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2efcef93f07bb3718cab04911dd75c63f0cab83e308a8139c61156eea2207782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2efcef93f07bb3718cab04911dd75c63f0cab83e308a8139c61156eea2207782->enter($__internal_2efcef93f07bb3718cab04911dd75c63f0cab83e308a8139c61156eea2207782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_2efcef93f07bb3718cab04911dd75c63f0cab83e308a8139c61156eea2207782->leave($__internal_2efcef93f07bb3718cab04911dd75c63f0cab83e308a8139c61156eea2207782_prof);

    }

    // line 13
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_5a335d0a8a477229737fc130d1bc2c939d9fbf0f079474e15095d5b014ee5ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a335d0a8a477229737fc130d1bc2c939d9fbf0f079474e15095d5b014ee5ca5->enter($__internal_5a335d0a8a477229737fc130d1bc2c939d9fbf0f079474e15095d5b014ee5ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        echo " ";
        
        $__internal_5a335d0a8a477229737fc130d1bc2c939d9fbf0f079474e15095d5b014ee5ca5->leave($__internal_5a335d0a8a477229737fc130d1bc2c939d9fbf0f079474e15095d5b014ee5ca5_prof);

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
