<?php

/* tipomovimiento/TipoMovimientoindex.html.twig */
class __TwigTemplate_24c9769ed09c30c52559f081aee2602695805cfa4b40f53d395ff5e7916fa6a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "tipomovimiento/TipoMovimientoindex.html.twig", 1);
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
        $__internal_ed552f00e179b41c0ce547b2775c559929fc4a39e8f05606a4ddfd5ba929967c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed552f00e179b41c0ce547b2775c559929fc4a39e8f05606a4ddfd5ba929967c->enter($__internal_ed552f00e179b41c0ce547b2775c559929fc4a39e8f05606a4ddfd5ba929967c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipomovimiento/TipoMovimientoindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed552f00e179b41c0ce547b2775c559929fc4a39e8f05606a4ddfd5ba929967c->leave($__internal_ed552f00e179b41c0ce547b2775c559929fc4a39e8f05606a4ddfd5ba929967c_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_8179c81d24655653eb0d3ebcf43cd57a192c5a4f0334ffdf96ab4001203e0e50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8179c81d24655653eb0d3ebcf43cd57a192c5a4f0334ffdf96ab4001203e0e50->enter($__internal_8179c81d24655653eb0d3ebcf43cd57a192c5a4f0334ffdf96ab4001203e0e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Tipos De Movimiento | ";
        
        $__internal_8179c81d24655653eb0d3ebcf43cd57a192c5a4f0334ffdf96ab4001203e0e50->leave($__internal_8179c81d24655653eb0d3ebcf43cd57a192c5a4f0334ffdf96ab4001203e0e50_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_5c9255955bf6fc33407127c29e288897dd5b09ed8a0b13e938e73772efad74bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c9255955bf6fc33407127c29e288897dd5b09ed8a0b13e938e73772efad74bb->enter($__internal_5c9255955bf6fc33407127c29e288897dd5b09ed8a0b13e938e73772efad74bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Catalogo De Movimientos ";
        
        $__internal_5c9255955bf6fc33407127c29e288897dd5b09ed8a0b13e938e73772efad74bb->leave($__internal_5c9255955bf6fc33407127c29e288897dd5b09ed8a0b13e938e73772efad74bb_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_cf27534d74a9f074dc3f9f8ec0b05a4ba69458d7b3aef74c96bfdcf0db0c3695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf27534d74a9f074dc3f9f8ec0b05a4ba69458d7b3aef74c96bfdcf0db0c3695->enter($__internal_cf27534d74a9f074dc3f9f8ec0b05a4ba69458d7b3aef74c96bfdcf0db0c3695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

 <div align=\"left\">
                <a style=\"font-size: 15px\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipomovimiento_new");
        echo "\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Tipo De Movimiento</a>
            </div>
<br> <br>

      <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
              <thead class=\"thead-light\">
            <tr>
                <th><center>Movimiento</center></th>
                <th><center>Descripcion</center></th>
                <th><center>Clasificación</center></th>
                <th><center>Estado</center></th>
                <th><center>Accion</center></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipomovimientos"]) ? $context["tipomovimientos"] : $this->getContext($context, "tipomovimientos")));
        foreach ($context['_seq'] as $context["_key"] => $context["tipomovimiento"]) {
            // line 28
            echo "            <tr>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipomovimiento"], "nombretipo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipomovimiento"], "descripciontipomov", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            if ($this->getAttribute($context["tipomovimiento"], "clasificacion", array())) {
                echo "Ingreso";
            } else {
                echo "Gasto";
            }
            echo "</td>
                <td>";
            // line 32
            if ($this->getAttribute($context["tipomovimiento"], "estadotipomov", array())) {
                echo "Activo";
            } else {
                echo "Inactivo";
            }
            echo "</td>
                <td>
                    
                  <center>
                        <div class=\"row\">
                        <div align=\"center\" class=\"col col-sm-4\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#miventanadelete";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipomovimiento"], "idtipomov", array()), "html", null, true);
            echo "\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: crimson\"></i></button>
                                ";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Tipomovimiento:showdelete", array("id" => $this->getAttribute($context["tipomovimiento"], "idtipomov", array()))));
            echo "
                        </div>

                        <div align=\"center\" class=\"col col-sm-4\" >
                            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipomovimiento_edit", array("id" => $this->getAttribute($context["tipomovimiento"], "idtipomov", array()))), "html", null, true);
            echo "\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                        </div>
                        
                        <div align=\"center\" class=\"col col-sm-4\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#miventana";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipomovimiento"], "idtipomov", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i></button>
                                ";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Tipomovimiento:show", array("id" => $this->getAttribute($context["tipomovimiento"], "idtipomov", array()))));
            echo "
                        </div>
                        </div>
                    </center>
                </td>
            </tr>
        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipomovimiento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </tbody>
    </table>
    </div>
    </div>
";
        
        $__internal_cf27534d74a9f074dc3f9f8ec0b05a4ba69458d7b3aef74c96bfdcf0db0c3695->leave($__internal_cf27534d74a9f074dc3f9f8ec0b05a4ba69458d7b3aef74c96bfdcf0db0c3695_prof);

    }

    public function getTemplateName()
    {
        return "tipomovimiento/TipoMovimientoindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 54,  147 => 46,  143 => 45,  137 => 42,  130 => 38,  126 => 37,  114 => 32,  106 => 31,  102 => 30,  98 => 29,  95 => 28,  91 => 27,  73 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Tipos De Movimiento | {% endblock %}
{% block page_subtitle %}Catalogo De Movimientos {% endblock %}

{% block page_content %}

<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

 <div align=\"left\">
                <a style=\"font-size: 15px\" href=\"{{ path('tipomovimiento_new') }}\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Tipo De Movimiento</a>
            </div>
<br> <br>

      <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
              <thead class=\"thead-light\">
            <tr>
                <th><center>Movimiento</center></th>
                <th><center>Descripcion</center></th>
                <th><center>Clasificación</center></th>
                <th><center>Estado</center></th>
                <th><center>Accion</center></th>
            </tr>
        </thead>
        <tbody>
        {% for tipomovimiento in tipomovimientos %}
            <tr>
                <td>{{ tipomovimiento.nombretipo }}</td>
                <td>{{ tipomovimiento.descripciontipomov }}</td>
                <td>{% if tipomovimiento.clasificacion %}Ingreso{% else %}Gasto{% endif %}</td>
                <td>{% if tipomovimiento.estadotipomov %}Activo{% else %}Inactivo{% endif %}</td>
                <td>
                    
                  <center>
                        <div class=\"row\">
                        <div align=\"center\" class=\"col col-sm-4\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#miventanadelete{{ tipomovimiento.idtipomov }}\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: crimson\"></i></button>
                                {{ render(controller('AppBundle:Tipomovimiento:showdelete', { 'id' : tipomovimiento.idtipomov } )) }}
                        </div>

                        <div align=\"center\" class=\"col col-sm-4\" >
                            <a href=\"{{ path('tipomovimiento_edit',{ 'id' : tipomovimiento.idtipomov }) }}\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                        </div>
                        
                        <div align=\"center\" class=\"col col-sm-4\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#miventana{{ tipomovimiento.idtipomov}}\"><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i></button>
                                {{ render(controller('AppBundle:Tipomovimiento:show', { 'id' : tipomovimiento.idtipomov } )) }}
                        </div>
                        </div>
                    </center>
                </td>
            </tr>
        
        {% endfor %}
        </tbody>
    </table>
    </div>
    </div>
{% endblock %}
", "tipomovimiento/TipoMovimientoindex.html.twig", "/home/ubuntu/workspace/app/Resources/views/tipomovimiento/TipoMovimientoindex.html.twig");
    }
}
