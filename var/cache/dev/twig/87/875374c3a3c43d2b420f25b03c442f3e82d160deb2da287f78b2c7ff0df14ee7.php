<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_fc619ec5f6514e92fd58b3232083ece2dc0443440842449619a3177cc5d4a58a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_77dba21cfb7110bd491865d1beb7327e1883aceb8e8fdca8318514167b086b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77dba21cfb7110bd491865d1beb7327e1883aceb8e8fdca8318514167b086b73->enter($__internal_77dba21cfb7110bd491865d1beb7327e1883aceb8e8fdca8318514167b086b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77dba21cfb7110bd491865d1beb7327e1883aceb8e8fdca8318514167b086b73->leave($__internal_77dba21cfb7110bd491865d1beb7327e1883aceb8e8fdca8318514167b086b73_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_839e2fe68e28e31da1371d17c13c9df283f59a41ba723b3d6d905c10e9a1afcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_839e2fe68e28e31da1371d17c13c9df283f59a41ba723b3d6d905c10e9a1afcb->enter($__internal_839e2fe68e28e31da1371d17c13c9df283f59a41ba723b3d6d905c10e9a1afcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Edit Profile  ";
        
        $__internal_839e2fe68e28e31da1371d17c13c9df283f59a41ba723b3d6d905c10e9a1afcb->leave($__internal_839e2fe68e28e31da1371d17c13c9df283f59a41ba723b3d6d905c10e9a1afcb_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_7f7df447bd83abaa5cd744c7a069e47454942fcc4737f137fc64a517c1e09c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f7df447bd83abaa5cd744c7a069e47454942fcc4737f137fc64a517c1e09c17->enter($__internal_7f7df447bd83abaa5cd744c7a069e47454942fcc4737f137fc64a517c1e09c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getName", array(), "method"), "html", null, true);
        echo " ";
        
        $__internal_7f7df447bd83abaa5cd744c7a069e47454942fcc4737f137fc64a517c1e09c17->leave($__internal_7f7df447bd83abaa5cd744c7a069e47454942fcc4737f137fc64a517c1e09c17_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_844d44fcea9e214cb14af1bb46813f6387ca57a2c935ba3cdd3dc68b947b997e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_844d44fcea9e214cb14af1bb46813f6387ca57a2c935ba3cdd3dc68b947b997e->enter($__internal_844d44fcea9e214cb14af1bb46813f6387ca57a2c935ba3cdd3dc68b947b997e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t<div class=\"box box-primary\">
\t\t\t";
        // line 10
        $this->loadTemplate("SalexUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t</div> <!-- End of box-primary -->
\t\t</div> <!-- end of col-md-6 -->
\t</div> <!-- End of Row -->
";
        
        $__internal_844d44fcea9e214cb14af1bb46813f6387ca57a2c935ba3cdd3dc68b947b997e->leave($__internal_844d44fcea9e214cb14af1bb46813f6387ca57a2c935ba3cdd3dc68b947b997e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 11,  73 => 10,  68 => 7,  62 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %}Edit Profile  {% endblock %}
{% block page_subtitle %} {{ app.user.getName() }} {% endblock %}

{% block page_content %}
<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t<div class=\"box box-primary\">
\t\t\t{% include \"SalexUserBundle:Profile:edit_content.html.twig\" %}
\t\t\t</div> <!-- End of box-primary -->
\t\t</div> <!-- end of col-md-6 -->
\t</div> <!-- End of Row -->
{% endblock %}", "FOSUserBundle:Profile:edit.html.twig", "C:\\xampp\\htdocs\\siessoc\\src\\SalexUserBundle/Resources/views/Profile/edit.html.twig");
    }
}
