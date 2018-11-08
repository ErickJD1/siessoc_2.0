<?php

/* @SalexUser/Profile/edit.html.twig */
class __TwigTemplate_ed2d2b2d8d2b9a7a2fd6b2e06d48aab87f3c1d1ac4a02472ad1994dcc3a19c76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "@SalexUser/Profile/edit.html.twig", 1);
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
        $__internal_6196ba37304084b2e83643190e5d27f1b863980b422674da085fa01497415ddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6196ba37304084b2e83643190e5d27f1b863980b422674da085fa01497415ddc->enter($__internal_6196ba37304084b2e83643190e5d27f1b863980b422674da085fa01497415ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalexUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6196ba37304084b2e83643190e5d27f1b863980b422674da085fa01497415ddc->leave($__internal_6196ba37304084b2e83643190e5d27f1b863980b422674da085fa01497415ddc_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_0faa1a6ff3d0ebafefddd5cb96624d71518c677fdb14d23011f11648a6ab3ca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0faa1a6ff3d0ebafefddd5cb96624d71518c677fdb14d23011f11648a6ab3ca0->enter($__internal_0faa1a6ff3d0ebafefddd5cb96624d71518c677fdb14d23011f11648a6ab3ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Edit Profile  ";
        
        $__internal_0faa1a6ff3d0ebafefddd5cb96624d71518c677fdb14d23011f11648a6ab3ca0->leave($__internal_0faa1a6ff3d0ebafefddd5cb96624d71518c677fdb14d23011f11648a6ab3ca0_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_1459040377e74052758e44a35cc807f395d77d101dd82474db15fff984a7f8c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1459040377e74052758e44a35cc807f395d77d101dd82474db15fff984a7f8c1->enter($__internal_1459040377e74052758e44a35cc807f395d77d101dd82474db15fff984a7f8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getName", array(), "method"), "html", null, true);
        echo " ";
        
        $__internal_1459040377e74052758e44a35cc807f395d77d101dd82474db15fff984a7f8c1->leave($__internal_1459040377e74052758e44a35cc807f395d77d101dd82474db15fff984a7f8c1_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_1868702a672a8d4e3d2a2e80b851da43857343fd7d9e672202deb8610af5f337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1868702a672a8d4e3d2a2e80b851da43857343fd7d9e672202deb8610af5f337->enter($__internal_1868702a672a8d4e3d2a2e80b851da43857343fd7d9e672202deb8610af5f337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t<div class=\"box box-primary\">
\t\t\t";
        // line 10
        $this->loadTemplate("SalexUserBundle:Profile:edit_content.html.twig", "@SalexUser/Profile/edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t</div> <!-- End of box-primary -->
\t\t</div> <!-- end of col-md-6 -->
\t</div> <!-- End of Row -->
";
        
        $__internal_1868702a672a8d4e3d2a2e80b851da43857343fd7d9e672202deb8610af5f337->leave($__internal_1868702a672a8d4e3d2a2e80b851da43857343fd7d9e672202deb8610af5f337_prof);

    }

    public function getTemplateName()
    {
        return "@SalexUser/Profile/edit.html.twig";
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
{% endblock %}", "@SalexUser/Profile/edit.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\src\\SalexUserBundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
