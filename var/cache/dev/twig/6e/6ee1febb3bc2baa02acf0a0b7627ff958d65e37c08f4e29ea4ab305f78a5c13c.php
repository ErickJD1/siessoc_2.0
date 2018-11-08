<?php

/* @SalexUser/includes/loginWrapper.html.twig */
class __TwigTemplate_030666d335b7d37d0745fc3af887505e221fc52dc5f4eb791681d41ecf75f33b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36c2f4b46afd852e48c40d9c27676a5949bb9b8167651ea021433570da8f7bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36c2f4b46afd852e48c40d9c27676a5949bb9b8167651ea021433570da8f7bf4->enter($__internal_36c2f4b46afd852e48c40d9c27676a5949bb9b8167651ea021433570da8f7bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/includes/loginWrapper.html.twig"));

        // line 1
        echo "<div class=\"login-box\">
\t\t<div class=\"login-logo\">
        \t<img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo.png"), "html", null, true);
        echo "\">
        \t<a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_dashboard");
        echo "\"><b>Admin</b>LOGIN</a>
      \t</div><!-- /.login-logo -->

\t\t<div class=\"login-box-body\">";
        
        $__internal_36c2f4b46afd852e48c40d9c27676a5949bb9b8167651ea021433570da8f7bf4->leave($__internal_36c2f4b46afd852e48c40d9c27676a5949bb9b8167651ea021433570da8f7bf4_prof);

    }

    public function getTemplateName()
    {
        return "@SalexUser/includes/loginWrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"login-box\">
\t\t<div class=\"login-logo\">
        \t<img src=\"{{ asset('bundles/app/images/logo.png') }}\">
        \t<a href=\"{{ path('show_dashboard') }}\"><b>Admin</b>LOGIN</a>
      \t</div><!-- /.login-logo -->

\t\t<div class=\"login-box-body\">", "@SalexUser/includes/loginWrapper.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle\\Resources\\views\\includes\\loginWrapper.html.twig");
    }
}
