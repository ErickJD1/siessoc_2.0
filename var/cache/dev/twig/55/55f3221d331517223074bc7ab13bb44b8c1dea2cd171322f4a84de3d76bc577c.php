<?php

/* publicacioncontenido/contenidonew.html.twig */
class __TwigTemplate_9780c92d6f91bc25942214d99803a37fc7826c3e3e6798ffef467e2814ea54b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "publicacioncontenido/contenidonew.html.twig", 1);
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
        $__internal_e779bb0d543b66b5d4918fc881471b256eb54e1b2426efd080148fb3917b5dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e779bb0d543b66b5d4918fc881471b256eb54e1b2426efd080148fb3917b5dfe->enter($__internal_e779bb0d543b66b5d4918fc881471b256eb54e1b2426efd080148fb3917b5dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "publicacioncontenido/contenidonew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e779bb0d543b66b5d4918fc881471b256eb54e1b2426efd080148fb3917b5dfe->leave($__internal_e779bb0d543b66b5d4918fc881471b256eb54e1b2426efd080148fb3917b5dfe_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_643e61a7e040c1a5153ed5290f6c80c0c4a89ad0d35e6071ae458d19fa51ff5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643e61a7e040c1a5153ed5290f6c80c0c4a89ad0d35e6071ae458d19fa51ff5d->enter($__internal_643e61a7e040c1a5153ed5290f6c80c0c4a89ad0d35e6071ae458d19fa51ff5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Contenido | ";
        
        $__internal_643e61a7e040c1a5153ed5290f6c80c0c4a89ad0d35e6071ae458d19fa51ff5d->leave($__internal_643e61a7e040c1a5153ed5290f6c80c0c4a89ad0d35e6071ae458d19fa51ff5d_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_e91a926d940a16724c2d0eea1c776d94a5b793cbc68408a1c0389b9212d193c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e91a926d940a16724c2d0eea1c776d94a5b793cbc68408a1c0389b9212d193c5->enter($__internal_e91a926d940a16724c2d0eea1c776d94a5b793cbc68408a1c0389b9212d193c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Agregar Contenido ";
        
        $__internal_e91a926d940a16724c2d0eea1c776d94a5b793cbc68408a1c0389b9212d193c5->leave($__internal_e91a926d940a16724c2d0eea1c776d94a5b793cbc68408a1c0389b9212d193c5_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_28cef77ab91ff9177eb2e3c6542a42f1b25db7b59415bfb2aaa7294773ee4841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28cef77ab91ff9177eb2e3c6542a42f1b25db7b59415bfb2aaa7294773ee4841->enter($__internal_28cef77ab91ff9177eb2e3c6542a42f1b25db7b59415bfb2aaa7294773ee4841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Contenido</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicacioncontenido_new"), "method" => "POST"));
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
        echo "publicacioncontenido\" class=\"btn btn-primary btn-xl\">Cancelar</a>
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
        
        $__internal_28cef77ab91ff9177eb2e3c6542a42f1b25db7b59415bfb2aaa7294773ee4841->leave($__internal_28cef77ab91ff9177eb2e3c6542a42f1b25db7b59415bfb2aaa7294773ee4841_prof);

    }

    public function getTemplateName()
    {
        return "publicacioncontenido/contenidonew.html.twig";
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

{% block page_title %} Contenido | {% endblock %}
{% block page_subtitle %}Agregar Contenido {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Contenido</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                {{ form_start(form, {'action': path('publicacioncontenido_new'), 'method': 'POST'}) }}
                {{ form_widget(form) }}
                <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"{{ absolute_url(asset('')) }}publicacioncontenido\" class=\"btn btn-primary btn-xl\">Cancelar</a>
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
", "publicacioncontenido/contenidonew.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\publicacioncontenido\\contenidonew.html.twig");
    }
}
