<?php

/* banco/Bancoedit.html.twig */
class __TwigTemplate_df5cfd187787f21b901b50082e94a37b0b182cdc6d89d12ac5f74398b9da8326 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "banco/Bancoedit.html.twig", 1);
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
        $__internal_ce3374f165e3945de420b0fbd30c09d611b9f432b7a10f854138d79ece977af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce3374f165e3945de420b0fbd30c09d611b9f432b7a10f854138d79ece977af1->enter($__internal_ce3374f165e3945de420b0fbd30c09d611b9f432b7a10f854138d79ece977af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "banco/Bancoedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce3374f165e3945de420b0fbd30c09d611b9f432b7a10f854138d79ece977af1->leave($__internal_ce3374f165e3945de420b0fbd30c09d611b9f432b7a10f854138d79ece977af1_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_8fbe350933bfaea42934ab728951b9db5daa58922f620558a8de250cbfaf5fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fbe350933bfaea42934ab728951b9db5daa58922f620558a8de250cbfaf5fb7->enter($__internal_8fbe350933bfaea42934ab728951b9db5daa58922f620558a8de250cbfaf5fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Bancos | ";
        
        $__internal_8fbe350933bfaea42934ab728951b9db5daa58922f620558a8de250cbfaf5fb7->leave($__internal_8fbe350933bfaea42934ab728951b9db5daa58922f620558a8de250cbfaf5fb7_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_986eb6bb348d29b1b23e0edd8c59e8fbd9e033c566c3e513872e339ce4168b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_986eb6bb348d29b1b23e0edd8c59e8fbd9e033c566c3e513872e339ce4168b13->enter($__internal_986eb6bb348d29b1b23e0edd8c59e8fbd9e033c566c3e513872e339ce4168b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Modificar Banco ";
        
        $__internal_986eb6bb348d29b1b23e0edd8c59e8fbd9e033c566c3e513872e339ce4168b13->leave($__internal_986eb6bb348d29b1b23e0edd8c59e8fbd9e033c566c3e513872e339ce4168b13_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_3cf611a337539dcd5a35711f818607f0665f9b61f0c36cc14535334c9edefa5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf611a337539dcd5a35711f818607f0665f9b61f0c36cc14535334c9edefa5d->enter($__internal_3cf611a337539dcd5a35711f818607f0665f9b61f0c36cc14535334c9edefa5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_3cf611a337539dcd5a35711f818607f0665f9b61f0c36cc14535334c9edefa5d->leave($__internal_3cf611a337539dcd5a35711f818607f0665f9b61f0c36cc14535334c9edefa5d_prof);

    }

    public function getTemplateName()
    {
        return "banco/Bancoedit.html.twig";
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
", "banco/Bancoedit.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\banco\\Bancoedit.html.twig");
    }
}
