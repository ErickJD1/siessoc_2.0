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
        $__internal_3673ee30bc9e6f3519c13c84f305ca6e1264b0bec7aea1cd4ff39a89d84f38cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3673ee30bc9e6f3519c13c84f305ca6e1264b0bec7aea1cd4ff39a89d84f38cc->enter($__internal_3673ee30bc9e6f3519c13c84f305ca6e1264b0bec7aea1cd4ff39a89d84f38cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3673ee30bc9e6f3519c13c84f305ca6e1264b0bec7aea1cd4ff39a89d84f38cc->leave($__internal_3673ee30bc9e6f3519c13c84f305ca6e1264b0bec7aea1cd4ff39a89d84f38cc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4b25941ad68a0423bbbdacedbc28516009808870114f11bd46ca911857f8e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4b25941ad68a0423bbbdacedbc28516009808870114f11bd46ca911857f8e56->enter($__internal_f4b25941ad68a0423bbbdacedbc28516009808870114f11bd46ca911857f8e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_f4b25941ad68a0423bbbdacedbc28516009808870114f11bd46ca911857f8e56->leave($__internal_f4b25941ad68a0423bbbdacedbc28516009808870114f11bd46ca911857f8e56_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_59fdd0aec8970cff43e4681355278cec4b346c9a3a2052ebc02ef7c645cdfc73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59fdd0aec8970cff43e4681355278cec4b346c9a3a2052ebc02ef7c645cdfc73->enter($__internal_59fdd0aec8970cff43e4681355278cec4b346c9a3a2052ebc02ef7c645cdfc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_59fdd0aec8970cff43e4681355278cec4b346c9a3a2052ebc02ef7c645cdfc73->leave($__internal_59fdd0aec8970cff43e4681355278cec4b346c9a3a2052ebc02ef7c645cdfc73_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_49f5ce1071a41dec13cd3617984e4afb96314c1e064be6b7a50b5d0c88157da4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f5ce1071a41dec13cd3617984e4afb96314c1e064be6b7a50b5d0c88157da4->enter($__internal_49f5ce1071a41dec13cd3617984e4afb96314c1e064be6b7a50b5d0c88157da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_49f5ce1071a41dec13cd3617984e4afb96314c1e064be6b7a50b5d0c88157da4->leave($__internal_49f5ce1071a41dec13cd3617984e4afb96314c1e064be6b7a50b5d0c88157da4_prof);

    }

    // line 13
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_003664ec620c36c9bfef789a03f0348ca1014b9c006cf9c6f01dbf97455d3314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_003664ec620c36c9bfef789a03f0348ca1014b9c006cf9c6f01dbf97455d3314->enter($__internal_003664ec620c36c9bfef789a03f0348ca1014b9c006cf9c6f01dbf97455d3314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        echo " ";
        
        $__internal_003664ec620c36c9bfef789a03f0348ca1014b9c006cf9c6f01dbf97455d3314->leave($__internal_003664ec620c36c9bfef789a03f0348ca1014b9c006cf9c6f01dbf97455d3314_prof);

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
