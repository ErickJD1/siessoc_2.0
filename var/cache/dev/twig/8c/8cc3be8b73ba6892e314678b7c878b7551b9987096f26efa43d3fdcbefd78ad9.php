<?php

/* :publicacioncontenido:contenidonew.html.twig */
class __TwigTemplate_ab8fb11a944e2b34128241855132bc1d5c8bb42f87606ab6b42db778057b3f81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":publicacioncontenido:contenidonew.html.twig", 1);
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
        $__internal_fab2cbee1939a1d47db22b7ad70e67dbebe5fee5a095613b5665958ec00d2806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab2cbee1939a1d47db22b7ad70e67dbebe5fee5a095613b5665958ec00d2806->enter($__internal_fab2cbee1939a1d47db22b7ad70e67dbebe5fee5a095613b5665958ec00d2806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":publicacioncontenido:contenidonew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fab2cbee1939a1d47db22b7ad70e67dbebe5fee5a095613b5665958ec00d2806->leave($__internal_fab2cbee1939a1d47db22b7ad70e67dbebe5fee5a095613b5665958ec00d2806_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_84d99113174e5817c06fd2880fa7b4ef8a4744d724af937c70bacaba8c41adf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84d99113174e5817c06fd2880fa7b4ef8a4744d724af937c70bacaba8c41adf7->enter($__internal_84d99113174e5817c06fd2880fa7b4ef8a4744d724af937c70bacaba8c41adf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Contenido | ";
        
        $__internal_84d99113174e5817c06fd2880fa7b4ef8a4744d724af937c70bacaba8c41adf7->leave($__internal_84d99113174e5817c06fd2880fa7b4ef8a4744d724af937c70bacaba8c41adf7_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_ce83af1788a29e6fa9cfd21963bedd7373f95b63f29274c30cfded01ae52cc3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce83af1788a29e6fa9cfd21963bedd7373f95b63f29274c30cfded01ae52cc3b->enter($__internal_ce83af1788a29e6fa9cfd21963bedd7373f95b63f29274c30cfded01ae52cc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Agregar Contenido ";
        
        $__internal_ce83af1788a29e6fa9cfd21963bedd7373f95b63f29274c30cfded01ae52cc3b->leave($__internal_ce83af1788a29e6fa9cfd21963bedd7373f95b63f29274c30cfded01ae52cc3b_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_3baa7f30cc997137d256286bf81b52ca001c0883f561fca40b0fd67cf3e827f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3baa7f30cc997137d256286bf81b52ca001c0883f561fca40b0fd67cf3e827f0->enter($__internal_3baa7f30cc997137d256286bf81b52ca001c0883f561fca40b0fd67cf3e827f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Contenido</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicacioncontenido_new"), "method" => "POST"));
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
        echo "publicacioncontenido\" class=\"btn btn-primary btn-xl\">Cancelar</a>
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
        
        $__internal_3baa7f30cc997137d256286bf81b52ca001c0883f561fca40b0fd67cf3e827f0->leave($__internal_3baa7f30cc997137d256286bf81b52ca001c0883f561fca40b0fd67cf3e827f0_prof);

    }

    public function getTemplateName()
    {
        return ":publicacioncontenido:contenidonew.html.twig";
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

{% block page_title %} Contenido | {% endblock %}
{% block page_subtitle %}Agregar Contenido {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Contenido</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                {{ form_start(form, {'action': path('publicacioncontenido_new'), 'method': 'POST'}) }}
                {{ form_widget(form) }}
                <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"{{ absolute_url(asset('')) }}publicacioncontenido\" class=\"btn btn-primary btn-xl\">Cancelar</a>
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
", ":publicacioncontenido:contenidonew.html.twig", "/home/ubuntu/workspace/app/Resources/views/publicacioncontenido/contenidonew.html.twig");
    }
}
