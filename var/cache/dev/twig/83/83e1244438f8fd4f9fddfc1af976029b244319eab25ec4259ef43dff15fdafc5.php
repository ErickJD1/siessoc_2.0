<?php

/* :tipocuenta:TipoCuentanew.html.twig */
class __TwigTemplate_cac9c1dab24b19ca9ef4672b89be74736dc89082529656cb62709ea82549ed42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":tipocuenta:TipoCuentanew.html.twig", 1);
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
        $__internal_bba05f7868213469256af1395e1f1d3e406d535bbacb7186673a00c036145f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bba05f7868213469256af1395e1f1d3e406d535bbacb7186673a00c036145f64->enter($__internal_bba05f7868213469256af1395e1f1d3e406d535bbacb7186673a00c036145f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipocuenta:TipoCuentanew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bba05f7868213469256af1395e1f1d3e406d535bbacb7186673a00c036145f64->leave($__internal_bba05f7868213469256af1395e1f1d3e406d535bbacb7186673a00c036145f64_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_cc168104e988fd5ee330e03dda6b9c3191be02fdbf50f74cc5103696c32727c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc168104e988fd5ee330e03dda6b9c3191be02fdbf50f74cc5103696c32727c8->enter($__internal_cc168104e988fd5ee330e03dda6b9c3191be02fdbf50f74cc5103696c32727c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Cuentas | ";
        
        $__internal_cc168104e988fd5ee330e03dda6b9c3191be02fdbf50f74cc5103696c32727c8->leave($__internal_cc168104e988fd5ee330e03dda6b9c3191be02fdbf50f74cc5103696c32727c8_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_f08d985db45607d81f625f536b4081a7d0e25e8143fd4072e0ed9a9484e055de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f08d985db45607d81f625f536b4081a7d0e25e8143fd4072e0ed9a9484e055de->enter($__internal_f08d985db45607d81f625f536b4081a7d0e25e8143fd4072e0ed9a9484e055de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Ingreso de cuentas ";
        
        $__internal_f08d985db45607d81f625f536b4081a7d0e25e8143fd4072e0ed9a9484e055de->leave($__internal_f08d985db45607d81f625f536b4081a7d0e25e8143fd4072e0ed9a9484e055de_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_3e6b5f630ea72fb75ef1485d8306ce32af5ba05a59cc9e3edbe35c5d9a039b7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e6b5f630ea72fb75ef1485d8306ce32af5ba05a59cc9e3edbe35c5d9a039b7a->enter($__internal_3e6b5f630ea72fb75ef1485d8306ce32af5ba05a59cc9e3edbe35c5d9a039b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Cuenta</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                            ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipocuenta_new"), "method" => "POST"));
        echo "
                            ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                            ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                            
                              <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "tipocuenta\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />


                    </div>
                </div>
                            
                             ";
        // line 36
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                <br>
                <br>
            </div>
            
        </div>
        <br>
        <br>
    </div>


";
        
        $__internal_3e6b5f630ea72fb75ef1485d8306ce32af5ba05a59cc9e3edbe35c5d9a039b7a->leave($__internal_3e6b5f630ea72fb75ef1485d8306ce32af5ba05a59cc9e3edbe35c5d9a039b7a_prof);

    }

    public function getTemplateName()
    {
        return ":tipocuenta:TipoCuentanew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 36,  102 => 29,  95 => 25,  91 => 24,  87 => 23,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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
{% block page_subtitle %}Ingreso de cuentas {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Cuenta</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                            {{ form_start(form, {'action': path('tipocuenta_new'), 'method': 'POST'}) }}
                            {{ form_widget(form) }}
                            {{ form_errors(form) }}
                            
                              <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"{{ absolute_url(asset('')) }}tipocuenta\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />


                    </div>
                </div>
                            
                             {{ form_end(form) }}
                <br>
                <br>
            </div>
            
        </div>
        <br>
        <br>
    </div>


{% endblock %}
", ":tipocuenta:TipoCuentanew.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/tipocuenta/TipoCuentanew.html.twig");
    }
}
