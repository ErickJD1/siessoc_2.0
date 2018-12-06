<?php

/* movimiento/Movimientoedit.html.twig */
class __TwigTemplate_48b70669a36fe143346b28aa2dbbfdb11ac7ebafb744e3dceb177571e6c527e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "movimiento/Movimientoedit.html.twig", 1);
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
        $__internal_6dbdba37e24d4515b8610a7f9e54f1b13a782088f8387a42a42eddc4b969484f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dbdba37e24d4515b8610a7f9e54f1b13a782088f8387a42a42eddc4b969484f->enter($__internal_6dbdba37e24d4515b8610a7f9e54f1b13a782088f8387a42a42eddc4b969484f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movimiento/Movimientoedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dbdba37e24d4515b8610a7f9e54f1b13a782088f8387a42a42eddc4b969484f->leave($__internal_6dbdba37e24d4515b8610a7f9e54f1b13a782088f8387a42a42eddc4b969484f_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_5c61a0acebd1b8646b7a9bc34ca254db7603b959fcbc0f57f40aa552855e4fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c61a0acebd1b8646b7a9bc34ca254db7603b959fcbc0f57f40aa552855e4fa7->enter($__internal_5c61a0acebd1b8646b7a9bc34ca254db7603b959fcbc0f57f40aa552855e4fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Movimiento | ";
        
        $__internal_5c61a0acebd1b8646b7a9bc34ca254db7603b959fcbc0f57f40aa552855e4fa7->leave($__internal_5c61a0acebd1b8646b7a9bc34ca254db7603b959fcbc0f57f40aa552855e4fa7_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_f7b97e85bd86f44e176955113bbe1ace7922c5de4a533226f9e4ffa39c14aa1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b97e85bd86f44e176955113bbe1ace7922c5de4a533226f9e4ffa39c14aa1a->enter($__internal_f7b97e85bd86f44e176955113bbe1ace7922c5de4a533226f9e4ffa39c14aa1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Modificar Movimiento ";
        
        $__internal_f7b97e85bd86f44e176955113bbe1ace7922c5de4a533226f9e4ffa39c14aa1a->leave($__internal_f7b97e85bd86f44e176955113bbe1ace7922c5de4a533226f9e4ffa39c14aa1a_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_a94e53ccf27414dfcec423b8671045e0559eeb5eb41265f2d090326c32774cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a94e53ccf27414dfcec423b8671045e0559eeb5eb41265f2d090326c32774cfb->enter($__internal_a94e53ccf27414dfcec423b8671045e0559eeb5eb41265f2d090326c32774cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_a94e53ccf27414dfcec423b8671045e0559eeb5eb41265f2d090326c32774cfb->leave($__internal_a94e53ccf27414dfcec423b8671045e0559eeb5eb41265f2d090326c32774cfb_prof);

    }

    public function getTemplateName()
    {
        return "movimiento/Movimientoedit.html.twig";
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


{% endblock %}", "movimiento/Movimientoedit.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\movimiento\\Movimientoedit.html.twig");
    }
}
