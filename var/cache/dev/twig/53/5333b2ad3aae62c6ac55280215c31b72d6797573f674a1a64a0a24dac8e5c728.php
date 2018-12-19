<?php

/* movimiento/Movimientoedit.html.twig */
class __TwigTemplate_04cb6a1f7a03c1cc6908b22f8f66c4ad3bccc1bd0250a998bf945c18e1c710e9 extends Twig_Template
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
        $__internal_715ff822632176a22ec003f6e8aeb9b989ad8c271caa62c41a709f83ff7513b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_715ff822632176a22ec003f6e8aeb9b989ad8c271caa62c41a709f83ff7513b2->enter($__internal_715ff822632176a22ec003f6e8aeb9b989ad8c271caa62c41a709f83ff7513b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movimiento/Movimientoedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_715ff822632176a22ec003f6e8aeb9b989ad8c271caa62c41a709f83ff7513b2->leave($__internal_715ff822632176a22ec003f6e8aeb9b989ad8c271caa62c41a709f83ff7513b2_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_8efaee7824a4ebffbac3e222e0497bc63e7bf8c1cbd67e411aa8f2eadeeaa514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8efaee7824a4ebffbac3e222e0497bc63e7bf8c1cbd67e411aa8f2eadeeaa514->enter($__internal_8efaee7824a4ebffbac3e222e0497bc63e7bf8c1cbd67e411aa8f2eadeeaa514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Movimiento | ";
        
        $__internal_8efaee7824a4ebffbac3e222e0497bc63e7bf8c1cbd67e411aa8f2eadeeaa514->leave($__internal_8efaee7824a4ebffbac3e222e0497bc63e7bf8c1cbd67e411aa8f2eadeeaa514_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_ce30a71a901f9ac2a2aee0d57224cc3a8344ef3aa86e0fd8412e7eed03efec12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce30a71a901f9ac2a2aee0d57224cc3a8344ef3aa86e0fd8412e7eed03efec12->enter($__internal_ce30a71a901f9ac2a2aee0d57224cc3a8344ef3aa86e0fd8412e7eed03efec12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Modificar Movimiento De Fondos ";
        
        $__internal_ce30a71a901f9ac2a2aee0d57224cc3a8344ef3aa86e0fd8412e7eed03efec12->leave($__internal_ce30a71a901f9ac2a2aee0d57224cc3a8344ef3aa86e0fd8412e7eed03efec12_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_5a42607e8b45852dda4f734935932e41163f381240ff740186de18a237475597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a42607e8b45852dda4f734935932e41163f381240ff740186de18a237475597->enter($__internal_5a42607e8b45852dda4f734935932e41163f381240ff740186de18a237475597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Modificar Movimiento De Fondos</h2>
                <h4 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body; margin-top: -3px;\">Complete los campos requeridos:<span style=\"font-size: 25;color: red\" >*</span></h4>
            </div>

            <div  class=\"container\"  style=\"width: 80%; margin-top: 3%; margin-bottom: 3%\">
                ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                <div class=\"row\">
                    <div class=\"col col-md-6\">
                        <label for=\"form_firstname\">Asociar Cuenta <span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idcuenta", array()), 'widget');
        echo "
                        ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idcuenta", array()), 'errors');
        echo "
                    </div>
                    <div class=\"col col-md-6\">
                        <label for=\"form_lastname\">Tipo de movimiento <span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idtipomov", array()), 'widget');
        echo "
                        ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idtipomov", array()), 'errors');
        echo "
                    </div>
                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col col-md-10\">
                        <label for=\"form_lastname\">Descripcion</label>
                        ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcionmov", array()), 'widget');
        echo "
                        ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcionmov", array()), 'errors');
        echo "
                    </div>
                    <div class=\"col col-md-2\" >
                        <label for=\"form_estado\">Estado</label>
                        ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estadomov", array()), 'widget');
        echo "
                        ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estadomov", array()), 'errors');
        echo "
                    </div>
                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col col-md-6\" align=\"left\">
                        <label for=\"form_monto\">Monto <span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "monto", array()), 'widget');
        echo "
                        ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "monto", array()), 'errors');
        echo "
                    </div>
                    <div class=\"col col-md-6\" align=\"center\">
                        <label for=\"form_file\">Adjuntar Comprobante</label>
                        ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "comprobante_file", array()), 'widget');
        echo "
                        ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "comprobante_file", array()), 'errors');
        echo "
                    </div>
                    
                </div>
                <hr>
                <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "movimiento\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />
                    </div>
                </div>
                ";
        // line 67
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

            </div>
        </div>
        <br>
        <br>
    </div>
<br>
<br>


";
        
        $__internal_5a42607e8b45852dda4f734935932e41163f381240ff740186de18a237475597->leave($__internal_5a42607e8b45852dda4f734935932e41163f381240ff740186de18a237475597_prof);

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
        return array (  173 => 67,  166 => 63,  156 => 56,  152 => 55,  145 => 51,  141 => 50,  131 => 43,  127 => 42,  120 => 38,  116 => 37,  106 => 30,  102 => 29,  95 => 25,  91 => 24,  84 => 20,  73 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

        <div  style=\"width:90%; margin-top: 5%; margin-left: 5%; background-color:#F3F3F3; border-radius:5px \" class=\"panel panel-default\"> 
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
                    <div class=\"col col-md-10\">
                        <label for=\"form_lastname\">Descripcion</label>
                        {{ form_widget(edit_form.descripcionmov) }}
                        {{ form_errors(edit_form.descripcionmov) }}
                    </div>
                    <div class=\"col col-md-2\" >
                        <label for=\"form_estado\">Estado</label>
                        {{ form_widget(edit_form.estadomov) }}
                        {{ form_errors(edit_form.estadomov) }}
                    </div>
                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col col-md-6\" align=\"left\">
                        <label for=\"form_monto\">Monto <span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(edit_form.monto) }}
                        {{ form_errors(edit_form.monto) }}
                    </div>
                    <div class=\"col col-md-6\" align=\"center\">
                        <label for=\"form_file\">Adjuntar Comprobante</label>
                        {{ form_widget(edit_form.comprobante_file) }}
                        {{ form_errors(edit_form.comprobante_file) }}
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
<br>
<br>


{% endblock %}", "movimiento/Movimientoedit.html.twig", "/home/ubuntu/workspace/app/Resources/views/movimiento/Movimientoedit.html.twig");
    }
}
