<?php

/* :serviciosocial:index.html.twig */
class __TwigTemplate_84f7e226513d43c3722bcf07cab272cbb91bb50902760af8ebfe579608896007 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":serviciosocial:index.html.twig", 1);
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
        $__internal_d42fb7e27dfeeb8743ecf7aee21881dcf8f43d70d2277c99a60cc8dba55a6e4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d42fb7e27dfeeb8743ecf7aee21881dcf8f43d70d2277c99a60cc8dba55a6e4b->enter($__internal_d42fb7e27dfeeb8743ecf7aee21881dcf8f43d70d2277c99a60cc8dba55a6e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":serviciosocial:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d42fb7e27dfeeb8743ecf7aee21881dcf8f43d70d2277c99a60cc8dba55a6e4b->leave($__internal_d42fb7e27dfeeb8743ecf7aee21881dcf8f43d70d2277c99a60cc8dba55a6e4b_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_c5986eb381ee3ad72f323e509ee91ecee4d1dcd696cffef98af70fd94e6515d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5986eb381ee3ad72f323e509ee91ecee4d1dcd696cffef98af70fd94e6515d5->enter($__internal_c5986eb381ee3ad72f323e509ee91ecee4d1dcd696cffef98af70fd94e6515d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Servicio Social | ";
        
        $__internal_c5986eb381ee3ad72f323e509ee91ecee4d1dcd696cffef98af70fd94e6515d5->leave($__internal_c5986eb381ee3ad72f323e509ee91ecee4d1dcd696cffef98af70fd94e6515d5_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_ea49e5df0980eb6c6ec5ed4e1ecac78f482d1cb5242fed06b491cd229913bae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea49e5df0980eb6c6ec5ed4e1ecac78f482d1cb5242fed06b491cd229913bae2->enter($__internal_ea49e5df0980eb6c6ec5ed4e1ecac78f482d1cb5242fed06b491cd229913bae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Listado Servicio Social";
        
        $__internal_ea49e5df0980eb6c6ec5ed4e1ecac78f482d1cb5242fed06b491cd229913bae2->leave($__internal_ea49e5df0980eb6c6ec5ed4e1ecac78f482d1cb5242fed06b491cd229913bae2_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_1743b1f75a5a6dbffe4165493c08ac01d14c59a741856441a2522ff08c943101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1743b1f75a5a6dbffe4165493c08ac01d14c59a741856441a2522ff08c943101->enter($__internal_1743b1f75a5a6dbffe4165493c08ac01d14c59a741856441a2522ff08c943101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#crearSS\"> +Servicio Social</button>
     ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Serviciosocial:new"));
        echo "
</div>
<br> </br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
       
        <thead>
            <tr>
                <th>Idexpbecario</th>
                <th>Fechaaprovacionservicio</th>
                <th>Fechainicioservicio</th>
                <th>Fechafinservicio</th>
                <th>Estadoservicio</th>
                <th>Idserviciosocial</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["serviciosocials"]) ? $context["serviciosocials"] : $this->getContext($context, "serviciosocials")));
        foreach ($context['_seq'] as $context["_key"] => $context["serviciosocial"]) {
            // line 31
            echo "            <tr>
                <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serviciosocial_show", array("id" => $this->getAttribute($context["serviciosocial"], "idserviciosocial", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["serviciosocial"], "idexpbecario", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 33
            if ($this->getAttribute($context["serviciosocial"], "fechaaprovacionservicio", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["serviciosocial"], "fechaaprovacionservicio", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 34
            if ($this->getAttribute($context["serviciosocial"], "fechainicioservicio", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["serviciosocial"], "fechainicioservicio", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 35
            if ($this->getAttribute($context["serviciosocial"], "fechafinservicio", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["serviciosocial"], "fechafinservicio", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["serviciosocial"], "estadoservicio", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["serviciosocial"], "idproyectservisocial", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serviciosocial_show", array("id" => $this->getAttribute($context["serviciosocial"], "idserviciosocial", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serviciosocial_edit", array("id" => $this->getAttribute($context["serviciosocial"], "idserviciosocial", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serviciosocial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </tbody>
    </table>
    </div>
    </div>
";
        
        $__internal_1743b1f75a5a6dbffe4165493c08ac01d14c59a741856441a2522ff08c943101->leave($__internal_1743b1f75a5a6dbffe4165493c08ac01d14c59a741856441a2522ff08c943101_prof);

    }

    public function getTemplateName()
    {
        return ":serviciosocial:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 50,  142 => 44,  136 => 41,  129 => 37,  125 => 36,  119 => 35,  113 => 34,  107 => 33,  101 => 32,  98 => 31,  94 => 30,  73 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Servicio Social | {% endblock %}
{% block page_subtitle %}Listado Servicio Social{% endblock %}

{% block page_content %}
<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#crearSS\"> +Servicio Social</button>
     {{ render(controller('AppBundle:Serviciosocial:new' )) }}
</div>
<br> </br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
       
        <thead>
            <tr>
                <th>Idexpbecario</th>
                <th>Fechaaprovacionservicio</th>
                <th>Fechainicioservicio</th>
                <th>Fechafinservicio</th>
                <th>Estadoservicio</th>
                <th>Idserviciosocial</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for serviciosocial in serviciosocials %}
            <tr>
                <td><a href=\"{{ path('serviciosocial_show', { 'id': serviciosocial.idserviciosocial }) }}\">{{ serviciosocial.idexpbecario }}</a></td>
                <td>{% if serviciosocial.fechaaprovacionservicio %}{{ serviciosocial.fechaaprovacionservicio|date('Y-m-d') }}{% endif %}</td>
                <td>{% if serviciosocial.fechainicioservicio %}{{ serviciosocial.fechainicioservicio|date('Y-m-d') }}{% endif %}</td>
                <td>{% if serviciosocial.fechafinservicio %}{{ serviciosocial.fechafinservicio|date('Y-m-d') }}{% endif %}</td>
                <td>{{ serviciosocial.estadoservicio }}</td>
                <td>{{ serviciosocial.idproyectservisocial }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('serviciosocial_show', { 'id': serviciosocial.idserviciosocial }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('serviciosocial_edit', { 'id': serviciosocial.idserviciosocial }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    </div>
    </div>
{% endblock %}
", ":serviciosocial:index.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/serviciosocial/index.html.twig");
    }
}
