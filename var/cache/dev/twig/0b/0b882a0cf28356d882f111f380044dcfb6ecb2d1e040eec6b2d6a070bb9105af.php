<?php

/* tipomovimiento/TipoMovimientoindex.html.twig */
class __TwigTemplate_24c9769ed09c30c52559f081aee2602695805cfa4b40f53d395ff5e7916fa6a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "tipomovimiento/TipoMovimientoindex.html.twig", 1);
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
        $__internal_ac3092a5d85199e9b1337cd3248f4778becfafa06b1c21f99d523160703231f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac3092a5d85199e9b1337cd3248f4778becfafa06b1c21f99d523160703231f7->enter($__internal_ac3092a5d85199e9b1337cd3248f4778becfafa06b1c21f99d523160703231f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipomovimiento/TipoMovimientoindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac3092a5d85199e9b1337cd3248f4778becfafa06b1c21f99d523160703231f7->leave($__internal_ac3092a5d85199e9b1337cd3248f4778becfafa06b1c21f99d523160703231f7_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_4b1580ee852f1e614d4d08dda796d74bd17f1849c56e9cddbe578f5ef01ae930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1580ee852f1e614d4d08dda796d74bd17f1849c56e9cddbe578f5ef01ae930->enter($__internal_4b1580ee852f1e614d4d08dda796d74bd17f1849c56e9cddbe578f5ef01ae930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Catálogos ";
        
        $__internal_4b1580ee852f1e614d4d08dda796d74bd17f1849c56e9cddbe578f5ef01ae930->leave($__internal_4b1580ee852f1e614d4d08dda796d74bd17f1849c56e9cddbe578f5ef01ae930_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_81cfaddd3561815240379aae5ecfba9093eed89b6b80f66527c23a896a43c362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81cfaddd3561815240379aae5ecfba9093eed89b6b80f66527c23a896a43c362->enter($__internal_81cfaddd3561815240379aae5ecfba9093eed89b6b80f66527c23a896a43c362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Tipo Movimiento";
        
        $__internal_81cfaddd3561815240379aae5ecfba9093eed89b6b80f66527c23a896a43c362->leave($__internal_81cfaddd3561815240379aae5ecfba9093eed89b6b80f66527c23a896a43c362_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_20c856ea1c4a2301988db9025b77707220d31c41d432fb4600eac866b19009ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20c856ea1c4a2301988db9025b77707220d31c41d432fb4600eac866b19009ce->enter($__internal_20c856ea1c4a2301988db9025b77707220d31c41d432fb4600eac866b19009ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
    <div class=\"box box-primary\">
        <div style=\"width:90%; margin-left:5%; margin-top: 2% \">

            <div align=\"left\">
                <a style=\"font-size: 15px\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipomovimiento_new");
        echo "\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Tipo Movimiento</a>
            </div>
            <br> <br>

            <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
                <thead class=\"thead-light\">
                    <tr>
                <th><center>Movimiento</center></th>
                <th><center>Descripción</center></th>
                <th><center>Clasificación</center></th>
                <th><center>Estado</center></th>
                <th><center>Acciones</center></th>
                </tr>
                </thead>
                <tbody>
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipomovimientos"]) ? $context["tipomovimientos"] : $this->getContext($context, "tipomovimientos")));
        foreach ($context['_seq'] as $context["_key"] => $context["tipomovimiento"]) {
            // line 28
            echo "                        <tr>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipomovimiento"], "nombretipo", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipomovimiento"], "descripciontipomov", array()), "html", null, true);
            echo "</td>
                            <td><center>";
            // line 31
            if ($this->getAttribute($context["tipomovimiento"], "clasificacion", array())) {
                echo "Ingreso";
            } else {
                echo "Gasto";
            }
            echo "</center></td>
                    <td><center>";
            // line 32
            if ($this->getAttribute($context["tipomovimiento"], "estadotipomov", array())) {
                echo "Activo";
            } else {
                echo "Inactivo";
            }
            echo "</center></td>
                    <td>
                    <center>
                        <div class=\"row\">

                            <div align=\"center\" class=\"col col-md-4\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#miventanadelete";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipomovimiento"], "idtipomov", array()), "html", null, true);
            echo "\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: crimson\"></i></button>
                                    ";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Tipomovimiento:showdelete", array("id" => $this->getAttribute($context["tipomovimiento"], "idtipomov", array()))));
            echo "
                            </div>

                            <div align=\"center\" class=\"col col-md-4\" >
                                <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipomovimiento_edit", array("id" => $this->getAttribute($context["tipomovimiento"], "idtipomov", array()))), "html", null, true);
            echo "\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                            </div>
                            <div align=\"center\" class=\"col col-md-4\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#miventana";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipomovimiento"], "idtipomov", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i></button>
                                    ";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Tipomovimiento:show", array("id" => $this->getAttribute($context["tipomovimiento"], "idtipomov", array()))));
            echo "
                            </div>
                        </div>
                    </center>
                    </td>
                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipomovimiento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_20c856ea1c4a2301988db9025b77707220d31c41d432fb4600eac866b19009ce->leave($__internal_20c856ea1c4a2301988db9025b77707220d31c41d432fb4600eac866b19009ce_prof);

    }

    public function getTemplateName()
    {
        return "tipomovimiento/TipoMovimientoindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 53,  146 => 45,  142 => 44,  137 => 42,  130 => 38,  126 => 37,  114 => 32,  106 => 31,  102 => 30,  98 => 29,  95 => 28,  91 => 27,  73 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Catálogos {% endblock %}
{% block page_subtitle %}Tipo Movimiento{% endblock %}

{% block page_content %}

    <div class=\"box box-primary\">
        <div style=\"width:90%; margin-left:5%; margin-top: 2% \">

            <div align=\"left\">
                <a style=\"font-size: 15px\" href=\"{{ path('tipomovimiento_new') }}\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Tipo Movimiento</a>
            </div>
            <br> <br>

            <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
                <thead class=\"thead-light\">
                    <tr>
                <th><center>Movimiento</center></th>
                <th><center>Descripción</center></th>
                <th><center>Clasificación</center></th>
                <th><center>Estado</center></th>
                <th><center>Acciones</center></th>
                </tr>
                </thead>
                <tbody>
                    {% for tipomovimiento in tipomovimientos %}
                        <tr>
                            <td>{{ tipomovimiento.nombretipo }}</td>
                            <td>{{ tipomovimiento.descripciontipomov }}</td>
                            <td><center>{% if tipomovimiento.clasificacion %}Ingreso{% else %}Gasto{% endif %}</center></td>
                    <td><center>{% if tipomovimiento.estadotipomov %}Activo{% else %}Inactivo{% endif %}</center></td>
                    <td>
                    <center>
                        <div class=\"row\">

                            <div align=\"center\" class=\"col col-md-4\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#miventanadelete{{ tipomovimiento.idtipomov }}\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: crimson\"></i></button>
                                    {{ render(controller('AppBundle:Tipomovimiento:showdelete', { 'id' : tipomovimiento.idtipomov } )) }}
                            </div>

                            <div align=\"center\" class=\"col col-md-4\" >
                                <a href=\"{{ path('tipomovimiento_edit',{ 'id' : tipomovimiento.idtipomov }) }}\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                            </div>
                            <div align=\"center\" class=\"col col-md-4\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#miventana{{ tipomovimiento.idtipomov}}\"><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i></button>
                                    {{ render(controller('AppBundle:Tipomovimiento:show', { 'id' : tipomovimiento.idtipomov } )) }}
                            </div>
                        </div>
                    </center>
                    </td>
                    </tr>

                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}
", "tipomovimiento/TipoMovimientoindex.html.twig", "/home/ubuntu/workspace/app/Resources/views/tipomovimiento/TipoMovimientoindex.html.twig");
    }
}
