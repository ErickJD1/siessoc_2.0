<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_e45275d5fdfb84ec9137eb4c0e150e2b7d47bc9bc3006997088eb01fe92bcb89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_fb4ffd02ad7e2cc5e29bb0c941c7462a4c7d96bde8f0b5b5e8184f4063386ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4ffd02ad7e2cc5e29bb0c941c7462a4c7d96bde8f0b5b5e8184f4063386ace->enter($__internal_fb4ffd02ad7e2cc5e29bb0c941c7462a4c7d96bde8f0b5b5e8184f4063386ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb4ffd02ad7e2cc5e29bb0c941c7462a4c7d96bde8f0b5b5e8184f4063386ace->leave($__internal_fb4ffd02ad7e2cc5e29bb0c941c7462a4c7d96bde8f0b5b5e8184f4063386ace_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e75adab1125c0616b6a328b6c34c03497bbaee47795bedcd16d2e463f3731c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75adab1125c0616b6a328b6c34c03497bbaee47795bedcd16d2e463f3731c3a->enter($__internal_e75adab1125c0616b6a328b6c34c03497bbaee47795bedcd16d2e463f3731c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_e75adab1125c0616b6a328b6c34c03497bbaee47795bedcd16d2e463f3731c3a->leave($__internal_e75adab1125c0616b6a328b6c34c03497bbaee47795bedcd16d2e463f3731c3a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
