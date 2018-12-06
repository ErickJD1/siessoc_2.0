<?php

/* :tipomovimiento:TipoMovimientoedit.html.twig */
class __TwigTemplate_47832c06dadbaa7617fb7120630bba46c5b67da3b6fac5a3b9992c5b1c56ad1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":tipomovimiento:TipoMovimientoedit.html.twig", 1);
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
        $__internal_d51ab409000c8b0ca29a83aac61244ae3baefc2056898cad1970da5c86c0d0ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d51ab409000c8b0ca29a83aac61244ae3baefc2056898cad1970da5c86c0d0ed->enter($__internal_d51ab409000c8b0ca29a83aac61244ae3baefc2056898cad1970da5c86c0d0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipomovimiento:TipoMovimientoedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d51ab409000c8b0ca29a83aac61244ae3baefc2056898cad1970da5c86c0d0ed->leave($__internal_d51ab409000c8b0ca29a83aac61244ae3baefc2056898cad1970da5c86c0d0ed_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_d67120a4292a0e073c09f203ddb102e4d63556260c4a6a6b9d6852fa3f60e013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d67120a4292a0e073c09f203ddb102e4d63556260c4a6a6b9d6852fa3f60e013->enter($__internal_d67120a4292a0e073c09f203ddb102e4d63556260c4a6a6b9d6852fa3f60e013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Movimientos | ";
        
        $__internal_d67120a4292a0e073c09f203ddb102e4d63556260c4a6a6b9d6852fa3f60e013->leave($__internal_d67120a4292a0e073c09f203ddb102e4d63556260c4a6a6b9d6852fa3f60e013_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_423ed47c50b681ce20410b7a006de056ad385186eafbf95f73f3fc9f29be16fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_423ed47c50b681ce20410b7a006de056ad385186eafbf95f73f3fc9f29be16fc->enter($__internal_423ed47c50b681ce20410b7a006de056ad385186eafbf95f73f3fc9f29be16fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Modificar Movimiento ";
        
        $__internal_423ed47c50b681ce20410b7a006de056ad385186eafbf95f73f3fc9f29be16fc->leave($__internal_423ed47c50b681ce20410b7a006de056ad385186eafbf95f73f3fc9f29be16fc_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_8838fcbc9a5db50d303c281365d6292b81335a3e9b0c803772b31935bf15acb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8838fcbc9a5db50d303c281365d6292b81335a3e9b0c803772b31935bf15acb8->enter($__internal_8838fcbc9a5db50d303c281365d6292b81335a3e9b0c803772b31935bf15acb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
                     
                   <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "tipomovimiento\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />


                    </div>
                </div>
                     ";
        // line 34
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
        
        $__internal_8838fcbc9a5db50d303c281365d6292b81335a3e9b0c803772b31935bf15acb8->leave($__internal_8838fcbc9a5db50d303c281365d6292b81335a3e9b0c803772b31935bf15acb8_prof);

    }

    public function getTemplateName()
    {
        return ":tipomovimiento:TipoMovimientoedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 34,  98 => 28,  91 => 24,  87 => 23,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Movimientos | {% endblock %}
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
                        <a href=\"{{ absolute_url(asset('')) }}tipomovimiento\" class=\"btn btn-primary btn-xl\">Cancelar</a>
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


{% endblock %}", ":tipomovimiento:TipoMovimientoedit.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/tipomovimiento/TipoMovimientoedit.html.twig");
    }
}
