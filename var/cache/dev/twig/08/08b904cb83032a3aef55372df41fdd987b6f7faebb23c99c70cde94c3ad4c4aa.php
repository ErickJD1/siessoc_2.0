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
        $__internal_acc76a430fca942265f54f37c93b5eb8d3836da0a23bce817fbd1ddeb36aaa6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc76a430fca942265f54f37c93b5eb8d3836da0a23bce817fbd1ddeb36aaa6d->enter($__internal_acc76a430fca942265f54f37c93b5eb8d3836da0a23bce817fbd1ddeb36aaa6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acc76a430fca942265f54f37c93b5eb8d3836da0a23bce817fbd1ddeb36aaa6d->leave($__internal_acc76a430fca942265f54f37c93b5eb8d3836da0a23bce817fbd1ddeb36aaa6d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd7230733c54a252e0c74e1ade7c9efed38cf7b738fb32321d7019bf10fd4556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd7230733c54a252e0c74e1ade7c9efed38cf7b738fb32321d7019bf10fd4556->enter($__internal_dd7230733c54a252e0c74e1ade7c9efed38cf7b738fb32321d7019bf10fd4556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_dd7230733c54a252e0c74e1ade7c9efed38cf7b738fb32321d7019bf10fd4556->leave($__internal_dd7230733c54a252e0c74e1ade7c9efed38cf7b738fb32321d7019bf10fd4556_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_d9f7d874b2c395cac0a3e08ef4194af94ab00ac55c933642e6c74702b9b7632f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f7d874b2c395cac0a3e08ef4194af94ab00ac55c933642e6c74702b9b7632f->enter($__internal_d9f7d874b2c395cac0a3e08ef4194af94ab00ac55c933642e6c74702b9b7632f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_d9f7d874b2c395cac0a3e08ef4194af94ab00ac55c933642e6c74702b9b7632f->leave($__internal_d9f7d874b2c395cac0a3e08ef4194af94ab00ac55c933642e6c74702b9b7632f_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ffc860f319de746825bc765f7c6987bcb759297fa96a0b98766b014a9685ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ffc860f319de746825bc765f7c6987bcb759297fa96a0b98766b014a9685ee3->enter($__internal_8ffc860f319de746825bc765f7c6987bcb759297fa96a0b98766b014a9685ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_8ffc860f319de746825bc765f7c6987bcb759297fa96a0b98766b014a9685ee3->leave($__internal_8ffc860f319de746825bc765f7c6987bcb759297fa96a0b98766b014a9685ee3_prof);

    }

    // line 13
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_df40f5a4687eedc750b075d4014a0715a97f7feb7c65e84eda518e6d24bdf5c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df40f5a4687eedc750b075d4014a0715a97f7feb7c65e84eda518e6d24bdf5c0->enter($__internal_df40f5a4687eedc750b075d4014a0715a97f7feb7c65e84eda518e6d24bdf5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        echo " ";
        
        $__internal_df40f5a4687eedc750b075d4014a0715a97f7feb7c65e84eda518e6d24bdf5c0->leave($__internal_df40f5a4687eedc750b075d4014a0715a97f7feb7c65e84eda518e6d24bdf5c0_prof);

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
