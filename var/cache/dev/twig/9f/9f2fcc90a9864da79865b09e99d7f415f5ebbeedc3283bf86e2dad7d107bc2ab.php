<?php

/* movimiento/Movimientoedit.html.twig */
class __TwigTemplate_1497abe3bc871a1ff75c8e4b32371efdb22b6f203c267d5ab429cf69c89f1a18 extends Twig_Template
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
        $__internal_d7c2eceaa86655a2fb8a0e4f5bfcfc32578ac4bc477f78042f300b608984ea5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c2eceaa86655a2fb8a0e4f5bfcfc32578ac4bc477f78042f300b608984ea5e->enter($__internal_d7c2eceaa86655a2fb8a0e4f5bfcfc32578ac4bc477f78042f300b608984ea5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movimiento/Movimientoedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7c2eceaa86655a2fb8a0e4f5bfcfc32578ac4bc477f78042f300b608984ea5e->leave($__internal_d7c2eceaa86655a2fb8a0e4f5bfcfc32578ac4bc477f78042f300b608984ea5e_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_a1d37183e8b548accf8927dc06dbe0fb5f141dbe570cdfef00ffc1489322360f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d37183e8b548accf8927dc06dbe0fb5f141dbe570cdfef00ffc1489322360f->enter($__internal_a1d37183e8b548accf8927dc06dbe0fb5f141dbe570cdfef00ffc1489322360f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Movimiento | ";
        
        $__internal_a1d37183e8b548accf8927dc06dbe0fb5f141dbe570cdfef00ffc1489322360f->leave($__internal_a1d37183e8b548accf8927dc06dbe0fb5f141dbe570cdfef00ffc1489322360f_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_5f062c9ab8096ead421d3e049c78f3de9414edae101074cdca4692f945878a25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f062c9ab8096ead421d3e049c78f3de9414edae101074cdca4692f945878a25->enter($__internal_5f062c9ab8096ead421d3e049c78f3de9414edae101074cdca4692f945878a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Modificar Movimiento De Fondos ";
        
        $__internal_5f062c9ab8096ead421d3e049c78f3de9414edae101074cdca4692f945878a25->leave($__internal_5f062c9ab8096ead421d3e049c78f3de9414edae101074cdca4692f945878a25_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_98c5ebfc6f4230a29c5135c8a8b638223650ae387e8caf0e36b3bd0ff46f7604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98c5ebfc6f4230a29c5135c8a8b638223650ae387e8caf0e36b3bd0ff46f7604->enter($__internal_98c5ebfc6f4230a29c5135c8a8b638223650ae387e8caf0e36b3bd0ff46f7604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
    <div class=\"box box-primary\" style=\"width: 100%;\">

        <div  style=\"width:90%; margin-top: 5%; margin-left: 5%; background-color:#D8D8D8; border-radius:5px \" class=\"panel panel-default\"> 
            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Banco.png"), "html", null, true);
        echo "\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Modificar Movimiento De Fondos</h2>
                <h4 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body; margin-top: -3px;\">Complete los campos requeridos:<span style=\"font-size: 25;color: red\" >*</span></h4>
            </div>

            <div  class=\"container\"  style=\"width: 80%; margin-top: 3%; margin-bottom: 3%\">


                ";
        // line 22
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                <div class=\"row\">
                    <div class=\"col col-md-6\">
                        <label for=\"form_firstname\">Asociar Cuenta <span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idcuenta", array()), 'widget');
        echo "
                        ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idcuenta", array()), 'errors');
        echo "
                    </div>
                    <div class=\"col col-md-6\">
                        <label for=\"form_lastname\">Tipo de movimiento <span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idtipomov", array()), 'widget');
        echo "
                        ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idtipomov", array()), 'errors');
        echo "
                    </div>
                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col col-md-12\">
                        <label for=\"form_lastname\">Descripcion</label>
                        ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcionmov", array()), 'widget');
        echo "
                        ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcionmov", array()), 'errors');
        echo "
                    </div>
                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col col-xs-4\" align=\"left\">
                        <label for=\"form_monto\">Monto <span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "monto", array()), 'widget');
        echo "
                        ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "monto", array()), 'errors');
        echo "
                    </div>
                    <div class=\"col col-xs-4\" align=\"center\">
                        <label for=\"form_file\">Adjuntar Comprobante</label>
                        ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "comprobante_file", array()), 'widget');
        echo "
                        ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "comprobante_file", array()), 'errors');
        echo "
                    </div>
                    <div class=\"col col-xs-4\" align=\"right\">
                        <label for=\"form_estado\">Estado <span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estadomov", array()), 'widget');
        echo "
                        ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estadomov", array()), 'errors');
        echo "
                    </div>
                </div>
                <hr>
                <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "movimiento\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />
                    </div>
                </div>
                ";
        // line 68
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

            </div>
        </div>
        <br>
        <br>
    </div>


