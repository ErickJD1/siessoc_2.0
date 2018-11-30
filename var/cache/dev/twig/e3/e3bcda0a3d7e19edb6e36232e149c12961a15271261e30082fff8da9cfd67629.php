<?php

/* :tipomovimiento:TipoMovimientonew.html.twig */
class __TwigTemplate_20c69227de186d12ac4e4e779be6ee2227c62b3714a95d5ab02bbed1a462c905 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":tipomovimiento:TipoMovimientonew.html.twig", 1);
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
        $__internal_a9ffd655c0593b219cf993c0c8847385c8701ae8dcc919a75ba66eabfa86b333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ffd655c0593b219cf993c0c8847385c8701ae8dcc919a75ba66eabfa86b333->enter($__internal_a9ffd655c0593b219cf993c0c8847385c8701ae8dcc919a75ba66eabfa86b333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipomovimiento:TipoMovimientonew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9ffd655c0593b219cf993c0c8847385c8701ae8dcc919a75ba66eabfa86b333->leave($__internal_a9ffd655c0593b219cf993c0c8847385c8701ae8dcc919a75ba66eabfa86b333_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_841bdd1f4701ec4aaa9c7c76d1f49f392559030f743337b67cd969817131f8ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_841bdd1f4701ec4aaa9c7c76d1f49f392559030f743337b67cd969817131f8ae->enter($__internal_841bdd1f4701ec4aaa9c7c76d1f49f392559030f743337b67cd969817131f8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Movimientos | ";
        
        $__internal_841bdd1f4701ec4aaa9c7c76d1f49f392559030f743337b67cd969817131f8ae->leave($__internal_841bdd1f4701ec4aaa9c7c76d1f49f392559030f743337b67cd969817131f8ae_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_ec55a10680a8885310cb134a908dd35f81bb485037eb92ca0c97912f158cb01b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec55a10680a8885310cb134a908dd35f81bb485037eb92ca0c97912f158cb01b->enter($__internal_ec55a10680a8885310cb134a908dd35f81bb485037eb92ca0c97912f158cb01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Catalogo De movimientos ";
        
        $__internal_ec55a10680a8885310cb134a908dd35f81bb485037eb92ca0c97912f158cb01b->leave($__internal_ec55a10680a8885310cb134a908dd35f81bb485037eb92ca0c97912f158cb01b_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_a4e5f37b4aa3ae8b80f7cd4326d750f48f9c459d65d9943866d8f19441e41cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4e5f37b4aa3ae8b80f7cd4326d750f48f9c459d65d9943866d8f19441e41cc8->enter($__internal_a4e5f37b4aa3ae8b80f7cd4326d750f48f9c459d65d9943866d8f19441e41cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Movimiento</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                                ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipomovimiento_new"), "method" => "POST"));
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
        echo "tipomovimiento\" class=\"btn btn-primary btn-xl\">Cancelar</a>
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
        
        $__internal_a4e5f37b4aa3ae8b80f7cd4326d750f48f9c459d65d9943866d8f19441e41cc8->leave($__internal_a4e5f37b4aa3ae8b80f7cd4326d750f48f9c459d65d9943866d8f19441e41cc8_prof);

    }

    public function getTemplateName()
    {
        return ":tipomovimiento:TipoMovimientonew.html.twig";
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

{% block page_title %} Movimientos | {% endblock %}
{% block page_subtitle %}Catalogo De movimientos {% endblock %}

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

                                {{ form_start(form, {'action': path('tipomovimiento_new'), 'method': 'POST'}) }}
                                {{ form_widget(form) }}
                                 <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"{{ absolute_url(asset('')) }}tipomovimiento\" class=\"btn btn-primary btn-xl\">Cancelar</a>
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
", ":tipomovimiento:TipoMovimientonew.html.twig", "/home/ubuntu/workspace/app/Resources/views/tipomovimiento/TipoMovimientonew.html.twig");
    }
}
