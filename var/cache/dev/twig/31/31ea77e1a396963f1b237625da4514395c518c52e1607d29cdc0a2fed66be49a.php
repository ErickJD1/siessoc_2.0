<?php

/* colaboracionmonetaria/Colaboracionmonetariaedit.html.twig */
class __TwigTemplate_be1a695fe18c0551fd7f83179d49bd78c01aa31815326e37e89eef5d6860de1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "colaboracionmonetaria/Colaboracionmonetariaedit.html.twig", 1);
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
        $__internal_cc2757a06cde4a2ac30b6ce766844a1777a8169cd8a471fbb6938f3258c000cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc2757a06cde4a2ac30b6ce766844a1777a8169cd8a471fbb6938f3258c000cd->enter($__internal_cc2757a06cde4a2ac30b6ce766844a1777a8169cd8a471fbb6938f3258c000cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "colaboracionmonetaria/Colaboracionmonetariaedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc2757a06cde4a2ac30b6ce766844a1777a8169cd8a471fbb6938f3258c000cd->leave($__internal_cc2757a06cde4a2ac30b6ce766844a1777a8169cd8a471fbb6938f3258c000cd_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_5844d91e6c71f4f78d8bab0027e45e4041d088022e36d336735fed64a9c63432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5844d91e6c71f4f78d8bab0027e45e4041d088022e36d336735fed64a9c63432->enter($__internal_5844d91e6c71f4f78d8bab0027e45e4041d088022e36d336735fed64a9c63432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Colaboracion Monetaria | ";
        
        $__internal_5844d91e6c71f4f78d8bab0027e45e4041d088022e36d336735fed64a9c63432->leave($__internal_5844d91e6c71f4f78d8bab0027e45e4041d088022e36d336735fed64a9c63432_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_aee815ee1542183909e650abb84fb172e7b48044edfb815be35f311f4ef3051d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee815ee1542183909e650abb84fb172e7b48044edfb815be35f311f4ef3051d->enter($__internal_aee815ee1542183909e650abb84fb172e7b48044edfb815be35f311f4ef3051d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Registro De Colaboracion Monetaria ";
        
        $__internal_aee815ee1542183909e650abb84fb172e7b48044edfb815be35f311f4ef3051d->leave($__internal_aee815ee1542183909e650abb84fb172e7b48044edfb815be35f311f4ef3051d_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e9f754dd18677d1c14c1193e301949e9e2cbced58853d823d96dc2031aade43e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9f754dd18677d1c14c1193e301949e9e2cbced58853d823d96dc2031aade43e->enter($__internal_e9f754dd18677d1c14c1193e301949e9e2cbced58853d823d96dc2031aade43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
    <div class=\"box box-primary\" style=\"width: 100%;\">

        <div  style=\"width:90%; margin-top: 5%; margin-left: 5%; background-color:#F3F3F3; border-radius:5px \" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Banco.png"), "html", null, true);
        echo "\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Tipo De Colaboracion</h2>
                <h4 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body; margin-top: -3px;\">Complete los campos requeridos:<span style=\"font-size: 25;color: red\" >*</span></h4>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 80%; margin-top: 3%; margin-bottom: 3%\">

    ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
    <div class=\"row\">
        
        <div class=\"col col-md-8\">
            <label for=\"form_Tipocolaboracion\">Nombre Tipo Colaboracion<span style=\"font-siez: 25; color: red\">*</span></label>
              ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcioncolaboracion", array()), 'widget');
        echo "
              ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcioncolaboracion", array()), 'errors');
        echo "
        </div>
        </div>
        <br>
        
         <div class=\"row\">
        
        <div class=\"col col-md-4\">
            <label for=\"form_MontoFijo\">Monto Fijo De Colaboracion<span style=\"font-siez: 25; color: red\">*</span></label>
              ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "montomescolaboracion", array()), 'widget');
        echo "
              ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "montomescolaboracion", array()), 'errors');
        echo "
        </div>
        </div>
        <br>
        
        <div class=\"row\">
            <div class=\"col col-md-3\" align=\"left\">
                <label for=\"form_Estado\">Activo</label>
                    ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estadocolaboracion", array()), 'widget');
        echo "
                    ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estadocolaboracion", array()), 'errors');
        echo "   
            </div> 
        </div>
        
        <br>
         <div class=\"row\">
            <div class=\"col col-md-12\" align=\"right\">
                <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("colaboracionmonetaria_index");
        echo "\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                  <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />
             </div>
         </div>
     
    ";
        // line 60
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>

 ";
        
        $__internal_e9f754dd18677d1c14c1193e301949e9e2cbced58853d823d96dc2031aade43e->leave($__internal_e9f754dd18677d1c14c1193e301949e9e2cbced58853d823d96dc2031aade43e_prof);

    }

    public function getTemplateName()
    {
        return "colaboracionmonetaria/Colaboracionmonetariaedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 60,  140 => 55,  130 => 48,  126 => 47,  115 => 39,  111 => 38,  99 => 29,  95 => 28,  87 => 23,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Colaboracion Monetaria | {% endblock %}
{% block page_subtitle %}Registro De Colaboracion Monetaria {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%;\">

        <div  style=\"width:90%; margin-top: 5%; margin-left: 5%; background-color:#F3F3F3; border-radius:5px \" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Tipo De Colaboracion</h2>
                <h4 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body; margin-top: -3px;\">Complete los campos requeridos:<span style=\"font-size: 25;color: red\" >*</span></h4>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 80%; margin-top: 3%; margin-bottom: 3%\">

    {{ form_start(edit_form) }}
    <div class=\"row\">
        
        <div class=\"col col-md-8\">
            <label for=\"form_Tipocolaboracion\">Nombre Tipo Colaboracion<span style=\"font-siez: 25; color: red\">*</span></label>
              {{ form_widget(edit_form.descripcioncolaboracion) }}
              {{ form_errors(edit_form.descripcioncolaboracion) }}
        </div>
        </div>
        <br>
        
         <div class=\"row\">
        
        <div class=\"col col-md-4\">
            <label for=\"form_MontoFijo\">Monto Fijo De Colaboracion<span style=\"font-siez: 25; color: red\">*</span></label>
              {{ form_widget(edit_form.montomescolaboracion) }}
              {{ form_errors(edit_form.montomescolaboracion) }}
        </div>
        </div>
        <br>
        
        <div class=\"row\">
            <div class=\"col col-md-3\" align=\"left\">
                <label for=\"form_Estado\">Activo</label>
                    {{ form_widget(edit_form.estadocolaboracion) }}
                    {{ form_errors(edit_form.estadocolaboracion) }}   
            </div> 
        </div>
        
        <br>
         <div class=\"row\">
            <div class=\"col col-md-12\" align=\"right\">
                <a href=\"{{ path('colaboracionmonetaria_index') }}\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                  <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />
             </div>
         </div>
     
    {{ form_end(edit_form) }}
            </div>
        </div>
    </div>

 {% endblock %}

", "colaboracionmonetaria/Colaboracionmonetariaedit.html.twig", "/home/ubuntu/workspace/app/Resources/views/colaboracionmonetaria/Colaboracionmonetariaedit.html.twig");
    }
}
