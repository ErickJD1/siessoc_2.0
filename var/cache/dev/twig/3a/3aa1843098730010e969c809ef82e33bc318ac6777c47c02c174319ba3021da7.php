<?php

/* cuenta/Movimientocuenta.html.twig */
class __TwigTemplate_3abeed0519f46442e1d4b7772b5b73158cb234f4e4ac466b42ab422bbcfebf4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts_inline' => array($this, 'block_javascripts_inline'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b9e994b2f8a6b631fd3a3d547c71817a8db76b14be691144884d02049d471f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b9e994b2f8a6b631fd3a3d547c71817a8db76b14be691144884d02049d471f9->enter($__internal_7b9e994b2f8a6b631fd3a3d547c71817a8db76b14be691144884d02049d471f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cuenta/Movimientocuenta.html.twig"));

        // line 1
        echo "
<div class=\"modal fade\" id=\"MovimientoCB";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : $this->getContext($context, "cuenta")), "idcuenta", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    ";
        // line 3
        $context["cuen"] = $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : $this->getContext($context, "cuenta")), "idcuenta", array());
        // line 4
        echo "    <div style=\"width:50%; margin-left:25%\" class=\"modal-dialog\">
        <div class=\"modal-content\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4>Movimientos de la cuenta: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : $this->getContext($context, "cuenta")), "numcuenta", array()), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"modal-body\">


                <div class=\"box box-primary\">
                    <div style=\"width:90%; margin-left:5%; margin-top: 2% \">


                        <table class=\"table table-bordered table-hover table-striped table-responsive\" id=\"tabelMahasiswa";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : $this->getContext($context, "cuenta")), "idcuenta", array()), "html", null, true);
        echo "\">
                            <thead>
                                <tr>
                                    <th>Descripcion</th>
                                    <th>Monto</th>
                                    <th>Estado</th>
                                    <th>Cuenta</th>
                                    <th>Tipo</th>
                                    <th>Usuario</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <tbody>

                                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movimientos"]) ? $context["movimientos"] : $this->getContext($context, "movimientos")));
        foreach ($context['_seq'] as $context["_key"] => $context["movimiento"]) {
            // line 33
            echo "                                    <tr>
                                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "descripcionmov", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 35
            echo twig_escape_filter($this->env, ("\$" . $this->getAttribute($context["movimiento"], "monto", array())), "html", null, true);
            echo "</td>
                                        <td>";
            // line 36
            if ($this->getAttribute($context["movimiento"], "estadomov", array())) {
                echo "Aprobado";
            } else {
                echo "Pendiente";
            }
            echo "</td>
                                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "idcuenta", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "idtipomov", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "idusuario", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 40
            if ($this->getAttribute($context["movimiento"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["movimiento"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movimiento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                            </tbody>
                        </table>

                    </div>
                </div>



                <!--modal-->
            </div>

            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Cerrar</button>
            </div>
        </div>
    </div>
</div>

";
        // line 61
        $this->displayBlock('javascripts_inline', $context, $blocks);
        
        $__internal_7b9e994b2f8a6b631fd3a3d547c71817a8db76b14be691144884d02049d471f9->leave($__internal_7b9e994b2f8a6b631fd3a3d547c71817a8db76b14be691144884d02049d471f9_prof);

    }

    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_81d0a90637ec32ed862fb899db94dc91407b26b0a16c06e57519e34cbd43d22c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81d0a90637ec32ed862fb899db94dc91407b26b0a16c06e57519e34cbd43d22c->enter($__internal_81d0a90637ec32ed862fb899db94dc91407b26b0a16c06e57519e34cbd43d22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        // line 62
        echo "
    <script language=\"JavaScript\" type=\"text/javascript\">

        \$(document).ready(function () {
            \$(\"#tabelMahasiswa";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : $this->getContext($context, "cuenta")), "idcuenta", array()), "html", null, true);
        echo "\").DataTable({
                \"scrollX\": \"100%\",
                \"scrollY\": \"200px\",
                language: {
                    \"decimal\": \"\",
                    \"emptyTable\": \"No hay información\",
                    \"info\": \"Mostrando _START_ a _END_ de _TOTAL_ Entradas\",
                    \"infoEmpty\": \"Mostrando 0 to 0 of 0 Entradas\",
                    \"infoFiltered\": \"(Filtrado de _MAX_ total entradas)\",
                    \"infoPostFix\": \"\",
                    \"thousands\": \",\",
                    \"lengthMenu\": \"Mostrar _MENU_ Entradas\",
                    \"loadingRecords\": \"Cargando...\",
                    \"processing\": \"Procesando...\",
                    \"search\": \"Buscar:\",
                    \"zeroRecords\": \"Sin resultados encontrados\",
                    \"paginate\": {
                        \"first\": \"Primero\",
                        \"last\": \"Ultimo\",
                        \"next\": \"Siguiente\",
                        \"previous\": \"Anterior\"
                    }
                },
            });
        });

    </script>
