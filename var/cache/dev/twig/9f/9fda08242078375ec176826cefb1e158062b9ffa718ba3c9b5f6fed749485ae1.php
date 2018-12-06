<?php

/* programarpublicacion/publicacionedit.html.twig */
class __TwigTemplate_1b9f880bec62bdc2001d1c9d872550e7e494b759d7722aff12f959922dea4b86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "programarpublicacion/publicacionedit.html.twig", 1);
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
        $__internal_6e13cb0ae493d0c38baa2407fc4f66a39fcb74544b590d63dbcdf91da50bb92f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e13cb0ae493d0c38baa2407fc4f66a39fcb74544b590d63dbcdf91da50bb92f->enter($__internal_6e13cb0ae493d0c38baa2407fc4f66a39fcb74544b590d63dbcdf91da50bb92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "programarpublicacion/publicacionedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e13cb0ae493d0c38baa2407fc4f66a39fcb74544b590d63dbcdf91da50bb92f->leave($__internal_6e13cb0ae493d0c38baa2407fc4f66a39fcb74544b590d63dbcdf91da50bb92f_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_4766283058a356a7b7c4e2ea56e7794c17e8d1293c32c2012aca149e093c89e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4766283058a356a7b7c4e2ea56e7794c17e8d1293c32c2012aca149e093c89e9->enter($__internal_4766283058a356a7b7c4e2ea56e7794c17e8d1293c32c2012aca149e093c89e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Bancos | ";
        
        $__internal_4766283058a356a7b7c4e2ea56e7794c17e8d1293c32c2012aca149e093c89e9->leave($__internal_4766283058a356a7b7c4e2ea56e7794c17e8d1293c32c2012aca149e093c89e9_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_bf1808cf021cc8e4fa28aef5331483719c85949a750e05a846f35814325784fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf1808cf021cc8e4fa28aef5331483719c85949a750e05a846f35814325784fa->enter($__internal_bf1808cf021cc8e4fa28aef5331483719c85949a750e05a846f35814325784fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Modificar Banco ";
        
        $__internal_bf1808cf021cc8e4fa28aef5331483719c85949a750e05a846f35814325784fa->leave($__internal_bf1808cf021cc8e4fa28aef5331483719c85949a750e05a846f35814325784fa_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_6796bf10f803440e282b6a141098a0ad7df1ddb6ac0b6e4d0fef083362023383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6796bf10f803440e282b6a141098a0ad7df1ddb6ac0b6e4d0fef083362023383->enter($__internal_6796bf10f803440e282b6a141098a0ad7df1ddb6ac0b6e4d0fef083362023383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_6796bf10f803440e282b6a141098a0ad7df1ddb6ac0b6e4d0fef083362023383->leave($__internal_6796bf10f803440e282b6a141098a0ad7df1ddb6ac0b6e4d0fef083362023383_prof);

    }

    public function getTemplateName()
    {
        return "programarpublicacion/publicacionedit.html.twig";
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
", "programarpublicacion/publicacionedit.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\programarpublicacion\\publicacionedit.html.twig");
    }
}
