<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_8000034ab8d40a664853324c950d0aec118bce921762d2d96e0ba67b34676dcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_42241ab7e6c458ffae9e77632a0c92aa3c9bd5924c63039bb32e8101e8edc9e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42241ab7e6c458ffae9e77632a0c92aa3c9bd5924c63039bb32e8101e8edc9e3->enter($__internal_42241ab7e6c458ffae9e77632a0c92aa3c9bd5924c63039bb32e8101e8edc9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42241ab7e6c458ffae9e77632a0c92aa3c9bd5924c63039bb32e8101e8edc9e3->leave($__internal_42241ab7e6c458ffae9e77632a0c92aa3c9bd5924c63039bb32e8101e8edc9e3_prof);

    }

    // line 3
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_1a3d05a8ec94666028ce21a72cf6b17d58d1b223ff40a9c2f8200df9456f984e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3d05a8ec94666028ce21a72cf6b17d58d1b223ff40a9c2f8200df9456f984e->enter($__internal_1a3d05a8ec94666028ce21a72cf6b17d58d1b223ff40a9c2f8200df9456f984e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        // line 4
        $this->loadTemplate("SalexUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_1a3d05a8ec94666028ce21a72cf6b17d58d1b223ff40a9c2f8200df9456f984e->leave($__internal_1a3d05a8ec94666028ce21a72cf6b17d58d1b223ff40a9c2f8200df9456f984e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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

{% block user_auth_contents %}
{% include \"SalexUserBundle:Resetting:request_content.html.twig\" %}
{% endblock user_auth_contents %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/ubuntu/workspace/src/SalexUserBundle/Resources/views/Resetting/request.html.twig");
    }
}
