<?php

/* actividad/actividadedit.html.twig */
class __TwigTemplate_1862dd65106f88525bab4e60804cd54a7a1497ef76f3eb24ff8782eb0ca99999 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "actividad/actividadedit.html.twig", 1);
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
        $__internal_da6a545f79c8c3e6e47f2cba230c0aefbdc27eadb81aa625b611d2fae5fa42ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da6a545f79c8c3e6e47f2cba230c0aefbdc27eadb81aa625b611d2fae5fa42ca->enter($__internal_da6a545f79c8c3e6e47f2cba230c0aefbdc27eadb81aa625b611d2fae5fa42ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actividad/actividadedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da6a545f79c8c3e6e47f2cba230c0aefbdc27eadb81aa625b611d2fae5fa42ca->leave($__internal_da6a545f79c8c3e6e47f2cba230c0aefbdc27eadb81aa625b611d2fae5fa42ca_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_b2fbc70e9299c3a92f72e60183597b897c1a9522018c9447f279af375d7bc258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2fbc70e9299c3a92f72e60183597b897c1a9522018c9447f279af375d7bc258->enter($__internal_b2fbc70e9299c3a92f72e60183597b897c1a9522018c9447f279af375d7bc258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Actividades | ";
        
        $__internal_b2fbc70e9299c3a92f72e60183597b897c1a9522018c9447f279af375d7bc258->leave($__internal_b2fbc70e9299c3a92f72e60183597b897c1a9522018c9447f279af375d7bc258_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_038864d3d71d8c4418a4bb87ee6a0e23da2ffb5a01cf67ba6ca834a5e190d1b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_038864d3d71d8c4418a4bb87ee6a0e23da2ffb5a01cf67ba6ca834a5e190d1b4->enter($__internal_038864d3d71d8c4418a4bb87ee6a0e23da2ffb5a01cf67ba6ca834a5e190d1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Modificar Actividad ";
        
        $__internal_038864d3d71d8c4418a4bb87ee6a0e23da2ffb5a01cf67ba6ca834a5e190d1b4->leave($__internal_038864d3d71d8c4418a4bb87ee6a0e23da2ffb5a01cf67ba6ca834a5e190d1b4_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e2f3e5049ced4f52e76754fb58b632eba9db15c92a2d78e14b56e357f2f2b8f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2f3e5049ced4f52e76754fb58b632eba9db15c92a2d78e14b56e357f2f2b8f6->enter($__internal_e2f3e5049ced4f52e76754fb58b632eba9db15c92a2d78e14b56e357f2f2b8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_e2f3e5049ced4f52e76754fb58b632eba9db15c92a2d78e14b56e357f2f2b8f6->leave($__internal_e2f3e5049ced4f52e76754fb58b632eba9db15c92a2d78e14b56e357f2f2b8f6_prof);

    }

    public function getTemplateName()
    {
        return "actividad/actividadedit.html.twig";
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
", "actividad/actividadedit.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\actividad\\actividadedit.html.twig");
    }
}
