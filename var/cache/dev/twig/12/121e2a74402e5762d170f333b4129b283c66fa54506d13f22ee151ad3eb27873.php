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
        $__internal_fc369e3e19a24e514ecc8bcc8cff8b58e39f3b8986af37934901b867db4c6548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc369e3e19a24e514ecc8bcc8cff8b58e39f3b8986af37934901b867db4c6548->enter($__internal_fc369e3e19a24e514ecc8bcc8cff8b58e39f3b8986af37934901b867db4c6548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Default/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc369e3e19a24e514ecc8bcc8cff8b58e39f3b8986af37934901b867db4c6548->leave($__internal_fc369e3e19a24e514ecc8bcc8cff8b58e39f3b8986af37934901b867db4c6548_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_9e1561dce6d89f49648150619ff1ecdd9da1fdff0b487fac3423f6c56b1c67cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1561dce6d89f49648150619ff1ecdd9da1fdff0b487fac3423f6c56b1c67cc->enter($__internal_9e1561dce6d89f49648150619ff1ecdd9da1fdff0b487fac3423f6c56b1c67cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_9e1561dce6d89f49648150619ff1ecdd9da1fdff0b487fac3423f6c56b1c67cc->leave($__internal_9e1561dce6d89f49648150619ff1ecdd9da1fdff0b487fac3423f6c56b1c67cc_prof);

    }

    // line 51
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_449ee7c155219588fd9ee225a2d494ea7edbf5ee09415284ce74f5bb62c53377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_449ee7c155219588fd9ee225a2d494ea7edbf5ee09415284ce74f5bb62c53377->enter($__internal_449ee7c155219588fd9ee225a2d494ea7edbf5ee09415284ce74f5bb62c53377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Forms ";
        
        $__internal_449ee7c155219588fd9ee225a2d494ea7edbf5ee09415284ce74f5bb62c53377->leave($__internal_449ee7c155219588fd9ee225a2d494ea7edbf5ee09415284ce74f5bb62c53377_prof);

    }

    // line 52
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_9068b5dd3633fbec9259dff4fd5128711086875608c4c3f50d7a64eb559b8dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9068b5dd3633fbec9259dff4fd5128711086875608c4c3f50d7a64eb559b8dc3->enter($__internal_9068b5dd3633fbec9259dff4fd5128711086875608c4c3f50d7a64eb559b8dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " demonstration ";
        
        $__internal_9068b5dd3633fbec9259dff4fd5128711086875608c4c3f50d7a64eb559b8dc3->leave($__internal_9068b5dd3633fbec9259dff4fd5128711086875608c4c3f50d7a64eb559b8dc3_prof);

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
