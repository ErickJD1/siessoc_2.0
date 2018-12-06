<?php

/* :programarpublicacion:publicacionnew.html.twig */
class __TwigTemplate_ae06e7a3dd7f0cb77d4141233c04dc86176b24bf640f0becb3d057b92418e418 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":programarpublicacion:publicacionnew.html.twig", 1);
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
        $__internal_72d23b9b4be1797ce56982fcb32749b29d1219577a5ae29ac94a815db26ccfa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72d23b9b4be1797ce56982fcb32749b29d1219577a5ae29ac94a815db26ccfa8->enter($__internal_72d23b9b4be1797ce56982fcb32749b29d1219577a5ae29ac94a815db26ccfa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":programarpublicacion:publicacionnew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72d23b9b4be1797ce56982fcb32749b29d1219577a5ae29ac94a815db26ccfa8->leave($__internal_72d23b9b4be1797ce56982fcb32749b29d1219577a5ae29ac94a815db26ccfa8_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_c5954832389ae43302ed04a2fba062332b328ba7783a8b49ac5b956039c9ad8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5954832389ae43302ed04a2fba062332b328ba7783a8b49ac5b956039c9ad8f->enter($__internal_c5954832389ae43302ed04a2fba062332b328ba7783a8b49ac5b956039c9ad8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Publicaciones | ";
        
        $__internal_c5954832389ae43302ed04a2fba062332b328ba7783a8b49ac5b956039c9ad8f->leave($__internal_c5954832389ae43302ed04a2fba062332b328ba7783a8b49ac5b956039c9ad8f_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_5d145466fb1f15b87d515715cda5bbb8d8aa6d2e11ff2f998431439960a63c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d145466fb1f15b87d515715cda5bbb8d8aa6d2e11ff2f998431439960a63c94->enter($__internal_5d145466fb1f15b87d515715cda5bbb8d8aa6d2e11ff2f998431439960a63c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Agregar Publicacion ";
        
        $__internal_5d145466fb1f15b87d515715cda5bbb8d8aa6d2e11ff2f998431439960a63c94->leave($__internal_5d145466fb1f15b87d515715cda5bbb8d8aa6d2e11ff2f998431439960a63c94_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_3636a6780355c4094db4b6ca593a4a00eddfd8924024d5b42098204bebfdd444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3636a6780355c4094db4b6ca593a4a00eddfd8924024d5b42098204bebfdd444->enter($__internal_3636a6780355c4094db4b6ca593a4a00eddfd8924024d5b42098204bebfdd444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Bancos</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                  ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programarpublicacion_new"), "method" => "POST"));
        echo "
                  ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
       <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "programarpublicacion\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />


                    </div>
                </div>

                ";
        // line 34
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        
        $__internal_3636a6780355c4094db4b6ca593a4a00eddfd8924024d5b42098204bebfdd444->leave($__internal_3636a6780355c4094db4b6ca593a4a00eddfd8924024d5b42098204bebfdd444_prof);

    }

    public function getTemplateName()
    {
        return ":programarpublicacion:publicacionnew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 34,  97 => 27,  91 => 24,  87 => 23,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Publicaciones | {% endblock %}
{% block page_subtitle %}Agregar Publicacion {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Bancos</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                  {{ form_start(form, {'action': path('programarpublicacion_new'), 'method': 'POST'}) }}
                  {{ form_widget(form) }}
       <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"{{ absolute_url(asset('')) }}programarpublicacion\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />


                    </div>
                </div>

                {{ form_end(form) }}
                <br>
                <br>
            </div>
            </br>
        </div>
        <br>
        <br>
    </div>


{% endblock %}
", ":programarpublicacion:publicacionnew.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/programarpublicacion/publicacionnew.html.twig");
    }
}
