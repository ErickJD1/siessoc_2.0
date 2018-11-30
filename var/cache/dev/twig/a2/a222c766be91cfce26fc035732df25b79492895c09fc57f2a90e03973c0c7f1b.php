<?php

/* :tipocuenta:TipoCuentaedit.html.twig */
class __TwigTemplate_08e91db7006fdfb498f0c562f46dc96d64d119c606300022cbb8cab24bafc897 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":tipocuenta:TipoCuentaedit.html.twig", 1);
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
        $__internal_7b4e1a2a302ec25ebf422c430dee0f93603e233a68b01b9a4688551bc2fd268f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b4e1a2a302ec25ebf422c430dee0f93603e233a68b01b9a4688551bc2fd268f->enter($__internal_7b4e1a2a302ec25ebf422c430dee0f93603e233a68b01b9a4688551bc2fd268f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipocuenta:TipoCuentaedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b4e1a2a302ec25ebf422c430dee0f93603e233a68b01b9a4688551bc2fd268f->leave($__internal_7b4e1a2a302ec25ebf422c430dee0f93603e233a68b01b9a4688551bc2fd268f_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_d3df4b354f05cd09846d15da929ddf3e50e1407856170a3953d001004601c0ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3df4b354f05cd09846d15da929ddf3e50e1407856170a3953d001004601c0ec->enter($__internal_d3df4b354f05cd09846d15da929ddf3e50e1407856170a3953d001004601c0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Cuentas | ";
        
        $__internal_d3df4b354f05cd09846d15da929ddf3e50e1407856170a3953d001004601c0ec->leave($__internal_d3df4b354f05cd09846d15da929ddf3e50e1407856170a3953d001004601c0ec_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_b6b948def8f14457efe44b70486bf42639ce8403aa9704f35aa44ac167552006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6b948def8f14457efe44b70486bf42639ce8403aa9704f35aa44ac167552006->enter($__internal_b6b948def8f14457efe44b70486bf42639ce8403aa9704f35aa44ac167552006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Modificar Cuenta ";
        
        $__internal_b6b948def8f14457efe44b70486bf42639ce8403aa9704f35aa44ac167552006->leave($__internal_b6b948def8f14457efe44b70486bf42639ce8403aa9704f35aa44ac167552006_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4d0c0fc0aea9c65a6057db2b4839343a642ea4ede03fb0bba21f6a5e2b3e02b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0c0fc0aea9c65a6057db2b4839343a642ea4ede03fb0bba21f6a5e2b3e02b3->enter($__internal_4d0c0fc0aea9c65a6057db2b4839343a642ea4ede03fb0bba21f6a5e2b3e02b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "banco\" class=\"btn btn-primary btn-xl\">Cancelar</a>
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
        
        $__internal_4d0c0fc0aea9c65a6057db2b4839343a642ea4ede03fb0bba21f6a5e2b3e02b3->leave($__internal_4d0c0fc0aea9c65a6057db2b4839343a642ea4ede03fb0bba21f6a5e2b3e02b3_prof);

    }

    public function getTemplateName()
    {
        return ":tipocuenta:TipoCuentaedit.html.twig";
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

{% block page_title %} Cuentas | {% endblock %}
{% block page_subtitle %}Modificar Cuenta {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%\">

        <div  style=\"width:50%; margin-top: 2%; margin-left: 25%\" class=\"panel panel-default\"> 

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
                        <a href=\"{{ absolute_url(asset('')) }}banco\" class=\"btn btn-primary btn-xl\">Cancelar</a>
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
", ":tipocuenta:TipoCuentaedit.html.twig", "/home/ubuntu/workspace/app/Resources/views/tipocuenta/TipoCuentaedit.html.twig");
    }
}
