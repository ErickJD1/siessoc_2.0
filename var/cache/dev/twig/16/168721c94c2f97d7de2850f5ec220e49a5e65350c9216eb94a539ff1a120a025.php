<?php

/* :proyectoserviciosocial:index.html.twig */
class __TwigTemplate_7f95b47a83a9f6bd066201359abf37fa9f6450f8ddc19d3a40d455731f01095b extends Twig_Template
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
        $__internal_50690cbd6486e22b5888540407dea7d48d1faaa234680b9f68997413f5746063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50690cbd6486e22b5888540407dea7d48d1faaa234680b9f68997413f5746063->enter($__internal_50690cbd6486e22b5888540407dea7d48d1faaa234680b9f68997413f5746063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proyectoserviciosocial:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50690cbd6486e22b5888540407dea7d48d1faaa234680b9f68997413f5746063->leave($__internal_50690cbd6486e22b5888540407dea7d48d1faaa234680b9f68997413f5746063_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_2c8870a0391aeb6742982b148498fc51fb2435ea77f8394d3dce27c573843191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c8870a0391aeb6742982b148498fc51fb2435ea77f8394d3dce27c573843191->enter($__internal_2c8870a0391aeb6742982b148498fc51fb2435ea77f8394d3dce27c573843191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Proyeto Servicio Social| ";
        
        $__internal_2c8870a0391aeb6742982b148498fc51fb2435ea77f8394d3dce27c573843191->leave($__internal_2c8870a0391aeb6742982b148498fc51fb2435ea77f8394d3dce27c573843191_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_5040354b333a61720ad865d9fc4f4c79d086af5cee9ca9327943f83f80e973eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5040354b333a61720ad865d9fc4f4c79d086af5cee9ca9327943f83f80e973eb->enter($__internal_5040354b333a61720ad865d9fc4f4c79d086af5cee9ca9327943f83f80e973eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Lista De Proyectos ";
        
        $__internal_5040354b333a61720ad865d9fc4f4c79d086af5cee9ca9327943f83f80e973eb->leave($__internal_5040354b333a61720ad865d9fc4f4c79d086af5cee9ca9327943f83f80e973eb_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c61cebfcacca17a2b760ddf676586f5118d004ae7489ddd2759905ed51d9541d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c61cebfcacca17a2b760ddf676586f5118d004ae7489ddd2759905ed51d9541d->enter($__internal_c61cebfcacca17a2b760ddf676586f5118d004ae7489ddd2759905ed51d9541d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_c61cebfcacca17a2b760ddf676586f5118d004ae7489ddd2759905ed51d9541d->leave($__internal_c61cebfcacca17a2b760ddf676586f5118d004ae7489ddd2759905ed51d9541d_prof);

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
{% endblock %}", ":proyectoserviciosocial:index.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/proyectoserviciosocial/index.html.twig");
    }
}
