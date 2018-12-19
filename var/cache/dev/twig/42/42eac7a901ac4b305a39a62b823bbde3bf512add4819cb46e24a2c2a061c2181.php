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
        $__internal_010759dc88b05f2d156224a1a2bc7a78cf68b160e4059ab9ff9bb7671a8c310d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010759dc88b05f2d156224a1a2bc7a78cf68b160e4059ab9ff9bb7671a8c310d->enter($__internal_010759dc88b05f2d156224a1a2bc7a78cf68b160e4059ab9ff9bb7671a8c310d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipocuenta/TipoCuentaedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_010759dc88b05f2d156224a1a2bc7a78cf68b160e4059ab9ff9bb7671a8c310d->leave($__internal_010759dc88b05f2d156224a1a2bc7a78cf68b160e4059ab9ff9bb7671a8c310d_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_999cfb3ca79868b556664b4e10d03c953118cd064ce48cf895f174ad045b6138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_999cfb3ca79868b556664b4e10d03c953118cd064ce48cf895f174ad045b6138->enter($__internal_999cfb3ca79868b556664b4e10d03c953118cd064ce48cf895f174ad045b6138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Tipo De Cuenta | ";
        
        $__internal_999cfb3ca79868b556664b4e10d03c953118cd064ce48cf895f174ad045b6138->leave($__internal_999cfb3ca79868b556664b4e10d03c953118cd064ce48cf895f174ad045b6138_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_fdf9f0cd0aed3cf860fb972141064fb87b5ea5aca97aaa244779fdf1fafd81b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdf9f0cd0aed3cf860fb972141064fb87b5ea5aca97aaa244779fdf1fafd81b5->enter($__internal_fdf9f0cd0aed3cf860fb972141064fb87b5ea5aca97aaa244779fdf1fafd81b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Modificar Tipo De Cuenta ";
        
        $__internal_fdf9f0cd0aed3cf860fb972141064fb87b5ea5aca97aaa244779fdf1fafd81b5->leave($__internal_fdf9f0cd0aed3cf860fb972141064fb87b5ea5aca97aaa244779fdf1fafd81b5_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_226408e6ba9f777585ce4e81fd4e8481f82d55770b323bc864b1be0cfa1725fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_226408e6ba9f777585ce4e81fd4e8481f82d55770b323bc864b1be0cfa1725fb->enter($__internal_226408e6ba9f777585ce4e81fd4e8481f82d55770b323bc864b1be0cfa1725fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Modificar Cuentas</h2>
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
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipocuenta_index");
        echo "\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />


                    </div>
                </div>
                     
                     ";
        // line 36
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
        
        $__internal_226408e6ba9f777585ce4e81fd4e8481f82d55770b323bc864b1be0cfa1725fb->leave($__internal_226408e6ba9f777585ce4e81fd4e8481f82d55770b323bc864b1be0cfa1725fb_prof);

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
        return array (  109 => 36,  99 => 29,  91 => 24,  87 => 23,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Tipo De Cuenta | {% endblock %}
{% block page_subtitle %}Modificar Tipo De Cuenta {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%\">

         <div  style=\"width:70%; margin-top: 2%; margin-left: 15%; background-color:#F3F3F3; border-radius:5px \" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Modificar Cuentas</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>
                
            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                     {{ form_start(edit_form) }}
                     {{ form_widget(edit_form) }}
                     
                
                     <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"{{path('tipocuenta_index')}}\" class=\"btn btn-primary btn-xl\">Cancelar</a>
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


{% endblock %}
", "tipocuenta/TipoCuentaedit.html.twig", "/home/ubuntu/workspace/app/Resources/views/tipocuenta/TipoCuentaedit.html.twig");
    }
}
