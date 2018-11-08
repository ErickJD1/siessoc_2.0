<?php

/* SalexUserBundle:includes:loginWrapper.html.twig */
class __TwigTemplate_0b951ae32d44f0a7e2fbc61f099d7a6c64dc7c43028042b5393c625048fcc9cc extends Twig_Template
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
        $__internal_fd89880062f4dbb8d2b8802777c1c97d7748341375cf9e0881d813328fbd4c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd89880062f4dbb8d2b8802777c1c97d7748341375cf9e0881d813328fbd4c8c->enter($__internal_fd89880062f4dbb8d2b8802777c1c97d7748341375cf9e0881d813328fbd4c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalexUserBundle:includes:loginWrapper.html.twig"));

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
        
        $__internal_fd89880062f4dbb8d2b8802777c1c97d7748341375cf9e0881d813328fbd4c8c->leave($__internal_fd89880062f4dbb8d2b8802777c1c97d7748341375cf9e0881d813328fbd4c8c_prof);

    }

    public function getTemplateName()
    {
        return "SalexUserBundle:includes:loginWrapper.html.twig";
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

\t\t<div class=\"login-box-body\">", "SalexUserBundle:includes:loginWrapper.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\src\\SalexUserBundle/Resources/views/includes/loginWrapper.html.twig");
    }
}
