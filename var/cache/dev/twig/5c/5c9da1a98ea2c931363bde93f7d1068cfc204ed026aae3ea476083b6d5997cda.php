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
        $__internal_3575ac610326c21234ab86aa78c88d10a7d7a221b76ab967263c68291844117c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3575ac610326c21234ab86aa78c88d10a7d7a221b76ab967263c68291844117c->enter($__internal_3575ac610326c21234ab86aa78c88d10a7d7a221b76ab967263c68291844117c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cuenta/Cuentaindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3575ac610326c21234ab86aa78c88d10a7d7a221b76ab967263c68291844117c->leave($__internal_3575ac610326c21234ab86aa78c88d10a7d7a221b76ab967263c68291844117c_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_f0c35d35974028e1a511ecd96d5fd22c1358273846611541a087d6297e017d5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c35d35974028e1a511ecd96d5fd22c1358273846611541a087d6297e017d5a->enter($__internal_f0c35d35974028e1a511ecd96d5fd22c1358273846611541a087d6297e017d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Cuentas | ";
        
        $__internal_f0c35d35974028e1a511ecd96d5fd22c1358273846611541a087d6297e017d5a->leave($__internal_f0c35d35974028e1a511ecd96d5fd22c1358273846611541a087d6297e017d5a_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_c0810c0f4ba8864f9cce5e1f969c3703b9cd944e1e6f2cd30c3f3383e0d7eed9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0810c0f4ba8864f9cce5e1f969c3703b9cd944e1e6f2cd30c3f3383e0d7eed9->enter($__internal_c0810c0f4ba8864f9cce5e1f969c3703b9cd944e1e6f2cd30c3f3383e0d7eed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Catalogo De Cuentas ";
        
        $__internal_c0810c0f4ba8864f9cce5e1f969c3703b9cd944e1e6f2cd30c3f3383e0d7eed9->leave($__internal_c0810c0f4ba8864f9cce5e1f969c3703b9cd944e1e6f2cd30c3f3383e0d7eed9_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4df3bbd2e887104a40430e56bd7914e7cf9b66c84e670cfd19b06fbfad882f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df3bbd2e887104a40430e56bd7914e7cf9b66c84e670cfd19b06fbfad882f91->enter($__internal_4df3bbd2e887104a40430e56bd7914e7cf9b66c84e670cfd19b06fbfad882f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <a style=\"font-size: 20px\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cuenta_new");
        echo "\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Cuenta</a>
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
                <th>Saldo Actual</th>
                <th>Estado</th>
                <th>Usuario</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cuentas"]) ? $context["cuentas"] : $this->getContext($context, "cuentas")));
        foreach ($context['_seq'] as $context["_key"] => $context["cuentum"]) {
            // line 34
            echo "            <tr>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "numcuenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "nomcuenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "descripcioncuenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "idbanco", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            if ($this->getAttribute($context["cuentum"], "fechaapertura", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cuentum"], "fechaapertura", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "saldocuenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "saldoactual", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            if ($this->getAttribute($context["cuentum"], "estadocuenta", array())) {
                echo "Activa";
            } else {
                echo "Inactiva";
            }
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "idusuario", array()), "html", null, true);
            echo "</td>
                <td>
                  <div style=\"float:left;\"><button title=\"Eliminar Cuenta\" class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#deleteCuenta";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "idcuenta", array()), "html", null, true);
            echo "\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: crimson\"></i></button>
                          ";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Cuenta:showDelete", array("id" => $this->getAttribute($context["cuentum"], "idcuenta", array()))));
            echo "
                  </div>

                  <div style=\"float:left;\" >
                    <a title=\"Editar Cuenta\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cuenta_edit", array("id" => $this->getAttribute($context["cuentum"], "idcuenta", array()))), "html", null, true);
            echo "\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                  </div>
                  
                  <div style=\"float:left;\"><button title=\"Ver Cuenta\" class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerCuenta";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "idcuenta", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i></button>
                          ";
            // line 54
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
        // line 62
        echo "        </tbody>
    </table>
    </div>
    </div>
";
        
        $__internal_4df3bbd2e887104a40430e56bd7914e7cf9b66c84e670cfd19b06fbfad882f91->leave($__internal_4df3bbd2e887104a40430e56bd7914e7cf9b66c84e670cfd19b06fbfad882f91_prof);

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
        return array (  182 => 62,  168 => 54,  164 => 53,  158 => 50,  151 => 46,  147 => 45,  142 => 43,  134 => 42,  130 => 41,  126 => 40,  120 => 39,  116 => 38,  112 => 37,  108 => 36,  104 => 35,  101 => 34,  97 => 33,  73 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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
    <a style=\"font-size: 20px\" href=\"{{ path('cuenta_new') }}\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Cuenta</a>
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
                <th>Saldo Actual</th>
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
                <td>{{ cuentum.saldoactual }}</td>
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
