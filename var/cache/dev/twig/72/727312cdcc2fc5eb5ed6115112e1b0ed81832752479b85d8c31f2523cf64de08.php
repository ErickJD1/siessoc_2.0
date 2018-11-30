<?php

/* :tipomovimiento:TipoMovimientoedit.html.twig */
class __TwigTemplate_8f4a9ebe78bb0262350d4b85fb56ee72d102044fcd6758b1829e0ab2a2310cde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":tipomovimiento:TipoMovimientoedit.html.twig", 1);
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
        $__internal_06f684d549208894d07230139b0777427afb281f96b328e9c1cab3fe7bf2f319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06f684d549208894d07230139b0777427afb281f96b328e9c1cab3fe7bf2f319->enter($__internal_06f684d549208894d07230139b0777427afb281f96b328e9c1cab3fe7bf2f319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipomovimiento:TipoMovimientoedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06f684d549208894d07230139b0777427afb281f96b328e9c1cab3fe7bf2f319->leave($__internal_06f684d549208894d07230139b0777427afb281f96b328e9c1cab3fe7bf2f319_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_49efbae33d644f49fb23b8584accca4bf2da87fe840ca4296a62fc0eb0bcb047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49efbae33d644f49fb23b8584accca4bf2da87fe840ca4296a62fc0eb0bcb047->enter($__internal_49efbae33d644f49fb23b8584accca4bf2da87fe840ca4296a62fc0eb0bcb047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Movimientos | ";
        
        $__internal_49efbae33d644f49fb23b8584accca4bf2da87fe840ca4296a62fc0eb0bcb047->leave($__internal_49efbae33d644f49fb23b8584accca4bf2da87fe840ca4296a62fc0eb0bcb047_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_182f9b6f2f1ed06ff7d6314ac061d22335a64d7a060b937eb7b430e94993094d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_182f9b6f2f1ed06ff7d6314ac061d22335a64d7a060b937eb7b430e94993094d->enter($__internal_182f9b6f2f1ed06ff7d6314ac061d22335a64d7a060b937eb7b430e94993094d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Modificar Movimiento ";
        
        $__internal_182f9b6f2f1ed06ff7d6314ac061d22335a64d7a060b937eb7b430e94993094d->leave($__internal_182f9b6f2f1ed06ff7d6314ac061d22335a64d7a060b937eb7b430e94993094d_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_07f64239b0ecfbf96e8087f2f70c4fd29ea7cdc0abcb676b3aa2dfaeb14b9556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f64239b0ecfbf96e8087f2f70c4fd29ea7cdc0abcb676b3aa2dfaeb14b9556->enter($__internal_07f64239b0ecfbf96e8087f2f70c4fd29ea7cdc0abcb676b3aa2dfaeb14b9556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Modificar Movimiento</h2>
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
                     
                   <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "tipomovimiento\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />


                    </div>
                </div>
                     ";
        // line 34
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
        
        $__internal_07f64239b0ecfbf96e8087f2f70c4fd29ea7cdc0abcb676b3aa2dfaeb14b9556->leave($__internal_07f64239b0ecfbf96e8087f2f70c4fd29ea7cdc0abcb676b3aa2dfaeb14b9556_prof);

    }

    public function getTemplateName()
    {
        return ":tipomovimiento:TipoMovimientoedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 34,  98 => 28,  91 => 24,  87 => 23,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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
{% block page_subtitle %}Modificar Movimiento {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Modificar Movimiento</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>
                
            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
    
                {{ form_start(edit_form) }}
                {{ form_widget(edit_form) }}
                     
                   <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"{{ absolute_url(asset('')) }}tipomovimiento\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />


                    </div>
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


{% endblock %}", ":tipomovimiento:TipoMovimientoedit.html.twig", "/home/ubuntu/workspace/app/Resources/views/tipomovimiento/TipoMovimientoedit.html.twig");
    }
}