</div>
</br>
</div>
<br>
<br>
</div>


";
        
        $__internal_98c5ebfc6f4230a29c5135c8a8b638223650ae387e8caf0e36b3bd0ff46f7604->leave($__internal_98c5ebfc6f4230a29c5135c8a8b638223650ae387e8caf0e36b3bd0ff46f7604_prof);

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
        return array (  174 => 68,  167 => 64,  158 => 58,  154 => 57,  147 => 53,  143 => 52,  136 => 48,  132 => 47,  122 => 40,  118 => 39,  108 => 32,  104 => 31,  97 => 27,  93 => 26,  86 => 22,  73 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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
{% block page_subtitle %}Modificar Movimiento De Fondos {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%;\">

        <div  style=\"width:90%; margin-top: 5%; margin-left: 5%; background-color:#D8D8D8; border-radius:5px \" class=\"panel panel-default\"> 
            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Modificar Movimiento De Fondos</h2>
                <h4 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body; margin-top: -3px;\">Complete los campos requeridos:<span style=\"font-size: 25;color: red\" >*</span></h4>
            </div>

            <div  class=\"container\"  style=\"width: 80%; margin-top: 3%; margin-bottom: 3%\">


                {{ form_start(edit_form) }}
                <div class=\"row\">
                    <div class=\"col col-md-6\">
                        <label for=\"form_firstname\">Asociar Cuenta <span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(edit_form.idcuenta) }}
                        {{ form_errors(edit_form.idcuenta) }}
                    </div>
                    <div class=\"col col-md-6\">
                        <label for=\"form_lastname\">Tipo de movimiento <span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(edit_form.idtipomov) }}
                        {{ form_errors(edit_form.idtipomov) }}
                    </div>
                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col col-md-12\">
                        <label for=\"form_lastname\">Descripcion</label>
                        {{ form_widget(edit_form.descripcionmov) }}
                        {{ form_errors(edit_form.descripcionmov) }}
                    </div>
                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col col-xs-4\" align=\"left\">
                        <label for=\"form_monto\">Monto <span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(edit_form.monto) }}
                        {{ form_errors(edit_form.monto) }}
                    </div>
                    <div class=\"col col-xs-4\" align=\"center\">
                        <label for=\"form_file\">Adjuntar Comprobante</label>
                        {{ form_widget(edit_form.comprobante_file) }}
                        {{ form_errors(edit_form.comprobante_file) }}
                    </div>
                    <div class=\"col col-xs-4\" align=\"right\">
                        <label for=\"form_estado\">Estado <span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(edit_form.estadomov) }}
                        {{ form_errors(edit_form.estadomov) }}
                    </div>
                </div>
                <hr>
                <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"{{ absolute_url(asset('')) }}movimiento\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />
                    </div>
                </div>
                {{ form_end(edit_form) }}

            </div>
        </div>
        <br>
        <br>
    </div>


</div>
</br>
</div>
<br>
<br>
</div>


{% endblock %}", "movimiento/Movimientoedit.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\movimiento\\Movimientoedit.html.twig");
    }
}
