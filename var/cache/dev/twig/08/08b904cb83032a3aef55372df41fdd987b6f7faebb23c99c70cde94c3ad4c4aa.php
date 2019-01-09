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
        $__internal_11ad43479b72b9bb295ed0b375e78688058e3b266981b042799db03cfffa871a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11ad43479b72b9bb295ed0b375e78688058e3b266981b042799db03cfffa871a->enter($__internal_11ad43479b72b9bb295ed0b375e78688058e3b266981b042799db03cfffa871a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11ad43479b72b9bb295ed0b375e78688058e3b266981b042799db03cfffa871a->leave($__internal_11ad43479b72b9bb295ed0b375e78688058e3b266981b042799db03cfffa871a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c8682ea7086819f4d4cf17f105ba1114e22e57f09c6fc90b23bd4c2973feb67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c8682ea7086819f4d4cf17f105ba1114e22e57f09c6fc90b23bd4c2973feb67->enter($__internal_7c8682ea7086819f4d4cf17f105ba1114e22e57f09c6fc90b23bd4c2973feb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_7c8682ea7086819f4d4cf17f105ba1114e22e57f09c6fc90b23bd4c2973feb67->leave($__internal_7c8682ea7086819f4d4cf17f105ba1114e22e57f09c6fc90b23bd4c2973feb67_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_12367475318c878181ef39dbb0e6f0082f15f1a9bdf1d77e28178839e50e12ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12367475318c878181ef39dbb0e6f0082f15f1a9bdf1d77e28178839e50e12ac->enter($__internal_12367475318c878181ef39dbb0e6f0082f15f1a9bdf1d77e28178839e50e12ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_12367475318c878181ef39dbb0e6f0082f15f1a9bdf1d77e28178839e50e12ac->leave($__internal_12367475318c878181ef39dbb0e6f0082f15f1a9bdf1d77e28178839e50e12ac_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1dbcb401957a63eaac9703fb8297bcd48ca0466c45e8b937cf55d81889726871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dbcb401957a63eaac9703fb8297bcd48ca0466c45e8b937cf55d81889726871->enter($__internal_1dbcb401957a63eaac9703fb8297bcd48ca0466c45e8b937cf55d81889726871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_1dbcb401957a63eaac9703fb8297bcd48ca0466c45e8b937cf55d81889726871->leave($__internal_1dbcb401957a63eaac9703fb8297bcd48ca0466c45e8b937cf55d81889726871_prof);

    }

    // line 13
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_67934456ae16aa9d2b27f82d38190ae51b3a2b8c51024982339e2f44d7dd67f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67934456ae16aa9d2b27f82d38190ae51b3a2b8c51024982339e2f44d7dd67f5->enter($__internal_67934456ae16aa9d2b27f82d38190ae51b3a2b8c51024982339e2f44d7dd67f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        echo " ";
        
        $__internal_67934456ae16aa9d2b27f82d38190ae51b3a2b8c51024982339e2f44d7dd67f5->leave($__internal_67934456ae16aa9d2b27f82d38190ae51b3a2b8c51024982339e2f44d7dd67f5_prof);

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
