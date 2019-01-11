<?php

/* banco/Bancoedit.html.twig */
class __TwigTemplate_6ca5bd049719a12b9c70736cd327dcff5cde70de7f2c4995d13d08e2d2ce1790 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "banco/Bancoedit.html.twig", 1);
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
        $__internal_6db2679f35f74a85d5c8715a3f6926e2caeb471cbed2633cae3ee82ee86387e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db2679f35f74a85d5c8715a3f6926e2caeb471cbed2633cae3ee82ee86387e2->enter($__internal_6db2679f35f74a85d5c8715a3f6926e2caeb471cbed2633cae3ee82ee86387e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "banco/Bancoedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6db2679f35f74a85d5c8715a3f6926e2caeb471cbed2633cae3ee82ee86387e2->leave($__internal_6db2679f35f74a85d5c8715a3f6926e2caeb471cbed2633cae3ee82ee86387e2_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_444ee40ab70a6c38592999ec0a64c0c8fb383c3e320963baf0e3f33a5731ae86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_444ee40ab70a6c38592999ec0a64c0c8fb383c3e320963baf0e3f33a5731ae86->enter($__internal_444ee40ab70a6c38592999ec0a64c0c8fb383c3e320963baf0e3f33a5731ae86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Catálogos";
        
        $__internal_444ee40ab70a6c38592999ec0a64c0c8fb383c3e320963baf0e3f33a5731ae86->leave($__internal_444ee40ab70a6c38592999ec0a64c0c8fb383c3e320963baf0e3f33a5731ae86_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_26c0b18f47e14dd0b53666e9095dd5bb1bbcd322e36b02f5d4fe0ef811ccb482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c0b18f47e14dd0b53666e9095dd5bb1bbcd322e36b02f5d4fe0ef811ccb482->enter($__internal_26c0b18f47e14dd0b53666e9095dd5bb1bbcd322e36b02f5d4fe0ef811ccb482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Banco | Editar";
        
        $__internal_26c0b18f47e14dd0b53666e9095dd5bb1bbcd322e36b02f5d4fe0ef811ccb482->leave($__internal_26c0b18f47e14dd0b53666e9095dd5bb1bbcd322e36b02f5d4fe0ef811ccb482_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e4db09158a01e81c53806b4f05c29eeb320ae848d5eec5ed202c66d53991afa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4db09158a01e81c53806b4f05c29eeb320ae848d5eec5ed202c66d53991afa5->enter($__internal_e4db09158a01e81c53806b4f05c29eeb320ae848d5eec5ed202c66d53991afa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:70%; margin-top: 2%; margin-left: 15%; background-color:#F3F3F3; border-radius:5px \" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Banco.png"), "html", null, true);
        echo "\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Modificar Bancos</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>
                
            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
    
                     ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                     ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
                     
                <div align=\"right\">
                <input  class=\"btn btn-primary btn-xl\" type=\"submit\"  value=\"Guardar\" />
                </div>
                     ";
        // line 29
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
        
        $__internal_e4db09158a01e81c53806b4f05c29eeb320ae848d5eec5ed202c66d53991afa5->leave($__internal_e4db09158a01e81c53806b4f05c29eeb320ae848d5eec5ed202c66d53991afa5_prof);

    }

    public function getTemplateName()
    {
        return "banco/Bancoedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 29,  91 => 24,  87 => 23,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %}Catálogos{% endblock %}
{% block page_subtitle %}Banco | Editar{% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:70%; margin-top: 2%; margin-left: 15%; background-color:#F3F3F3; border-radius:5px \" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Modificar Bancos</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>
                
            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
    
                     {{ form_start(edit_form) }}
                     {{ form_widget(edit_form) }}
                     
                <div align=\"right\">
                <input  class=\"btn btn-primary btn-xl\" type=\"submit\"  value=\"Guardar\" />
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


{% endblock %}
", "banco/Bancoedit.html.twig", "/home/ubuntu/workspace/app/Resources/views/banco/Bancoedit.html.twig");
    }
}
