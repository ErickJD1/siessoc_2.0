<?php

/* :programarpublicacion:publicacionedit.html.twig */
class __TwigTemplate_6e6e44fe06f6fc8bfd3dc56352d2fe849efad5b33a0d09404c604b53d315791e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":programarpublicacion:publicacionedit.html.twig", 1);
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
        $__internal_72e66e78dfbe27d978756ba26d6eeec6b5dae20e0bedc30ac73470eb57f583ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e66e78dfbe27d978756ba26d6eeec6b5dae20e0bedc30ac73470eb57f583ca->enter($__internal_72e66e78dfbe27d978756ba26d6eeec6b5dae20e0bedc30ac73470eb57f583ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":programarpublicacion:publicacionedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72e66e78dfbe27d978756ba26d6eeec6b5dae20e0bedc30ac73470eb57f583ca->leave($__internal_72e66e78dfbe27d978756ba26d6eeec6b5dae20e0bedc30ac73470eb57f583ca_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_585a5c9298688dacec9df915dfa143a230ea3d6e8f5bdf63acbf8c6afde24b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_585a5c9298688dacec9df915dfa143a230ea3d6e8f5bdf63acbf8c6afde24b17->enter($__internal_585a5c9298688dacec9df915dfa143a230ea3d6e8f5bdf63acbf8c6afde24b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Bancos | ";
        
        $__internal_585a5c9298688dacec9df915dfa143a230ea3d6e8f5bdf63acbf8c6afde24b17->leave($__internal_585a5c9298688dacec9df915dfa143a230ea3d6e8f5bdf63acbf8c6afde24b17_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_ff3ac3e02b327de0e32c65db03a5df2d83edcc9c653ab2309f8c300ad7184dcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff3ac3e02b327de0e32c65db03a5df2d83edcc9c653ab2309f8c300ad7184dcd->enter($__internal_ff3ac3e02b327de0e32c65db03a5df2d83edcc9c653ab2309f8c300ad7184dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Modificar Banco ";
        
        $__internal_ff3ac3e02b327de0e32c65db03a5df2d83edcc9c653ab2309f8c300ad7184dcd->leave($__internal_ff3ac3e02b327de0e32c65db03a5df2d83edcc9c653ab2309f8c300ad7184dcd_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_fc869213a1d02dff136e3987246709bb1d1e8536aa856a5c895f30cee31e207e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc869213a1d02dff136e3987246709bb1d1e8536aa856a5c895f30cee31e207e->enter($__internal_fc869213a1d02dff136e3987246709bb1d1e8536aa856a5c895f30cee31e207e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_fc869213a1d02dff136e3987246709bb1d1e8536aa856a5c895f30cee31e207e->leave($__internal_fc869213a1d02dff136e3987246709bb1d1e8536aa856a5c895f30cee31e207e_prof);

    }

    public function getTemplateName()
    {
        return ":programarpublicacion:publicacionedit.html.twig";
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
", ":programarpublicacion:publicacionedit.html.twig", "/home/ubuntu/workspace/app/Resources/views/programarpublicacion/publicacionedit.html.twig");
    }
}
