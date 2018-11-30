<?php

/* :actividad:actividadedit.html.twig */
class __TwigTemplate_4ddcc5a38e9cb0f8061faebe5ce36bd46bde422a0baa1915cc483cb5e38fe20d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":actividad:actividadedit.html.twig", 1);
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
        $__internal_abdf54404c5fc8d859ea140f6eb05f5ace4f7f65da2fa38532cff4097d1a8cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abdf54404c5fc8d859ea140f6eb05f5ace4f7f65da2fa38532cff4097d1a8cb3->enter($__internal_abdf54404c5fc8d859ea140f6eb05f5ace4f7f65da2fa38532cff4097d1a8cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":actividad:actividadedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abdf54404c5fc8d859ea140f6eb05f5ace4f7f65da2fa38532cff4097d1a8cb3->leave($__internal_abdf54404c5fc8d859ea140f6eb05f5ace4f7f65da2fa38532cff4097d1a8cb3_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_849a4f26c726c925cb2dcdcf9934e5faeafba299409735927941314c32267b61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_849a4f26c726c925cb2dcdcf9934e5faeafba299409735927941314c32267b61->enter($__internal_849a4f26c726c925cb2dcdcf9934e5faeafba299409735927941314c32267b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Actividades | ";
        
        $__internal_849a4f26c726c925cb2dcdcf9934e5faeafba299409735927941314c32267b61->leave($__internal_849a4f26c726c925cb2dcdcf9934e5faeafba299409735927941314c32267b61_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_270661fcc3697454ca8d12242ab686be75f33159b4b67503982768e13c207889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_270661fcc3697454ca8d12242ab686be75f33159b4b67503982768e13c207889->enter($__internal_270661fcc3697454ca8d12242ab686be75f33159b4b67503982768e13c207889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Modificar Actividad ";
        
        $__internal_270661fcc3697454ca8d12242ab686be75f33159b4b67503982768e13c207889->leave($__internal_270661fcc3697454ca8d12242ab686be75f33159b4b67503982768e13c207889_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_2670ab5cd7f74349f00f88daacd07a4cb4ff080ed9131f6779389af10a02d60d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2670ab5cd7f74349f00f88daacd07a4cb4ff080ed9131f6779389af10a02d60d->enter($__internal_2670ab5cd7f74349f00f88daacd07a4cb4ff080ed9131f6779389af10a02d60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Banco.png"), "html", null, true);
        echo "\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Modificar Actividad</h2>
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
        
        $__internal_2670ab5cd7f74349f00f88daacd07a4cb4ff080ed9131f6779389af10a02d60d->leave($__internal_2670ab5cd7f74349f00f88daacd07a4cb4ff080ed9131f6779389af10a02d60d_prof);

    }

    public function getTemplateName()
    {
        return ":actividad:actividadedit.html.twig";
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

{% block page_title %} Actividades | {% endblock %}
{% block page_subtitle %}Modificar Actividad {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Modificar Actividad</h2>
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
", ":actividad:actividadedit.html.twig", "/home/ubuntu/workspace/app/Resources/views/actividad/actividadedit.html.twig");
    }
}
