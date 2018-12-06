<?php

/* :banco:Bancoedit.html.twig */
class __TwigTemplate_5b6217ad051f875c1c94597a0b9f17414c524b1b9f4358cc0cbc004b98329a2d extends Twig_Template
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
        $__internal_89807e2c265339d25ac2aba3faeb2c24246c80a0b347a584606f3c43e6bc6fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89807e2c265339d25ac2aba3faeb2c24246c80a0b347a584606f3c43e6bc6fe3->enter($__internal_89807e2c265339d25ac2aba3faeb2c24246c80a0b347a584606f3c43e6bc6fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":banco:Bancoedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89807e2c265339d25ac2aba3faeb2c24246c80a0b347a584606f3c43e6bc6fe3->leave($__internal_89807e2c265339d25ac2aba3faeb2c24246c80a0b347a584606f3c43e6bc6fe3_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_2e170611486d866ec803b81b94a4e05002181519d3565d1883dcbad7b471e2db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e170611486d866ec803b81b94a4e05002181519d3565d1883dcbad7b471e2db->enter($__internal_2e170611486d866ec803b81b94a4e05002181519d3565d1883dcbad7b471e2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Bancos | ";
        
        $__internal_2e170611486d866ec803b81b94a4e05002181519d3565d1883dcbad7b471e2db->leave($__internal_2e170611486d866ec803b81b94a4e05002181519d3565d1883dcbad7b471e2db_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_567e91208bcbced4de2844f1ce6eba6fa685ba2f3c2c9d5d6092684d7f878f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_567e91208bcbced4de2844f1ce6eba6fa685ba2f3c2c9d5d6092684d7f878f7a->enter($__internal_567e91208bcbced4de2844f1ce6eba6fa685ba2f3c2c9d5d6092684d7f878f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Modificar Banco ";
        
        $__internal_567e91208bcbced4de2844f1ce6eba6fa685ba2f3c2c9d5d6092684d7f878f7a->leave($__internal_567e91208bcbced4de2844f1ce6eba6fa685ba2f3c2c9d5d6092684d7f878f7a_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_bac3945f4c3a6c6f546c013d867b21b7ad28a9c62c5a0b3a3a446bb7e3f39ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bac3945f4c3a6c6f546c013d867b21b7ad28a9c62c5a0b3a3a446bb7e3f39ae5->enter($__internal_bac3945f4c3a6c6f546c013d867b21b7ad28a9c62c5a0b3a3a446bb7e3f39ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_bac3945f4c3a6c6f546c013d867b21b7ad28a9c62c5a0b3a3a446bb7e3f39ae5->leave($__internal_bac3945f4c3a6c6f546c013d867b21b7ad28a9c62c5a0b3a3a446bb7e3f39ae5_prof);

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
", ":banco:Bancoedit.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/banco/Bancoedit.html.twig");
    }
}
