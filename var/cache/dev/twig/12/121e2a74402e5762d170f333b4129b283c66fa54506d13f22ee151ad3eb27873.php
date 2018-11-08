<?php

/* @AvanzuAdminTheme/Default/form.html.twig */
class __TwigTemplate_3c86b89397ae5b55c6e24d99806232489d86b281cbadc6494670cd7aaba31d42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "@AvanzuAdminTheme/Default/form.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9abf7f77663a41f0217cdf4bbac7bc3d227709ef5dae7efd166c9cd419ec008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9abf7f77663a41f0217cdf4bbac7bc3d227709ef5dae7efd166c9cd419ec008->enter($__internal_a9abf7f77663a41f0217cdf4bbac7bc3d227709ef5dae7efd166c9cd419ec008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Default/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9abf7f77663a41f0217cdf4bbac7bc3d227709ef5dae7efd166c9cd419ec008->leave($__internal_a9abf7f77663a41f0217cdf4bbac7bc3d227709ef5dae7efd166c9cd419ec008_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_a4e955fb8a589763875c9e77edf9cf75740a8e63c3dd35aeee0adf548115ef85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4e955fb8a589763875c9e77edf9cf75740a8e63c3dd35aeee0adf548115ef85->enter($__internal_a4e955fb8a589763875c9e77edf9cf75740a8e63c3dd35aeee0adf548115ef85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-md-4\">


        </div>
        <div class=\"col-md-4\">

        </div>
        <div class=\"col-md-4\">

        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">

            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Form Theme</h3>
                </div>
                <div class=\"box-body\">
                    ";
        // line 26
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
                </div>
                <div class=\"box-footer clearfix\">

                        <button type=\"reset\" class=\"btn btn-warning pull-left\"><i class=\"fa fa-times\"></i> Cancel</button>
                        <button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i> Submit</button>


                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-solid box-primary\">
                ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "box_header", array(0 => "built from macro", 1 => true, 2 => false, 3 => "primary"), "method"), "html", null, true);
        echo "
                <div class=\"box-body\">
                    some content...
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_a4e955fb8a589763875c9e77edf9cf75740a8e63c3dd35aeee0adf548115ef85->leave($__internal_a4e955fb8a589763875c9e77edf9cf75740a8e63c3dd35aeee0adf548115ef85_prof);

    }

    // line 51
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_b5d3e7edbcfcaaa33fa2a1a9bfed795200712651a4795c9e1aa3b787ceb591d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d3e7edbcfcaaa33fa2a1a9bfed795200712651a4795c9e1aa3b787ceb591d1->enter($__internal_b5d3e7edbcfcaaa33fa2a1a9bfed795200712651a4795c9e1aa3b787ceb591d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Forms ";
        
        $__internal_b5d3e7edbcfcaaa33fa2a1a9bfed795200712651a4795c9e1aa3b787ceb591d1->leave($__internal_b5d3e7edbcfcaaa33fa2a1a9bfed795200712651a4795c9e1aa3b787ceb591d1_prof);

    }

    // line 52
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_3a959f8bff5a939ad49d6ba4ea68203e616afb1f2bb4f711d1d821c671f77c1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a959f8bff5a939ad49d6ba4ea68203e616afb1f2bb4f711d1d821c671f77c1f->enter($__internal_3a959f8bff5a939ad49d6ba4ea68203e616afb1f2bb4f711d1d821c671f77c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " demonstration ";
        
        $__internal_3a959f8bff5a939ad49d6ba4ea68203e616afb1f2bb4f711d1d821c671f77c1f->leave($__internal_3a959f8bff5a939ad49d6ba4ea68203e616afb1f2bb4f711d1d821c671f77c1f_prof);

    }

    public function getTemplateName()
    {
        return "@AvanzuAdminTheme/Default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 52,  100 => 51,  83 => 40,  66 => 26,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}

{% block page_content %}

    <div class=\"row\">
        <div class=\"col-md-4\">


        </div>
        <div class=\"col-md-4\">

        </div>
        <div class=\"col-md-4\">

        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">

            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Form Theme</h3>
                </div>
                <div class=\"box-body\">
                    {{ form(form) }}
                </div>
                <div class=\"box-footer clearfix\">

                        <button type=\"reset\" class=\"btn btn-warning pull-left\"><i class=\"fa fa-times\"></i> Cancel</button>
                        <button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i> Submit</button>


                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-solid box-primary\">
                {{ macro.box_header('built from macro', true, false, 'primary') }}
                <div class=\"box-body\">
                    some content...
                </div>
            </div>
        </div>
    </div>


{% endblock %}

{% block page_title %} Forms {% endblock %}
{% block page_subtitle %} demonstration {% endblock %}", "@AvanzuAdminTheme/Default/form.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\avanzu\\admin-theme-bundle\\Resources\\views\\Default\\form.html.twig");
    }
}
