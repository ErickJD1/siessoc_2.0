<?php

/* :actividad:actividadedit.html.twig */
class __TwigTemplate_8e00ed6cd03657aef8e873dcca72af02741abff1d2839d4f68d79715c9768a96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":actividad:actividadedit.html.twig", 1);
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
        $__internal_21500fa1e219bb61a3f4269d0cc2c4791da1ddac88d15cade519a86e4e730e92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21500fa1e219bb61a3f4269d0cc2c4791da1ddac88d15cade519a86e4e730e92->enter($__internal_21500fa1e219bb61a3f4269d0cc2c4791da1ddac88d15cade519a86e4e730e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":actividad:actividadedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21500fa1e219bb61a3f4269d0cc2c4791da1ddac88d15cade519a86e4e730e92->leave($__internal_21500fa1e219bb61a3f4269d0cc2c4791da1ddac88d15cade519a86e4e730e92_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_5778fa91a8f06e6d3489cb1caaeddd474198f832a9ac41f69de92f386e9a9494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5778fa91a8f06e6d3489cb1caaeddd474198f832a9ac41f69de92f386e9a9494->enter($__internal_5778fa91a8f06e6d3489cb1caaeddd474198f832a9ac41f69de92f386e9a9494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Actividades | ";
        
        $__internal_5778fa91a8f06e6d3489cb1caaeddd474198f832a9ac41f69de92f386e9a9494->leave($__internal_5778fa91a8f06e6d3489cb1caaeddd474198f832a9ac41f69de92f386e9a9494_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_b76166b32ca0bd2053718bed55a156522d9237be5fdf4bf25aa1c4256eecf5df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76166b32ca0bd2053718bed55a156522d9237be5fdf4bf25aa1c4256eecf5df->enter($__internal_b76166b32ca0bd2053718bed55a156522d9237be5fdf4bf25aa1c4256eecf5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Modificar Actividad ";
        
        $__internal_b76166b32ca0bd2053718bed55a156522d9237be5fdf4bf25aa1c4256eecf5df->leave($__internal_b76166b32ca0bd2053718bed55a156522d9237be5fdf4bf25aa1c4256eecf5df_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c56316afdad6b1c079af5dc4a72e80411af0a8ae175c8e6a25668d44113ed841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56316afdad6b1c079af5dc4a72e80411af0a8ae175c8e6a25668d44113ed841->enter($__internal_c56316afdad6b1c079af5dc4a72e80411af0a8ae175c8e6a25668d44113ed841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Modificar Actividad</h2>
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
        
        $__internal_c56316afdad6b1c079af5dc4a72e80411af0a8ae175c8e6a25668d44113ed841->leave($__internal_c56316afdad6b1c079af5dc4a72e80411af0a8ae175c8e6a25668d44113ed841_prof);

    }

    public function getTemplateName()
    {
        return ":actividad:actividadedit.html.twig";
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

{% block page_title %} Actividades | {% endblock %}
{% block page_subtitle %}Modificar Actividad {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Modificar Actividad</h2>
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
", ":actividad:actividadedit.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/actividad/actividadedit.html.twig");
    }
}
