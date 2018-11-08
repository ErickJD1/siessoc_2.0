<?php

/* bitacora/index.html.twig */
class __TwigTemplate_723a696b5230fb3b9bbb0da49510d0202fce5236f2ddb94643c73dea88b683c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "bitacora/index.html.twig", 1);
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
        $__internal_2f5775b091fee0ea3c793cf531d77f822fe39e71ccc1bf74529282829c05953f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5775b091fee0ea3c793cf531d77f822fe39e71ccc1bf74529282829c05953f->enter($__internal_2f5775b091fee0ea3c793cf531d77f822fe39e71ccc1bf74529282829c05953f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bitacora/index.html.twig"));

        // line 3
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "bitacora/index.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f5775b091fee0ea3c793cf531d77f822fe39e71ccc1bf74529282829c05953f->leave($__internal_2f5775b091fee0ea3c793cf531d77f822fe39e71ccc1bf74529282829c05953f_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9cda590201d0fd11baf5adc2c452c210a6e2a4d17db6dfec84c9c3d751155106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cda590201d0fd11baf5adc2c452c210a6e2a4d17db6dfec84c9c3d751155106->enter($__internal_9cda590201d0fd11baf5adc2c452c210a6e2a4d17db6dfec84c9c3d751155106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
 ";
        
        $__internal_9cda590201d0fd11baf5adc2c452c210a6e2a4d17db6dfec84c9c3d751155106->leave($__internal_9cda590201d0fd11baf5adc2c452c210a6e2a4d17db6dfec84c9c3d751155106_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_2be442c0e336dca4a6cc0842d2f4258fe882ebd8de7ee3cbe53f6ca6fa0aabff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be442c0e336dca4a6cc0842d2f4258fe882ebd8de7ee3cbe53f6ca6fa0aabff->enter($__internal_2be442c0e336dca4a6cc0842d2f4258fe882ebd8de7ee3cbe53f6ca6fa0aabff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Bitacora | ";
        
        $__internal_2be442c0e336dca4a6cc0842d2f4258fe882ebd8de7ee3cbe53f6ca6fa0aabff->leave($__internal_2be442c0e336dca4a6cc0842d2f4258fe882ebd8de7ee3cbe53f6ca6fa0aabff_prof);

    }

    // line 8
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_e08122b8555a8571ddf6e7142f623ab5e02e58e1e07177301608d963f9e72937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e08122b8555a8571ddf6e7142f623ab5e02e58e1e07177301608d963f9e72937->enter($__internal_e08122b8555a8571ddf6e7142f623ab5e02e58e1e07177301608d963f9e72937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Bitacora Servicio Social ";
        
        $__internal_e08122b8555a8571ddf6e7142f623ab5e02e58e1e07177301608d963f9e72937->leave($__internal_e08122b8555a8571ddf6e7142f623ab5e02e58e1e07177301608d963f9e72937_prof);

    }

    // line 10
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_09a04fdb0d49a3c4ef046690120e5a99c6eb80a26c1cfa5b3043277c98e231ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a04fdb0d49a3c4ef046690120e5a99c6eb80a26c1cfa5b3043277c98e231ec->enter($__internal_09a04fdb0d49a3c4ef046690120e5a99c6eb80a26c1cfa5b3043277c98e231ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 11
        echo "
    <div class=\"box box-primary\">
   <div style=\"width:90%; margin-left:5%; margin-top: 2% \">

        <div align=\"left\">
            <button class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#create1\"> + Bitacora</button>
         ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Bitacora:new"));
        echo "

        </div>
        <br> </br>
        <table id=\"tabelMahasiswa\" class=\"table table-bordered table-hover table-striped\" id=\"tabelMahasiswa\">
        <thead>
            <tr>
                <th>Hora Inicio</th>
                <th>Hora Fin</th>
                <th>Observacion</th>
                <th>ID</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bitacoras"]) ? $context["bitacoras"] : $this->getContext($context, "bitacoras")));
        foreach ($context['_seq'] as $context["_key"] => $context["bitacora"]) {
            // line 33
            echo "            <tr>
                <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bitacora_show", array("id" => $this->getAttribute($context["bitacora"], "idbitacora", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["bitacora"], "horainicio", array()), "H:i:s"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 35
            if ($this->getAttribute($context["bitacora"], "horafin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["bitacora"], "horafin", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["bitacora"], "observacion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["bitacora"], "idbitacora", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bitacora_show", array("id" => $this->getAttribute($context["bitacora"], "idbitacora", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs\">Mostrar</a>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bitacora_edit", array("id" => $this->getAttribute($context["bitacora"], "idbitacora", array()))), "html", null, true);
            echo "\" class=\"btn btn-success btn-xs\">Editar</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bitacora'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
      </table>

      </div>

  </div>

";
        
        $__internal_09a04fdb0d49a3c4ef046690120e5a99c6eb80a26c1cfa5b3043277c98e231ec->leave($__internal_09a04fdb0d49a3c4ef046690120e5a99c6eb80a26c1cfa5b3043277c98e231ec_prof);

    }

    public function getTemplateName()
    {
        return "bitacora/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 45,  145 => 41,  141 => 40,  135 => 37,  131 => 36,  125 => 35,  119 => 34,  116 => 33,  112 => 32,  94 => 17,  86 => 11,  80 => 10,  68 => 8,  56 => 7,  46 => 5,  40 => 4,  33 => 1,  31 => 3,  11 => 1,);
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
{% block page_title %} Bitacora | {% endblock %}
{% block page_subtitle %}Bitacora Servicio Social {% endblock %}

{% block page_content %}

    <div class=\"box box-primary\">
   <div style=\"width:90%; margin-left:5%; margin-top: 2% \">

        <div align=\"left\">
            <button class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#create1\"> + Bitacora</button>
         {{ render(controller('AppBundle:Bitacora:new' )) }}

        </div>
        <br> </br>
        <table id=\"tabelMahasiswa\" class=\"table table-bordered table-hover table-striped\" id=\"tabelMahasiswa\">
        <thead>
            <tr>
                <th>Hora Inicio</th>
                <th>Hora Fin</th>
                <th>Observacion</th>
                <th>ID</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        {% for bitacora in bitacoras %}
            <tr>
                <td><a href=\"{{ path('bitacora_show', { 'id': bitacora.idbitacora }) }}\">{{ bitacora.horainicio |date('H:i:s')}}</a></td>
                <td>{% if bitacora.horafin %}{{ bitacora.horafin|date('H:i:s') }}{% endif %}</td>
                <td>{{ bitacora.observacion }}</td>
                <td>{{ bitacora.idbitacora }}</td>
                <td>
                    <ul>
                            <a href=\"{{ path('bitacora_show', { 'id': bitacora.idbitacora }) }}\" class=\"btn btn-primary btn-xs\">Mostrar</a>
                            <a href=\"{{ path('bitacora_edit', { 'id': bitacora.idbitacora }) }}\" class=\"btn btn-success btn-xs\">Editar</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
      </table>

      </div>

  </div>

{% endblock %}
", "bitacora/index.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\bitacora\\index.html.twig");
    }
}
