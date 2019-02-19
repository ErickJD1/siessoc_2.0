<?php

/* proyectoserviciosocial/index.html.twig */
class __TwigTemplate_1cd15361122a08fa649e677d0f6c35a1f40c60b7169d6395e63539ab2345d2cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "proyectoserviciosocial/index.html.twig", 1);
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
        $__internal_4edd256e342f1ce4efe32072dd52dc57efb3ab64718eaf590b63ff19c38df4b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4edd256e342f1ce4efe32072dd52dc57efb3ab64718eaf590b63ff19c38df4b2->enter($__internal_4edd256e342f1ce4efe32072dd52dc57efb3ab64718eaf590b63ff19c38df4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "proyectoserviciosocial/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4edd256e342f1ce4efe32072dd52dc57efb3ab64718eaf590b63ff19c38df4b2->leave($__internal_4edd256e342f1ce4efe32072dd52dc57efb3ab64718eaf590b63ff19c38df4b2_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_bed879aa9826d22bd2b446da1ab01eebea5aa4b847d3851763ecd504750dac34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed879aa9826d22bd2b446da1ab01eebea5aa4b847d3851763ecd504750dac34->enter($__internal_bed879aa9826d22bd2b446da1ab01eebea5aa4b847d3851763ecd504750dac34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Proyeto Servicio Social| ";
        
        $__internal_bed879aa9826d22bd2b446da1ab01eebea5aa4b847d3851763ecd504750dac34->leave($__internal_bed879aa9826d22bd2b446da1ab01eebea5aa4b847d3851763ecd504750dac34_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_e8042c49ef5bce9ff4e3aa5a11ae0eea621f47e33f6c7e83a45fb8efc3159620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8042c49ef5bce9ff4e3aa5a11ae0eea621f47e33f6c7e83a45fb8efc3159620->enter($__internal_e8042c49ef5bce9ff4e3aa5a11ae0eea621f47e33f6c7e83a45fb8efc3159620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Lista De Proyectos ";
        
        $__internal_e8042c49ef5bce9ff4e3aa5a11ae0eea621f47e33f6c7e83a45fb8efc3159620->leave($__internal_e8042c49ef5bce9ff4e3aa5a11ae0eea621f47e33f6c7e83a45fb8efc3159620_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_06c4b7ecf18edd45a3e51c3defcc3e0eadf9ce5c3def6230568a515d126a0e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c4b7ecf18edd45a3e51c3defcc3e0eadf9ce5c3def6230568a515d126a0e53->enter($__internal_06c4b7ecf18edd45a3e51c3defcc3e0eadf9ce5c3def6230568a515d126a0e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_06c4b7ecf18edd45a3e51c3defcc3e0eadf9ce5c3def6230568a515d126a0e53->leave($__internal_06c4b7ecf18edd45a3e51c3defcc3e0eadf9ce5c3def6230568a515d126a0e53_prof);

    }

    public function getTemplateName()
    {
        return "proyectoserviciosocial/index.html.twig";
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
{% endblock %}", "proyectoserviciosocial/index.html.twig", "/home/ubuntu/workspace/app/Resources/views/proyectoserviciosocial/index.html.twig");
    }
}
