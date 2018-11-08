<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_be6b2ac8235e4324601c5b54773d4c9ba03fc6dc4de0218eaa920225450efa64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_dba452069a7baa790e5d1f03ef3afd7b620d73d83599b642f48d7f7a954d2b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dba452069a7baa790e5d1f03ef3afd7b620d73d83599b642f48d7f7a954d2b85->enter($__internal_dba452069a7baa790e5d1f03ef3afd7b620d73d83599b642f48d7f7a954d2b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dba452069a7baa790e5d1f03ef3afd7b620d73d83599b642f48d7f7a954d2b85->leave($__internal_dba452069a7baa790e5d1f03ef3afd7b620d73d83599b642f48d7f7a954d2b85_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e1efa86e9cfb31c92f8769ac9d924751c2451dae34f1b63a9edf035f9a7530b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e1efa86e9cfb31c92f8769ac9d924751c2451dae34f1b63a9edf035f9a7530b->enter($__internal_0e1efa86e9cfb31c92f8769ac9d924751c2451dae34f1b63a9edf035f9a7530b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_0e1efa86e9cfb31c92f8769ac9d924751c2451dae34f1b63a9edf035f9a7530b->leave($__internal_0e1efa86e9cfb31c92f8769ac9d924751c2451dae34f1b63a9edf035f9a7530b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
", "@FOSUser/Group/list.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
