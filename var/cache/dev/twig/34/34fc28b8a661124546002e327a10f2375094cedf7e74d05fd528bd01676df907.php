<?php

/* :banco:Bancoedit.html.twig */
class __TwigTemplate_ef40ebb16c51b693694c6d29dfc483ef77aef38f451678a3e8d911ca07c4ba00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":banco:Bancoedit.html.twig", 1);
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
        $__internal_fdf40a4d34dbcbdf0841f47c80fff41a460a3bc5a7905749202d662b618ec857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdf40a4d34dbcbdf0841f47c80fff41a460a3bc5a7905749202d662b618ec857->enter($__internal_fdf40a4d34dbcbdf0841f47c80fff41a460a3bc5a7905749202d662b618ec857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":banco:Bancoedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdf40a4d34dbcbdf0841f47c80fff41a460a3bc5a7905749202d662b618ec857->leave($__internal_fdf40a4d34dbcbdf0841f47c80fff41a460a3bc5a7905749202d662b618ec857_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_9bef14130b26dbdd21875f6efca920766eec9399aad04ab536d9b17b82d6bf45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bef14130b26dbdd21875f6efca920766eec9399aad04ab536d9b17b82d6bf45->enter($__internal_9bef14130b26dbdd21875f6efca920766eec9399aad04ab536d9b17b82d6bf45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Bancos | ";
        
        $__internal_9bef14130b26dbdd21875f6efca920766eec9399aad04ab536d9b17b82d6bf45->leave($__internal_9bef14130b26dbdd21875f6efca920766eec9399aad04ab536d9b17b82d6bf45_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_08a0dee3c84494f1dbf31dc4e57e006f4d8aa835a340e17306b03012c19e3f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a0dee3c84494f1dbf31dc4e57e006f4d8aa835a340e17306b03012c19e3f23->enter($__internal_08a0dee3c84494f1dbf31dc4e57e006f4d8aa835a340e17306b03012c19e3f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Modificar Banco ";
        
        $__internal_08a0dee3c84494f1dbf31dc4e57e006f4d8aa835a340e17306b03012c19e3f23->leave($__internal_08a0dee3c84494f1dbf31dc4e57e006f4d8aa835a340e17306b03012c19e3f23_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_845a44062b73a5228608592b85157beadf77a13cf121e8094b6663c90a946b45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_845a44062b73a5228608592b85157beadf77a13cf121e8094b6663c90a946b45->enter($__internal_845a44062b73a5228608592b85157beadf77a13cf121e8094b6663c90a946b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Modificar Bancos</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>
                
            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
    
                     ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                     ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
                     
                <div align=\"right\">
                <input  class=\"btn btn-primary btn-xl\" type=\"submit\"  value=\"Guardar\" />
                </div>
                     ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
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
        
        $__internal_845a44062b73a5228608592b85157beadf77a13cf121e8094b6663c90a946b45->leave($__internal_845a44062b73a5228608592b85157beadf77a13cf121e8094b6663c90a946b45_prof);

    }

    public function getTemplateName()
    {
        return ":banco:Bancoedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 29,  91 => 24,  87 => 23,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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
{% block page_subtitle %}Modificar Banco {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Modificar Bancos</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>
                
            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
    
                     {{ form_start(edit_form) }}
                     {{ form_widget(edit_form) }}
                     
                <div align=\"right\">
                <input  class=\"btn btn-primary btn-xl\" type=\"submit\"  value=\"Guardar\" />
                </div>
                     {{ form_end(edit_form) }}
                     
                
                <br>
                <br>
            </div>
            </br>
        </div>
        <br>
        <br>
    </div>


{% endblock %}
", ":banco:Bancoedit.html.twig", "/home/ubuntu/workspace/app/Resources/views/banco/Bancoedit.html.twig");
    }
}
