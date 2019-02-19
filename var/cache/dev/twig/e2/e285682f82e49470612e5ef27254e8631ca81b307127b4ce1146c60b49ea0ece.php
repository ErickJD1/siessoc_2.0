<?php

/* expedientebecario/edit.html.twig */
class __TwigTemplate_0e527aa22698c9c02628a71955e612029680b933f7f3dc5e9dc4b158ea5247ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "expedientebecario/edit.html.twig", 1);
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
        $__internal_e2e2936a19a0e2233392c5dfb4aa9f786e90d430718baac32f22e2fd64671d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e2936a19a0e2233392c5dfb4aa9f786e90d430718baac32f22e2fd64671d35->enter($__internal_e2e2936a19a0e2233392c5dfb4aa9f786e90d430718baac32f22e2fd64671d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expedientebecario/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2e2936a19a0e2233392c5dfb4aa9f786e90d430718baac32f22e2fd64671d35->leave($__internal_e2e2936a19a0e2233392c5dfb4aa9f786e90d430718baac32f22e2fd64671d35_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9029f6d4f9d34629d6b44e1d61c3410340f3220dc16fe604caf3230d9eb0fae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9029f6d4f9d34629d6b44e1d61c3410340f3220dc16fe604caf3230d9eb0fae1->enter($__internal_9029f6d4f9d34629d6b44e1d61c3410340f3220dc16fe604caf3230d9eb0fae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9029f6d4f9d34629d6b44e1d61c3410340f3220dc16fe604caf3230d9eb0fae1->leave($__internal_9029f6d4f9d34629d6b44e1d61c3410340f3220dc16fe604caf3230d9eb0fae1_prof);

    }

    // line 56
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_49266ef78d8976997302baee082e93bb3de990e40bc80698a489db4419878e61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49266ef78d8976997302baee082e93bb3de990e40bc80698a489db4419878e61->enter($__internal_49266ef78d8976997302baee082e93bb3de990e40bc80698a489db4419878e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Solicitud | ";
        
        $__internal_49266ef78d8976997302baee082e93bb3de990e40bc80698a489db4419878e61->leave($__internal_49266ef78d8976997302baee082e93bb3de990e40bc80698a489db4419878e61_prof);

    }

    // line 57
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_09f1f29fc253f521e4d07e0a90d9fdfed4a6122390d837765cf3c76819c6a7f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f1f29fc253f521e4d07e0a90d9fdfed4a6122390d837765cf3c76819c6a7f3->enter($__internal_09f1f29fc253f521e4d07e0a90d9fdfed4a6122390d837765cf3c76819c6a7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Registro De Solicitud ";
        
        $__internal_09f1f29fc253f521e4d07e0a90d9fdfed4a6122390d837765cf3c76819c6a7f3->leave($__internal_09f1f29fc253f521e4d07e0a90d9fdfed4a6122390d837765cf3c76819c6a7f3_prof);

    }

    // line 59
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4e188219dfd2dbd63575d5761242492f4d34cf57c4ca8adee00949fc0d816d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e188219dfd2dbd63575d5761242492f4d34cf57c4ca8adee00949fc0d816d88->enter($__internal_4e188219dfd2dbd63575d5761242492f4d34cf57c4ca8adee00949fc0d816d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 60
        echo "
    <div class=\"box box-primary\" style=\"width: 100%;\">

        <div  style=\"width:90%; margin-top: 5%; margin-left: 5%; background-color:#F3F3F3; border-radius:5px \" class=\"panel panel-default\">
            <div class=\"row\">
                <div class=\"col col-md-12\" align=\"center\" >
                    <img style=\"width:80px;margin-top: 2%;\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Banco.png"), "html", null, true);
        echo "\"></img>
                </div>
            </div>
            <div class=\"row\">    
                <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\">
                    <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Solicitud</h2>
                    <h4 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body; margin-top: -3px;\">Complete los campos requeridos:<span style=\"font-size: 25;color: red\" >*</span></h4>
                </div>
            </div>    

            <div  class=\"container\"  style=\"width: 90%;  margin-bottom: 3%\">
                <hr>
                <br>
                ";
        // line 79
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("id" => $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "idexpbecario", array())));
        echo "

                <div class=\"nav-tabs-custom\" style=\"width:95%;margin-left: 2.5%;\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a class=\"nav-item nav-link\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#datosPersonales\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Datos Personales</a></li>
                        <li><a class=\"nav-item nav-link\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#datosAcademicos\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Datos Academicos</a></li>
                        <li><a class=\"nav-item nav-link\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#datosFamiliares\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">Datos Familiares</a></li>
                    </ul>
                    <div class=\"tab-content\">



                        <div class=\"active tab-pane\" id=\"datosPersonales\" style=\"width:90%; margin-left: 5%\">
                            <div class=\"row\">
                                <div class=\"col col-md-6\"><h3>Datos Personales</h3></div>
                                <div class=\"col col-md-6\">
                                    <p align=\"right\"><strong>Aspirante:</strong><u> ";
        // line 95
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getFirstName", array(), "method") . " ") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getLastName", array(), "method")), "html", null, true);
        echo "</u></p>
                                </div>
                            </div>
                            <hr>
                            <div class=\"row\">     

                                <div class=\"col col-md-4\" align=\"left\">
                                    <label for=\"form_documento\">Numero de documento<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "docexpidentidadbecario", array()), 'widget', array("attr" => array("readonly" => "true")));
        echo "
                                    ";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "docexpidentidadbecario", array()), 'errors');
        echo "   
                                </div> 

                                <div class=\"col col-md-4\" align=\"left\">
                                    <label for=\"form_cdirecto\">Numero de contacto directo<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telexppersonalbecario", array()), 'widget');
        echo "
                                    ";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telexppersonalbecario", array()), 'errors');
        echo "   
                                </div> 

                                <div class=\"col col-md-4\" align=\"left\">
                                    <label for=\"form_telefono\">Otro Telefono<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telefonoexpbecario", array()), 'widget');
        echo "
                                    ";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telefonoexpbecario", array()), 'errors');
        echo "   
                                </div> 
                            </div>
                            <br>
                            <div class=\"row\" >

                                <div class=\"col col-md-6\" align=\"left\">
                                    <label for=\"form_edad\">Fecha Nacimiento<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaNacimiento", array()), 'widget');
        echo "
                                    ";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaNacimiento", array()), 'errors');
        echo "   
                                </div>

                                <div class=\"col col-md-6\" align=\"left\">
                                    <label for=\"form_edad\">Sexo<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sexo", array()), 'widget');
        echo "
                                    ";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sexo", array()), 'errors');
        echo "   
                                </div>


                            </div>
                            <br>

                            <div class=\"row\">  
                                <div class=\"col col-md-12\" align=\"left\">
                                    <label for=\"form_direccion\">Dirección<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "direccionexpbecario", array()), 'widget');
        echo "
                                    ";
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "direccionexpbecario", array()), 'errors');
        echo "   
                                </div> 
                            </div>
                            <br>
                            <div class=\"row\">  
                                <div class=\"col col-md-12\" align=\"left\">
                                    <label for=\"form_antecedentes\">Descripción Personal</label>
                                    ";
        // line 149
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "antecedentes", array()), 'widget');
        echo "
                                    ";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "antecedentes", array()), 'errors');
        echo "   
                                </div>                         </div>
                            <br>
                            <div class=\"row\">  
                                <div class=\"col col-md-12\" align=\"left\">
                                    <label for=\"form_religion\">Religion que pertenece</label>
                                    ";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "religion", array()), 'widget');
        echo "
                                    ";
        // line 157
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "religion", array()), 'errors');
        echo "   
                                </div>

                            </div>
                            <br> 
                            <div class=\"row\">
                                <div class=\"col col-md-4\" align=\"LEFT\">
                                    <label for=\"form_trabajo\">Posee trabajo</label>
                                    ";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "trabajoexpbecario", array()), 'widget');
        echo "
                                    ";
        // line 166
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "trabajoexpbecario", array()), 'errors');
        echo "   
                                </div> 
                            </div>
                        </div><!-- /.tab-pane -->

                        <div class=\"tab-pane\" id=\"datosAcademicos\" style=\"width:90%; margin-left: 5%\">
                            <h3>Datos Academicos</h3>
                            <hr>
                            <div class=\"row\">  

                                <div class=\"col col-md-6\" align=\"left\">
                                    <label for=\"form_carrera\">Carrera<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 178
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "carreraexpestudiarbecario", array()), 'widget');
        echo "
                                    ";
        // line 179
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "carreraexpestudiarbecario", array()), 'errors');
        echo "   
                                </div> 

                                <div class=\"col col-md-6\" align=\"left\">
                                    <label for=\"form_universidad\">Universidad<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "universidadexpbecario", array()), 'widget');
        echo "
                                    ";
        // line 185
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "universidadexpbecario", array()), 'errors');
        echo "   
                                </div>
                            </div>

                            <br>

                            <div class=\"row\">
                                <div class=\"col col-md-6\" align=\"left\" id='datetimepicker1'>
                                    <label for=\"form_anioinicio\">Fecha Ingreso Universidad<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 194
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "anioexpingresobecario", array()), 'widget');
        echo "
                                    ";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "anioexpingresobecario", array()), 'errors');
        echo "   
                                </div>

                                <div class=\"col col-md-6\" align=\"left\" id='datetimepicker2'>
                                    <label for=\"form_aniofin\">Fecha Egreso Universidad<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 200
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "anioexpfinalizacionbecario", array()), 'widget');
        echo "
                                    ";
        // line 201
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "anioexpfinalizacionbecario", array()), 'errors');
        echo "   
                                </div>
                            </div>
                            <br>

                            <div class=\"row\">
                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_paes\">Nota Paes<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 209
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "paes", array()), 'widget');
        echo "
                                    ";
        // line 210
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "paes", array()), 'errors');
        echo "   
                                </div>

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_matricula\">Monto Matricula<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 215
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "montoexpmatriculabecario", array()), 'widget');
        echo "
                                    ";
        // line 216
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "montoexpmatriculabecario", array()), 'errors');
        echo "   
                                </div>

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_cuotaM\">Cuota Mensual<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 221
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cuotaexpmensualbecario", array()), 'widget');
        echo "
                                    ";
        // line 222
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cuotaexpmensualbecario", array()), 'errors');
        echo "   
                                </div>

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_duracion\">Duracion Carrera<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 227
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "duracionexpcarrerabecario", array()), 'widget', array("attr" => array("placeholder" => "Numero de años")));
        echo "
                                    ";
        // line 228
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "duracionexpcarrerabecario", array()), 'errors');
        echo "   
                                </div>
                            </div>
                            <br>
                            <div class=\"row\">
                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_otrasbecas\">Posee otras becas</label>
                                    ";
        // line 235
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "otrasbecas", array()), 'widget', array("attr" => array("onchange" => "montoOB()")));
        echo "
                                    ";
        // line 236
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "otrasbecas", array()), 'errors');
        echo "   
                                </div> 

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_Motrasbecas\">Monto de otras becas</label>
                                    ";
        // line 241
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "montootrasbecas", array()), 'widget', array("attr" => array("disabled" => "true")));
        echo "
                                    ";
        // line 242
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "montootrasbecas", array()), 'errors');
        echo "   
                                </div>


                            </div>
                        </div><!-- /.tab-pane -->

                        <div class=\"tab-pane\" id=\"datosFamiliares\" style=\"width:90%; margin-left: 5%\">
                            <h3>Datos Famiiares</h3>
                            <hr>
                            <div class=\"row\">

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_ingresos\">Ingresos Familiares</label>
                                    ";
        // line 256
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ingresosexpfamiliabecario", array()), 'widget');
        echo "
                                    ";
        // line 257
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ingresosexpfamiliabecario", array()), 'errors');
        echo "   
                                </div>

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_miembros\">Miembros familiares<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 262
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "miembrosexpfamiliabecario", array()), 'widget');
        echo "
                                    ";
        // line 263
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "miembrosexpfamiliabecario", array()), 'errors');
        echo "   
                                </div>

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_hermanos\">Cantidad de hermanos</label>
                                    ";
        // line 268
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cantexphermanosbecario", array()), 'widget');
        echo "
                                    ";
        // line 269
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cantexphermanosbecario", array()), 'errors');
        echo "   
                                </div>

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_Temergencia\">Tel. Emergencia<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 274
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telexpemergenciabecario", array()), 'widget');
        echo "
                                    ";
        // line 275
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telexpemergenciabecario", array()), 'errors');
        echo "   
                                </div>

                            </div>
                            <br>

                            <div class=\"row\">

                                <div class=\"col col-md-6\" align=\"left\">
                                    <label for=\"form_nompadre\">Nombre del padre<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 285
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomexppadrebecario", array()), 'widget');
        echo "
                                    ";
        // line 286
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomexppadrebecario", array()), 'errors');
        echo "   
                                </div> 

                                <div class=\"col col-md-6\" align=\"left\">
                                    <label for=\"form_nommadre\">Nombre de la madre<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 291
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomexpmadrebecario", array()), 'widget');
        echo "
                                    ";
        // line 292
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomexpmadrebecario", array()), 'errors');
        echo "   
                                </div> 
                            </div>

                            <br>
                            <div class=\"row\">

                                <div class=\"col col-md-12\" align=\"left\">
                                    <label for=\"form_ocupacionp\">Ocupacion del padre<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 301
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ocupacionpadre", array()), 'widget');
        echo "
                                    ";
        // line 302
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ocupacionpadre", array()), 'errors');
        echo "   
                                </div>
                            </div>
                            <br>
                            <div class=\"row\">

                                <div class=\"col col-md-12\" align=\"left\">
                                    <label for=\"form_ocupacionm\">Ocupacion de la madre<span style=\"font-size: 25;color: red\" >*</span></label>
                                    ";
        // line 310
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ocupacionmadre", array()), 'widget');
        echo "
                                    ";
        // line 311
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ocupacionmadre", array()), 'errors');
        echo "   
                                </div>
                            </div>
                            <br>

                            <div class=\"row\">
                                <div class=\"col col-md-12\" align=\"right\">
                                    <a href=\"";
        // line 318
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("expedientebecario_index");
        echo "\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                                    <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />


                                </div>
                            </div>

                        </div>
                    </div><!-- /.tab-pane -->

                    ";
        // line 332
        echo "
                </div><!-- /.tab-content -->
            </div><!-- /.nav-tabs-custom -->


            ";
        // line 337
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
            <br>

        </div>
        <br>
    </div>
    <br>
    <br>
