<?php

/* :programarpublicacion:publicacionnew.html.twig */
class __TwigTemplate_84d604d54699e1758f59fb63214da66913983780bd06564069abc3ec3c925df8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":programarpublicacion:publicacionnew.html.twig", 1);
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
        $__internal_d452053e1f6c082fd7448908fccae959d86bb507cdf4fe04fc802fb2779c0295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d452053e1f6c082fd7448908fccae959d86bb507cdf4fe04fc802fb2779c0295->enter($__internal_d452053e1f6c082fd7448908fccae959d86bb507cdf4fe04fc802fb2779c0295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":programarpublicacion:publicacionnew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d452053e1f6c082fd7448908fccae959d86bb507cdf4fe04fc802fb2779c0295->leave($__internal_d452053e1f6c082fd7448908fccae959d86bb507cdf4fe04fc802fb2779c0295_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_e01f4a059e815b941e877d71c7d796812d2c2d10b01464a550f945dde095fd45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e01f4a059e815b941e877d71c7d796812d2c2d10b01464a550f945dde095fd45->enter($__internal_e01f4a059e815b941e877d71c7d796812d2c2d10b01464a550f945dde095fd45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Publicaciones | ";
        
        $__internal_e01f4a059e815b941e877d71c7d796812d2c2d10b01464a550f945dde095fd45->leave($__internal_e01f4a059e815b941e877d71c7d796812d2c2d10b01464a550f945dde095fd45_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_69af4ee84fb8054d0a28730c332e1734a13e3c3b9dfb1a63a2347d372ea33237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69af4ee84fb8054d0a28730c332e1734a13e3c3b9dfb1a63a2347d372ea33237->enter($__internal_69af4ee84fb8054d0a28730c332e1734a13e3c3b9dfb1a63a2347d372ea33237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Agregar Publicacion ";
        
        $__internal_69af4ee84fb8054d0a28730c332e1734a13e3c3b9dfb1a63a2347d372ea33237->leave($__internal_69af4ee84fb8054d0a28730c332e1734a13e3c3b9dfb1a63a2347d372ea33237_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c762b8003c4b8bf23c158f55857ece9106fd751e56b423ecdd485d7880187a5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c762b8003c4b8bf23c158f55857ece9106fd751e56b423ecdd485d7880187a5e->enter($__internal_c762b8003c4b8bf23c158f55857ece9106fd751e56b423ecdd485d7880187a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programarpublicacion_new"), "method" => "POST"));
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
        echo "programarpublicacion\" class=\"btn btn-primary btn-xl\">Cancelar</a>
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
        
        $__internal_c762b8003c4b8bf23c158f55857ece9106fd751e56b423ecdd485d7880187a5e->leave($__internal_c762b8003c4b8bf23c158f55857ece9106fd751e56b423ecdd485d7880187a5e_prof);

    }

    public function getTemplateName()
    {
        return ":programarpublicacion:publicacionnew.html.twig";
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

{% block page_title %} Publicaciones | {% endblock %}
{% block page_subtitle %}Agregar Publicacion {% endblock %}

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

                  {{ form_start(form, {'action': path('programarpublicacion_new'), 'method': 'POST'}) }}
                  {{ form_widget(form) }}
       <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"{{ absolute_url(asset('')) }}programarpublicacion\" class=\"btn btn-primary btn-xl\">Cancelar</a>
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
", ":programarpublicacion:publicacionnew.html.twig", "/home/ubuntu/workspace/app/Resources/views/programarpublicacion/publicacionnew.html.twig");
    }
}
