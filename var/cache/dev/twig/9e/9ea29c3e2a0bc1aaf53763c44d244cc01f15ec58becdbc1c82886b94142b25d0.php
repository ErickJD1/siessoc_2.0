<?php

/* movimiento/Movimientonew.html.twig */
class __TwigTemplate_e21116d5e25d317c590d76d47e08303a503b595b8d2469dc5ba27605446872f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "movimiento/Movimientonew.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
            'javascripts_inline' => array($this, 'block_javascripts_inline'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3cd08c4b0ada4f0780a36d8f17886349ff167e0d985d42701940cca91ba2a2d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd08c4b0ada4f0780a36d8f17886349ff167e0d985d42701940cca91ba2a2d7->enter($__internal_3cd08c4b0ada4f0780a36d8f17886349ff167e0d985d42701940cca91ba2a2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movimiento/Movimientonew.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cd08c4b0ada4f0780a36d8f17886349ff167e0d985d42701940cca91ba2a2d7->leave($__internal_3cd08c4b0ada4f0780a36d8f17886349ff167e0d985d42701940cca91ba2a2d7_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_bc4e7e8f1c8fbe08812fb78522419ae2da294310a7c8d1dedccebc482ffa1830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc4e7e8f1c8fbe08812fb78522419ae2da294310a7c8d1dedccebc482ffa1830->enter($__internal_bc4e7e8f1c8fbe08812fb78522419ae2da294310a7c8d1dedccebc482ffa1830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Movimientos | ";
        
        $__internal_bc4e7e8f1c8fbe08812fb78522419ae2da294310a7c8d1dedccebc482ffa1830->leave($__internal_bc4e7e8f1c8fbe08812fb78522419ae2da294310a7c8d1dedccebc482ffa1830_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_23938cc500c97dbd599353da2d369c57a0b0f77d49b7718120560dbc288ce4e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23938cc500c97dbd599353da2d369c57a0b0f77d49b7718120560dbc288ce4e2->enter($__internal_23938cc500c97dbd599353da2d369c57a0b0f77d49b7718120560dbc288ce4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Registrar Movimientos ";
        
        $__internal_23938cc500c97dbd599353da2d369c57a0b0f77d49b7718120560dbc288ce4e2->leave($__internal_23938cc500c97dbd599353da2d369c57a0b0f77d49b7718120560dbc288ce4e2_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_233c64c22262ffd7d96ba4e13bd28b032b247cec3ef328bba80dfcf7049418b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233c64c22262ffd7d96ba4e13bd28b032b247cec3ef328bba80dfcf7049418b8->enter($__internal_233c64c22262ffd7d96ba4e13bd28b032b247cec3ef328bba80dfcf7049418b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
    <div class=\"box box-primary\" style=\"width: 100%;\">

        <div  style=\"width:90%; margin-top: 5%; margin-left: 5%; background-color:#F3F3F3; border-radius:5px \" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Banco.png"), "html", null, true);
        echo "\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Movimiento De Fondos</h2>
                <h4 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body; margin-top: -3px;\">Complete los campos requeridos:<span style=\"font-size: 25;color: red\" >*</span></h4>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 80%; margin-top: 3%; margin-bottom: 3%\">


                ";
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                <div class=\"row\">
                    <div class=\"col col-md-6\">
                        <label for=\"form_firstname\">Asociar Cuenta<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idcuenta", array()), 'widget');
        echo "
                        ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idcuenta", array()), 'errors');
        echo "
                    </div>
                    <div class=\"col col-md-6\">
                        <label for=\"form_lastname\">Tipo de movimiento<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idtipomov", array()), 'widget');
        echo "
                        ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idtipomov", array()), 'errors');
        echo "
                    </div>
                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col col-md-12\">
                        <label for=\"form_lastname\">Descripcion<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcionmov", array()), 'widget');
        echo "
                        ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcionmov", array()), 'errors');
        echo "
                    </div>

                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col col-md-6\" align=\"left\">
                        <label for=\"form_monto\">Monto (\$)<span style=\"font-size: 25;color: red\" >*</span></label>
                        ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "monto", array()), 'widget', array("attr" => array("onchange" => "cargarData()")));
        echo "
                        ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "monto", array()), 'errors');
        echo "

                        <span class=\"help-block\" id=\"montoerror\">    

                        </span>
                    </div>

                    <div class=\"col col-md-6\" align=\"center\">
                        <label for=\"form_file\">Adjuntar Comprobante</label>
                        ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comprobante_file", array()), 'widget');
        echo "
                        ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comprobante_file", array()), 'errors');
        echo "
                    </div>

                </div>
                <hr>
                <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "movimiento\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" id=\"enviar\" type=\"submit\"  value=\"Guardar\" />
                    </div>
                </div>
                ";
        // line 72
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

            </div>
        </div>
        <br>
        <br>
    </div>



