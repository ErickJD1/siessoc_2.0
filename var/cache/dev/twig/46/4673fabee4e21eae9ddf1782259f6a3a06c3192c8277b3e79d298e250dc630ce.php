<?php

/* SalexUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_cbb110bba8e4fa5443e743a08141eae5622066aa499729b40b618cdfdb5931e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "SalexUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_635594b32c5e95354e9c8efe608b8e9109d40017f184737d38ac55c096fa25ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_635594b32c5e95354e9c8efe608b8e9109d40017f184737d38ac55c096fa25ed->enter($__internal_635594b32c5e95354e9c8efe608b8e9109d40017f184737d38ac55c096fa25ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalexUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_635594b32c5e95354e9c8efe608b8e9109d40017f184737d38ac55c096fa25ed->leave($__internal_635594b32c5e95354e9c8efe608b8e9109d40017f184737d38ac55c096fa25ed_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_509c49a3d23c93294a098860e7cb3028aeec214e5396fc6dba2c8161c3df49ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509c49a3d23c93294a098860e7cb3028aeec214e5396fc6dba2c8161c3df49ea->enter($__internal_509c49a3d23c93294a098860e7cb3028aeec214e5396fc6dba2c8161c3df49ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Change Password  ";
        
        $__internal_509c49a3d23c93294a098860e7cb3028aeec214e5396fc6dba2c8161c3df49ea->leave($__internal_509c49a3d23c93294a098860e7cb3028aeec214e5396fc6dba2c8161c3df49ea_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_f976dfdfdb95ac5c7332b50db3341d4ff5e4160c1eec09e5b82fe975d25ffe4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f976dfdfdb95ac5c7332b50db3341d4ff5e4160c1eec09e5b82fe975d25ffe4a->enter($__internal_f976dfdfdb95ac5c7332b50db3341d4ff5e4160c1eec09e5b82fe975d25ffe4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getName", array(), "method"), "html", null, true);
        echo " ";
        
        $__internal_f976dfdfdb95ac5c7332b50db3341d4ff5e4160c1eec09e5b82fe975d25ffe4a->leave($__internal_f976dfdfdb95ac5c7332b50db3341d4ff5e4160c1eec09e5b82fe975d25ffe4a_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_415cb8993e004995884b39134e9430988d2487a9ba94aec0e154d602ea4e9256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_415cb8993e004995884b39134e9430988d2487a9ba94aec0e154d602ea4e9256->enter($__internal_415cb8993e004995884b39134e9430988d2487a9ba94aec0e154d602ea4e9256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"box box-primary\">
                ";
        // line 11
        $this->loadTemplate("SalexUserBundle:ChangePassword:changePassword_content.html.twig", "SalexUserBundle:ChangePassword:changePassword.html.twig", 11)->display($context);
        // line 12
        echo "            </div> <!-- End of box-primary -->
        </div> <!-- end of col-md-6 -->
    </div> <!-- End of Row -->
";
        
        $__internal_415cb8993e004995884b39134e9430988d2487a9ba94aec0e154d602ea4e9256->leave($__internal_415cb8993e004995884b39134e9430988d2487a9ba94aec0e154d602ea4e9256_prof);

    }

    public function getTemplateName()
    {
        return "SalexUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  73 => 11,  68 => 8,  62 => 7,  48 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout/base-layout.html.twig\" %}

{% block page_title %}Change Password  {% endblock %}
{% block page_subtitle %} {{ app.user.getName() }} {% endblock %}


{% block page_content %}
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"box box-primary\">
                {% include \"SalexUserBundle:ChangePassword:changePassword_content.html.twig\" %}
            </div> <!-- End of box-primary -->
        </div> <!-- end of col-md-6 -->
    </div> <!-- End of Row -->
{% endblock %}", "SalexUserBundle:ChangePassword:changePassword.html.twig", "/home/ubuntu/workspace/src/SalexUserBundle/Resources/views/ChangePassword/changePassword.html.twig");
    }
}
