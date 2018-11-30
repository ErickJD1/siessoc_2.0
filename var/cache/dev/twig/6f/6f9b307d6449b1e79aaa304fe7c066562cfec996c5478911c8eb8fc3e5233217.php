<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_2dc9a77d38ffea87f30427ae0e27873daaa8db570c74a2abd726e291e4a1b8f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'user_auth_contents' => array($this, 'block_user_auth_contents'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d19bbb5983440b5be24237f5b54c810a5147e87b8f2adb3cd2b5d1c8351cf5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d19bbb5983440b5be24237f5b54c810a5147e87b8f2adb3cd2b5d1c8351cf5e->enter($__internal_5d19bbb5983440b5be24237f5b54c810a5147e87b8f2adb3cd2b5d1c8351cf5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d19bbb5983440b5be24237f5b54c810a5147e87b8f2adb3cd2b5d1c8351cf5e->leave($__internal_5d19bbb5983440b5be24237f5b54c810a5147e87b8f2adb3cd2b5d1c8351cf5e_prof);

    }

    // line 5
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_2d6bb10bcbd0d0f9652c91230b4932b31792479dc874ea24be5aea57953744cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d6bb10bcbd0d0f9652c91230b4932b31792479dc874ea24be5aea57953744cf->enter($__internal_2d6bb10bcbd0d0f9652c91230b4932b31792479dc874ea24be5aea57953744cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        // line 6
        echo "\t<div class=\"alert alert-success alert-dismissible\">
        ";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
\t</div>
";
        
        $__internal_2d6bb10bcbd0d0f9652c91230b4932b31792479dc874ea24be5aea57953744cf->leave($__internal_2d6bb10bcbd0d0f9652c91230b4932b31792479dc874ea24be5aea57953744cf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block user_auth_contents %}
\t<div class=\"alert alert-success alert-dismissible\">
        {{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
\t</div>
{% endblock user_auth_contents %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/ubuntu/workspace/src/SalexUserBundle/Resources/views/Resetting/check_email.html.twig");
    }
}
