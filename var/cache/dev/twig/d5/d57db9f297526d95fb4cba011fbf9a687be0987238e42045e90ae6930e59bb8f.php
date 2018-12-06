<?php

/* tipocuenta/TipoCuentanew.html.twig */
class __TwigTemplate_c75206547bf8dd6f5fd874c46d1bc7ec369e7495136fe5cdb2cd87ef6ea310b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "tipocuenta/TipoCuentanew.html.twig", 1);
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
        $__internal_dd5cc2f05e2394cf63e7f9af3be61b918c7a620dbc60641d7d18c3fa468cada8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd5cc2f05e2394cf63e7f9af3be61b918c7a620dbc60641d7d18c3fa468cada8->enter($__internal_dd5cc2f05e2394cf63e7f9af3be61b918c7a620dbc60641d7d18c3fa468cada8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipocuenta/TipoCuentanew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd5cc2f05e2394cf63e7f9af3be61b918c7a620dbc60641d7d18c3fa468cada8->leave($__internal_dd5cc2f05e2394cf63e7f9af3be61b918c7a620dbc60641d7d18c3fa468cada8_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_4385226b3253e62bf9c2f3ecafe91892f762735a0976a75e0a829dc43454cf9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4385226b3253e62bf9c2f3ecafe91892f762735a0976a75e0a829dc43454cf9f->enter($__internal_4385226b3253e62bf9c2f3ecafe91892f762735a0976a75e0a829dc43454cf9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Cuentas | ";
        
        $__internal_4385226b3253e62bf9c2f3ecafe91892f762735a0976a75e0a829dc43454cf9f->leave($__internal_4385226b3253e62bf9c2f3ecafe91892f762735a0976a75e0a829dc43454cf9f_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_bc065fd300cf0831070e193f03990a712e3b7fec79357780fe0824edab48c6d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc065fd300cf0831070e193f03990a712e3b7fec79357780fe0824edab48c6d2->enter($__internal_bc065fd300cf0831070e193f03990a712e3b7fec79357780fe0824edab48c6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Ingreso de cuentas ";
        
        $__internal_bc065fd300cf0831070e193f03990a712e3b7fec79357780fe0824edab48c6d2->leave($__internal_bc065fd300cf0831070e193f03990a712e3b7fec79357780fe0824edab48c6d2_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_a70e226ceae0fbf8965e889c0f51cc789b452e49163ca99e83ab55f52c67cfaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a70e226ceae0fbf8965e889c0f51cc789b452e49163ca99e83ab55f52c67cfaf->enter($__internal_a70e226ceae0fbf8965e889c0f51cc789b452e49163ca99e83ab55f52c67cfaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_a70e226ceae0fbf8965e889c0f51cc789b452e49163ca99e83ab55f52c67cfaf->leave($__internal_a70e226ceae0fbf8965e889c0f51cc789b452e49163ca99e83ab55f52c67cfaf_prof);

    }

    public function getTemplateName()
    {
        return "tipocuenta/TipoCuentanew.html.twig";
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
", "tipocuenta/TipoCuentanew.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\tipocuenta\\TipoCuentanew.html.twig");
    }
}
