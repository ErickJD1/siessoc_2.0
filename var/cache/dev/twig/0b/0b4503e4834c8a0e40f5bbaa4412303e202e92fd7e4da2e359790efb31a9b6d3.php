<?php

/* actividad/Actividadnew.html.twig */
class __TwigTemplate_3a4b592058f9f2eab28d2cf386e983504431ee8d8c922409998b6ce4bfde591e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "actividad/Actividadnew.html.twig", 1);
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
        $__internal_1f8c55885df7b73101eed9ba49bb59c55204e558d87c7f6c6fe70d81fcef31e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f8c55885df7b73101eed9ba49bb59c55204e558d87c7f6c6fe70d81fcef31e9->enter($__internal_1f8c55885df7b73101eed9ba49bb59c55204e558d87c7f6c6fe70d81fcef31e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actividad/Actividadnew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f8c55885df7b73101eed9ba49bb59c55204e558d87c7f6c6fe70d81fcef31e9->leave($__internal_1f8c55885df7b73101eed9ba49bb59c55204e558d87c7f6c6fe70d81fcef31e9_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_be823d67bc49f6ab11476197ec73217c317fe08fd18eae4a647c060cc7c2d617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be823d67bc49f6ab11476197ec73217c317fe08fd18eae4a647c060cc7c2d617->enter($__internal_be823d67bc49f6ab11476197ec73217c317fe08fd18eae4a647c060cc7c2d617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Actividades | ";
        
        $__internal_be823d67bc49f6ab11476197ec73217c317fe08fd18eae4a647c060cc7c2d617->leave($__internal_be823d67bc49f6ab11476197ec73217c317fe08fd18eae4a647c060cc7c2d617_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_495d5c3d4a392f4b7fce7ce35d857504df87718900ffe2a80bced42dd0366257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_495d5c3d4a392f4b7fce7ce35d857504df87718900ffe2a80bced42dd0366257->enter($__internal_495d5c3d4a392f4b7fce7ce35d857504df87718900ffe2a80bced42dd0366257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Agregar Actividad ";
        
        $__internal_495d5c3d4a392f4b7fce7ce35d857504df87718900ffe2a80bced42dd0366257->leave($__internal_495d5c3d4a392f4b7fce7ce35d857504df87718900ffe2a80bced42dd0366257_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e5a0a9f44e9e388ce13528decf3f4e74e48ed3bb019309ae061e5e75e660ce49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a0a9f44e9e388ce13528decf3f4e74e48ed3bb019309ae061e5e75e660ce49->enter($__internal_e5a0a9f44e9e388ce13528decf3f4e74e48ed3bb019309ae061e5e75e660ce49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_e5a0a9f44e9e388ce13528decf3f4e74e48ed3bb019309ae061e5e75e660ce49->leave($__internal_e5a0a9f44e9e388ce13528decf3f4e74e48ed3bb019309ae061e5e75e660ce49_prof);

    }

    public function getTemplateName()
    {
        return "actividad/Actividadnew.html.twig";
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
", "actividad/Actividadnew.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\actividad\\Actividadnew.html.twig");
    }
}
