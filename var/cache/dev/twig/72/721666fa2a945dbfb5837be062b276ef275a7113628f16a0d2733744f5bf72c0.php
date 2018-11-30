<?php

/* :cuenta:Cuentanew.html.twig */
class __TwigTemplate_e58d0e72ff6c2efa232ea30bfaf9e90beb5341569d0e99903d2074554aa2b46c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":cuenta:Cuentanew.html.twig", 1);
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
        $__internal_787346f18802db0f183a6fb32d9032a38ac5596dcd64f167da714e605e8e30d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787346f18802db0f183a6fb32d9032a38ac5596dcd64f167da714e605e8e30d9->enter($__internal_787346f18802db0f183a6fb32d9032a38ac5596dcd64f167da714e605e8e30d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cuenta:Cuentanew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_787346f18802db0f183a6fb32d9032a38ac5596dcd64f167da714e605e8e30d9->leave($__internal_787346f18802db0f183a6fb32d9032a38ac5596dcd64f167da714e605e8e30d9_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_27bc9acae0a07abb0217cefbd13f8101b9c0ecf3ffbd1761779fdcc5ef6061a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27bc9acae0a07abb0217cefbd13f8101b9c0ecf3ffbd1761779fdcc5ef6061a5->enter($__internal_27bc9acae0a07abb0217cefbd13f8101b9c0ecf3ffbd1761779fdcc5ef6061a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Cuentas | ";
        
        $__internal_27bc9acae0a07abb0217cefbd13f8101b9c0ecf3ffbd1761779fdcc5ef6061a5->leave($__internal_27bc9acae0a07abb0217cefbd13f8101b9c0ecf3ffbd1761779fdcc5ef6061a5_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_c728512be1a274d05c24fa24a8caf31246d68bbb6746d83aa76cf9bffc5ef76f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c728512be1a274d05c24fa24a8caf31246d68bbb6746d83aa76cf9bffc5ef76f->enter($__internal_c728512be1a274d05c24fa24a8caf31246d68bbb6746d83aa76cf9bffc5ef76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Catalogo De Cuentas ";
        
        $__internal_c728512be1a274d05c24fa24a8caf31246d68bbb6746d83aa76cf9bffc5ef76f->leave($__internal_c728512be1a274d05c24fa24a8caf31246d68bbb6746d83aa76cf9bffc5ef76f_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e3a68099caa98e65862f07d8ca32edbc6395883d66a30eb2e518710c5dccc8de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a68099caa98e65862f07d8ca32edbc6395883d66a30eb2e518710c5dccc8de->enter($__internal_e3a68099caa98e65862f07d8ca32edbc6395883d66a30eb2e518710c5dccc8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Cuenta</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                                ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cuenta_new"), "method" => "POST"));
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
        echo "cuenta\" class=\"btn btn-primary btn-xl\">Cancelar</a>
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
        
        $__internal_e3a68099caa98e65862f07d8ca32edbc6395883d66a30eb2e518710c5dccc8de->leave($__internal_e3a68099caa98e65862f07d8ca32edbc6395883d66a30eb2e518710c5dccc8de_prof);

    }

    public function getTemplateName()
    {
        return ":cuenta:Cuentanew.html.twig";
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

{% block page_title %} Cuentas | {% endblock %}
{% block page_subtitle %}Catalogo De Cuentas {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Cuenta</h2>
                <h5 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body;margin-top: -4px\">Complete los campos requeridos</h5>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                                {{ form_start(form, {'action': path('cuenta_new'), 'method': 'POST'}) }}
                                {{ form_widget(form) }}
                                 <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"{{ absolute_url(asset('')) }}cuenta\" class=\"btn btn-primary btn-xl\">Cancelar</a>
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


{% endblock %}", ":cuenta:Cuentanew.html.twig", "/home/ubuntu/workspace/app/Resources/views/cuenta/Cuentanew.html.twig");
    }
}
