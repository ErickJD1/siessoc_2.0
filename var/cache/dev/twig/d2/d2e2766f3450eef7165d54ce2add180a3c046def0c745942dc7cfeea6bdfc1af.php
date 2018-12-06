<?php

/* :movimiento:Movimientoedit.html.twig */
class __TwigTemplate_e6f92255b4ff7cbbe1f6ace1195a1da8642ecc66f46c98679b29a5aada620d82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":movimiento:Movimientoedit.html.twig", 1);
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
        $__internal_33e877354165d81e292077cac842edf7c75e9edf209757149774c725b8958193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e877354165d81e292077cac842edf7c75e9edf209757149774c725b8958193->enter($__internal_33e877354165d81e292077cac842edf7c75e9edf209757149774c725b8958193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":movimiento:Movimientoedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33e877354165d81e292077cac842edf7c75e9edf209757149774c725b8958193->leave($__internal_33e877354165d81e292077cac842edf7c75e9edf209757149774c725b8958193_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_6c8afdef36271edbe98581d7ea07608efa19c1e57e6593e9996801795df331a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c8afdef36271edbe98581d7ea07608efa19c1e57e6593e9996801795df331a3->enter($__internal_6c8afdef36271edbe98581d7ea07608efa19c1e57e6593e9996801795df331a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Movimiento | ";
        
        $__internal_6c8afdef36271edbe98581d7ea07608efa19c1e57e6593e9996801795df331a3->leave($__internal_6c8afdef36271edbe98581d7ea07608efa19c1e57e6593e9996801795df331a3_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_7623ccd98bafe4909008abb0209b88cfd38cbeeb02db86933204bd21dc6260cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7623ccd98bafe4909008abb0209b88cfd38cbeeb02db86933204bd21dc6260cf->enter($__internal_7623ccd98bafe4909008abb0209b88cfd38cbeeb02db86933204bd21dc6260cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Modificar Movimiento ";
        
        $__internal_7623ccd98bafe4909008abb0209b88cfd38cbeeb02db86933204bd21dc6260cf->leave($__internal_7623ccd98bafe4909008abb0209b88cfd38cbeeb02db86933204bd21dc6260cf_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_093a15d4de68abda9f19192d0bfda7e74d828ef55e95a81577649d8b76aa766a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_093a15d4de68abda9f19192d0bfda7e74d828ef55e95a81577649d8b76aa766a->enter($__internal_093a15d4de68abda9f19192d0bfda7e74d828ef55e95a81577649d8b76aa766a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
                     
                   <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "movimiento\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />


                    </div>
                </div>
                     ";
        // line 35
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
        
        $__internal_093a15d4de68abda9f19192d0bfda7e74d828ef55e95a81577649d8b76aa766a->leave($__internal_093a15d4de68abda9f19192d0bfda7e74d828ef55e95a81577649d8b76aa766a_prof);

    }

    public function getTemplateName()
    {
        return ":movimiento:Movimientoedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 35,  99 => 29,  92 => 25,  88 => 24,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Movimiento | {% endblock %}
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
                        <a href=\"{{ absolute_url(asset('')) }}movimiento\" class=\"btn btn-primary btn-xl\">Cancelar</a>
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


{% endblock %}", ":movimiento:Movimientoedit.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/movimiento/Movimientoedit.html.twig");
    }
}
