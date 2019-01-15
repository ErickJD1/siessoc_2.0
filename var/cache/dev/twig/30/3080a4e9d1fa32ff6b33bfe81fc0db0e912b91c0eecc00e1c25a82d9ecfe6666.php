<?php

/* movimiento/Movimientoindex.html.twig */
class __TwigTemplate_516d3ecff407a0ce4c983c9f6e0b8f141bd5b92f330f6545f0fd2117702c5152 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "movimiento/Movimientoindex.html.twig", 1);
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
        $__internal_55547189d791b600f7852c5f9da1a210bfc7770b2343d463fea9efddc595ceb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55547189d791b600f7852c5f9da1a210bfc7770b2343d463fea9efddc595ceb3->enter($__internal_55547189d791b600f7852c5f9da1a210bfc7770b2343d463fea9efddc595ceb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movimiento/Movimientoindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55547189d791b600f7852c5f9da1a210bfc7770b2343d463fea9efddc595ceb3->leave($__internal_55547189d791b600f7852c5f9da1a210bfc7770b2343d463fea9efddc595ceb3_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_87c999d264504d08fe5b70702c653ff0d7d61443be10f6a85ab3f366a898ff36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c999d264504d08fe5b70702c653ff0d7d61443be10f6a85ab3f366a898ff36->enter($__internal_87c999d264504d08fe5b70702c653ff0d7d61443be10f6a85ab3f366a898ff36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Fondos";
        
        $__internal_87c999d264504d08fe5b70702c653ff0d7d61443be10f6a85ab3f366a898ff36->leave($__internal_87c999d264504d08fe5b70702c653ff0d7d61443be10f6a85ab3f366a898ff36_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_6ad3cb42ee71cb721c8ff5b9adc30e1e7ef84cdc0766c0e988d0ee05b4f9bb5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad3cb42ee71cb721c8ff5b9adc30e1e7ef84cdc0766c0e988d0ee05b4f9bb5f->enter($__internal_6ad3cb42ee71cb721c8ff5b9adc30e1e7ef84cdc0766c0e988d0ee05b4f9bb5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Movimientos";
        
        $__internal_6ad3cb42ee71cb721c8ff5b9adc30e1e7ef84cdc0766c0e988d0ee05b4f9bb5f->leave($__internal_6ad3cb42ee71cb721c8ff5b9adc30e1e7ef84cdc0766c0e988d0ee05b4f9bb5f_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_242db0c08ba9169e7bb56af4f5639cc3d5aa12b82455239d3a43ccc8feb61474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_242db0c08ba9169e7bb56af4f5639cc3d5aa12b82455239d3a43ccc8feb61474->enter($__internal_242db0c08ba9169e7bb56af4f5639cc3d5aa12b82455239d3a43ccc8feb61474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
    <div class=\"box box-primary\">
        <div style=\"width:90%; margin-left:5%; margin-top: 2% \">

            <div align=\"left\">
                <a style=\"font-size: 15px\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movimiento_new");
        echo "\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Registrar Movimiento</a>
            </div>
            <br> </br>

            <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
                <thead class=\"thead-light\">
                    <tr>
                        <th><center>Descripción</center></th>
                <th><center>Monto</center></th>
                <th><center>Estado</center></th>
                <th><center>Cuenta</center></th>
                <th><center>Tipo</center></th>
                <th><center>Usuario</center></th>
                <th><center>Fecha</center></th>
                <th><center>Accion</center></th>
                </tr>
                </thead>
                <tbody>

                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movimientos"]) ? $context["movimientos"] : $this->getContext($context, "movimientos")));
        foreach ($context['_seq'] as $context["_key"] => $context["movimiento"]) {
            // line 32
            echo "                        <tr>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "descripcionmov", array()), "html", null, true);
            echo "</td>
                            <td><center>";
            // line 34
            echo twig_escape_filter($this->env, ("\$" . $this->getAttribute($context["movimiento"], "monto", array())), "html", null, true);
            echo "</center></td>
                    <td><center>";
            // line 35
            if ($this->getAttribute($context["movimiento"], "estadomov", array())) {
                echo "Aprobado";
            } else {
                echo "Pendiente";
            }
            echo "</center></td>
                    <td><center>";
            // line 36
            echo twig_escape_filter($this->env, (($this->getAttribute($context["movimiento"], "idcuenta", array()) . " | ") . $this->getAttribute($this->getAttribute($context["movimiento"], "idcuenta", array()), "numcuenta", array())), "html", null, true);
            echo "</center></td>
                    <td><center>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "idtipomov", array()), "html", null, true);
            echo "</center></td>
                    <td><center>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "idusuario", array()), "html", null, true);
            echo "</center></td>
                    <td><center>";
            // line 39
            if ($this->getAttribute($context["movimiento"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["movimiento"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</center></td>
                    <td>
                    <center>
                        <div class=\"row\">

                        ";
            // line 44
            if (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_ADMIN"), "method") || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_COORDINADOR"), "method")) || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_FINANCIERO"), "method")) || (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getId", array(), "method") == $this->getAttribute($this->getAttribute($context["movimiento"], "idUsuario", array()), "id", array())) && ($this->getAttribute($context["movimiento"], "estadomov", array()) != 1)))) {
                // line 45
                echo "                            <div class=\"col col-md-3\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#deleteMovi";
                echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "idmov", array()), "html", null, true);
                echo "\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: crimson\"></i></button>
                                    ";
                // line 46
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Movimiento:showDelete", array("id" => $this->getAttribute($context["movimiento"], "idmov", array()))));
                echo "
                            </div>

                            <div class=\"col col-md-3\" >
                                <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movimiento_edit", array("id" => $this->getAttribute($context["movimiento"], "idmov", array()))), "html", null, true);
                echo "\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                            </div>
                        ";
            }
            // line 53
            echo "                        <div class=\"col col-md-3\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerMovi";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "idmov", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i>";
            if ((((($this->getAttribute($context["movimiento"], "estadomov", array()) == 0) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_ADMIN"), "method")) || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_COORDINADOR"), "method")) || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_FINANCIERO"), "method"))) {
                echo "<span class=\"label label-danger\" style=\"border-radius: 18px; position: absolute; margin-top: -15%;margin-left: -25%\">1</span>";
            }
            echo "</button>          
                                    ";
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Movimiento:show", array("id" => $this->getAttribute($context["movimiento"], "idmov", array()))));
            echo "
                            </div>
                        </div>
                    </center>
                    </td>
                    </tr>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movimiento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "    </tbody>
