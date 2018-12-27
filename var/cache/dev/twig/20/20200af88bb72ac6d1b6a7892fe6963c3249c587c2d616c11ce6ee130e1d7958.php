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
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f6f372946a29dc18f5e7358b52432acce19025c8557fd73cc8eb2f8c2e6f0a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f6f372946a29dc18f5e7358b52432acce19025c8557fd73cc8eb2f8c2e6f0a2->enter($__internal_0f6f372946a29dc18f5e7358b52432acce19025c8557fd73cc8eb2f8c2e6f0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cuenta/Cuentaedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f6f372946a29dc18f5e7358b52432acce19025c8557fd73cc8eb2f8c2e6f0a2->leave($__internal_0f6f372946a29dc18f5e7358b52432acce19025c8557fd73cc8eb2f8c2e6f0a2_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_3ea34cc437bf746a71d82cbf774e8362fc44c0c63a4ae0ef6da972756bc696c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea34cc437bf746a71d82cbf774e8362fc44c0c63a4ae0ef6da972756bc696c9->enter($__internal_3ea34cc437bf746a71d82cbf774e8362fc44c0c63a4ae0ef6da972756bc696c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Cuentas | ";
        
        $__internal_3ea34cc437bf746a71d82cbf774e8362fc44c0c63a4ae0ef6da972756bc696c9->leave($__internal_3ea34cc437bf746a71d82cbf774e8362fc44c0c63a4ae0ef6da972756bc696c9_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_05329cabd24dd14884ce96a572ac1397cc16e702d1a57a2bf44bd6e1e35b761f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05329cabd24dd14884ce96a572ac1397cc16e702d1a57a2bf44bd6e1e35b761f->enter($__internal_05329cabd24dd14884ce96a572ac1397cc16e702d1a57a2bf44bd6e1e35b761f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Modificar Cuentas ";
        
        $__internal_05329cabd24dd14884ce96a572ac1397cc16e702d1a57a2bf44bd6e1e35b761f->leave($__internal_05329cabd24dd14884ce96a572ac1397cc16e702d1a57a2bf44bd6e1e35b761f_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_53ee03a20dd8738ecfa133e89200023b1a652c45e7251eea393254ffb683aef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ee03a20dd8738ecfa133e89200023b1a652c45e7251eea393254ffb683aef6->enter($__internal_53ee03a20dd8738ecfa133e89200023b1a652c45e7251eea393254ffb683aef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                    <div class=\"col col-md-6\" align=\"left\">
                        <label for=\"form_ncuenta\">Numero De Cuenta <span style=\"font-size: 25;color: red\" >*</span></label>
                                ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "numcuenta", array()), 'widget', array("attr" => array("disabled" => "true")));
        echo "
                                ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "numcuenta", array()), 'errors');
        echo "
                    </div>
            
                    
                    <div class=\"col col-md-6\" align=\"left\">
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
                 <div class=\"col col-md-10\">
                     <label for=\"form_descripcion\">Descripcion</label>
                                ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcioncuenta", array()), 'errors');
        echo "
                                ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcioncuenta", array()), 'widget');
        echo "
                 </div>
                 <div class=\"col col-md-2\" align=\"right\">
                        <label for=\"form_estado\">Activo</label>
                        ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estadocuenta", array()), 'widget');
        echo "
                        ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estadocuenta", array()), 'errors');
        echo "
                    </div>
             </div>
              <br>
              <div class=\"row\">
                  <div class=\"col col-md-4\" align='left'>
                  <label for=\"form_saldo\">Saldo Inicial <span style=\"font-size: 25;color: red\" >*</span></label>
                                ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "saldocuenta", array()), 'widget', array("attr" => array("disabled" => "true")));
        echo "
                                 ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "saldocuenta", array()), 'errors');
        echo "
                  </div>
                  <div class=\"col col-md-4\" align='left'>
                  <label for=\"form_banco\">Banco <span style=\"font-size: 25;color: red\" >*</span></label>
                                ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idbanco", array()), 'errors');
        echo "
                                ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idbanco", array()), 'widget');
        echo "
                  </div>
                  <div class=\"col col-md-4\" align='left'>
                  <label for=\"form_cuenta\">Cuenta <span style=\"font-size: 25;color: red\" >*</span></label>
                                ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idtipocuenta", array()), 'errors');
        echo "
                                ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idtipocuenta", array()), 'widget');
        echo "
                  </div>
                    
                </div>
             <hr>
                <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "cuenta\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />
                    </div>
                </div>
                     ";
        // line 76
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
 
            </div>
        </div>
        <br>
        <br>
    </div>


";
        
        $__internal_53ee03a20dd8738ecfa133e89200023b1a652c45e7251eea393254ffb683aef6->leave($__internal_53ee03a20dd8738ecfa133e89200023b1a652c45e7251eea393254ffb683aef6_prof);

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
        return array (  188 => 76,  181 => 72,  171 => 65,  167 => 64,  160 => 60,  156 => 59,  149 => 55,  145 => 54,  135 => 47,  131 => 46,  124 => 42,  120 => 41,  110 => 34,  106 => 33,  97 => 27,  93 => 26,  86 => 22,  73 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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
                    <div class=\"col col-md-6\" align=\"left\">
                        <label for=\"form_ncuenta\">Numero De Cuenta <span style=\"font-size: 25;color: red\" >*</span></label>
                                {{ form_widget(edit_form.numcuenta,{'attr':{'disabled':'true'}}) }}
                                {{ form_errors(edit_form.numcuenta) }}
                    </div>
            
                    
                    <div class=\"col col-md-6\" align=\"left\">
                        <label for=\"form_nomcuenta\">Nombre De Cuenta <span style=\"font-size: 25;color: red\" >*</span></label>
                                {{ form_widget(edit_form.nomcuenta) }}
                                {{ form_errors(edit_form.nomcuenta) }}
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
                        <label for=\"form_estado\">Activo</label>
                        {{ form_widget(edit_form.estadocuenta) }}
                        {{ form_errors(edit_form.estadocuenta) }}
                    </div>
             </div>
              <br>
              <div class=\"row\">
                  <div class=\"col col-md-4\" align='left'>
                  <label for=\"form_saldo\">Saldo Inicial <span style=\"font-size: 25;color: red\" >*</span></label>
                                {{ form_widget(edit_form.saldocuenta, {'attr':{'disabled':'true'}}) }}
                                 {{ form_errors(edit_form.saldocuenta ) }}
                  </div>
                  <div class=\"col col-md-4\" align='left'>
                  <label for=\"form_banco\">Banco <span style=\"font-size: 25;color: red\" >*</span></label>
                                {{ form_errors(edit_form.idbanco) }}
                                {{ form_widget(edit_form.idbanco) }}
                  </div>
                  <div class=\"col col-md-4\" align='left'>
                  <label for=\"form_cuenta\">Cuenta <span style=\"font-size: 25;color: red\" >*</span></label>
                                {{ form_errors(edit_form.idtipocuenta) }}
                                {{ form_widget(edit_form.idtipocuenta) }}
                  </div>
                    
                </div>
             <hr>
                <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"{{ absolute_url(asset('')) }}cuenta\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />
                    </div>
                </div>
                     {{ form_end(edit_form) }}
 
            </div>
        </div>
        <br>
        <br>
    </div>


{% endblock %}", "cuenta/Cuentaedit.html.twig", "/home/ubuntu/workspace/app/Resources/views/cuenta/Cuentaedit.html.twig");
    }
}
