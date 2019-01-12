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
        $__internal_0e8dc500fb7c30e2d1eb18e94872069f63d94220a2eebdec718af7cf2abfb069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8dc500fb7c30e2d1eb18e94872069f63d94220a2eebdec718af7cf2abfb069->enter($__internal_0e8dc500fb7c30e2d1eb18e94872069f63d94220a2eebdec718af7cf2abfb069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e8dc500fb7c30e2d1eb18e94872069f63d94220a2eebdec718af7cf2abfb069->leave($__internal_0e8dc500fb7c30e2d1eb18e94872069f63d94220a2eebdec718af7cf2abfb069_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_79cd184dd6b136538df346593ed328699423544d25e386f77eef6c44e818d8d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79cd184dd6b136538df346593ed328699423544d25e386f77eef6c44e818d8d0->enter($__internal_79cd184dd6b136538df346593ed328699423544d25e386f77eef6c44e818d8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_79cd184dd6b136538df346593ed328699423544d25e386f77eef6c44e818d8d0->leave($__internal_79cd184dd6b136538df346593ed328699423544d25e386f77eef6c44e818d8d0_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_94ce402900150cb798c1a6320177e42b1e1d399419414a6e06b7068976f2e081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94ce402900150cb798c1a6320177e42b1e1d399419414a6e06b7068976f2e081->enter($__internal_94ce402900150cb798c1a6320177e42b1e1d399419414a6e06b7068976f2e081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_94ce402900150cb798c1a6320177e42b1e1d399419414a6e06b7068976f2e081->leave($__internal_94ce402900150cb798c1a6320177e42b1e1d399419414a6e06b7068976f2e081_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_36997231a16324d35673317a666e22cb55aa036e702a49c8a9fdced9ab240ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36997231a16324d35673317a666e22cb55aa036e702a49c8a9fdced9ab240ee2->enter($__internal_36997231a16324d35673317a666e22cb55aa036e702a49c8a9fdced9ab240ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_36997231a16324d35673317a666e22cb55aa036e702a49c8a9fdced9ab240ee2->leave($__internal_36997231a16324d35673317a666e22cb55aa036e702a49c8a9fdced9ab240ee2_prof);

    }

    // line 13
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_c2f06560f641f353bba7dc3c3c3bfde02198c0a31adb1198ed17040a12199c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f06560f641f353bba7dc3c3c3bfde02198c0a31adb1198ed17040a12199c8c->enter($__internal_c2f06560f641f353bba7dc3c3c3bfde02198c0a31adb1198ed17040a12199c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        echo " ";
        
        $__internal_c2f06560f641f353bba7dc3c3c3bfde02198c0a31adb1198ed17040a12199c8c->leave($__internal_c2f06560f641f353bba7dc3c3c3bfde02198c0a31adb1198ed17040a12199c8c_prof);

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
