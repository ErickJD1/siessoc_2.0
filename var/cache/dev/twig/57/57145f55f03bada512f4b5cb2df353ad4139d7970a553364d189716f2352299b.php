<?php

/* tipomovimiento/TipoMovimientonew.html.twig */
class __TwigTemplate_82018fef1fe8f0b8d5fe9c538e9266d7a7d5b21ed3054b61062f40fff7ca9b02 extends Twig_Template
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
        $__internal_e519d4cffa954d783051f4abe7845266532121841125630fc9a4d9d4926536cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e519d4cffa954d783051f4abe7845266532121841125630fc9a4d9d4926536cc->enter($__internal_e519d4cffa954d783051f4abe7845266532121841125630fc9a4d9d4926536cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipomovimiento/TipoMovimientonew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e519d4cffa954d783051f4abe7845266532121841125630fc9a4d9d4926536cc->leave($__internal_e519d4cffa954d783051f4abe7845266532121841125630fc9a4d9d4926536cc_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_db6cfbe8b6595959e105728e49f4999c4a14ff23346c8ef498f4dcc94bccccc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6cfbe8b6595959e105728e49f4999c4a14ff23346c8ef498f4dcc94bccccc7->enter($__internal_db6cfbe8b6595959e105728e49f4999c4a14ff23346c8ef498f4dcc94bccccc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Movimientos | ";
        
        $__internal_db6cfbe8b6595959e105728e49f4999c4a14ff23346c8ef498f4dcc94bccccc7->leave($__internal_db6cfbe8b6595959e105728e49f4999c4a14ff23346c8ef498f4dcc94bccccc7_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_6f7bde5f453931c2e2de7af4d2fea3528999332b013308f520ff53e06e9543ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7bde5f453931c2e2de7af4d2fea3528999332b013308f520ff53e06e9543ae->enter($__internal_6f7bde5f453931c2e2de7af4d2fea3528999332b013308f520ff53e06e9543ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Catalogo De movimientos ";
        
        $__internal_6f7bde5f453931c2e2de7af4d2fea3528999332b013308f520ff53e06e9543ae->leave($__internal_6f7bde5f453931c2e2de7af4d2fea3528999332b013308f520ff53e06e9543ae_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_34e1d221ddae400f52bd44aa68684ce4f6a3b0b2d788db84e3d3de9e51ef3d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34e1d221ddae400f52bd44aa68684ce4f6a3b0b2d788db84e3d3de9e51ef3d16->enter($__internal_34e1d221ddae400f52bd44aa68684ce4f6a3b0b2d788db84e3d3de9e51ef3d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_34e1d221ddae400f52bd44aa68684ce4f6a3b0b2d788db84e3d3de9e51ef3d16->leave($__internal_34e1d221ddae400f52bd44aa68684ce4f6a3b0b2d788db84e3d3de9e51ef3d16_prof);

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
", "tipomovimiento/TipoMovimientonew.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\tipomovimiento\\TipoMovimientonew.html.twig");
    }
}
