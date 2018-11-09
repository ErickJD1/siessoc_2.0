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
        $__internal_488c845b5b5ae0212d0f40b4b010edd66a7d070d17b5f06d054f68981aad17f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_488c845b5b5ae0212d0f40b4b010edd66a7d070d17b5f06d054f68981aad17f6->enter($__internal_488c845b5b5ae0212d0f40b4b010edd66a7d070d17b5f06d054f68981aad17f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_488c845b5b5ae0212d0f40b4b010edd66a7d070d17b5f06d054f68981aad17f6->leave($__internal_488c845b5b5ae0212d0f40b4b010edd66a7d070d17b5f06d054f68981aad17f6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3839d53bf4a8b969776d1bacc92714f240faa85cc2c4c70856007d4aacbb24ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3839d53bf4a8b969776d1bacc92714f240faa85cc2c4c70856007d4aacbb24ad->enter($__internal_3839d53bf4a8b969776d1bacc92714f240faa85cc2c4c70856007d4aacbb24ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<div style=\"width: 50%;margin-left: 25%; margin-top: 10%\" class=\"box box-primary\">
";
        // line 5
        $this->loadTemplate("SalexUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 5)->display($context);
        // line 6
        echo "<div>
";
        
        $__internal_3839d53bf4a8b969776d1bacc92714f240faa85cc2c4c70856007d4aacbb24ad->leave($__internal_3839d53bf4a8b969776d1bacc92714f240faa85cc2c4c70856007d4aacbb24ad_prof);

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
