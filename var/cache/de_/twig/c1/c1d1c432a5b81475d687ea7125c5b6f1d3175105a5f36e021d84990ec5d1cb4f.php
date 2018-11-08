<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_2226fb5ac3add648ee331f319c87afa189f888991654920a949374020f232aba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_655dadeb9ae74ca59dbefa8103aef0143643970d064705d2ab628f412d77d5bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655dadeb9ae74ca59dbefa8103aef0143643970d064705d2ab628f412d77d5bf->enter($__internal_655dadeb9ae74ca59dbefa8103aef0143643970d064705d2ab628f412d77d5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_655dadeb9ae74ca59dbefa8103aef0143643970d064705d2ab628f412d77d5bf->leave($__internal_655dadeb9ae74ca59dbefa8103aef0143643970d064705d2ab628f412d77d5bf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c1d0829a63e5350331eb152b7096e702d823cbf1e700bb4de59466b9081324c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d0829a63e5350331eb152b7096e702d823cbf1e700bb4de59466b9081324c2->enter($__internal_c1d0829a63e5350331eb152b7096e702d823cbf1e700bb4de59466b9081324c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_c1d0829a63e5350331eb152b7096e702d823cbf1e700bb4de59466b9081324c2->leave($__internal_c1d0829a63e5350331eb152b7096e702d823cbf1e700bb4de59466b9081324c2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
