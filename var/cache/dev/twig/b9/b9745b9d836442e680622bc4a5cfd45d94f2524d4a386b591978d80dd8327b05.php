<?php

/* solicitudss/index.html.twig */
class __TwigTemplate_d0e0b1ba30f1e3ae49ba1180af7e2853afba56fba4e013b08f9c12e429e9ec3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "solicitudss/index.html.twig", 1);
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
        $__internal_949828551b657a8fcda7f429fb0c9a86a0334e65372425e8654083514b48bae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949828551b657a8fcda7f429fb0c9a86a0334e65372425e8654083514b48bae0->enter($__internal_949828551b657a8fcda7f429fb0c9a86a0334e65372425e8654083514b48bae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "solicitudss/index.html.twig"));

        // line 3
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "solicitudss/index.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_949828551b657a8fcda7f429fb0c9a86a0334e65372425e8654083514b48bae0->leave($__internal_949828551b657a8fcda7f429fb0c9a86a0334e65372425e8654083514b48bae0_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_50e8129e32f10e0d37a1fa9a3cc1ce5dc4c8e358a16201ff0132fbc078346cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e8129e32f10e0d37a1fa9a3cc1ce5dc4c8e358a16201ff0132fbc078346cb3->enter($__internal_50e8129e32f10e0d37a1fa9a3cc1ce5dc4c8e358a16201ff0132fbc078346cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
 ";
        
        $__internal_50e8129e32f10e0d37a1fa9a3cc1ce5dc4c8e358a16201ff0132fbc078346cb3->leave($__internal_50e8129e32f10e0d37a1fa9a3cc1ce5dc4c8e358a16201ff0132fbc078346cb3_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_807c954f394b6acf4d4691e6f5697774d3db0ce7fd47b32f443e4661c0b568b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_807c954f394b6acf4d4691e6f5697774d3db0ce7fd47b32f443e4661c0b568b5->enter($__internal_807c954f394b6acf4d4691e6f5697774d3db0ce7fd47b32f443e4661c0b568b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Servicio Social | ";
        
        $__internal_807c954f394b6acf4d4691e6f5697774d3db0ce7fd47b32f443e4661c0b568b5->leave($__internal_807c954f394b6acf4d4691e6f5697774d3db0ce7fd47b32f443e4661c0b568b5_prof);

    }

    // line 8
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_a6be229c891bf92fe080df2b5268c65cf949a197189b0df62e5a5f3b593bf47a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6be229c891bf92fe080df2b5268c65cf949a197189b0df62e5a5f3b593bf47a->enter($__internal_a6be229c891bf92fe080df2b5268c65cf949a197189b0df62e5a5f3b593bf47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Detalle Servicio Social ";
        
        $__internal_a6be229c891bf92fe080df2b5268c65cf949a197189b0df62e5a5f3b593bf47a->leave($__internal_a6be229c891bf92fe080df2b5268c65cf949a197189b0df62e5a5f3b593bf47a_prof);

    }

    // line 10
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_56b6ec47b117a5077c76f43d328f3c286c0df817670ae49168f68973d3dfc3f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b6ec47b117a5077c76f43d328f3c286c0df817670ae49168f68973d3dfc3f3->enter($__internal_56b6ec47b117a5077c76f43d328f3c286c0df817670ae49168f68973d3dfc3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_56b6ec47b117a5077c76f43d328f3c286c0df817670ae49168f68973d3dfc3f3->leave($__internal_56b6ec47b117a5077c76f43d328f3c286c0df817670ae49168f68973d3dfc3f3_prof);

    }

    public function getTemplateName()
    {
        return "solicitudss/index.html.twig";
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
", "solicitudss/index.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\solicitudss\\index.html.twig");
    }
}
