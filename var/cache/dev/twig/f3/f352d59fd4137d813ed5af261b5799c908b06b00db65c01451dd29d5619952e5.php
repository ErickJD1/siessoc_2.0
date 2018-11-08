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
        $__internal_96573fa2e8a0b801234d3f476fe9538110932ed792b2ca0bfd062893ffa88200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96573fa2e8a0b801234d3f476fe9538110932ed792b2ca0bfd062893ffa88200->enter($__internal_96573fa2e8a0b801234d3f476fe9538110932ed792b2ca0bfd062893ffa88200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96573fa2e8a0b801234d3f476fe9538110932ed792b2ca0bfd062893ffa88200->leave($__internal_96573fa2e8a0b801234d3f476fe9538110932ed792b2ca0bfd062893ffa88200_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee879bac9ed7b91d4e661629870a1195a00bb1a6f40b890b58c65b256922a687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee879bac9ed7b91d4e661629870a1195a00bb1a6f40b890b58c65b256922a687->enter($__internal_ee879bac9ed7b91d4e661629870a1195a00bb1a6f40b890b58c65b256922a687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_ee879bac9ed7b91d4e661629870a1195a00bb1a6f40b890b58c65b256922a687->leave($__internal_ee879bac9ed7b91d4e661629870a1195a00bb1a6f40b890b58c65b256922a687_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_3285f7b8ef077b31ebade6137db9e25941ecd7f7e60b67994b73f9dbe51402a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3285f7b8ef077b31ebade6137db9e25941ecd7f7e60b67994b73f9dbe51402a0->enter($__internal_3285f7b8ef077b31ebade6137db9e25941ecd7f7e60b67994b73f9dbe51402a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_3285f7b8ef077b31ebade6137db9e25941ecd7f7e60b67994b73f9dbe51402a0->leave($__internal_3285f7b8ef077b31ebade6137db9e25941ecd7f7e60b67994b73f9dbe51402a0_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b5c80b23a89c159c4c793f2c26bcc2cf07220a85df8a2813210a23e7520f5f65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5c80b23a89c159c4c793f2c26bcc2cf07220a85df8a2813210a23e7520f5f65->enter($__internal_b5c80b23a89c159c4c793f2c26bcc2cf07220a85df8a2813210a23e7520f5f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_b5c80b23a89c159c4c793f2c26bcc2cf07220a85df8a2813210a23e7520f5f65->leave($__internal_b5c80b23a89c159c4c793f2c26bcc2cf07220a85df8a2813210a23e7520f5f65_prof);

    }

    // line 13
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_597c7fa1c97249e5850abcb7e59cd70b25b15d7b0d82402700906bd2b1db044b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_597c7fa1c97249e5850abcb7e59cd70b25b15d7b0d82402700906bd2b1db044b->enter($__internal_597c7fa1c97249e5850abcb7e59cd70b25b15d7b0d82402700906bd2b1db044b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        echo " ";
        
        $__internal_597c7fa1c97249e5850abcb7e59cd70b25b15d7b0d82402700906bd2b1db044b->leave($__internal_597c7fa1c97249e5850abcb7e59cd70b25b15d7b0d82402700906bd2b1db044b_prof);

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
{% endblock %}", "@SalexUser/layout.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle\\Resources\\views\\layout.html.twig");
    }
}
