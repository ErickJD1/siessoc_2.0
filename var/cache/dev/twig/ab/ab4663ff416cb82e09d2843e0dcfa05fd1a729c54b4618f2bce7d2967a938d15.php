<?php

/* expedientebecario/show.html.twig */
class __TwigTemplate_656321913f1a51dfc3d4eed7c5bf30786ab0f1676fe62ea980dfc7aa3fe2c745 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4127616a474524ccf63dc5391fcaedf2426d7189b61ebd831ab97ceedc489a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4127616a474524ccf63dc5391fcaedf2426d7189b61ebd831ab97ceedc489a52->enter($__internal_4127616a474524ccf63dc5391fcaedf2426d7189b61ebd831ab97ceedc489a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expedientebecario/show.html.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "expedientebecario/show.html.twig", 1);
        // line 2
        echo "
<div class=\"modal fade\" id=\"VerExp";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "idexpbecario", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div style=\"width:70%; margin-left: 15%\" class=\"modal-dialog\">
        <div class=\"modal-content\"  style=\"border-radius: 40px\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h3 align=\"center\"><strong>Expediente Becario</strong></h3>
            </div>
            <div class=\"modal-body\">
                
                 <div class=\"row\">
            <div class=\"col-md-3\">

              <!-- Profile Image -->
              <div class=\"box box-primary\">
                <div class=\"box-body box-profile\">
                  ";
        // line 19
        $context["profile_picture_path"] = false;
        // line 20
        echo "                  ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "idusuario", array()), "getProfilePicture", array(), "method"))) {
            // line 21
            echo "                    ";
            $context["profile_picture_path"] = ("images/profile/" . $this->getAttribute($this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "idusuario", array()), "getProfilePicture", array(), "method"));
            // line 22
            echo "                  ";
        }
        // line 23
        echo "
                  ";
        // line 24
        echo $context["macro"]->getavatar((isset($context["profile_picture_path"]) ? $context["profile_picture_path"] : $this->getContext($context, "profile_picture_path")), $this->getAttribute($this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "idusuario", array()), "username", array()), "profile-user-img img-responsive img-circle");
        echo "
                  <h3 class=\"profile-username text-center\"> ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "idusuario", array()), "getName", array(), "method"), "html", null, true);
        echo "</h3>
                  <p class=\"text-muted text-center\"><b>Last login </b>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "idusuario", array()), "getLastLogin", array(0 => true), "method"), "html", null, true);
        echo "</p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->


             <div class=\"col-md-9\">
              <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\">
                  <li class=\"active\"><a href=\"#activity\" data-toggle=\"tab\">Detalles de usuario</a></li>
";
        // line 39
        echo "                </ul>
                <div class=\"tab-content\">
                  <div class=\"active tab-pane\" id=\"activity\">
                    <div class=\"form-horizontal\">
                      <div class=\"form-group\">
                        <label for=\"inputName\" class=\"col-sm-2 control-label\">Username</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" class=\"form-control active\" placeholder=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "idusuario", array()), "getUsername", array(), "method"), "html", null, true);
        echo "\" readonly>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"inputName\" class=\"col-sm-2 control-label\">Name</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" class=\"form-control active\" placeholder=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "idusuario", array()), "getName", array(), "method"), "html", null, true);
        echo "\" readonly>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"inputEmail\" class=\"col-sm-2 control-label\">Email</label>
                        <div class=\"col-sm-10\">
                          <input type=\"email\" class=\"form-control active\" placeholder=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "idusuario", array()), "getEmail", array(), "method"), "html", null, true);
        echo "\" readonly>
                        </div>
                      </div>
                      
                      <div class=\"form-group\">
                        <label for=\"inputSkills\" class=\"col-sm-2 control-label\">Start Date</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div class=\"input-group-addon\">
                              <i class=\"fa fa-calendar\"></i>
                            </div>
                            <input type=\"text\" class=\"form-control pull-right active\" placeholder=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "idusuario", array()), "getMemberSince", array(), "method"), "Y-m-d"), "html", null, true);
        echo "\" readonly>
                          </div>
                        </div>
                      </div>
                      
                      <div class=\"form-group\">
                        <label for=\"inputExperience\" class=\"col-sm-2 control-label\">Enabled</label>
                        <div class=\"col-sm-10\">
                          ";
        // line 77
        if ($this->getAttribute($this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "idusuario", array()), "isEnabled", array(), "method")) {
            // line 78
            echo "                            <p class=\"text-success\"><i class=\"fa fa-check\"></i></p>
                          ";
        } else {
            // line 80
            echo "                              <p class=\"text-danger\"><i class=\"fa fa-cross\">Disabled</i></p>
                          ";
        }
        // line 82
        echo "                        </div>
                      </div>
              
