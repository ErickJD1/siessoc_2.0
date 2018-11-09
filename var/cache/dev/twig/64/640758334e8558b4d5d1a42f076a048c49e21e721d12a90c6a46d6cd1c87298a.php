<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_46513c32cd6d561a5b21ab0d148075492620c1eb874154e3f3743b37470bc6ab extends Twig_Template
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
        $__internal_b9a0f6f57d423e4537ea195a611f69817b58dd996b2d3ca0cd164a3f5986581e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a0f6f57d423e4537ea195a611f69817b58dd996b2d3ca0cd164a3f5986581e->enter($__internal_b9a0f6f57d423e4537ea195a611f69817b58dd996b2d3ca0cd164a3f5986581e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9a0f6f57d423e4537ea195a611f69817b58dd996b2d3ca0cd164a3f5986581e->leave($__internal_b9a0f6f57d423e4537ea195a611f69817b58dd996b2d3ca0cd164a3f5986581e_prof);

    }

    // line 3
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_a8301de9effd59dbb1f196fd020a2ed4509c26f9b7828292a570f2aad0e018c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8301de9effd59dbb1f196fd020a2ed4509c26f9b7828292a570f2aad0e018c8->enter($__internal_a8301de9effd59dbb1f196fd020a2ed4509c26f9b7828292a570f2aad0e018c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        // line 4
        $this->loadTemplate("SalexUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_a8301de9effd59dbb1f196fd020a2ed4509c26f9b7828292a570f2aad0e018c8->leave($__internal_a8301de9effd59dbb1f196fd020a2ed4509c26f9b7828292a570f2aad0e018c8_prof);

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
", "FOSUserBundle:Resetting:request.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\src\\SalexUserBundle/Resources/views/Resetting/request.html.twig");
    }
}
