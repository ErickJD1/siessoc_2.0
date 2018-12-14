<?php

/* cuenta/Cuentaindex.html.twig */
class __TwigTemplate_568dae28c826a0fd0087659a918ed700aca28ab25d2f9f7e839b1007e8587fb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "cuenta/Cuentaindex.html.twig", 1);
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
        $__internal_e26cd020f648afaf3142e1fa24b4ebe5cf6e63bbfec939c524a9f86c63427f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e26cd020f648afaf3142e1fa24b4ebe5cf6e63bbfec939c524a9f86c63427f79->enter($__internal_e26cd020f648afaf3142e1fa24b4ebe5cf6e63bbfec939c524a9f86c63427f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cuenta/Cuentaindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e26cd020f648afaf3142e1fa24b4ebe5cf6e63bbfec939c524a9f86c63427f79->leave($__internal_e26cd020f648afaf3142e1fa24b4ebe5cf6e63bbfec939c524a9f86c63427f79_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_e3620c8c84fbcbe94e567faedb0cd2f09b0f9044558c5c27408ba36ff3c3321b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3620c8c84fbcbe94e567faedb0cd2f09b0f9044558c5c27408ba36ff3c3321b->enter($__internal_e3620c8c84fbcbe94e567faedb0cd2f09b0f9044558c5c27408ba36ff3c3321b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Cuentas | ";
        
        $__internal_e3620c8c84fbcbe94e567faedb0cd2f09b0f9044558c5c27408ba36ff3c3321b->leave($__internal_e3620c8c84fbcbe94e567faedb0cd2f09b0f9044558c5c27408ba36ff3c3321b_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_bdac27c5547e3f5f518d81852e199843e7b83942a4eae9bd6b05d9789494f307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdac27c5547e3f5f518d81852e199843e7b83942a4eae9bd6b05d9789494f307->enter($__internal_bdac27c5547e3f5f518d81852e199843e7b83942a4eae9bd6b05d9789494f307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Catalogo De Cuentas ";
        
        $__internal_bdac27c5547e3f5f518d81852e199843e7b83942a4eae9bd6b05d9789494f307->leave($__internal_bdac27c5547e3f5f518d81852e199843e7b83942a4eae9bd6b05d9789494f307_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_6590480e9997b9889fcfe95550879a2cb9b88b5290e01246188d28f38d6acd5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6590480e9997b9889fcfe95550879a2cb9b88b5290e01246188d28f38d6acd5c->enter($__internal_6590480e9997b9889fcfe95550879a2cb9b88b5290e01246188d28f38d6acd5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cuenta_new");
        echo "\" class=\"btn btn-primary btn-sm\">+ Registrar Cuenta</a>
</div>
<br> <br>

      <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
              <thead class=\"thead-light\">
            <tr>
                <th>Numero Cuenta</th>
                <th>Nombre Cuenta</th>
                <th>Descripcion</th>
                <th>Banco</th>
                <th>Fecha Apertura</th>
                <th>Saldo Inicial</th>
                <th>Estado</th>
                <th>Usuario</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cuentas"]) ? $context["cuentas"] : $this->getContext($context, "cuentas")));
        foreach ($context['_seq'] as $context["_key"] => $context["cuentum"]) {
            // line 33
            echo "            <tr>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "numcuenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "nomcuenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "descripcioncuenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "idbanco", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            if ($this->getAttribute($context["cuentum"], "fechaapertura", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cuentum"], "fechaapertura", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "saldocuenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            if ($this->getAttribute($context["cuentum"], "estadocuenta", array())) {
                echo "Activa";
            } else {
                echo "Inactiva";
            }
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "idusuario", array()), "html", null, true);
            echo "</td>
                <td>
                  <div style=\"float:left;\"><button title=\"Eliminar Cuenta\" class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#deleteCuenta";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "idcuenta", array()), "html", null, true);
            echo "\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: crimson\"></i></button>
                          ";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Cuenta:showDelete", array("id" => $this->getAttribute($context["cuentum"], "idcuenta", array()))));
            echo "
                  </div>

                  <div style=\"float:left;\" >
                    <a title=\"Editar Cuenta\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cuenta_edit", array("id" => $this->getAttribute($context["cuentum"], "idcuenta", array()))), "html", null, true);
            echo "\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                  </div>
                  
                  <div style=\"float:left;\"><button title=\"Ver Cuenta\" class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerCuenta";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "idcuenta", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i></button>
                          ";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Cuenta:show", array("id" => $this->getAttribute($context["cuentum"], "idcuenta", array()))));
            echo "
                  </div>
                </td>

            </tr>

          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cuentum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </tbody>
    </table>
    </div>
    </div>
";
        
        $__internal_6590480e9997b9889fcfe95550879a2cb9b88b5290e01246188d28f38d6acd5c->leave($__internal_6590480e9997b9889fcfe95550879a2cb9b88b5290e01246188d28f38d6acd5c_prof);

    }

    public function getTemplateName()
    {
        return "cuenta/Cuentaindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 60,  163 => 52,  159 => 51,  153 => 48,  146 => 44,  142 => 43,  137 => 41,  129 => 40,  125 => 39,  119 => 38,  115 => 37,  111 => 36,  107 => 35,  103 => 34,  100 => 33,  96 => 32,  73 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Cuentas | {% endblock %}
{% block page_subtitle %}Catalogo De Cuentas {% endblock %}

{% block page_content %}

<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <a href=\"{{ path('cuenta_new') }}\" class=\"btn btn-primary btn-sm\">+ Registrar Cuenta</a>
</div>
<br> <br>

      <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
              <thead class=\"thead-light\">
            <tr>
                <th>Numero Cuenta</th>
                <th>Nombre Cuenta</th>
                <th>Descripcion</th>
                <th>Banco</th>
                <th>Fecha Apertura</th>
                <th>Saldo Inicial</th>
                <th>Estado</th>
                <th>Usuario</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

        {% for cuentum in cuentas %}
            <tr>
                <td>{{ cuentum.numcuenta }}</td>
                <td>{{ cuentum.nomcuenta }}</td>
                <td>{{ cuentum.descripcioncuenta }}</td>
                <td>{{ cuentum.idbanco }}</td>
                <td>{% if cuentum.fechaapertura %}{{ cuentum.fechaapertura|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ cuentum.saldocuenta }}</td>
                <td>{% if cuentum.estadocuenta %}Activa{% else %}Inactiva{% endif %}</td>
                <td>{{ cuentum.idusuario }}</td>
                <td>
                  <div style=\"float:left;\"><button title=\"Eliminar Cuenta\" class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#deleteCuenta{{ cuentum.idcuenta }}\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: crimson\"></i></button>
                          {{ render(controller('AppBundle:Cuenta:showDelete', { 'id' : cuentum.idcuenta } )) }}
                  </div>

                  <div style=\"float:left;\" >
                    <a title=\"Editar Cuenta\" href=\"{{ path('cuenta_edit',{ 'id' : cuentum.idcuenta }) }}\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                  </div>
                  
                  <div style=\"float:left;\"><button title=\"Ver Cuenta\" class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerCuenta{{ cuentum.idcuenta }}\"><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i></button>
                          {{ render(controller('AppBundle:Cuenta:show', { 'id' : cuentum.idcuenta } )) }}
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
", "cuenta/Cuentaindex.html.twig", "/home/ubuntu/workspace/app/Resources/views/cuenta/Cuentaindex.html.twig");
    }
}
