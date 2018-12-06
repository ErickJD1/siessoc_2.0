<?php

/* :tipomovimiento:TipoMovimientoindex.html.twig */
class __TwigTemplate_f5936d01f3c77c01de4fdffd82003a29de4786c6d0a9e7cc1396236667c47492 extends Twig_Template
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
        $__internal_d727ab0e6962811564ce115e940e81238e5659879269bd81bd3e397edb0ab39d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d727ab0e6962811564ce115e940e81238e5659879269bd81bd3e397edb0ab39d->enter($__internal_d727ab0e6962811564ce115e940e81238e5659879269bd81bd3e397edb0ab39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipomovimiento:TipoMovimientoindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d727ab0e6962811564ce115e940e81238e5659879269bd81bd3e397edb0ab39d->leave($__internal_d727ab0e6962811564ce115e940e81238e5659879269bd81bd3e397edb0ab39d_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_408e92b9211a62a1f957e6eaab3266600419d5b87389f3c166ab33b909fcef23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_408e92b9211a62a1f957e6eaab3266600419d5b87389f3c166ab33b909fcef23->enter($__internal_408e92b9211a62a1f957e6eaab3266600419d5b87389f3c166ab33b909fcef23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Tipos De Movimiento | ";
        
        $__internal_408e92b9211a62a1f957e6eaab3266600419d5b87389f3c166ab33b909fcef23->leave($__internal_408e92b9211a62a1f957e6eaab3266600419d5b87389f3c166ab33b909fcef23_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_83da9bcda6acecf2ba48675e647259dec149bb94d8c98769ac23b75c78428ccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83da9bcda6acecf2ba48675e647259dec149bb94d8c98769ac23b75c78428ccf->enter($__internal_83da9bcda6acecf2ba48675e647259dec149bb94d8c98769ac23b75c78428ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Catalogo De Movimientos ";
        
        $__internal_83da9bcda6acecf2ba48675e647259dec149bb94d8c98769ac23b75c78428ccf->leave($__internal_83da9bcda6acecf2ba48675e647259dec149bb94d8c98769ac23b75c78428ccf_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_b85e9f7bc8a4322ce17406250feddc324aa24ae3c99655b867677b53a53164a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b85e9f7bc8a4322ce17406250feddc324aa24ae3c99655b867677b53a53164a0->enter($__internal_b85e9f7bc8a4322ce17406250feddc324aa24ae3c99655b867677b53a53164a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_b85e9f7bc8a4322ce17406250feddc324aa24ae3c99655b867677b53a53164a0->leave($__internal_b85e9f7bc8a4322ce17406250feddc324aa24ae3c99655b867677b53a53164a0_prof);

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
", ":tipomovimiento:TipoMovimientoindex.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/tipomovimiento/TipoMovimientoindex.html.twig");
    }
}
