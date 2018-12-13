<?php

/* cuenta/Cuentanew.html.twig */
class __TwigTemplate_8567d62fe73df14b5dfef5711cbe364e23008435a75779a12350c7d8b5adaab2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "cuenta/Cuentanew.html.twig", 1);
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
        $__internal_6cdd7e16c035e250bbc9ab5eaa01f49cd9ae00b6af3ef5329e0bef5c42574d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cdd7e16c035e250bbc9ab5eaa01f49cd9ae00b6af3ef5329e0bef5c42574d50->enter($__internal_6cdd7e16c035e250bbc9ab5eaa01f49cd9ae00b6af3ef5329e0bef5c42574d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cuenta/Cuentanew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cdd7e16c035e250bbc9ab5eaa01f49cd9ae00b6af3ef5329e0bef5c42574d50->leave($__internal_6cdd7e16c035e250bbc9ab5eaa01f49cd9ae00b6af3ef5329e0bef5c42574d50_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_0f5c94ab735c9af19e3c7e137b3c645fd0c50e2902e44f93dedf2fbb90ae4253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f5c94ab735c9af19e3c7e137b3c645fd0c50e2902e44f93dedf2fbb90ae4253->enter($__internal_0f5c94ab735c9af19e3c7e137b3c645fd0c50e2902e44f93dedf2fbb90ae4253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Cuentas | ";
        
        $__internal_0f5c94ab735c9af19e3c7e137b3c645fd0c50e2902e44f93dedf2fbb90ae4253->leave($__internal_0f5c94ab735c9af19e3c7e137b3c645fd0c50e2902e44f93dedf2fbb90ae4253_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_828044c8813303545896979511743f7e54f90bb2481d5c33c6506494e18ad173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_828044c8813303545896979511743f7e54f90bb2481d5c33c6506494e18ad173->enter($__internal_828044c8813303545896979511743f7e54f90bb2481d5c33c6506494e18ad173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Registrar Cuenta ";
        
        $__internal_828044c8813303545896979511743f7e54f90bb2481d5c33c6506494e18ad173->leave($__internal_828044c8813303545896979511743f7e54f90bb2481d5c33c6506494e18ad173_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_951b82578eb6f8ce5fe35057ff70b7a50ae34a2c73be4a7f641521601eb08dab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_951b82578eb6f8ce5fe35057ff70b7a50ae34a2c73be4a7f641521601eb08dab->enter($__internal_951b82578eb6f8ce5fe35057ff70b7a50ae34a2c73be4a7f641521601eb08dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
    <div class=\"box box-primary\" style=\"width: 100%;\">

        <div  style=\"width:90%; margin-top: 5%; margin-left: 5%; background-color:#D8D8D8; border-radius:5px \" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Banco.png"), "html", null, true);
        echo "\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Cuenta</h2>
                <h4 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body; margin-top: -3px;\">Complete los campos requeridos:<span style=\"font-size: 25;color: red\" >*</span></h4>

            </div>
 
            <div  class=\"container\"  style=\"width: 80%; margin-top: 3%; margin-bottom: 3%\">
             <hr>
                ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                <div class=\"row\">
                    <div class=\"col col-md-6\" align=\"left\">
                        <label for=\"form_ncuenta\">Numero De Cuenta<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numcuenta", array()), 'widget');
        echo "
                        ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numcuenta", array()), 'errors');
        echo "
                    </div>

                    <br>
                    <div class=\"col col-md-6\" align=\"left\">
                        <label for=\"form_nomcuenta\">Nombre De Cuenta<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomcuenta", array()), 'widget');
        echo "
                        ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomcuenta", array()), 'errors');
        echo "
                    </div>
                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col col-md-9\">
                        <label for=\"form_descripcion\">Descripcion<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcioncuenta", array()), 'errors');
        echo "
                        ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcioncuenta", array()), 'widget');
        echo "
                    </div>
                    <div class=\"col col-md-3\" >
                        <label for=\"form_estado\">Estado</label>
                        ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadocuenta", array()), 'widget');
        echo "
                        ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadocuenta", array()), 'errors');
        echo "
                    </div>
                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col col-md-4\" align='left'>
                        <label for=\"form_saldo\">Saldo Inicial<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "saldocuenta", array()), 'errors');
        echo "
                        ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "saldocuenta", array()), 'widget');
        echo "
                    </div>
                    <div class=\"col col-md-4\" align='left'>
                        <label for=\"form_banco\">Banco<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idbanco", array()), 'errors');
        echo "
                        ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idbanco", array()), 'widget');
        echo "
                    </div>
                    <div class=\"col col-md-4\" align='left'>
                        <label for=\"form_cuenta\">Tipo de Cuenta<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idtipocuenta", array()), 'errors');
        echo "
                        ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idtipocuenta", array()), 'widget');
        echo "
                    </div>

                </div>
                <hr>
                <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "movimiento\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />
                    </div>
                </div>
                ";
        // line 77
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
        <br>
        <br>

    </div>




