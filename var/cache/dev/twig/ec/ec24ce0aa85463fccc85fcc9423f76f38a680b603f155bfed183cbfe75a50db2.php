<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_325165ed24c59866a54db11137adbf4b8bd8bcf08d0bef4ad8a6c0eeb3668c17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_b310d42374a304d6912024e5fe7567a52b47bd2a334b72dd2fef2a0b163c9179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b310d42374a304d6912024e5fe7567a52b47bd2a334b72dd2fef2a0b163c9179->enter($__internal_b310d42374a304d6912024e5fe7567a52b47bd2a334b72dd2fef2a0b163c9179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b310d42374a304d6912024e5fe7567a52b47bd2a334b72dd2fef2a0b163c9179->leave($__internal_b310d42374a304d6912024e5fe7567a52b47bd2a334b72dd2fef2a0b163c9179_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d00af51dc9291142e4d5406148fa2221e0593ddc718f0b0a86ea77755d3d5aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00af51dc9291142e4d5406148fa2221e0593ddc718f0b0a86ea77755d3d5aa0->enter($__internal_d00af51dc9291142e4d5406148fa2221e0593ddc718f0b0a86ea77755d3d5aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_d00af51dc9291142e4d5406148fa2221e0593ddc718f0b0a86ea77755d3d5aa0->leave($__internal_d00af51dc9291142e4d5406148fa2221e0593ddc718f0b0a86ea77755d3d5aa0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
