<?php

/* colaboracionmonetaria/Colaboracionmonetariaindex.html.twig */
class __TwigTemplate_93b5e2bafb8744b5ffe6b4531586ad067285963007768724161e93aedb59abd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "colaboracionmonetaria/Colaboracionmonetariaindex.html.twig", 1);
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
        $__internal_720eeb37ea50a9f4d27157e215d2625140dead2e08a62bb31059e37c52aa371e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_720eeb37ea50a9f4d27157e215d2625140dead2e08a62bb31059e37c52aa371e->enter($__internal_720eeb37ea50a9f4d27157e215d2625140dead2e08a62bb31059e37c52aa371e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "colaboracionmonetaria/Colaboracionmonetariaindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_720eeb37ea50a9f4d27157e215d2625140dead2e08a62bb31059e37c52aa371e->leave($__internal_720eeb37ea50a9f4d27157e215d2625140dead2e08a62bb31059e37c52aa371e_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_c03ec8b470c593940b12a5e55b4a2e1e2ecd1a11d3860408d5939a5916d7ca11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c03ec8b470c593940b12a5e55b4a2e1e2ecd1a11d3860408d5939a5916d7ca11->enter($__internal_c03ec8b470c593940b12a5e55b4a2e1e2ecd1a11d3860408d5939a5916d7ca11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Colaboracion | ";
        
        $__internal_c03ec8b470c593940b12a5e55b4a2e1e2ecd1a11d3860408d5939a5916d7ca11->leave($__internal_c03ec8b470c593940b12a5e55b4a2e1e2ecd1a11d3860408d5939a5916d7ca11_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_6400ca10e18e7847725be00dae2f548c0a9e0871650b04343ec7d397a7d97de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6400ca10e18e7847725be00dae2f548c0a9e0871650b04343ec7d397a7d97de7->enter($__internal_6400ca10e18e7847725be00dae2f548c0a9e0871650b04343ec7d397a7d97de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Catalogo de tipos de colaboracion ";
        
        $__internal_6400ca10e18e7847725be00dae2f548c0a9e0871650b04343ec7d397a7d97de7->leave($__internal_6400ca10e18e7847725be00dae2f548c0a9e0871650b04343ec7d397a7d97de7_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4c3db225c4df7e222a636f6f9ec18877c2f6689503f826e40b1ffdeeb0adca0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c3db225c4df7e222a636f6f9ec18877c2f6689503f826e40b1ffdeeb0adca0f->enter($__internal_4c3db225c4df7e222a636f6f9ec18877c2f6689503f826e40b1ffdeeb0adca0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
     <a style=\"font-size: 15px\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("colaboracionmonetaria_new");
        echo "\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Registrar Tipo De Colaboracion</a>
</div>
<br> </br>

        <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
            <thead class=\"thead-light\">
            <tr>
                <th>Usuario</th>
                <th>Tipo Colaboracion</th>
                <th>Monto Fijo De Colaboracion</th>
                <th>Saldo</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colaboracionmonetarias"]) ? $context["colaboracionmonetarias"] : $this->getContext($context, "colaboracionmonetarias")));
        foreach ($context['_seq'] as $context["_key"] => $context["colaboracionmonetaria"]) {
            // line 29
            echo "            <tr>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["colaboracionmonetaria"], "idusuario", array()), "html", null, true);
            echo "</td>
                <td>
                    <div style=\"float:left;\"><a class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerAlumnos";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["colaboracionmonetaria"], "idcolaboracion", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["colaboracionmonetaria"], "descripcioncolaboracion", array()), "html", null, true);
            echo "</a>
                        <div id=\"Pagos";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["colaboracionmonetaria"], "idcolaboracion", array()), "html", null, true);
            echo "}}\"> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Pagocolaboracion:index", array("id" => $this->getAttribute($context["colaboracionmonetaria"], "idcolaboracion", array()))));
            echo " </div>
                  </div>
                </td>
                
                <td>";
            // line 37
            echo twig_escape_filter($this->env, ("\$" . $this->getAttribute($context["colaboracionmonetaria"], "montomescolaboracion", array())), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, ("\$" . $this->getAttribute($context["colaboracionmonetaria"], "saldocolaboracion", array())), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            if ($this->getAttribute($context["colaboracionmonetaria"], "estadocolaboracion", array())) {
                echo "Activa";
            } else {
                echo "Baja";
            }
            echo "</td>
                  <td> 
                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerTipocta";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["colaboracionmonetaria"], "idcolaboracion", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i></button>
                          ";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Colaboracionmonetaria:show", array("id" => $this->getAttribute($context["colaboracionmonetaria"], "idcolaboracion", array()))));
            echo "
                  </div>
                       
                  <div style=\"float:left;\" >
                    <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("colaboracionmonetaria_edit", array("id" => $this->getAttribute($context["colaboracionmonetaria"], "idcolaboracion", array()))), "html", null, true);
            echo "\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                  </div>

                   <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#deletetcolaboracion";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["colaboracionmonetaria"], "idcolaboracion", array()), "html", null, true);
            echo "\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: crimson\"></i></button>
                          ";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Colaboracionmonetaria:showdelete", array("id" => $this->getAttribute($context["colaboracionmonetaria"], "idcolaboracion", array()))));
            echo "
                  </div>
                  
                </td>
            </tr>
         
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['colaboracionmonetaria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
    </table>
</div>
</div>
";
        
        $__internal_4c3db225c4df7e222a636f6f9ec18877c2f6689503f826e40b1ffdeeb0adca0f->leave($__internal_4c3db225c4df7e222a636f6f9ec18877c2f6689503f826e40b1ffdeeb0adca0f_prof);

    }

    public function getTemplateName()
    {
        return "colaboracionmonetaria/Colaboracionmonetariaindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 57,  157 => 50,  153 => 49,  147 => 46,  140 => 42,  136 => 41,  127 => 39,  123 => 38,  119 => 37,  110 => 33,  104 => 32,  99 => 30,  96 => 29,  92 => 28,  73 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Colaboracion | {% endblock %}
{% block page_subtitle %}Catalogo de tipos de colaboracion {% endblock %}

{% block page_content %}

<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
     <a style=\"font-size: 15px\" href=\"{{ path('colaboracionmonetaria_new') }}\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Registrar Tipo De Colaboracion</a>
</div>
<br> </br>

        <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
            <thead class=\"thead-light\">
            <tr>
                <th>Usuario</th>
                <th>Tipo Colaboracion</th>
                <th>Monto Fijo De Colaboracion</th>
                <th>Saldo</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        {% for colaboracionmonetaria in colaboracionmonetarias %}
            <tr>
                <td>{{ colaboracionmonetaria.idusuario }}</td>
                <td>
                    <div style=\"float:left;\"><a class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerAlumnos{{ colaboracionmonetaria.idcolaboracion }}\">{{ colaboracionmonetaria.descripcioncolaboracion }}</a>
                        <div id=\"Pagos{{colaboracionmonetaria.idcolaboracion}}}}\"> {{ render(controller('AppBundle:Pagocolaboracion:index', { 'id': colaboracionmonetaria.idcolaboracion } )) }} </div>
                  </div>
                </td>
                
                <td>{{ \"\$\"~colaboracionmonetaria.montomescolaboracion }}</td>
                <td>{{ \"\$\"~colaboracionmonetaria.saldocolaboracion }}</td>
                <td>{% if colaboracionmonetaria.estadocolaboracion %}Activa{% else %}Baja{% endif %}</td>
                  <td> 
                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerTipocta{{ colaboracionmonetaria.idcolaboracion }}\"><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i></button>
                          {{ render(controller('AppBundle:Colaboracionmonetaria:show', { 'id' : colaboracionmonetaria.idcolaboracion } )) }}
                  </div>
                       
                  <div style=\"float:left;\" >
                    <a href=\"{{ path('colaboracionmonetaria_edit',{ 'id' : colaboracionmonetaria.idcolaboracion }) }}\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                  </div>

                   <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#deletetcolaboracion{{ colaboracionmonetaria.idcolaboracion }}\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: crimson\"></i></button>
                          {{ render(controller('AppBundle:Colaboracionmonetaria:showdelete', { 'id' : colaboracionmonetaria.idcolaboracion } )) }}
                  </div>
                  
                </td>
            </tr>
         
        {% endfor %}
        </tbody>
    </table>
</div>
</div>
{% endblock %}
", "colaboracionmonetaria/Colaboracionmonetariaindex.html.twig", "/home/ubuntu/workspace/app/Resources/views/colaboracionmonetaria/Colaboracionmonetariaindex.html.twig");
    }
}
