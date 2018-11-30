<?php

/* :solicitudbecario:Solicitudbecarioindex.html.twig */
class __TwigTemplate_644973d871884165c31740155efa501b7d42cd98e9bc74dc384b12fe8416d37a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":solicitudbecario:Solicitudbecarioindex.html.twig", 1);
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
        $__internal_ab65f684a3dbae9a79922f7d73b5d004948466627fcd8c138803d2ba469358ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab65f684a3dbae9a79922f7d73b5d004948466627fcd8c138803d2ba469358ed->enter($__internal_ab65f684a3dbae9a79922f7d73b5d004948466627fcd8c138803d2ba469358ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":solicitudbecario:Solicitudbecarioindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab65f684a3dbae9a79922f7d73b5d004948466627fcd8c138803d2ba469358ed->leave($__internal_ab65f684a3dbae9a79922f7d73b5d004948466627fcd8c138803d2ba469358ed_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_8cad936bb7f2a688526943e1c26aecdfa32b5763a09ecd09152a32480ae91508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cad936bb7f2a688526943e1c26aecdfa32b5763a09ecd09152a32480ae91508->enter($__internal_8cad936bb7f2a688526943e1c26aecdfa32b5763a09ecd09152a32480ae91508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Solicitud | ";
        
        $__internal_8cad936bb7f2a688526943e1c26aecdfa32b5763a09ecd09152a32480ae91508->leave($__internal_8cad936bb7f2a688526943e1c26aecdfa32b5763a09ecd09152a32480ae91508_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_87fddecde7c13e86b707fedbf866cc7c184afd813db117c848149a951a0806de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87fddecde7c13e86b707fedbf866cc7c184afd813db117c848149a951a0806de->enter($__internal_87fddecde7c13e86b707fedbf866cc7c184afd813db117c848149a951a0806de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Lista De solicitudes ";
        
        $__internal_87fddecde7c13e86b707fedbf866cc7c184afd813db117c848149a951a0806de->leave($__internal_87fddecde7c13e86b707fedbf866cc7c184afd813db117c848149a951a0806de_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_5da2f382eb161a7d22d2cc3ccb54737bd59a67f0292da1f9d8a4d12fadf9933c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da2f382eb161a7d22d2cc3ccb54737bd59a67f0292da1f9d8a4d12fadf9933c->enter($__internal_5da2f382eb161a7d22d2cc3ccb54737bd59a67f0292da1f9d8a4d12fadf9933c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#CrearSoli\"> + Solicitud</button>
     ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:solicitudbecario:new"));
        echo "
</div>
<br> </br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:90%\" id=\"tabelMahasiswa\">
        <thead class=\"thead-light\">
            <tr>
                <th>ID</th>
                <th>Telefonos</th>
                <th>Ingresos familiares</th>
                <th>Miembros familiares</th>
                <th>Tipo Solicitud</th>
                <th>Carrera A Estudiar</th>
                <th>Universidad</th>
                <th>Monto De La Matricula</th>
                <th>Cuotas Mensuales</th>
                <th>Duracion De La Carrera</th>
                <th>Trabajo</th>
                <th>Documento De Identidad</th>
                <th>Año de ingreso</th>
                <th>Año de finalizacion</th>
                <th>Cantidad de hermanos</th>
                <th>Nombre del padre</th>
                <th>Nombre de la madre</th>
                <th>En emergencias Llamar</th>
                <th>Telefono Del Becario</th>
                <th>Miembros de la familia</th>
                <th>Direccion</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["solicitudbecarios"]) ? $context["solicitudbecarios"] : $this->getContext($context, "solicitudbecarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["solicitudbecario"]) {
            // line 48
            echo "            <tr>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "idsolibecario", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "telefonosolibecario", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "ingresossolifamiliabecario", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "miembrossolifamiliabecario", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "tiposolicasabecario", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "carrerasoliestudiarbecario", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "universidadsolibecario", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "montosolimatriculabecario", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "cuotasolimensualbecario", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "duracionsolicarrerabecario", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            if ($this->getAttribute($context["solicitudbecario"], "trabajosolibecario", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "docsoliidentidadbecario", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 61
            if ($this->getAttribute($context["solicitudbecario"], "aniosoliingresobecario", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["solicitudbecario"], "aniosoliingresobecario", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 62
            if ($this->getAttribute($context["solicitudbecario"], "aniosolifinalizacionbecario", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["solicitudbecario"], "aniosolifinalizacionbecario", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "cantsolihermanosbecario", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "nomsolipadrebecario", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "nomsolimadrebecario", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "telsoliemergenciabecario", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "telsolipersonalbecario", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "miembrossolifamilibecario", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudbecario"], "direccionsolibecario", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 70
            if ($this->getAttribute($context["solicitudbecario"], "estadosolibecario", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#miventana";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocuentum"]) ? $context["tipocuentum"] : $this->getContext($context, "tipocuentum")), "idtipocuenta", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                          ";
            // line 73
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Tipocuenta:show", array("id" => $this->getAttribute((isset($context["tipocuentum"]) ? $context["tipocuentum"] : $this->getContext($context, "tipocuentum")), "idtipocuenta", array()))));
            echo "
                  </div>

                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent;  border: none;\" data-toggle=\"modal\" data-target=\"#editcuenta";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocuentum"]) ? $context["tipocuentum"] : $this->getContext($context, "tipocuentum")), "idtipocuenta", array()), "html", null, true);
            echo "\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></button>
                          ";
            // line 77
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Tipocuenta:edit", array("id" => $this->getAttribute((isset($context["tipocuentum"]) ? $context["tipocuentum"] : $this->getContext($context, "tipocuentum")), "idtipocuenta", array()))));
            echo "
                  </div>

                </td>
            </tr>

          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitudbecario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "        </tbody>
    </table>
    </div>
    </div>
  ";
        
        $__internal_5da2f382eb161a7d22d2cc3ccb54737bd59a67f0292da1f9d8a4d12fadf9933c->leave($__internal_5da2f382eb161a7d22d2cc3ccb54737bd59a67f0292da1f9d8a4d12fadf9933c_prof);

    }

    public function getTemplateName()
    {
        return ":solicitudbecario:Solicitudbecarioindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 85,  233 => 77,  229 => 76,  223 => 73,  219 => 72,  210 => 70,  206 => 69,  202 => 68,  198 => 67,  194 => 66,  190 => 65,  186 => 64,  182 => 63,  176 => 62,  170 => 61,  166 => 60,  158 => 59,  154 => 58,  150 => 57,  146 => 56,  142 => 55,  138 => 54,  134 => 53,  130 => 52,  126 => 51,  122 => 50,  118 => 49,  115 => 48,  111 => 47,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Solicitud | {% endblock %}
{% block page_subtitle %}Lista De solicitudes {% endblock %}

{% block page_content %}

<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#CrearSoli\"> + Solicitud</button>
     {{ render(controller('AppBundle:solicitudbecario:new' )) }}
</div>
<br> </br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:90%\" id=\"tabelMahasiswa\">
        <thead class=\"thead-light\">
            <tr>
                <th>ID</th>
                <th>Telefonos</th>
                <th>Ingresos familiares</th>
                <th>Miembros familiares</th>
                <th>Tipo Solicitud</th>
                <th>Carrera A Estudiar</th>
                <th>Universidad</th>
                <th>Monto De La Matricula</th>
                <th>Cuotas Mensuales</th>
                <th>Duracion De La Carrera</th>
                <th>Trabajo</th>
                <th>Documento De Identidad</th>
                <th>Año de ingreso</th>
                <th>Año de finalizacion</th>
                <th>Cantidad de hermanos</th>
                <th>Nombre del padre</th>
                <th>Nombre de la madre</th>
                <th>En emergencias Llamar</th>
                <th>Telefono Del Becario</th>
                <th>Miembros de la familia</th>
                <th>Direccion</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

        {% for solicitudbecario in solicitudbecarios %}
            <tr>
                <td>{{ solicitudbecario.idsolibecario }}</td>
                <td>{{ solicitudbecario.telefonosolibecario }}</td>
                <td>{{ solicitudbecario.ingresossolifamiliabecario }}</td>
                <td>{{ solicitudbecario.miembrossolifamiliabecario }}</td>
                <td>{{ solicitudbecario.tiposolicasabecario }}</td>
                <td>{{ solicitudbecario.carrerasoliestudiarbecario }}</td>
                <td>{{ solicitudbecario.universidadsolibecario }}</td>
                <td>{{ solicitudbecario.montosolimatriculabecario }}</td>
                <td>{{ solicitudbecario.cuotasolimensualbecario }}</td>
                <td>{{ solicitudbecario.duracionsolicarrerabecario }}</td>
                <td>{% if solicitudbecario.trabajosolibecario %}Yes{% else %}No{% endif %}</td>
                <td>{{ solicitudbecario.docsoliidentidadbecario }}</td>
                <td>{% if solicitudbecario.aniosoliingresobecario %}{{ solicitudbecario.aniosoliingresobecario|date('Y-m-d') }}{% endif %}</td>
                <td>{% if solicitudbecario.aniosolifinalizacionbecario %}{{ solicitudbecario.aniosolifinalizacionbecario|date('Y-m-d') }}{% endif %}</td>
                <td>{{ solicitudbecario.cantsolihermanosbecario }}</td>
                <td>{{ solicitudbecario.nomsolipadrebecario }}</td>
                <td>{{ solicitudbecario.nomsolimadrebecario }}</td>
                <td>{{ solicitudbecario.telsoliemergenciabecario }}</td>
                <td>{{ solicitudbecario.telsolipersonalbecario }}</td>
                <td>{{ solicitudbecario.miembrossolifamilibecario }}</td>
                <td>{{ solicitudbecario.direccionsolibecario }}</td>
                <td>{% if solicitudbecario.estadosolibecario %}Yes{% else %}No{% endif %}</td>
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
", ":solicitudbecario:Solicitudbecarioindex.html.twig", "/home/ubuntu/workspace/app/Resources/views/solicitudbecario/Solicitudbecarioindex.html.twig");
    }
}
