<?php

/* expedientebecario/miexpshow.html.twig */
class __TwigTemplate_7d75ad726defe5c55d1c0b7078a94cdca152c9e7e66f964ed1ba2285de73b5cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "expedientebecario/miexpshow.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c95f2f3ebbeb66cb7b6983f65a19dcb9fa72ea95cea3a539c1d1c811eed1075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c95f2f3ebbeb66cb7b6983f65a19dcb9fa72ea95cea3a539c1d1c811eed1075->enter($__internal_8c95f2f3ebbeb66cb7b6983f65a19dcb9fa72ea95cea3a539c1d1c811eed1075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expedientebecario/miexpshow.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c95f2f3ebbeb66cb7b6983f65a19dcb9fa72ea95cea3a539c1d1c811eed1075->leave($__internal_8c95f2f3ebbeb66cb7b6983f65a19dcb9fa72ea95cea3a539c1d1c811eed1075_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_83539dc79ba926fc14d5160bc4c8c18099177d4c04da82226fe51edd0f855ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83539dc79ba926fc14d5160bc4c8c18099177d4c04da82226fe51edd0f855ce5->enter($__internal_83539dc79ba926fc14d5160bc4c8c18099177d4c04da82226fe51edd0f855ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Mi Expediente ";
        
        $__internal_83539dc79ba926fc14d5160bc4c8c18099177d4c04da82226fe51edd0f855ce5->leave($__internal_83539dc79ba926fc14d5160bc4c8c18099177d4c04da82226fe51edd0f855ce5_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_8740ef618437960abbd2d999b282d044b5303dfbd0cba6d40abc967850462cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8740ef618437960abbd2d999b282d044b5303dfbd0cba6d40abc967850462cbc->enter($__internal_8740ef618437960abbd2d999b282d044b5303dfbd0cba6d40abc967850462cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "
                
      <div class=\"row\">
            <div class=\"col-md-3\">

              <!-- Profile Image -->
              <div class=\"box box-primary\">
                <div class=\"box-body box-profile\">
                  ";
        // line 14
        $context["profile_picture_path"] = false;
        // line 15
        echo "                  ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "getProfilePicture", array(), "method"))) {
            // line 16
            echo "                    ";
            $context["profile_picture_path"] = ("images/profile/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "getProfilePicture", array(), "method"));
            // line 17
            echo "                  ";
        }
        // line 18
        echo "
                  ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "avatar", array(0 => (isset($context["profile_picture_path"]) ? $context["profile_picture_path"] : $this->getContext($context, "profile_picture_path")), 1 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "getUsername", array(), "method"), 2 => "profile-user-img img-responsive img-circle"), "method"), "html", null, true);
        echo "
                  <h3 class=\"profile-username text-center\"> ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "getUsername", array(), "method"), "html", null, true);
        echo "</h3>
                  <p class=\"text-muted text-center\"><b>Last login </b>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "getLastLogin", array(0 => true), "method"), "html", null, true);
        echo "</p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->


             <div class=\"col-md-9\">
              <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\">
                  <li class=\"active\"><a href=\"#activity\" data-toggle=\"tab\">Detalles de usuario</a></li>
";
        // line 34
        echo "                </ul>
                <div class=\"tab-content\">
                  <div class=\"active tab-pane\" id=\"activity\">
                    <div class=\"form-horizontal\">
                      <div class=\"form-group\">
                        <label for=\"inputName\" class=\"col-sm-2 control-label\">Username</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" class=\"form-control active\" placeholder=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "getUsername", array(), "method"), "html", null, true);
        echo "\" readonly>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"inputName\" class=\"col-sm-2 control-label\">Name</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" class=\"form-control active\" placeholder=\"";
        // line 47
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "getFirstName", array(), "method") . " ") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "getLastName", array(), "method")), "html", null, true);
        echo "\" readonly>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"inputEmail\" class=\"col-sm-2 control-label\">Email</label>
                        <div class=\"col-sm-10\">
                          <input type=\"email\" class=\"form-control active\" placeholder=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "getEmail", array(), "method"), "html", null, true);
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
        // line 64
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "getMemberSince", array(), "method"), "Y-m-d"), "html", null, true);
        echo "\" readonly>
                          </div>
                        </div>
                      </div>
                      
                      <div class=\"form-group\">
                        <label for=\"inputExperience\" class=\"col-sm-2 control-label\">Enabled</label>
                        <div class=\"col-sm-10\">
                          ";
        // line 72
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "isEnabled", array(), "method")) {
            // line 73
            echo "                            <p class=\"text-success\"><i class=\"fa fa-check\"></i></p>
                          ";
        } else {
            // line 75
            echo "                              <p class=\"text-danger\"><i class=\"fa fa-cross\">Disabled</i></p>
                          ";
        }
        // line 77
        echo "                        </div>
                      </div>
              
