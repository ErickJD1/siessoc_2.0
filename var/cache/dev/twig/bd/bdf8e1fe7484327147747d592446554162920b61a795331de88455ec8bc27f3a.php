<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_be7ffe4035887828cf6988a95415643e7f2dc57eac51c1b83e30885e99e6f646 extends Twig_Template
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
        $__internal_5c9fec7f785c182dd3240824fba78644a03b9491654e0d03ad817be01c046fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c9fec7f785c182dd3240824fba78644a03b9491654e0d03ad817be01c046fa5->enter($__internal_5c9fec7f785c182dd3240824fba78644a03b9491654e0d03ad817be01c046fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c9fec7f785c182dd3240824fba78644a03b9491654e0d03ad817be01c046fa5->leave($__internal_5c9fec7f785c182dd3240824fba78644a03b9491654e0d03ad817be01c046fa5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_763a36bf0fb7f0ed0e9db285a2e04234b7342062c62c52d5bb02a9010aa105e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_763a36bf0fb7f0ed0e9db285a2e04234b7342062c62c52d5bb02a9010aa105e6->enter($__internal_763a36bf0fb7f0ed0e9db285a2e04234b7342062c62c52d5bb02a9010aa105e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_763a36bf0fb7f0ed0e9db285a2e04234b7342062c62c52d5bb02a9010aa105e6->leave($__internal_763a36bf0fb7f0ed0e9db285a2e04234b7342062c62c52d5bb02a9010aa105e6_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4c8ade8a4360e3f9591a26deb14a6f03c4e32a9b362e47505d5144dd27c0ff82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c8ade8a4360e3f9591a26deb14a6f03c4e32a9b362e47505d5144dd27c0ff82->enter($__internal_4c8ade8a4360e3f9591a26deb14a6f03c4e32a9b362e47505d5144dd27c0ff82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_4c8ade8a4360e3f9591a26deb14a6f03c4e32a9b362e47505d5144dd27c0ff82->leave($__internal_4c8ade8a4360e3f9591a26deb14a6f03c4e32a9b362e47505d5144dd27c0ff82_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5dcc6c902fca3d804bc1b63bc116a98ba9ba4d1f25499a1cc9747de9470c223a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dcc6c902fca3d804bc1b63bc116a98ba9ba4d1f25499a1cc9747de9470c223a->enter($__internal_5dcc6c902fca3d804bc1b63bc116a98ba9ba4d1f25499a1cc9747de9470c223a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_5dcc6c902fca3d804bc1b63bc116a98ba9ba4d1f25499a1cc9747de9470c223a->leave($__internal_5dcc6c902fca3d804bc1b63bc116a98ba9ba4d1f25499a1cc9747de9470c223a_prof);

    }

    // line 13
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_b4c6328999241182d32cc16776e1c143140fdea88b824b5d5ee881d94185733a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c6328999241182d32cc16776e1c143140fdea88b824b5d5ee881d94185733a->enter($__internal_b4c6328999241182d32cc16776e1c143140fdea88b824b5d5ee881d94185733a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        echo " ";
        
        $__internal_b4c6328999241182d32cc16776e1c143140fdea88b824b5d5ee881d94185733a->leave($__internal_b4c6328999241182d32cc16776e1c143140fdea88b824b5d5ee881d94185733a_prof);

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
