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
        $__internal_156bf71f96c20341a8321240029044ff47cb8c142e35ed9c428f071798f676a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156bf71f96c20341a8321240029044ff47cb8c142e35ed9c428f071798f676a0->enter($__internal_156bf71f96c20341a8321240029044ff47cb8c142e35ed9c428f071798f676a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bitacora/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_156bf71f96c20341a8321240029044ff47cb8c142e35ed9c428f071798f676a0->leave($__internal_156bf71f96c20341a8321240029044ff47cb8c142e35ed9c428f071798f676a0_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_383807bf6083c1bc8538614114b5adb8136d21bc5021591359027ca612e865c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_383807bf6083c1bc8538614114b5adb8136d21bc5021591359027ca612e865c7->enter($__internal_383807bf6083c1bc8538614114b5adb8136d21bc5021591359027ca612e865c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "  ";
        
        $__internal_383807bf6083c1bc8538614114b5adb8136d21bc5021591359027ca612e865c7->leave($__internal_383807bf6083c1bc8538614114b5adb8136d21bc5021591359027ca612e865c7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6507ffe0a7d911ea288f4d684154a8db6d60533d7ffb1c3cfd65333ae1ea648f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6507ffe0a7d911ea288f4d684154a8db6d60533d7ffb1c3cfd65333ae1ea648f->enter($__internal_6507ffe0a7d911ea288f4d684154a8db6d60533d7ffb1c3cfd65333ae1ea648f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6507ffe0a7d911ea288f4d684154a8db6d60533d7ffb1c3cfd65333ae1ea648f->leave($__internal_6507ffe0a7d911ea288f4d684154a8db6d60533d7ffb1c3cfd65333ae1ea648f_prof);

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
