<?php

/* cuenta/Cuentashow.html.twig */
class __TwigTemplate_29970398719d2af808d8e18e752c20611a4721abe28beca548515bbd92adb5be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cuenta/Cuentashow.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c604c02f614bdad37e575a1a8a6e8be288992b5604d8365303a42e3c47d4737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c604c02f614bdad37e575a1a8a6e8be288992b5604d8365303a42e3c47d4737->enter($__internal_7c604c02f614bdad37e575a1a8a6e8be288992b5604d8365303a42e3c47d4737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cuenta/Cuentashow.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c604c02f614bdad37e575a1a8a6e8be288992b5604d8365303a42e3c47d4737->leave($__internal_7c604c02f614bdad37e575a1a8a6e8be288992b5604d8365303a42e3c47d4737_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0ede59979b2c59368783e8d8b4f5d8e34ce446a172ad30631cf0c0d03f31789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ede59979b2c59368783e8d8b4f5d8e34ce446a172ad30631cf0c0d03f31789->enter($__internal_e0ede59979b2c59368783e8d8b4f5d8e34ce446a172ad30631cf0c0d03f31789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cuentum</h1>

    <table>
        <tbody>
            <tr>
                <th>Numcuenta</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuentum"]) ? $context["cuentum"] : $this->getContext($context, "cuentum")), "numcuenta", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomcuenta</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuentum"]) ? $context["cuentum"] : $this->getContext($context, "cuentum")), "nomcuenta", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripcioncuenta</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuentum"]) ? $context["cuentum"] : $this->getContext($context, "cuentum")), "descripcioncuenta", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechaapertura</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["cuentum"]) ? $context["cuentum"] : $this->getContext($context, "cuentum")), "fechaapertura", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cuentum"]) ? $context["cuentum"] : $this->getContext($context, "cuentum")), "fechaapertura", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Saldocuenta</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuentum"]) ? $context["cuentum"] : $this->getContext($context, "cuentum")), "saldocuenta", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Estadocuenta</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["cuentum"]) ? $context["cuentum"] : $this->getContext($context, "cuentum")), "estadocuenta", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Idcuenta</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuentum"]) ? $context["cuentum"] : $this->getContext($context, "cuentum")), "idcuenta", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cuenta_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cuenta_edit", array("id" => $this->getAttribute((isset($context["cuentum"]) ? $context["cuentum"] : $this->getContext($context, "cuentum")), "idcuenta", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e0ede59979b2c59368783e8d8b4f5d8e34ce446a172ad30631cf0c0d03f31789->leave($__internal_e0ede59979b2c59368783e8d8b4f5d8e34ce446a172ad30631cf0c0d03f31789_prof);

    }

    public function getTemplateName()
    {
        return "cuenta/Cuentashow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 49,  118 => 47,  112 => 44,  106 => 41,  96 => 34,  85 => 30,  78 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Cuentum</h1>

    <table>
        <tbody>
            <tr>
                <th>Numcuenta</th>
                <td>{{ cuentum.numcuenta }}</td>
            </tr>
            <tr>
                <th>Nomcuenta</th>
                <td>{{ cuentum.nomcuenta }}</td>
            </tr>
            <tr>
                <th>Descripcioncuenta</th>
                <td>{{ cuentum.descripcioncuenta }}</td>
            </tr>
            <tr>
                <th>Fechaapertura</th>
                <td>{% if cuentum.fechaapertura %}{{ cuentum.fechaapertura|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Saldocuenta</th>
                <td>{{ cuentum.saldocuenta }}</td>
            </tr>
            <tr>
                <th>Estadocuenta</th>
                <td>{% if cuentum.estadocuenta %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Idcuenta</th>
                <td>{{ cuentum.idcuenta }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('cuenta_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('cuenta_edit', { 'id': cuentum.idcuenta }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "cuenta/Cuentashow.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\cuenta\\Cuentashow.html.twig");
    }
}
