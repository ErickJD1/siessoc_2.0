<?php

/* solicitudpatrocinador/solicitudpatrocinadorindex.html.twig */
class __TwigTemplate_9f245a5766a968506e609cd61a27650e41400f34b3918716085c5f96f3fcb757 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "solicitudpatrocinador/solicitudpatrocinadorindex.html.twig", 1);
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
        $__internal_b2e63fc73f71e3199366b63622241ca190cf16cae1a20297ef0fd0a11ce39a83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e63fc73f71e3199366b63622241ca190cf16cae1a20297ef0fd0a11ce39a83->enter($__internal_b2e63fc73f71e3199366b63622241ca190cf16cae1a20297ef0fd0a11ce39a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "solicitudpatrocinador/solicitudpatrocinadorindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2e63fc73f71e3199366b63622241ca190cf16cae1a20297ef0fd0a11ce39a83->leave($__internal_b2e63fc73f71e3199366b63622241ca190cf16cae1a20297ef0fd0a11ce39a83_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_002cddeb84d16fe6306e843bb0b096c816e4b6c5f2d6a08637c183d888edc098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_002cddeb84d16fe6306e843bb0b096c816e4b6c5f2d6a08637c183d888edc098->enter($__internal_002cddeb84d16fe6306e843bb0b096c816e4b6c5f2d6a08637c183d888edc098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Solicitud | ";
        
        $__internal_002cddeb84d16fe6306e843bb0b096c816e4b6c5f2d6a08637c183d888edc098->leave($__internal_002cddeb84d16fe6306e843bb0b096c816e4b6c5f2d6a08637c183d888edc098_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_11ea59819955fe5fa961d732f162f4e5c199e5ffa53d05bfe4e4af2b716f7176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11ea59819955fe5fa961d732f162f4e5c199e5ffa53d05bfe4e4af2b716f7176->enter($__internal_11ea59819955fe5fa961d732f162f4e5c199e5ffa53d05bfe4e4af2b716f7176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Solicitud Aspirante Patrocinador ";
        
        $__internal_11ea59819955fe5fa961d732f162f4e5c199e5ffa53d05bfe4e4af2b716f7176->leave($__internal_11ea59819955fe5fa961d732f162f4e5c199e5ffa53d05bfe4e4af2b716f7176_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_fc30657770da348fbae8db01a5c47bc1dd3a206e8c812c013c184b8e22569634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc30657770da348fbae8db01a5c47bc1dd3a206e8c812c013c184b8e22569634->enter($__internal_fc30657770da348fbae8db01a5c47bc1dd3a206e8c812c013c184b8e22569634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
    <div class=\"box box-primary\">
        <div style=\"width:90%; margin-left:5%; margin-top: 2% \">

            <div align=\"left\">
                <a style=\"font-size: 20px\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("solicitudpatrocinador_new");
        echo "\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Registrar Solicitud</a>
            </div>
            <br>

            <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
                <thead class=\"thead-light\">
                    <tr>
                        <th>Usuario</th>
                        <th>Aspirante Patrocinador</th>
                        <th>Email</th>
                        <th>Documento De Identidad</th>
                        <th>Monto ha Patrocinar</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Estado</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["solicitudpatrocinador"]);
        foreach ($context['_seq'] as $context["_key"] => $context["solicitudpatrocinador"]) {
            // line 32
            echo "                        <tr>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudpatrocinador"], "idusuario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["solicitudpatrocinador"], "idusuario", array()), "firstName", array()) . " ") . $this->getAttribute($this->getAttribute($context["solicitudpatrocinador"], "idusuario", array()), "lastName", array())), "html", null, true);
            echo "</td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solicitudpatrocinador"], "idusuario", array()), "email", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudpatrocinador"], "docidentidadsolipatrocinador", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, ("\$" . $this->getAttribute($context["solicitudpatrocinador"], "montoaportarsolipatrocinador", array())), "html", null, true);
            echo "</td>
                            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudpatrocinador"], "telefonosolipatrocinador", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudpatrocinador"], "direccionsolipatrocinador", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 40
            if (($this->getAttribute($context["solicitudpatrocinador"], "estadosolipatrocinador", array()) == 0)) {
                echo "En Espera";
            } elseif (($this->getAttribute($context["solicitudpatrocinador"], "estadosolipatrocinador", array()) == 1)) {
                echo "Aprobado";
            } elseif (($this->getAttribute($context["solicitudpatrocinador"], "estadosolipatrocinador", array()) == 2)) {
                echo "Rechazado";
            }
            echo "</td>
                            <td>
                                <div class=\"row\" align=\"center\">
                                    ";
            // line 46
            echo "
                                    <div class=\"col col-md-12\" align=\"center\"><button title=\"Ver Solicitud\" class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerSoliP";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudpatrocinador"], "idsolipatrocinador", array()), "html", null, true);
            echo "\"><i style=\"font-size: 20px; \"></i><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i>";
            if (((($this->getAttribute($context["solicitudpatrocinador"], "estadosolipatrocinador", array()) == 0) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_ADMIN"), "method")) || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_COORDINADOR"), "method"))) {
                echo "<span class=\"label label-danger\" style=\"border-radius: 18px; position: absolute; margin-left: -0.8em; top:-0.3em\">1</span>";
            } elseif ((($this->getAttribute($context["solicitudpatrocinador"], "estadosolipatrocinador", array()) == 2) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_ASPIRANTE_BECARIO"), "method"))) {
                echo "<span class=\"label label-danger\" style=\"border-radius: 18px; position: absolute; margin-left: -0.8em; top:-0.3em\">1</span>";
            } elseif (($this->getAttribute($context["solicitudpatrocinador"], "estadosolipatrocinador", array()) == 1)) {
            }
            echo "</button>
                                                ";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Solicitudpatrocinador:show", array("id" => $this->getAttribute($context["solicitudpatrocinador"], "idsolipatrocinador", array()))));
            echo "
                                    </div>
                                </div>
                            </td>
                           
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitudpatrocinador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_fc30657770da348fbae8db01a5c47bc1dd3a206e8c812c013c184b8e22569634->leave($__internal_fc30657770da348fbae8db01a5c47bc1dd3a206e8c812c013c184b8e22569634_prof);

    }

    public function getTemplateName()
    {
        return "solicitudpatrocinador/solicitudpatrocinadorindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 55,  156 => 48,  145 => 47,  142 => 46,  130 => 40,  126 => 39,  122 => 38,  118 => 37,  114 => 36,  110 => 35,  106 => 34,  102 => 33,  99 => 32,  95 => 31,  73 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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
{% block page_subtitle %}Solicitud Aspirante Patrocinador {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\">
        <div style=\"width:90%; margin-left:5%; margin-top: 2% \">

            <div align=\"left\">
                <a style=\"font-size: 20px\" href=\"{{ path('solicitudpatrocinador_new') }}\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Registrar Solicitud</a>
            </div>
            <br>

            <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
                <thead class=\"thead-light\">
                    <tr>
                        <th>Usuario</th>
                        <th>Aspirante Patrocinador</th>
                        <th>Email</th>
                        <th>Documento De Identidad</th>
                        <th>Monto ha Patrocinar</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Estado</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    {% for solicitudpatrocinador in solicitudpatrocinador %}
                        <tr>
                            <td>{{ solicitudpatrocinador.idusuario }}</td>
                            <td>{{ solicitudpatrocinador.idusuario.firstName~\" \"~solicitudpatrocinador.idusuario.lastName }}</td>
                            <td>{{ solicitudpatrocinador.idusuario.email }}</td>
                            <td>{{ solicitudpatrocinador.docidentidadsolipatrocinador }}</a></td>
                            <td>{{\"\$\"~solicitudpatrocinador.montoaportarsolipatrocinador }}</td>
                            <td>{{ solicitudpatrocinador.telefonosolipatrocinador }}</td>
                            <td>{{ solicitudpatrocinador.direccionsolipatrocinador }}</td>
                            <td>{% if solicitudpatrocinador.estadosolipatrocinador == 0 %}En Espera{% elseif  solicitudpatrocinador.estadosolipatrocinador == 1 %}Aprobado{% elseif  solicitudpatrocinador.estadosolipatrocinador == 2 %}Rechazado{% endif %}</td>
                            <td>
                                <div class=\"row\" align=\"center\">
                                    {#<div class=\"col col-md-6\">
                                        <a title=\"Editar Solicitud\" href=\"{{path('solicitudbecario_edit',{ 'id' : solicitudbecario.idsolibecario })}}\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                                    </div>#}

                                    <div class=\"col col-md-12\" align=\"center\"><button title=\"Ver Solicitud\" class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerSoliP{{ solicitudpatrocinador.idsolipatrocinador }}\"><i style=\"font-size: 20px; \"></i><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i>{% if((solicitudpatrocinador.estadosolipatrocinador == 0) and app.user.hasRole('ROLE_ADMIN') or app.user.hasRole('ROLE_COORDINADOR') ) %}<span class=\"label label-danger\" style=\"border-radius: 18px; position: absolute; margin-left: -0.8em; top:-0.3em\">1</span>{% elseif solicitudpatrocinador.estadosolipatrocinador==2 and app.user.hasRole('ROLE_ASPIRANTE_BECARIO')   %}<span class=\"label label-danger\" style=\"border-radius: 18px; position: absolute; margin-left: -0.8em; top:-0.3em\">1</span>{% elseif solicitudpatrocinador.estadosolipatrocinador==1 %}{% endif %}</button>
                                                {{ render(controller('AppBundle:Solicitudpatrocinador:show', { 'id' : solicitudpatrocinador.idsolipatrocinador } )) }}
                                    </div>
                                </div>
                            </td>
                           
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}", "solicitudpatrocinador/solicitudpatrocinadorindex.html.twig", "/home/ubuntu/workspace/app/Resources/views/solicitudpatrocinador/solicitudpatrocinadorindex.html.twig");
    }
}
