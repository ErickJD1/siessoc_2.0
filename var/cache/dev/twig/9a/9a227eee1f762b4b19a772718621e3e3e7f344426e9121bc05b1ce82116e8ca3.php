<?php

/* :serviciosocial:show.html.twig */
class __TwigTemplate_0fb03dfe0096bcd12ea4d7ba6b79e52e87300228c3d53d46f45ce7a4ea31d14d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":serviciosocial:show.html.twig", 1);
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
        $__internal_f06262d51ad03f8e6306f0ae8c58d92f83628fe51813c13086063b010c701659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f06262d51ad03f8e6306f0ae8c58d92f83628fe51813c13086063b010c701659->enter($__internal_f06262d51ad03f8e6306f0ae8c58d92f83628fe51813c13086063b010c701659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":serviciosocial:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f06262d51ad03f8e6306f0ae8c58d92f83628fe51813c13086063b010c701659->leave($__internal_f06262d51ad03f8e6306f0ae8c58d92f83628fe51813c13086063b010c701659_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_9e6dc44a1d8e04b0f2251140d2449bd31326cb3daeb49baf78ae0c8e8e9808f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e6dc44a1d8e04b0f2251140d2449bd31326cb3daeb49baf78ae0c8e8e9808f7->enter($__internal_9e6dc44a1d8e04b0f2251140d2449bd31326cb3daeb49baf78ae0c8e8e9808f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Servicio Social| ";
        
        $__internal_9e6dc44a1d8e04b0f2251140d2449bd31326cb3daeb49baf78ae0c8e8e9808f7->leave($__internal_9e6dc44a1d8e04b0f2251140d2449bd31326cb3daeb49baf78ae0c8e8e9808f7_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_2f0038ad69f0960f83fcad40f7fe1a1b57c96bcb31333e8fd2ce6dedac7885c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f0038ad69f0960f83fcad40f7fe1a1b57c96bcb31333e8fd2ce6dedac7885c3->enter($__internal_2f0038ad69f0960f83fcad40f7fe1a1b57c96bcb31333e8fd2ce6dedac7885c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Show";
        
        $__internal_2f0038ad69f0960f83fcad40f7fe1a1b57c96bcb31333e8fd2ce6dedac7885c3->leave($__internal_2f0038ad69f0960f83fcad40f7fe1a1b57c96bcb31333e8fd2ce6dedac7885c3_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_99df9558490bb5b6467e855c5b80d62561db13d1fd9bcb5d3814c9d56d86acc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99df9558490bb5b6467e855c5b80d62561db13d1fd9bcb5d3814c9d56d86acc0->enter($__internal_99df9558490bb5b6467e855c5b80d62561db13d1fd9bcb5d3814c9d56d86acc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_99df9558490bb5b6467e855c5b80d62561db13d1fd9bcb5d3814c9d56d86acc0->leave($__internal_99df9558490bb5b6467e855c5b80d62561db13d1fd9bcb5d3814c9d56d86acc0_prof);

    }

    public function getTemplateName()
    {
        return ":serviciosocial:show.html.twig";
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
", ":serviciosocial:show.html.twig", "/home/ubuntu/workspace/app/Resources/views/serviciosocial/show.html.twig");
    }
}
