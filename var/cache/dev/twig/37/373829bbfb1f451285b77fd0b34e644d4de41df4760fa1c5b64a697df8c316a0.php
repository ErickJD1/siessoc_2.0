<?php

/* tipocuenta/TipoCuentaindex.html.twig */
class __TwigTemplate_a9bc8ad0d859e1436eb713f6f7f47891886ac24056088db0689199c8674b959e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "tipocuenta/TipoCuentaindex.html.twig", 1);
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
        $__internal_a03ebc88223542df6741a8b8af1f578d5625881c20293c59108f637341537a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03ebc88223542df6741a8b8af1f578d5625881c20293c59108f637341537a63->enter($__internal_a03ebc88223542df6741a8b8af1f578d5625881c20293c59108f637341537a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipocuenta/TipoCuentaindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a03ebc88223542df6741a8b8af1f578d5625881c20293c59108f637341537a63->leave($__internal_a03ebc88223542df6741a8b8af1f578d5625881c20293c59108f637341537a63_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_f284262d3859b6cb34b177c4b4d1f8cefbbc763474334f4ffb2cc56e06b0dfa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f284262d3859b6cb34b177c4b4d1f8cefbbc763474334f4ffb2cc56e06b0dfa7->enter($__internal_f284262d3859b6cb34b177c4b4d1f8cefbbc763474334f4ffb2cc56e06b0dfa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Catálogo";
        
        $__internal_f284262d3859b6cb34b177c4b4d1f8cefbbc763474334f4ffb2cc56e06b0dfa7->leave($__internal_f284262d3859b6cb34b177c4b4d1f8cefbbc763474334f4ffb2cc56e06b0dfa7_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_d3e4be5692cdc771f0494813d3c9470f282bedef7af2559be71b23cd84ad49ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e4be5692cdc771f0494813d3c9470f282bedef7af2559be71b23cd84ad49ab->enter($__internal_d3e4be5692cdc771f0494813d3c9470f282bedef7af2559be71b23cd84ad49ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Tipo Cuenta";
        
        $__internal_d3e4be5692cdc771f0494813d3c9470f282bedef7af2559be71b23cd84ad49ab->leave($__internal_d3e4be5692cdc771f0494813d3c9470f282bedef7af2559be71b23cd84ad49ab_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_8165bee8fc38d938e333982f32fe1a664001f1d06d4c7ef529ead9c71cddbdc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8165bee8fc38d938e333982f32fe1a664001f1d06d4c7ef529ead9c71cddbdc8->enter($__internal_8165bee8fc38d938e333982f32fe1a664001f1d06d4c7ef529ead9c71cddbdc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
    <div class=\"box box-primary\">
        <div style=\"width:90%; margin-left:5%; margin-top: 2% \">

            <div align=\"left\">
                <a style=\"font-size: 15px\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipocuenta_new");
        echo "\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Tipo Cuenta</a>
            </div>

            <br> </br>

            <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
                <thead class=\"thead-light\">
                    <tr>
                        <th><center>Tipo De Cuenta</center></th>
                <th><center>Descripcion</center></th>
                <th><center>Estado</center></th>
                <th><center>Accion</center></th>
                </tr>
                </thead>
                <tbody>

                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipocuentas"]) ? $context["tipocuentas"] : $this->getContext($context, "tipocuentas")));
        foreach ($context['_seq'] as $context["_key"] => $context["tipocuentum"]) {
            // line 29
            echo "                        <tr data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()), "html", null, true);
            echo "\">
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "Nombrecuenta", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "descripcion", array()), "html", null, true);
            echo "</td>
                            <td><center>";
            // line 32
            if ($this->getAttribute($context["tipocuentum"], "estadotipocuenta", array())) {
                echo "Activo";
            } else {
                echo "Inactivo";
            }
            echo "</center></td>
                    <td>
                    <center>
                        <div class=\"row\">
                        <div align=\"center\" class=\"col col-sm-4\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#miventanadelete";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()), "html", null, true);
            echo "\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: crimson\"></i></button>
                                ";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Tipocuenta:showdelete", array("id" => $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()))));
            echo "
                        </div>

                        <div align=\"center\" class=\"col col-sm-4\" >
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipocuenta_edit", array("id" => $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()))), "html", null, true);
            echo "\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                        </div>
                        
                        <div align=\"center\" class=\"col col-sm-4\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#miventana";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i></button>
                                ";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Tipocuenta:show", array("id" => $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()))));
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipocuentum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "    </tbody>
</table>
</div>
</div>
";
        
        $__internal_8165bee8fc38d938e333982f32fe1a664001f1d06d4c7ef529ead9c71cddbdc8->leave($__internal_8165bee8fc38d938e333982f32fe1a664001f1d06d4c7ef529ead9c71cddbdc8_prof);

    }

    public function getTemplateName()
    {
        return "tipocuenta/TipoCuentaindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 54,  141 => 45,  137 => 44,  131 => 41,  124 => 37,  120 => 36,  109 => 32,  105 => 31,  101 => 30,  96 => 29,  92 => 28,  73 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %}Catálogo{% endblock %}
{% block page_subtitle %}Tipo Cuenta{% endblock %}

{% block page_content %}

    <div class=\"box box-primary\">
        <div style=\"width:90%; margin-left:5%; margin-top: 2% \">

            <div align=\"left\">
                <a style=\"font-size: 15px\" href=\"{{ path('tipocuenta_new') }}\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Tipo Cuenta</a>
            </div>

            <br> </br>

            <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
                <thead class=\"thead-light\">
                    <tr>
                        <th><center>Tipo De Cuenta</center></th>
                <th><center>Descripcion</center></th>
                <th><center>Estado</center></th>
                <th><center>Accion</center></th>
                </tr>
                </thead>
                <tbody>

                    {% for tipocuentum in tipocuentas %}
                        <tr data-id=\"{{ tipocuentum.idtipocuenta }}\">
                            <td>{{ tipocuentum.Nombrecuenta }}</td>
                            <td>{{ tipocuentum.descripcion }}</td>
                            <td><center>{% if tipocuentum.estadotipocuenta %}Activo{% else %}Inactivo{% endif %}</center></td>
                    <td>
                    <center>
                        <div class=\"row\">
                        <div align=\"center\" class=\"col col-sm-4\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#miventanadelete{{ tipocuentum.idtipocuenta }}\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: crimson\"></i></button>
                                {{ render(controller('AppBundle:Tipocuenta:showdelete', { 'id' : tipocuentum.idtipocuenta } )) }}
                        </div>

                        <div align=\"center\" class=\"col col-sm-4\" >
                            <a href=\"{{ path('tipocuenta_edit',{ 'id' : tipocuentum.idtipocuenta }) }}\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                        </div>
                        
                        <div align=\"center\" class=\"col col-sm-4\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#miventana{{ tipocuentum.idtipocuenta }}\"><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i></button>
                                {{ render(controller('AppBundle:Tipocuenta:show', { 'id' : tipocuentum.idtipocuenta } )) }}
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
", "tipocuenta/TipoCuentaindex.html.twig", "/home/ubuntu/workspace/app/Resources/views/tipocuenta/TipoCuentaindex.html.twig");
    }
}
