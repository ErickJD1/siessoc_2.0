<?php

/* cuenta/Movimientocuenta.html.twig */
class __TwigTemplate_96fb44b6b5bd8ee1b2fd32139a9f007bb9736ed48a88a7729ad58d3261afac9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<div class=\"modal fade\" id=\"MovimientoCB";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : null), "idcuenta", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    ";
        // line 3
        $context["cuen"] = $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : null), "idcuenta", array());
        // line 4
        echo "    <div style=\"width:80%; margin-left:10%\" class=\"modal-dialog\">
        <div class=\"modal-content\" style=\"border-radius: 8px\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4>Movimientos de la cuenta: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : null), "numcuenta", array()), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"modal-body\">


                <div class=\"box box-primary\">
                    <div style=\"width:90%; margin-left:5%; margin-top: 2% \">


                        <table class=\"table table-bordered table-hover table-striped table-responsive\"  id=\"tabelMahasiswa";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : null), "idcuenta", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["movimientos"]) ? $context["movimientos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["movimiento"]) {
            // line 33
            echo "                                    <tr>
                                        <td class=\"th\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "descripcionmov", array()), "html", null, true);
            echo "</td>
                                        <td class=\"th\">";
            // line 35
            echo twig_escape_filter($this->env, ("\$" . $this->getAttribute($context["movimiento"], "monto", array())), "html", null, true);
            echo "</td>
                                        <td class=\"th\">";
            // line 36
            if ($this->getAttribute($context["movimiento"], "estadomov", array())) {
                echo "Aprobado";
            } else {
                echo "Pendiente";
            }
            echo "</td>
                                        <td class=\"th\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "idcuenta", array()), "html", null, true);
            echo "</td>
                                        <td class=\"th\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "idtipomov", array()), "html", null, true);
            echo "</td>
                                        <td class=\"th\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "idusuario", array()), "html", null, true);
            echo "</td>
                                        <td class=\"th\">";
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


<script language=\"JavaScript\" type=\"text/javascript\">

    \$(document).ready(function () {
        \$(\"#tabelMahasiswa";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : null), "idcuenta", array()), "html", null, true);
        echo "\").DataTable({

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
        
         \$(\"#tabelMahasiswa";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : null), "idcuenta", array()), "html", null, true);
        echo "\").removeAttr(\"style\");
         \$('.sorting').removeAttr(\"style\");
    });

</script>
";
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
        return array (  158 => 86,  131 => 62,  110 => 43,  99 => 40,  95 => 39,  91 => 38,  87 => 37,  79 => 36,  75 => 35,  71 => 34,  68 => 33,  64 => 32,  47 => 18,  35 => 9,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "cuenta/Movimientocuenta.html.twig", "/home/ubuntu/workspace/app/Resources/views/cuenta/Movimientocuenta.html.twig");
    }
}
