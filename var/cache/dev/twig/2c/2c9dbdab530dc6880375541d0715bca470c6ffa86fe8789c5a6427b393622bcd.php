<?php

/* expedientebecario/index.html.twig */
class __TwigTemplate_057e0a46be984a20ed9759ba8441f05e6f5b1fea1f0d673131d1e5d28d3576e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "expedientebecario/index.html.twig", 1);
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
        $__internal_1e87003fdc46b7366a88a333dd8602995667955c73b54e49918d846e1543cfb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e87003fdc46b7366a88a333dd8602995667955c73b54e49918d846e1543cfb1->enter($__internal_1e87003fdc46b7366a88a333dd8602995667955c73b54e49918d846e1543cfb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expedientebecario/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e87003fdc46b7366a88a333dd8602995667955c73b54e49918d846e1543cfb1->leave($__internal_1e87003fdc46b7366a88a333dd8602995667955c73b54e49918d846e1543cfb1_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_28954371ff6a72c2729bd522b7472409798aaf4dbe06b1fbccda5c4ebe7eee26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28954371ff6a72c2729bd522b7472409798aaf4dbe06b1fbccda5c4ebe7eee26->enter($__internal_28954371ff6a72c2729bd522b7472409798aaf4dbe06b1fbccda5c4ebe7eee26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Expediente";
        
        $__internal_28954371ff6a72c2729bd522b7472409798aaf4dbe06b1fbccda5c4ebe7eee26->leave($__internal_28954371ff6a72c2729bd522b7472409798aaf4dbe06b1fbccda5c4ebe7eee26_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_c1467116aaef4f63232883bac2b144fa5be04e296e2497c7c3a1c39ae2426cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1467116aaef4f63232883bac2b144fa5be04e296e2497c7c3a1c39ae2426cd5->enter($__internal_c1467116aaef4f63232883bac2b144fa5be04e296e2497c7c3a1c39ae2426cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        
        $__internal_c1467116aaef4f63232883bac2b144fa5be04e296e2497c7c3a1c39ae2426cd5->leave($__internal_c1467116aaef4f63232883bac2b144fa5be04e296e2497c7c3a1c39ae2426cd5_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_9d7c748b6007daae3eb0dfbd73dbfbcf52538d8b91034f0967334f79a141e738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d7c748b6007daae3eb0dfbd73dbfbcf52538d8b91034f0967334f79a141e738->enter($__internal_9d7c748b6007daae3eb0dfbd73dbfbcf52538d8b91034f0967334f79a141e738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "
    <div class=\"box box-primary\">
        <div style=\"width:90%; margin-left:5%; margin-top: 2% \">

            ";
        // line 13
        echo "            <br> 

            <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
                <thead class=\"thead-light\">
                    <tr>

                        <th>Becario</th>
                        <th>Carrera</th>
                        <th>Universidad</th>
                        <th>Estado</th>
                        <th>Descipción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["expedientebecarios"]) ? $context["expedientebecarios"] : $this->getContext($context, "expedientebecarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["expedientebecario"]) {
            // line 29
            echo "                        <tr>

                            <td>";
            // line 31
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["expedientebecario"], "idusuario", array()), "getFirstName", array(), "method") . " ") . $this->getAttribute($this->getAttribute($context["expedientebecario"], "idusuario", array()), "getLastName", array(), "method")), "html", null, true);
            echo "</td>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["expedientebecario"], "carreraexpestudiarbecario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["expedientebecario"], "universidadexpbecario", array()), "html", null, true);
            echo "</td>              
                            <td>";
            // line 34
            if (($this->getAttribute($context["expedientebecario"], "estadoexpbecario", array()) == 1)) {
                echo "Activo";
            } else {
                echo "Inactivo";
            }
            echo "</td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["expedientebecario"], "antecedentes", array()), "html", null, true);
            echo "</td>
                            <td>
                                <div class=\"col col-md-3\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerExp";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["expedientebecario"], "idexpbecario", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i></button>          
                                        ";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Expedientebecario:show", array("id" => $this->getAttribute($context["expedientebecario"], "idexpbecario", array()))));
            echo "

                                </div>

                                <div class=\"col col-sm-4\" >
                                    <a title=\"Editar Expediente\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("expedientebecario_edit", array("id" => $this->getAttribute($context["expedientebecario"], "idexpbecario", array()))), "html", null, true);
            echo "\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                                </div>     
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expedientebecario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                </tbody>
            </table>
        </div>
    </div>


";
        
        $__internal_9d7c748b6007daae3eb0dfbd73dbfbcf52538d8b91034f0967334f79a141e738->leave($__internal_9d7c748b6007daae3eb0dfbd73dbfbcf52538d8b91034f0967334f79a141e738_prof);

    }

    public function getTemplateName()
    {
        return "expedientebecario/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 48,  133 => 43,  125 => 38,  121 => 37,  116 => 35,  108 => 34,  104 => 33,  100 => 32,  96 => 31,  92 => 29,  88 => 28,  71 => 13,  65 => 6,  59 => 5,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %}Expediente{% endblock %}
{% block page_subtitle %}{% endblock %}
{% block page_content %}

    <div class=\"box box-primary\">
        <div style=\"width:90%; margin-left:5%; margin-top: 2% \">

            {# <div align=\"left\">
                 <a style=\"font-size: 15px\" href=\"{{ path('movimiento_new') }}\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Registrar Movimiento</a>
             </div>#}
            <br> 

            <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
                <thead class=\"thead-light\">
                    <tr>

                        <th>Becario</th>
                        <th>Carrera</th>
                        <th>Universidad</th>
                        <th>Estado</th>
                        <th>Descipción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    {% for expedientebecario in expedientebecarios %}
                        <tr>

                            <td>{{ expedientebecario.idusuario.getFirstName()~' '~expedientebecario.idusuario.getLastName() }}</td>
                            <td>{{ expedientebecario.carreraexpestudiarbecario }}</td>
                            <td>{{ expedientebecario.universidadexpbecario }}</td>              
                            <td>{% if(expedientebecario.estadoexpbecario==1) %}Activo{%else%}Inactivo{%endif%}</td>
                            <td>{{ expedientebecario.antecedentes }}</td>
                            <td>
                                <div class=\"col col-md-3\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerExp{{ expedientebecario.idexpbecario}}\"><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i></button>          
                                        {{ render(controller('AppBundle:Expedientebecario:show', { 'id' : expedientebecario.idexpbecario } )) }}

                                </div>

                                <div class=\"col col-sm-4\" >
                                    <a title=\"Editar Expediente\" href=\"{{ path('expedientebecario_edit',{ 'id' : expedientebecario.idexpbecario }) }}\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                                </div>     
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>


{% endblock %}
", "expedientebecario/index.html.twig", "/home/ubuntu/workspace/app/Resources/views/expedientebecario/index.html.twig");
    }
}
