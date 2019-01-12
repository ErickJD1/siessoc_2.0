<?php

/* cuenta/Cuentaindex.html.twig */
class __TwigTemplate_568dae28c826a0fd0087659a918ed700aca28ab25d2f9f7e839b1007e8587fb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "cuenta/Cuentaindex.html.twig", 1);
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
        $__internal_d10f4188f40b101c5a71a7d67ed75cd6ec5f335bf49d10bb10cbf6b68b1cc22f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10f4188f40b101c5a71a7d67ed75cd6ec5f335bf49d10bb10cbf6b68b1cc22f->enter($__internal_d10f4188f40b101c5a71a7d67ed75cd6ec5f335bf49d10bb10cbf6b68b1cc22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cuenta/Cuentaindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d10f4188f40b101c5a71a7d67ed75cd6ec5f335bf49d10bb10cbf6b68b1cc22f->leave($__internal_d10f4188f40b101c5a71a7d67ed75cd6ec5f335bf49d10bb10cbf6b68b1cc22f_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_2fb6f0afe1fde3ba85a87d8af6c7fd633295f250b1111f5079c2ff85ad3cf351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb6f0afe1fde3ba85a87d8af6c7fd633295f250b1111f5079c2ff85ad3cf351->enter($__internal_2fb6f0afe1fde3ba85a87d8af6c7fd633295f250b1111f5079c2ff85ad3cf351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Fondos ";
        
        $__internal_2fb6f0afe1fde3ba85a87d8af6c7fd633295f250b1111f5079c2ff85ad3cf351->leave($__internal_2fb6f0afe1fde3ba85a87d8af6c7fd633295f250b1111f5079c2ff85ad3cf351_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_602cfd07f41fef1d5f26182b03b70cf856be426ebab70e79a9336336d2e9800d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602cfd07f41fef1d5f26182b03b70cf856be426ebab70e79a9336336d2e9800d->enter($__internal_602cfd07f41fef1d5f26182b03b70cf856be426ebab70e79a9336336d2e9800d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Cuentas";
        
        $__internal_602cfd07f41fef1d5f26182b03b70cf856be426ebab70e79a9336336d2e9800d->leave($__internal_602cfd07f41fef1d5f26182b03b70cf856be426ebab70e79a9336336d2e9800d_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_1b52dd326c5e202b2bb6c2b2d1706b6f085220bd901bf26de6db43bb89d8ad5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b52dd326c5e202b2bb6c2b2d1706b6f085220bd901bf26de6db43bb89d8ad5f->enter($__internal_1b52dd326c5e202b2bb6c2b2d1706b6f085220bd901bf26de6db43bb89d8ad5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
    <div class=\"box box-primary\">
        <div style=\"width:90%; margin-left:5%; margin-top: 2% \">

            <div align=\"left\">
                <a style=\"font-size: 15px\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cuenta_new");
        echo "\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Cuenta</a>
            </div>
            <br> <br>

            <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
                <thead class=\"thead-light\">
                    <tr>
                        <th><center>Cuenta</center></th>
                <th><center>Nombre</center></th>
                <th><center>Banco</center></th>
                <th><center>Fecha Apertura</center></th>
                <th><center>Estado</center></th>
                <th><center>Usuario</center></th>
                <th><center>Accion</center></th>
                </tr>
                </thead>
                <tbody>

                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cuentas"]) ? $context["cuentas"] : $this->getContext($context, "cuentas")));
        foreach ($context['_seq'] as $context["_key"] => $context["cuentum"]) {
            // line 31
            echo "                        <tr>
                            <td><a data-toggle=\"modal\" data-target=\"#MovimientoCB";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "idcuenta", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "numcuenta", array()), "html", null, true);
            echo "</a>
                                ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Movimiento:cuenFind", array("id" => $this->getAttribute($context["cuentum"], "idcuenta", array()))));
            echo "

                            </td>
                            <td><center>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "nomcuenta", array()), "html", null, true);
            echo "</center></td>
                    <td><center>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "idbanco", array()), "html", null, true);
            echo "</center></td>
                    <td><center>";
            // line 38
            if ($this->getAttribute($context["cuentum"], "fechaapertura", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cuentum"], "fechaapertura", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</center></td>
                    <td><center>";
            // line 39
            if ($this->getAttribute($context["cuentum"], "estadocuenta", array())) {
                echo "Activo";
            } else {
                echo "Inactivo";
            }
            echo "</center></td>
                    <td><center>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "idusuario", array()), "html", null, true);
            echo "</center></td>
                    <td>
                        <div class=\"col col-md-3\"><button title=\"Eliminar Cuenta\" class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#deleteCuenta";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "idcuenta", array()), "html", null, true);
            echo "\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: crimson\"></i></button>
                                ";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Cuenta:showDelete", array("id" => $this->getAttribute($context["cuentum"], "idcuenta", array()))));
            echo "
                        </div>

                        <div class=\"col col-md-3\" >
                            <a title=\"Editar Cuenta\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cuenta_edit", array("id" => $this->getAttribute($context["cuentum"], "idcuenta", array()))), "html", null, true);
            echo "\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                        </div>

                        <div class=\"col col-md-3\"><button title=\"Ver Cuenta\" class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerCuenta";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "idcuenta", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i></button>
                                ";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Cuenta:show", array("id" => $this->getAttribute($context["cuentum"], "idcuenta", array()))));
            echo "
                        </div>
                    </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cuentum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_1b52dd326c5e202b2bb6c2b2d1706b6f085220bd901bf26de6db43bb89d8ad5f->leave($__internal_1b52dd326c5e202b2bb6c2b2d1706b6f085220bd901bf26de6db43bb89d8ad5f_prof);

    }

    public function getTemplateName()
    {
        return "cuenta/Cuentaindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 56,  161 => 51,  157 => 50,  151 => 47,  144 => 43,  140 => 42,  135 => 40,  127 => 39,  121 => 38,  117 => 37,  113 => 36,  107 => 33,  101 => 32,  98 => 31,  94 => 30,  73 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Fondos {% endblock %}
{% block page_subtitle %}Cuentas{% endblock %}

{% block page_content %}

    <div class=\"box box-primary\">
        <div style=\"width:90%; margin-left:5%; margin-top: 2% \">

            <div align=\"left\">
                <a style=\"font-size: 15px\" href=\"{{ path('cuenta_new') }}\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Cuenta</a>
            </div>
            <br> <br>

            <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
                <thead class=\"thead-light\">
                    <tr>
                        <th><center>Cuenta</center></th>
                <th><center>Nombre</center></th>
                <th><center>Banco</center></th>
                <th><center>Fecha Apertura</center></th>
                <th><center>Estado</center></th>
                <th><center>Usuario</center></th>
                <th><center>Accion</center></th>
                </tr>
                </thead>
                <tbody>

                    {% for cuentum in cuentas %}
                        <tr>
                            <td><a data-toggle=\"modal\" data-target=\"#MovimientoCB{{cuentum.idcuenta}}\">{{ cuentum.numcuenta }}</a>
                                {{ render(controller('AppBundle:Movimiento:cuenFind',{'id':cuentum.idcuenta} )) }}

                            </td>
                            <td><center>{{ cuentum.nomcuenta }}</center></td>
                    <td><center>{{ cuentum.idbanco }}</center></td>
                    <td><center>{% if cuentum.fechaapertura %}{{ cuentum.fechaapertura|date('Y-m-d H:i:s') }}{% endif %}</center></td>
                    <td><center>{% if cuentum.estadocuenta %}Activo{% else %}Inactivo{% endif %}</center></td>
                    <td><center>{{ cuentum.idusuario }}</center></td>
                    <td>
                        <div class=\"col col-md-3\"><button title=\"Eliminar Cuenta\" class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#deleteCuenta{{ cuentum.idcuenta }}\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: crimson\"></i></button>
                                {{ render(controller('AppBundle:Cuenta:showDelete', { 'id' : cuentum.idcuenta } )) }}
                        </div>

                        <div class=\"col col-md-3\" >
                            <a title=\"Editar Cuenta\" href=\"{{ path('cuenta_edit',{ 'id' : cuentum.idcuenta }) }}\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                        </div>

                        <div class=\"col col-md-3\"><button title=\"Ver Cuenta\" class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerCuenta{{ cuentum.idcuenta }}\"><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i></button>
                                {{ render(controller('AppBundle:Cuenta:show', { 'id' : cuentum.idcuenta } )) }}
                        </div>
                    </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}
", "cuenta/Cuentaindex.html.twig", "/home/ubuntu/workspace/app/Resources/views/cuenta/Cuentaindex.html.twig");
    }
}
