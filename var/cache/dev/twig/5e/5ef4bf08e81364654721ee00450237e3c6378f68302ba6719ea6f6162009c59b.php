<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_337fe0bece62718bbc951aadde69afac00f9710debe5d03e626bd9da26d18905 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_718bae155cfa7d526afad1b3bfae1bdf35040d64c8eb7f7660821cac3f80e07e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_718bae155cfa7d526afad1b3bfae1bdf35040d64c8eb7f7660821cac3f80e07e->enter($__internal_718bae155cfa7d526afad1b3bfae1bdf35040d64c8eb7f7660821cac3f80e07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_718bae155cfa7d526afad1b3bfae1bdf35040d64c8eb7f7660821cac3f80e07e->leave($__internal_718bae155cfa7d526afad1b3bfae1bdf35040d64c8eb7f7660821cac3f80e07e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2a09ee7fae15970180c130de855e04b461753316f8a93c165a461e9d5e5d60a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a09ee7fae15970180c130de855e04b461753316f8a93c165a461e9d5e5d60a3->enter($__internal_2a09ee7fae15970180c130de855e04b461753316f8a93c165a461e9d5e5d60a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_2a09ee7fae15970180c130de855e04b461753316f8a93c165a461e9d5e5d60a3->leave($__internal_2a09ee7fae15970180c130de855e04b461753316f8a93c165a461e9d5e5d60a3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
