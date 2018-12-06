<?php

/* serviciosocial/show.html.twig */
class __TwigTemplate_769ab690038526da99b3be9b96fdac32252f3931aa44ed2742fd3ceed93d886a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "serviciosocial/show.html.twig", 1);
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
        $__internal_43b3ca401b79eb5acd21ca70be19defab2fb7e829ef2f159c02d0bf4d78608dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b3ca401b79eb5acd21ca70be19defab2fb7e829ef2f159c02d0bf4d78608dd->enter($__internal_43b3ca401b79eb5acd21ca70be19defab2fb7e829ef2f159c02d0bf4d78608dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "serviciosocial/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43b3ca401b79eb5acd21ca70be19defab2fb7e829ef2f159c02d0bf4d78608dd->leave($__internal_43b3ca401b79eb5acd21ca70be19defab2fb7e829ef2f159c02d0bf4d78608dd_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_6db608a7e9fd086cbe71528da410ad0c0f095ea326e6fcc97a2a1ea2f1fc2abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db608a7e9fd086cbe71528da410ad0c0f095ea326e6fcc97a2a1ea2f1fc2abc->enter($__internal_6db608a7e9fd086cbe71528da410ad0c0f095ea326e6fcc97a2a1ea2f1fc2abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Servicio Social| ";
        
        $__internal_6db608a7e9fd086cbe71528da410ad0c0f095ea326e6fcc97a2a1ea2f1fc2abc->leave($__internal_6db608a7e9fd086cbe71528da410ad0c0f095ea326e6fcc97a2a1ea2f1fc2abc_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_22b99e0af5df8573585e464399f1733ba835be97015d8c95c41cfa83c610f404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b99e0af5df8573585e464399f1733ba835be97015d8c95c41cfa83c610f404->enter($__internal_22b99e0af5df8573585e464399f1733ba835be97015d8c95c41cfa83c610f404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Show";
        
        $__internal_22b99e0af5df8573585e464399f1733ba835be97015d8c95c41cfa83c610f404->leave($__internal_22b99e0af5df8573585e464399f1733ba835be97015d8c95c41cfa83c610f404_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_1fa29a379a8a1666d5b72bbccbc80e3a1f77f44a507d751fbc94fd5bb3b4cab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa29a379a8a1666d5b72bbccbc80e3a1f77f44a507d751fbc94fd5bb3b4cab1->enter($__internal_1fa29a379a8a1666d5b72bbccbc80e3a1f77f44a507d751fbc94fd5bb3b4cab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "    <h1>Serviciosocial</h1>

    <table>
        <tbody>
            <tr>
                <th>Idexpbecario</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serviciosocial"]) ? $context["serviciosocial"] : $this->getContext($context, "serviciosocial")), "idexpbecario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechaaprovacionservicio</th>
                <td>";
        // line 17
        if ($this->getAttribute((isset($context["serviciosocial"]) ? $context["serviciosocial"] : $this->getContext($context, "serviciosocial")), "fechaaprovacionservicio", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["serviciosocial"]) ? $context["serviciosocial"] : $this->getContext($context, "serviciosocial")), "fechaaprovacionservicio", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Fechainicioservicio</th>
                <td>";
        // line 21
        if ($this->getAttribute((isset($context["serviciosocial"]) ? $context["serviciosocial"] : $this->getContext($context, "serviciosocial")), "fechainicioservicio", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["serviciosocial"]) ? $context["serviciosocial"] : $this->getContext($context, "serviciosocial")), "fechainicioservicio", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Fechafinservicio</th>
                <td>";
        // line 25
        if ($this->getAttribute((isset($context["serviciosocial"]) ? $context["serviciosocial"] : $this->getContext($context, "serviciosocial")), "fechafinservicio", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["serviciosocial"]) ? $context["serviciosocial"] : $this->getContext($context, "serviciosocial")), "fechafinservicio", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Estadoservicio</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serviciosocial"]) ? $context["serviciosocial"] : $this->getContext($context, "serviciosocial")), "estadoservicio", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idserviciosocial</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serviciosocial"]) ? $context["serviciosocial"] : $this->getContext($context, "serviciosocial")), "idserviciosocial", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serviciosocial_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serviciosocial_edit", array("id" => $this->getAttribute((isset($context["serviciosocial"]) ? $context["serviciosocial"] : $this->getContext($context, "serviciosocial")), "idserviciosocial", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 46
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 48
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_1fa29a379a8a1666d5b72bbccbc80e3a1f77f44a507d751fbc94fd5bb3b4cab1->leave($__internal_1fa29a379a8a1666d5b72bbccbc80e3a1f77f44a507d751fbc94fd5bb3b4cab1_prof);

    }

    public function getTemplateName()
    {
        return "serviciosocial/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 48,  137 => 46,  131 => 43,  125 => 40,  115 => 33,  108 => 29,  99 => 25,  90 => 21,  81 => 17,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %}Servicio Social| {% endblock %}
{% block page_subtitle %}Show{% endblock %}

{% block page_content %}
    <h1>Serviciosocial</h1>

    <table>
        <tbody>
            <tr>
                <th>Idexpbecario</th>
                <td>{{ serviciosocial.idexpbecario }}</td>
            </tr>
            <tr>
                <th>Fechaaprovacionservicio</th>
                <td>{% if serviciosocial.fechaaprovacionservicio %}{{ serviciosocial.fechaaprovacionservicio|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Fechainicioservicio</th>
                <td>{% if serviciosocial.fechainicioservicio %}{{ serviciosocial.fechainicioservicio|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Fechafinservicio</th>
                <td>{% if serviciosocial.fechafinservicio %}{{ serviciosocial.fechafinservicio|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Estadoservicio</th>
                <td>{{ serviciosocial.estadoservicio }}</td>
            </tr>
            <tr>
                <th>Idserviciosocial</th>
                <td>{{ serviciosocial.idserviciosocial }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('serviciosocial_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('serviciosocial_edit', { 'id': serviciosocial.idserviciosocial }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "serviciosocial/show.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\serviciosocial\\show.html.twig");
    }
}
