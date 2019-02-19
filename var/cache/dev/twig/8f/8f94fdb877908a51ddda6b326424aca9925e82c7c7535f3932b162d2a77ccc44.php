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
        $__internal_b62caf70c845a0b40bb729c68d3488758b82f9fd994e624f2e74127faa03d67a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b62caf70c845a0b40bb729c68d3488758b82f9fd994e624f2e74127faa03d67a->enter($__internal_b62caf70c845a0b40bb729c68d3488758b82f9fd994e624f2e74127faa03d67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "solicitudbecario/Solicitudbecarioindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b62caf70c845a0b40bb729c68d3488758b82f9fd994e624f2e74127faa03d67a->leave($__internal_b62caf70c845a0b40bb729c68d3488758b82f9fd994e624f2e74127faa03d67a_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_cadd90c32ddd93f1d2ab8e6943113511b47cd55fe5400dde28b3cd1259dcbf83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cadd90c32ddd93f1d2ab8e6943113511b47cd55fe5400dde28b3cd1259dcbf83->enter($__internal_cadd90c32ddd93f1d2ab8e6943113511b47cd55fe5400dde28b3cd1259dcbf83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Solicitud | ";
        
        $__internal_cadd90c32ddd93f1d2ab8e6943113511b47cd55fe5400dde28b3cd1259dcbf83->leave($__internal_cadd90c32ddd93f1d2ab8e6943113511b47cd55fe5400dde28b3cd1259dcbf83_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_523865c3834f58fdea64c8414c1868f707da381bd9422464916c61728f8bc7b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_523865c3834f58fdea64c8414c1868f707da381bd9422464916c61728f8bc7b5->enter($__internal_523865c3834f58fdea64c8414c1868f707da381bd9422464916c61728f8bc7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Solicitud Aspirante Becario ";
        
        $__internal_523865c3834f58fdea64c8414c1868f707da381bd9422464916c61728f8bc7b5->leave($__internal_523865c3834f58fdea64c8414c1868f707da381bd9422464916c61728f8bc7b5_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_f0460ea69dadf6f1f7420ef680be4651f5f2d1f429da647e2be407321422b3b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0460ea69dadf6f1f7420ef680be4651f5f2d1f429da647e2be407321422b3b4->enter($__internal_f0460ea69dadf6f1f7420ef680be4651f5f2d1f429da647e2be407321422b3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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

            <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
                <thead class=\"thead-light\">
                    <tr>
                        <th>Solicitante</th>
                        <th>Telefono</th>
                        <th>Carrera</th>
                        <th>Universidad</th>
                        <th>Estado</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>

                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["solicitudbecarios"]) ? $context["solicitudbecarios"] : $this->getContext($context, "solicitudbecarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["solicitudbecario"]) {
            // line 30
            echo "                        <tr>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["solicitudbecario"], "idusuario", array()), "firstName", array()) . " ") . $this->getAttribute($this->getAttribute($context["solicitudbecario"], "idusuario", array()), "lastName", array())), "html", null, true);
            echo "</td>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "telsolipersonalbecario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "carrerasoliestudiarbecario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "universidadsolibecario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 35
            if (($this->getAttribute($context["solicitudbecario"], "estadosolibecario", array()) == 0)) {
                echo "En Espera";
            } elseif (($this->getAttribute($context["solicitudbecario"], "estadosolibecario", array()) == 1)) {
                echo "Aprobado";
            } elseif (($this->getAttribute($context["solicitudbecario"], "estadosolibecario", array()) == 2)) {
                echo "Denegado";
            }
            echo "</td>
                            <td>
                                <div class=\"row\" align=\"center\">
                                    ";
            // line 41
            echo "
                                    <div class=\"col col-md-12\" align=\"center\"><button title=\"Ver Solicitud\" class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerSoli";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "idsolibecario", array()), "html", null, true);
            echo "\"><i style=\"font-size: 20px; \"></i><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i>";
            if (((($this->getAttribute($context["solicitudbecario"], "estadosolibecario", array()) == 0) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_ADMIN"), "method")) || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_COORDINADOR"), "method"))) {
                echo "<span class=\"label label-danger\" style=\"border-radius: 18px; position: absolute; margin-left: -0.8em; top:-0.3em\">1</span>";
            } elseif ((($this->getAttribute($context["solicitudbecario"], "estadosolibecario", array()) == 2) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_ASPIRANTE_BECARIO"), "method"))) {
                echo "<span class=\"label label-danger\" style=\"border-radius: 18px; position: absolute; margin-left: -0.8em; top:-0.3em\">1</span>";
            } elseif (($this->getAttribute($context["solicitudbecario"], "estadosolibecario", array()) == 1)) {
            }
            echo "</button>
                                                ";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Solicitudbecario:show", array("id" => $this->getAttribute($context["solicitudbecario"], "idsolibecario", array()))));
            echo "
                                    </div>
                                </div>
                            </td>
                        </tr>

                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitudbecario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_f0460ea69dadf6f1f7420ef680be4651f5f2d1f429da647e2be407321422b3b4->leave($__internal_f0460ea69dadf6f1f7420ef680be4651f5f2d1f429da647e2be407321422b3b4_prof);

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
        return array (  156 => 51,  142 => 43,  131 => 42,  128 => 41,  116 => 35,  112 => 34,  108 => 33,  104 => 32,  100 => 31,  97 => 30,  93 => 29,  73 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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
{% block page_subtitle %}Solicitud Aspirante Becario {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\">
        <div style=\"width:90%; margin-left:5%; margin-top: 2% \">

            <div align=\"left\">
                <a style=\"font-size: 20px\" href=\"{{ path('solicitudbecario_new') }}\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Registrar Solicitud</a>
            </div>
            <br> </br>

            <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
                <thead class=\"thead-light\">
                    <tr>
                        <th>Solicitante</th>
                        <th>Telefono</th>
                        <th>Carrera</th>
                        <th>Universidad</th>
                        <th>Estado</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>

                    {% for solicitudbecario in solicitudbecarios %}
                        <tr>
                            <td>{{ solicitudbecario.idusuario.firstName~\" \"~solicitudbecario.idusuario.lastName }}</td>
                            <td>{{ solicitudbecario.telsolipersonalbecario }}</td>
                            <td>{{ solicitudbecario.carrerasoliestudiarbecario }}</td>
                            <td>{{ solicitudbecario.universidadsolibecario }}</td>
                            <td>{% if solicitudbecario.estadosolibecario == 0 %}En Espera{% elseif  solicitudbecario.estadosolibecario == 1 %}Aprobado{% elseif  solicitudbecario.estadosolibecario == 2 %}Denegado{% endif %}</td>
                            <td>
                                <div class=\"row\" align=\"center\">
                                    {#<div class=\"col col-md-6\">
                                        <a title=\"Editar Solicitud\" href=\"{{path('solicitudbecario_edit',{ 'id' : solicitudbecario.idsolibecario })}}\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                                    </div>#}

                                    <div class=\"col col-md-12\" align=\"center\"><button title=\"Ver Solicitud\" class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerSoli{{ solicitudbecario.idsolibecario }}\"><i style=\"font-size: 20px; \"></i><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i>{% if((solicitudbecario.estadosolibecario == 0) and app.user.hasRole('ROLE_ADMIN') or app.user.hasRole('ROLE_COORDINADOR') ) %}<span class=\"label label-danger\" style=\"border-radius: 18px; position: absolute; margin-left: -0.8em; top:-0.3em\">1</span>{% elseif solicitudbecario.estadosolibecario==2 and app.user.hasRole('ROLE_ASPIRANTE_BECARIO')   %}<span class=\"label label-danger\" style=\"border-radius: 18px; position: absolute; margin-left: -0.8em; top:-0.3em\">1</span>{% elseif solicitudbecario.estadosolibecario==1 %}{% endif %}</button>
                                                {{ render(controller('AppBundle:Solicitudbecario:show', { 'id' : solicitudbecario.idsolibecario } )) }}
                                    </div>
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
