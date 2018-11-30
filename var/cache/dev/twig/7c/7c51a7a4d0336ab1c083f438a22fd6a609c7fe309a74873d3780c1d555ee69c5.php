<?php

/* :tipomovimiento:TipoMovimientoindex.html.twig */
class __TwigTemplate_efa80e17a0227ab8f6c63d04c4051230055172aba28d37faa5bbc73ad2798ada extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":tipomovimiento:TipoMovimientoindex.html.twig", 1);
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
        $__internal_2aaf7fa1d958be3e76d0cdca3ad18797505ce9fea223744c893cdeb2a09a2177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aaf7fa1d958be3e76d0cdca3ad18797505ce9fea223744c893cdeb2a09a2177->enter($__internal_2aaf7fa1d958be3e76d0cdca3ad18797505ce9fea223744c893cdeb2a09a2177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipomovimiento:TipoMovimientoindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2aaf7fa1d958be3e76d0cdca3ad18797505ce9fea223744c893cdeb2a09a2177->leave($__internal_2aaf7fa1d958be3e76d0cdca3ad18797505ce9fea223744c893cdeb2a09a2177_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_2a2f81ded9ae034a6bc659da71f4ab8b6a5b6e732a2c3d27381e4631052f1612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a2f81ded9ae034a6bc659da71f4ab8b6a5b6e732a2c3d27381e4631052f1612->enter($__internal_2a2f81ded9ae034a6bc659da71f4ab8b6a5b6e732a2c3d27381e4631052f1612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Tipos De Movimiento | ";
        
        $__internal_2a2f81ded9ae034a6bc659da71f4ab8b6a5b6e732a2c3d27381e4631052f1612->leave($__internal_2a2f81ded9ae034a6bc659da71f4ab8b6a5b6e732a2c3d27381e4631052f1612_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_41778b2f9e1388a243b44552e86792f4c68925bdb09ab41bf945d0c74e82fe59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41778b2f9e1388a243b44552e86792f4c68925bdb09ab41bf945d0c74e82fe59->enter($__internal_41778b2f9e1388a243b44552e86792f4c68925bdb09ab41bf945d0c74e82fe59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Catalogo De Movimientos ";
        
        $__internal_41778b2f9e1388a243b44552e86792f4c68925bdb09ab41bf945d0c74e82fe59->leave($__internal_41778b2f9e1388a243b44552e86792f4c68925bdb09ab41bf945d0c74e82fe59_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_2c733bd50f47c0ee6a0aedfa1b09774d41432f0348a238db2811d25f4ab00aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c733bd50f47c0ee6a0aedfa1b09774d41432f0348a238db2811d25f4ab00aac->enter($__internal_2c733bd50f47c0ee6a0aedfa1b09774d41432f0348a238db2811d25f4ab00aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "tipomovimiento/new\" class=\"btn btn-primary btn-sm\">+ Nuevo Movimiento</a>
</div>
<br> <br>

      <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:90%\" id=\"tabelMahasiswa\">
              <thead class=\"thead-light\">
            <tr>
                <th>ID</th>
                <th>Movimiento</th>
                <th>Descripcion</th>
                <th>Estado</th>
                <th>Accion</th>
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipomovimiento"], "idtipomov", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipomovimiento"], "nombretipo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipomovimiento"], "descripciontipomov", array()), "html", null, true);
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
                    
                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerMov";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipomovimiento"], "idtipomov", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                        ";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Tipomovimiento:show", array("id" => $this->getAttribute($context["tipomovimiento"], "idtipomov", array()))));
            echo "
                   </div>

                <div style=\"float:left;\" >
                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
            echo "tipomovimiento/edit/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipomovimiento"], "idtipomov", array()), "html", null, true);
            echo "\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></a>
                </div>
                </td>
            </tr>
        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipomovimiento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>
    </div>
    </div>
";
        
        $__internal_2c733bd50f47c0ee6a0aedfa1b09774d41432f0348a238db2811d25f4ab00aac->leave($__internal_2c733bd50f47c0ee6a0aedfa1b09774d41432f0348a238db2811d25f4ab00aac_prof);

    }

    public function getTemplateName()
    {
        return ":tipomovimiento:TipoMovimientoindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 46,  131 => 40,  124 => 36,  120 => 35,  110 => 32,  106 => 31,  102 => 30,  98 => 29,  95 => 28,  91 => 27,  73 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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
    <a href=\"{{ absolute_url(asset('')) }}tipomovimiento/new\" class=\"btn btn-primary btn-sm\">+ Nuevo Movimiento</a>
</div>
<br> <br>

      <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:90%\" id=\"tabelMahasiswa\">
              <thead class=\"thead-light\">
            <tr>
                <th>ID</th>
                <th>Movimiento</th>
                <th>Descripcion</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        {% for tipomovimiento in tipomovimientos %}
            <tr>
                <td>{{ tipomovimiento.idtipomov }}</td>
                <td>{{ tipomovimiento.nombretipo }}</td>
                <td>{{ tipomovimiento.descripciontipomov }}</td>
                <td>{% if tipomovimiento.estadotipomov %}Activo{% else %}Inactivo{% endif %}</td>
                <td>
                    
                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerMov{{ tipomovimiento.idtipomov }}\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                        {{ render(controller('AppBundle:Tipomovimiento:show', { 'id' : tipomovimiento.idtipomov } )) }}
                   </div>

                <div style=\"float:left;\" >
                <a href=\"{{ absolute_url(asset('')) }}tipomovimiento/edit/{{ tipomovimiento.idtipomov }}\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></a>
                </div>
                </td>
            </tr>
        
        {% endfor %}
        </tbody>
    </table>
    </div>
    </div>
{% endblock %}
", ":tipomovimiento:TipoMovimientoindex.html.twig", "/home/ubuntu/workspace/app/Resources/views/tipomovimiento/TipoMovimientoindex.html.twig");
    }
}
