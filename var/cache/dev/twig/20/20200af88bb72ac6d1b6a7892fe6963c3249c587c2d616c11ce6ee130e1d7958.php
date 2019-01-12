<?php

/* cuenta/Cuentaedit.html.twig */
class __TwigTemplate_425c0b225610a0a642743bbc96a3e59ef003f0da1b43e4a793e62bdfb68a7a8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "cuenta/Cuentaedit.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
            'javascripts_inline' => array($this, 'block_javascripts_inline'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44e583155bf37e4d67d4b10751c92aa13f0ba20dfc43e87e48b3f9fa20975a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e583155bf37e4d67d4b10751c92aa13f0ba20dfc43e87e48b3f9fa20975a91->enter($__internal_44e583155bf37e4d67d4b10751c92aa13f0ba20dfc43e87e48b3f9fa20975a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cuenta/Cuentaedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44e583155bf37e4d67d4b10751c92aa13f0ba20dfc43e87e48b3f9fa20975a91->leave($__internal_44e583155bf37e4d67d4b10751c92aa13f0ba20dfc43e87e48b3f9fa20975a91_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_e5dddc0662c93cf597627b69af98d64703de1337c1764e6d8ea6cd164710fe51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5dddc0662c93cf597627b69af98d64703de1337c1764e6d8ea6cd164710fe51->enter($__internal_e5dddc0662c93cf597627b69af98d64703de1337c1764e6d8ea6cd164710fe51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Cuentas | ";
        
        $__internal_e5dddc0662c93cf597627b69af98d64703de1337c1764e6d8ea6cd164710fe51->leave($__internal_e5dddc0662c93cf597627b69af98d64703de1337c1764e6d8ea6cd164710fe51_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_3b64afc649655d305d4aa579b838fd842534e9ef0e2836890a04439c9e767375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b64afc649655d305d4aa579b838fd842534e9ef0e2836890a04439c9e767375->enter($__internal_3b64afc649655d305d4aa579b838fd842534e9ef0e2836890a04439c9e767375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Modificar Cuentas ";
        
        $__internal_3b64afc649655d305d4aa579b838fd842534e9ef0e2836890a04439c9e767375->leave($__internal_3b64afc649655d305d4aa579b838fd842534e9ef0e2836890a04439c9e767375_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_dac10aac9b9aeb9f3afce00650445d313dd093808be241f115cd89dbd3f51f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac10aac9b9aeb9f3afce00650445d313dd093808be241f115cd89dbd3f51f9f->enter($__internal_dac10aac9b9aeb9f3afce00650445d313dd093808be241f115cd89dbd3f51f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
    <div class=\"box box-primary\" style=\"width: 100%;\">

        <div  style=\"width:90%; margin-top: 5%; margin-left: 5%; background-color:#F3F3F3; border-radius:5px \" class=\"panel panel-default\"> 
            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Banco.png"), "html", null, true);
        echo "\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Modificar Cuenta</h2>
                <h4 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body; margin-top: -3px;\">Complete los campos requeridos:<span style=\"font-size: 25;color: red\" >*</span></h4>
            </div>

            <div  class=\"container\"  style=\"width: 80%; margin-top: 3%; margin-bottom: 3%\">


                ";
        // line 22
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                <div class=\"row\">
                    <div class=\"col col-md-6 hidden\" align=\"left\">
                        <label for=\"form_ncuenta\">Numero De Cuenta <span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "numcuenta", array()), 'widget');
        echo "
                        ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "numcuenta", array()), 'errors');
        echo "
                    </div>


                    <div class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_nomcuenta\">Nombre De Cuenta <span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomcuenta", array()), 'widget');
        echo "
                        ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomcuenta", array()), 'errors');
        echo "
                    </div>
                </div>

                <br>
                <div class=\"row\">
                    <div class=\"col col-md-4 hidden\" align='left'>
                        <label for=\"form_saldo\">Saldo Inicial <span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "saldocuenta", array()), 'widget');
        echo "
                        ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "saldocuenta", array()), 'errors');
        echo "
                    </div>
                    <div class=\"col col-md-6 hidden\" align='left'>
                        <label for=\"form_banco\">Banco <span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idbanco", array()), 'widget');
        echo "
                        ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idbanco", array()), 'errors');
        echo "

                    </div>
                    <div class=\"col col-md-6\" align='left'>
                        <label for=\"form_cuenta\">Banco <span style=\"font-size: 25;color: red\" >*</span></label>
                        <input class=\"form-control\" type=\"text\" id=\"idbanco\"  disabled=\"disabled\"/>
                    </div>    
                        
                    <div class=\"col col-md-6 hidden\" align='left'>
                        <label for=\"form_cuenta\">Cuenta <span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idtipocuenta", array()), 'widget');
        echo "
                        ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idtipocuenta", array()), 'errors');
        echo "
                    </div>
                    <div class=\"col col-md-6\" align='left'>
                        <label for=\"form_cuenta\">Cuenta <span style=\"font-size: 25;color: red\" >*</span></label>
                        <input class=\"form-control\" type=\"text\" id=\"idcuenta\"  disabled=\"disabled\"/>
                    </div>

                </div>
                <br>   
                <div class=\"row\">
                    <div class=\"col col-md-10\">
                        <label for=\"form_descripcion\">Descripcion</label>
                        ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcioncuenta", array()), 'errors');
        echo "
                        ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcioncuenta", array()), 'widget');
        echo "
                    </div>
                    <div class=\"col col-md-2\" align=\"right\">
                        <label for=\"form_estado\">Estado</label>
                        ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estadocuenta", array()), 'widget');
        echo "
                        ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estadocuenta", array()), 'errors');
        echo "
                    </div>
                </div>
                <hr>
                <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cuenta_index");
        echo " \" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />
                    </div>
                </div>
                ";
        // line 87
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

            </div>
        </div>
        <br>
        <br>
    </div>


