<?php

/* solicitudbecario/Solicitudbecarioshow.html.twig */
class __TwigTemplate_29af34ffad47e98aafd9bb5abc0d7678db6890f4f3ec1d564f325f14112540c4 extends Twig_Template
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
        $__internal_1390b0aed043c7dbe6129826a83c4907bf04524e7266244a5187eda49215b6eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1390b0aed043c7dbe6129826a83c4907bf04524e7266244a5187eda49215b6eb->enter($__internal_1390b0aed043c7dbe6129826a83c4907bf04524e7266244a5187eda49215b6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "solicitudbecario/Solicitudbecarioshow.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"VerSoli";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "idsolibecario", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div style=\"width:70%; margin-left: 15%\" class=\"modal-dialog\">
        <div class=\"modal-content\" style=\"border-radius: 40px\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <div class=\"row\">\t
                    <h3 class=\"col col-md-11 col-md-offset-1\" align=\"center\"><strong>Solicitud Becario </strong></h3>
                </div>
            </div>
            <div class=\"modal-body\" >

                <div style=\"background-color: lightgray;\" > 
                    <br>
                    <div class=\"nav-tabs-custom\" style=\"width:90%; margin-top: 2% \">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\"><a class=\"nav-item nav-link\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#datosPersonales";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "idsolibecario", array()), "html", null, true);
        echo "\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Datos Personales</a></li>
                            <li><a class=\"nav-item nav-link\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#datosAcademicos";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "idsolibecario", array()), "html", null, true);
        echo "\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Datos Academicos</a></li>
                            <li><a class=\"nav-item nav-link\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#datosFamiliares";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "idsolibecario", array()), "html", null, true);
        echo "\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">Datos Familiares</a></li>
                        </ul>
                        <div class=\"tab-content\">


                            <div class=\"active tab-pane\" id=\"datosPersonales";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "idsolibecario", array()), "html", null, true);
        echo "\" style=\"width:90%; margin-left: 5%\">
                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\"><h3>Datos Personales</h3></div>
                                    <div class=\"col col-md-6\">
                                        <p align=\"right\"><strong>Aspirante:</strong><u> ";
        // line 28
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getFirstName", array(), "method") . " ") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getLastName", array(), "method")), "html", null, true);
        echo "</u></p>
                                    </div>
                                </div>
                                <hr>
                                <div class=\"row\">

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_documento\"><i class=\"fa fa-id-card\"></i> Documento Identidad: </label>
                                        ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "docsoliidentidadbecario", array()), "html", null, true);
        echo "

                                    </div> 

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_cdirecto\"> <i class=\"fa fa-phone\"></i> Numero de contacto: </label>
                                        ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "telsolipersonalbecario", array()), "html", null, true);
        echo "

                                    </div> 
                                </div>
                                <br>
                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_telefono\"><i class=\"fa fa-phone\"></i> Otro Contacto: </label>
                                        ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "telefonosolibecario", array()), "html", null, true);
        echo "

                                    </div> 

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_edad\"><i class=\"fa fa-calendar\"></i> Fecha Nacimiento: </label>
                                        <strong>";
        // line 56
        if ($this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "fechaNacimiento", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "fechaNacimiento", array()), "Y-m-d"), "html", null, true);
        }
        echo "</strong>

                                    </div>
                                </div>
                                <br>
                                <div class=\"row\">

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_edad\"><i class=\"fa fa-venus-mars\"></i> Sexo: </label>
                                        ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "sexo", array()), "html", null, true);
        echo "

                                    </div>

                                    <div class=\"col col-md-6\" align=\"LEFT\">
                                        <label for=\"form_trabajo\"><i class=\"fa fa-briefcase\"></i> Posee trabajo</label>
                                        ";
        // line 71
        if (($this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "trabajosolibecario", array()) == 1)) {
            echo "SI";
        } else {
            echo "NO";
        }
        // line 72
        echo "
                                    </div> 

                                </div>
                                <br>

                                <div class=\"row\">  
                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_religion\"><i class=\"fa fa-child\"></i> Religion:</label>
                                        ";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "religion", array()), "html", null, true);
        echo "

                                    </div>
                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_antecedentes\"><i class=\"fa fa-user\"></i> Descripción Personal:</label>
                                        ";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "antecedentes", array()), "html", null, true);
        echo "

                                    </div>   

                                </div>
                                <br>
                                <div class=\"row\">  
                                    <div class=\"col col-md-12\" align=\"left\">
                                        <label for=\"form_direccion\"><i class=\"fa fa-street-view\"></i> Dirección: </label>
                                        ";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "direccionsolibecario", array()), "html", null, true);
        echo "

                                    </div> 

                                </div>
                                <br>
                            </div><!-- /.tab-pane -->

                            <div class=\"tab-pane\" id=\"datosAcademicos";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "idsolibecario", array()), "html", null, true);
        echo "\" style=\"width:90%; margin-left: 5%\">
                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\"><h3>Datos Academicos</h3></div>
                                    <div class=\"col col-md-6\">
                                        <p align=\"right\"><strong>Aspirante:</strong><u> ";
        // line 107
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getFirstName", array(), "method") . " ") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getLastName", array(), "method")), "html", null, true);
        echo "</u></p>
                                    </div>
                                </div>
                                <hr>
                                <div class=\"row\">  

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_carrera\"><i class=\"fa fa-graduation-cap\"></i> Carrera: </label>
                                        ";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "carrerasoliestudiarbecario", array()), "html", null, true);
        echo "

                                    </div> 

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_universidad\"><i class=\"fa fa-university\"></i> Universidad: </label>
                                        ";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "universidadsolibecario", array()), "html", null, true);
        echo "

                                    </div>
                                </div>

                                <br>

                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\" id='datetimepicker1'>
                                        <label for=\"form_anioinicio\"><i class=\"fa fa-calendar\"></i> Fecha Ingreso Universidad: </label>
                                        <strong>";
        // line 131
        if ($this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "aniosoliingresobecario", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "aniosoliingresobecario", array()), "Y-m-d"), "html", null, true);
        }
        echo "</strong>

                                    </div>

                                    <div class=\"col col-md-6\" align=\"left\" id='datetimepicker2'>
                                        <label for=\"form_aniofin\"><i class=\"fa fa-calendar\"></i> Fecha Egreso Universidad: </label>

                                        <strong>";
        // line 138
        if ($this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "aniosolifinalizacionbecario", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "aniosolifinalizacionbecario", array()), "Y-m-d"), "html", null, true);
        }
        echo "</strong>
                                    </div>
                                </div>
                                <br>

                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_paes\"><i class=\"fa fa-list-alt\"></i> Nota Paes: </label>
                                        ";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "paes", array()), "html", null, true);
        echo "

                                    </div>

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_matricula\"><i class=\"fa fa-usd\"></i> Monto Matricula: </label>
                                        \$";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "montosolimatriculabecario", array()), "html", null, true);
        echo "

                                    </div>
                                </div>
                                <br>
                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_cuotaM\"><i class=\"fa fa-usd\"></i> Cuota Mensual: </label>
                                        \$";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "cuotasolimensualbecario", array()), "html", null, true);
        echo "

                                    </div>

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_duracion\"><i class=\"fa fa-history\"></i> Duracion Carrera: </label>
                                        ";
        // line 166
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "duracionsolicarrerabecario", array()), "html", null, true);
        echo " 

                                    </div>
                                </div>
                                <br>

                                <div class=\"row\">
                                    <div class=\"col col-md-3\" align=\"left\">
                                        <label for=\"form_otrasbecas\"><i class=\"fa fa-handshake-o\"></i> Posee otras becas</label>
                                        ";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "otrasbecas", array()), "html", null, true);
        echo "

                                    </div> 

                                    <div class=\"col col-md-3\" align=\"left\">
                                        <label for=\"form_Motrasbecas\"><i class=\"fa fa-usd\"></i> Monto otras becas</label>
                                        \$";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "montootrasbecas", array()), "html", null, true);
        echo "

                                    </div>

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_comprobante\"><i class=\"fa fa-paperclip\"></i> Comprobante: </label>
                                        <a href=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/profile/" . $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "getComprobante", array(), "method"))), "html", null, true);
        echo "\">Descargar Comprobante</a>

                                    </div>
                                </div>
                            </div><!-- /.tab-pane -->

                            <div class=\"tab-pane\" id=\"datosFamiliares";
        // line 193
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "idsolibecario", array()), "html", null, true);
        echo "\" style=\"width:90%; margin-left: 5%\">
                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\"><h3>Datos Familiares</h3></div>
                                    <div class=\"col col-md-6\">
                                        <p align=\"right\"><strong>Aspirante:</strong><u> ";
        // line 197
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getFirstName", array(), "method") . " ") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getLastName", array(), "method")), "html", null, true);
        echo "</u></p>
                                    </div>
                                </div>
                                <hr>
                                <div class=\"row\">

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_ingresos\"><i class=\"fa fa-usd\"></i> Ingresos Familiares</label>
                                        \$";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "ingresossolifamiliabecario", array()), "html", null, true);
        echo "

                                    </div>

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_miembros\"><i class=\"fa fa-users\"></i> Miembros familia: </label>
                                        ";
        // line 211
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "miembrossolifamiliabecario", array()), "html", null, true);
        echo "

                                    </div>
                                </div>
                                <br>
                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_hermanos\"><i class=\"fa fa-users\"></i> Cantidad de hermanos</label>
                                        ";
        // line 219
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "cantsolihermanosbecario", array()), "html", null, true);
        echo "

                                    </div>

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_Temergencia\"><i class=\"fa fa-phone\"></i> Tel. Emergencia: </label>
                                        ";
        // line 225
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "telsoliemergenciabecario", array()), "html", null, true);
        echo "

                                    </div>

                                </div>
                                <br>

                                <div class=\"row\">

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_nompadre\"><i class=\"fa fa-male\"></i> Nombre del padre: </label>
                                        ";
        // line 236
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "nomsolipadrebecario", array()), "html", null, true);
        echo "

                                    </div> 

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_nommadre\"><i class=\"fa fa-female\"></i> Nombre de la madre: </label>
                                        ";
        // line 242
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "nomsolimadrebecario", array()), "html", null, true);
        echo "

                                    </div> 
                                </div>

                                <br>
                                <div class=\"row\">

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_ocupacionp\"><i class=\"fa fa-user-md\"></i> Ocupacion del padre: </label>
                                        ";
        // line 252
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "ocupacionpadre", array()), "html", null, true);
        echo "

                                    </div>


                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_ocupacionm\"><i class=\"fa fa-user-md\"></i> Ocupacion de la madre: </label>
                                        ";
        // line 259
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "ocupacionmadre", array()), "html", null, true);
        echo "

                                    </div>
                                </div>
                                <br>

                            </div><!-- /.tab-pane -->

                            ";
        // line 271
        echo "                        </div>
                    </div><!-- /.tab-content -->
                    ";
        // line 273
        if (($this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "estadosolibecario", array()) == 2)) {
            echo " <p style=\"color: crimson; font-size: 20px \"><i class=\"fa fa-warning\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "observacionrechazo", array()), "html", null, true);
            echo " </p>";
        } elseif (($this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "estadosolibecario", array()) == 1)) {
            echo " <p style=\"color: forestgreen; font-size: 20px \"><i class=\"fa fa-check\"></i> Felicidades! Su solicitud ha sido aprobada! </p> ";
        }
        // line 274
        echo "                    <br>
                </div><!-- /.nav-tabs-custom -->
            </div>

            <div class=\"modal-footer\">
                ";
        // line 279
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_ADMIN"), "method") || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_COORDINADOR"), "method")) && ($this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "estadosolibecario", array()) == 0))) {
            // line 280
            echo "                    <div style=\"float:right; margin-left: 1px\">
                        <form style=\"\" action=\"";
            // line 281
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("solicitudbecario_aprobacion", array("id" => $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "idsolibecario", array()), "val" => 1)), "html", null, true);
            echo "\" method=\"POST\"> 

                            <button type=\"submit\" class=\"btn btn-success\" >Aprobar</button>
                        </form></div>
                    <div style=\"float:right; margin-left: 1px\"> 
                        <form action=\"";
            // line 286
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("solicitudbecario_aprobacion", array("id" => $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "idsolibecario", array()), "val" => 2)), "html", null, true);
            echo "\" method=\"POST\"> 
                            <div class=\"modal fade\" id=\"recha";
            // line 287
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "idsolibecario", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                <div style=\"width:50%; margin-left: 25%;\" class=\"modal-dialog\">
                                    <div class=\"modal-content\"  style=\"border-radius: 10px\">
                                        <div class=\"modal-body\">
                                            <textarea class=\"form-control\" id=\"descripcion\" name=\"descripcion\" style=\"width:100%\" placeholder=\"Observaciones\" name=\"descripcion\"></textarea>
                                            <button type=\"submit\" class=\"btn btn-success\" style=\"margin-top:1%;widt:100%\" >Guardar</button>
                                        </div>
                                    </div>
                                </div>   
                            </div> 

                            <button type=\"button\" class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#recha";
            // line 298
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudbecario"]) ? $context["solicitudbecario"] : $this->getContext($context, "solicitudbecario")), "idsolibecario", array()), "html", null, true);
            echo "\" >Denegar</button>
                        </form>
                    </div>
                ";
        }
        // line 301
        echo "                
            </div>
        </div>
    </div>
