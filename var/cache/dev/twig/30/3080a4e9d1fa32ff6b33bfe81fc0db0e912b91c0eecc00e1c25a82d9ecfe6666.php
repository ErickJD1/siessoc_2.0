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
        $__internal_65c254e0486422897eca4a11dff6df2e599f2066907fa4d996648afddf0cb095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c254e0486422897eca4a11dff6df2e599f2066907fa4d996648afddf0cb095->enter($__internal_65c254e0486422897eca4a11dff6df2e599f2066907fa4d996648afddf0cb095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movimiento/Movimientoindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65c254e0486422897eca4a11dff6df2e599f2066907fa4d996648afddf0cb095->leave($__internal_65c254e0486422897eca4a11dff6df2e599f2066907fa4d996648afddf0cb095_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_4c970ac58615921809b454735cf0810e2a57f695061a4ded104e181f14196356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c970ac58615921809b454735cf0810e2a57f695061a4ded104e181f14196356->enter($__internal_4c970ac58615921809b454735cf0810e2a57f695061a4ded104e181f14196356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Fondos";
        
        $__internal_4c970ac58615921809b454735cf0810e2a57f695061a4ded104e181f14196356->leave($__internal_4c970ac58615921809b454735cf0810e2a57f695061a4ded104e181f14196356_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_1fd049bd27bb0ffe21a4522e5dbf37debfebd237f15a67eb346c9c87446a6cde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd049bd27bb0ffe21a4522e5dbf37debfebd237f15a67eb346c9c87446a6cde->enter($__internal_1fd049bd27bb0ffe21a4522e5dbf37debfebd237f15a67eb346c9c87446a6cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Movimientos";
        
        $__internal_1fd049bd27bb0ffe21a4522e5dbf37debfebd237f15a67eb346c9c87446a6cde->leave($__internal_1fd049bd27bb0ffe21a4522e5dbf37debfebd237f15a67eb346c9c87446a6cde_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_1b1367b8fb42da12b64f9814f236ef8426ec8fd49c6b75838fdaaf30e965dc7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b1367b8fb42da12b64f9814f236ef8426ec8fd49c6b75838fdaaf30e965dc7d->enter($__internal_1b1367b8fb42da12b64f9814f236ef8426ec8fd49c6b75838fdaaf30e965dc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
    <div class=\"box box-primary\">
        <div style=\"width:90%; margin-left:5%; margin-top: 2% \">

            <div align=\"left\">
                <a style=\"font-size: 15px\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movimiento_new");
        echo "\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Movimiento</a>
            </div>
            <br> 

            <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
                <thead>
                    <tr>


                        <th><center>Cuenta</center></th>
                <th><center>Monto</center></th>
                <th><center>Tipo</center></th>
                <th><center>Estado</center></th>
                <th><center>Usuario</center></th>
                <th><center>Fecha</center></th>
                <th><center>Accion</center></th>
                </tr>
                </thead>
                <tbody>

                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movimientos"]) ? $context["movimientos"] : $this->getContext($context, "movimientos")));
        foreach ($context['_seq'] as $context["_key"] => $context["movimiento"]) {
            // line 33
            echo "                        <tr>
                            <td><center>";
            // line 34
            echo twig_escape_filter($this->env, (($this->getAttribute($context["movimiento"], "idcuenta", array()) . "-") . $this->getAttribute($this->getAttribute($context["movimiento"], "idcuenta", array()), "numcuenta", array())), "html", null, true);
            echo "</center></td>
                    <td><center>";
            // line 35
            echo twig_escape_filter($this->env, ("\$" . $this->getAttribute($context["movimiento"], "monto", array())), "html", null, true);
            echo "</center></td>
                    <td><center>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "idtipomov", array()), "html", null, true);
            echo "</center></td>
                    <td><center>";
            // line 37
            if ($this->getAttribute($context["movimiento"], "estadomov", array())) {
                echo "Aprobado";
            } else {
                echo "Pendiente";
            }
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


                        ";
            // line 43
            if (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_ADMIN"), "method") || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_COORDINADOR"), "method")) || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_FINANCIERO"), "method")) || (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getId", array(), "method") == $this->getAttribute($this->getAttribute($context["movimiento"], "idUsuario", array()), "id", array())) && ($this->getAttribute($context["movimiento"], "estadomov", array()) != 1)))) {
                // line 44
                echo "                            <div class=\"col col-md-3\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#deleteMovi";
                echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "idmov", array()), "html", null, true);
                echo "\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: crimson\"></i></button>
                                    ";
                // line 45
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Movimiento:showDelete", array("id" => $this->getAttribute($context["movimiento"], "idmov", array()))));
                echo "
                            </div>

                            <div class=\"col col-md-3\" >
                                <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movimiento_edit", array("id" => $this->getAttribute($context["movimiento"], "idmov", array()))), "html", null, true);
                echo "\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                            </div>
                        ";
            }
            // line 52
            echo "                        <div class=\"col col-md-3\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerMovi";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "idmov", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i>";
            if ((((($this->getAttribute($context["movimiento"], "estadomov", array()) == 0) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_ADMIN"), "method")) || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_COORDINADOR"), "method")) || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_FINANCIERO"), "method"))) {
                echo "<span class=\"label label-danger\" style=\"border-radius: 18px; position: fixed; margin-top: -0.6%;margin-left: -1%\">1</span>";
            }
            echo "</button>          
                                    ";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Movimiento:show", array("id" => $this->getAttribute($context["movimiento"], "idmov", array()))));
            echo "
                        </div>



                    </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movimiento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_1b1367b8fb42da12b64f9814f236ef8426ec8fd49c6b75838fdaaf30e965dc7d->leave($__internal_1b1367b8fb42da12b64f9814f236ef8426ec8fd49c6b75838fdaaf30e965dc7d_prof);

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
        return array (  179 => 61,  165 => 53,  156 => 52,  150 => 49,  143 => 45,  138 => 44,  136 => 43,  127 => 39,  123 => 38,  115 => 37,  111 => 36,  107 => 35,  103 => 34,  100 => 33,  96 => 32,  73 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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
                <a style=\"font-size: 15px\" href=\"{{ path('movimiento_new') }}\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Movimiento</a>
            </div>
            <br> 

            <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
                <thead>
                    <tr>


                        <th><center>Cuenta</center></th>
                <th><center>Monto</center></th>
                <th><center>Tipo</center></th>
                <th><center>Estado</center></th>
                <th><center>Usuario</center></th>
                <th><center>Fecha</center></th>
                <th><center>Accion</center></th>
                </tr>
                </thead>
                <tbody>

                    {% for movimiento in movimientos %}
                        <tr>
                            <td><center>{{ movimiento.idcuenta~\"-\"~movimiento.idcuenta.numcuenta }}</center></td>
                    <td><center>{{ \"\$\"~movimiento.monto }}</center></td>
                    <td><center>{{ movimiento.idtipomov }}</center></td>
                    <td><center>{% if movimiento.estadomov %}Aprobado{% else %}Pendiente{% endif %}</center></td>
                    <td><center>{{ movimiento.idusuario }}</center></td>
                    <td><center>{% if movimiento.createdAt %}{{ movimiento.createdAt|date('Y-m-d H:i:s') }}{% endif %}</center></td>
                    <td>


                        {% if app.user.hasRole('ROLE_ADMIN') or app.user.hasRole('ROLE_COORDINADOR') or app.user.hasRole('ROLE_FINANCIERO') or (app.user.getId()==movimiento.idUsuario.id) and movimiento.estadomov != 1 %}
                            <div class=\"col col-md-3\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#deleteMovi{{ movimiento.idmov }}\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: crimson\"></i></button>
                                    {{ render(controller('AppBundle:Movimiento:showDelete', { 'id' : movimiento.idmov } )) }}
                            </div>

                            <div class=\"col col-md-3\" >
                                <a href=\"{{ path('movimiento_edit',{ 'id' : movimiento.idmov }) }}\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                            </div>
                        {% endif %}
                        <div class=\"col col-md-3\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerMovi{{ movimiento.idmov }}\"><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i>{% if(movimiento.estadomov == 0 and app.user.hasRole('ROLE_ADMIN') or app.user.hasRole('ROLE_COORDINADOR') or app.user.hasRole('ROLE_FINANCIERO') ) %}<span class=\"label label-danger\" style=\"border-radius: 18px; position: fixed; margin-top: -0.6%;margin-left: -1%\">1</span>{% endif %}</button>          
                                    {{ render(controller('AppBundle:Movimiento:show', { 'id' : movimiento.idmov } )) }}
                        </div>



                    </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}
", "movimiento/Movimientoindex.html.twig", "/home/ubuntu/workspace/app/Resources/views/movimiento/Movimientoindex.html.twig");
    }
}
