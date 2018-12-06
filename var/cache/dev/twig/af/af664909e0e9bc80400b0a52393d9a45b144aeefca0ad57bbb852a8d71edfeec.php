<?php

/* programarpublicacion/publicacionnew.html.twig */
class __TwigTemplate_c28e2c703dd14ede3345c742ef9f11750b3e2e808460cd8f632653e0f336f165 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "programarpublicacion/publicacionnew.html.twig", 1);
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
        $__internal_d9f97ed6ede16e406dc3470475da7d35d34495b2a098b3c3bef9590366522b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f97ed6ede16e406dc3470475da7d35d34495b2a098b3c3bef9590366522b8c->enter($__internal_d9f97ed6ede16e406dc3470475da7d35d34495b2a098b3c3bef9590366522b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "programarpublicacion/publicacionnew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9f97ed6ede16e406dc3470475da7d35d34495b2a098b3c3bef9590366522b8c->leave($__internal_d9f97ed6ede16e406dc3470475da7d35d34495b2a098b3c3bef9590366522b8c_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_196a58c9242b377d8e464abc53016746e11cd14c4c653638cc85e7813b5bfbbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_196a58c9242b377d8e464abc53016746e11cd14c4c653638cc85e7813b5bfbbc->enter($__internal_196a58c9242b377d8e464abc53016746e11cd14c4c653638cc85e7813b5bfbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Publicaciones | ";
        
        $__internal_196a58c9242b377d8e464abc53016746e11cd14c4c653638cc85e7813b5bfbbc->leave($__internal_196a58c9242b377d8e464abc53016746e11cd14c4c653638cc85e7813b5bfbbc_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_c65da4e9f92b38bd390f634aa0fb841fcfd5a8880972cef12f952b8a29660be5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c65da4e9f92b38bd390f634aa0fb841fcfd5a8880972cef12f952b8a29660be5->enter($__internal_c65da4e9f92b38bd390f634aa0fb841fcfd5a8880972cef12f952b8a29660be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Agregar Publicacion ";
        
        $__internal_c65da4e9f92b38bd390f634aa0fb841fcfd5a8880972cef12f952b8a29660be5->leave($__internal_c65da4e9f92b38bd390f634aa0fb841fcfd5a8880972cef12f952b8a29660be5_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_0c7b2bd5000930c284587aa303282bd46b42fb93af4e0071cefb4870cb196e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c7b2bd5000930c284587aa303282bd46b42fb93af4e0071cefb4870cb196e87->enter($__internal_0c7b2bd5000930c284587aa303282bd46b42fb93af4e0071cefb4870cb196e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Bancos</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                  ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programarpublicacion_new"), "method" => "POST"));
        echo "
                  ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
       <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "programarpublicacion\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />


                    </div>
                </div>

                ";
        // line 34
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        
        $__internal_0c7b2bd5000930c284587aa303282bd46b42fb93af4e0071cefb4870cb196e87->leave($__internal_0c7b2bd5000930c284587aa303282bd46b42fb93af4e0071cefb4870cb196e87_prof);

    }

    public function getTemplateName()
    {
        return "programarpublicacion/publicacionnew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 34,  97 => 27,  91 => 24,  87 => 23,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Publicaciones | {% endblock %}
{% block page_subtitle %}Agregar Publicacion {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Bancos</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                  {{ form_start(form, {'action': path('programarpublicacion_new'), 'method': 'POST'}) }}
                  {{ form_widget(form) }}
       <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"{{ absolute_url(asset('')) }}programarpublicacion\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />


                    </div>
                </div>

                {{ form_end(form) }}
                <br>
                <br>
            </div>
            </br>
        </div>
        <br>
        <br>
    </div>


{% endblock %}
", "programarpublicacion/publicacionnew.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\programarpublicacion\\publicacionnew.html.twig");
    }
}
