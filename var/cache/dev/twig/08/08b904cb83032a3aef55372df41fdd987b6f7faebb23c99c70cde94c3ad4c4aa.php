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
        $__internal_92909ac56bca59468fd2325e26f087e933e35d774491433756a9907f6b9fb32b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92909ac56bca59468fd2325e26f087e933e35d774491433756a9907f6b9fb32b->enter($__internal_92909ac56bca59468fd2325e26f087e933e35d774491433756a9907f6b9fb32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92909ac56bca59468fd2325e26f087e933e35d774491433756a9907f6b9fb32b->leave($__internal_92909ac56bca59468fd2325e26f087e933e35d774491433756a9907f6b9fb32b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_345f3725db7ae1462639c85ee7645692405db860ef1c779a0c34786585d55fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_345f3725db7ae1462639c85ee7645692405db860ef1c779a0c34786585d55fd9->enter($__internal_345f3725db7ae1462639c85ee7645692405db860ef1c779a0c34786585d55fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_345f3725db7ae1462639c85ee7645692405db860ef1c779a0c34786585d55fd9->leave($__internal_345f3725db7ae1462639c85ee7645692405db860ef1c779a0c34786585d55fd9_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e31b7d7525a0dcf64bb0eaec8ab83d1f4d4e06897ac4d9c5faa4211854cc4e69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e31b7d7525a0dcf64bb0eaec8ab83d1f4d4e06897ac4d9c5faa4211854cc4e69->enter($__internal_e31b7d7525a0dcf64bb0eaec8ab83d1f4d4e06897ac4d9c5faa4211854cc4e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_e31b7d7525a0dcf64bb0eaec8ab83d1f4d4e06897ac4d9c5faa4211854cc4e69->leave($__internal_e31b7d7525a0dcf64bb0eaec8ab83d1f4d4e06897ac4d9c5faa4211854cc4e69_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be68d7dfd07fcfc439fc387856f94c9cccec45b71678ebbe44502a52ddec5dae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be68d7dfd07fcfc439fc387856f94c9cccec45b71678ebbe44502a52ddec5dae->enter($__internal_be68d7dfd07fcfc439fc387856f94c9cccec45b71678ebbe44502a52ddec5dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_be68d7dfd07fcfc439fc387856f94c9cccec45b71678ebbe44502a52ddec5dae->leave($__internal_be68d7dfd07fcfc439fc387856f94c9cccec45b71678ebbe44502a52ddec5dae_prof);

    }

    // line 13
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_98cfa3e942c5d2897d66deb3fe0a04b3cedb4760d63b35610c88400bd2813bd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98cfa3e942c5d2897d66deb3fe0a04b3cedb4760d63b35610c88400bd2813bd5->enter($__internal_98cfa3e942c5d2897d66deb3fe0a04b3cedb4760d63b35610c88400bd2813bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        echo " ";
        
        $__internal_98cfa3e942c5d2897d66deb3fe0a04b3cedb4760d63b35610c88400bd2813bd5->leave($__internal_98cfa3e942c5d2897d66deb3fe0a04b3cedb4760d63b35610c88400bd2813bd5_prof);

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
