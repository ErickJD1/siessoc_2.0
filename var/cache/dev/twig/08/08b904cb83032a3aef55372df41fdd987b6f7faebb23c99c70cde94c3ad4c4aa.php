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
        $__internal_79f35a5ae1521bc9166bc393a2573e0f7fadbd30bbf9b8053c5d6ab0650c716b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f35a5ae1521bc9166bc393a2573e0f7fadbd30bbf9b8053c5d6ab0650c716b->enter($__internal_79f35a5ae1521bc9166bc393a2573e0f7fadbd30bbf9b8053c5d6ab0650c716b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79f35a5ae1521bc9166bc393a2573e0f7fadbd30bbf9b8053c5d6ab0650c716b->leave($__internal_79f35a5ae1521bc9166bc393a2573e0f7fadbd30bbf9b8053c5d6ab0650c716b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebf350dbcd94301f623ec3bf8c38319b0bdf93e42a5534214e1a943258e92677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf350dbcd94301f623ec3bf8c38319b0bdf93e42a5534214e1a943258e92677->enter($__internal_ebf350dbcd94301f623ec3bf8c38319b0bdf93e42a5534214e1a943258e92677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_ebf350dbcd94301f623ec3bf8c38319b0bdf93e42a5534214e1a943258e92677->leave($__internal_ebf350dbcd94301f623ec3bf8c38319b0bdf93e42a5534214e1a943258e92677_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c7691258a9fbcb54ff006de2cb4ca63184738f83e1c9a34b0ff82dfa362e3736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7691258a9fbcb54ff006de2cb4ca63184738f83e1c9a34b0ff82dfa362e3736->enter($__internal_c7691258a9fbcb54ff006de2cb4ca63184738f83e1c9a34b0ff82dfa362e3736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_c7691258a9fbcb54ff006de2cb4ca63184738f83e1c9a34b0ff82dfa362e3736->leave($__internal_c7691258a9fbcb54ff006de2cb4ca63184738f83e1c9a34b0ff82dfa362e3736_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_588e76e16e771d16df4b4fc64c364209a0060c6a499baaf00da7377387e84b95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_588e76e16e771d16df4b4fc64c364209a0060c6a499baaf00da7377387e84b95->enter($__internal_588e76e16e771d16df4b4fc64c364209a0060c6a499baaf00da7377387e84b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_588e76e16e771d16df4b4fc64c364209a0060c6a499baaf00da7377387e84b95->leave($__internal_588e76e16e771d16df4b4fc64c364209a0060c6a499baaf00da7377387e84b95_prof);

    }

    // line 13
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_75950c6ee8397a0ab0c4d81bb44598c8311e80b8fcfa6e26f257f03e2aab7b3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75950c6ee8397a0ab0c4d81bb44598c8311e80b8fcfa6e26f257f03e2aab7b3d->enter($__internal_75950c6ee8397a0ab0c4d81bb44598c8311e80b8fcfa6e26f257f03e2aab7b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        echo " ";
        
        $__internal_75950c6ee8397a0ab0c4d81bb44598c8311e80b8fcfa6e26f257f03e2aab7b3d->leave($__internal_75950c6ee8397a0ab0c4d81bb44598c8311e80b8fcfa6e26f257f03e2aab7b3d_prof);

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
