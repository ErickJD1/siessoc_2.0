<?php

/* tipomovimiento/TipoMovimientonew.html.twig */
class __TwigTemplate_dbb3d90219adf03aaf32bca9604aa6edcc3998d2973692b4fa21ea2d4e90db68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "tipomovimiento/TipoMovimientonew.html.twig", 1);
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
        $__internal_fd74a04019d187f8d155bcaa0d0b9fd7be7e8c67e06de78569879a7407ef30cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd74a04019d187f8d155bcaa0d0b9fd7be7e8c67e06de78569879a7407ef30cf->enter($__internal_fd74a04019d187f8d155bcaa0d0b9fd7be7e8c67e06de78569879a7407ef30cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipomovimiento/TipoMovimientonew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd74a04019d187f8d155bcaa0d0b9fd7be7e8c67e06de78569879a7407ef30cf->leave($__internal_fd74a04019d187f8d155bcaa0d0b9fd7be7e8c67e06de78569879a7407ef30cf_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_b8acd78f8e826cb2a60f179847e9ce33b1bf47a026d74923bfa464a2657614cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8acd78f8e826cb2a60f179847e9ce33b1bf47a026d74923bfa464a2657614cc->enter($__internal_b8acd78f8e826cb2a60f179847e9ce33b1bf47a026d74923bfa464a2657614cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Tipo De Movimiento | ";
        
        $__internal_b8acd78f8e826cb2a60f179847e9ce33b1bf47a026d74923bfa464a2657614cc->leave($__internal_b8acd78f8e826cb2a60f179847e9ce33b1bf47a026d74923bfa464a2657614cc_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_6567fe4157cf8c73bf4010e69846a08997ea9a347e26f36ca9fdc62023646115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6567fe4157cf8c73bf4010e69846a08997ea9a347e26f36ca9fdc62023646115->enter($__internal_6567fe4157cf8c73bf4010e69846a08997ea9a347e26f36ca9fdc62023646115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Registrar Tipo De Movimiento ";
        
        $__internal_6567fe4157cf8c73bf4010e69846a08997ea9a347e26f36ca9fdc62023646115->leave($__internal_6567fe4157cf8c73bf4010e69846a08997ea9a347e26f36ca9fdc62023646115_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ea8371cd717142426f30a07bff7a60af8ca73a41f8d55cd53af39ffb881da2a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea8371cd717142426f30a07bff7a60af8ca73a41f8d55cd53af39ffb881da2a5->enter($__internal_ea8371cd717142426f30a07bff7a60af8ca73a41f8d55cd53af39ffb881da2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Tipo De Movimiento</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                                ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipomovimiento_new"), "method" => "POST"));
        echo "
                                 <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_ncuenta\">Nombre Tipo Movimiento<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombretipo", array()), 'widget');
        echo "
                        ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombretipo", array()), 'errors');
        echo "
                    </div>
                    </div>
                    <br>
                    <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_ncuenta\">Descripcion<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripciontipomov", array()), 'widget');
        echo "
                        ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripciontipomov", array()), 'errors');
        echo "
                    </div>
                    </div>
                    <br>
                    <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_ncuenta\">Clasificación<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clasificacion", array()), 'widget');
        echo "
                        ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clasificacion", array()), 'errors');
        echo "
                    </div>
                    </div>
                     <br>
                    <div class=\"row\">
                    <div class=\"hidden\" class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_ncuenta\">Estado<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadotipomov", array()), 'widget');
        echo "
                        ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadotipomov", array()), 'errors');
        echo "
                    </div>
                    </div>
                    
                    
                                 <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipomovimiento_index");
        echo "\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />


                    </div>
                </div>

                ";
        // line 66
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
        
        $__internal_ea8371cd717142426f30a07bff7a60af8ca73a41f8d55cd53af39ffb881da2a5->leave($__internal_ea8371cd717142426f30a07bff7a60af8ca73a41f8d55cd53af39ffb881da2a5_prof);

    }

    public function getTemplateName()
    {
        return "tipomovimiento/TipoMovimientonew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 66,  150 => 59,  140 => 52,  136 => 51,  126 => 44,  122 => 43,  112 => 36,  108 => 35,  98 => 28,  94 => 27,  87 => 23,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Tipo De Movimiento | {% endblock %}
{% block page_subtitle %}Registrar Tipo De Movimiento {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:70%; margin-top: 2%; margin-left: 15%; background-color:#F3F3F3; border-radius:5px \" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Tipo De Movimiento</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                                {{ form_start(form, {'action': path('tipomovimiento_new'), 'method': 'POST'}) }}
                                 <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_ncuenta\">Nombre Tipo Movimiento<span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(form.nombretipo) }}
                        {{ form_errors(form.nombretipo) }}
                    </div>
                    </div>
                    <br>
                    <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_ncuenta\">Descripcion<span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(form.descripciontipomov) }}
                        {{ form_errors(form.descripciontipomov) }}
                    </div>
                    </div>
                    <br>
                    <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_ncuenta\">Clasificación<span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(form.clasificacion) }}
                        {{ form_errors(form.clasificacion) }}
                    </div>
                    </div>
                     <br>
                    <div class=\"row\">
                    <div class=\"hidden\" class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_ncuenta\">Estado<span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(form.estadotipomov) }}
                        {{ form_errors(form.estadotipomov) }}
                    </div>
                    </div>
                    
                    
                                 <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"{{ path('tipomovimiento_index') }}\" class=\"btn btn-primary btn-xl\">Cancelar</a>
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
", "tipomovimiento/TipoMovimientonew.html.twig", "/home/ubuntu/workspace/app/Resources/views/tipomovimiento/TipoMovimientonew.html.twig");
    }
}
