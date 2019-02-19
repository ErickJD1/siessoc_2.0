<?php

/* webSite/contacto.html.twig */
class __TwigTemplate_e3e34dc76eaaf7594de1dd1f3b5e77f1fe1915c91334091d0e2a4b8727e14ce9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "webSite/contacto.html.twig", 2);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef5e459f4893998370b45eb0f843ffd81936b099572ad69975734cc8159336b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5e459f4893998370b45eb0f843ffd81936b099572ad69975734cc8159336b9->enter($__internal_ef5e459f4893998370b45eb0f843ffd81936b099572ad69975734cc8159336b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "webSite/contacto.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef5e459f4893998370b45eb0f843ffd81936b099572ad69975734cc8159336b9->leave($__internal_ef5e459f4893998370b45eb0f843ffd81936b099572ad69975734cc8159336b9_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0916a0a2c234a7dd1ade0f5fd0d188eecbcf6e651818b3d6f7c03eb8b91db044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0916a0a2c234a7dd1ade0f5fd0d188eecbcf6e651818b3d6f7c03eb8b91db044->enter($__internal_0916a0a2c234a7dd1ade0f5fd0d188eecbcf6e651818b3d6f7c03eb8b91db044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        nav > .nav.nav-tabs{

            border: none;
            color:#fff;
            background:#272e38;
            border-radius:0;

        }
        nav > div a.nav-item.nav-link,
        nav > div a.nav-item.nav-link.active
        {
            border: none;
            padding: 18px 25px;
            color:#fff;
            background:#272e38;
            border-radius:0;
        }

        nav > div a.nav-item.nav-link.active:after
        {
            content: \"\";
            position: relative;
            bottom: -60px;
            left: -10%;
            border: 15px solid transparent;
            border-top-color: #00dbff ;
        }
        .tab-content{
            background: #fdfdfd;
            line-height: 25px;
            border: 1px solid #ddd;
            border-top: 5px solid #00adba;
            border-bottom: 5px solid #00dbff;
            padding:30px 25px;
        }

        nav > div a.nav-item.nav-link:hover,
        nav > div a.nav-item.nav-link:focus
        {
            border: none;
            background: #00adba;
            color:#fff;
            border-radius:0;
            transition:background 0.20s linear;
        }

    </style>
";
        
        $__internal_0916a0a2c234a7dd1ade0f5fd0d188eecbcf6e651818b3d6f7c03eb8b91db044->leave($__internal_0916a0a2c234a7dd1ade0f5fd0d188eecbcf6e651818b3d6f7c03eb8b91db044_prof);

    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ae97da83640f992acb093ccb45eb83cef188e6993becf9dd26eab34ce6083ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ae97da83640f992acb093ccb45eb83cef188e6993becf9dd26eab34ce6083ec->enter($__internal_4ae97da83640f992acb093ccb45eb83cef188e6993becf9dd26eab34ce6083ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 57
        echo "    <div class=\"container\" style=\"font-family: Palatino Header !important;\">

        <div style=\"width:90%; margin-left: 5%\"> 
            <h1 class=\"mt-4 mb-3\">ESSOC
                <small>Contactos</small>
            </h1>   
            <hr>
        </div>
        <div class=\"row\">

            <div class='col col-md-4' align=\"center\" >
                <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ubicacion.png"), "html", null, true);
        echo "\" style=\"width:150px\"></img>
                <br><br> 
                La cede en El Salvador se encuentra ubicada en el Complejo Educativo Catolico Santo Domingo de Chiltiupan, departamento de La Libertad.<br>

            </div>

            <div class='col col-md-4' align=\"center\">
                <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/telefono.png"), "html", null, true);
        echo "\" style=\"width:150px;\"></img>
                <br>
                <br>
                Telefono: 2233-5821
            </div>

            <div class='col col-md-4' align=\"center\">
                <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/email.png"), "html", null, true);
        echo "\" style=\"width:150px;\"><br><br>
                brad.Champagne@uhhospitals.org<br>
                jbowers@stdominicchurch.net
            </div>

        </div>
        <div class=\"row\" align=\"center\">
            <div class=\"col col-md-12\">
                <a target=\"\" href='https://www.google.com/maps/place/Colegio+Santo+Domingo/@13.591808,-89.4682225,17.7z/data=!4m5!3m4!1s0x0:0xcec12099bc93ab4f!8m2!3d13.5922563!4d-89.4672536'> 
                    <img target='_blank'  src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/maps.jpg"), "html", null, true);
        echo "\" style=\"border-radius: 10px;margin-top:5%; margin-bottom: 5%; width: 100%;\">
                </a>
            </div> 
        </div>
      
        <div class=\"row\">
            <div align=\"center\" class=\"col col-md-12\"><img  src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo.png"), "html", null, true);
        echo "\"></img></div>
        </div>
        <br>
    </div>

