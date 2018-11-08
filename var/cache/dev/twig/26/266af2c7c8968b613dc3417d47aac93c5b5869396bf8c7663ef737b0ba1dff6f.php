<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_64b2456b2cc18dcb3ef106cd4e42355bb41a01a71d70baa224f7275bd0ee63e8 extends Twig_Template
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
        $__internal_7aeac80bb5bf90f51a9458f94721870f45d45ed690298195ea7969fbd4506081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aeac80bb5bf90f51a9458f94721870f45d45ed690298195ea7969fbd4506081->enter($__internal_7aeac80bb5bf90f51a9458f94721870f45d45ed690298195ea7969fbd4506081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aeac80bb5bf90f51a9458f94721870f45d45ed690298195ea7969fbd4506081->leave($__internal_7aeac80bb5bf90f51a9458f94721870f45d45ed690298195ea7969fbd4506081_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_b9002f6400f7631e2badd85d651d549523bb2498b9efcacd07518b58a52657c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9002f6400f7631e2badd85d651d549523bb2498b9efcacd07518b58a52657c7->enter($__internal_b9002f6400f7631e2badd85d651d549523bb2498b9efcacd07518b58a52657c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Edit Profile  ";
        
        $__internal_b9002f6400f7631e2badd85d651d549523bb2498b9efcacd07518b58a52657c7->leave($__internal_b9002f6400f7631e2badd85d651d549523bb2498b9efcacd07518b58a52657c7_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_7e59a56c5e7e730e58b4a7db765104950efc685ff1e5e7e02c1d6595d74a09d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e59a56c5e7e730e58b4a7db765104950efc685ff1e5e7e02c1d6595d74a09d4->enter($__internal_7e59a56c5e7e730e58b4a7db765104950efc685ff1e5e7e02c1d6595d74a09d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getName", array(), "method"), "html", null, true);
        echo " ";
        
        $__internal_7e59a56c5e7e730e58b4a7db765104950efc685ff1e5e7e02c1d6595d74a09d4->leave($__internal_7e59a56c5e7e730e58b4a7db765104950efc685ff1e5e7e02c1d6595d74a09d4_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c29ab1fed5138131b9d63f2e16370ed25962dcd1b946c93fa8cd58b70c8c7627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c29ab1fed5138131b9d63f2e16370ed25962dcd1b946c93fa8cd58b70c8c7627->enter($__internal_c29ab1fed5138131b9d63f2e16370ed25962dcd1b946c93fa8cd58b70c8c7627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_c29ab1fed5138131b9d63f2e16370ed25962dcd1b946c93fa8cd58b70c8c7627->leave($__internal_c29ab1fed5138131b9d63f2e16370ed25962dcd1b946c93fa8cd58b70c8c7627_prof);

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
