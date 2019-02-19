<?php

/* solicitudpatrocinador/solicitudpatrocinadorshow.html.twig */
class __TwigTemplate_7e805982efeae618e0fbeba9c9dd671cff96e0ff498eba6e44b6e6f585212d58 extends Twig_Template
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
        $__internal_4f04a3045c396d1f45efd7d9fccb2c57dcec2744aa9690b48ce4ff1e5b52a365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f04a3045c396d1f45efd7d9fccb2c57dcec2744aa9690b48ce4ff1e5b52a365->enter($__internal_4f04a3045c396d1f45efd7d9fccb2c57dcec2744aa9690b48ce4ff1e5b52a365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "solicitudpatrocinador/solicitudpatrocinadorshow.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"VerSoliP";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudpatrocinador"]) ? $context["solicitudpatrocinador"] : $this->getContext($context, "solicitudpatrocinador")), "idsolipatrocinador", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" style=\"width:80%;margin-left: 10%\">
        <div class=\"modal-content\" style=\"border-radius: 40px\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h3 align=\"center\"><strong><strong>Solicitud Patrocinador</strong></strong></h3>
            </div>
            <div class=\"modal-body\">
                <div style=\"background-color: lightgray; width: 95%; \">
                    <!--modal-->
                    <div class=\"row\" style=\"width: 90%; margin-left:5%;\" align=\"left\">
                        <div class=\"row\"> 
                            <div class=\"col col-md-6\">
                                <h4><i class=\"fa fa-user\"></i> Aspirante</h4>
                                <p class=\"form-group\"><strong>";
        // line 16
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstName", array()) . " ") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastName", array())), "html", null, true);
        echo "</strong></p>
                            </div>
                            <div class=\"col col-md-6\">

                                <h4><i class=\"fa fa-envelope-open\"></i> Correo</h4>
                                <p class=\"form-group\"><strong>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</strong></p>

                            </div>    
                        </div> 
                        <br>
                        <div class=\"row\">
                            <div class=\"col col-md-6\">

                                <h4><i class=\"fa fa-card\"></i> Documento De Identidad</h4>
                                <p class=\"form-group\"><strong>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudpatrocinador"]) ? $context["solicitudpatrocinador"] : $this->getContext($context, "solicitudpatrocinador")), "docidentidadsolipatrocinador", array()), "html", null, true);
        echo "</strong></p>
                            </div>
                            <div class=\"col col-md-6\">
                                <h4><i class=\"fa fa-money\"></i> Monto Patrocinado</h4>
                                <p class=\"form-group\"><strong>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudpatrocinador"]) ? $context["solicitudpatrocinador"] : $this->getContext($context, "solicitudpatrocinador")), "montoaportarsolipatrocinador", array()), "html", null, true);
        echo "</strong></p>
                            </div>
                        </div>
                        <br>
                        <div class=\"row\">    
                            <div class=\"col col-md-6\">

                                <h4><i class=\"fa fa-phone\"></i> Telefono</h4>
                                <p class=\"form-group\"><strong>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudpatrocinador"]) ? $context["solicitudpatrocinador"] : $this->getContext($context, "solicitudpatrocinador")), "telefonosolipatrocinador", array()), "html", null, true);
        echo "</strong></p>
                            </div>
                            <div class=\"col col-md-6\">
                                <h4><i class=\"fa fa-street-view\"></i> Direccion</h4>
                                <p class=\"form-group\"><strong>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudpatrocinador"]) ? $context["solicitudpatrocinador"] : $this->getContext($context, "solicitudpatrocinador")), "direccionsolipatrocinador", array()), "html", null, true);
        echo "</strong></p>

                            </div>
                        </div>
                        <br>
                        <div class=\"row\"  align=\"left\">

                            <div class=\"col col-md-6\">
                                <h4><i class=\"fa fa-check\"></i> Estado</h4>
                                <p class=\"form-group\"><strong>";
        // line 55
        if (($this->getAttribute((isset($context["solicitudpatrocinador"]) ? $context["solicitudpatrocinador"] : $this->getContext($context, "solicitudpatrocinador")), "estadosolipatrocinador", array()) == 0)) {
            echo "En Espera";
        } elseif (($this->getAttribute((isset($context["solicitudpatrocinador"]) ? $context["solicitudpatrocinador"] : $this->getContext($context, "solicitudpatrocinador")), "estadosolipatrocinador", array()) == 1)) {
            echo "Aprobado";
        } elseif (($this->getAttribute((isset($context["solicitudpatrocinador"]) ? $context["solicitudpatrocinador"] : $this->getContext($context, "solicitudpatrocinador")), "estadosolipatrocinador", array()) == 2)) {
            echo "Denegado";
        }
        echo "</strong></p>

                            </div>
                            <div class=\"col col-md-6\">
                                <h4><i class=\"fa fa-warning \"></i> Observaciones</h4>
                                <p class=\"form-group\"><strong>";
        // line 60
        if (($this->getAttribute((isset($context["solicitudpatrocinador"]) ? $context["solicitudpatrocinador"] : $this->getContext($context, "solicitudpatrocinador")), "estadosolipatrocinador", array()) == 0)) {
        } elseif (($this->getAttribute((isset($context["solicitudpatrocinador"]) ? $context["solicitudpatrocinador"] : $this->getContext($context, "solicitudpatrocinador")), "estadosolipatrocinador", array()) == 1)) {
            echo "<p style=\"color: forestgreen\">Tu solicitud ha sido aprobada!</p>";
        } elseif (($this->getAttribute((isset($context["solicitudpatrocinador"]) ? $context["solicitudpatrocinador"] : $this->getContext($context, "solicitudpatrocinador")), "estadosolipatrocinador", array()) == 2)) {
            echo "<p style=\"color: crimson\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudpatrocinador"]) ? $context["solicitudpatrocinador"] : $this->getContext($context, "solicitudpatrocinador")), "observacionpatrocinador", array()), "html", null, true);
            echo "</p>";
        }
        echo "</strong></p>

                            </div>
                        </div>
                    </div>
                    <br>
                </div>

            </div>

            <div class=\"modal-footer\">
                ";
        // line 71
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_ADMIN"), "method") || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_COORDINADOR"), "method")) && ($this->getAttribute((isset($context["solicitudpatrocinador"]) ? $context["solicitudpatrocinador"] : $this->getContext($context, "solicitudpatrocinador")), "estadosolipatrocinador", array()) == 0))) {
            // line 72
            echo "                    <div style=\"float:right; margin-left: 1px\">
                        <form style=\"\" action=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("solicitud_aprobacion", array("id" => $this->getAttribute((isset($context["solicitudpatrocinador"]) ? $context["solicitudpatrocinador"] : $this->getContext($context, "solicitudpatrocinador")), "idsolipatrocinador", array()), "val" => 1)), "html", null, true);
            echo "\" method=\"POST\"> 

                            <button type=\"submit\" class=\"btn btn-success\" >Aprobar</button>
                        </form></div>
                    <div style=\"float:right; margin-left: 1px\"> 
                        <form action=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("solicitud_aprobacion", array("id" => $this->getAttribute((isset($context["solicitudpatrocinador"]) ? $context["solicitudpatrocinador"] : $this->getContext($context, "solicitudpatrocinador")), "idsolipatrocinador", array()), "val" => 2)), "html", null, true);
            echo "\" method=\"POST\"> 
                            <div class=\"modal fade\" id=\"recha";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudpatrocinador"]) ? $context["solicitudpatrocinador"] : $this->getContext($context, "solicitudpatrocinador")), "idsolipatrocinador", array()), "html", null, true);
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
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitudpatrocinador"]) ? $context["solicitudpatrocinador"] : $this->getContext($context, "solicitudpatrocinador")), "idsolipatrocinador", array()), "html", null, true);
            echo "\" >Denegar</button>
                        </form>
                    </div>
                ";
        }
        // line 93
        echo "                
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

