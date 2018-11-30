<?php

/* :proyectoserviciosocial:index.html.twig */
class __TwigTemplate_77dc6de7500cfaaf24dbd49c131c12f1a48c1d2a7698affc271caa763e95798b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":proyectoserviciosocial:index.html.twig", 1);
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
        $__internal_c118c8b80d6d2cb7bbeb6a1b15bcb7a3dd8d86302075590d989586ec66528f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c118c8b80d6d2cb7bbeb6a1b15bcb7a3dd8d86302075590d989586ec66528f72->enter($__internal_c118c8b80d6d2cb7bbeb6a1b15bcb7a3dd8d86302075590d989586ec66528f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proyectoserviciosocial:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c118c8b80d6d2cb7bbeb6a1b15bcb7a3dd8d86302075590d989586ec66528f72->leave($__internal_c118c8b80d6d2cb7bbeb6a1b15bcb7a3dd8d86302075590d989586ec66528f72_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_0cb15c0ef46dbc32a4a679569f984ed5363c2b87af6922a29504d5af412e11ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb15c0ef46dbc32a4a679569f984ed5363c2b87af6922a29504d5af412e11ef->enter($__internal_0cb15c0ef46dbc32a4a679569f984ed5363c2b87af6922a29504d5af412e11ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Proyeto Servicio Social| ";
        
        $__internal_0cb15c0ef46dbc32a4a679569f984ed5363c2b87af6922a29504d5af412e11ef->leave($__internal_0cb15c0ef46dbc32a4a679569f984ed5363c2b87af6922a29504d5af412e11ef_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_25538c343942bdfea4c06065dec34d8b9a66c6042415e8bd8ae199df556eaa61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25538c343942bdfea4c06065dec34d8b9a66c6042415e8bd8ae199df556eaa61->enter($__internal_25538c343942bdfea4c06065dec34d8b9a66c6042415e8bd8ae199df556eaa61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Lista De Proyectos ";
        
        $__internal_25538c343942bdfea4c06065dec34d8b9a66c6042415e8bd8ae199df556eaa61->leave($__internal_25538c343942bdfea4c06065dec34d8b9a66c6042415e8bd8ae199df556eaa61_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_1be7e035a88029fa3655636e97934daf88d5e840289e08b5d9a7b4aedb852d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be7e035a88029fa3655636e97934daf88d5e840289e08b5d9a7b4aedb852d15->enter($__internal_1be7e035a88029fa3655636e97934daf88d5e840289e08b5d9a7b4aedb852d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#proyectoSS\"> + Proyecto Servicio Social</button>
     ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Proyectoserviciosocial:new"));
        echo "
</div>
<br> </br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
       
        <thead>
            <tr>
                <th>Nombreproyecto</th>
                <th>Descripcionproyecto</th>
                <th>Encargadoproyecto</th>
                <th>Lugarproyecto</th>
                <th>Estadoproyecto</th>
                <th>Idproyectservisocial</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proyectoserviciosocials"]) ? $context["proyectoserviciosocials"] : $this->getContext($context, "proyectoserviciosocials")));
        foreach ($context['_seq'] as $context["_key"] => $context["proyectoserviciosocial"]) {
            // line 32
            echo "            <tr>
                <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proyectoserviciosocial_show", array("id" => $this->getAttribute($context["proyectoserviciosocial"], "idproyectservisocial", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["proyectoserviciosocial"], "nombreproyecto", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["proyectoserviciosocial"], "descripcionproyecto", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["proyectoserviciosocial"], "encargadoproyecto", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["proyectoserviciosocial"], "lugarproyecto", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            if ($this->getAttribute($context["proyectoserviciosocial"], "estadoproyecto", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["proyectoserviciosocial"], "idproyectservisocial", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proyectoserviciosocial_show", array("id" => $this->getAttribute($context["proyectoserviciosocial"], "idproyectservisocial", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proyectoserviciosocial_edit", array("id" => $this->getAttribute($context["proyectoserviciosocial"], "idproyectservisocial", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyectoserviciosocial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>

   </table>
    </div>
    </div>
";
        
        $__internal_1be7e035a88029fa3655636e97934daf88d5e840289e08b5d9a7b4aedb852d15->leave($__internal_1be7e035a88029fa3655636e97934daf88d5e840289e08b5d9a7b4aedb852d15_prof);

    }

    public function getTemplateName()
    {
        return ":proyectoserviciosocial:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 51,  141 => 45,  135 => 42,  128 => 38,  120 => 37,  116 => 36,  112 => 35,  108 => 34,  102 => 33,  99 => 32,  95 => 31,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Proyeto Servicio Social| {% endblock %}
{% block page_subtitle %}Lista De Proyectos {% endblock %}

{% block page_content %}

<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#proyectoSS\"> + Proyecto Servicio Social</button>
     {{ render(controller('AppBundle:Proyectoserviciosocial:new' )) }}
</div>
<br> </br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
       
        <thead>
            <tr>
                <th>Nombreproyecto</th>
                <th>Descripcionproyecto</th>
                <th>Encargadoproyecto</th>
                <th>Lugarproyecto</th>
                <th>Estadoproyecto</th>
                <th>Idproyectservisocial</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for proyectoserviciosocial in proyectoserviciosocials %}
            <tr>
                <td><a href=\"{{ path('proyectoserviciosocial_show', { 'id': proyectoserviciosocial.idproyectservisocial }) }}\">{{ proyectoserviciosocial.nombreproyecto }}</a></td>
                <td>{{ proyectoserviciosocial.descripcionproyecto }}</td>
                <td>{{ proyectoserviciosocial.encargadoproyecto }}</td>
                <td>{{ proyectoserviciosocial.lugarproyecto }}</td>
                <td>{% if proyectoserviciosocial.estadoproyecto %}Yes{% else %}No{% endif %}</td>
                <td>{{ proyectoserviciosocial.idproyectservisocial }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('proyectoserviciosocial_show', { 'id': proyectoserviciosocial.idproyectservisocial }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('proyectoserviciosocial_edit', { 'id': proyectoserviciosocial.idproyectservisocial }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

   </table>
    </div>
    </div>
{% endblock %}", ":proyectoserviciosocial:index.html.twig", "/home/ubuntu/workspace/app/Resources/views/proyectoserviciosocial/index.html.twig");
    }
}
