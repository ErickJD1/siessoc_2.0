<?php

/* SalexUserBundle:includes:loginWrapper.html.twig */
class __TwigTemplate_27df5e346f310a2716f7b8aee991fdcee685eea4d93bdf4a3af06e68aab2bf89 extends Twig_Template
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
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SalexUserBundle:includes:loginWrapper.html.twig", "/home/ubuntu/workspace/src/SalexUserBundle/Resources/views/includes/loginWrapper.html.twig");
    }
}
