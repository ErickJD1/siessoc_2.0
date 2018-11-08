<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_0572b4943f6bb43ba0e82716640a055431562ff6e2a989de12dede058678c211 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_91928b3601d44355047e4c1ad0770022aa7f5530326282cda312691a467237a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91928b3601d44355047e4c1ad0770022aa7f5530326282cda312691a467237a3->enter($__internal_91928b3601d44355047e4c1ad0770022aa7f5530326282cda312691a467237a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91928b3601d44355047e4c1ad0770022aa7f5530326282cda312691a467237a3->leave($__internal_91928b3601d44355047e4c1ad0770022aa7f5530326282cda312691a467237a3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e08816b73b7a41e77b91fc6ac60b9d99b84661a2dba11dda034730b32a2ba5db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e08816b73b7a41e77b91fc6ac60b9d99b84661a2dba11dda034730b32a2ba5db->enter($__internal_e08816b73b7a41e77b91fc6ac60b9d99b84661a2dba11dda034730b32a2ba5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<div style=\"width: 50%;margin-left: 25%; margin-top: 10%\" class=\"box box-primary\">
";
        // line 5
        $this->loadTemplate("SalexUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 5)->display($context);
        // line 6
        echo "<div>
";
        
        $__internal_e08816b73b7a41e77b91fc6ac60b9d99b84661a2dba11dda034730b32a2ba5db->leave($__internal_e08816b73b7a41e77b91fc6ac60b9d99b84661a2dba11dda034730b32a2ba5db_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle/Resources/views/Resetting/reset.html.twig");
    }
}
