<?php

/* solicitudbecario/Solicitudbecarionew.html.twig */
class __TwigTemplate_c8f56c59f600c5da0904c39c8e95976d69b374d8ad41c988a229820d8f561b7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "solicitudbecario/Solicitudbecarionew.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_75169d3f260ed02c7ff238cd2ef3904dbb3e22e0a9895b8a894cac2e628d027a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75169d3f260ed02c7ff238cd2ef3904dbb3e22e0a9895b8a894cac2e628d027a->enter($__internal_75169d3f260ed02c7ff238cd2ef3904dbb3e22e0a9895b8a894cac2e628d027a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "solicitudbecario/Solicitudbecarionew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75169d3f260ed02c7ff238cd2ef3904dbb3e22e0a9895b8a894cac2e628d027a->leave($__internal_75169d3f260ed02c7ff238cd2ef3904dbb3e22e0a9895b8a894cac2e628d027a_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9ec28ecbfc09ed07c4cf85964363572748670ef9ec9cb85c459618e93af7e46f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec28ecbfc09ed07c4cf85964363572748670ef9ec9cb85c459618e93af7e46f->enter($__internal_9ec28ecbfc09ed07c4cf85964363572748670ef9ec9cb85c459618e93af7e46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        nav > .nav.nav-tabs{

            border: none;
            color:#fff;
            background:grey;
            border-radius:0;

        }
        nav > div a.nav-item.nav-link,
        nav > div a.nav-item.nav-link.active
        {
            border: none;
            padding: 18px 25px;
            color:#fff;
            background:gray;
            border-radius:0;
        }

        nav > div a.nav-item.nav-link.active:after
        {
            content: \"\";
            position: relative;
            bottom: -60px;
            left: -10%;
            border: 15px solid transparent;
            border-top-color: gainsboro;
        }
        .tab-content{
            background: #fdfdfd;
            line-height: 25px;
            border: 1px solid #ddd;
            border-top: 5px solid gainsboro;
            border-bottom: 5px solid gainsboro;
            padding:30px 25px;
        }

        nav > div a.nav-item.nav-link:hover,
        nav > div a.nav-item.nav-link:focus
        {
            border: none;
            background: gainsboro;
            color:#fff;
            border-radius:0;
            transition:background 0.20s linear;
        }


    </style>
";
        
        $__internal_9ec28ecbfc09ed07c4cf85964363572748670ef9ec9cb85c459618e93af7e46f->leave($__internal_9ec28ecbfc09ed07c4cf85964363572748670ef9ec9cb85c459618e93af7e46f_prof);

    }

    // line 56
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_a243d7dd16d8ae5759830a57ed23731581419ab815d8e321089e5c0f931ecbe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a243d7dd16d8ae5759830a57ed23731581419ab815d8e321089e5c0f931ecbe4->enter($__internal_a243d7dd16d8ae5759830a57ed23731581419ab815d8e321089e5c0f931ecbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Solicitud | ";
        
        $__internal_a243d7dd16d8ae5759830a57ed23731581419ab815d8e321089e5c0f931ecbe4->leave($__internal_a243d7dd16d8ae5759830a57ed23731581419ab815d8e321089e5c0f931ecbe4_prof);

    }

    // line 57
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_a1b1b5f45585688406f408bd0519728056acd72bc6cc613970a885e3d90b6dbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b1b5f45585688406f408bd0519728056acd72bc6cc613970a885e3d90b6dbb->enter($__internal_a1b1b5f45585688406f408bd0519728056acd72bc6cc613970a885e3d90b6dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Registro De Solicitud ";
        
        $__internal_a1b1b5f45585688406f408bd0519728056acd72bc6cc613970a885e3d90b6dbb->leave($__internal_a1b1b5f45585688406f408bd0519728056acd72bc6cc613970a885e3d90b6dbb_prof);

    }

    // line 59
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_2cb4acd155b6c4cf637e19461320ca4f47904575e16523a4aab747b5bb78bf59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb4acd155b6c4cf637e19461320ca4f47904575e16523a4aab747b5bb78bf59->enter($__internal_2cb4acd155b6c4cf637e19461320ca4f47904575e16523a4aab747b5bb78bf59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 60
        echo "
     <div  style=\"width:90%; margin-top: 5%; margin-left: 5%; background-color:#F3F3F3; border-radius:5px \" class=\"panel panel-default\">
            <div class=\"row\">
                <div class=\"col col-md-12\" align=\"center\" >
                    <img style=\"width:80px;margin-top: 2%;\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/document.png"), "html", null, true);
        echo "\"></img>
                </div>
            </div>
            <div class=\"row\">    
                <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\">
                    <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Solicitud</h2>
                    <h4 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body; margin-top: -3px;\">Complete los campos requeridos:<span style=\"font-size: 25;color: red\" >*</span></h4>
                </div>
            </div>    
    </div>