";
        // line 90
        echo "
                    </div>
                  </div><!-- /.tab-pane -->

                ";
        // line 119
        echo "              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
            
          </div><!-- /.row -->

                   
";
        // line 138
        echo "            </div>
            <div style=\"background-color: lightgray;\" class=\"row\" > 
                    <br>
                    <div class=\"nav-tabs-custom\" style=\"width:90%; margin-left: 5%; margin-top: 2px \">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\"><a class=\"nav-item nav-link\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#datosPersonales";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "idexpbecario", array()), "html", null, true);
        echo "\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Datos Personales</a></li>
                            <li><a class=\"nav-item nav-link\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#datosAcademicos";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "idexpbecario", array()), "html", null, true);
        echo "\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Datos Academicos</a></li>
                            <li><a class=\"nav-item nav-link\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#datosFamiliares";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "idexpbecario", array()), "html", null, true);
        echo "\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">Datos Familiares</a></li>
                        </ul>
                        <div class=\"tab-content\">


                            <div class=\"active tab-pane\" id=\"datosPersonales";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "idexpbecario", array()), "html", null, true);
        echo "\" style=\"width:90%; margin-left: 5%\">
                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\"><h3>Datos Personales</h3></div>

                                </div>
                                <hr>
                                <div class=\"row\">

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_documento\"><i class=\"fa fa-id-card\"></i> Documento Identidad: </label>
                                        ";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "docexpidentidadbecario", array()), "html", null, true);
        echo "

                                    </div> 

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_cdirecto\"> <i class=\"fa fa-phone\"></i> Numero de contacto: </label>
                                        ";
        // line 166
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "telexppersonalbecario", array()), "html", null, true);
        echo "

                                    </div> 
                                </div>
                                <br>
                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_telefono\"><i class=\"fa fa-phone\"></i> Otro Contacto: </label>
                                        ";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "telefonoexpbecario", array()), "html", null, true);
        echo "

                                    </div> 

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_edad\"><i class=\"fa fa-calendar\"></i> Fecha Nacimiento: </label>
                                        <strong>";
        // line 180
        if ($this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "fechaNacimiento", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "fechaNacimiento", array()), "Y-m-d"), "html", null, true);
        }
        echo "</strong>

                                    </div>
                                </div>
                                <br>
                                <div class=\"row\">

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_edad\"><i class=\"fa fa-venus-mars\"></i> Sexo: </label>
                                        ";
        // line 189
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "sexo", array()), "html", null, true);
        echo "

                                    </div>

                                    <div class=\"col col-md-6\" align=\"LEFT\">
                                        <label for=\"form_trabajo\"><i class=\"fa fa-briefcase\"></i> Posee trabajo</label>
                                        ";
        // line 195
        if (($this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "trabajoexpbecario", array()) == 1)) {
            echo "SI";
        } else {
            echo "NO";
        }
        // line 196
        echo "
                                    </div> 

                                </div>
                                <br>

                                <div class=\"row\">  
                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_religion\"><i class=\"fa fa-child\"></i> Religion:</label>
                                        ";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "religion", array()), "html", null, true);
        echo "

                                    </div>
                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_antecedentes\"><i class=\"fa fa-user\"></i> Descripción Personal:</label>
                                        ";
        // line 210
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "antecedentes", array()), "html", null, true);
        echo "

                                    </div>   

                                </div>
                                <br>
                                <div class=\"row\">  
                                    <div class=\"col col-md-12\" align=\"left\">
                                        <label for=\"form_direccion\"><i class=\"fa fa-street-view\"></i> Dirección: </label>
                                        ";
        // line 219
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "direccionexpbecario", array()), "html", null, true);
        echo "

                                    </div> 

                                </div>
                                <br>
                            </div><!-- /.tab-pane -->

                            <div class=\"tab-pane\" id=\"datosAcademicos";
        // line 227
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "idexpbecario", array()), "html", null, true);
        echo "\" style=\"width:90%; margin-left: 5%\">
                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\"><h3>Datos Academicos</h3></div>
                                    
                                </div>
                                <hr>
                                <div class=\"row\">  

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_carrera\"><i class=\"fa fa-graduation-cap\"></i> Carrera: </label>
                                        ";
        // line 237
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "carreraexpestudiarbecario", array()), "html", null, true);
        echo "

                                    </div> 

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_universidad\"><i class=\"fa fa-university\"></i> Universidad: </label>
                                        ";
        // line 243
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "universidadexpbecario", array()), "html", null, true);
        echo "

                                    </div>
                                </div>

                                <br>

                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\" id='datetimepicker1'>
                                        <label for=\"form_anioinicio\"><i class=\"fa fa-calendar\"></i> Fecha Ingreso Universidad: </label>
                                        <strong>";
        // line 253
        if ($this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "anioexpingresobecario", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "anioexpingresobecario", array()), "Y-m-d"), "html", null, true);
        }
        echo "</strong>

                                    </div>

                                    <div class=\"col col-md-6\" align=\"left\" id='datetimepicker2'>
                                        <label for=\"form_aniofin\"><i class=\"fa fa-calendar\"></i> Fecha Egreso Universidad: </label>

                                        <strong>";
        // line 260
        if ($this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "anioexpfinalizacionbecario", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "anioexpfinalizacionbecario", array()), "Y-m-d"), "html", null, true);
        }
        echo "</strong>
                                    </div>
                                </div>
                                <br>

                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_paes\"><i class=\"fa fa-list-alt\"></i> Nota Paes: </label>
                                        ";
        // line 268
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "paes", array()), "html", null, true);
        echo "

                                    </div>

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_matricula\"><i class=\"fa fa-usd\"></i> Monto Matricula: </label>
                                        \$";
        // line 274
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "montoexpmatriculabecario", array()), "html", null, true);
        echo "

                                    </div>
                                </div>
                                <br>
                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_cuotaM\"><i class=\"fa fa-usd\"></i> Cuota Mensual: </label>
                                        \$";
        // line 282
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "cuotaexpmensualbecario", array()), "html", null, true);
        echo "

                                    </div>

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_duracion\"><i class=\"fa fa-history\"></i> Duracion Carrera: </label>
                                        ";
        // line 288
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "duracionexpcarrerabecario", array()), "html", null, true);
        echo " 

                                    </div>
                                </div>
                                <br>

                                <div class=\"row\">
                                    <div class=\"col col-md-3\" align=\"left\">
                                        <label for=\"form_otrasbecas\"><i class=\"fa fa-handshake-o\"></i> Posee otras becas</label>
                                        ";
        // line 297
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "otrasbecas", array()), "html", null, true);
        echo "

                                    </div> 

                                    <div class=\"col col-md-3\" align=\"left\">
                                        <label for=\"form_Motrasbecas\"><i class=\"fa fa-usd\"></i> Monto otras becas</label>
                                        \$";
        // line 303
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "montootrasbecas", array()), "html", null, true);
        echo "

                                    </div>

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_comprobante\"><i class=\"fa fa-paperclip\"></i> Comprobante: </label>
                                        <a href=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/profile/" . $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "getComprobante", array(), "method"))), "html", null, true);
        echo "\">Descargar Comprobante</a>

                                    </div>
                                </div>
                            </div><!-- /.tab-pane -->

                            <div class=\"tab-pane\" id=\"datosFamiliares";
        // line 315
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "idexpbecario", array()), "html", null, true);
        echo "\" style=\"width:90%; margin-left: 5%\">
                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\"><h3>Datos Familiares</h3></div>
                                    
                                </div>
                                <hr>
                                <div class=\"row\">

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_ingresos\"><i class=\"fa fa-usd\"></i> Ingresos Familiares</label>
                                        \$";
        // line 325
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "ingresosexpfamiliabecario", array()), "html", null, true);
        echo "

                                    </div>

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_miembros\"><i class=\"fa fa-users\"></i> Miembros familia: </label>
                                        ";
        // line 331
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "miembrosexpfamiliabecario", array()), "html", null, true);
        echo "

                                    </div>
                                </div>
                                <br>
                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_hermanos\"><i class=\"fa fa-users\"></i> Cantidad de hermanos</label>
                                        ";
        // line 339
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "cantexphermanosbecario", array()), "html", null, true);
        echo "

                                    </div>

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_Temergencia\"><i class=\"fa fa-phone\"></i> Tel. Emergencia: </label>
                                        ";
        // line 345
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "telexpemergenciabecario", array()), "html", null, true);
        echo "

                                    </div>

                                </div>
                                <br>

                                <div class=\"row\">

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_nompadre\"><i class=\"fa fa-male\"></i> Nombre del padre: </label>
                                        ";
        // line 356
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "nomexppadrebecario", array()), "html", null, true);
        echo "

                                    </div> 

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_nommadre\"><i class=\"fa fa-female\"></i> Nombre de la madre: </label>
                                        ";
        // line 362
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "nomexpmadrebecario", array()), "html", null, true);
        echo "

                                    </div> 
                                </div>

                                <br>
                                <div class=\"row\">

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_ocupacionp\"><i class=\"fa fa-user-md\"></i> Ocupacion del padre: </label>
                                        ";
        // line 372
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "ocupacionpadre", array()), "html", null, true);
        echo "

                                    </div>


                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_ocupacionm\"><i class=\"fa fa-user-md\"></i> Ocupacion de la madre: </label>
                                        ";
        // line 379
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "ocupacionmadre", array()), "html", null, true);
        echo "

                                    </div>
                                </div>
                                <br>

                            </div><!-- /.tab-pane -->

                            ";
        // line 391
        echo "                        </div>
                    </div><!-- /.tab-content -->
                    <br>
                </div><!-- /.nav-tabs-custom -->
            </div>
        
                    
        </div>
    </div>