</div>


";
        
        $__internal_4e188219dfd2dbd63575d5761242492f4d34cf57c4ca8adee00949fc0d816d88->leave($__internal_4e188219dfd2dbd63575d5761242492f4d34cf57c4ca8adee00949fc0d816d88_prof);

    }

    // line 349
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_4626ba512299c1cbaf6765559938b232b155d49c8616d50b162504fcc0fe61ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4626ba512299c1cbaf6765559938b232b155d49c8616d50b162504fcc0fe61ca->enter($__internal_4626ba512299c1cbaf6765559938b232b155d49c8616d50b162504fcc0fe61ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        // line 350
        echo "    <script>
        ";
        // line 351
        $this->displayParentBlock("javascripts_inline", $context, $blocks);
        echo "
            \$(document).ready(function () {
                var isChecked = document.getElementById('appbundle_expedientebecario_otrasbecas').checked;
                if (isChecked) {
                    document.getElementById('appbundle_expedientebecario_montootrasbecas').removeAttribute('disabled');
                } else {

                    document.getElementById('appbundle_expedientebecario_montootrasbecas').setAttribute('disabled', true);
                }
            });

            function montoOB() {
                var isChecked = document.getElementById('appbundle_expedientebecario_otrasbecas').checked;
                if (isChecked) {
                    document.getElementById('appbundle_expedientebecario_montootrasbecas').removeAttribute('disabled');
                } else {

                    document.getElementById('appbundle_expedientebecario_montootrasbecas').setAttribute('disabled', true);
                }
            }
            ;



        
        \$(document).ready(function(){
                    \$(\"#appbundle_expedientebecario_docexpidentidadbecario\").removeAttr(\"name\");
                    \$(\"#appbundle_expedientebecario_docexpidentidadbecario\").removeAttr(\"id\");
            });
          


</script>

";
        
        $__internal_4626ba512299c1cbaf6765559938b232b155d49c8616d50b162504fcc0fe61ca->leave($__internal_4626ba512299c1cbaf6765559938b232b155d49c8616d50b162504fcc0fe61ca_prof);

    }

    public function getTemplateName()
    {
        return "expedientebecario/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  612 => 351,  609 => 350,  603 => 349,  584 => 337,  577 => 332,  564 => 318,  554 => 311,  550 => 310,  539 => 302,  535 => 301,  523 => 292,  519 => 291,  511 => 286,  507 => 285,  494 => 275,  490 => 274,  482 => 269,  478 => 268,  470 => 263,  466 => 262,  458 => 257,  454 => 256,  437 => 242,  433 => 241,  425 => 236,  421 => 235,  411 => 228,  407 => 227,  399 => 222,  395 => 221,  387 => 216,  383 => 215,  375 => 210,  371 => 209,  360 => 201,  356 => 200,  348 => 195,  344 => 194,  332 => 185,  328 => 184,  320 => 179,  316 => 178,  301 => 166,  297 => 165,  286 => 157,  282 => 156,  273 => 150,  269 => 149,  259 => 142,  255 => 141,  242 => 131,  238 => 130,  230 => 125,  226 => 124,  215 => 116,  211 => 115,  203 => 110,  199 => 109,  191 => 104,  187 => 103,  176 => 95,  157 => 79,  141 => 66,  133 => 60,  127 => 59,  115 => 57,  103 => 56,  44 => 3,  38 => 2,  11 => 1,);
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

    <div class=\"box box-primary\" style=\"width: 100%;\">

        <div  style=\"width:90%; margin-top: 5%; margin-left: 5%; background-color:#F3F3F3; border-radius:5px \" class=\"panel panel-default\">
            <div class=\"row\">
                <div class=\"col col-md-12\" align=\"center\" >
                    <img style=\"width:80px;margin-top: 2%;\" src=\"{{ asset('img/Banco.png') }}\"></img>
                </div>
            </div>
            <div class=\"row\">    
                <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\">
                    <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Solicitud</h2>
                    <h4 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body; margin-top: -3px;\">Complete los campos requeridos:<span style=\"font-size: 25;color: red\" >*</span></h4>
                </div>
            </div>    

            <div  class=\"container\"  style=\"width: 90%;  margin-bottom: 3%\">
                <hr>
                <br>
                {{ form_start(edit_form,{'id':expedientebecario.idexpbecario}) }}

                <div class=\"nav-tabs-custom\" style=\"width:95%;margin-left: 2.5%;\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a class=\"nav-item nav-link\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#datosPersonales\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Datos Personales</a></li>
                        <li><a class=\"nav-item nav-link\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#datosAcademicos\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Datos Academicos</a></li>
                        <li><a class=\"nav-item nav-link\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#datosFamiliares\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">Datos Familiares</a></li>
                    </ul>
                    <div class=\"tab-content\">



                        <div class=\"active tab-pane\" id=\"datosPersonales\" style=\"width:90%; margin-left: 5%\">
                            <div class=\"row\">
                                <div class=\"col col-md-6\"><h3>Datos Personales</h3></div>
                                <div class=\"col col-md-6\">
                                    <p align=\"right\"><strong>Aspirante:</strong><u> {{app.user.getFirstName()~\" \"~app.user.getLastName()}}</u></p>
                                </div>
                            </div>
                            <hr>
                            <div class=\"row\">     

                                <div class=\"col col-md-4\" align=\"left\">
                                    <label for=\"form_documento\">Numero de documento<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(edit_form.docexpidentidadbecario,{'attr':{'readonly':'true'}}) }}
                                    {{ form_errors(edit_form.docexpidentidadbecario) }}   
                                </div> 

                                <div class=\"col col-md-4\" align=\"left\">
                                    <label for=\"form_cdirecto\">Numero de contacto directo<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(edit_form.telexppersonalbecario) }}
                                    {{ form_errors(edit_form.telexppersonalbecario) }}   
                                </div> 

                                <div class=\"col col-md-4\" align=\"left\">
                                    <label for=\"form_telefono\">Otro Telefono<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(edit_form.telefonoexpbecario) }}
                                    {{ form_errors(edit_form.telefonoexpbecario) }}   
                                </div> 
                            </div>
                            <br>
                            <div class=\"row\" >

                                <div class=\"col col-md-6\" align=\"left\">
                                    <label for=\"form_edad\">Fecha Nacimiento<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(edit_form.fechaNacimiento) }}
                                    {{ form_errors(edit_form.fechaNacimiento) }}   
                                </div>

                                <div class=\"col col-md-6\" align=\"left\">
                                    <label for=\"form_edad\">Sexo<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(edit_form.sexo) }}
                                    {{ form_errors(edit_form.sexo) }}   
                                </div>


                            </div>
                            <br>

                            <div class=\"row\">  
                                <div class=\"col col-md-12\" align=\"left\">
                                    <label for=\"form_direccion\">Dirección<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(edit_form.direccionexpbecario) }}
                                    {{ form_errors(edit_form.direccionexpbecario) }}   
                                </div> 
                            </div>
                            <br>
                            <div class=\"row\">  
                                <div class=\"col col-md-12\" align=\"left\">
                                    <label for=\"form_antecedentes\">Descripción Personal</label>
                                    {{ form_widget(edit_form.antecedentes) }}
                                    {{ form_errors(edit_form.antecedentes) }}   
                                </div>                         </div>
                            <br>
                            <div class=\"row\">  
                                <div class=\"col col-md-12\" align=\"left\">
                                    <label for=\"form_religion\">Religion que pertenece</label>
                                    {{ form_widget(edit_form.religion) }}
                                    {{ form_errors(edit_form.religion) }}   
                                </div>

                            </div>
                            <br> 
                            <div class=\"row\">
                                <div class=\"col col-md-4\" align=\"LEFT\">
                                    <label for=\"form_trabajo\">Posee trabajo</label>
                                    {{ form_widget(edit_form.trabajoexpbecario) }}
                                    {{ form_errors(edit_form.trabajoexpbecario) }}   
                                </div> 
                            </div>
                        </div><!-- /.tab-pane -->

                        <div class=\"tab-pane\" id=\"datosAcademicos\" style=\"width:90%; margin-left: 5%\">
                            <h3>Datos Academicos</h3>
                            <hr>
                            <div class=\"row\">  

                                <div class=\"col col-md-6\" align=\"left\">
                                    <label for=\"form_carrera\">Carrera<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(edit_form.carreraexpestudiarbecario) }}
                                    {{ form_errors(edit_form.carreraexpestudiarbecario) }}   
                                </div> 

                                <div class=\"col col-md-6\" align=\"left\">
                                    <label for=\"form_universidad\">Universidad<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(edit_form.universidadexpbecario) }}
                                    {{ form_errors(edit_form.universidadexpbecario) }}   
                                </div>
                            </div>

                            <br>

                            <div class=\"row\">
                                <div class=\"col col-md-6\" align=\"left\" id='datetimepicker1'>
                                    <label for=\"form_anioinicio\">Fecha Ingreso Universidad<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(edit_form.anioexpingresobecario) }}
                                    {{ form_errors(edit_form.anioexpingresobecario) }}   
                                </div>

                                <div class=\"col col-md-6\" align=\"left\" id='datetimepicker2'>
                                    <label for=\"form_aniofin\">Fecha Egreso Universidad<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(edit_form.anioexpfinalizacionbecario) }}
                                    {{ form_errors(edit_form.anioexpfinalizacionbecario) }}   
                                </div>
                            </div>
                            <br>

                            <div class=\"row\">
                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_paes\">Nota Paes<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(edit_form.paes) }}
                                    {{ form_errors(edit_form.paes) }}   
                                </div>

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_matricula\">Monto Matricula<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(edit_form.montoexpmatriculabecario) }}
                                    {{ form_errors(edit_form.montoexpmatriculabecario) }}   
                                </div>

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_cuotaM\">Cuota Mensual<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(edit_form.cuotaexpmensualbecario) }}
                                    {{ form_errors(edit_form.cuotaexpmensualbecario) }}   
                                </div>

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_duracion\">Duracion Carrera<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(edit_form.duracionexpcarrerabecario,{'attr':{'placeholder':'Numero de años'}}) }}
                                    {{ form_errors(edit_form.duracionexpcarrerabecario) }}   
                                </div>
                            </div>
                            <br>
                            <div class=\"row\">
                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_otrasbecas\">Posee otras becas</label>
                                    {{ form_widget(edit_form.otrasbecas,{'attr':{'onchange':'montoOB()'}}) }}
                                    {{ form_errors(edit_form.otrasbecas) }}   
                                </div> 

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_Motrasbecas\">Monto de otras becas</label>
                                    {{ form_widget(edit_form.montootrasbecas,{'attr':{'disabled':'true'}}) }}
                                    {{ form_errors(edit_form.montootrasbecas) }}   
                                </div>


                            </div>
                        </div><!-- /.tab-pane -->

                        <div class=\"tab-pane\" id=\"datosFamiliares\" style=\"width:90%; margin-left: 5%\">
                            <h3>Datos Famiiares</h3>
                            <hr>
                            <div class=\"row\">

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_ingresos\">Ingresos Familiares</label>
                                    {{ form_widget(edit_form.ingresosexpfamiliabecario) }}
                                    {{ form_errors(edit_form.ingresosexpfamiliabecario) }}   
                                </div>

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_miembros\">Miembros familiares<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(edit_form.miembrosexpfamiliabecario) }}
                                    {{ form_errors(edit_form.miembrosexpfamiliabecario) }}   
                                </div>

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_hermanos\">Cantidad de hermanos</label>
                                    {{ form_widget(edit_form.cantexphermanosbecario) }}
                                    {{ form_errors(edit_form.cantexphermanosbecario) }}   
                                </div>

                                <div class=\"col col-md-3\" align=\"left\">
                                    <label for=\"form_Temergencia\">Tel. Emergencia<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(edit_form.telexpemergenciabecario) }}
                                    {{ form_errors(edit_form.telexpemergenciabecario) }}   
                                </div>

                            </div>
                            <br>

                            <div class=\"row\">

                                <div class=\"col col-md-6\" align=\"left\">
                                    <label for=\"form_nompadre\">Nombre del padre<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(edit_form.nomexppadrebecario) }}
                                    {{ form_errors(edit_form.nomexppadrebecario) }}   
                                </div> 

                                <div class=\"col col-md-6\" align=\"left\">
                                    <label for=\"form_nommadre\">Nombre de la madre<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(edit_form.nomexpmadrebecario) }}
                                    {{ form_errors(edit_form.nomexpmadrebecario) }}   
                                </div> 
                            </div>

                            <br>
                            <div class=\"row\">

                                <div class=\"col col-md-12\" align=\"left\">
                                    <label for=\"form_ocupacionp\">Ocupacion del padre<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(edit_form.ocupacionpadre) }}
                                    {{ form_errors(edit_form.ocupacionpadre) }}   
                                </div>
                            </div>
                            <br>
                            <div class=\"row\">

                                <div class=\"col col-md-12\" align=\"left\">
                                    <label for=\"form_ocupacionm\">Ocupacion de la madre<span style=\"font-size: 25;color: red\" >*</span></label>
                                    {{ form_widget(edit_form.ocupacionmadre) }}
                                    {{ form_errors(edit_form.ocupacionmadre) }}   
                                </div>
                            </div>
                            <br>

                            <div class=\"row\">
                                <div class=\"col col-md-12\" align=\"right\">
                                    <a href=\"{{ path('expedientebecario_index') }}\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                                    <input  class=\"btn btn-success btn-xl\" type=\"submit\"  value=\"Guardar\" />


                                </div>
                            </div>

                        </div>
                    </div><!-- /.tab-pane -->

                    {#<div class=\"tab-pane\" id=\"change-password{{user.id}}\">
                        <p class=\"text-aqua\">Please click the link below to change your current password</p>
                        <div><a href=\"{{ path('fos_user_change_password') }}\" class=\"btn btn-default\"><i class=\"fa fa-fw fa-lock\"></i>Change Password</a></div>
                    </div>#}

                </div><!-- /.tab-content -->
            </div><!-- /.nav-tabs-custom -->


            {{ form_end(edit_form) }}
            <br>

        </div>
        <br>
    </div>
    <br>
    <br>
</div>


{% endblock %}
{%block javascripts_inline %}
    <script>
        {{parent()}}
            \$(document).ready(function () {
                var isChecked = document.getElementById('appbundle_expedientebecario_otrasbecas').checked;
                if (isChecked) {
                    document.getElementById('appbundle_expedientebecario_montootrasbecas').removeAttribute('disabled');
                } else {

                    document.getElementById('appbundle_expedientebecario_montootrasbecas').setAttribute('disabled', true);
                }
            });

            function montoOB() {
                var isChecked = document.getElementById('appbundle_expedientebecario_otrasbecas').checked;
                if (isChecked) {
                    document.getElementById('appbundle_expedientebecario_montootrasbecas').removeAttribute('disabled');
                } else {

                    document.getElementById('appbundle_expedientebecario_montootrasbecas').setAttribute('disabled', true);
                }
            }
            ;



        
        \$(document).ready(function(){
                    \$(\"#appbundle_expedientebecario_docexpidentidadbecario\").removeAttr(\"name\");
                    \$(\"#appbundle_expedientebecario_docexpidentidadbecario\").removeAttr(\"id\");
            });
          


</script>

{% endblock %}    

", "expedientebecario/edit.html.twig", "/home/ubuntu/workspace/app/Resources/views/expedientebecario/edit.html.twig");
    }
}
