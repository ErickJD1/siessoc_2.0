<?php

/* movimiento/Movimientoindex.html.twig */
class __TwigTemplate_73469a7eec80196cabc94c1d372faa028152bc7b0a61013e73b6b49600bcd355 extends Twig_Template
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
        $__internal_9e47c101854d10b09cbcdbc3d9a11a61d2400b1581ae03d9de67977a932a7450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e47c101854d10b09cbcdbc3d9a11a61d2400b1581ae03d9de67977a932a7450->enter($__internal_9e47c101854d10b09cbcdbc3d9a11a61d2400b1581ae03d9de67977a932a7450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movimiento/Movimientoindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e47c101854d10b09cbcdbc3d9a11a61d2400b1581ae03d9de67977a932a7450->leave($__internal_9e47c101854d10b09cbcdbc3d9a11a61d2400b1581ae03d9de67977a932a7450_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_165c959a63cd769eb63573e6221dbb38ad4d283dac14d233eb6c1bc7d6d1b317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_165c959a63cd769eb63573e6221dbb38ad4d283dac14d233eb6c1bc7d6d1b317->enter($__internal_165c959a63cd769eb63573e6221dbb38ad4d283dac14d233eb6c1bc7d6d1b317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Movimientos | ";
        
        $__internal_165c959a63cd769eb63573e6221dbb38ad4d283dac14d233eb6c1bc7d6d1b317->leave($__internal_165c959a63cd769eb63573e6221dbb38ad4d283dac14d233eb6c1bc7d6d1b317_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_48bdbf1f9fdf759fbfe7f5a08e8df1f309f08381be739f5cf7256051e525a2e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48bdbf1f9fdf759fbfe7f5a08e8df1f309f08381be739f5cf7256051e525a2e5->enter($__internal_48bdbf1f9fdf759fbfe7f5a08e8df1f309f08381be739f5cf7256051e525a2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Movimientos ";
        
        $__internal_48bdbf1f9fdf759fbfe7f5a08e8df1f309f08381be739f5cf7256051e525a2e5->leave($__internal_48bdbf1f9fdf759fbfe7f5a08e8df1f309f08381be739f5cf7256051e525a2e5_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_2072138ca67a4e519b9433c367f70be3bbb40eda914d605109c13b16dc3703eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2072138ca67a4e519b9433c367f70be3bbb40eda914d605109c13b16dc3703eb->enter($__internal_2072138ca67a4e519b9433c367f70be3bbb40eda914d605109c13b16dc3703eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "movimiento/new\" class=\"btn btn-primary btn-sm\">+ Registrar Movimiento</a>
</div>
<br> </br>

        <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
            <thead class=\"thead-light\">
            <tr>
                <th>ID</th>
                <th>Descripcion Del Movimiento</th>
                <th>Monto</th>
                <th>Estado</th>
                <th>Tipo Cuenta</th>
                <th>Tipo De Movimiento</th>
                <th>Usuario</th>
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
            echo "            <tr>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "idmov", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "descripcionmov", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "monto", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            if ($this->getAttribute($context["movimiento"], "estadomov", array())) {
                echo "Concluido";
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
                <td>
                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerMovi";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "idmov", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                          ";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Movimiento:show", array("id" => $this->getAttribute($context["movimiento"], "idmov", array()))));
            echo "
                  </div>

                  <div style=\"float:left;\" >
                    <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
            echo "movimiento/edit/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "idmov", array()), "html", null, true);
            echo "\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></a>
                  </div>
                </td>
            </tr>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movimiento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </tbody>
    </table>
    </div>
    </div>
";
        
        $__internal_2072138ca67a4e519b9433c367f70be3bbb40eda914d605109c13b16dc3703eb->leave($__internal_2072138ca67a4e519b9433c367f70be3bbb40eda914d605109c13b16dc3703eb_prof);

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
        return array (  160 => 52,  146 => 46,  139 => 42,  135 => 41,  130 => 39,  126 => 38,  122 => 37,  114 => 36,  110 => 35,  106 => 34,  102 => 33,  99 => 32,  95 => 31,  73 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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
{% block page_subtitle %}Movimientos {% endblock %}

{% block page_content %}

<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <a href=\"{{ absolute_url(asset('')) }}movimiento/new\" class=\"btn btn-primary btn-sm\">+ Registrar Movimiento</a>
</div>
<br> </br>

        <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
            <thead class=\"thead-light\">
            <tr>
                <th>ID</th>
                <th>Descripcion Del Movimiento</th>
                <th>Monto</th>
                <th>Estado</th>
                <th>Tipo Cuenta</th>
                <th>Tipo De Movimiento</th>
                <th>Usuario</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

        {% for movimiento in movimientos %}
            <tr>
                <td>{{ movimiento.idmov }}</td>
                <td>{{ movimiento.descripcionmov }}</td>
                <td>{{ movimiento.monto }}</td>
                <td>{% if movimiento.estadomov %}Concluido{% else %}Pendiente{% endif %}</td>
                <td>{{ movimiento.idcuenta }}</td>
                <td>{{ movimiento.idtipomov }}</td>
                <td>{{ movimiento.idusuario }}</td>
                <td>
                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerMovi{{ movimiento.idmov }}\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                          {{ render(controller('AppBundle:Movimiento:show', { 'id' : movimiento.idmov } )) }}
                  </div>

                  <div style=\"float:left;\" >
                    <a href=\"{{ absolute_url(asset('')) }}movimiento/edit/{{ movimiento.idmov }}\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></a>
                  </div>
                </td>
            </tr>
          </div>
        {% endfor %}
        </tbody>
    </table>
    </div>
    </div>
{% endblock %}
", "movimiento/Movimientoindex.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\movimiento\\Movimientoindex.html.twig");
    }
}
