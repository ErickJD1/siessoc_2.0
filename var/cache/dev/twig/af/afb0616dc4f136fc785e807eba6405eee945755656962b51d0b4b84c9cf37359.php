<?php

/* :solicitudss:index.html.twig */
class __TwigTemplate_502caeba61425db00ec6353ae93de81f99d944bbb55fd2b80b3302c1e99c4760 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":solicitudss:index.html.twig", 1);
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
        $__internal_5bd590f42e03b5633ca73724d767f32fde51a5720be2a7054472fcccb6c90be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd590f42e03b5633ca73724d767f32fde51a5720be2a7054472fcccb6c90be2->enter($__internal_5bd590f42e03b5633ca73724d767f32fde51a5720be2a7054472fcccb6c90be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":solicitudss:index.html.twig"));

        // line 3
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", ":solicitudss:index.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bd590f42e03b5633ca73724d767f32fde51a5720be2a7054472fcccb6c90be2->leave($__internal_5bd590f42e03b5633ca73724d767f32fde51a5720be2a7054472fcccb6c90be2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0000985ed80a206ba80cece134cbb88e9c091ee52e878f47442e35a1de2ba80e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0000985ed80a206ba80cece134cbb88e9c091ee52e878f47442e35a1de2ba80e->enter($__internal_0000985ed80a206ba80cece134cbb88e9c091ee52e878f47442e35a1de2ba80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
 ";
        
        $__internal_0000985ed80a206ba80cece134cbb88e9c091ee52e878f47442e35a1de2ba80e->leave($__internal_0000985ed80a206ba80cece134cbb88e9c091ee52e878f47442e35a1de2ba80e_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_7090368966e1857cef01fdfd1694a566b37433c0973445fd33b00f985a4251f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7090368966e1857cef01fdfd1694a566b37433c0973445fd33b00f985a4251f3->enter($__internal_7090368966e1857cef01fdfd1694a566b37433c0973445fd33b00f985a4251f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Servicio Social | ";
        
        $__internal_7090368966e1857cef01fdfd1694a566b37433c0973445fd33b00f985a4251f3->leave($__internal_7090368966e1857cef01fdfd1694a566b37433c0973445fd33b00f985a4251f3_prof);

    }

    // line 8
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_9315e2d7be1baa415c1ec03c6ccba815e73e4df340e7391f42c67af99d3bed9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9315e2d7be1baa415c1ec03c6ccba815e73e4df340e7391f42c67af99d3bed9e->enter($__internal_9315e2d7be1baa415c1ec03c6ccba815e73e4df340e7391f42c67af99d3bed9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Detalle Servicio Social ";
        
        $__internal_9315e2d7be1baa415c1ec03c6ccba815e73e4df340e7391f42c67af99d3bed9e->leave($__internal_9315e2d7be1baa415c1ec03c6ccba815e73e4df340e7391f42c67af99d3bed9e_prof);

    }

    // line 10
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_d9a2da7daac538d35ff747c7a8fdf3eeedbc7594b4a242c60a1307c04809d0e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9a2da7daac538d35ff747c7a8fdf3eeedbc7594b4a242c60a1307c04809d0e3->enter($__internal_d9a2da7daac538d35ff747c7a8fdf3eeedbc7594b4a242c60a1307c04809d0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 11
        echo "
    <div class=\"box box-primary\">
   <div style=\"width:90%; margin-left:5%; margin-top: 2% \">

        <div align=\"left\">
            <button class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#create1\"> + Servicio Social</button>
         ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Solicitudss:new"));
        echo "

        </div>
        <br> </br>
        <table id=\"tabelMahasiswa\" class=\"table table-bordered table-hover table-striped\" id=\"tabelMahasiswa\">
        <thead>
            <tr>
                <th>Proyecto</th>
                <th>Descripción</th>
                <th>Encargado</th>
                <th>Lugar</th>
                <th>Estado</th>
                <th>ID</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["solicitudsses"]) ? $context["solicitudsses"] : $this->getContext($context, "solicitudsses")));
        foreach ($context['_seq'] as $context["_key"] => $context["solicitudss"]) {
            // line 35
            echo "            <tr>
                <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("servicio_social_show", array("id" => $this->getAttribute($context["solicitudss"], "idsss", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudss"], "nombreproyecto", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudss"], "descripcion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudss"], "encargado", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudss"], "lugar", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudss"], "estado", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitudss"], "idsss", array()), "html", null, true);
            echo "</td>
                <td>
                   <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("servicio_social_show", array("id" => $this->getAttribute($context["solicitudss"], "idsss", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs\">Mostrar</a>
                   <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("servicio_social_edit", array("id" => $this->getAttribute($context["solicitudss"], "idsss", array()))), "html", null, true);
            echo "\" class=\"btn btn-success btn-xs\">Editar</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitudss'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
      </table>

      </div>

  </div>

";
        
        $__internal_d9a2da7daac538d35ff747c7a8fdf3eeedbc7594b4a242c60a1307c04809d0e3->leave($__internal_d9a2da7daac538d35ff747c7a8fdf3eeedbc7594b4a242c60a1307c04809d0e3_prof);

    }

    public function getTemplateName()
    {
        return ":solicitudss:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 48,  152 => 44,  148 => 43,  143 => 41,  139 => 40,  135 => 39,  131 => 38,  127 => 37,  121 => 36,  118 => 35,  114 => 34,  94 => 17,  86 => 11,  80 => 10,  68 => 8,  56 => 7,  46 => 5,  40 => 4,  33 => 1,  31 => 3,  11 => 1,);
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
{% block page_title %} Servicio Social | {% endblock %}
{% block page_subtitle %}Detalle Servicio Social {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\">
   <div style=\"width:90%; margin-left:5%; margin-top: 2% \">

        <div align=\"left\">
            <button class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#create1\"> + Servicio Social</button>
         {{ render(controller('AppBundle:Solicitudss:new' )) }}

        </div>
        <br> </br>
        <table id=\"tabelMahasiswa\" class=\"table table-bordered table-hover table-striped\" id=\"tabelMahasiswa\">
        <thead>
            <tr>
                <th>Proyecto</th>
                <th>Descripción</th>
                <th>Encargado</th>
                <th>Lugar</th>
                <th>Estado</th>
                <th>ID</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        {% for solicitudss in solicitudsses %}
            <tr>
                <td><a href=\"{{ path('servicio_social_show', { 'id': solicitudss.idsss }) }}\">{{ solicitudss.nombreproyecto }}</a></td>
                <td>{{ solicitudss.descripcion }}</td>
                <td>{{ solicitudss.encargado }}</td>
                <td>{{ solicitudss.lugar }}</td>
                <td>{{ solicitudss.estado }}</td>
                <td>{{ solicitudss.idsss }}</td>
                <td>
                   <a href=\"{{ path('servicio_social_show', { 'id': solicitudss.idsss }) }}\" class=\"btn btn-primary btn-xs\">Mostrar</a>
                   <a href=\"{{ path('servicio_social_edit', { 'id': solicitudss.idsss }) }}\" class=\"btn btn-success btn-xs\">Editar</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
      </table>

      </div>

  </div>

{% endblock %}
", ":solicitudss:index.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/solicitudss/index.html.twig");
    }
}
