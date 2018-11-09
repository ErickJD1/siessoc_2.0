<?php

/* AvanzuAdminThemeBundle:Default:form.html.twig */
class __TwigTemplate_7071ffb39aacd10bbaf2b1faa5eb052238c44aa7edfc4e46d741af95b55c7031 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:form.html.twig", 1);
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
        $__internal_21ba4a8c679063b247e380b1971542a65c42c5c60dbc9be7722217614fbc99d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21ba4a8c679063b247e380b1971542a65c42c5c60dbc9be7722217614fbc99d5->enter($__internal_21ba4a8c679063b247e380b1971542a65c42c5c60dbc9be7722217614fbc99d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21ba4a8c679063b247e380b1971542a65c42c5c60dbc9be7722217614fbc99d5->leave($__internal_21ba4a8c679063b247e380b1971542a65c42c5c60dbc9be7722217614fbc99d5_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_b0bfcbf665e8084d72df3912afdb7c74ca9822c3700dc888cad74a46c75716c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0bfcbf665e8084d72df3912afdb7c74ca9822c3700dc888cad74a46c75716c6->enter($__internal_b0bfcbf665e8084d72df3912afdb7c74ca9822c3700dc888cad74a46c75716c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_b0bfcbf665e8084d72df3912afdb7c74ca9822c3700dc888cad74a46c75716c6->leave($__internal_b0bfcbf665e8084d72df3912afdb7c74ca9822c3700dc888cad74a46c75716c6_prof);

    }

    // line 51
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_a967e8c2ef1cc2d67fe02a2062db2c74d5880941b89716d67e1178ba271f4387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a967e8c2ef1cc2d67fe02a2062db2c74d5880941b89716d67e1178ba271f4387->enter($__internal_a967e8c2ef1cc2d67fe02a2062db2c74d5880941b89716d67e1178ba271f4387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Forms ";
        
        $__internal_a967e8c2ef1cc2d67fe02a2062db2c74d5880941b89716d67e1178ba271f4387->leave($__internal_a967e8c2ef1cc2d67fe02a2062db2c74d5880941b89716d67e1178ba271f4387_prof);

    }

    // line 52
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_6258ee2cacdfddb9f70c63f3db3700381e718764eb224a6f38f6082e064b97cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6258ee2cacdfddb9f70c63f3db3700381e718764eb224a6f38f6082e064b97cf->enter($__internal_6258ee2cacdfddb9f70c63f3db3700381e718764eb224a6f38f6082e064b97cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " demonstration ";
        
        $__internal_6258ee2cacdfddb9f70c63f3db3700381e718764eb224a6f38f6082e064b97cf->leave($__internal_6258ee2cacdfddb9f70c63f3db3700381e718764eb224a6f38f6082e064b97cf_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Default:form.html.twig";
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
{% block page_subtitle %} demonstration {% endblock %}", "AvanzuAdminThemeBundle:Default:form.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\avanzu\\admin-theme-bundle/Resources/views/Default/form.html.twig");
    }
}
