<?php

/* tipocuenta/TipoCuentaedit.html.twig */
class __TwigTemplate_676f25079873159e154b2cf98c85577dfd35227557d4314bef195a3cc24c12f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "tipocuenta/TipoCuentaedit.html.twig", 1);
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
        $__internal_ce085e259cc602245152000de2c06f78124143ece9186d8b81e1841020de219e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce085e259cc602245152000de2c06f78124143ece9186d8b81e1841020de219e->enter($__internal_ce085e259cc602245152000de2c06f78124143ece9186d8b81e1841020de219e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipocuenta/TipoCuentaedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce085e259cc602245152000de2c06f78124143ece9186d8b81e1841020de219e->leave($__internal_ce085e259cc602245152000de2c06f78124143ece9186d8b81e1841020de219e_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_d2fc62c573460d8a3ce7567aa9238d75a81f8f2adab7920bf1a782e70f9ccc90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2fc62c573460d8a3ce7567aa9238d75a81f8f2adab7920bf1a782e70f9ccc90->enter($__internal_d2fc62c573460d8a3ce7567aa9238d75a81f8f2adab7920bf1a782e70f9ccc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Catálogo";
        
        $__internal_d2fc62c573460d8a3ce7567aa9238d75a81f8f2adab7920bf1a782e70f9ccc90->leave($__internal_d2fc62c573460d8a3ce7567aa9238d75a81f8f2adab7920bf1a782e70f9ccc90_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_322315e8e39ec35f91d3f90d1a43e349d30ee89af8034771a895fa7c2dd9f46d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_322315e8e39ec35f91d3f90d1a43e349d30ee89af8034771a895fa7c2dd9f46d->enter($__internal_322315e8e39ec35f91d3f90d1a43e349d30ee89af8034771a895fa7c2dd9f46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Tipo Cuenta | Editar";
        
        $__internal_322315e8e39ec35f91d3f90d1a43e349d30ee89af8034771a895fa7c2dd9f46d->leave($__internal_322315e8e39ec35f91d3f90d1a43e349d30ee89af8034771a895fa7c2dd9f46d_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e7240d3091f7da85eb06d5090e75b4af502b5ced3a48d5ff8f611bb4490496d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7240d3091f7da85eb06d5090e75b4af502b5ced3a48d5ff8f611bb4490496d7->enter($__internal_e7240d3091f7da85eb06d5090e75b4af502b5ced3a48d5ff8f611bb4490496d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Editar Tipo Cuenta</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos: <span style=\"font-size: 25;color: red\" >*</span></h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                            ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipocuenta_new"), "method" => "POST"));
        echo "
                             <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_ncuenta\">Nombre <span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombrecuenta", array()), 'widget');
        echo "
                        ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombrecuenta", array()), 'errors');
        echo "
                    </div>
                    </div>
                    <br>
                    <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_ncuenta\">Descripcion<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'widget');
        echo "
                        ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'errors');
        echo "
                    </div>
                    </div>
                    
                     <br>
                    <div class=\"row\">
                    <div class=\"hidden\" class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_ncuenta\">Estado<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estadotipocuenta", array()), 'widget');
        echo "
                        ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estadotipocuenta", array()), 'errors');
        echo "
                    </div>
                    </div>
                            ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
                            
                              <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipocuenta_index");
        echo "\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />


                    </div>
                </div>
                            
                             ";
        // line 59
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                <br>
            </div>
            
        </div>
        <br>
    </div>


";
        
        $__internal_e7240d3091f7da85eb06d5090e75b4af502b5ced3a48d5ff8f611bb4490496d7->leave($__internal_e7240d3091f7da85eb06d5090e75b4af502b5ced3a48d5ff8f611bb4490496d7_prof);

    }

    public function getTemplateName()
    {
        return "tipocuenta/TipoCuentaedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 59,  140 => 52,  133 => 48,  127 => 45,  123 => 44,  112 => 36,  108 => 35,  98 => 28,  94 => 27,  87 => 23,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %}Catálogo{% endblock %}
{% block page_subtitle %}Tipo Cuenta | Editar{% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%\">

         <div  style=\"width:70%; margin-top: 2%; margin-left: 15%; background-color:#F3F3F3; border-radius:5px \" class=\"panel panel-default\"> 
          
            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Editar Tipo Cuenta</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos: <span style=\"font-size: 25;color: red\" >*</span></h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                            {{ form_start(edit_form, {'action': path('tipocuenta_new'), 'method': 'POST'}) }}
                             <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_ncuenta\">Nombre <span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(edit_form.nombrecuenta) }}
                        {{ form_errors(edit_form.nombrecuenta) }}
                    </div>
                    </div>
                    <br>
                    <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_ncuenta\">Descripcion<span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(edit_form.descripcion) }}
                        {{ form_errors(edit_form.descripcion) }}
                    </div>
                    </div>
                    
                     <br>
                    <div class=\"row\">
                    <div class=\"hidden\" class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_ncuenta\">Estado<span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(edit_form.estadotipocuenta) }}
                        {{ form_errors(edit_form.estadotipocuenta) }}
                    </div>
                    </div>
                            {{ form_errors(edit_form) }}
                            
                              <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"{{ path('tipocuenta_index') }}\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />


                    </div>
                </div>
                            
                             {{ form_end(edit_form) }}
                <br>
            </div>
            
        </div>
        <br>
    </div>


{% endblock %}
", "tipocuenta/TipoCuentaedit.html.twig", "/home/ubuntu/workspace/app/Resources/views/tipocuenta/TipoCuentaedit.html.twig");
    }
}