";
        
        $__internal_dac10aac9b9aeb9f3afce00650445d313dd093808be241f115cd89dbd3f51f9f->leave($__internal_dac10aac9b9aeb9f3afce00650445d313dd093808be241f115cd89dbd3f51f9f_prof);

    }

    // line 97
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_27489da5179cc7855d2b1f960e7f95dfcadbdea5367f62b3e67a884c47d92300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27489da5179cc7855d2b1f960e7f95dfcadbdea5367f62b3e67a884c47d92300->enter($__internal_27489da5179cc7855d2b1f960e7f95dfcadbdea5367f62b3e67a884c47d92300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        // line 98
        echo "    <script>
        \$(document).ready(function(){
           \$(\"#idcuenta\").val(\$('#appbundle_cuenta_idtipocuenta option:selected').text()); 
           \$(\"#idbanco\").val(\$('#appbundle_cuenta_idbanco option:selected').text());
        });
    </script>
";
        
        $__internal_27489da5179cc7855d2b1f960e7f95dfcadbdea5367f62b3e67a884c47d92300->leave($__internal_27489da5179cc7855d2b1f960e7f95dfcadbdea5367f62b3e67a884c47d92300_prof);

    }

    public function getTemplateName()
    {
        return "cuenta/Cuentaedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 98,  217 => 97,  200 => 87,  193 => 83,  184 => 77,  180 => 76,  173 => 72,  169 => 71,  154 => 59,  150 => 58,  137 => 48,  133 => 47,  126 => 43,  122 => 42,  111 => 34,  107 => 33,  98 => 27,  94 => 26,  87 => 22,  74 => 12,  67 => 7,  61 => 6,  49 => 4,  37 => 3,  11 => 1,);
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
{% block page_subtitle %}Modificar Cuentas {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%;\">

        <div  style=\"width:90%; margin-top: 5%; margin-left: 5%; background-color:#F3F3F3; border-radius:5px \" class=\"panel panel-default\"> 
            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Modificar Cuenta</h2>
                <h4 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body; margin-top: -3px;\">Complete los campos requeridos:<span style=\"font-size: 25;color: red\" >*</span></h4>
            </div>

            <div  class=\"container\"  style=\"width: 80%; margin-top: 3%; margin-bottom: 3%\">


                {{ form_start(edit_form) }}
                <div class=\"row\">
                    <div class=\"col col-md-6 hidden\" align=\"left\">
                        <label for=\"form_ncuenta\">Numero De Cuenta <span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(edit_form.numcuenta) }}
                        {{ form_errors(edit_form.numcuenta) }}
                    </div>


                    <div class=\"col col-md-12\" align=\"left\">
                        <label for=\"form_nomcuenta\">Nombre De Cuenta <span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(edit_form.nomcuenta) }}
                        {{ form_errors(edit_form.nomcuenta) }}
                    </div>
                </div>

                <br>
                <div class=\"row\">
                    <div class=\"col col-md-4 hidden\" align='left'>
                        <label for=\"form_saldo\">Saldo Inicial <span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(edit_form.saldocuenta) }}
                        {{ form_errors(edit_form.saldocuenta ) }}
                    </div>
                    <div class=\"col col-md-6 hidden\" align='left'>
                        <label for=\"form_banco\">Banco <span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(edit_form.idbanco) }}
                        {{ form_errors(edit_form.idbanco) }}

                    </div>
                    <div class=\"col col-md-6\" align='left'>
                        <label for=\"form_cuenta\">Banco <span style=\"font-size: 25;color: red\" >*</span></label>
                        <input class=\"form-control\" type=\"text\" id=\"idbanco\"  disabled=\"disabled\"/>
                    </div>    
                        
                    <div class=\"col col-md-6 hidden\" align='left'>
                        <label for=\"form_cuenta\">Cuenta <span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(edit_form.idtipocuenta) }}
                        {{ form_errors(edit_form.idtipocuenta) }}
                    </div>
                    <div class=\"col col-md-6\" align='left'>
                        <label for=\"form_cuenta\">Cuenta <span style=\"font-size: 25;color: red\" >*</span></label>
                        <input class=\"form-control\" type=\"text\" id=\"idcuenta\"  disabled=\"disabled\"/>
                    </div>

                </div>
                <br>   
                <div class=\"row\">
                    <div class=\"col col-md-10\">
                        <label for=\"form_descripcion\">Descripcion</label>
                        {{ form_errors(edit_form.descripcioncuenta) }}
                        {{ form_widget(edit_form.descripcioncuenta) }}
                    </div>
                    <div class=\"col col-md-2\" align=\"right\">
                        <label for=\"form_estado\">Estado</label>
                        {{ form_widget(edit_form.estadocuenta) }}
                        {{ form_errors(edit_form.estadocuenta) }}
                    </div>
                </div>
                <hr>
                <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"{{ path('cuenta_index') }} \" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />
                    </div>
                </div>
                {{ form_end(edit_form) }}

            </div>
        </div>
        <br>
        <br>
    </div>


{% endblock %}
{% block javascripts_inline %}
    <script>
        \$(document).ready(function(){
           \$(\"#idcuenta\").val(\$('#appbundle_cuenta_idtipocuenta option:selected').text()); 
           \$(\"#idbanco\").val(\$('#appbundle_cuenta_idbanco option:selected').text());
        });
    </script>
{% endblock %}    ", "cuenta/Cuentaedit.html.twig", "/home/ubuntu/workspace/app/Resources/views/cuenta/Cuentaedit.html.twig");
    }
}
