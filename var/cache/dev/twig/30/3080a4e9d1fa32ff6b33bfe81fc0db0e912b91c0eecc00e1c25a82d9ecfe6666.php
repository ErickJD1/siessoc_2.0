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
        $__internal_11f25b5d9571babef59e8c5fbb992cb10a6df8c09ea882cce58685178ccf33e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11f25b5d9571babef59e8c5fbb992cb10a6df8c09ea882cce58685178ccf33e5->enter($__internal_11f25b5d9571babef59e8c5fbb992cb10a6df8c09ea882cce58685178ccf33e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movimiento/Movimientoindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11f25b5d9571babef59e8c5fbb992cb10a6df8c09ea882cce58685178ccf33e5->leave($__internal_11f25b5d9571babef59e8c5fbb992cb10a6df8c09ea882cce58685178ccf33e5_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_e910b4fd8b1b807508fb8675bc76d313448495aa3370402b720c342df8c460bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e910b4fd8b1b807508fb8675bc76d313448495aa3370402b720c342df8c460bb->enter($__internal_e910b4fd8b1b807508fb8675bc76d313448495aa3370402b720c342df8c460bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Fondos";
        
        $__internal_e910b4fd8b1b807508fb8675bc76d313448495aa3370402b720c342df8c460bb->leave($__internal_e910b4fd8b1b807508fb8675bc76d313448495aa3370402b720c342df8c460bb_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_4524f8681243ae7ccd38689ee90876a641d20f3cafc0d641da0af6efaea11193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4524f8681243ae7ccd38689ee90876a641d20f3cafc0d641da0af6efaea11193->enter($__internal_4524f8681243ae7ccd38689ee90876a641d20f3cafc0d641da0af6efaea11193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Movimientos";
        
        $__internal_4524f8681243ae7ccd38689ee90876a641d20f3cafc0d641da0af6efaea11193->leave($__internal_4524f8681243ae7ccd38689ee90876a641d20f3cafc0d641da0af6efaea11193_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_04627bddc1d5e29194ec77610729613968db7bca0876e7efdc8fb6f05564e677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04627bddc1d5e29194ec77610729613968db7bca0876e7efdc8fb6f05564e677->enter($__internal_04627bddc1d5e29194ec77610729613968db7bca0876e7efdc8fb6f05564e677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                        <th>Descripción</th>
                        <th>Monto</th>
                        <th>Estado</th>
                        <th>Cuenta</th>
                        <th>Tipo Movimiento</th>
                        <th>Usuario</th>
                        <th>Fecha</th>
                        <th>Accion</th>
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
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, ("\$" . $this->getAttribute($context["movimiento"], "monto", array())), "html", null, true);
            echo "</td>
                            <td>";
            // line 35
            if ($this->getAttribute($context["movimiento"], "estadomov", array())) {
                echo "Aprobado";
            } else {
                echo "Pendiente";
            }
            echo "</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, (($this->getAttribute($context["movimiento"], "idcuenta", array()) . " | ") . $this->getAttribute($this->getAttribute($context["movimiento"], "idcuenta", array()), "numcuenta", array())), "html", null, true);
            echo "</td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "idtipomov", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "idusuario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 39
            if ($this->getAttribute($context["movimiento"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["movimiento"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                            <td>
                    <center>
                        ";
            // line 42
            if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_ADMIN"), "method") || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_FINANCIERO"), "method")) || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_COORDINADOR"), "method"))) {
                echo "      

                            <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#deleteMovi";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "idmov", array()), "html", null, true);
                echo "\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: crimson\"></i></button>
                                    ";
                // line 45
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Movimiento:showDelete", array("id" => $this->getAttribute($context["movimiento"], "idmov", array()))));
                echo "
                            </div>

                            <div style=\"float:left;\" >
                                <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movimiento_edit", array("id" => $this->getAttribute($context["movimiento"], "idmov", array()))), "html", null, true);
                echo "\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                            </div>
                        ";
            }
            // line 52
            echo "                        <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerMovi";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "idmov", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i></button>
                                ";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Movimiento:show", array("id" => $this->getAttribute($context["movimiento"], "idmov", array()))));
            echo "
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
        // line 60
        echo "    </tbody>
</table>
</div>
</div>
";
        
        $__internal_04627bddc1d5e29194ec77610729613968db7bca0876e7efdc8fb6f05564e677->leave($__internal_04627bddc1d5e29194ec77610729613968db7bca0876e7efdc8fb6f05564e677_prof);

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
        return array (  178 => 60,  165 => 53,  160 => 52,  154 => 49,  147 => 45,  143 => 44,  138 => 42,  130 => 39,  126 => 38,  122 => 37,  118 => 36,  110 => 35,  106 => 34,  102 => 33,  99 => 32,  95 => 31,  73 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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
                        <th>Descripción</th>
                        <th>Monto</th>
                        <th>Estado</th>
                        <th>Cuenta</th>
                        <th>Tipo Movimiento</th>
                        <th>Usuario</th>
                        <th>Fecha</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>

                    {% for movimiento in movimientos %}
                        <tr>
                            <td>{{ movimiento.descripcionmov }}</td>
                            <td>{{ \"\$\"~movimiento.monto }}</td>
                            <td>{% if movimiento.estadomov %}Aprobado{% else %}Pendiente{% endif %}</td>
                            <td>{{ movimiento.idcuenta~\" | \"~movimiento.idcuenta.numcuenta }}</td>
                            <td>{{ movimiento.idtipomov }}</td>
                            <td>{{ movimiento.idusuario }}</td>
                            <td>{% if movimiento.createdAt %}{{ movimiento.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                            <td>
                    <center>
                        {% if app.user.hasRole('ROLE_ADMIN') or app.user.hasRole('ROLE_FINANCIERO') or app.user.hasRole('ROLE_COORDINADOR') %}      

                            <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#deleteMovi{{ movimiento.idmov }}\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: crimson\"></i></button>
                                    {{ render(controller('AppBundle:Movimiento:showDelete', { 'id' : movimiento.idmov } )) }}
                            </div>

                            <div style=\"float:left;\" >
                                <a href=\"{{ path('movimiento_edit',{ 'id' : movimiento.idmov }) }}\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                            </div>
                        {% endif %}
                        <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerMovi{{ movimiento.idmov }}\"><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i></button>
                                {{ render(controller('AppBundle:Movimiento:show', { 'id' : movimiento.idmov } )) }}
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
