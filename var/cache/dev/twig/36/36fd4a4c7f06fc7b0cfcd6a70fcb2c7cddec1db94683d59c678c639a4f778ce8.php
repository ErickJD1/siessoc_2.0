<?php

/* tipocuenta/TipoCuentaindex.html.twig */
class __TwigTemplate_204a734adc9d6075f06e3d49b5a009e4bdf162f915cacc44bdd06e11fbf9b608 extends Twig_Template
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
        $__internal_a23dad287c672acf3885310607d62e120271faead5c0596dc13516828bab1432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23dad287c672acf3885310607d62e120271faead5c0596dc13516828bab1432->enter($__internal_a23dad287c672acf3885310607d62e120271faead5c0596dc13516828bab1432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipocuenta/TipoCuentaindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a23dad287c672acf3885310607d62e120271faead5c0596dc13516828bab1432->leave($__internal_a23dad287c672acf3885310607d62e120271faead5c0596dc13516828bab1432_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_babd32dc7df66bbc840242eb634f6d4d805de4731f0bc2f32962d1f69e77244b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_babd32dc7df66bbc840242eb634f6d4d805de4731f0bc2f32962d1f69e77244b->enter($__internal_babd32dc7df66bbc840242eb634f6d4d805de4731f0bc2f32962d1f69e77244b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Tipo Cuenta | ";
        
        $__internal_babd32dc7df66bbc840242eb634f6d4d805de4731f0bc2f32962d1f69e77244b->leave($__internal_babd32dc7df66bbc840242eb634f6d4d805de4731f0bc2f32962d1f69e77244b_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_c3417973473b92c786905d8da7b2871b95a3311838ec74763f1513312ce89fda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3417973473b92c786905d8da7b2871b95a3311838ec74763f1513312ce89fda->enter($__internal_c3417973473b92c786905d8da7b2871b95a3311838ec74763f1513312ce89fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Catalogo Tipo Cuenta ";
        
        $__internal_c3417973473b92c786905d8da7b2871b95a3311838ec74763f1513312ce89fda->leave($__internal_c3417973473b92c786905d8da7b2871b95a3311838ec74763f1513312ce89fda_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_3cf2cc20864979bb11f03a5ad0c1d19d3d21a222c018187ed7913aee4d1dfc73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf2cc20864979bb11f03a5ad0c1d19d3d21a222c018187ed7913aee4d1dfc73->enter($__internal_3cf2cc20864979bb11f03a5ad0c1d19d3d21a222c018187ed7913aee4d1dfc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#crearCuenta\"> + Tipo Cuenta</button>
     ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Tipocuenta:new"));
        echo "
</div>
<br> </br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:90%\" id=\"tabelMahasiswa\">
        <thead class=\"thead-light\">
            <tr>
                <th>ID</th>
                <th>Tipo Cuenta</th>
                <th>Descripcion</th>
                <th>Estado Cuenta</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipocuentas"]) ? $context["tipocuentas"] : $this->getContext($context, "tipocuentas")));
        foreach ($context['_seq'] as $context["_key"] => $context["tipocuentum"]) {
            // line 30
            echo "            <tr>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "Nombrecuenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "descripcion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            if ($this->getAttribute($context["tipocuentum"], "estadotipocuenta", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#miventana";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                          ";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Tipocuenta:show", array("id" => $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()))));
            echo "
                  </div>

                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent;  border: none;\" data-toggle=\"modal\" data-target=\"#editcuenta";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()), "html", null, true);
            echo "\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></button>
                          ";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Tipocuenta:edit", array("id" => $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()))));
            echo "
                  </div>




                </td>
            </tr>

          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipocuentum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </tbody>
    </table>
    </div>
    </div>
";
        
        $__internal_3cf2cc20864979bb11f03a5ad0c1d19d3d21a222c018187ed7913aee4d1dfc73->leave($__internal_3cf2cc20864979bb11f03a5ad0c1d19d3d21a222c018187ed7913aee4d1dfc73_prof);

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
        return array (  152 => 52,  135 => 41,  131 => 40,  125 => 37,  121 => 36,  112 => 34,  108 => 33,  104 => 32,  100 => 31,  97 => 30,  93 => 29,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Tipo Cuenta | {% endblock %}
{% block page_subtitle %}Catalogo Tipo Cuenta {% endblock %}

{% block page_content %}

<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#crearCuenta\"> + Tipo Cuenta</button>
     {{ render(controller('AppBundle:Tipocuenta:new' )) }}
</div>
<br> </br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:90%\" id=\"tabelMahasiswa\">
        <thead class=\"thead-light\">
            <tr>
                <th>ID</th>
                <th>Tipo Cuenta</th>
                <th>Descripcion</th>
                <th>Estado Cuenta</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

        {% for tipocuentum in tipocuentas %}
            <tr>
                <td>{{ tipocuentum.idtipocuenta }}</td>
                <td>{{ tipocuentum.Nombrecuenta }}</td>
                <td>{{ tipocuentum.descripcion }}</td>
                <td>{% if tipocuentum.estadotipocuenta %}Yes{% else %}No{% endif %}</td>
                <td>
                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#miventana{{ tipocuentum.idtipocuenta }}\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                          {{ render(controller('AppBundle:Tipocuenta:show', { 'id' : tipocuentum.idtipocuenta } )) }}
                  </div>

                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent;  border: none;\" data-toggle=\"modal\" data-target=\"#editcuenta{{ tipocuentum.idtipocuenta }}\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></button>
                          {{ render(controller('AppBundle:Tipocuenta:edit', { 'id' : tipocuentum.idtipocuenta } )) }}
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
", "tipocuenta/TipoCuentaindex.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\tipocuenta\\TipoCuentaindex.html.twig");
    }
}
