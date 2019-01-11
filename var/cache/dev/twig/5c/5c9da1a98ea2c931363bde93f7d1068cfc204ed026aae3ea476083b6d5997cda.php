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
        $__internal_2e8dfff7d6446c79a99031df1a078e6805137171805eb54a4ac17d7defc21ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e8dfff7d6446c79a99031df1a078e6805137171805eb54a4ac17d7defc21ea3->enter($__internal_2e8dfff7d6446c79a99031df1a078e6805137171805eb54a4ac17d7defc21ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cuenta/Cuentaindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e8dfff7d6446c79a99031df1a078e6805137171805eb54a4ac17d7defc21ea3->leave($__internal_2e8dfff7d6446c79a99031df1a078e6805137171805eb54a4ac17d7defc21ea3_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_e8faa6417822b22b2021d6940c18e7e6446c2c02a9bb595c531799dcbe027bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8faa6417822b22b2021d6940c18e7e6446c2c02a9bb595c531799dcbe027bd6->enter($__internal_e8faa6417822b22b2021d6940c18e7e6446c2c02a9bb595c531799dcbe027bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Fondos ";
        
        $__internal_e8faa6417822b22b2021d6940c18e7e6446c2c02a9bb595c531799dcbe027bd6->leave($__internal_e8faa6417822b22b2021d6940c18e7e6446c2c02a9bb595c531799dcbe027bd6_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_55b84a0ab9959abf047a1783320dc832189e160d598c58f7db376bf51153b862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b84a0ab9959abf047a1783320dc832189e160d598c58f7db376bf51153b862->enter($__internal_55b84a0ab9959abf047a1783320dc832189e160d598c58f7db376bf51153b862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Cuentas";
        
        $__internal_55b84a0ab9959abf047a1783320dc832189e160d598c58f7db376bf51153b862->leave($__internal_55b84a0ab9959abf047a1783320dc832189e160d598c58f7db376bf51153b862_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c20f1ebd475a5b28567719ca19b3f577ef212cfd40cb223254f4d1047a22f738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c20f1ebd475a5b28567719ca19b3f577ef212cfd40cb223254f4d1047a22f738->enter($__internal_c20f1ebd475a5b28567719ca19b3f577ef212cfd40cb223254f4d1047a22f738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
    <div class=\"box box-primary\">
        <div style=\"width:90%; margin-left:5%; margin-top: 2% \">

            <div align=\"left\">
                <a style=\"font-size: 15px\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cuenta_new");
        echo "\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Registrar Cuenta</a>
            </div>
            <br> <br>

            <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
                <thead class=\"thead-light\">
                    <tr>
                        <th>Cuenta</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Banco</th>
                        <th>Fecha Apertura</th>
                        <th>Saldo Inicial</th>
                        <th>Saldo Actual</th>
                        <th>Estado</th>
                        <th>Usuario</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>

                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cuentas"]) ? $context["cuentas"] : $this->getContext($context, "cuentas")));
        foreach ($context['_seq'] as $context["_key"] => $context["cuentum"]) {
            // line 34
            echo "                        <tr>
                            <td><a data-toggle=\"modal\" data-target=\"#MovimientoCB";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "idcuenta", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "numcuenta", array()), "html", null, true);
            echo "</a>
                                ";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Movimiento:cuenFind", array("id" => $this->getAttribute($context["cuentum"], "idcuenta", array()))));
            echo "
                                
                            </td>
                            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "nomcuenta", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "descripcioncuenta", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "idbanco", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 42
            if ($this->getAttribute($context["cuentum"], "fechaapertura", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cuentum"], "fechaapertura", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "saldocuenta", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "saldoactual", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 45
            if ($this->getAttribute($context["cuentum"], "estadocuenta", array())) {
                echo "Activo";
            } else {
                echo "Inactivo";
            }
            echo "</td>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "idusuario", array()), "html", null, true);
            echo "</td>
                            <td>

                                <div style=\"float:left;\"><button title=\"Eliminar Cuenta\" class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#deleteCuenta";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "idcuenta", array()), "html", null, true);
            echo "\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: crimson\"></i></button>
                                        ";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Cuenta:showDelete", array("id" => $this->getAttribute($context["cuentum"], "idcuenta", array()))));
            echo "
                                </div>
                                <div style=\"float:left;\" >
                                    <a title=\"Editar Cuenta\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cuenta_edit", array("id" => $this->getAttribute($context["cuentum"], "idcuenta", array()))), "html", null, true);
            echo "\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                                </div>

                                <div style=\"float:left;\"><button title=\"Ver Cuenta\" class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerCuenta";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "idcuenta", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i></button>
                                        ";
            // line 57
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
        // line 63
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_c20f1ebd475a5b28567719ca19b3f577ef212cfd40cb223254f4d1047a22f738->leave($__internal_c20f1ebd475a5b28567719ca19b3f577ef212cfd40cb223254f4d1047a22f738_prof);

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
        return array (  188 => 63,  176 => 57,  172 => 56,  166 => 53,  160 => 50,  156 => 49,  150 => 46,  142 => 45,  138 => 44,  134 => 43,  128 => 42,  124 => 41,  120 => 40,  116 => 39,  110 => 36,  104 => 35,  101 => 34,  97 => 33,  73 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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
                <a style=\"font-size: 15px\" href=\"{{ path('cuenta_new') }}\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Registrar Cuenta</a>
            </div>
            <br> <br>

            <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
                <thead class=\"thead-light\">
                    <tr>
                        <th>Cuenta</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Banco</th>
                        <th>Fecha Apertura</th>
                        <th>Saldo Inicial</th>
                        <th>Saldo Actual</th>
                        <th>Estado</th>
                        <th>Usuario</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>

                    {% for cuentum in cuentas %}
                        <tr>
                            <td><a data-toggle=\"modal\" data-target=\"#MovimientoCB{{cuentum.idcuenta}}\">{{ cuentum.numcuenta }}</a>
                                {{ render(controller('AppBundle:Movimiento:cuenFind',{'id':cuentum.idcuenta} )) }}
                                
                            </td>
                            <td>{{ cuentum.nomcuenta }}</td>
                            <td>{{ cuentum.descripcioncuenta }}</td>
                            <td>{{ cuentum.idbanco }}</td>
                            <td>{% if cuentum.fechaapertura %}{{ cuentum.fechaapertura|date('Y-m-d H:i:s') }}{% endif %}</td>
                            <td>{{ cuentum.saldocuenta }}</td>
                            <td>{{ cuentum.saldoactual }}</td>
                            <td>{% if cuentum.estadocuenta %}Activo{% else %}Inactivo{% endif %}</td>
                            <td>{{ cuentum.idusuario }}</td>
                            <td>

                                <div style=\"float:left;\"><button title=\"Eliminar Cuenta\" class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#deleteCuenta{{ cuentum.idcuenta }}\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: crimson\"></i></button>
                                        {{ render(controller('AppBundle:Cuenta:showDelete', { 'id' : cuentum.idcuenta } )) }}
                                </div>
                                <div style=\"float:left;\" >
                                    <a title=\"Editar Cuenta\" href=\"{{ path('cuenta_edit',{ 'id' : cuentum.idcuenta }) }}\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                                </div>

                                <div style=\"float:left;\"><button title=\"Ver Cuenta\" class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerCuenta{{ cuentum.idcuenta }}\"><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i></button>
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