";
        // line 75
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

<div class=\"container tabs-wrap\" style=\"width: 90%;  margin-bottom: 3%\">
  <ul class=\"nav nav-tabs\" role=\"tablist\">
    <li class=\"active\" role=\"presentation\">
      <a role=\"tab\" aria-expanded=\"true\" aria-controls=\"datospersonales\" href=\"#datospersonales\" data-toggle=\"tab\">Datos Personales</a>
    </li>
    <li>
      <a role=\"tab\" aria-expanded=\"false\" aria-controls=\"datosacademicos\" href=\"#datosacademicos\" data-toggle=\"tab\">Datos Académicos</a>
    </li>
    <li>
      <a role=\"tab\" aria-expanded=\"false\" aria-controls=\"datosfamiliares\" href=\"#datosfamiliares\" data-toggle=\"tab\">Datos Familiares</a>
    </li>
  </ul>

<div class=\"tab-content\">

  <div class=\"tab-pane active\" id=\"datospersonales\" role=\"tabpanel\" style=\"width:90%; margin-left: 5%\">

  <div class=\"row\">
                            <div class=\"col col-md-6\"><h3>Datos Personales</h3></div>
                            </div>
                                <hr>
                            <div class=\"row\">     

                                <div class=\"col col-md-4\" align=\"left\">
                                    <label for=\"form_documento\">Documento<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "docsoliidentidadbecario", array()), 'widget');
        echo "
                                    ";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "docsoliidentidadbecario", array()), 'errors');
        echo "   
                                </div> 

                                <div class=\"col col-md-4\" align=\"left\">
                                    <label for=\"form_cdirecto\">Teléfono<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telsolipersonalbecario", array()), 'widget');
        echo "
                                    ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telsolipersonalbecario", array()), 'errors');
        echo "   
                                </div> 

                                <div class=\"col col-md-4\" align=\"left\">
                                    <label for=\"form_telefono\">Otro Teléfono<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonosolibecario", array()), 'widget');
        echo "
                                    ";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonosolibecario", array()), 'errors');
        echo "   
                                </div> 
                            </div>
                            <br>
                            <div class=\"row\" >

                                <div class=\"col col-md-4\" align=\"left\">
                                    <label for=\"form_edad\">Fecha Nacimiento<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaNacimiento", array()), 'widget');
        echo "
                                    ";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaNacimiento", array()), 'errors');
        echo "   
                                </div>

                                <div class=\"col col-md-4\" align=\"left\">
                                    <label for=\"form_edad\">Sexo<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexo", array()), 'widget');
        echo "
                                    ";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexo", array()), 'errors');
        echo "   
                                </div>

                                <div class=\"col col-md-4\" align=\"left\">
                                    <label for=\"form_trabajo\">¿Posee Trabajo?</label>
                                    ";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trabajosolibecario", array()), 'widget');
        echo "
                                    ";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trabajosolibecario", array()), 'errors');
        echo "   
                                </div> 


                            </div>
                            <br>

                            <div class=\"row\">  
                                <div class=\"col col-md-12\" align=\"left\">
                                    <label for=\"form_direccion\">Dirección<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccionsolibecario", array()), 'widget');
        echo "
                                    ";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccionsolibecario", array()), 'errors');
        echo "   
                                </div> 
                            </div>
                                <br>
                            <div class=\"row\">  
                                <div class=\"col col-md-12\" align=\"left\">
                                    <label for=\"form_antecedentes\">Descripción Personal</label>
                                    ";
        // line 154
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "antecedentes", array()), 'widget');
        echo "
                                    ";
        // line 155
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "antecedentes", array()), 'errors');
        echo "   
                                </div> 
                            </div>
                            <br>
                            <div class=\"row\">  
                                <div class=\"col col-md-12\" align=\"left\">
                                    <label for=\"form_religion\">Religión</label>
                                    ";
        // line 162
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "religion", array()), 'widget');
        echo "
                                    ";
        // line 163
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "religion", array()), 'errors');
        echo "   
                                </div>
                      
                            </div>
                            <br>
                            <div class=\"row\">  
                             <div class=\"col col-md-12\" align=\"right\">                            
                                <a class=\"btn btn-primary continue\">Continuar</a>
                                <a href=\"";
        // line 171
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("solicitudbecario_index");
        echo "\" class=\"btn btn-danger btn-xl\">Cancelar</a>
                             </div>
                            </div>
                        
  </div>

  <div class=\"tab-pane\" id=\"datosacademicos\" role=\"tabpanel\"  style=\"width:90%; margin-left: 5%\">

  <h3>Datos Académicos</h3>
                            <hr>
                            <div class=\"row\">  

                                <div class=\"col col-md-6\" align=\"left\">
                                    <label for=\"form_carrera\">Carrera Universitaria<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 185
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "carrerasoliestudiarbecario", array()), 'widget');
        echo "
                                    ";
        // line 186
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "carrerasoliestudiarbecario", array()), 'errors');
        echo "   
                                </div> 

                                <div class=\"col col-md-6\" align=\"left\">
                                    <label for=\"form_universidad\">Universidad<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 191
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "universidadsolibecario", array()), 'widget');
        echo "
                                    ";
        // line 192
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "universidadsolibecario", array()), 'errors');
        echo "   
                                </div>
                            </div>

                            <br>

                            <div class=\"row\">
                                <div class=\"col col-md-6\" align=\"left\" id='datetimepicker1'>
                                    <label for=\"form_anioinicio\">Fecha Estimada de Ingreso en la Universidad<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 201
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aniosoliingresobecario", array()), 'widget');
        echo "
                                    ";
        // line 202
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aniosoliingresobecario", array()), 'errors');
        echo "   
                                </div>

                                <div class=\"col col-md-6\" align=\"left\" id='datetimepicker2'>
                                    <label for=\"form_aniofin\">Fecha Estimada de Egreso en la Universidad<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 207
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aniosolifinalizacionbecario", array()), 'widget');
        echo "
                                    ";
        // line 208
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aniosolifinalizacionbecario", array()), 'errors');
        echo "   
                                </div>
                            </div>
                            <br>

                            <div class=\"row\">
                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_paes\">Nota Paes<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 216
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "paes", array()), 'widget');
        echo "
                                    ";
        // line 217
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "paes", array()), 'errors');
        echo "   
                                </div>

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_matricula\">Monto Matricula<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 222
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montosolimatriculabecario", array()), 'widget');
        echo "
                                    ";
        // line 223
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montosolimatriculabecario", array()), 'errors');
        echo "   
                                </div>

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_cuotaM\">Cuota Mensual<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 228
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuotasolimensualbecario", array()), 'widget');
        echo "
                                    ";
        // line 229
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuotasolimensualbecario", array()), 'errors');
        echo "   
                                </div>

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_duracion\">Duración de Carrera<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 234
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duracionsolicarrerabecario", array()), 'widget', array("attr" => array("placeholder" => "Numero de años")));
        echo "
                                    ";
        // line 235
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duracionsolicarrerabecario", array()), 'errors');
        echo "   
                                </div>
                            </div>
                            <br>
                            <div class=\"row\">
                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_otrasbecas\">¿Posee Otras Becas?</label>
                                    ";
        // line 242
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "otrasbecas", array()), 'widget', array("attr" => array("onchange" => "montoOB()")));
        echo "
                                    ";
        // line 243
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "otrasbecas", array()), 'errors');
        echo "   
                                </div> 

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_Motrasbecas\">Monto de otras becas</label>
                                    ";
        // line 248
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montootrasbecas", array()), 'widget', array("attr" => array("disabled" => "true")));
        echo "
                                    ";
        // line 249
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montootrasbecas", array()), 'errors');
        echo "   
                                </div>

                                <div class=\"col col-md-6\" align=\"left\">
                                    <label for=\"form_comprobante\">Comprobante<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 254
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comprobante_file", array()), 'widget');
        echo "
                                    ";
        // line 255
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comprobante_file", array()), 'errors');
        echo "   
                                </div>
                            </div>

                            <br>
                            <div class=\"row\">  
                             <div class=\"col col-md-12\" align=\"right\">                            
                                <a class=\"btn btn-primary back\">Regresar</a>
                                <a class=\"btn btn-primary continue\">Continuar</a>
                                <a href=\"";
        // line 264
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("solicitudbecario_index");
        echo "\" class=\"btn btn-danger btn-xl\">Cancelar</a>
                             </div>
                            </div>
  </div>

  <div class=\"tab-pane\" id=\"datosfamiliares\" role=\"tabpanel\" style=\"width:90%; margin-left: 5%\">

  <h3>Datos Familiares</h3>
                            <hr>
                            <div class=\"row\">

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_ingresos\">Ingresos Familiares</label>
                                    ";
        // line 277
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingresossolifamiliabecario", array()), 'widget');
        echo "
                                    ";
        // line 278
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingresossolifamiliabecario", array()), 'errors');
        echo "   
                                </div>

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_miembros\">Miembros Familiares<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 283
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "miembrossolifamiliabecario", array()), 'widget', array("attr" => array("placeholder" => "Número de miembros")));
        echo "
                                    ";
        // line 284
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "miembrossolifamiliabecario", array()), 'errors');
        echo "   
                                </div>

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_hermanos\">Cantidad de Hermanos</label>
                                    ";
        // line 289
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantsolihermanosbecario", array()), 'widget');
        echo "
                                    ";
        // line 290
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantsolihermanosbecario", array()), 'errors');
        echo "   
                                </div>

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_Temergencia\">Tel. Emergencia<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 295
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telsoliemergenciabecario", array()), 'widget');
        echo "
                                    ";
        // line 296
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telsoliemergenciabecario", array()), 'errors');
        echo "   
                                </div>

                            </div>
                            <br>

                            <div class=\"row\">

                                <div class=\"col col-md-6\" align=\"left\">
                                    <label for=\"form_nompadre\">Nombre del Padre<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 306
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomsolipadrebecario", array()), 'widget');
        echo "
                                    ";
        // line 307
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomsolipadrebecario", array()), 'errors');
        echo "   
                                </div> 

                                <div class=\"col col-md-6\" align=\"left\">
                                    <label for=\"form_nommadre\">Nombre de la Madre<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 312
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomsolimadrebecario", array()), 'widget');
        echo "
                                    ";
        // line 313
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomsolimadrebecario", array()), 'errors');
        echo "   
                                </div> 
                            </div>

                            <br>
                            <div class=\"row\">

                                <div class=\"col col-md-12\" align=\"left\">
                                    <label for=\"form_ocupacionp\">Ocupación del Padre<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 322
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ocupacionpadre", array()), 'widget');
        echo "
                                    ";
        // line 323
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ocupacionpadre", array()), 'errors');
        echo "   
                                </div>
                            </div>
                            <br>
                            <div class=\"row\">

                                <div class=\"col col-md-12\" align=\"left\">
                                    <label for=\"form_ocupacionm\">Ocupación de la Madre<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 331
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ocupacionmadre", array()), 'widget');
        echo "
                                    ";
        // line 332
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ocupacionmadre", array()), 'errors');
        echo "   
                                </div>
                            </div>
                           <br>
                            <div class=\"row\">  
                             <div class=\"col col-md-12\" align=\"right\">                            
                                <a class=\"btn btn-primary back\">Regresar</a>
                                <a href=\"";
        // line 339
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("solicitudbecario_index");
        echo "\" class=\"btn btn-danger btn-xl\">Cancelar</a>
                                <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />
                             </div>
                            </div>

                        </div>
  </div>