";
        
        $__internal_951b82578eb6f8ce5fe35057ff70b7a50ae34a2c73be4a7f641521601eb08dab->leave($__internal_951b82578eb6f8ce5fe35057ff70b7a50ae34a2c73be4a7f641521601eb08dab_prof);

    }

    public function getTemplateName()
    {
        return "cuenta/Cuentanew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 77,  182 => 73,  172 => 66,  168 => 65,  161 => 61,  157 => 60,  150 => 56,  146 => 55,  136 => 48,  132 => 47,  125 => 43,  121 => 42,  111 => 35,  107 => 34,  98 => 28,  94 => 27,  87 => 23,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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
{% block page_subtitle %}Registrar Cuenta {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%;\">

        <div  style=\"width:90%; margin-top: 5%; margin-left: 5%; background-color:#D8D8D8; border-radius:5px \" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Cuenta</h2>
                <h4 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body; margin-top: -3px;\">Complete los campos requeridos:<span style=\"font-size: 25;color: red\" >*</span></h4>

            </div>
 
            <div  class=\"container\"  style=\"width: 80%; margin-top: 3%; margin-bottom: 3%\">
             <hr>
                {{ form_start(form) }}
                <div class=\"row\">
                    <div class=\"col col-md-6\" align=\"left\">
                        <label for=\"form_ncuenta\">Numero De Cuenta<span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(form.numcuenta) }}
                        {{ form_errors(form.numcuenta) }}
                    </div>

                    <br>
                    <div class=\"col col-md-6\" align=\"left\">
                        <label for=\"form_nomcuenta\">Nombre De Cuenta<span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(form.nomcuenta) }}
                        {{ form_errors(form.nomcuenta) }}
                    </div>
                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col col-md-9\">
                        <label for=\"form_descripcion\">Descripcion<span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_errors(form.descripcioncuenta) }}
                        {{ form_widget(form.descripcioncuenta) }}
                    </div>
                    <div class=\"col col-md-3\" >
                        <label for=\"form_estado\">Estado</label>
                        {{ form_widget(form.estadocuenta) }}
                        {{ form_errors(form.estadocuenta) }}
                    </div>
                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col col-md-4\" align='left'>
                        <label for=\"form_saldo\">Saldo Inicial<span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_errors(form.saldocuenta) }}
                        {{ form_widget(form.saldocuenta) }}
                    </div>
                    <div class=\"col col-md-4\" align='left'>
                        <label for=\"form_banco\">Banco<span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_errors(form.idbanco) }}
                        {{ form_widget(form.idbanco) }}
                    </div>
                    <div class=\"col col-md-4\" align='left'>
                        <label for=\"form_cuenta\">Tipo de Cuenta<span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_errors(form.idtipocuenta) }}
                        {{ form_widget(form.idtipocuenta) }}
                    </div>

                </div>
                <hr>
                <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"{{ absolute_url(asset('')) }}movimiento\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />
                    </div>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
        <br>
        <br>

    </div>




{% endblock %}", "cuenta/Cuentanew.html.twig", "/home/ubuntu/workspace/app/Resources/views/cuenta/Cuentanew.html.twig");
    }
}
