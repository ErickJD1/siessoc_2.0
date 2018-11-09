<?php

/* :actividad:index.html.twig */
class __TwigTemplate_abce25b00b03af724d92757c2643e0b740d3fb5e0e16f293dad144d87515b31c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":actividad:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_7b072352959b442f7a3a3587eef603b541ccf90d3844dee917405b7b36883406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b072352959b442f7a3a3587eef603b541ccf90d3844dee917405b7b36883406->enter($__internal_7b072352959b442f7a3a3587eef603b541ccf90d3844dee917405b7b36883406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":actividad:index.html.twig"));

        // line 3
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", ":actividad:index.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b072352959b442f7a3a3587eef603b541ccf90d3844dee917405b7b36883406->leave($__internal_7b072352959b442f7a3a3587eef603b541ccf90d3844dee917405b7b36883406_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_83822b85bcb531c2f3010a06b2ee11ebd99d6bc165b633997895e191a9524625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83822b85bcb531c2f3010a06b2ee11ebd99d6bc165b633997895e191a9524625->enter($__internal_83822b85bcb531c2f3010a06b2ee11ebd99d6bc165b633997895e191a9524625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
 ";
        
        $__internal_83822b85bcb531c2f3010a06b2ee11ebd99d6bc165b633997895e191a9524625->leave($__internal_83822b85bcb531c2f3010a06b2ee11ebd99d6bc165b633997895e191a9524625_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_51b9498f0ab7666e1139c4d1ded2a3d507b7420859ad119d914565d39b3fa212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51b9498f0ab7666e1139c4d1ded2a3d507b7420859ad119d914565d39b3fa212->enter($__internal_51b9498f0ab7666e1139c4d1ded2a3d507b7420859ad119d914565d39b3fa212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Actividades | ";
        
        $__internal_51b9498f0ab7666e1139c4d1ded2a3d507b7420859ad119d914565d39b3fa212->leave($__internal_51b9498f0ab7666e1139c4d1ded2a3d507b7420859ad119d914565d39b3fa212_prof);

    }

    // line 8
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_df7dfbfd814e828157953df9fc0501c4862d6e623a4d904db785a8485168847e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df7dfbfd814e828157953df9fc0501c4862d6e623a4d904db785a8485168847e->enter($__internal_df7dfbfd814e828157953df9fc0501c4862d6e623a4d904db785a8485168847e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Gestion de Actividades ";
        
        $__internal_df7dfbfd814e828157953df9fc0501c4862d6e623a4d904db785a8485168847e->leave($__internal_df7dfbfd814e828157953df9fc0501c4862d6e623a4d904db785a8485168847e_prof);

    }

    // line 10
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_1c8b19111b43e0e13a3a4267fb0bbf2a8fcd51d794b2423b812df49cea338fee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8b19111b43e0e13a3a4267fb0bbf2a8fcd51d794b2423b812df49cea338fee->enter($__internal_1c8b19111b43e0e13a3a4267fb0bbf2a8fcd51d794b2423b812df49cea338fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 11
        echo "
    <div class=\"box box-primary\">
   <div style=\"width:90%; margin-left:5%; margin-top: 2% \">
    
        <div align=\"left\">
            <button class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#create1\"> + Actividad</button>
         ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Actividad:new"));
        echo "
        </div>
        <br> </br>

    <h1>Actividads list</h1>

 <table id=\"tabelMahasiswa\" class=\"table table-bordered table-hover table-striped\">

        <thead>
            <tr>
                <th>Nomactividad</th>
                <th>Fechaactividad</th>
                <th>Descripcionactividad</th>
                <th>Validacion</th>
                <th>Becario</th>
                <th>Estado</th>
                <th>Idactividad</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actividads"]) ? $context["actividads"] : $this->getContext($context, "actividads")));
        foreach ($context['_seq'] as $context["_key"] => $context["actividad"]) {
            // line 39
            echo "            <tr>
                <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actividad_show", array("id" => $this->getAttribute($context["actividad"], "idactividad", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "nomactividad", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 41
            if ($this->getAttribute($context["actividad"], "fechaactividad", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["actividad"], "fechaactividad", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "descripcionactividad", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "validacion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "becario", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "estado", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "idactividad", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actividad_show", array("id" => $this->getAttribute($context["actividad"], "idactividad", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actividad_edit", array("id" => $this->getAttribute($context["actividad"], "idactividad", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actividad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "  </tbody>

        </table>

        </div>

    </div>                    
    

        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actividad_new");
        echo "\">Create a new actividad</a>
        </li>
    </ul>
";
        
        $__internal_1c8b19111b43e0e13a3a4267fb0bbf2a8fcd51d794b2423b812df49cea338fee->leave($__internal_1c8b19111b43e0e13a3a4267fb0bbf2a8fcd51d794b2423b812df49cea338fee_prof);

    }

    public function getTemplateName()
    {
        return ":actividad:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 73,  178 => 59,  166 => 53,  160 => 50,  153 => 46,  149 => 45,  145 => 44,  141 => 43,  137 => 42,  131 => 41,  125 => 40,  122 => 39,  118 => 38,  94 => 17,  86 => 11,  80 => 10,  68 => 8,  56 => 7,  46 => 5,  40 => 4,  33 => 1,  31 => 3,  11 => 1,);
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

{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}
{% block stylesheets %}
    {{ parent() }}
 {%endblock%}
{% block page_title %} Actividades | {% endblock %}
{% block page_subtitle %}Gestion de Actividades {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\">
   <div style=\"width:90%; margin-left:5%; margin-top: 2% \">
    
        <div align=\"left\">
            <button class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#create1\"> + Actividad</button>
         {{ render(controller('AppBundle:Actividad:new' )) }}
        </div>
        <br> </br>

    <h1>Actividads list</h1>

 <table id=\"tabelMahasiswa\" class=\"table table-bordered table-hover table-striped\">

        <thead>
            <tr>
                <th>Nomactividad</th>
                <th>Fechaactividad</th>
                <th>Descripcionactividad</th>
                <th>Validacion</th>
                <th>Becario</th>
                <th>Estado</th>
                <th>Idactividad</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for actividad in actividads %}
            <tr>
                <td><a href=\"{{ path('actividad_show', { 'id': actividad.idactividad }) }}\">{{ actividad.nomactividad }}</a></td>
                <td>{% if actividad.fechaactividad %}{{ actividad.fechaactividad|date('Y-m-d') }}{% endif %}</td>
                <td>{{ actividad.descripcionactividad }}</td>
                <td>{{ actividad.validacion }}</td>
                <td>{{ actividad.becario }}</td>
                <td>{{ actividad.estado }}</td>
                <td>{{ actividad.idactividad }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('actividad_show', { 'id': actividad.idactividad }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('actividad_edit', { 'id': actividad.idactividad }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
  </tbody>

        </table>

        </div>

    </div>                    
    

        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('actividad_new') }}\">Create a new actividad</a>
        </li>
    </ul>
{% endblock %}
", ":actividad:index.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/actividad/index.html.twig");
    }
}
