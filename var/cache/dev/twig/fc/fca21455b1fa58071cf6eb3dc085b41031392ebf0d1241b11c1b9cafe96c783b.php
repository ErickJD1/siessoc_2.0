<?php

/* :banco:Banconew.html.twig */
class __TwigTemplate_82852b0fd15d297574a892c68ac3876356b221f55ef5a346be2d1d66ee3fd42d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":banco:Banconew.html.twig", 1);
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
        $__internal_adfd00b9d86ff35600ede6dc6ef50b2f2fa7da0f91f4328c7ad306a9280e03a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adfd00b9d86ff35600ede6dc6ef50b2f2fa7da0f91f4328c7ad306a9280e03a4->enter($__internal_adfd00b9d86ff35600ede6dc6ef50b2f2fa7da0f91f4328c7ad306a9280e03a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":banco:Banconew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adfd00b9d86ff35600ede6dc6ef50b2f2fa7da0f91f4328c7ad306a9280e03a4->leave($__internal_adfd00b9d86ff35600ede6dc6ef50b2f2fa7da0f91f4328c7ad306a9280e03a4_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_88f5ec871271e994870d965941ec7d7992f58ce36138007118a8b5d2ff0692e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f5ec871271e994870d965941ec7d7992f58ce36138007118a8b5d2ff0692e5->enter($__internal_88f5ec871271e994870d965941ec7d7992f58ce36138007118a8b5d2ff0692e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Bancos | ";
        
        $__internal_88f5ec871271e994870d965941ec7d7992f58ce36138007118a8b5d2ff0692e5->leave($__internal_88f5ec871271e994870d965941ec7d7992f58ce36138007118a8b5d2ff0692e5_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_b21ba3766cb30475b331967d57e1178874bdbaf1b117e82bef18e88f568d6898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b21ba3766cb30475b331967d57e1178874bdbaf1b117e82bef18e88f568d6898->enter($__internal_b21ba3766cb30475b331967d57e1178874bdbaf1b117e82bef18e88f568d6898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Catalogo De Bancos ";
        
        $__internal_b21ba3766cb30475b331967d57e1178874bdbaf1b117e82bef18e88f568d6898->leave($__internal_b21ba3766cb30475b331967d57e1178874bdbaf1b117e82bef18e88f568d6898_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_5458603e3ddbf643b7667a2344f5bc61a529b498700192c28788bd6d7dc7563c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5458603e3ddbf643b7667a2344f5bc61a529b498700192c28788bd6d7dc7563c->enter($__internal_5458603e3ddbf643b7667a2344f5bc61a529b498700192c28788bd6d7dc7563c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Bancos</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("banco_new"), "method" => "POST"));
        echo "
                ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

                <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "banco\" class=\"btn btn-primary btn-xl\">Cancelar</a>
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
        
        $__internal_5458603e3ddbf643b7667a2344f5bc61a529b498700192c28788bd6d7dc7563c->leave($__internal_5458603e3ddbf643b7667a2344f5bc61a529b498700192c28788bd6d7dc7563c_prof);

    }

    public function getTemplateName()
    {
        return ":banco:Banconew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 35,  98 => 28,  91 => 24,  87 => 23,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Bancos | {% endblock %}
{% block page_subtitle %}Catalogo De Bancos {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Bancos</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                {{ form_start(form, {'action': path('banco_new'), 'method': 'POST'}) }}
                {{ form_widget(form) }}

                <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"{{ absolute_url(asset('')) }}banco\" class=\"btn btn-primary btn-xl\">Cancelar</a>
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
", ":banco:Banconew.html.twig", "/home/ubuntu/workspace/app/Resources/views/banco/Banconew.html.twig");
    }
}