</div></div>
";
        // line 347
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_2cb4acd155b6c4cf637e19461320ca4f47904575e16523a4aab747b5bb78bf59->leave($__internal_2cb4acd155b6c4cf637e19461320ca4f47904575e16523a4aab747b5bb78bf59_prof);

    }

    // line 350
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_e80a978e013c0178d8e055bf841a4bf7d054ff15c0189f8d68371c8ded4d15ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e80a978e013c0178d8e055bf841a4bf7d054ff15c0189f8d68371c8ded4d15ec->enter($__internal_e80a978e013c0178d8e055bf841a4bf7d054ff15c0189f8d68371c8ded4d15ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        // line 351
        echo "    <script>
        ";
        // line 352
        $this->displayParentBlock("javascripts_inline", $context, $blocks);
        echo "
            function montoOB() {
                var isChecked = document.getElementById('appbundle_solicitudbecario_otrasbecas').checked;
                if (isChecked) {
                    document.getElementById('appbundle_solicitudbecario_montootrasbecas').removeAttribute('disabled');
                } else {

                    document.getElementById('appbundle_solicitudbecario_montootrasbecas').setAttribute('disabled', true);
                }
            }
            ;

        \$('.continue').click(function(){
              \$('.nav-tabs > .active').next('li').find('a').trigger('click');
        });
        \$('.back').click(function(){
          \$('.nav-tabs > .active').prev('li').find('a').trigger('click');
         });

         


    </script>

";
        
        $__internal_e80a978e013c0178d8e055bf841a4bf7d054ff15c0189f8d68371c8ded4d15ec->leave($__internal_e80a978e013c0178d8e055bf841a4bf7d054ff15c0189f8d68371c8ded4d15ec_prof);

    }

    public function getTemplateName()
    {
        return "solicitudbecario/Solicitudbecarionew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  624 => 352,  621 => 351,  615 => 350,  605 => 347,  594 => 339,  584 => 332,  580 => 331,  569 => 323,  565 => 322,  553 => 313,  549 => 312,  541 => 307,  537 => 306,  524 => 296,  520 => 295,  512 => 290,  508 => 289,  500 => 284,  496 => 283,  488 => 278,  484 => 277,  468 => 264,  456 => 255,  452 => 254,  444 => 249,  440 => 248,  432 => 243,  428 => 242,  418 => 235,  414 => 234,  406 => 229,  402 => 228,  394 => 223,  390 => 222,  382 => 217,  378 => 216,  367 => 208,  363 => 207,  355 => 202,  351 => 201,  339 => 192,  335 => 191,  327 => 186,  323 => 185,  306 => 171,  295 => 163,  291 => 162,  281 => 155,  277 => 154,  267 => 147,  263 => 146,  250 => 136,  246 => 135,  238 => 130,  234 => 129,  226 => 124,  222 => 123,  211 => 115,  207 => 114,  199 => 109,  195 => 108,  187 => 103,  183 => 102,  153 => 75,  139 => 64,  133 => 60,  127 => 59,  115 => 57,  103 => 56,  44 => 3,  38 => 2,  11 => 1,);
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
{% block stylesheets%}
    {{parent()}}
    <style>
        nav > .nav.nav-tabs{

            border: none;
            color:#fff;
            background:grey;
            border-radius:0;

        }
        nav > div a.nav-item.nav-link,
        nav > div a.nav-item.nav-link.active
        {
            border: none;
            padding: 18px 25px;
            color:#fff;
            background:gray;
            border-radius:0;
        }

        nav > div a.nav-item.nav-link.active:after
        {
            content: \"\";
            position: relative;
            bottom: -60px;
            left: -10%;
            border: 15px solid transparent;
            border-top-color: gainsboro;
        }
        .tab-content{
            background: #fdfdfd;
            line-height: 25px;
            border: 1px solid #ddd;
            border-top: 5px solid gainsboro;
            border-bottom: 5px solid gainsboro;
            padding:30px 25px;
        }

        nav > div a.nav-item.nav-link:hover,
        nav > div a.nav-item.nav-link:focus
        {
            border: none;
            background: gainsboro;
            color:#fff;
            border-radius:0;
            transition:background 0.20s linear;
        }


    </style>
{% endblock stylesheets %}


{% block page_title %} Solicitud | {% endblock %}
{% block page_subtitle %}Registro De Solicitud {% endblock %}

{% block page_content %}

     <div  style=\"width:90%; margin-top: 5%; margin-left: 5%; background-color:#F3F3F3; border-radius:5px \" class=\"panel panel-default\">
            <div class=\"row\">
                <div class=\"col col-md-12\" align=\"center\" >
                    <img style=\"width:80px;margin-top: 2%;\" src=\"{{ asset('img/document.png') }}\"></img>
                </div>
            </div>
            <div class=\"row\">    
                <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\">
                    <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Solicitud</h2>
                    <h4 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body; margin-top: -3px;\">Complete los campos requeridos:<span style=\"font-size: 25;color: red\" >*</span></h4>
                </div>
            </div>    
    </div>

{{ form_start(form) }}

<div class=\"container tabs-wrap\" style=\"width: 90%;  margin-bottom: 3%\">
  <ul class=\"nav nav-tabs\" role=\"tablist\">
    <li class=\"active\" role=\"presentation\">
      <a role=\"tab\" aria-expanded=\"true\" aria-controls=\"datospersonales\" href=\"#datospersonales\" data-toggle=\"tab\">Datos Personales</a>
    </li>
    <li>
      <a role=\"tab\" aria-expanded=\"false\" aria-controls=\"datosacademicos\" href=\"#datosacademicos\" data-toggle=\"tab\">Datos Académicos</a>
    </li>
    <li>
      <a role=\"tab\" aria-expanded=\"false\" aria-controls=\"datosfamiliares\" href=\"#datosfamiliares\" data-toggle=\"tab\">Datos Familiares</a>
    </li>
  </ul>

<div class=\"tab-content\">

  <div class=\"tab-pane active\" id=\"datospersonales\" role=\"tabpanel\" style=\"width:90%; margin-left: 5%\">

  <div class=\"row\">
                            <div class=\"col col-md-6\"><h3>Datos Personales</h3></div>
                            </div>
                                <hr>
                            <div class=\"row\">     

                                <div class=\"col col-md-4\" align=\"left\">
                                    <label for=\"form_documento\">Documento<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(form.docsoliidentidadbecario) }}
                                    {{ form_errors(form.docsoliidentidadbecario) }}   
                                </div> 

                                <div class=\"col col-md-4\" align=\"left\">
                                    <label for=\"form_cdirecto\">Teléfono<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(form.telsolipersonalbecario) }}
                                    {{ form_errors(form.telsolipersonalbecario) }}   
                                </div> 

                                <div class=\"col col-md-4\" align=\"left\">
                                    <label for=\"form_telefono\">Otro Teléfono<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(form.telefonosolibecario) }}
                                    {{ form_errors(form.telefonosolibecario) }}   
                                </div> 
                            </div>
                            <br>
                            <div class=\"row\" >

                                <div class=\"col col-md-4\" align=\"left\">
                                    <label for=\"form_edad\">Fecha Nacimiento<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(form.fechaNacimiento) }}
                                    {{ form_errors(form.fechaNacimiento) }}   
                                </div>

                                <div class=\"col col-md-4\" align=\"left\">
                                    <label for=\"form_edad\">Sexo<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(form.sexo) }}
                                    {{ form_errors(form.sexo) }}   
                                </div>

                                <div class=\"col col-md-4\" align=\"left\">
                                    <label for=\"form_trabajo\">¿Posee Trabajo?</label>
                                    {{ form_widget(form.trabajosolibecario) }}
                                    {{ form_errors(form.trabajosolibecario) }}   
                                </div> 


                            </div>
                            <br>

                            <div class=\"row\">  
                                <div class=\"col col-md-12\" align=\"left\">
                                    <label for=\"form_direccion\">Dirección<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(form.direccionsolibecario) }}
                                    {{ form_errors(form.direccionsolibecario) }}   
                                </div> 
                            </div>
                                <br>
                            <div class=\"row\">  
                                <div class=\"col col-md-12\" align=\"left\">
                                    <label for=\"form_antecedentes\">Descripción Personal</label>
                                    {{ form_widget(form.antecedentes) }}
                                    {{ form_errors(form.antecedentes) }}   
                                </div> 
                            </div>
                            <br>
                            <div class=\"row\">  
                                <div class=\"col col-md-12\" align=\"left\">
                                    <label for=\"form_religion\">Religión</label>
                                    {{ form_widget(form.religion) }}
                                    {{ form_errors(form.religion) }}   
                                </div>
                      
                            </div>
                            <br>
                            <div class=\"row\">  
                             <div class=\"col col-md-12\" align=\"right\">                            
                                <a class=\"btn btn-primary continue\">Continuar</a>
                                <a href=\"{{ path('solicitudbecario_index') }}\" class=\"btn btn-danger btn-xl\">Cancelar</a>
                             </div>
                            </div>
                        
  </div>

  <div class=\"tab-pane\" id=\"datosacademicos\" role=\"tabpanel\"  style=\"width:90%; margin-left: 5%\">

  <h3>Datos Académicos</h3>
                            <hr>
                            <div class=\"row\">  

                                <div class=\"col col-md-6\" align=\"left\">
                                    <label for=\"form_carrera\">Carrera Universitaria<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(form.carrerasoliestudiarbecario) }}
                                    {{ form_errors(form.carrerasoliestudiarbecario) }}   
                                </div> 

                                <div class=\"col col-md-6\" align=\"left\">
                                    <label for=\"form_universidad\">Universidad<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(form.universidadsolibecario) }}
                                    {{ form_errors(form.universidadsolibecario) }}   
                                </div>
                            </div>

                            <br>

                            <div class=\"row\">
                                <div class=\"col col-md-6\" align=\"left\" id='datetimepicker1'>
                                    <label for=\"form_anioinicio\">Fecha Estimada de Ingreso en la Universidad<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(form.aniosoliingresobecario) }}
                                    {{ form_errors(form.aniosoliingresobecario) }}   
                                </div>

                                <div class=\"col col-md-6\" align=\"left\" id='datetimepicker2'>
                                    <label for=\"form_aniofin\">Fecha Estimada de Egreso en la Universidad<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(form.aniosolifinalizacionbecario) }}
                                    {{ form_errors(form.aniosolifinalizacionbecario) }}   
                                </div>
                            </div>
                            <br>

                            <div class=\"row\">
                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_paes\">Nota Paes<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(form.paes) }}
                                    {{ form_errors(form.paes) }}   
                                </div>

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_matricula\">Monto Matricula<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(form.montosolimatriculabecario) }}
                                    {{ form_errors(form.montosolimatriculabecario) }}   
                                </div>

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_cuotaM\">Cuota Mensual<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(form.cuotasolimensualbecario) }}
                                    {{ form_errors(form.cuotasolimensualbecario) }}   
                                </div>

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_duracion\">Duración de Carrera<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(form.duracionsolicarrerabecario,{'attr':{'placeholder':'Numero de años'}}) }}
                                    {{ form_errors(form.duracionsolicarrerabecario) }}   
                                </div>
                            </div>
                            <br>
                            <div class=\"row\">
                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_otrasbecas\">¿Posee Otras Becas?</label>
                                    {{ form_widget(form.otrasbecas,{'attr':{'onchange':'montoOB()'}}) }}
                                    {{ form_errors(form.otrasbecas) }}   
                                </div> 

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_Motrasbecas\">Monto de otras becas</label>
                                    {{ form_widget(form.montootrasbecas,{'attr':{'disabled':'true'}}) }}
                                    {{ form_errors(form.montootrasbecas) }}   
                                </div>

                                <div class=\"col col-md-6\" align=\"left\">
                                    <label for=\"form_comprobante\">Comprobante<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(form.comprobante_file) }}
                                    {{ form_errors(form.comprobante_file) }}   
                                </div>
                            </div>

                            <br>
                            <div class=\"row\">  
                             <div class=\"col col-md-12\" align=\"right\">                            
                                <a class=\"btn btn-primary back\">Regresar</a>
                                <a class=\"btn btn-primary continue\">Continuar</a>
                                <a href=\"{{ path('solicitudbecario_index') }}\" class=\"btn btn-danger btn-xl\">Cancelar</a>
                             </div>
                            </div>
  </div>

  <div class=\"tab-pane\" id=\"datosfamiliares\" role=\"tabpanel\" style=\"width:90%; margin-left: 5%\">

  <h3>Datos Familiares</h3>
                            <hr>
                            <div class=\"row\">

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_ingresos\">Ingresos Familiares</label>
                                    {{ form_widget(form.ingresossolifamiliabecario) }}
                                    {{ form_errors(form.ingresossolifamiliabecario) }}   
                                </div>

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_miembros\">Miembros Familiares<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(form.miembrossolifamiliabecario,{'attr':{'placeholder':'Número de miembros'}}) }}
                                    {{ form_errors(form.miembrossolifamiliabecario) }}   
                                </div>

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_hermanos\">Cantidad de Hermanos</label>
                                    {{ form_widget(form.cantsolihermanosbecario) }}
                                    {{ form_errors(form.cantsolihermanosbecario) }}   
                                </div>

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_Temergencia\">Tel. Emergencia<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(form.telsoliemergenciabecario) }}
                                    {{ form_errors(form.telsoliemergenciabecario) }}   
                                </div>

                            </div>
                            <br>

                            <div class=\"row\">

                                <div class=\"col col-md-6\" align=\"left\">
                                    <label for=\"form_nompadre\">Nombre del Padre<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(form.nomsolipadrebecario) }}
                                    {{ form_errors(form.nomsolipadrebecario) }}   
                                </div> 

                                <div class=\"col col-md-6\" align=\"left\">
                                    <label for=\"form_nommadre\">Nombre de la Madre<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(form.nomsolimadrebecario) }}
                                    {{ form_errors(form.nomsolimadrebecario) }}   
                                </div> 
                            </div>

                            <br>
                            <div class=\"row\">

                                <div class=\"col col-md-12\" align=\"left\">
                                    <label for=\"form_ocupacionp\">Ocupación del Padre<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(form.ocupacionpadre) }}
                                    {{ form_errors(form.ocupacionpadre) }}   
                                </div>
                            </div>
                            <br>
                            <div class=\"row\">

                                <div class=\"col col-md-12\" align=\"left\">
                                    <label for=\"form_ocupacionm\">Ocupación de la Madre<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(form.ocupacionmadre) }}
                                    {{ form_errors(form.ocupacionmadre) }}   
                                </div>
                            </div>
                           <br>
                            <div class=\"row\">  
                             <div class=\"col col-md-12\" align=\"right\">                            
                                <a class=\"btn btn-primary back\">Regresar</a>
                                <a href=\"{{ path('solicitudbecario_index') }}\" class=\"btn btn-danger btn-xl\">Cancelar</a>
                                <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />
                             </div>
                            </div>

                        </div>
  </div>
</div></div>
{{ form_end(form) }}

{% endblock %}
{%block javascripts_inline %}
    <script>
        {{parent()}}
            function montoOB() {
                var isChecked = document.getElementById('appbundle_solicitudbecario_otrasbecas').checked;
                if (isChecked) {
                    document.getElementById('appbundle_solicitudbecario_montootrasbecas').removeAttribute('disabled');
                } else {

                    document.getElementById('appbundle_solicitudbecario_montootrasbecas').setAttribute('disabled', true);
                }
            }
            ;

        \$('.continue').click(function(){
              \$('.nav-tabs > .active').next('li').find('a').trigger('click');
        });
        \$('.back').click(function(){
          \$('.nav-tabs > .active').prev('li').find('a').trigger('click');
         });

         


    </script>

{% endblock %}    
", "solicitudbecario/Solicitudbecarionew.html.twig", "/home/ubuntu/workspace/app/Resources/views/solicitudbecario/Solicitudbecarionew.html.twig");
    }
}
