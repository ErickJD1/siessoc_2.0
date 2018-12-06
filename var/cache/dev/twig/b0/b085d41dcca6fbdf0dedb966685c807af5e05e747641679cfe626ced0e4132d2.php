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
        $__internal_ee1d2d981a189185461af70bfc472990717504d76731740298dc541dc2dc066b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee1d2d981a189185461af70bfc472990717504d76731740298dc541dc2dc066b->enter($__internal_ee1d2d981a189185461af70bfc472990717504d76731740298dc541dc2dc066b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee1d2d981a189185461af70bfc472990717504d76731740298dc541dc2dc066b->leave($__internal_ee1d2d981a189185461af70bfc472990717504d76731740298dc541dc2dc066b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_964adcf2c32ab7383a2f7e25c15c246316780af2da2270e645e3db76f02de69d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_964adcf2c32ab7383a2f7e25c15c246316780af2da2270e645e3db76f02de69d->enter($__internal_964adcf2c32ab7383a2f7e25c15c246316780af2da2270e645e3db76f02de69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_964adcf2c32ab7383a2f7e25c15c246316780af2da2270e645e3db76f02de69d->leave($__internal_964adcf2c32ab7383a2f7e25c15c246316780af2da2270e645e3db76f02de69d_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e5cf6c13a0ee1d350789434947fab11fc354a2e7997ed2f6ba65f624c7c559a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5cf6c13a0ee1d350789434947fab11fc354a2e7997ed2f6ba65f624c7c559a7->enter($__internal_e5cf6c13a0ee1d350789434947fab11fc354a2e7997ed2f6ba65f624c7c559a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_e5cf6c13a0ee1d350789434947fab11fc354a2e7997ed2f6ba65f624c7c559a7->leave($__internal_e5cf6c13a0ee1d350789434947fab11fc354a2e7997ed2f6ba65f624c7c559a7_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_73c9239708758135faeb673919f4580939c5e4975d952cb60fc60acc5cfa38e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c9239708758135faeb673919f4580939c5e4975d952cb60fc60acc5cfa38e3->enter($__internal_73c9239708758135faeb673919f4580939c5e4975d952cb60fc60acc5cfa38e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_73c9239708758135faeb673919f4580939c5e4975d952cb60fc60acc5cfa38e3->leave($__internal_73c9239708758135faeb673919f4580939c5e4975d952cb60fc60acc5cfa38e3_prof);

    }

    // line 13
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_73b6c8c75af23444fe5421ce2f6314a27c223bc918d5adcd26e59ef567c39e8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b6c8c75af23444fe5421ce2f6314a27c223bc918d5adcd26e59ef567c39e8a->enter($__internal_73b6c8c75af23444fe5421ce2f6314a27c223bc918d5adcd26e59ef567c39e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        echo " ";
        
        $__internal_73b6c8c75af23444fe5421ce2f6314a27c223bc918d5adcd26e59ef567c39e8a->leave($__internal_73b6c8c75af23444fe5421ce2f6314a27c223bc918d5adcd26e59ef567c39e8a_prof);

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