</div>



";
        
        $__internal_1390b0aed043c7dbe6129826a83c4907bf04524e7266244a5187eda49215b6eb->leave($__internal_1390b0aed043c7dbe6129826a83c4907bf04524e7266244a5187eda49215b6eb_prof);

    }

    public function getTemplateName()
    {
        return "solicitudbecario/Solicitudbecarioshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  470 => 301,  463 => 298,  449 => 287,  445 => 286,  437 => 281,  434 => 280,  432 => 279,  425 => 274,  417 => 273,  413 => 271,  402 => 259,  392 => 252,  379 => 242,  370 => 236,  356 => 225,  347 => 219,  336 => 211,  327 => 205,  316 => 197,  309 => 193,  300 => 187,  291 => 181,  282 => 175,  270 => 166,  261 => 160,  250 => 152,  241 => 146,  228 => 138,  216 => 131,  203 => 121,  194 => 115,  183 => 107,  176 => 103,  165 => 95,  153 => 86,  145 => 81,  134 => 72,  128 => 71,  119 => 65,  105 => 56,  96 => 50,  85 => 42,  76 => 36,  65 => 28,  58 => 24,  50 => 19,  46 => 18,  42 => 17,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"VerSoli{{ solicitudbecario.idsolibecario }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div style=\"width:70%; margin-left: 15%\" class=\"modal-dialog\">
        <div class=\"modal-content\" style=\"border-radius: 40px\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <div class=\"row\">\t
                    <h3 class=\"col col-md-11 col-md-offset-1\" align=\"center\"><strong>Solicitud Becario </strong></h3>
                </div>
            </div>
            <div class=\"modal-body\" >

                <div style=\"background-color: lightgray;\" > 
                    <br>
                    <div class=\"nav-tabs-custom\" style=\"width:90%; margin-top: 2% \">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\"><a class=\"nav-item nav-link\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#datosPersonales{{solicitudbecario.idsolibecario}}\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Datos Personales</a></li>
                            <li><a class=\"nav-item nav-link\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#datosAcademicos{{solicitudbecario.idsolibecario}}\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Datos Academicos</a></li>
                            <li><a class=\"nav-item nav-link\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#datosFamiliares{{solicitudbecario.idsolibecario}}\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">Datos Familiares</a></li>
                        </ul>
                        <div class=\"tab-content\">


                            <div class=\"active tab-pane\" id=\"datosPersonales{{solicitudbecario.idsolibecario}}\" style=\"width:90%; margin-left: 5%\">
                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\"><h3>Datos Personales</h3></div>
                                    <div class=\"col col-md-6\">
                                        <p align=\"right\"><strong>Aspirante:</strong><u> {{app.user.getFirstName()  ~\" \"~app.user.getLastName()  }}</u></p>
                                    </div>
                                </div>
                                <hr>
                                <div class=\"row\">

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_documento\"><i class=\"fa fa-id-card\"></i> Documento Identidad: </label>
                                        {{ solicitudbecario.docsoliidentidadbecario   }}

                                    </div> 

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_cdirecto\"> <i class=\"fa fa-phone\"></i> Numero de contacto: </label>
                                        {{ solicitudbecario.telsolipersonalbecario   }}

                                    </div> 
                                </div>
                                <br>
                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_telefono\"><i class=\"fa fa-phone\"></i> Otro Contacto: </label>
                                        {{ solicitudbecario.telefonosolibecario   }}

                                    </div> 

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_edad\"><i class=\"fa fa-calendar\"></i> Fecha Nacimiento: </label>
                                        <strong>{% if solicitudbecario.fechaNacimiento %}{{ solicitudbecario.fechaNacimiento|date('Y-m-d') }}{% endif %}</strong>

                                    </div>
                                </div>
                                <br>
                                <div class=\"row\">

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_edad\"><i class=\"fa fa-venus-mars\"></i> Sexo: </label>
                                        {{ solicitudbecario.sexo   }}

                                    </div>

                                    <div class=\"col col-md-6\" align=\"LEFT\">
                                        <label for=\"form_trabajo\"><i class=\"fa fa-briefcase\"></i> Posee trabajo</label>
                                        {% if solicitudbecario.trabajosolibecario==1  %}SI{%else%}NO{%endif%}

                                    </div> 

                                </div>
                                <br>

                                <div class=\"row\">  
                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_religion\"><i class=\"fa fa-child\"></i> Religion:</label>
                                        {{ solicitudbecario.religion   }}

                                    </div>
                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_antecedentes\"><i class=\"fa fa-user\"></i> Descripción Personal:</label>
                                        {{ solicitudbecario.antecedentes   }}

                                    </div>   

                                </div>
                                <br>
                                <div class=\"row\">  
                                    <div class=\"col col-md-12\" align=\"left\">
                                        <label for=\"form_direccion\"><i class=\"fa fa-street-view\"></i> Dirección: </label>
                                        {{ solicitudbecario.direccionsolibecario   }}

                                    </div> 

                                </div>
                                <br>
                            </div><!-- /.tab-pane -->

                            <div class=\"tab-pane\" id=\"datosAcademicos{{solicitudbecario.idsolibecario}}\" style=\"width:90%; margin-left: 5%\">
                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\"><h3>Datos Academicos</h3></div>
                                    <div class=\"col col-md-6\">
                                        <p align=\"right\"><strong>Aspirante:</strong><u> {{app.user.getFirstName()  ~\" \"~app.user.getLastName()  }}</u></p>
                                    </div>
                                </div>
                                <hr>
                                <div class=\"row\">  

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_carrera\"><i class=\"fa fa-graduation-cap\"></i> Carrera: </label>
                                        {{ solicitudbecario.carrerasoliestudiarbecario   }}

                                    </div> 

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_universidad\"><i class=\"fa fa-university\"></i> Universidad: </label>
                                        {{ solicitudbecario.universidadsolibecario   }}

                                    </div>
                                </div>

                                <br>

                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\" id='datetimepicker1'>
                                        <label for=\"form_anioinicio\"><i class=\"fa fa-calendar\"></i> Fecha Ingreso Universidad: </label>
                                        <strong>{% if solicitudbecario.aniosoliingresobecario %}{{ solicitudbecario.aniosoliingresobecario|date('Y-m-d') }}{% endif %}</strong>

                                    </div>

                                    <div class=\"col col-md-6\" align=\"left\" id='datetimepicker2'>
                                        <label for=\"form_aniofin\"><i class=\"fa fa-calendar\"></i> Fecha Egreso Universidad: </label>

                                        <strong>{% if solicitudbecario.aniosolifinalizacionbecario %}{{ solicitudbecario.aniosolifinalizacionbecario|date('Y-m-d') }}{% endif %}</strong>
                                    </div>
                                </div>
                                <br>

                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_paes\"><i class=\"fa fa-list-alt\"></i> Nota Paes: </label>
                                        {{ solicitudbecario.paes   }}

                                    </div>

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_matricula\"><i class=\"fa fa-usd\"></i> Monto Matricula: </label>
                                        \${{ solicitudbecario.montosolimatriculabecario   }}

                                    </div>
                                </div>
                                <br>
                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_cuotaM\"><i class=\"fa fa-usd\"></i> Cuota Mensual: </label>
                                        \${{ solicitudbecario.cuotasolimensualbecario   }}

                                    </div>

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_duracion\"><i class=\"fa fa-history\"></i> Duracion Carrera: </label>
                                        {{ solicitudbecario.duracionsolicarrerabecario }} 

                                    </div>
                                </div>
                                <br>

                                <div class=\"row\">
                                    <div class=\"col col-md-3\" align=\"left\">
                                        <label for=\"form_otrasbecas\"><i class=\"fa fa-handshake-o\"></i> Posee otras becas</label>
                                        {{ solicitudbecario.otrasbecas }}

                                    </div> 

                                    <div class=\"col col-md-3\" align=\"left\">
                                        <label for=\"form_Motrasbecas\"><i class=\"fa fa-usd\"></i> Monto otras becas</label>
                                        \${{ solicitudbecario.montootrasbecas }}

                                    </div>

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_comprobante\"><i class=\"fa fa-paperclip\"></i> Comprobante: </label>
                                        <a href=\"{{ asset('images/profile/'~solicitudbecario.getComprobante() )  }}\">Descargar Comprobante</a>

                                    </div>
                                </div>
                            </div><!-- /.tab-pane -->

                            <div class=\"tab-pane\" id=\"datosFamiliares{{solicitudbecario.idsolibecario}}\" style=\"width:90%; margin-left: 5%\">
                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\"><h3>Datos Familiares</h3></div>
                                    <div class=\"col col-md-6\">
                                        <p align=\"right\"><strong>Aspirante:</strong><u> {{app.user.getFirstName()  ~\" \"~app.user.getLastName()  }}</u></p>
                                    </div>
                                </div>
                                <hr>
                                <div class=\"row\">

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_ingresos\"><i class=\"fa fa-usd\"></i> Ingresos Familiares</label>
                                        \${{ solicitudbecario.ingresossolifamiliabecario   }}

                                    </div>

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_miembros\"><i class=\"fa fa-users\"></i> Miembros familia: </label>
                                        {{ solicitudbecario.miembrossolifamiliabecario   }}

                                    </div>
                                </div>
                                <br>
                                <div class=\"row\">
                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_hermanos\"><i class=\"fa fa-users\"></i> Cantidad de hermanos</label>
                                        {{ solicitudbecario.cantsolihermanosbecario   }}

                                    </div>

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_Temergencia\"><i class=\"fa fa-phone\"></i> Tel. Emergencia: </label>
                                        {{ solicitudbecario.telsoliemergenciabecario   }}

                                    </div>

                                </div>
                                <br>

                                <div class=\"row\">

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_nompadre\"><i class=\"fa fa-male\"></i> Nombre del padre: </label>
                                        {{ solicitudbecario.nomsolipadrebecario   }}

                                    </div> 

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_nommadre\"><i class=\"fa fa-female\"></i> Nombre de la madre: </label>
                                        {{ solicitudbecario.nomsolimadrebecario   }}

                                    </div> 
                                </div>

                                <br>
                                <div class=\"row\">

                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_ocupacionp\"><i class=\"fa fa-user-md\"></i> Ocupacion del padre: </label>
                                        {{ solicitudbecario.ocupacionpadre   }}

                                    </div>


                                    <div class=\"col col-md-6\" align=\"left\">
                                        <label for=\"form_ocupacionm\"><i class=\"fa fa-user-md\"></i> Ocupacion de la madre: </label>
                                        {{ solicitudbecario.ocupacionmadre   }}

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
                    {%if (solicitudbecario.estadosolibecario==2 )%} <p style=\"color: crimson; font-size: 20px \"><i class=\"fa fa-warning\"></i> {{ solicitudbecario.observacionrechazo   }} </p>{% elseif(solicitudbecario.estadosolibecario==1) %} <p style=\"color: forestgreen; font-size: 20px \"><i class=\"fa fa-check\"></i> Felicidades! Su solicitud ha sido aprobada! </p> {%endif%}
                    <br>
                </div><!-- /.nav-tabs-custom -->
            </div>

            <div class=\"modal-footer\">
                {% if ((app.user.hasRole('ROLE_ADMIN') or app.user.hasRole('ROLE_COORDINADOR')) and solicitudbecario.estadosolibecario==0)  %}
                    <div style=\"float:right; margin-left: 1px\">
                        <form style=\"\" action=\"{{path('solicitudbecario_aprobacion',{'id':solicitudbecario.idsolibecario,'val':1})}}\" method=\"POST\"> 

                            <button type=\"submit\" class=\"btn btn-success\" >Aprobar</button>
                        </form></div>
                    <div style=\"float:right; margin-left: 1px\"> 
                        <form action=\"{{path('solicitudbecario_aprobacion',{'id':solicitudbecario.idsolibecario,'val':2})}}\" method=\"POST\"> 
                            <div class=\"modal fade\" id=\"recha{{  solicitudbecario.idsolibecario }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                <div style=\"width:50%; margin-left: 25%;\" class=\"modal-dialog\">
                                    <div class=\"modal-content\"  style=\"border-radius: 10px\">
                                        <div class=\"modal-body\">
                                            <textarea class=\"form-control\" id=\"descripcion\" name=\"descripcion\" style=\"width:100%\" placeholder=\"Observaciones\" name=\"descripcion\"></textarea>
                                            <button type=\"submit\" class=\"btn btn-success\" style=\"margin-top:1%;widt:100%\" >Guardar</button>
                                        </div>
                                    </div>
                                </div>   
                            </div> 

                            <button type=\"button\" class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#recha{{ solicitudbecario.idsolibecario }}\" >Denegar</button>
                        </form>
                    </div>
                {% endif %}                
            </div>
        </div>
    </div>
</div>



", "solicitudbecario/Solicitudbecarioshow.html.twig", "/home/ubuntu/workspace/app/Resources/views/solicitudbecario/Solicitudbecarioshow.html.twig");
    }
}
