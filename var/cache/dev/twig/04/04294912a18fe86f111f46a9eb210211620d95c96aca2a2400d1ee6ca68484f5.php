<?php

/* :movimiento:Movimientoindex.html.twig */
class __TwigTemplate_e772f6b8d2a6fa61fea6298d0e68e6003361e4dcacd0bc783f17777a86e252e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":movimiento:Movimientoindex.html.twig", 1);
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
        $__internal_8964f0d4655c3d1c4094fbb5eda6240b9e1a921741cc16c577e729a70c993fdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8964f0d4655c3d1c4094fbb5eda6240b9e1a921741cc16c577e729a70c993fdf->enter($__internal_8964f0d4655c3d1c4094fbb5eda6240b9e1a921741cc16c577e729a70c993fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":movimiento:Movimientoindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8964f0d4655c3d1c4094fbb5eda6240b9e1a921741cc16c577e729a70c993fdf->leave($__internal_8964f0d4655c3d1c4094fbb5eda6240b9e1a921741cc16c577e729a70c993fdf_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_908f495e8ca9cb75802647532f7134501955241d6ef826278a6bed540b01ace0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908f495e8ca9cb75802647532f7134501955241d6ef826278a6bed540b01ace0->enter($__internal_908f495e8ca9cb75802647532f7134501955241d6ef826278a6bed540b01ace0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Movimientos | ";
        
        $__internal_908f495e8ca9cb75802647532f7134501955241d6ef826278a6bed540b01ace0->leave($__internal_908f495e8ca9cb75802647532f7134501955241d6ef826278a6bed540b01ace0_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_f722eca97833aa2d435930a520625cbae42eb5eb5eb683bc6a77e292a43bdc73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f722eca97833aa2d435930a520625cbae42eb5eb5eb683bc6a77e292a43bdc73->enter($__internal_f722eca97833aa2d435930a520625cbae42eb5eb5eb683bc6a77e292a43bdc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Movimientos ";
        
        $__internal_f722eca97833aa2d435930a520625cbae42eb5eb5eb683bc6a77e292a43bdc73->leave($__internal_f722eca97833aa2d435930a520625cbae42eb5eb5eb683bc6a77e292a43bdc73_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_66cede5a86bc908e4bb4012e2054ef70868c459801c22ffc1f1099af68d5827f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66cede5a86bc908e4bb4012e2054ef70868c459801c22ffc1f1099af68d5827f->enter($__internal_66cede5a86bc908e4bb4012e2054ef70868c459801c22ffc1f1099af68d5827f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movimientos"]) ? $context["movimientos"] : $this->getContext($context, "movimientos")));
        foreach ($context['_seq'] as $context["_key"] => $context["movimiento"]) {
            // line 31
            echo "            <tr>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "idmov", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "descripcionmov", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "monto", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            if ($this->getAttribute($context["movimiento"], "estadomov", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "idcuenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "idtipomov", array()), "html", null, true);
            echo "</td>
                <td>
                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerMovi";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "idmov", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                          ";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Movimiento:show", array("id" => $this->getAttribute($context["movimiento"], "idmov", array()))));
            echo "
                  </div>

                  <div style=\"float:left;\" >
                    <a href=\"";
            // line 44
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
        // line 50
        echo "        </tbody>
    </table>
    </div>
    </div>
";
        
        $__internal_66cede5a86bc908e4bb4012e2054ef70868c459801c22ffc1f1099af68d5827f->leave($__internal_66cede5a86bc908e4bb4012e2054ef70868c459801c22ffc1f1099af68d5827f_prof);

    }

    public function getTemplateName()
    {
        return ":movimiento:Movimientoindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 50,  141 => 44,  134 => 40,  130 => 39,  125 => 37,  121 => 36,  113 => 35,  109 => 34,  105 => 33,  101 => 32,  98 => 31,  94 => 30,  73 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

        {% for movimiento in movimientos %}
            <tr>
                <td>{{ movimiento.idmov }}</td>
                <td>{{ movimiento.descripcionmov }}</td>
                <td>{{ movimiento.monto }}</td>
                <td>{% if movimiento.estadomov %}Yes{% else %}No{% endif %}</td>
                <td>{{ movimiento.idcuenta }}</td>
                <td>{{ movimiento.idtipomov }}</td>
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
", ":movimiento:Movimientoindex.html.twig", "/home/ubuntu/workspace/app/Resources/views/movimiento/Movimientoindex.html.twig");
    }
}
