<?php

/* pagocolaboracion/pagocolaboracionindex.html.twig */
class __TwigTemplate_a4945aeca931c1b9fc552ad45f448b2e02f61cc53a6cc24afb8354645c7a3a81 extends Twig_Template
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
        $__internal_2ab0088b0c35b6cbc30ed718e0fdf71647b63c2705973f2f69fe951968605970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab0088b0c35b6cbc30ed718e0fdf71647b63c2705973f2f69fe951968605970->enter($__internal_2ab0088b0c35b6cbc30ed718e0fdf71647b63c2705973f2f69fe951968605970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagocolaboracion/pagocolaboracionindex.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"VerAlumnos";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["colaboracion"]) ? $context["colaboracion"] : $this->getContext($context, "colaboracion")), "idcolaboracion", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" style=\"width:80%; margin-left: 10%\">
        <div class=\"modal-content\" style=\"border-radius: 8px\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h3 align=\"center\"><strong><strong>Tipo De Colaboracion</strong></strong></h3>
            </div>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                    <!--modal-->

                    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["colaboracion"]) ? $context["colaboracion"] : $this->getContext($context, "colaboracion")), "idcolaboracion", array()), "html", null, true);
        echo "\">
                        <thead class=\"thead-light\">
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Telefono</th>
                                <th>Monto</th>
                                <th>Tipo Colaboracion</th>
                                <th>Realizo Pago</th>
                                <th>Fecha</th>
                                <th>Accion</th>

                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagocolaboracions"]) ? $context["pagocolaboracions"] : $this->getContext($context, "pagocolaboracions")));
        foreach ($context['_seq'] as $context["_key"] => $context["pagocolaboracion"]) {
            // line 30
            echo "                                <tr>
                                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["pagocolaboracion"], "nombre", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["pagocolaboracion"], "apellido", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["pagocolaboracion"], "telefono", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["pagocolaboracion"], "monto", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["pagocolaboracion"], "descripcioncolaboracion", array()), "html", null, true);
            echo "</td>
                                    <td id=\"pagoTD";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["pagocolaboracion"], "idpagocolaboracion", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pagocolaboracion"], "pagorealizado", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 37
            if ($this->getAttribute($context["pagocolaboracion"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pagocolaboracion"], "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>                                    <td>
                                        <div align=\"center\" id=\"check";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["pagocolaboracion"], "idpagocolaboracion", array()), "html", null, true);
            echo "\">
                                            ";
            // line 39
            if (($this->getAttribute($context["pagocolaboracion"], "pagorealizado", array()) == "NO")) {
                // line 40
                echo "                                                <form id=\"formPago\" action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagocolaboracion_realizarpago", array("id" => $this->getAttribute($context["pagocolaboracion"], "idpagocolaboracion", array()), "val" => "SI")), "html", null, true);
                echo "\" method=\"POST\"> 
                                                    <input class=\"hidden\" type=\"text\" id=\"pagoReali\" value=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["pagocolaboracion"], "idpagocolaboracion", array()), "html", null, true);
                echo "\">
                                                    <button type=\"button\" onClick=\"realizarPago()\" class=\"btn btn-warning\" style=\"margin-top:1%;widt:100%\" title=\"Pagar\"><i class=\"fa fa-money\"></i></button>
                                                </form> 
                                            ";
            } else {
                // line 45
                echo "                                                <i style=\"color: green\" class=\"fa fa-check\"></i>
                                            ";
            }
            // line 47
            echo "                                        </div>
                                    </td>
                                </tr>


                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagocolaboracion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                        </tbody>
                    </table>
                    <div class=\"modal-footer\">
                        <div style=\"float:right\">
                            <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Cerrar</button>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 67
        $this->displayBlock('javascripts_inline', $context, $blocks);
        
        $__internal_2ab0088b0c35b6cbc30ed718e0fdf71647b63c2705973f2f69fe951968605970->leave($__internal_2ab0088b0c35b6cbc30ed718e0fdf71647b63c2705973f2f69fe951968605970_prof);

    }

    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_9732ffa391a3ec6dcfce81ae9762c21bc8459eacbdeae8b314561b05299eb1af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9732ffa391a3ec6dcfce81ae9762c21bc8459eacbdeae8b314561b05299eb1af->enter($__internal_9732ffa391a3ec6dcfce81ae9762c21bc8459eacbdeae8b314561b05299eb1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        // line 68
        echo "
    <script language=\"JavaScript\" type=\"text/javascript\">

        \$(document).ready(function () {
            \$(\"#tabelMahasiswa";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["colaboracion"]) ? $context["colaboracion"] : $this->getContext($context, "colaboracion")), "idcolaboracion", array()), "html", null, true);
        echo "\").DataTable({
                language: {
                    \"decimal\": \"\",
                    \"emptyTable\": \"No hay información\",
                    \"info\": \"Lista De Becarios\",
                    \"infoEmpty\": \"Mostrando 0 to 0 of 0 Entradas\",
                    \"infoFiltered\": \"(Filtrado de MAX total entradas)\",
                    \"infoPostFix\": \"\",
                    \"thousands\": \",\",
                    \"lengthMenu\": \"Mostrar MENU Entradas\",
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
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["colaboracion"]) ? $context["colaboracion"] : $this->getContext($context, "colaboracion")), "idcolaboracion", array()), "html", null, true);
        echo "\").removeAttr(\"style\");
        });


        function realizarPago()
        {
            var form = document.getElementById('formPago');
            var id2 = document.getElementById('pagoReali').value;
            \$.ajax({
                method: \"GET\",
                url: \"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("pagocolaboracion_realizarp");
        echo "\",
                data: \"idpago=\" + id2,
                dataType: 'json',
                success: function (data)
                {
                    if (data.hasOwnProperty(\"response\") && data.response === \"success\")
                    {
                        if (data.hasOwnProperty(\"posts\"))
                        {
                            //http://stackoverflow.com/questions/3710204/how-to-check-if-a-string-is-a-valid-json-string-in-javascript-without-using-try/3710226
                            if (/^[\\],:{}\\s]*\$/.test(data.posts.replace(/\\\\[\"\\\\\\/bfnrtu]/g, '@').
                                    replace(/\"[^\"\\\\\\n\\r]*\"|true|false|null|-?\\d+(?:\\.\\d*)?(?:[eE][+\\-]?\\d+)?/g, ']').
                                    replace(/(?:^|:|,)(?:\\s*\\[)+/g, '')))
                            {
                                var posts = JSON.parse(data.posts);
                                if (posts.length > 0)
                                {
                                        var idPago=\$('#pagoReali').val();
                                        \$('#check'+idPago).html(`<i style=\"color: green\" class=\"fa fa-check\"></i>`);
                                        \$('#pagoTD'+idPago).html(\"SI\");
                                } else
                                {
                                    console.log(\"INVALID JSON STRING\");
                                }
                            } else
                            {
                                console.log(\"POSTS NOT FOUND\");
                            }
                        }
                    }
                },
                error: function (jqXHR, exception)
                {
                    if (jqXHR.status === 405)
                    {
                        console.error(\"METHOD NOT ALLOWED!\");
                    }
                }
            });


            \$.ajax({
                url: \"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("pagocolaboracion_indexupdate", array("id" => $this->getAttribute((isset($context["colaboracion"]) ? $context["colaboracion"] : $this->getContext($context, "colaboracion")), "idcolaboracion", array()))), "html", null, true);
        echo "\",
                type: \"GET\",
                data: {veruser: 1},
                success: function (data) {
                    // En caso de que se ejecute
                    //\$('#tabelMahasiswa";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["colaboracion"]) ? $context["colaboracion"] : $this->getContext($context, "colaboracion")), "idcolaboracion", array()), "html", null, true);
        echo " > tbody').html(data);
        ";
        // line 154
        echo "
                         var table = \$('#tabelMahasiswa";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["colaboracion"]) ? $context["colaboracion"] : $this->getContext($context, "colaboracion")), "idcolaboracion", array()), "html", null, true);
        echo "').DataTable();
                         table.clear();
                         table.rows.add(data.data).draw();

                     }
                 });



             }
             ;


    </script>

";
        
        $__internal_9732ffa391a3ec6dcfce81ae9762c21bc8459eacbdeae8b314561b05299eb1af->leave($__internal_9732ffa391a3ec6dcfce81ae9762c21bc8459eacbdeae8b314561b05299eb1af_prof);

    }

    public function getTemplateName()
    {
        return "pagocolaboracion/pagocolaboracionindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 155,  259 => 154,  255 => 151,  247 => 146,  202 => 104,  189 => 94,  164 => 72,  158 => 68,  146 => 67,  130 => 53,  119 => 47,  115 => 45,  108 => 41,  103 => 40,  101 => 39,  97 => 38,  91 => 37,  85 => 36,  81 => 35,  77 => 34,  73 => 33,  69 => 32,  65 => 31,  62 => 30,  58 => 29,  40 => 14,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"VerAlumnos{{colaboracion.idcolaboracion}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" style=\"width:80%; margin-left: 10%\">
        <div class=\"modal-content\" style=\"border-radius: 8px\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h3 align=\"center\"><strong><strong>Tipo De Colaboracion</strong></strong></h3>
            </div>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                    <!--modal-->

                    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa{{colaboracion.idcolaboracion}}\">
                        <thead class=\"thead-light\">
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Telefono</th>
                                <th>Monto</th>
                                <th>Tipo Colaboracion</th>
                                <th>Realizo Pago</th>
                                <th>Fecha</th>
                                <th>Accion</th>

                            </tr>
                        </thead>
                        <tbody>
                            {% for pagocolaboracion in pagocolaboracions %}
                                <tr>
                                    <td>{{ pagocolaboracion.nombre }}</td>
                                    <td>{{ pagocolaboracion.apellido }}</td>
                                    <td>{{ pagocolaboracion.telefono }}</td>
                                    <td>{{ pagocolaboracion.monto }}</td>
                                    <td>{{ pagocolaboracion.descripcioncolaboracion }}</td>
                                    <td id=\"pagoTD{{pagocolaboracion.idpagocolaboracion}}\">{{ pagocolaboracion.pagorealizado }}</td>
                                    <td>{% if pagocolaboracion.fecha %}{{ pagocolaboracion.fecha|date('Y-m-d H:i:s') }}{% endif %}</td>                                    <td>
                                        <div align=\"center\" id=\"check{{pagocolaboracion.idpagocolaboracion}}\">
                                            {% if( pagocolaboracion.pagorealizado=='NO') %}
                                                <form id=\"formPago\" action=\"{{path('pagocolaboracion_realizarpago',{'id':pagocolaboracion.idpagocolaboracion,'val':'SI'})}}\" method=\"POST\"> 
                                                    <input class=\"hidden\" type=\"text\" id=\"pagoReali\" value=\"{{pagocolaboracion.idpagocolaboracion}}\">
                                                    <button type=\"button\" onClick=\"realizarPago()\" class=\"btn btn-warning\" style=\"margin-top:1%;widt:100%\" title=\"Pagar\"><i class=\"fa fa-money\"></i></button>
                                                </form> 
                                            {%else%}
                                                <i style=\"color: green\" class=\"fa fa-check\"></i>
                                            {% endif %}
                                        </div>
                                    </td>
                                </tr>


                            {% endfor %}
                        </tbody>
                    </table>
                    <div class=\"modal-footer\">
                        <div style=\"float:right\">
                            <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Cerrar</button>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% block javascripts_inline %}

    <script language=\"JavaScript\" type=\"text/javascript\">

        \$(document).ready(function () {
            \$(\"#tabelMahasiswa{{colaboracion.idcolaboracion}}\").DataTable({
                language: {
                    \"decimal\": \"\",
                    \"emptyTable\": \"No hay información\",
                    \"info\": \"Lista De Becarios\",
                    \"infoEmpty\": \"Mostrando 0 to 0 of 0 Entradas\",
                    \"infoFiltered\": \"(Filtrado de MAX total entradas)\",
                    \"infoPostFix\": \"\",
                    \"thousands\": \",\",
                    \"lengthMenu\": \"Mostrar MENU Entradas\",
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
            \$(\"#tabelMahasiswa{{colaboracion.idcolaboracion}}\").removeAttr(\"style\");
        });


        function realizarPago()
        {
            var form = document.getElementById('formPago');
            var id2 = document.getElementById('pagoReali').value;
            \$.ajax({
                method: \"GET\",
                url: \"{{ url('pagocolaboracion_realizarp') }}\",
                data: \"idpago=\" + id2,
                dataType: 'json',
                success: function (data)
                {
                    if (data.hasOwnProperty(\"response\") && data.response === \"success\")
                    {
                        if (data.hasOwnProperty(\"posts\"))
                        {
                            //http://stackoverflow.com/questions/3710204/how-to-check-if-a-string-is-a-valid-json-string-in-javascript-without-using-try/3710226
                            if (/^[\\],:{}\\s]*\$/.test(data.posts.replace(/\\\\[\"\\\\\\/bfnrtu]/g, '@').
                                    replace(/\"[^\"\\\\\\n\\r]*\"|true|false|null|-?\\d+(?:\\.\\d*)?(?:[eE][+\\-]?\\d+)?/g, ']').
                                    replace(/(?:^|:|,)(?:\\s*\\[)+/g, '')))
                            {
                                var posts = JSON.parse(data.posts);
                                if (posts.length > 0)
                                {
                                        var idPago=\$('#pagoReali').val();
                                        \$('#check'+idPago).html(`<i style=\"color: green\" class=\"fa fa-check\"></i>`);
                                        \$('#pagoTD'+idPago).html(\"SI\");
                                } else
                                {
                                    console.log(\"INVALID JSON STRING\");
                                }
                            } else
                            {
                                console.log(\"POSTS NOT FOUND\");
                            }
                        }
                    }
                },
                error: function (jqXHR, exception)
                {
                    if (jqXHR.status === 405)
                    {
                        console.error(\"METHOD NOT ALLOWED!\");
                    }
                }
            });


            \$.ajax({
                url: \"{{ url('pagocolaboracion_indexupdate',{'id':colaboracion.idcolaboracion}) }}\",
                type: \"GET\",
                data: {veruser: 1},
                success: function (data) {
                    // En caso de que se ejecute
                    //\$('#tabelMahasiswa{{colaboracion.idcolaboracion}} > tbody').html(data);
        {# var myTable = \$('#tabelMahasiswa{{colaboracion.idcolaboracion}}').DataTable();
         myTable.ajax.reload();#}

                         var table = \$('#tabelMahasiswa{{colaboracion.idcolaboracion}}').DataTable();
                         table.clear();
                         table.rows.add(data.data).draw();

                     }
                 });



             }
             ;


    </script>

{%endblock%}", "pagocolaboracion/pagocolaboracionindex.html.twig", "/home/ubuntu/workspace/app/Resources/views/pagocolaboracion/pagocolaboracionindex.html.twig");
    }
}
