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
        $__internal_07eae095883c584b36654ad6f6a383ef7f6e9e01afe05c5061d267bd46e12250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07eae095883c584b36654ad6f6a383ef7f6e9e01afe05c5061d267bd46e12250->enter($__internal_07eae095883c584b36654ad6f6a383ef7f6e9e01afe05c5061d267bd46e12250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":actividad:index.html.twig"));

        // line 3
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", ":actividad:index.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07eae095883c584b36654ad6f6a383ef7f6e9e01afe05c5061d267bd46e12250->leave($__internal_07eae095883c584b36654ad6f6a383ef7f6e9e01afe05c5061d267bd46e12250_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c56d43a5fcb6039fbbf0875449b4f73e46f3740b53580c4ed7860b0625e6f766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56d43a5fcb6039fbbf0875449b4f73e46f3740b53580c4ed7860b0625e6f766->enter($__internal_c56d43a5fcb6039fbbf0875449b4f73e46f3740b53580c4ed7860b0625e6f766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
 ";
        
        $__internal_c56d43a5fcb6039fbbf0875449b4f73e46f3740b53580c4ed7860b0625e6f766->leave($__internal_c56d43a5fcb6039fbbf0875449b4f73e46f3740b53580c4ed7860b0625e6f766_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_ce98f417719d8523757a64c6a168877207e176ab81e364f06eb44ef7b67e5c9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce98f417719d8523757a64c6a168877207e176ab81e364f06eb44ef7b67e5c9e->enter($__internal_ce98f417719d8523757a64c6a168877207e176ab81e364f06eb44ef7b67e5c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Actividades | ";
        
        $__internal_ce98f417719d8523757a64c6a168877207e176ab81e364f06eb44ef7b67e5c9e->leave($__internal_ce98f417719d8523757a64c6a168877207e176ab81e364f06eb44ef7b67e5c9e_prof);

    }

    // line 8
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_b0c082189405e33640f659ce4fd48f650eb065a64c15ca5fb80becbab6acee71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c082189405e33640f659ce4fd48f650eb065a64c15ca5fb80becbab6acee71->enter($__internal_b0c082189405e33640f659ce4fd48f650eb065a64c15ca5fb80becbab6acee71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Gestion de Actividades ";
        
        $__internal_b0c082189405e33640f659ce4fd48f650eb065a64c15ca5fb80becbab6acee71->leave($__internal_b0c082189405e33640f659ce4fd48f650eb065a64c15ca5fb80becbab6acee71_prof);

    }

    // line 10
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_8f8c24481a79a8ba18e0a62ae3d240f34cb72c9a7cfb49b2fa2b88a263a8eaa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f8c24481a79a8ba18e0a62ae3d240f34cb72c9a7cfb49b2fa2b88a263a8eaa2->enter($__internal_8f8c24481a79a8ba18e0a62ae3d240f34cb72c9a7cfb49b2fa2b88a263a8eaa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_8f8c24481a79a8ba18e0a62ae3d240f34cb72c9a7cfb49b2fa2b88a263a8eaa2->leave($__internal_8f8c24481a79a8ba18e0a62ae3d240f34cb72c9a7cfb49b2fa2b88a263a8eaa2_prof);

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
