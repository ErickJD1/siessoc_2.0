<?php

/* :actividad:Actividadindex.html.twig */
class __TwigTemplate_7f8c2b5af88ae970329c6e0811ca72e389939d5715e1b0e3c713306fd61860df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":actividad:Actividadindex.html.twig", 1);
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
        $__internal_ba594976f684a2ecf04b42de433df2288fbadc024caee7766e70f3b157c12035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba594976f684a2ecf04b42de433df2288fbadc024caee7766e70f3b157c12035->enter($__internal_ba594976f684a2ecf04b42de433df2288fbadc024caee7766e70f3b157c12035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":actividad:Actividadindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba594976f684a2ecf04b42de433df2288fbadc024caee7766e70f3b157c12035->leave($__internal_ba594976f684a2ecf04b42de433df2288fbadc024caee7766e70f3b157c12035_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_35c8755a0c7a94944e3b0e56fe2d11b25b9400223e9c607555b4546c5385ce81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c8755a0c7a94944e3b0e56fe2d11b25b9400223e9c607555b4546c5385ce81->enter($__internal_35c8755a0c7a94944e3b0e56fe2d11b25b9400223e9c607555b4546c5385ce81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Actividad | ";
        
        $__internal_35c8755a0c7a94944e3b0e56fe2d11b25b9400223e9c607555b4546c5385ce81->leave($__internal_35c8755a0c7a94944e3b0e56fe2d11b25b9400223e9c607555b4546c5385ce81_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_df250dba1a2764c2dac2334acd0ffe677d778741249e0f637f29c219ea504b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df250dba1a2764c2dac2334acd0ffe677d778741249e0f637f29c219ea504b73->enter($__internal_df250dba1a2764c2dac2334acd0ffe677d778741249e0f637f29c219ea504b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Lista De Actividades ";
        
        $__internal_df250dba1a2764c2dac2334acd0ffe677d778741249e0f637f29c219ea504b73->leave($__internal_df250dba1a2764c2dac2334acd0ffe677d778741249e0f637f29c219ea504b73_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_79031f994d9c2101bd3a6f702a6d9861d4f2df028912f6d926ddbbc92874f984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79031f994d9c2101bd3a6f702a6d9861d4f2df028912f6d926ddbbc92874f984->enter($__internal_79031f994d9c2101bd3a6f702a6d9861d4f2df028912f6d926ddbbc92874f984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "actividad/new\" class=\"btn btn-primary btn-sm\">+ Agregar Actividad</a>
</div>
<br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
          <thead class=\"thead-light\">
            <tr>
                <th>ID</th>
                <th>Nombre De Actividad</th>
                <th>Descripcion</th>
                <th>Requisito</th>
                <th>Fecha De Actividad</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actividads"]) ? $context["actividads"] : $this->getContext($context, "actividads")));
        foreach ($context['_seq'] as $context["_key"] => $context["actividad"]) {
            // line 30
            echo "            <tr>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "idactividad", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "nomactividad", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "descripcionactividad", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            if ($this->getAttribute($context["actividad"], "requisito", array())) {
                echo "Requerida";
            } else {
                echo "No Requerida";
            }
            echo "</td>
                <td>";
            // line 35
            if ($this->getAttribute($context["actividad"], "fechaactividad", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["actividad"], "fechaactividad", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 36
            if ($this->getAttribute($context["actividad"], "estadoactividad", array())) {
                echo "Concluido";
            } else {
                echo "Pendiente";
            }
            echo "</td>
                <td>
                    <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#showBanco";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "idactividad", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                        ";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Actividad:show", array("id" => $this->getAttribute($context["actividad"], "idactividad", array()))));
            echo "
                    </div>
                
                    <div style=\"float:left;\" >
                         <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
            echo "actividad/edit/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "idactividad", array()), "html", null, true);
            echo "\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></a>
                    </div>
               
                </td>
            </tr>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actividad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "      </tbody>
  </table>
  </div>
  </div>
";
        
        $__internal_79031f994d9c2101bd3a6f702a6d9861d4f2df028912f6d926ddbbc92874f984->leave($__internal_79031f994d9c2101bd3a6f702a6d9861d4f2df028912f6d926ddbbc92874f984_prof);

    }

    public function getTemplateName()
    {
        return ":actividad:Actividadindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 50,  146 => 43,  139 => 39,  135 => 38,  126 => 36,  120 => 35,  112 => 34,  108 => 33,  104 => 32,  100 => 31,  97 => 30,  93 => 29,  73 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Actividad | {% endblock %}
{% block page_subtitle %}Lista De Actividades {% endblock %}

{% block page_content %}

<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <a href=\"{{ absolute_url(asset('')) }}actividad/new\" class=\"btn btn-primary btn-sm\">+ Agregar Actividad</a>
</div>
<br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
          <thead class=\"thead-light\">
            <tr>
                <th>ID</th>
                <th>Nombre De Actividad</th>
                <th>Descripcion</th>
                <th>Requisito</th>
                <th>Fecha De Actividad</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        {% for actividad in actividads %}
            <tr>
                <td>{{ actividad.idactividad }}</td>
                <td>{{ actividad.nomactividad }}</td>
                <td>{{ actividad.descripcionactividad }}</td>
                <td>{% if actividad.requisito %}Requerida{% else %}No Requerida{% endif %}</td>
                <td>{% if actividad.fechaactividad %}{{ actividad.fechaactividad|date('Y-m-d') }}{% endif %}</td>
                <td>{% if actividad.estadoactividad %}Concluido{% else %}Pendiente{% endif %}</td>
                <td>
                    <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#showBanco{{ actividad.idactividad }}\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                        {{ render(controller('AppBundle:Actividad:show', { 'id' : actividad.idactividad } )) }}
                    </div>
                
                    <div style=\"float:left;\" >
                         <a href=\"{{ absolute_url(asset('')) }}actividad/edit/{{ actividad.idactividad }}\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></a>
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
", ":actividad:Actividadindex.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/actividad/Actividadindex.html.twig");
    }
}