</table>
</div>
</div>
";
        
        $__internal_242db0c08ba9169e7bb56af4f5639cc3d5aa12b82455239d3a43ccc8feb61474->leave($__internal_242db0c08ba9169e7bb56af4f5639cc3d5aa12b82455239d3a43ccc8feb61474_prof);

    }

    public function getTemplateName()
    {
        return "movimiento/Movimientoindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 62,  169 => 54,  160 => 53,  154 => 50,  147 => 46,  142 => 45,  140 => 44,  130 => 39,  126 => 38,  122 => 37,  118 => 36,  110 => 35,  106 => 34,  102 => 33,  99 => 32,  95 => 31,  73 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %}Fondos{% endblock %}
{% block page_subtitle %}Movimientos{% endblock %}

{% block page_content %}

    <div class=\"box box-primary\">
        <div style=\"width:90%; margin-left:5%; margin-top: 2% \">

            <div align=\"left\">
                <a style=\"font-size: 15px\" href=\"{{ path('movimiento_new') }}\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Registrar Movimiento</a>
            </div>
            <br> </br>

            <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
                <thead class=\"thead-light\">
                    <tr>
                        <th><center>Descripción</center></th>
                <th><center>Monto</center></th>
                <th><center>Estado</center></th>
                <th><center>Cuenta</center></th>
                <th><center>Tipo</center></th>
                <th><center>Usuario</center></th>
                <th><center>Fecha</center></th>
                <th><center>Accion</center></th>
                </tr>
                </thead>
                <tbody>

                    {% for movimiento in movimientos %}
                        <tr>
                            <td>{{ movimiento.descripcionmov }}</td>
                            <td><center>{{ \"\$\"~movimiento.monto }}</center></td>
                    <td><center>{% if movimiento.estadomov %}Aprobado{% else %}Pendiente{% endif %}</center></td>
                    <td><center>{{ movimiento.idcuenta~\" | \"~movimiento.idcuenta.numcuenta }}</center></td>
                    <td><center>{{ movimiento.idtipomov }}</center></td>
                    <td><center>{{ movimiento.idusuario }}</center></td>
                    <td><center>{% if movimiento.createdAt %}{{ movimiento.createdAt|date('Y-m-d H:i:s') }}{% endif %}</center></td>
                    <td>
                    <center>
                        <div class=\"row\">

                        {% if app.user.hasRole('ROLE_ADMIN') or app.user.hasRole('ROLE_COORDINADOR') or app.user.hasRole('ROLE_FINANCIERO') or (app.user.getId()==movimiento.idUsuario.id) and movimiento.estadomov != 1 %}
                            <div class=\"col col-md-3\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#deleteMovi{{ movimiento.idmov }}\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: crimson\"></i></button>
                                    {{ render(controller('AppBundle:Movimiento:showDelete', { 'id' : movimiento.idmov } )) }}
                            </div>

                            <div class=\"col col-md-3\" >
                                <a href=\"{{ path('movimiento_edit',{ 'id' : movimiento.idmov }) }}\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                            </div>
                        {% endif %}
                        <div class=\"col col-md-3\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerMovi{{ movimiento.idmov }}\"><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i>{% if(movimiento.estadomov == 0 and app.user.hasRole('ROLE_ADMIN') or app.user.hasRole('ROLE_COORDINADOR') or app.user.hasRole('ROLE_FINANCIERO') ) %}<span class=\"label label-danger\" style=\"border-radius: 18px; position: absolute; margin-top: -15%;margin-left: -25%\">1</span>{% endif %}</button>          
                                    {{ render(controller('AppBundle:Movimiento:show', { 'id' : movimiento.idmov } )) }}
                            </div>
                        </div>
                    </center>
                    </td>
                    </tr>
            </div>
        {% endfor %}
    </tbody>
</table>
</div>
</div>
{% endblock %}
", "movimiento/Movimientoindex.html.twig", "/home/ubuntu/workspace/app/Resources/views/movimiento/Movimientoindex.html.twig");
    }
}
