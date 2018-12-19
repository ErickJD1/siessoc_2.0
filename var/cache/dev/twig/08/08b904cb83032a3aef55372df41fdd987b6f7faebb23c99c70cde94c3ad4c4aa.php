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
        $__internal_96c1353d057fce5b5cb8a2a122ce10039e77e2a72d74e8255c1a784d3bc1c578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c1353d057fce5b5cb8a2a122ce10039e77e2a72d74e8255c1a784d3bc1c578->enter($__internal_96c1353d057fce5b5cb8a2a122ce10039e77e2a72d74e8255c1a784d3bc1c578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96c1353d057fce5b5cb8a2a122ce10039e77e2a72d74e8255c1a784d3bc1c578->leave($__internal_96c1353d057fce5b5cb8a2a122ce10039e77e2a72d74e8255c1a784d3bc1c578_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_44330cee8bf91781810a28162dcbc3a345b248dad771e280f193b29698c83fda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44330cee8bf91781810a28162dcbc3a345b248dad771e280f193b29698c83fda->enter($__internal_44330cee8bf91781810a28162dcbc3a345b248dad771e280f193b29698c83fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_44330cee8bf91781810a28162dcbc3a345b248dad771e280f193b29698c83fda->leave($__internal_44330cee8bf91781810a28162dcbc3a345b248dad771e280f193b29698c83fda_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_a505ca8b2fdb59e77b412eca6033f4728180fb07d06611f01d4c9fce83954db1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a505ca8b2fdb59e77b412eca6033f4728180fb07d06611f01d4c9fce83954db1->enter($__internal_a505ca8b2fdb59e77b412eca6033f4728180fb07d06611f01d4c9fce83954db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_a505ca8b2fdb59e77b412eca6033f4728180fb07d06611f01d4c9fce83954db1->leave($__internal_a505ca8b2fdb59e77b412eca6033f4728180fb07d06611f01d4c9fce83954db1_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_761c3d3e50df018bb836de0ee7c7ddd631abf22a6d326fe882b9ead2b76b2c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_761c3d3e50df018bb836de0ee7c7ddd631abf22a6d326fe882b9ead2b76b2c4e->enter($__internal_761c3d3e50df018bb836de0ee7c7ddd631abf22a6d326fe882b9ead2b76b2c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_761c3d3e50df018bb836de0ee7c7ddd631abf22a6d326fe882b9ead2b76b2c4e->leave($__internal_761c3d3e50df018bb836de0ee7c7ddd631abf22a6d326fe882b9ead2b76b2c4e_prof);

    }

    // line 13
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_f3863604f061b773fe087b9768c100af3f962d1cdfa00f60994bd3127ca0358b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3863604f061b773fe087b9768c100af3f962d1cdfa00f60994bd3127ca0358b->enter($__internal_f3863604f061b773fe087b9768c100af3f962d1cdfa00f60994bd3127ca0358b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        echo " ";
        
        $__internal_f3863604f061b773fe087b9768c100af3f962d1cdfa00f60994bd3127ca0358b->leave($__internal_f3863604f061b773fe087b9768c100af3f962d1cdfa00f60994bd3127ca0358b_prof);

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
