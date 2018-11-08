<?php

/* @SalexUser/Resetting/reset.html.twig */
class __TwigTemplate_b37ab9bef43afc4bc89e0c2704b56f93104816fcc24a076e593a11f71c791dbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@SalexUser/Resetting/reset.html.twig", 1);
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
        $__internal_6d98bf6852136df354cc990f89d4b8c60cda59db97edfd0ca56eaa6a5cbc97f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d98bf6852136df354cc990f89d4b8c60cda59db97edfd0ca56eaa6a5cbc97f6->enter($__internal_6d98bf6852136df354cc990f89d4b8c60cda59db97edfd0ca56eaa6a5cbc97f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d98bf6852136df354cc990f89d4b8c60cda59db97edfd0ca56eaa6a5cbc97f6->leave($__internal_6d98bf6852136df354cc990f89d4b8c60cda59db97edfd0ca56eaa6a5cbc97f6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7ae97d95b6cd64db0887275a16a2fd8f9f77a7b1b2daa76fc98a2c6c90f6cd9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae97d95b6cd64db0887275a16a2fd8f9f77a7b1b2daa76fc98a2c6c90f6cd9a->enter($__internal_7ae97d95b6cd64db0887275a16a2fd8f9f77a7b1b2daa76fc98a2c6c90f6cd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<div style=\"width: 50%;margin-left: 25%; margin-top: 10%\" class=\"box box-primary\">
";
        // line 5
        $this->loadTemplate("SalexUserBundle:Resetting:reset_content.html.twig", "@SalexUser/Resetting/reset.html.twig", 5)->display($context);
        // line 6
        echo "<div>
";
        
        $__internal_7ae97d95b6cd64db0887275a16a2fd8f9f77a7b1b2daa76fc98a2c6c90f6cd9a->leave($__internal_7ae97d95b6cd64db0887275a16a2fd8f9f77a7b1b2daa76fc98a2c6c90f6cd9a_prof);

    }

    public function getTemplateName()
    {
        return "@SalexUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
<div style=\"width: 50%;margin-left: 25%; margin-top: 10%\" class=\"box box-primary\">
{% include \"SalexUserBundle:Resetting:reset_content.html.twig\" %}
<div>
{% endblock fos_user_content %}
", "@SalexUser/Resetting/reset.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\src\\SalexUserBundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
