<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_c1a0b416dfdbd0d2a4fede41c7aea9d735cd96f47a145fe0d0042b7832e7c236 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_30577c03db9cf6bd52952e0b1492003f65d7b4beaf1ab517cee92726882bb02c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30577c03db9cf6bd52952e0b1492003f65d7b4beaf1ab517cee92726882bb02c->enter($__internal_30577c03db9cf6bd52952e0b1492003f65d7b4beaf1ab517cee92726882bb02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30577c03db9cf6bd52952e0b1492003f65d7b4beaf1ab517cee92726882bb02c->leave($__internal_30577c03db9cf6bd52952e0b1492003f65d7b4beaf1ab517cee92726882bb02c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f42f1a0ef494d2c8140a0204dace641806eef7d9ba4354eb929755759cf32f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f42f1a0ef494d2c8140a0204dace641806eef7d9ba4354eb929755759cf32f6f->enter($__internal_f42f1a0ef494d2c8140a0204dace641806eef7d9ba4354eb929755759cf32f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_f42f1a0ef494d2c8140a0204dace641806eef7d9ba4354eb929755759cf32f6f->leave($__internal_f42f1a0ef494d2c8140a0204dace641806eef7d9ba4354eb929755759cf32f6f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