";
        // line 85
        echo "
                    </div>
                  </div><!-- /.tab-pane -->

                ";
        // line 114
        echo "              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
            
          </div><!-- /.row -->

                   
";
        // line 133
        echo "            </div>
            <div style=\"background-color: lightgray;\" class=\"row\" > 
                    <br>
                    <div class=\"nav-tabs-custom\" style=\"width:90%; margin-left: 5%; margin-top: 2px \">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\"><a class=\"nav-item nav-link\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#datosPersonales";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "idexpbecario", array()), "html", null, true);
        echo "\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Datos Personales</a></li>
                            <li><a class=\"nav-item nav-link\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#datosAcademicos";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "idexpbecario", array()), "html", null, true);
        echo "\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Datos Academicos</a></li>
                            <li><a class=\"nav-item nav-link\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#datosFamiliares";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "idexpbecario", array()), "html", null, true);
        echo "\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">Datos Familiares</a></li>
                        </ul>
                        <div class=\"tab-content\">

                 
                            <div class=\"active tab-pane\" id=\"datosPersonales";
        // line 145
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
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "docexpidentidadbecario", array()), "html", null, true);
        echo "

                                    </div> 

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_cdirecto\"> <i class=\"fa fa-phone\"></i> Numero de contacto: </label>
                                        ";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "telexppersonalbecario", array()), "html", null, true);
        echo "

                                    </div> 
                                </div>
                                <br>
                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_telefono\"><i class=\"fa fa-phone\"></i> Otro Contacto: </label>
                                        ";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "telefonoexpbecario", array()), "html", null, true);
        echo "

                                    </div> 

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_edad\"><i class=\"fa fa-calendar\"></i> Fecha Nacimiento: </label>
                                        <strong>";
        // line 175
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
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "sexo", array()), "html", null, true);
        echo "

                                    </div>

                                    <div class=\"col col-md-6\" align=\"LEFT\">
                                        <label for=\"form_trabajo\"><i class=\"fa fa-briefcase\"></i> Posee trabajo</label>
                                        ";
        // line 190
        if (($this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "trabajoexpbecario", array()) == 1)) {
            echo "SI";
        } else {
            echo "NO";
        }
        // line 191
        echo "
                                    </div> 

                                </div>
                                <br>

                                <div class=\"row\">  
                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_religion\"><i class=\"fa fa-child\"></i> Religion:</label>
                                        ";
        // line 200
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "religion", array()), "html", null, true);
        echo "

                                    </div>
                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_antecedentes\"><i class=\"fa fa-user\"></i> Descripción Personal:</label>
                                        ";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "antecedentes", array()), "html", null, true);
        echo "

                                    </div>   

                                </div>
                                <br>
                                <div class=\"row\">  
                                    <div class=\"col col-md-12\" align=\"left\">
                                        <label for=\"form_direccion\"><i class=\"fa fa-street-view\"></i> Dirección: </label>
                                        ";
        // line 214
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "direccionexpbecario", array()), "html", null, true);
        echo "

                                    </div> 

                                </div>
                                <br>
                            </div><!-- /.tab-pane -->

                            <div class=\"tab-pane\" id=\"datosAcademicos";
        // line 222
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
        // line 232
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "carreraexpestudiarbecario", array()), "html", null, true);
        echo "

                                    </div> 

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_universidad\"><i class=\"fa fa-university\"></i> Universidad: </label>
                                        ";
        // line 238
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "universidadexpbecario", array()), "html", null, true);
        echo "

                                    </div>
                                </div>

                                <br>

                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\" id='datetimepicker1'>
                                        <label for=\"form_anioinicio\"><i class=\"fa fa-calendar\"></i> Fecha Ingreso Universidad: </label>
                                        <strong>";
        // line 248
        if ($this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "anioexpingresobecario", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "anioexpingresobecario", array()), "Y-m-d"), "html", null, true);
        }
        echo "</strong>

                                    </div>

                                    <div class=\"col col-md-6\" align=\"left\" id='datetimepicker2'>
                                        <label for=\"form_aniofin\"><i class=\"fa fa-calendar\"></i> Fecha Egreso Universidad: </label>

                                        <strong>";
        // line 255
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
        // line 263
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "paes", array()), "html", null, true);
        echo "

                                    </div>

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_matricula\"><i class=\"fa fa-usd\"></i> Monto Matricula: </label>
                                        \$";
        // line 269
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "montoexpmatriculabecario", array()), "html", null, true);
        echo "

                                    </div>
                                </div>
                                <br>
                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_cuotaM\"><i class=\"fa fa-usd\"></i> Cuota Mensual: </label>
                                        \$";
        // line 277
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "cuotaexpmensualbecario", array()), "html", null, true);
        echo "

                                    </div>

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_duracion\"><i class=\"fa fa-history\"></i> Duracion Carrera: </label>
                                        ";
        // line 283
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "duracionexpcarrerabecario", array()), "html", null, true);
        echo " 

                                    </div>
                                </div>
                                <br>

                                <div class=\"row\">
                                    <div class=\"col col-md-3\" align=\"left\">
                                        <label for=\"form_otrasbecas\"><i class=\"fa fa-handshake-o\"></i> Posee otras becas</label>
                                        ";
        // line 292
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "otrasbecas", array()), "html", null, true);
        echo "

                                    </div> 

                                    <div class=\"col col-md-3\" align=\"left\">
                                        <label for=\"form_Motrasbecas\"><i class=\"fa fa-usd\"></i> Monto otras becas</label>
                                        \$";
        // line 298
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "montootrasbecas", array()), "html", null, true);
        echo "

                                    </div>

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_comprobante\"><i class=\"fa fa-paperclip\"></i> Comprobante: </label>
                                        <a href=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/profile/" . $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "getComprobante", array(), "method"))), "html", null, true);
        echo "\">Descargar Comprobante</a>

                                    </div>
                                </div>
                            </div><!-- /.tab-pane -->

                            <div class=\"tab-pane\" id=\"datosFamiliares";
        // line 310
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
        // line 320
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "ingresosexpfamiliabecario", array()), "html", null, true);
        echo "

                                    </div>

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_miembros\"><i class=\"fa fa-users\"></i> Miembros familia: </label>
                                        ";
        // line 326
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "miembrosexpfamiliabecario", array()), "html", null, true);
        echo "

                                    </div>
                                </div>
                                <br>
                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_hermanos\"><i class=\"fa fa-users\"></i> Cantidad de hermanos</label>
                                        ";
        // line 334
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "cantexphermanosbecario", array()), "html", null, true);
        echo "

                                    </div>

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_Temergencia\"><i class=\"fa fa-phone\"></i> Tel. Emergencia: </label>
                                        ";
        // line 340
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "telexpemergenciabecario", array()), "html", null, true);
        echo "

                                    </div>

                                </div>
                                <br>

                                <div class=\"row\">

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_nompadre\"><i class=\"fa fa-male\"></i> Nombre del padre: </label>
                                        ";
        // line 351
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "nomexppadrebecario", array()), "html", null, true);
        echo "

                                    </div> 

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_nommadre\"><i class=\"fa fa-female\"></i> Nombre de la madre: </label>
                                        ";
        // line 357
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "nomexpmadrebecario", array()), "html", null, true);
        echo "

                                    </div> 
                                </div>

                                <br>
                                <div class=\"row\">

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_ocupacionp\"><i class=\"fa fa-user-md\"></i> Ocupacion del padre: </label>
                                        ";
        // line 367
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "ocupacionpadre", array()), "html", null, true);
        echo "

                                    </div>


                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_ocupacionm\"><i class=\"fa fa-user-md\"></i> Ocupacion de la madre: </label>
                                        ";
        // line 374
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expedientebecario"]) ? $context["expedientebecario"] : $this->getContext($context, "expedientebecario")), "ocupacionmadre", array()), "html", null, true);
        echo "

                                    </div>
                                </div>
                                <br>

                            </div><!-- /.tab-pane -->

                            ";
        // line 386
        echo "                        </div>
                    </div><!-- /.tab-content -->
                    <br>
                </div><!-- /.nav-tabs-custom -->
            </div>
        
     ";
        
        $__internal_8740ef618437960abbd2d999b282d044b5303dfbd0cba6d40abc967850462cbc->leave($__internal_8740ef618437960abbd2d999b282d044b5303dfbd0cba6d40abc967850462cbc_prof);

    }

    public function getTemplateName()
    {
        return "expedientebecario/miexpshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  543 => 386,  532 => 374,  522 => 367,  509 => 357,  500 => 351,  486 => 340,  477 => 334,  466 => 326,  457 => 320,  444 => 310,  435 => 304,  426 => 298,  417 => 292,  405 => 283,  396 => 277,  385 => 269,  376 => 263,  363 => 255,  351 => 248,  338 => 238,  329 => 232,  316 => 222,  305 => 214,  293 => 205,  285 => 200,  274 => 191,  268 => 190,  259 => 184,  245 => 175,  236 => 169,  225 => 161,  216 => 155,  203 => 145,  195 => 140,  191 => 139,  187 => 138,  180 => 133,  172 => 114,  166 => 85,  161 => 77,  157 => 75,  153 => 73,  151 => 72,  140 => 64,  126 => 53,  117 => 47,  108 => 41,  99 => 34,  85 => 21,  81 => 20,  77 => 19,  74 => 18,  71 => 17,  68 => 16,  65 => 15,  63 => 14,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block page_title %} Mi Expediente {% endblock %}

{% block page_content %}

                
      <div class=\"row\">
            <div class=\"col-md-3\">

              <!-- Profile Image -->
              <div class=\"box box-primary\">
                <div class=\"box-body box-profile\">
                  {% set profile_picture_path = false %}
                  {% if app.getUser().getProfilePicture() is not empty %}
                    {% set profile_picture_path = 'images/profile/'~ app.getUser().getProfilePicture() %}
                  {% endif %}

                  {{ macro.avatar(profile_picture_path, app.getUser().getUsername(), 'profile-user-img img-responsive img-circle') }}
                  <h3 class=\"profile-username text-center\"> {{ app.getUser().getUsername() }}</h3>
                  <p class=\"text-muted text-center\"><b>Last login </b>{{ app.getUser().getLastLogin(true) }}</p>
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
                          <input type=\"text\" class=\"form-control active\" placeholder=\"{{ app.getUser().getUsername() }}\" readonly>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"inputName\" class=\"col-sm-2 control-label\">Name</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" class=\"form-control active\" placeholder=\"{{ app.getUser().getFirstName()~' '~app.getUser().getLastName() }}\" readonly>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"inputEmail\" class=\"col-sm-2 control-label\">Email</label>
                        <div class=\"col-sm-10\">
                          <input type=\"email\" class=\"form-control active\" placeholder=\"{{ app.getUser().getEmail() }}\" readonly>
                        </div>
                      </div>
                      
                      <div class=\"form-group\">
                        <label for=\"inputSkills\" class=\"col-sm-2 control-label\">Start Date</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div class=\"input-group-addon\">
                              <i class=\"fa fa-calendar\"></i>
                            </div>
                            <input type=\"text\" class=\"form-control pull-right active\" placeholder=\"{{app.getUser().getMemberSince()|date('Y-m-d') }}\" readonly>
                          </div>
                        </div>
                      </div>
                      
                      <div class=\"form-group\">
                        <label for=\"inputExperience\" class=\"col-sm-2 control-label\">Enabled</label>
                        <div class=\"col-sm-10\">
                          {% if app.getUser().isEnabled() %}
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
        
     {% endblock %}", "expedientebecario/miexpshow.html.twig", "/home/ubuntu/workspace/app/Resources/views/expedientebecario/miexpshow.html.twig");
    }
}
