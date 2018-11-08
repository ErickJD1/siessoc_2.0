<?php

/* bitacora/show.html.twig */
class __TwigTemplate_12868e5d5c9411f3bfd1a5be15c4f0587a07aa309b4548feb749bd22a3901fd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "bitacora/show.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f3103fc1065c53f4a15c82edf303fdb1ad1ab1e36f1cafc4c5ef5835231ed75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f3103fc1065c53f4a15c82edf303fdb1ad1ab1e36f1cafc4c5ef5835231ed75->enter($__internal_7f3103fc1065c53f4a15c82edf303fdb1ad1ab1e36f1cafc4c5ef5835231ed75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bitacora/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f3103fc1065c53f4a15c82edf303fdb1ad1ab1e36f1cafc4c5ef5835231ed75->leave($__internal_7f3103fc1065c53f4a15c82edf303fdb1ad1ab1e36f1cafc4c5ef5835231ed75_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_f2a5c088944ee18ad9a2c8151dbeee4273305433d05918b688178247a312d92c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a5c088944ee18ad9a2c8151dbeee4273305433d05918b688178247a312d92c->enter($__internal_f2a5c088944ee18ad9a2c8151dbeee4273305433d05918b688178247a312d92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "  ";
        
        $__internal_f2a5c088944ee18ad9a2c8151dbeee4273305433d05918b688178247a312d92c->leave($__internal_f2a5c088944ee18ad9a2c8151dbeee4273305433d05918b688178247a312d92c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d27431659cfcc1d7c777df9751ebe03be99cd5268311c739d31af8ae8e79379d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d27431659cfcc1d7c777df9751ebe03be99cd5268311c739d31af8ae8e79379d->enter($__internal_d27431659cfcc1d7c777df9751ebe03be99cd5268311c739d31af8ae8e79379d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Bitacora</h1>

    <table>
        <tbody>
            <tr>
                <th>Horainicio</th>
                <td>";
        // line 10
        if ($this->getAttribute((isset($context["bitacora"]) ? $context["bitacora"] : $this->getContext($context, "bitacora")), "horainicio", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["bitacora"]) ? $context["bitacora"] : $this->getContext($context, "bitacora")), "horainicio", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Horafin</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["bitacora"]) ? $context["bitacora"] : $this->getContext($context, "bitacora")), "horafin", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["bitacora"]) ? $context["bitacora"] : $this->getContext($context, "bitacora")), "horafin", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Observacion</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bitacora"]) ? $context["bitacora"] : $this->getContext($context, "bitacora")), "observacion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idbitacora</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bitacora"]) ? $context["bitacora"] : $this->getContext($context, "bitacora")), "idbitacora", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
            ";
        // line 28
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bitacora_edit", array("id" => $this->getAttribute((isset($context["bitacora"]) ? $context["bitacora"] : $this->getContext($context, "bitacora")), "idbitacora", array()))), "html", null, true);
        echo "\"class=\"btn btn-primary btn-xs\">Actualizar</a>
                <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger btn-xs\">
                <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bitacora_index");
        echo "\" class=\"btn btn-info btn-xs\">Atrás</a>
            ";
        // line 32
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </ul>
  ";
        
        $__internal_d27431659cfcc1d7c777df9751ebe03be99cd5268311c739d31af8ae8e79379d->leave($__internal_d27431659cfcc1d7c777df9751ebe03be99cd5268311c739d31af8ae8e79379d_prof);

    }

    public function getTemplateName()
    {
        return "bitacora/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 32,  107 => 31,  102 => 29,  98 => 28,  89 => 22,  82 => 18,  73 => 14,  64 => 10,  56 => 4,  50 => 3,  43 => 35,  41 => 3,  35 => 2,  11 => 1,);
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
{% block page_content %}
{% block body %}
    <h1>Bitacora</h1>

    <table>
        <tbody>
            <tr>
                <th>Horainicio</th>
                <td>{% if bitacora.horainicio %}{{ bitacora.horainicio|date('H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Horafin</th>
                <td>{% if bitacora.horafin %}{{ bitacora.horafin|date('H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Observacion</th>
                <td>{{ bitacora.observacion }}</td>
            </tr>
            <tr>
                <th>Idbitacora</th>
                <td>{{ bitacora.idbitacora }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
            {{ form_start(delete_form) }}
                <a href=\"{{ path('bitacora_edit', { 'id': bitacora.idbitacora }) }}\"class=\"btn btn-primary btn-xs\">Actualizar</a>
                <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger btn-xs\">
                <a href=\"{{ path('bitacora_index') }}\" class=\"btn btn-info btn-xs\">Atrás</a>
            {{ form_end(delete_form) }}
    </ul>
  {% endblock %}
  {% endblock %}
", "bitacora/show.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\bitacora\\show.html.twig");
    }
}