";
        
        $__internal_81d0a90637ec32ed862fb899db94dc91407b26b0a16c06e57519e34cbd43d22c->leave($__internal_81d0a90637ec32ed862fb899db94dc91407b26b0a16c06e57519e34cbd43d22c_prof);

    }

    public function getTemplateName()
    {
        return "cuenta/Movimientocuenta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 66,  146 => 62,  134 => 61,  114 => 43,  103 => 40,  99 => 39,  95 => 38,  91 => 37,  83 => 36,  79 => 35,  75 => 34,  72 => 33,  68 => 32,  51 => 18,  39 => 9,  32 => 4,  30 => 3,  26 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div class=\"modal fade\" id=\"MovimientoCB{{cuenta.idcuenta}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    {% set cuen = cuenta.idcuenta %}
    <div style=\"width:50%; margin-left:25%\" class=\"modal-dialog\">
        <div class=\"modal-content\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4>Movimientos de la cuenta: {{cuenta.numcuenta}}</h4>
            </div>
            <div class=\"modal-body\">


                <div class=\"box box-primary\">
                    <div style=\"width:90%; margin-left:5%; margin-top: 2% \">


                        <table class=\"table table-bordered table-hover table-striped table-responsive\" id=\"tabelMahasiswa{{cuenta.idcuenta}}\">
                            <thead>
                                <tr>
                                    <th>Descripcion</th>
                                    <th>Monto</th>
                                    <th>Estado</th>
                                    <th>Cuenta</th>
                                    <th>Tipo</th>
                                    <th>Usuario</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <tbody>

                                {% for movimiento in movimientos %}
                                    <tr>
                                        <td>{{ movimiento.descripcionmov }}</td>
                                        <td>{{ \"\$\"~movimiento.monto }}</td>
                                        <td>{% if movimiento.estadomov %}Aprobado{% else %}Pendiente{% endif %}</td>
                                        <td>{{ movimiento.idcuenta }}</td>
                                        <td>{{ movimiento.idtipomov }}</td>
                                        <td>{{ movimiento.idusuario }}</td>
                                        <td>{% if movimiento.createdAt %}{{ movimiento.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>

                    </div>
                </div>



                <!--modal-->
            </div>

            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Cerrar</button>
            </div>
        </div>
    </div>
</div>

{% block javascripts_inline %}

    <script language=\"JavaScript\" type=\"text/javascript\">

        \$(document).ready(function () {
            \$(\"#tabelMahasiswa{{cuenta.idcuenta}}\").DataTable({
                \"scrollX\": \"100%\",
                \"scrollY\": \"200px\",
                language: {
                    \"decimal\": \"\",
                    \"emptyTable\": \"No hay información\",
                    \"info\": \"Mostrando _START_ a _END_ de _TOTAL_ Entradas\",
                    \"infoEmpty\": \"Mostrando 0 to 0 of 0 Entradas\",
                    \"infoFiltered\": \"(Filtrado de _MAX_ total entradas)\",
                    \"infoPostFix\": \"\",
                    \"thousands\": \",\",
                    \"lengthMenu\": \"Mostrar _MENU_ Entradas\",
                    \"loadingRecords\": \"Cargando...\",
                    \"processing\": \"Procesando...\",
                    \"search\": \"Buscar:\",
                    \"zeroRecords\": \"Sin resultados encontrados\",
                    \"paginate\": {
                        \"first\": \"Primero\",
                        \"last\": \"Ultimo\",
                        \"next\": \"Siguiente\",
                        \"previous\": \"Anterior\"
                    }
                },
            });
        });

    </script>
{% endblock %}", "cuenta/Movimientocuenta.html.twig", "/home/ubuntu/workspace/app/Resources/views/cuenta/Movimientocuenta.html.twig");
    }
}
