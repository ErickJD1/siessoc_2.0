<?php

/* cuenta/Cuentaedit.html.twig */
class __TwigTemplate_cc3009bf9cf571978fe2bf56d4e7dc00156f89fbcccc244d57eada97bd093888 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "cuenta/Cuentaedit.html.twig", 1);
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
        $__internal_babf29f9b8b4b92d41dab43957fd0aa9791db53a6b9ae90051b18905cc356a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_babf29f9b8b4b92d41dab43957fd0aa9791db53a6b9ae90051b18905cc356a18->enter($__internal_babf29f9b8b4b92d41dab43957fd0aa9791db53a6b9ae90051b18905cc356a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cuenta/Cuentaedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_babf29f9b8b4b92d41dab43957fd0aa9791db53a6b9ae90051b18905cc356a18->leave($__internal_babf29f9b8b4b92d41dab43957fd0aa9791db53a6b9ae90051b18905cc356a18_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_fee808a522e58df9a222155d3fe1fcd42e91cbbffd00cb8b17e4619235d65948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee808a522e58df9a222155d3fe1fcd42e91cbbffd00cb8b17e4619235d65948->enter($__internal_fee808a522e58df9a222155d3fe1fcd42e91cbbffd00cb8b17e4619235d65948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Cuentas | ";
        
        $__internal_fee808a522e58df9a222155d3fe1fcd42e91cbbffd00cb8b17e4619235d65948->leave($__internal_fee808a522e58df9a222155d3fe1fcd42e91cbbffd00cb8b17e4619235d65948_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_3f616caa9643457253f471d1da58a5affd801201b6b1012187cac647114445d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f616caa9643457253f471d1da58a5affd801201b6b1012187cac647114445d7->enter($__internal_3f616caa9643457253f471d1da58a5affd801201b6b1012187cac647114445d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Modificar Cuenta ";
        
        $__internal_3f616caa9643457253f471d1da58a5affd801201b6b1012187cac647114445d7->leave($__internal_3f616caa9643457253f471d1da58a5affd801201b6b1012187cac647114445d7_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_eaf5f0a79dbc002f6e3eb06d090bd49eaab8c60a021abd8fbb3fd56d873abbcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaf5f0a79dbc002f6e3eb06d090bd49eaab8c60a021abd8fbb3fd56d873abbcd->enter($__internal_eaf5f0a79dbc002f6e3eb06d090bd49eaab8c60a021abd8fbb3fd56d873abbcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/dollar.png"), "html", null, true);
        echo "\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Modificar Cuenta</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>
                
            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
    

                ";
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
                     
                   <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "cuenta\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />


                    </div>
                </div>
                     ";
        // line 35
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                     
                
                <br>
                <br>
            </div>
            </br>
        </div>
        <br>
        <br>
    </div>


";
        
        $__internal_eaf5f0a79dbc002f6e3eb06d090bd49eaab8c60a021abd8fbb3fd56d873abbcd->leave($__internal_eaf5f0a79dbc002f6e3eb06d090bd49eaab8c60a021abd8fbb3fd56d873abbcd_prof);

    }

    public function getTemplateName()
    {
        return "cuenta/Cuentaedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 35,  99 => 29,  92 => 25,  88 => 24,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Cuentas | {% endblock %}
{% block page_subtitle %}Modificar Cuenta {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/dollar.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Modificar Cuenta</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>
                
            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
    

                {{ form_start(edit_form) }}
                {{ form_widget(edit_form) }}
                     
                   <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"{{ absolute_url(asset('')) }}cuenta\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />


                    </div>
                </div>
                     {{ form_end(edit_form) }}
                     
                
                <br>
                <br>
            </div>
            </br>
        </div>
        <br>
        <br>
    </div>


{% endblock %}", "cuenta/Cuentaedit.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\cuenta\\Cuentaedit.html.twig");
    }
}
