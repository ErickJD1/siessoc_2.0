<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_ec5f10f07788a03f78d4ab032e1b1390dfad35e57b8d6f12384af8a02acc4cae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_df70790a64c685c596897fef2b6f771a3f15793c1e40a9a4ddbd1ada3971d92b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df70790a64c685c596897fef2b6f771a3f15793c1e40a9a4ddbd1ada3971d92b->enter($__internal_df70790a64c685c596897fef2b6f771a3f15793c1e40a9a4ddbd1ada3971d92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df70790a64c685c596897fef2b6f771a3f15793c1e40a9a4ddbd1ada3971d92b->leave($__internal_df70790a64c685c596897fef2b6f771a3f15793c1e40a9a4ddbd1ada3971d92b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f744d3fa84b39bda957dbc9f56e336b74081a41f7ae2851ceccbd03d2d703ce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f744d3fa84b39bda957dbc9f56e336b74081a41f7ae2851ceccbd03d2d703ce3->enter($__internal_f744d3fa84b39bda957dbc9f56e336b74081a41f7ae2851ceccbd03d2d703ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_f744d3fa84b39bda957dbc9f56e336b74081a41f7ae2851ceccbd03d2d703ce3->leave($__internal_f744d3fa84b39bda957dbc9f56e336b74081a41f7ae2851ceccbd03d2d703ce3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "/home/ubuntu/workspace/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