";
        
        $__internal_4f04a3045c396d1f45efd7d9fccb2c57dcec2744aa9690b48ce4ff1e5b52a365->leave($__internal_4f04a3045c396d1f45efd7d9fccb2c57dcec2744aa9690b48ce4ff1e5b52a365_prof);

    }

    public function getTemplateName()
    {
        return "solicitudpatrocinador/solicitudpatrocinadorshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 93,  164 => 90,  150 => 79,  146 => 78,  138 => 73,  135 => 72,  133 => 71,  112 => 60,  98 => 55,  86 => 46,  79 => 42,  68 => 34,  61 => 30,  49 => 21,  41 => 16,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"VerSoliP{{ solicitudpatrocinador.idsolipatrocinador }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" style=\"width:80%;margin-left: 10%\">
        <div class=\"modal-content\" style=\"border-radius: 40px\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h3 align=\"center\"><strong><strong>Solicitud Patrocinador</strong></strong></h3>
            </div>
            <div class=\"modal-body\">
                <div style=\"background-color: lightgray; width: 95%; \">
                    <!--modal-->
                    <div class=\"row\" style=\"width: 90%; margin-left:5%;\" align=\"left\">
                        <div class=\"row\"> 
                            <div class=\"col col-md-6\">
                                <h4><i class=\"fa fa-user\"></i> Aspirante</h4>
                                <p class=\"form-group\"><strong>{{ app.user.firstName~\" \"~app.user.lastName}}</strong></p>
                            </div>
                            <div class=\"col col-md-6\">

                                <h4><i class=\"fa fa-envelope-open\"></i> Correo</h4>
                                <p class=\"form-group\"><strong>{{ app.user.email}}</strong></p>

                            </div>    
                        </div> 
                        <br>
                        <div class=\"row\">
                            <div class=\"col col-md-6\">

                                <h4><i class=\"fa fa-card\"></i> Documento De Identidad</h4>
                                <p class=\"form-group\"><strong>{{ solicitudpatrocinador.docidentidadsolipatrocinador }}</strong></p>
                            </div>
                            <div class=\"col col-md-6\">
                                <h4><i class=\"fa fa-money\"></i> Monto Patrocinado</h4>
                                <p class=\"form-group\"><strong>{{ solicitudpatrocinador.montoaportarsolipatrocinador }}</strong></p>
                            </div>
                        </div>
                        <br>
                        <div class=\"row\">    
                            <div class=\"col col-md-6\">

                                <h4><i class=\"fa fa-phone\"></i> Telefono</h4>
                                <p class=\"form-group\"><strong>{{ solicitudpatrocinador.telefonosolipatrocinador }}</strong></p>
                            </div>
                            <div class=\"col col-md-6\">
                                <h4><i class=\"fa fa-street-view\"></i> Direccion</h4>
                                <p class=\"form-group\"><strong>{{ solicitudpatrocinador.direccionsolipatrocinador }}</strong></p>

                            </div>
                        </div>
                        <br>
                        <div class=\"row\"  align=\"left\">

                            <div class=\"col col-md-6\">
                                <h4><i class=\"fa fa-check\"></i> Estado</h4>
                                <p class=\"form-group\"><strong>{% if solicitudpatrocinador.estadosolipatrocinador == 0 %}En Espera{% elseif  solicitudpatrocinador.estadosolipatrocinador == 1 %}Aprobado{% elseif  solicitudpatrocinador.estadosolipatrocinador == 2 %}Denegado{% endif %}</strong></p>

                            </div>
                            <div class=\"col col-md-6\">
                                <h4><i class=\"fa fa-warning \"></i> Observaciones</h4>
                                <p class=\"form-group\"><strong>{% if solicitudpatrocinador.estadosolipatrocinador == 0 %}{% elseif  solicitudpatrocinador.estadosolipatrocinador == 1 %}<p style=\"color: forestgreen\">Tu solicitud ha sido aprobada!</p>{% elseif  solicitudpatrocinador.estadosolipatrocinador == 2 %}<p style=\"color: crimson\">{{solicitudpatrocinador.observacionpatrocinador}}</p>{% endif %}</strong></p>

                            </div>
                        </div>
                    </div>
                    <br>
                </div>

            </div>

            <div class=\"modal-footer\">
                {% if ((app.user.hasRole('ROLE_ADMIN') or app.user.hasRole('ROLE_COORDINADOR')) and solicitudpatrocinador.estadosolipatrocinador==0)  %}
                    <div style=\"float:right; margin-left: 1px\">
                        <form style=\"\" action=\"{{path('solicitud_aprobacion',{'id':solicitudpatrocinador.idsolipatrocinador,'val':1})}}\" method=\"POST\"> 

                            <button type=\"submit\" class=\"btn btn-success\" >Aprobar</button>
                        </form></div>
                    <div style=\"float:right; margin-left: 1px\"> 
                        <form action=\"{{path('solicitud_aprobacion',{'id':solicitudpatrocinador.idsolipatrocinador,'val':2})}}\" method=\"POST\"> 
                            <div class=\"modal fade\" id=\"recha{{  solicitudpatrocinador.idsolipatrocinador }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                <div style=\"width:50%; margin-left: 25%;\" class=\"modal-dialog\">
                                    <div class=\"modal-content\"  style=\"border-radius: 10px\">
                                        <div class=\"modal-body\">
                                            <textarea class=\"form-control\" id=\"descripcion\" name=\"descripcion\" style=\"width:100%\" placeholder=\"Observaciones\" name=\"descripcion\"></textarea>
                                            <button type=\"submit\" class=\"btn btn-success\" style=\"margin-top:1%;widt:100%\" >Guardar</button>
                                        </div>
                                    </div>
                                </div>   
                            </div> 

                            <button type=\"button\" class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#recha{{ solicitudpatrocinador.idsolipatrocinador }}\" >Denegar</button>
                        </form>
                    </div>
                {% endif %}                
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

", "solicitudpatrocinador/solicitudpatrocinadorshow.html.twig", "/home/ubuntu/workspace/app/Resources/views/solicitudpatrocinador/solicitudpatrocinadorshow.html.twig");
    }
}