";
        
        $__internal_233c64c22262ffd7d96ba4e13bd28b032b247cec3ef328bba80dfcf7049418b8->leave($__internal_233c64c22262ffd7d96ba4e13bd28b032b247cec3ef328bba80dfcf7049418b8_prof);

    }

    // line 84
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_cc7cff460c9da282cf7fee8bb9a806f32ae9ce5d25274f007d6aa610ebc77acf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc7cff460c9da282cf7fee8bb9a806f32ae9ce5d25274f007d6aa610ebc77acf->enter($__internal_cc7cff460c9da282cf7fee8bb9a806f32ae9ce5d25274f007d6aa610ebc77acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        // line 85
        echo "
    <script>
        function cargarData()
        {
            var id1 = document.getElementById('appbundle_movimiento_idcuenta');
            var id2 = id1.options[id1.selectedIndex].value;

            \$.ajax({
                method: \"GET\",
                url: \"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("ajax_posts");
        echo "\",
                data: \"idcuenta=\" + id2,
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
                                    var saldoActual = 0;
                                    for (d in posts)
                                    {
                                        saldoActual = posts[d][\"saldoactual\"];
                                    }
                                }
                                \$('#error').val(saldoActual);
                                if (\$('#appbundle_movimiento_monto').val() > saldoActual)
                                {
                                    \$('#montoerror').html(`<ul class=\"list-unstyled\"><li><span class=\"glyphicon glyphicon-exclamation-sign\">
                                </span>Monto disponible \$` + saldoActual + `</li></ul>`);
                                    \$(\"#enviar\").attr(\"disabled\",\"disabled\");

                                } else {
                                    \$('#montoerror').html(`<ul style=\"color:green\" class=\"list-unstyled\"><li><span class=\"fa fa-check\" style=\"color:green\">
                                </span>Monto Valido!</li></ul>`);
                                \$(\"#enviar\").removeAttr(\"disabled\",\"disabled\");

                                }

                            } else
                            {
                                console.log(\"INVALID JSON STRING\");
                            }
                        } else
                        {
                            console.log(\"POSTS NOT FOUND\");
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
        }
        ;
    </script>
";
        
        $__internal_cc7cff460c9da282cf7fee8bb9a806f32ae9ce5d25274f007d6aa610ebc77acf->leave($__internal_cc7cff460c9da282cf7fee8bb9a806f32ae9ce5d25274f007d6aa610ebc77acf_prof);

    }

    public function getTemplateName()
    {
        return "movimiento/Movimientonew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 94,  197 => 85,  191 => 84,  173 => 72,  166 => 68,  156 => 61,  152 => 60,  140 => 51,  136 => 50,  125 => 42,  121 => 41,  111 => 34,  107 => 33,  100 => 29,  96 => 28,  89 => 24,  75 => 13,  67 => 7,  61 => 6,  49 => 4,  37 => 3,  11 => 1,);
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

{% block page_title %} Movimientos | {% endblock %}
{% block page_subtitle %}Registrar Movimientos {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\" style=\"width: 100%;\">

        <div  style=\"width:90%; margin-top: 5%; margin-left: 5%; background-color:#F3F3F3; border-radius:5px \" class=\"panel panel-default\"> 

            <div class=\"col col-md-12\" align=\"center\" > 
                <img style=\"width:80px;margin-top: 2%;margin-bottom: 2%\" src=\"{{ asset('img/Banco.png') }}\"></img>
            </div>   
            <div class=\"col col-md-12 \" align=\"center\" style=\"margin-top:-15px\"> 
                <h2 class=\"col col-md-12\" style=\"font-family: palatino header\" >Registrar Movimiento De Fondos</h2>
                <h4 class=\"col col-md-12\" style=\"color:grey; font-family: palatino body; margin-top: -3px;\">Complete los campos requeridos:<span style=\"font-size: 25;color: red\" >*</span></h4>

            </div>
            <hr>
            <div  class=\"container\"  style=\"width: 80%; margin-top: 3%; margin-bottom: 3%\">


                {{ form_start(form) }}
                <div class=\"row\">
                    <div class=\"col col-md-6\">
                        <label for=\"form_firstname\">Asociar Cuenta<span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(form.idcuenta) }}
                        {{ form_errors(form.idcuenta) }}
                    </div>
                    <div class=\"col col-md-6\">
                        <label for=\"form_lastname\">Tipo de movimiento<span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(form.idtipomov) }}
                        {{ form_errors(form.idtipomov) }}
                    </div>
                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col col-md-12\">
                        <label for=\"form_lastname\">Descripcion<span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(form.descripcionmov) }}
                        {{ form_errors(form.descripcionmov) }}
                    </div>

                </div>
                <br>
                <div class=\"row\">
                    <div class=\"col col-md-6\" align=\"left\">
                        <label for=\"form_monto\">Monto (\$)<span style=\"font-size: 25;color: red\" >*</span></label>
                        {{ form_widget(form.monto, {attr:{'onchange':'cargarData()'}}) }}
                        {{ form_errors(form.monto) }}

                        <span class=\"help-block\" id=\"montoerror\">    

                        </span>
                    </div>

                    <div class=\"col col-md-6\" align=\"center\">
                        <label for=\"form_file\">Adjuntar Comprobante</label>
                        {{ form_widget(form.comprobante_file) }}
                        {{ form_errors(form.comprobante_file) }}
                    </div>

                </div>
                <hr>
                <div class=\"row\">
                    <div class=\"col col-md-12\" align=\"right\">
                        <a href=\"{{ absolute_url(asset('')) }}movimiento\" class=\"btn btn-primary btn-xl\">Cancelar</a>
                        <input  class=\"btn btn-success btn-xl\" id=\"enviar\" type=\"submit\"  value=\"Guardar\" />
                    </div>
                </div>
                {{ form_end(form) }}

            </div>
        </div>
        <br>
        <br>
    </div>



{% endblock %}

{% block javascripts_inline %}

    <script>
        function cargarData()
        {
            var id1 = document.getElementById('appbundle_movimiento_idcuenta');
            var id2 = id1.options[id1.selectedIndex].value;

            \$.ajax({
                method: \"GET\",
                url: \"{{ url('ajax_posts') }}\",
                data: \"idcuenta=\" + id2,
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
                                    var saldoActual = 0;
                                    for (d in posts)
                                    {
                                        saldoActual = posts[d][\"saldoactual\"];
                                    }
                                }
                                \$('#error').val(saldoActual);
                                if (\$('#appbundle_movimiento_monto').val() > saldoActual)
                                {
                                    \$('#montoerror').html(`<ul class=\"list-unstyled\"><li><span class=\"glyphicon glyphicon-exclamation-sign\">
                                </span>Monto disponible \$` + saldoActual + `</li></ul>`);
                                    \$(\"#enviar\").attr(\"disabled\",\"disabled\");

                                } else {
                                    \$('#montoerror').html(`<ul style=\"color:green\" class=\"list-unstyled\"><li><span class=\"fa fa-check\" style=\"color:green\">
                                </span>Monto Valido!</li></ul>`);
                                \$(\"#enviar\").removeAttr(\"disabled\",\"disabled\");

                                }

                            } else
                            {
                                console.log(\"INVALID JSON STRING\");
                            }
                        } else
                        {
                            console.log(\"POSTS NOT FOUND\");
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
        }
        ;
    </script>
{% endblock %}", "movimiento/Movimientonew.html.twig", "/home/ubuntu/workspace/app/Resources/views/movimiento/Movimientonew.html.twig");
    }
}
