<?php

/* movimiento/Movimientonew.html.twig */
class __TwigTemplate_821e08391b4a1492692b2faa8cf7d81929d9a6f1eae0764071875260e4375d3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "movimiento/Movimientonew.html.twig", 1);
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
        $__internal_2c8b708d7f5d6a301b0404886d1eeb30acf2d7c1153cea293b5508e2a6531d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c8b708d7f5d6a301b0404886d1eeb30acf2d7c1153cea293b5508e2a6531d43->enter($__internal_2c8b708d7f5d6a301b0404886d1eeb30acf2d7c1153cea293b5508e2a6531d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movimiento/Movimientonew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c8b708d7f5d6a301b0404886d1eeb30acf2d7c1153cea293b5508e2a6531d43->leave($__internal_2c8b708d7f5d6a301b0404886d1eeb30acf2d7c1153cea293b5508e2a6531d43_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_9e1c4cefcc7da5d8dfbc532b311db175b1d96de5730d44477e43a68b806a83b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1c4cefcc7da5d8dfbc532b311db175b1d96de5730d44477e43a68b806a83b8->enter($__internal_9e1c4cefcc7da5d8dfbc532b311db175b1d96de5730d44477e43a68b806a83b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Movimientos | ";
        
        $__internal_9e1c4cefcc7da5d8dfbc532b311db175b1d96de5730d44477e43a68b806a83b8->leave($__internal_9e1c4cefcc7da5d8dfbc532b311db175b1d96de5730d44477e43a68b806a83b8_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_6aa76fe2f1ab63ef1b24effc3837ad5818082cc77959e40941ba4896b25e948c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aa76fe2f1ab63ef1b24effc3837ad5818082cc77959e40941ba4896b25e948c->enter($__internal_6aa76fe2f1ab63ef1b24effc3837ad5818082cc77959e40941ba4896b25e948c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Lista De Movimientos ";
        
        $__internal_6aa76fe2f1ab63ef1b24effc3837ad5818082cc77959e40941ba4896b25e948c->leave($__internal_6aa76fe2f1ab63ef1b24effc3837ad5818082cc77959e40941ba4896b25e948c_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_3a48eccb2df893acaef8a49a137689a1dfe05c64268a161ca71cdadccfc12cdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a48eccb2df893acaef8a49a137689a1dfe05c64268a161ca71cdadccfc12cdd->enter($__internal_3a48eccb2df893acaef8a49a137689a1dfe05c64268a161ca71cdadccfc12cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "    

    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Banco.png"), "html", null, true);
        echo "\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Movimiento</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                                ";
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movimiento_new"), "method" => "POST"));
        echo "
                                ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                                 <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "movimiento\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />


                    </div>
                </div>

                ";
        // line 35
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
        
        $__internal_3a48eccb2df893acaef8a49a137689a1dfe05c64268a161ca71cdadccfc12cdd->leave($__internal_3a48eccb2df893acaef8a49a137689a1dfe05c64268a161ca71cdadccfc12cdd_prof);

    }

    public function getTemplateName()
    {
        return "movimiento/Movimientonew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 35,  98 => 28,  92 => 25,  88 => 24,  75 => 14,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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
{% block page_subtitle %}Lista De Movimientos {% endblock %}

{% block page_content %}
    

    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Movimiento</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                                {{ form_start(form, {'action': path('movimiento_new'), 'method': 'POST'}) }}
                                {{ form_widget(form) }}
                                 <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"{{ absolute_url(asset('')) }}movimiento\" class=\"btn btn-primary btn-xl\">Cancelar</a>
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


{% endblock %}", "movimiento/Movimientonew.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\movimiento\\Movimientonew.html.twig");
    }
}
