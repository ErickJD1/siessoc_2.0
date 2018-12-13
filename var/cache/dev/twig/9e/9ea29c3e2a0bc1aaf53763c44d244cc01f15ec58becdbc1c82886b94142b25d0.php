<?php

/* movimiento/Movimientonew.html.twig */
class __TwigTemplate_e21116d5e25d317c590d76d47e08303a503b595b8d2469dc5ba27605446872f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "movimiento/Movimientonew.html.twig", 1);
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
        $__internal_51fd0a08d9b57e83282778b16ee2a92ca40b912e1d5ab9b62c7bd23488a8a2e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51fd0a08d9b57e83282778b16ee2a92ca40b912e1d5ab9b62c7bd23488a8a2e1->enter($__internal_51fd0a08d9b57e83282778b16ee2a92ca40b912e1d5ab9b62c7bd23488a8a2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movimiento/Movimientonew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51fd0a08d9b57e83282778b16ee2a92ca40b912e1d5ab9b62c7bd23488a8a2e1->leave($__internal_51fd0a08d9b57e83282778b16ee2a92ca40b912e1d5ab9b62c7bd23488a8a2e1_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_0a00d8359e765ace963de9d218023bee9538cacc0ae13f8ec21a44cb2d179743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a00d8359e765ace963de9d218023bee9538cacc0ae13f8ec21a44cb2d179743->enter($__internal_0a00d8359e765ace963de9d218023bee9538cacc0ae13f8ec21a44cb2d179743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Movimientos | ";
        
        $__internal_0a00d8359e765ace963de9d218023bee9538cacc0ae13f8ec21a44cb2d179743->leave($__internal_0a00d8359e765ace963de9d218023bee9538cacc0ae13f8ec21a44cb2d179743_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_0f6df56e447c006db13f0dcf584f3052455977f9554941a84b52974458bc141c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f6df56e447c006db13f0dcf584f3052455977f9554941a84b52974458bc141c->enter($__internal_0f6df56e447c006db13f0dcf584f3052455977f9554941a84b52974458bc141c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Registrar Movimientos ";
        
        $__internal_0f6df56e447c006db13f0dcf584f3052455977f9554941a84b52974458bc141c->leave($__internal_0f6df56e447c006db13f0dcf584f3052455977f9554941a84b52974458bc141c_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_6643bf06e7b4c7b0d1e763dafe7c0ccdd90bc10ecb75ee308541b7c8e8d8cdbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6643bf06e7b4c7b0d1e763dafe7c0ccdd90bc10ecb75ee308541b7c8e8d8cdbe->enter($__internal_6643bf06e7b4c7b0d1e763dafe7c0ccdd90bc10ecb75ee308541b7c8e8d8cdbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Movimiento De Fondos</h2>
                <h4 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body; margin-top: -3px;\">Complete los campos requeridos:<span style=\"font-size: 25;color: red\" >*</span></h4>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 80%; margin-top: 3%; margin-bottom: 3%\">


                ";
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                <div class=\"row\">
                    <div class=\"col col-md-6\">
                        <label for=\"form_firstname\">Asociar Cuenta<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idcuenta", array()), 'widget');
        echo "
                        ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idcuenta", array()), 'errors');
        echo "
                    </div>
                    <div class=\"col col-md-6\">
                        <label for=\"form_lastname\">Tipo de movimiento<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idtipomov", array()), 'widget');
        echo "
                        ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idtipomov", array()), 'errors');
        echo "
                    </div>
                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col col-md-9\">
                        <label for=\"form_lastname\">Descripcion<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcionmov", array()), 'widget');
        echo "
                        ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcionmov", array()), 'errors');
        echo "
                    </div>
                    <div class=\"col col-md-3\" >
                        <label for=\"form_estado\">Estado</label>
                        ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadomov", array()), 'widget');
        echo "
                        ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadomov", array()), 'errors');
        echo "
                    </div>
                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col col-md-6\" align=\"left\">
                        <label for=\"form_monto\">Monto (\$)<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "monto", array()), 'widget');
        echo "
                        ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "monto", array()), 'errors');
        echo "
                    </div>
                    <div class=\"col col-md-6\" align=\"center\">
                        <label for=\"form_file\">Adjuntar Comprobante</label>
                        ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comprobante_file", array()), 'widget');
        echo "
                        ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comprobante_file", array()), 'errors');
        echo "
                    </div>

                </div>
                <hr>
                <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "movimiento\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />
                    </div>
                </div>
                ";
        // line 71
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

            </div>
        </div>
        <br>
        <br>
    </div>



";
        
        $__internal_6643bf06e7b4c7b0d1e763dafe7c0ccdd90bc10ecb75ee308541b7c8e8d8cdbe->leave($__internal_6643bf06e7b4c7b0d1e763dafe7c0ccdd90bc10ecb75ee308541b7c8e8d8cdbe_prof);

    }

    public function getTemplateName()
    {
        return "movimiento/Movimientonew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 71,  170 => 67,  160 => 60,  156 => 59,  149 => 55,  145 => 54,  135 => 47,  131 => 46,  124 => 42,  120 => 41,  110 => 34,  106 => 33,  99 => 29,  95 => 28,  88 => 24,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Movimientos | {% endblock %}
{% block page_subtitle %}Registrar Movimientos {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%;\">

        <div  style=\"width:90%; margin-top: 5%; margin-left: 5%; background-color:#D8D8D8; border-radius:5px \" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Movimiento De Fondos</h2>
                <h4 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body; margin-top: -3px;\">Complete los campos requeridos:<span style=\"font-size: 25;color: red\" >*</span></h4>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 80%; margin-top: 3%; margin-bottom: 3%\">


                {{ form_start(form) }}
                <div class=\"row\">
                    <div class=\"col col-md-6\">
                        <label for=\"form_firstname\">Asociar Cuenta<span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(form.idcuenta) }}
                        {{ form_errors(form.idcuenta) }}
                    </div>
                    <div class=\"col col-md-6\">
                        <label for=\"form_lastname\">Tipo de movimiento<span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(form.idtipomov) }}
                        {{ form_errors(form.idtipomov) }}
                    </div>
                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col col-md-9\">
                        <label for=\"form_lastname\">Descripcion<span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(form.descripcionmov) }}
                        {{ form_errors(form.descripcionmov) }}
                    </div>
                    <div class=\"col col-md-3\" >
                        <label for=\"form_estado\">Estado</label>
                        {{ form_widget(form.estadomov) }}
                        {{ form_errors(form.estadomov) }}
                    </div>
                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col col-md-6\" align=\"left\">
                        <label for=\"form_monto\">Monto (\$)<span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(form.monto) }}
                        {{ form_errors(form.monto) }}
                    </div>
                    <div class=\"col col-md-6\" align=\"center\">
                        <label for=\"form_file\">Adjuntar Comprobante</label>
                        {{ form_widget(form.comprobante_file) }}
                        {{ form_errors(form.comprobante_file) }}
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



{% endblock %}", "movimiento/Movimientonew.html.twig", "/home/ubuntu/workspace/app/Resources/views/movimiento/Movimientonew.html.twig");
    }
}
