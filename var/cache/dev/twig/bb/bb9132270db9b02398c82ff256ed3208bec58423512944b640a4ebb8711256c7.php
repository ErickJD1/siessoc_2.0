<?php

/* :actividad:Actividadnew.html.twig */
class __TwigTemplate_949e405c4fbb0a374fc92c385f2689368a2de3b063d9d65498c4e75d608dd3ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":actividad:Actividadnew.html.twig", 1);
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
        $__internal_963b0a331abb7345858ff09c27f813ea16200d572d20d747257615e088d86c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_963b0a331abb7345858ff09c27f813ea16200d572d20d747257615e088d86c7c->enter($__internal_963b0a331abb7345858ff09c27f813ea16200d572d20d747257615e088d86c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":actividad:Actividadnew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_963b0a331abb7345858ff09c27f813ea16200d572d20d747257615e088d86c7c->leave($__internal_963b0a331abb7345858ff09c27f813ea16200d572d20d747257615e088d86c7c_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_afc382e0391ca4c52f0cc02ca29b459794881c916757e0977da5da17cdd77f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afc382e0391ca4c52f0cc02ca29b459794881c916757e0977da5da17cdd77f64->enter($__internal_afc382e0391ca4c52f0cc02ca29b459794881c916757e0977da5da17cdd77f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Actividades | ";
        
        $__internal_afc382e0391ca4c52f0cc02ca29b459794881c916757e0977da5da17cdd77f64->leave($__internal_afc382e0391ca4c52f0cc02ca29b459794881c916757e0977da5da17cdd77f64_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_5aafd49efddbb2f056bebe6eb9f44a4dad190cc32b7690078b61fb7cbf4e3445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aafd49efddbb2f056bebe6eb9f44a4dad190cc32b7690078b61fb7cbf4e3445->enter($__internal_5aafd49efddbb2f056bebe6eb9f44a4dad190cc32b7690078b61fb7cbf4e3445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Agregar Actividad ";
        
        $__internal_5aafd49efddbb2f056bebe6eb9f44a4dad190cc32b7690078b61fb7cbf4e3445->leave($__internal_5aafd49efddbb2f056bebe6eb9f44a4dad190cc32b7690078b61fb7cbf4e3445_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c849743c42174f9c2c7e059953e2e1ebc71a45194b9c8474e907e6f360355aa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c849743c42174f9c2c7e059953e2e1ebc71a45194b9c8474e907e6f360355aa4->enter($__internal_c849743c42174f9c2c7e059953e2e1ebc71a45194b9c8474e907e6f360355aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Actividad</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actividad_new"), "method" => "POST"));
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
        echo "actividad\" class=\"btn btn-primary btn-xl\">Cancelar</a>
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
        
        $__internal_c849743c42174f9c2c7e059953e2e1ebc71a45194b9c8474e907e6f360355aa4->leave($__internal_c849743c42174f9c2c7e059953e2e1ebc71a45194b9c8474e907e6f360355aa4_prof);

    }

    public function getTemplateName()
    {
        return ":actividad:Actividadnew.html.twig";
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

{% block page_title %} Actividades | {% endblock %}
{% block page_subtitle %}Agregar Actividad {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Actividad</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                {{ form_start(form, {'action': path('actividad_new'), 'method': 'POST'}) }}
                {{ form_widget(form) }}
                
          <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"{{ absolute_url(asset('')) }}actividad\" class=\"btn btn-primary btn-xl\">Cancelar</a>
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
", ":actividad:Actividadnew.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/actividad/Actividadnew.html.twig");
    }
}