";
        
        $__internal_4ae97da83640f992acb093ccb45eb83cef188e6993becf9dd26eab34ce6083ec->leave($__internal_4ae97da83640f992acb093ccb45eb83cef188e6993becf9dd26eab34ce6083ec_prof);

    }

    public function getTemplateName()
    {
        return "webSite/contacto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 97,  150 => 91,  138 => 82,  128 => 75,  118 => 68,  105 => 57,  99 => 56,  41 => 4,  35 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/blog/index.html.twig #}
{% extends 'base.html.twig' %}
{% block stylesheets%}
    {{parent()}}
    <style>
        nav > .nav.nav-tabs{

            border: none;
            color:#fff;
            background:#272e38;
            border-radius:0;

        }
        nav > div a.nav-item.nav-link,
        nav > div a.nav-item.nav-link.active
        {
            border: none;
            padding: 18px 25px;
            color:#fff;
            background:#272e38;
            border-radius:0;
        }

        nav > div a.nav-item.nav-link.active:after
        {
            content: \"\";
            position: relative;
            bottom: -60px;
            left: -10%;
            border: 15px solid transparent;
            border-top-color: #00dbff ;
        }
        .tab-content{
            background: #fdfdfd;
            line-height: 25px;
            border: 1px solid #ddd;
            border-top: 5px solid #00adba;
            border-bottom: 5px solid #00dbff;
            padding:30px 25px;
        }

        nav > div a.nav-item.nav-link:hover,
        nav > div a.nav-item.nav-link:focus
        {
            border: none;
            background: #00adba;
            color:#fff;
            border-radius:0;
            transition:background 0.20s linear;
        }

    </style>
{% endblock %}


{% block body %}
    <div class=\"container\" style=\"font-family: Palatino Header !important;\">

        <div style=\"width:90%; margin-left: 5%\"> 
            <h1 class=\"mt-4 mb-3\">ESSOC
                <small>Contactos</small>
            </h1>   
            <hr>
        </div>
        <div class=\"row\">

            <div class='col col-md-4' align=\"center\" >
                <img src=\"{{asset('img/ubicacion.png')}}\" style=\"width:150px\"></img>
                <br><br> 
                La cede en El Salvador se encuentra ubicada en el Complejo Educativo Catolico Santo Domingo de Chiltiupan, departamento de La Libertad.<br>

            </div>

            <div class='col col-md-4' align=\"center\">
                <img src=\"{{asset('img/telefono.png')}}\" style=\"width:150px;\"></img>
                <br>
                <br>
                Telefono: 2233-5821
            </div>

            <div class='col col-md-4' align=\"center\">
                <img src=\"{{asset('img/email.png')}}\" style=\"width:150px;\"><br><br>
                brad.Champagne@uhhospitals.org<br>
                jbowers@stdominicchurch.net
            </div>

        </div>
        <div class=\"row\" align=\"center\">
            <div class=\"col col-md-12\">
                <a target=\"\" href='https://www.google.com/maps/place/Colegio+Santo+Domingo/@13.591808,-89.4682225,17.7z/data=!4m5!3m4!1s0x0:0xcec12099bc93ab4f!8m2!3d13.5922563!4d-89.4672536'> 
                    <img target='_blank'  src=\"{{asset('img/maps.jpg')}}\" style=\"border-radius: 10px;margin-top:5%; margin-bottom: 5%; width: 100%;\">
                </a>
            </div> 
        </div>
      
        <div class=\"row\">
            <div align=\"center\" class=\"col col-md-12\"><img  src=\"{{asset('bundles/app/images/logo.png')}}\"></img></div>
        </div>
        <br>
    </div>

{% endblock %}
", "webSite/contacto.html.twig", "/home/ubuntu/workspace/app/Resources/views/webSite/contacto.html.twig");
    }
}
