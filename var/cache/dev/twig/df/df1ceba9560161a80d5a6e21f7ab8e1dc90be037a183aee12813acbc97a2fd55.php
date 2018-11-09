<?php

/* movimiento/Movimientoindex.html.twig */
class __TwigTemplate_7668ec46ae68717be1ab870fce63b7f8c23c33a27e62c06c8fe6f5d200544a63 extends Twig_Template
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
        $__internal_e38d1ebc7957bef0ed38eac78905fc27c4d0ade223d502fc744c3d4b7e5a6dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e38d1ebc7957bef0ed38eac78905fc27c4d0ade223d502fc744c3d4b7e5a6dd5->enter($__internal_e38d1ebc7957bef0ed38eac78905fc27c4d0ade223d502fc744c3d4b7e5a6dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movimiento/Movimientoindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e38d1ebc7957bef0ed38eac78905fc27c4d0ade223d502fc744c3d4b7e5a6dd5->leave($__internal_e38d1ebc7957bef0ed38eac78905fc27c4d0ade223d502fc744c3d4b7e5a6dd5_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_784109ad246fa848a2bb0763a94ccbcf953f30d79691e8fb054668ead11565ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_784109ad246fa848a2bb0763a94ccbcf953f30d79691e8fb054668ead11565ac->enter($__internal_784109ad246fa848a2bb0763a94ccbcf953f30d79691e8fb054668ead11565ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Movimientos | ";
        
        $__internal_784109ad246fa848a2bb0763a94ccbcf953f30d79691e8fb054668ead11565ac->leave($__internal_784109ad246fa848a2bb0763a94ccbcf953f30d79691e8fb054668ead11565ac_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_77cfd52a75fb05f9b9ccc0c9224b26c6da3be2b9526ff7e97edc53047d0283cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77cfd52a75fb05f9b9ccc0c9224b26c6da3be2b9526ff7e97edc53047d0283cc->enter($__internal_77cfd52a75fb05f9b9ccc0c9224b26c6da3be2b9526ff7e97edc53047d0283cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Movimientos ";
        
        $__internal_77cfd52a75fb05f9b9ccc0c9224b26c6da3be2b9526ff7e97edc53047d0283cc->leave($__internal_77cfd52a75fb05f9b9ccc0c9224b26c6da3be2b9526ff7e97edc53047d0283cc_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_d1bf7a9239c6ff2af9eace809e428fac89b8c66e8071b25f7fe4cc388807ae37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1bf7a9239c6ff2af9eace809e428fac89b8c66e8071b25f7fe4cc388807ae37->enter($__internal_d1bf7a9239c6ff2af9eace809e428fac89b8c66e8071b25f7fe4cc388807ae37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#CrearMovi\"> + Movimiento</button>
     ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Movimiento:new"));
        echo "
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
                echo "Yes";
            } else {
                echo "No";
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
                <td>
                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerMovi";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "idmov", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                          ";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Movimiento:show", array("id" => $this->getAttribute($context["movimiento"], "idmov", array()))));
            echo "
                  </div>

                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent;  border: none;\" data-toggle=\"modal\" data-target=\"#EditMovi";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimiento"], "idmov", array()), "html", null, true);
            echo "\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></button>
                          ";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Movimiento:edit", array("id" => $this->getAttribute($context["movimiento"], "idmov", array()))));
            echo "
                  </div>
                </td>
            </tr>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movimiento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>
    </div>
    </div>
";
        
        $__internal_d1bf7a9239c6ff2af9eace809e428fac89b8c66e8071b25f7fe4cc388807ae37->leave($__internal_d1bf7a9239c6ff2af9eace809e428fac89b8c66e8071b25f7fe4cc388807ae37_prof);

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
        return array (  157 => 51,  145 => 45,  141 => 44,  135 => 41,  131 => 40,  126 => 38,  122 => 37,  114 => 36,  110 => 35,  106 => 34,  102 => 33,  99 => 32,  95 => 31,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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
    <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#CrearMovi\"> + Movimiento</button>
     {{ render(controller('AppBundle:Movimiento:new' )) }}
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

                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent;  border: none;\" data-toggle=\"modal\" data-target=\"#EditMovi{{ movimiento.idmov }}\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></button>
                          {{ render(controller('AppBundle:Movimiento:edit', { 'id' : movimiento.idmov } )) }}
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
", "movimiento/Movimientoindex.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\app\\Resources\\views\\movimiento\\Movimientoindex.html.twig");
    }
}
