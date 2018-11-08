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
        $__internal_afec36fb69b8602543bf1dc512dc85d992acd6d696eb55161db52e7a03fbeb5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afec36fb69b8602543bf1dc512dc85d992acd6d696eb55161db52e7a03fbeb5d->enter($__internal_afec36fb69b8602543bf1dc512dc85d992acd6d696eb55161db52e7a03fbeb5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Default/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afec36fb69b8602543bf1dc512dc85d992acd6d696eb55161db52e7a03fbeb5d->leave($__internal_afec36fb69b8602543bf1dc512dc85d992acd6d696eb55161db52e7a03fbeb5d_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_dfb830677b027399ada45ddc8a8610b3fdd09df2b85ebe394e1a7ff4fb20c24a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfb830677b027399ada45ddc8a8610b3fdd09df2b85ebe394e1a7ff4fb20c24a->enter($__internal_dfb830677b027399ada45ddc8a8610b3fdd09df2b85ebe394e1a7ff4fb20c24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_dfb830677b027399ada45ddc8a8610b3fdd09df2b85ebe394e1a7ff4fb20c24a->leave($__internal_dfb830677b027399ada45ddc8a8610b3fdd09df2b85ebe394e1a7ff4fb20c24a_prof);

    }

    // line 51
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_59b1c90cf735f8f782fae97b8197980462c86ad1dcef0102d7090de88d8b1296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b1c90cf735f8f782fae97b8197980462c86ad1dcef0102d7090de88d8b1296->enter($__internal_59b1c90cf735f8f782fae97b8197980462c86ad1dcef0102d7090de88d8b1296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Forms ";
        
        $__internal_59b1c90cf735f8f782fae97b8197980462c86ad1dcef0102d7090de88d8b1296->leave($__internal_59b1c90cf735f8f782fae97b8197980462c86ad1dcef0102d7090de88d8b1296_prof);

    }

    // line 52
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_f788259fd2c57c9cafffccb657f81656ee784f8e172ac8231cc51d9b287b4e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f788259fd2c57c9cafffccb657f81656ee784f8e172ac8231cc51d9b287b4e2a->enter($__internal_f788259fd2c57c9cafffccb657f81656ee784f8e172ac8231cc51d9b287b4e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " demonstration ";
        
        $__internal_f788259fd2c57c9cafffccb657f81656ee784f8e172ac8231cc51d9b287b4e2a->leave($__internal_f788259fd2c57c9cafffccb657f81656ee784f8e172ac8231cc51d9b287b4e2a_prof);

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
{% block page_subtitle %} demonstration {% endblock %}", "@AvanzuAdminTheme/Default/form.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\vendor\\avanzu\\admin-theme-bundle\\Resources\\views\\Default\\form.html.twig");
    }
}
