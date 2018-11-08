<?php

/* @SalexUser/Resetting/request.html.twig */
class __TwigTemplate_63a24a517530c393f8ad9e4c8f66d3a911460591a3f8d463698d4a3b542572da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@SalexUser/Resetting/request.html.twig", 1);
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
        $__internal_0c0ffed9d7b13be71cbaa35f7ee25dffd54d1bf3f762a801129c3e3d9408c2e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0ffed9d7b13be71cbaa35f7ee25dffd54d1bf3f762a801129c3e3d9408c2e0->enter($__internal_0c0ffed9d7b13be71cbaa35f7ee25dffd54d1bf3f762a801129c3e3d9408c2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c0ffed9d7b13be71cbaa35f7ee25dffd54d1bf3f762a801129c3e3d9408c2e0->leave($__internal_0c0ffed9d7b13be71cbaa35f7ee25dffd54d1bf3f762a801129c3e3d9408c2e0_prof);

    }

    // line 3
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_351ed930111f3e606e38b0ad39ee6069e647cccde04fb0696e192ffa323a7cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_351ed930111f3e606e38b0ad39ee6069e647cccde04fb0696e192ffa323a7cce->enter($__internal_351ed930111f3e606e38b0ad39ee6069e647cccde04fb0696e192ffa323a7cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        // line 4
        $this->loadTemplate("SalexUserBundle:Resetting:request_content.html.twig", "@SalexUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_351ed930111f3e606e38b0ad39ee6069e647cccde04fb0696e192ffa323a7cce->leave($__internal_351ed930111f3e606e38b0ad39ee6069e647cccde04fb0696e192ffa323a7cce_prof);

    }

    public function getTemplateName()
    {
        return "@SalexUser/Resetting/request.html.twig";
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
", "@SalexUser/Resetting/request.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\src\\SalexUserBundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
