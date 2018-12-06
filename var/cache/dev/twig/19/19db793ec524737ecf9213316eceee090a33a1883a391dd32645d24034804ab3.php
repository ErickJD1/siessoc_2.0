<?php

/* :cuenta:Cuentanew.html.twig */
class __TwigTemplate_6a03a4dd13c9503c4866ccff7343d785d6d5d43463afa853012768af6724363c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":cuenta:Cuentanew.html.twig", 1);
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
        $__internal_c08765db0500d8ed3a6206245caa552f7b5ddf7858f1d311c4827ebbf7b0395c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c08765db0500d8ed3a6206245caa552f7b5ddf7858f1d311c4827ebbf7b0395c->enter($__internal_c08765db0500d8ed3a6206245caa552f7b5ddf7858f1d311c4827ebbf7b0395c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cuenta:Cuentanew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c08765db0500d8ed3a6206245caa552f7b5ddf7858f1d311c4827ebbf7b0395c->leave($__internal_c08765db0500d8ed3a6206245caa552f7b5ddf7858f1d311c4827ebbf7b0395c_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_bc7a6f947e6a3170dac05e643b451b2f43edbb8ecc09c2c5f98f13068dd21468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc7a6f947e6a3170dac05e643b451b2f43edbb8ecc09c2c5f98f13068dd21468->enter($__internal_bc7a6f947e6a3170dac05e643b451b2f43edbb8ecc09c2c5f98f13068dd21468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Cuentas | ";
        
        $__internal_bc7a6f947e6a3170dac05e643b451b2f43edbb8ecc09c2c5f98f13068dd21468->leave($__internal_bc7a6f947e6a3170dac05e643b451b2f43edbb8ecc09c2c5f98f13068dd21468_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_04f6bde6583a9e620f5db03dd9d0979d935cb2784b52dc9c5d2b1ccf4bfe92af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f6bde6583a9e620f5db03dd9d0979d935cb2784b52dc9c5d2b1ccf4bfe92af->enter($__internal_04f6bde6583a9e620f5db03dd9d0979d935cb2784b52dc9c5d2b1ccf4bfe92af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Catalogo De Cuentas ";
        
        $__internal_04f6bde6583a9e620f5db03dd9d0979d935cb2784b52dc9c5d2b1ccf4bfe92af->leave($__internal_04f6bde6583a9e620f5db03dd9d0979d935cb2784b52dc9c5d2b1ccf4bfe92af_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_1f89e300eecea181184fe21aa81f82f86020e14cc895618933eaeb6d08c3f0c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f89e300eecea181184fe21aa81f82f86020e14cc895618933eaeb6d08c3f0c7->enter($__internal_1f89e300eecea181184fe21aa81f82f86020e14cc895618933eaeb6d08c3f0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/dollar.png"), "html", null, true);
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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cuenta_new"), "method" => "POST"));
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
        echo "cuenta\" class=\"btn btn-primary btn-xl\">Cancelar</a>
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
        
        $__internal_1f89e300eecea181184fe21aa81f82f86020e14cc895618933eaeb6d08c3f0c7->leave($__internal_1f89e300eecea181184fe21aa81f82f86020e14cc895618933eaeb6d08c3f0c7_prof);

    }

    public function getTemplateName()
    {
        return ":cuenta:Cuentanew.html.twig";
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

{% block page_title %} Cuentas | {% endblock %}
{% block page_subtitle %}Catalogo De Cuentas {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/dollar.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Cuenta</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                                {{ form_start(form, {'action': path('cuenta_new'), 'method': 'POST'}) }}
                                {{ form_widget(form) }}
                                 <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"{{ absolute_url(asset('')) }}cuenta\" class=\"btn btn-primary btn-xl\">Cancelar</a>
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


{% endblock %}", ":cuenta:Cuentanew.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/cuenta/Cuentanew.html.twig");
    }
}
