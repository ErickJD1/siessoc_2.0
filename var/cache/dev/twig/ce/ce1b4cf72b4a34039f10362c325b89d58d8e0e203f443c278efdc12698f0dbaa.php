<?php

/* solicitudpatrocinador/solicitudpatrocinadornew.html.twig */
class __TwigTemplate_9907ab4efec225648b86aa25d5b396ec1facdc55b4e7ab0d159b0f32ffb1adc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "solicitudpatrocinador/solicitudpatrocinadornew.html.twig", 1);
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
        $__internal_02384d73002450a2a86161ce62e967a715728ac8051836c6bc04a42101c0c279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02384d73002450a2a86161ce62e967a715728ac8051836c6bc04a42101c0c279->enter($__internal_02384d73002450a2a86161ce62e967a715728ac8051836c6bc04a42101c0c279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "solicitudpatrocinador/solicitudpatrocinadornew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02384d73002450a2a86161ce62e967a715728ac8051836c6bc04a42101c0c279->leave($__internal_02384d73002450a2a86161ce62e967a715728ac8051836c6bc04a42101c0c279_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_4b356a59c2bddd42935703d0404983aeab35d3314e454197e99e47c86aa7320f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b356a59c2bddd42935703d0404983aeab35d3314e454197e99e47c86aa7320f->enter($__internal_4b356a59c2bddd42935703d0404983aeab35d3314e454197e99e47c86aa7320f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Solicitud";
        
        $__internal_4b356a59c2bddd42935703d0404983aeab35d3314e454197e99e47c86aa7320f->leave($__internal_4b356a59c2bddd42935703d0404983aeab35d3314e454197e99e47c86aa7320f_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_7727e499db3f054f005ef199ddcd9c2d95be897270b4d794f5bf326a22b52e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7727e499db3f054f005ef199ddcd9c2d95be897270b4d794f5bf326a22b52e04->enter($__internal_7727e499db3f054f005ef199ddcd9c2d95be897270b4d794f5bf326a22b52e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Solicitud | Patrocinador";
        
        $__internal_7727e499db3f054f005ef199ddcd9c2d95be897270b4d794f5bf326a22b52e04->leave($__internal_7727e499db3f054f005ef199ddcd9c2d95be897270b4d794f5bf326a22b52e04_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_27ca3685031a14afb9625f1c3e6964e456dea1f54422c8a870e1d36628250328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ca3685031a14afb9625f1c3e6964e456dea1f54422c8a870e1d36628250328->enter($__internal_27ca3685031a14afb9625f1c3e6964e456dea1f54422c8a870e1d36628250328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 8
        echo "
    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:70%; margin-top: 2%; margin-left: 15%; background-color:#F3F3F3; border-radius:5px \" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/document.png"), "html", null, true);
        echo "\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Solicitud</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                ";
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("solicitudpatrocinador_new"), "method" => "POST"));
        echo "
                <div class=\"row\">     

                    <div class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_documento\">Numero de Identidad<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "docidentidadsolipatrocinador", array()), 'widget');
        echo "
                        ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "docidentidadsolipatrocinador", array()), 'errors');
        echo "   
                    </div>
                </div>  
                <br>
                <div class=\"row\">       
                    <div class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_documento\">Telefono<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonosolipatrocinador", array()), 'widget');
        echo "
                        ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonosolipatrocinador", array()), 'errors');
        echo "   
                    </div> 
                </div>
                <br>
                <div class=\"row\">        
                    <div class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_documento\">Monto a Aportar<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montoaportarsolipatrocinador", array()), 'widget');
        echo "
                        ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montoaportarsolipatrocinador", array()), 'errors');
        echo "   
                    </div> 
                </div>
                <br>
                <div class=\"row\">        
                    <div class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_documento\">Dirección<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccionsolipatrocinador", array()), 'widget');
        echo "
                        ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccionsolipatrocinador", array()), 'errors');
        echo "   
                    </div> 
                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("solicitudpatrocinador_index");
        echo "\" class=\"btn btn-warning btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />


                    </div>
                </div>

                ";
        // line 67
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
        
        $__internal_27ca3685031a14afb9625f1c3e6964e456dea1f54422c8a870e1d36628250328->leave($__internal_27ca3685031a14afb9625f1c3e6964e456dea1f54422c8a870e1d36628250328_prof);

    }

    public function getTemplateName()
    {
        return "solicitudpatrocinador/solicitudpatrocinadornew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 67,  150 => 60,  141 => 54,  137 => 53,  127 => 46,  123 => 45,  113 => 38,  109 => 37,  99 => 30,  95 => 29,  87 => 24,  74 => 14,  66 => 8,  60 => 7,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %}Solicitud{% endblock %}
{% block page_subtitle %}Solicitud | Patrocinador{% endblock %}


{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:70%; margin-top: 2%; margin-left: 15%; background-color:#F3F3F3; border-radius:5px \" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/document.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Solicitud</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                {{ form_start(form, {'action': path('solicitudpatrocinador_new'), 'method': 'POST'}) }}
                <div class=\"row\">     

                    <div class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_documento\">Numero de Identidad<span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(form.docidentidadsolipatrocinador) }}
                        {{ form_errors(form.docidentidadsolipatrocinador) }}   
                    </div>
                </div>  
                <br>
                <div class=\"row\">       
                    <div class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_documento\">Telefono<span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(form.telefonosolipatrocinador) }}
                        {{ form_errors(form.telefonosolipatrocinador) }}   
                    </div> 
                </div>
                <br>
                <div class=\"row\">        
                    <div class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_documento\">Monto a Aportar<span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(form.montoaportarsolipatrocinador) }}
                        {{ form_errors(form.montoaportarsolipatrocinador) }}   
                    </div> 
                </div>
                <br>
                <div class=\"row\">        
                    <div class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_documento\">Dirección<span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(form.direccionsolipatrocinador) }}
                        {{ form_errors(form.direccionsolipatrocinador) }}   
                    </div> 
                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"{{ path('solicitudpatrocinador_index') }}\" class=\"btn btn-warning btn-xl\">Cancelar</a>
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


{% endblock %}", "solicitudpatrocinador/solicitudpatrocinadornew.html.twig", "/home/ubuntu/workspace/app/Resources/views/solicitudpatrocinador/solicitudpatrocinadornew.html.twig");
    }
}