</div>";
        
        $__internal_4127616a474524ccf63dc5391fcaedf2426d7189b61ebd831ab97ceedc489a52->leave($__internal_4127616a474524ccf63dc5391fcaedf2426d7189b61ebd831ab97ceedc489a52_prof);

    }

    public function getTemplateName()
    {
        return "expedientebecario/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  526 => 391,  515 => 379,  505 => 372,  492 => 362,  483 => 356,  469 => 345,  460 => 339,  449 => 331,  440 => 325,  427 => 315,  418 => 309,  409 => 303,  400 => 297,  388 => 288,  379 => 282,  368 => 274,  359 => 268,  346 => 260,  334 => 253,  321 => 243,  312 => 237,  299 => 227,  288 => 219,  276 => 210,  268 => 205,  257 => 196,  251 => 195,  242 => 189,  228 => 180,  219 => 174,  208 => 166,  199 => 160,  186 => 150,  178 => 145,  174 => 144,  170 => 143,  163 => 138,  155 => 119,  149 => 90,  144 => 82,  140 => 80,  136 => 78,  134 => 77,  123 => 69,  109 => 58,  100 => 52,  91 => 46,  82 => 39,  68 => 26,  64 => 25,  60 => 24,  57 => 23,  54 => 22,  51 => 21,  48 => 20,  46 => 19,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}

<div class=\"modal fade\" id=\"VerExp{{  expedientebecario.idexpbecario }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div style=\"width:70%; margin-left: 15%\" class=\"modal-dialog\">
        <div class=\"modal-content\"  style=\"border-radius: 40px\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h3 align=\"center\"><strong>Expediente Becario</strong></h3>
            </div>
            <div class=\"modal-body\">
                
                 <div class=\"row\">
            <div class=\"col-md-3\">

              <!-- Profile Image -->
              <div class=\"box box-primary\">
                <div class=\"box-body box-profile\">
                  {% set profile_picture_path = false %}
                  {% if expedientebecario.idusuario.getProfilePicture() is not empty %}
                    {% set profile_picture_path = 'images/profile/'~ expedientebecario.idusuario.getProfilePicture() %}
                  {% endif %}

                  {{ macro.avatar(profile_picture_path, expedientebecario.idusuario.username, 'profile-user-img img-responsive img-circle') }}
                  <h3 class=\"profile-username text-center\"> {{ expedientebecario.idusuario.getName() }}</h3>
                  <p class=\"text-muted text-center\"><b>Last login </b>{{ expedientebecario.idusuario.getLastLogin(true) }}</p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->


             <div class=\"col-md-9\">
              <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\">
                  <li class=\"active\"><a href=\"#activity\" data-toggle=\"tab\">Detalles de usuario</a></li>
{#                  <li><a href=\"#roles-and-permission\" data-toggle=\"tab\">Roles and Permissions</a></li>
                  <li><a href=\"#change-password\" data-toggle=\"tab\">Change Password</a></li>#}
                </ul>
                <div class=\"tab-content\">
                  <div class=\"active tab-pane\" id=\"activity\">
                    <div class=\"form-horizontal\">
                      <div class=\"form-group\">
                        <label for=\"inputName\" class=\"col-sm-2 control-label\">Username</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" class=\"form-control active\" placeholder=\"{{ expedientebecario.idusuario.getUsername() }}\" readonly>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"inputName\" class=\"col-sm-2 control-label\">Name</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" class=\"form-control active\" placeholder=\"{{ expedientebecario.idusuario.getName() }}\" readonly>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"inputEmail\" class=\"col-sm-2 control-label\">Email</label>
                        <div class=\"col-sm-10\">
                          <input type=\"email\" class=\"form-control active\" placeholder=\"{{ expedientebecario.idusuario.getEmail() }}\" readonly>
                        </div>
                      </div>
                      
                      <div class=\"form-group\">
                        <label for=\"inputSkills\" class=\"col-sm-2 control-label\">Start Date</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div class=\"input-group-addon\">
                              <i class=\"fa fa-calendar\"></i>
                            </div>
                            <input type=\"text\" class=\"form-control pull-right active\" placeholder=\"{{ expedientebecario.idusuario.getMemberSince()|date('Y-m-d') }}\" readonly>
                          </div>
                        </div>
                      </div>
                      
                      <div class=\"form-group\">
                        <label for=\"inputExperience\" class=\"col-sm-2 control-label\">Enabled</label>
                        <div class=\"col-sm-10\">
                          {% if expedientebecario.idusuario.isEnabled() %}
                            <p class=\"text-success\"><i class=\"fa fa-check\"></i></p>
                          {% else %}
                              <p class=\"text-danger\"><i class=\"fa fa-cross\">Disabled</i></p>
                          {% endif %}
                        </div>
                      </div>
              
{#                      <div class=\"form-group\">
                        <div class=\"col-sm-offset-2 col-sm-10\">
                          <a class=\"btn btn-primary\" href=\"{{ path('fos_user_profile_edit') }}\"><i class=\"fa fa-fw fa-edit\"></i>Edit</a>
                        </div>
                      </div>#}

                    </div>
                  </div><!-- /.tab-pane -->

                {#  <div class=\"tab-pane\" id=\"roles-and-permission\">
                      {% if expedientebecario.idusuario.getRoles() is not empty %}
                      <table class=\"table table-bordered\">
                        <tbody>
                          <tr>
                            <th>Role</th>
                            <th>Enabled</th>
                          </tr>
                          {% for role in expedientebecario.idusuario.getRoles() %}
                            <tr>
                              <td>{{ role|upper }}</td>
                              <td><span class=\"badge bg-green\">Enabled</span></td>
                            </tr>
                          {% endfor %}
                        </tbody>
                      </table>
                      {% endif %}
                  </div>

                   <div class=\"tab-pane\" id=\"change-password\">
                      <p class=\"text-aqua\">Please click the link below to change your current password</p>
                     <div><a href=\"{{ path('fos_user_change_password') }}\" class=\"btn btn-default\"><i class=\"fa fa-fw fa-lock\"></i>Change Password</a></div>
                  </div>
              
                </div><!-- /.tab-content -->#}
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
            
          </div><!-- /.row -->

                   
{#                <ul>
                    <li>
                        <a href=\"{{ path('expedientebecario_index') }}\">Back to the list</a>
                    </li>
                    <li>
                        <a href=\"{{ path('expedientebecario_edit', { 'id': expedientebecario.idexpbecario }) }}\">Edit</a>
                    </li>
                    <li>
                        {{ form_start(delete_form) }}
                        <input type=\"submit\" value=\"Delete\">
                        {{ form_end(delete_form) }}
                    </li>
                </ul>#}
            </div>
            <div style=\"background-color: lightgray;\" class=\"row\" > 
                    <br>
                    <div class=\"nav-tabs-custom\" style=\"width:90%; margin-left: 5%; margin-top: 2px \">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\"><a class=\"nav-item nav-link\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#datosPersonales{{expedientebecario.idexpbecario}}\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Datos Personales</a></li>
                            <li><a class=\"nav-item nav-link\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#datosAcademicos{{expedientebecario.idexpbecario}}\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Datos Academicos</a></li>
                            <li><a class=\"nav-item nav-link\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#datosFamiliares{{expedientebecario.idexpbecario}}\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">Datos Familiares</a></li>
                        </ul>
                        <div class=\"tab-content\">


                            <div class=\"active tab-pane\" id=\"datosPersonales{{expedientebecario.idexpbecario}}\" style=\"width:90%; margin-left: 5%\">
                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\"><h3>Datos Personales</h3></div>

                                </div>
                                <hr>
                                <div class=\"row\">

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_documento\"><i class=\"fa fa-id-card\"></i> Documento Identidad: </label>
                                        {{ expedientebecario.docexpidentidadbecario   }}

                                    </div> 

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_cdirecto\"> <i class=\"fa fa-phone\"></i> Numero de contacto: </label>
                                        {{ expedientebecario.telexppersonalbecario   }}

                                    </div> 
                                </div>
                                <br>
                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_telefono\"><i class=\"fa fa-phone\"></i> Otro Contacto: </label>
                                        {{ expedientebecario.telefonoexpbecario   }}

                                    </div> 

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_edad\"><i class=\"fa fa-calendar\"></i> Fecha Nacimiento: </label>
                                        <strong>{% if expedientebecario.fechaNacimiento %}{{ expedientebecario.fechaNacimiento|date('Y-m-d') }}{% endif %}</strong>

                                    </div>
                                </div>
                                <br>
                                <div class=\"row\">

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_edad\"><i class=\"fa fa-venus-mars\"></i> Sexo: </label>
                                        {{ expedientebecario.sexo   }}

                                    </div>

                                    <div class=\"col col-md-6\" align=\"LEFT\">
                                        <label for=\"form_trabajo\"><i class=\"fa fa-briefcase\"></i> Posee trabajo</label>
                                        {% if expedientebecario.trabajoexpbecario==1  %}SI{%else%}NO{%endif%}

                                    </div> 

                                </div>
                                <br>

                                <div class=\"row\">  
                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_religion\"><i class=\"fa fa-child\"></i> Religion:</label>
                                        {{ expedientebecario.religion   }}

                                    </div>
                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_antecedentes\"><i class=\"fa fa-user\"></i> Descripción Personal:</label>
                                        {{ expedientebecario.antecedentes   }}

                                    </div>   

                                </div>
                                <br>
                                <div class=\"row\">  
                                    <div class=\"col col-md-12\" align=\"left\">
                                        <label for=\"form_direccion\"><i class=\"fa fa-street-view\"></i> Dirección: </label>
                                        {{ expedientebecario.direccionexpbecario   }}

                                    </div> 

                                </div>
                                <br>
                            </div><!-- /.tab-pane -->

                            <div class=\"tab-pane\" id=\"datosAcademicos{{expedientebecario.idexpbecario}}\" style=\"width:90%; margin-left: 5%\">
                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\"><h3>Datos Academicos</h3></div>
                                    
                                </div>
                                <hr>
                                <div class=\"row\">  

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_carrera\"><i class=\"fa fa-graduation-cap\"></i> Carrera: </label>
                                        {{ expedientebecario.carreraexpestudiarbecario   }}

                                    </div> 

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_universidad\"><i class=\"fa fa-university\"></i> Universidad: </label>
                                        {{ expedientebecario.universidadexpbecario   }}

                                    </div>
                                </div>

                                <br>

                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\" id='datetimepicker1'>
                                        <label for=\"form_anioinicio\"><i class=\"fa fa-calendar\"></i> Fecha Ingreso Universidad: </label>
                                        <strong>{% if expedientebecario.anioexpingresobecario %}{{ expedientebecario.anioexpingresobecario|date('Y-m-d') }}{% endif %}</strong>

                                    </div>

                                    <div class=\"col col-md-6\" align=\"left\" id='datetimepicker2'>
                                        <label for=\"form_aniofin\"><i class=\"fa fa-calendar\"></i> Fecha Egreso Universidad: </label>

                                        <strong>{% if expedientebecario.anioexpfinalizacionbecario %}{{ expedientebecario.anioexpfinalizacionbecario|date('Y-m-d') }}{% endif %}</strong>
                                    </div>
                                </div>
                                <br>

                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_paes\"><i class=\"fa fa-list-alt\"></i> Nota Paes: </label>
                                        {{ expedientebecario.paes   }}

                                    </div>

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_matricula\"><i class=\"fa fa-usd\"></i> Monto Matricula: </label>
                                        \${{ expedientebecario.montoexpmatriculabecario   }}

                                    </div>
                                </div>
                                <br>
                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_cuotaM\"><i class=\"fa fa-usd\"></i> Cuota Mensual: </label>
                                        \${{ expedientebecario.cuotaexpmensualbecario   }}

                                    </div>

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_duracion\"><i class=\"fa fa-history\"></i> Duracion Carrera: </label>
                                        {{ expedientebecario.duracionexpcarrerabecario }} 

                                    </div>
                                </div>
                                <br>

                                <div class=\"row\">
                                    <div class=\"col col-md-3\" align=\"left\">
                                        <label for=\"form_otrasbecas\"><i class=\"fa fa-handshake-o\"></i> Posee otras becas</label>
                                        {{ expedientebecario.otrasbecas }}

                                    </div> 

                                    <div class=\"col col-md-3\" align=\"left\">
                                        <label for=\"form_Motrasbecas\"><i class=\"fa fa-usd\"></i> Monto otras becas</label>
                                        \${{ expedientebecario.montootrasbecas }}

                                    </div>

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_comprobante\"><i class=\"fa fa-paperclip\"></i> Comprobante: </label>
                                        <a href=\"{{ asset('images/profile/'~expedientebecario.getComprobante() )  }}\">Descargar Comprobante</a>

                                    </div>
                                </div>
                            </div><!-- /.tab-pane -->

                            <div class=\"tab-pane\" id=\"datosFamiliares{{expedientebecario.idexpbecario}}\" style=\"width:90%; margin-left: 5%\">
                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\"><h3>Datos Familiares</h3></div>
                                    
                                </div>
                                <hr>
                                <div class=\"row\">

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_ingresos\"><i class=\"fa fa-usd\"></i> Ingresos Familiares</label>
                                        \${{ expedientebecario.ingresosexpfamiliabecario   }}

                                    </div>

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_miembros\"><i class=\"fa fa-users\"></i> Miembros familia: </label>
                                        {{ expedientebecario.miembrosexpfamiliabecario   }}

                                    </div>
                                </div>
                                <br>
                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_hermanos\"><i class=\"fa fa-users\"></i> Cantidad de hermanos</label>
                                        {{ expedientebecario.cantexphermanosbecario   }}

                                    </div>

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_Temergencia\"><i class=\"fa fa-phone\"></i> Tel. Emergencia: </label>
                                        {{ expedientebecario.telexpemergenciabecario   }}

                                    </div>

                                </div>
                                <br>

                                <div class=\"row\">

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_nompadre\"><i class=\"fa fa-male\"></i> Nombre del padre: </label>
                                        {{ expedientebecario.nomexppadrebecario   }}

                                    </div> 

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_nommadre\"><i class=\"fa fa-female\"></i> Nombre de la madre: </label>
                                        {{ expedientebecario.nomexpmadrebecario   }}

                                    </div> 
                                </div>

                                <br>
                                <div class=\"row\">

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_ocupacionp\"><i class=\"fa fa-user-md\"></i> Ocupacion del padre: </label>
                                        {{ expedientebecario.ocupacionpadre   }}

                                    </div>


                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_ocupacionm\"><i class=\"fa fa-user-md\"></i> Ocupacion de la madre: </label>
                                        {{ expedientebecario.ocupacionmadre   }}

                                    </div>
                                </div>
                                <br>

                            </div><!-- /.tab-pane -->

                            {#<div class=\"tab-pane\" id=\"change-password{{user.id}}\">
                                <p class=\"text-aqua\">Please click the link below to change your current password</p>
                                <div><a href=\"{{ path('fos_user_change_password'   }}\" class=\"btn btn-default\"><i class=\"fa fa-fw fa-lock\"></i>Change Password</a></div>
                            </div>#}
                        </div>
                    </div><!-- /.tab-content -->
                    <br>
                </div><!-- /.nav-tabs-custom -->
            </div>
        
                    
        </div>
    </div>
</div>", "expedientebecario/show.html.twig", "/home/ubuntu/workspace/app/Resources/views/expedientebecario/show.html.twig");
    }
}
