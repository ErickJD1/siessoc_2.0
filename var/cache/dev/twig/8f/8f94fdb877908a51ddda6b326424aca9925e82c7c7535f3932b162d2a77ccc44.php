<?php

/* solicitudbecario/Solicitudbecarioindex.html.twig */
class __TwigTemplate_e6c7836cef8598a4cb326ab23a308192a656950274e87a1148a268a7d29ab9cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "solicitudbecario/Solicitudbecarioindex.html.twig", 1);
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
        $__internal_53a607a8f9f0063432adf09c4d9f5845a9632cbca1df6e8d39b4e8277c59b58a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a607a8f9f0063432adf09c4d9f5845a9632cbca1df6e8d39b4e8277c59b58a->enter($__internal_53a607a8f9f0063432adf09c4d9f5845a9632cbca1df6e8d39b4e8277c59b58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "solicitudbecario/Solicitudbecarioindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53a607a8f9f0063432adf09c4d9f5845a9632cbca1df6e8d39b4e8277c59b58a->leave($__internal_53a607a8f9f0063432adf09c4d9f5845a9632cbca1df6e8d39b4e8277c59b58a_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_2180fb5383b5841a4b597a73073294f7f40e0581e4e955d72f3ef1b2cb707b36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2180fb5383b5841a4b597a73073294f7f40e0581e4e955d72f3ef1b2cb707b36->enter($__internal_2180fb5383b5841a4b597a73073294f7f40e0581e4e955d72f3ef1b2cb707b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Solicitud | ";
        
        $__internal_2180fb5383b5841a4b597a73073294f7f40e0581e4e955d72f3ef1b2cb707b36->leave($__internal_2180fb5383b5841a4b597a73073294f7f40e0581e4e955d72f3ef1b2cb707b36_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_73d0a4714231d8bb53f4a2ecf50180770e9fe1c17b879ec8b753036a8f0cb953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d0a4714231d8bb53f4a2ecf50180770e9fe1c17b879ec8b753036a8f0cb953->enter($__internal_73d0a4714231d8bb53f4a2ecf50180770e9fe1c17b879ec8b753036a8f0cb953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Lista De solicitudes ";
        
        $__internal_73d0a4714231d8bb53f4a2ecf50180770e9fe1c17b879ec8b753036a8f0cb953->leave($__internal_73d0a4714231d8bb53f4a2ecf50180770e9fe1c17b879ec8b753036a8f0cb953_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_802676e2c9dc4efea5e50f1abe8ad3170ac7c5baf6f2e6d8c519bb498c2d1cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802676e2c9dc4efea5e50f1abe8ad3170ac7c5baf6f2e6d8c519bb498c2d1cff->enter($__internal_802676e2c9dc4efea5e50f1abe8ad3170ac7c5baf6f2e6d8c519bb498c2d1cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
    <div class=\"box box-primary\">
        <div style=\"width:90%; margin-left:5%; margin-top: 2% \">

            <div align=\"left\">
                <a style=\"font-size: 20px\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("solicitudbecario_new");
        echo "\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Registrar Solicitud</a>
            </div>
            <br> </br>

            <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:90%\" id=\"tabelMahasiswa\">
                <thead class=\"thead-light\">
                    <tr>
                        <th>Telefonos</th>
                        <th>Ingresos familiares</th>
                        <th>Miembros familiares</th>
                        <th>Tipo Solicitud</th>
                        <th>Carrera A Estudiar</th>
                        <th>Universidad</th>
                        <th>Matricula</th>
                        <th>Cuota Mensual</th>
                        <th>Duracion Carrera</th>
                        <th>Trabajo</th>
                        <th>Documento De Identidad</th>
                        <th>Año de ingreso</th>
                        <th>Año de finalizacion</th>
                        <th>Numero De Hermanos</th>
                        <th>Nombre del padre</th>
                        <th>Nombre de la madre</th>
                        <th>Edad</th>
                        <th>Sexo</th>
                        <th>Nota Paes</th>
                        <th>Ocupacion del padre</th>
                        <th>Ocupacion de la madre</th>
                        <th>Otras becas</th>
                        <th>Monto de otras becas</th>
                        <th>Antecendetes</th>
                        <th>En emergencias Llamar</th>
                        <th>Telefono Del Becario</th>
                        <th>Direccion</th>
                        <th>Estado</th>
                        <th>Religion</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>

                    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["solicitudbecarios"]) ? $context["solicitudbecarios"] : $this->getContext($context, "solicitudbecarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["solicitudbecario"]) {
            // line 54
            echo "                        <tr>
                            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "telefonosolibecario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "ingresossolifamiliabecario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "miembrossolifamiliabecario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "tiposolicasabecario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "carrerasoliestudiarbecario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "universidadsolibecario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "montosolimatriculabecario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "cuotasolimensualbecario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "duracionsolicarrerabecario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 64
            if ($this->getAttribute($context["solicitudbecario"], "trabajosolibecario", array())) {
                echo "Si";
            } else {
                echo "No";
            }
            echo "</td>
                            <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "docsoliidentidadbecario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 66
            if ($this->getAttribute($context["solicitudbecario"], "aniosoliingresobecario", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["solicitudbecario"], "aniosoliingresobecario", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 67
            if ($this->getAttribute($context["solicitudbecario"], "aniosolifinalizacionbecario", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["solicitudbecario"], "aniosolifinalizacionbecario", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "cantsolihermanosbecario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "nomsolipadrebecario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "nomsolimadrebecario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "edad", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "sexo", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "paes", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "ocupacionpadre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "ocupacionmadre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 76
            if ($this->getAttribute($context["solicitudbecario"], "otrasbecas", array())) {
                echo "Si";
            } else {
                echo "No";
            }
            echo "</td>
                            <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "montootrasbecas", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "antecedentes", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "telsoliemergenciabecario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "telsolipersonalbecario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "direccionsolibecario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "religion", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 83
            if ($this->getAttribute($context["solicitudbecario"], "estadosolibecario", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                            <td>
                            
                                <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#deletesoli";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "idsolibecario", array()), "html", null, true);
            echo "\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: crimson\"></i></button>
                                    ";
            // line 87
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Solicitudbecario:showDelete", array("id" => $this->getAttribute($context["solicitudbecario"], "idsolibecario", array()))));
            echo "
                                </div>
                                
                               <div style=\"float:left;\">
                                   <a title=\"Editar Solicitud\" href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("solicitudbecario_edit", array("id" => $this->getAttribute($context["solicitudbecario"], "idsolibecario", array()))), "html", null, true);
            echo "\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                               </div>
                                
                                <div style=\"float:left;\"><button title=\"Ver Soli\" class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerSoli";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "idsolibecario", array()), "html", null, true);
            echo "\"><i style=\"font-size: 20px\"></i><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i></button>
                                        ";
            // line 95
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Solicitudbecario:show", array("id" => $this->getAttribute($context["solicitudbecario"], "idsolibecario", array()))));
            echo "
                                </div>

                            </td>
                        </tr>

                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitudbecario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_802676e2c9dc4efea5e50f1abe8ad3170ac7c5baf6f2e6d8c519bb498c2d1cff->leave($__internal_802676e2c9dc4efea5e50f1abe8ad3170ac7c5baf6f2e6d8c519bb498c2d1cff_prof);

    }

    public function getTemplateName()
    {
        return "solicitudbecario/Solicitudbecarioindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 103,  279 => 95,  275 => 94,  269 => 91,  262 => 87,  258 => 86,  248 => 83,  244 => 82,  240 => 81,  236 => 80,  232 => 79,  228 => 78,  224 => 77,  216 => 76,  212 => 75,  208 => 74,  204 => 73,  200 => 72,  196 => 71,  192 => 70,  188 => 69,  184 => 68,  178 => 67,  172 => 66,  168 => 65,  160 => 64,  156 => 63,  152 => 62,  148 => 61,  144 => 60,  140 => 59,  136 => 58,  132 => 57,  128 => 56,  124 => 55,  121 => 54,  117 => 53,  73 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Solicitud | {% endblock %}
{% block page_subtitle %}Lista De solicitudes {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\">
        <div style=\"width:90%; margin-left:5%; margin-top: 2% \">

            <div align=\"left\">
                <a style=\"font-size: 20px\" href=\"{{ path('solicitudbecario_new') }}\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Registrar Solicitud</a>
            </div>
            <br> </br>

            <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:90%\" id=\"tabelMahasiswa\">
                <thead class=\"thead-light\">
                    <tr>
                        <th>Telefonos</th>
                        <th>Ingresos familiares</th>
                        <th>Miembros familiares</th>
                        <th>Tipo Solicitud</th>
                        <th>Carrera A Estudiar</th>
                        <th>Universidad</th>
                        <th>Matricula</th>
                        <th>Cuota Mensual</th>
                        <th>Duracion Carrera</th>
                        <th>Trabajo</th>
                        <th>Documento De Identidad</th>
                        <th>Año de ingreso</th>
                        <th>Año de finalizacion</th>
                        <th>Numero De Hermanos</th>
                        <th>Nombre del padre</th>
                        <th>Nombre de la madre</th>
                        <th>Edad</th>
                        <th>Sexo</th>
                        <th>Nota Paes</th>
                        <th>Ocupacion del padre</th>
                        <th>Ocupacion de la madre</th>
                        <th>Otras becas</th>
                        <th>Monto de otras becas</th>
                        <th>Antecendetes</th>
                        <th>En emergencias Llamar</th>
                        <th>Telefono Del Becario</th>
                        <th>Direccion</th>
                        <th>Estado</th>
                        <th>Religion</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>

                    {% for solicitudbecario in solicitudbecarios %}
                        <tr>
                            <td>{{ solicitudbecario.telefonosolibecario }}</td>
                            <td>{{ solicitudbecario.ingresossolifamiliabecario }}</td>
                            <td>{{ solicitudbecario.miembrossolifamiliabecario }}</td>
                            <td>{{ solicitudbecario.tiposolicasabecario }}</td>
                            <td>{{ solicitudbecario.carrerasoliestudiarbecario }}</td>
                            <td>{{ solicitudbecario.universidadsolibecario }}</td>
                            <td>{{ solicitudbecario.montosolimatriculabecario }}</td>
                            <td>{{ solicitudbecario.cuotasolimensualbecario }}</td>
                            <td>{{ solicitudbecario.duracionsolicarrerabecario }}</td>
                            <td>{% if solicitudbecario.trabajosolibecario %}Si{% else %}No{% endif %}</td>
                            <td>{{ solicitudbecario.docsoliidentidadbecario }}</td>
                            <td>{% if solicitudbecario.aniosoliingresobecario %}{{ solicitudbecario.aniosoliingresobecario|date('Y-m-d') }}{% endif %}</td>
                            <td>{% if solicitudbecario.aniosolifinalizacionbecario %}{{ solicitudbecario.aniosolifinalizacionbecario|date('Y-m-d') }}{% endif %}</td>
                            <td>{{ solicitudbecario.cantsolihermanosbecario }}</td>
                            <td>{{ solicitudbecario.nomsolipadrebecario }}</td>
                            <td>{{ solicitudbecario.nomsolimadrebecario }}</td>
                            <td>{{ solicitudbecario.edad }}</td>
                            <td>{{ solicitudbecario.sexo }}</td>
                            <td>{{ solicitudbecario.paes }}</td>
                            <td>{{ solicitudbecario.ocupacionpadre }}</td>
                            <td>{{ solicitudbecario.ocupacionmadre }}</td>
                            <td>{% if solicitudbecario.otrasbecas %}Si{% else %}No{% endif %}</td>
                            <td>{{ solicitudbecario.montootrasbecas }}</td>
                            <td>{{ solicitudbecario.antecedentes }}</td>
                            <td>{{ solicitudbecario.telsoliemergenciabecario }}</td>
                            <td>{{ solicitudbecario.telsolipersonalbecario }}</td>
                            <td>{{ solicitudbecario.direccionsolibecario }}</td>
                            <td>{{ solicitudbecario.religion }}</td>
                            <td>{% if solicitudbecario.estadosolibecario %}Yes{% else %}No{% endif %}</td>
                            <td>
                            
                                <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#deletesoli{{ solicitudbecario.idsolibecario }}\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: crimson\"></i></button>
                                    {{ render(controller('AppBundle:Solicitudbecario:showDelete', { 'id' : solicitudbecario.idsolibecario } )) }}
                                </div>
                                
                               <div style=\"float:left;\">
                                   <a title=\"Editar Solicitud\" href=\"{{path('solicitudbecario_edit',{ 'id' : solicitudbecario.idsolibecario })}}\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                               </div>
                                
                                <div style=\"float:left;\"><button title=\"Ver Soli\" class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerSoli{{ solicitudbecario.idsolibecario }}\"><i style=\"font-size: 20px\"></i><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i></button>
                                        {{ render(controller('AppBundle:Solicitudbecario:show', { 'id' : solicitudbecario.idsolibecario } )) }}
                                </div>

                            </td>
                        </tr>

                        </div>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}
", "solicitudbecario/Solicitudbecarioindex.html.twig", "/home/ubuntu/workspace/app/Resources/views/solicitudbecario/Solicitudbecarioindex.html.twig");
    }
}
