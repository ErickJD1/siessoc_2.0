<?php

/* movimientoinventario/show.html.twig */
class __TwigTemplate_81e2c1f80e6c1f0f48e74c08f7037680073ae900b1f6776a84fb5fe9a541eb27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "movimientoinventario/show.html.twig", 1);
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
        $__internal_8d236b4aebe491dc26e78760004122708a3dcc702cd8fb6eb4711a6f82cab0f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d236b4aebe491dc26e78760004122708a3dcc702cd8fb6eb4711a6f82cab0f1->enter($__internal_8d236b4aebe491dc26e78760004122708a3dcc702cd8fb6eb4711a6f82cab0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movimientoinventario/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d236b4aebe491dc26e78760004122708a3dcc702cd8fb6eb4711a6f82cab0f1->leave($__internal_8d236b4aebe491dc26e78760004122708a3dcc702cd8fb6eb4711a6f82cab0f1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e740b6f16efafa4021dff34315156373fd1b9d96481a1811d7e4c9c8fc77e180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e740b6f16efafa4021dff34315156373fd1b9d96481a1811d7e4c9c8fc77e180->enter($__internal_e740b6f16efafa4021dff34315156373fd1b9d96481a1811d7e4c9c8fc77e180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Movimientoinventario</h1>

    <table>
        <tbody>
            <tr>
                <th>Nombremovinv</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movimientoinventario"]) ? $context["movimientoinventario"] : $this->getContext($context, "movimientoinventario")), "nombremovinv", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Estadomovinv</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["movimientoinventario"]) ? $context["movimientoinventario"] : $this->getContext($context, "movimientoinventario")), "estadomovinv", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Idmovinv</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movimientoinventario"]) ? $context["movimientoinventario"] : $this->getContext($context, "movimientoinventario")), "idmovinv", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movimientoinventario_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movimientoinventario_edit", array("id" => $this->getAttribute((isset($context["movimientoinventario"]) ? $context["movimientoinventario"] : $this->getContext($context, "movimientoinventario")), "idmovinv", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e740b6f16efafa4021dff34315156373fd1b9d96481a1811d7e4c9c8fc77e180->leave($__internal_e740b6f16efafa4021dff34315156373fd1b9d96481a1811d7e4c9c8fc77e180_prof);

    }

    public function getTemplateName()
    {
        return "movimientoinventario/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 33,  88 => 31,  82 => 28,  76 => 25,  66 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Movimientoinventario</h1>

    <table>
        <tbody>
            <tr>
                <th>Nombremovinv</th>
                <td>{{ movimientoinventario.nombremovinv }}</td>
            </tr>
            <tr>
                <th>Estadomovinv</th>
                <td>{% if movimientoinventario.estadomovinv %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Idmovinv</th>
                <td>{{ movimientoinventario.idmovinv }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('movimientoinventario_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('movimientoinventario_edit', { 'id': movimientoinventario.idmovinv }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "movimientoinventario/show.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\movimientoinventario\\show.html.twig");
    }
}
