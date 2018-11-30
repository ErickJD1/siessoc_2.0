<?php

/* :movimiento:Movimientoedit.html.twig */
class __TwigTemplate_ac6f4ce2e966ed76a7060ae0b6540931fe4f72028f9ecf763b97f1a41f7d704e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":movimiento:Movimientoedit.html.twig", 1);
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
        $__internal_c4cb0e29862d9350a4771bd727708b95e8dec12fa7fcb68e871e9fd384268b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4cb0e29862d9350a4771bd727708b95e8dec12fa7fcb68e871e9fd384268b6e->enter($__internal_c4cb0e29862d9350a4771bd727708b95e8dec12fa7fcb68e871e9fd384268b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":movimiento:Movimientoedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4cb0e29862d9350a4771bd727708b95e8dec12fa7fcb68e871e9fd384268b6e->leave($__internal_c4cb0e29862d9350a4771bd727708b95e8dec12fa7fcb68e871e9fd384268b6e_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_3d77cd9100428275ccd119508ac688ce9ef7d28f4241391da4c8e723626ca922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d77cd9100428275ccd119508ac688ce9ef7d28f4241391da4c8e723626ca922->enter($__internal_3d77cd9100428275ccd119508ac688ce9ef7d28f4241391da4c8e723626ca922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Movimiento | ";
        
        $__internal_3d77cd9100428275ccd119508ac688ce9ef7d28f4241391da4c8e723626ca922->leave($__internal_3d77cd9100428275ccd119508ac688ce9ef7d28f4241391da4c8e723626ca922_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_0a1465d9f62f6124e5a09342c1f073c1888f5b27bd78ed2d386f64c7a2556b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a1465d9f62f6124e5a09342c1f073c1888f5b27bd78ed2d386f64c7a2556b90->enter($__internal_0a1465d9f62f6124e5a09342c1f073c1888f5b27bd78ed2d386f64c7a2556b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Modificar Movimiento ";
        
        $__internal_0a1465d9f62f6124e5a09342c1f073c1888f5b27bd78ed2d386f64c7a2556b90->leave($__internal_0a1465d9f62f6124e5a09342c1f073c1888f5b27bd78ed2d386f64c7a2556b90_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_abd21dea1eb9f0495375d9e7007e69f55303bd03506c636354e925c024fad626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abd21dea1eb9f0495375d9e7007e69f55303bd03506c636354e925c024fad626->enter($__internal_abd21dea1eb9f0495375d9e7007e69f55303bd03506c636354e925c024fad626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Modificar Movimiento</h2>
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
        echo "movimiento\" class=\"btn btn-primary btn-xl\">Cancelar</a>
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
        
        $__internal_abd21dea1eb9f0495375d9e7007e69f55303bd03506c636354e925c024fad626->leave($__internal_abd21dea1eb9f0495375d9e7007e69f55303bd03506c636354e925c024fad626_prof);

    }

    public function getTemplateName()
    {
        return ":movimiento:Movimientoedit.html.twig";
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

{% block page_title %} Movimiento | {% endblock %}
{% block page_subtitle %}Modificar Movimiento {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Modificar Movimiento</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>
                
            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
    

                {{ form_start(edit_form) }}
                {{ form_widget(edit_form) }}
                     
                   <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"{{ absolute_url(asset('')) }}movimiento\" class=\"btn btn-primary btn-xl\">Cancelar</a>
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


{% endblock %}", ":movimiento:Movimientoedit.html.twig", "/home/ubuntu/workspace/app/Resources/views/movimiento/Movimientoedit.html.twig");
    }
}
