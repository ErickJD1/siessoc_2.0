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
        $__internal_589fd018ee4216ef9e50d8ed5f349e0ca553e3922162071bbe623eedf059156d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_589fd018ee4216ef9e50d8ed5f349e0ca553e3922162071bbe623eedf059156d->enter($__internal_589fd018ee4216ef9e50d8ed5f349e0ca553e3922162071bbe623eedf059156d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_589fd018ee4216ef9e50d8ed5f349e0ca553e3922162071bbe623eedf059156d->leave($__internal_589fd018ee4216ef9e50d8ed5f349e0ca553e3922162071bbe623eedf059156d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_abe6bed6c4fcbd3d5944fcc2bad186f779a5f543143f806f565b5fcba277059c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe6bed6c4fcbd3d5944fcc2bad186f779a5f543143f806f565b5fcba277059c->enter($__internal_abe6bed6c4fcbd3d5944fcc2bad186f779a5f543143f806f565b5fcba277059c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_abe6bed6c4fcbd3d5944fcc2bad186f779a5f543143f806f565b5fcba277059c->leave($__internal_abe6bed6c4fcbd3d5944fcc2bad186f779a5f543143f806f565b5fcba277059c_prof);

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
", "@FOSUser/Resetting/reset.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
