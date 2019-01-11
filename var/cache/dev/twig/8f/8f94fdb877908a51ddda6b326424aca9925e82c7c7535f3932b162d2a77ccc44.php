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
        $__internal_40af222871780a07a4d9afd7e773b533b7a29094bba3d807cba6ecd136a5d659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40af222871780a07a4d9afd7e773b533b7a29094bba3d807cba6ecd136a5d659->enter($__internal_40af222871780a07a4d9afd7e773b533b7a29094bba3d807cba6ecd136a5d659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "solicitudbecario/Solicitudbecarioindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40af222871780a07a4d9afd7e773b533b7a29094bba3d807cba6ecd136a5d659->leave($__internal_40af222871780a07a4d9afd7e773b533b7a29094bba3d807cba6ecd136a5d659_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_13e586d4e8b4e65be5e91d587568c50729f50cfd847a986e386cdb704213a458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e586d4e8b4e65be5e91d587568c50729f50cfd847a986e386cdb704213a458->enter($__internal_13e586d4e8b4e65be5e91d587568c50729f50cfd847a986e386cdb704213a458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Solicitud | ";
        
        $__internal_13e586d4e8b4e65be5e91d587568c50729f50cfd847a986e386cdb704213a458->leave($__internal_13e586d4e8b4e65be5e91d587568c50729f50cfd847a986e386cdb704213a458_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_17c5edfce9113155c8de106086e086b03ece819cda58fafdccebe50185c7def9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c5edfce9113155c8de106086e086b03ece819cda58fafdccebe50185c7def9->enter($__internal_17c5edfce9113155c8de106086e086b03ece819cda58fafdccebe50185c7def9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Lista De solicitudes ";
        
        $__internal_17c5edfce9113155c8de106086e086b03ece819cda58fafdccebe50185c7def9->leave($__internal_17c5edfce9113155c8de106086e086b03ece819cda58fafdccebe50185c7def9_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_26c0008945188ff1a0c251530b343abf75b03eb63b6a52f188b641e3f16e7869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c0008945188ff1a0c251530b343abf75b03eb63b6a52f188b641e3f16e7869->enter($__internal_26c0008945188ff1a0c251530b343abf75b03eb63b6a52f188b641e3f16e7869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                        <th>Solicitante</th>
                        <th>Telefonos</th>
                        <th>Tipo Solicitud</th>
                        <th>Carrera A Estudiar</th>
                        <th>Universidad</th>
                        <th>Documento De Identidad</th>
                        <th>Año de ingreso</th>
                        <th>Año de finalizacion</th>
                        <th>Estado</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>

                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["solicitudbecarios"]) ? $context["solicitudbecarios"] : $this->getContext($context, "solicitudbecarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["solicitudbecario"]) {
            // line 34
            echo "                        <tr>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["solicitudbecario"], "idusuario", array()), "firstName", array()) . " ") . $this->getAttribute($this->getAttribute($context["solicitudbecario"], "idusuario", array()), "lastName", array())), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "telsolipersonalbecario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "tiposolicasabecario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "carrerasoliestudiarbecario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "universidadsolibecario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "docsoliidentidadbecario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 41
            if ($this->getAttribute($context["solicitudbecario"], "aniosoliingresobecario", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["solicitudbecario"], "aniosoliingresobecario", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 42
            if ($this->getAttribute($context["solicitudbecario"], "aniosolifinalizacionbecario", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["solicitudbecario"], "aniosolifinalizacionbecario", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 43
            if ($this->getAttribute($context["solicitudbecario"], "estadosolibecario", array())) {
                echo "Aprobado";
            } else {
                echo "Rechazado";
            }
            echo "</td>
                            <td>
                            
                                <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#deletesoli";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "idsolibecario", array()), "html", null, true);
            echo "\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: crimson\"></i></button>
                                    ";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Solicitudbecario:showDelete", array("id" => $this->getAttribute($context["solicitudbecario"], "idsolibecario", array()))));
            echo "
                                </div>
                                
                               <div style=\"float:left;\">
                                   <a title=\"Editar Solicitud\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("solicitudbecario_edit", array("id" => $this->getAttribute($context["solicitudbecario"], "idsolibecario", array()))), "html", null, true);
            echo "\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                               </div>
                                
                                <div style=\"float:left;\"><button title=\"Ver Soli\" class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerSoli";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "idsolibecario", array()), "html", null, true);
            echo "\"><i style=\"font-size: 20px\"></i><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i></button>
                                        ";
            // line 55
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
        // line 63
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_26c0008945188ff1a0c251530b343abf75b03eb63b6a52f188b641e3f16e7869->leave($__internal_26c0008945188ff1a0c251530b343abf75b03eb63b6a52f188b641e3f16e7869_prof);

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
        return array (  185 => 63,  171 => 55,  167 => 54,  161 => 51,  154 => 47,  150 => 46,  140 => 43,  134 => 42,  128 => 41,  124 => 40,  120 => 39,  116 => 38,  112 => 37,  108 => 36,  104 => 35,  101 => 34,  97 => 33,  73 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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
                        <th>Solicitante</th>
                        <th>Telefonos</th>
                        <th>Tipo Solicitud</th>
                        <th>Carrera A Estudiar</th>
                        <th>Universidad</th>
                        <th>Documento De Identidad</th>
                        <th>Año de ingreso</th>
                        <th>Año de finalizacion</th>
                        <th>Estado</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>

                    {% for solicitudbecario in solicitudbecarios %}
                        <tr>
                            <td>{{ solicitudbecario.idusuario.firstName~\" \"~solicitudbecario.idusuario.lastName }}</td>
                            <td>{{ solicitudbecario.telsolipersonalbecario }}</td>
                            <td>{{ solicitudbecario.tiposolicasabecario }}</td>
                            <td>{{ solicitudbecario.carrerasoliestudiarbecario }}</td>
                            <td>{{ solicitudbecario.universidadsolibecario }}</td>
                            <td>{{ solicitudbecario.docsoliidentidadbecario }}</td>
                            <td>{% if solicitudbecario.aniosoliingresobecario %}{{ solicitudbecario.aniosoliingresobecario|date('Y-m-d') }}{% endif %}</td>
                            <td>{% if solicitudbecario.aniosolifinalizacionbecario %}{{ solicitudbecario.aniosolifinalizacionbecario|date('Y-m-d') }}{% endif %}</td>
                            <td>{% if solicitudbecario.estadosolibecario %}Aprobado{% else %}Rechazado{% endif %}</td>
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
