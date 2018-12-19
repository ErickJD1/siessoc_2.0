<?php

/* tipomovimiento/TipoMovimientoedit.html.twig */
class __TwigTemplate_1d09979170bba1a79b5b55105dbed4a21abdfea03c2d1257babb97a47ef80e36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "tipomovimiento/TipoMovimientoedit.html.twig", 1);
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
        $__internal_ac79479c1559739d709d87fb103125971aa4aabc5cb4bb48a275b40e20afc90d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac79479c1559739d709d87fb103125971aa4aabc5cb4bb48a275b40e20afc90d->enter($__internal_ac79479c1559739d709d87fb103125971aa4aabc5cb4bb48a275b40e20afc90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipomovimiento/TipoMovimientoedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac79479c1559739d709d87fb103125971aa4aabc5cb4bb48a275b40e20afc90d->leave($__internal_ac79479c1559739d709d87fb103125971aa4aabc5cb4bb48a275b40e20afc90d_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_594024b9f169fd18c6eb489af15ac7113e192dff64e69fce3e2344e64ae4a5f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594024b9f169fd18c6eb489af15ac7113e192dff64e69fce3e2344e64ae4a5f6->enter($__internal_594024b9f169fd18c6eb489af15ac7113e192dff64e69fce3e2344e64ae4a5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Tipo Movimeinto | ";
        
        $__internal_594024b9f169fd18c6eb489af15ac7113e192dff64e69fce3e2344e64ae4a5f6->leave($__internal_594024b9f169fd18c6eb489af15ac7113e192dff64e69fce3e2344e64ae4a5f6_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_def0e18aedcce6a08a3e621ce4d95afd830b0dfdc3c24452573f44749bc3785d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_def0e18aedcce6a08a3e621ce4d95afd830b0dfdc3c24452573f44749bc3785d->enter($__internal_def0e18aedcce6a08a3e621ce4d95afd830b0dfdc3c24452573f44749bc3785d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Modificar Tipo De Movimiento ";
        
        $__internal_def0e18aedcce6a08a3e621ce4d95afd830b0dfdc3c24452573f44749bc3785d->leave($__internal_def0e18aedcce6a08a3e621ce4d95afd830b0dfdc3c24452573f44749bc3785d_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_04f42652da06a7ae8cde10f06f292a548b817872ba0f39d651288cad5759fd8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f42652da06a7ae8cde10f06f292a548b817872ba0f39d651288cad5759fd8c->enter($__internal_04f42652da06a7ae8cde10f06f292a548b817872ba0f39d651288cad5759fd8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:70%; margin-top: 2%; margin-left: 15%; background-color:#F3F3F3; border-radius:5px \" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Banco.png"), "html", null, true);
        echo "\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Modificar Tipo De Movimiento</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos: <span style=\"font-size: 25;color: red\" >*</span></h5>
                
            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
    
                ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
               <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_ncuenta\">Nombre Tipo Movimiento<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombretipo", array()), 'widget');
        echo "
                        ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombretipo", array()), 'errors');
        echo "
                    </div>
                    </div>
                    <br>
                    <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_ncuenta\">Descripcion<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripciontipomov", array()), 'widget');
        echo "
                        ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripciontipomov", array()), 'errors');
        echo "
                    </div>
                    </div>
                                        <br>
                    <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_ncuenta\">Clasificación<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "clasificacion", array()), 'widget');
        echo "
                        ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "clasificacion", array()), 'errors');
        echo "
                    </div>
                    </div>
                     <br>
                    <div class=\"row\">
                    <div class=\"hidden\" class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_ncuenta\">Estado<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estadotipomov", array()), 'widget');
        echo "
                        ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estadotipomov", array()), 'errors');
        echo "
                    </div>
                    </div>
                    
                     
                   <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipomovimiento_index");
        echo "\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />


                    </div>
                </div>
                     ";
        // line 65
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
        
        $__internal_04f42652da06a7ae8cde10f06f292a548b817872ba0f39d651288cad5759fd8c->leave($__internal_04f42652da06a7ae8cde10f06f292a548b817872ba0f39d651288cad5759fd8c_prof);

    }

    public function getTemplateName()
    {
        return "tipomovimiento/TipoMovimientoedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 65,  150 => 59,  140 => 52,  136 => 51,  126 => 44,  122 => 43,  112 => 36,  108 => 35,  98 => 28,  94 => 27,  87 => 23,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Tipo Movimeinto | {% endblock %}
{% block page_subtitle %}Modificar Tipo De Movimiento {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:70%; margin-top: 2%; margin-left: 15%; background-color:#F3F3F3; border-radius:5px \" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Modificar Tipo De Movimiento</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos: <span style=\"font-size: 25;color: red\" >*</span></h5>
                
            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
    
                {{ form_start(edit_form) }}
               <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_ncuenta\">Nombre Tipo Movimiento<span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(edit_form.nombretipo) }}
                        {{ form_errors(edit_form.nombretipo) }}
                    </div>
                    </div>
                    <br>
                    <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_ncuenta\">Descripcion<span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(edit_form.descripciontipomov) }}
                        {{ form_errors(edit_form.descripciontipomov) }}
                    </div>
                    </div>
                                        <br>
                    <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_ncuenta\">Clasificación<span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(edit_form.clasificacion) }}
                        {{ form_errors(edit_form.clasificacion) }}
                    </div>
                    </div>
                     <br>
                    <div class=\"row\">
                    <div class=\"hidden\" class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_ncuenta\">Estado<span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(edit_form.estadotipomov) }}
                        {{ form_errors(edit_form.estadotipomov) }}
                    </div>
                    </div>
                    
                     
                   <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"{{ path('tipomovimiento_index') }}\" class=\"btn btn-primary btn-xl\">Cancelar</a>
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


{% endblock %}", "tipomovimiento/TipoMovimientoedit.html.twig", "/home/ubuntu/workspace/app/Resources/views/tipomovimiento/TipoMovimientoedit.html.twig");
    }
}
