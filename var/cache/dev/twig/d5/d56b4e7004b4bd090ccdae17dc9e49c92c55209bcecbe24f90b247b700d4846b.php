<?php

/* banco/show.html.twig */
class __TwigTemplate_1f12d7e0d662824629d09bc10a5c5967af814a13aea73b892c50b9b53c2d4464 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "banco/show.html.twig", 1);
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
        $__internal_c43c0e8b185ffa390374c40de3a5c79061a06c7bbed48224eb616675c18e0734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c43c0e8b185ffa390374c40de3a5c79061a06c7bbed48224eb616675c18e0734->enter($__internal_c43c0e8b185ffa390374c40de3a5c79061a06c7bbed48224eb616675c18e0734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "banco/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c43c0e8b185ffa390374c40de3a5c79061a06c7bbed48224eb616675c18e0734->leave($__internal_c43c0e8b185ffa390374c40de3a5c79061a06c7bbed48224eb616675c18e0734_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_99884800d9c997faf084494909f47cdd904ed1c5108cc82538bab578415ccfff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99884800d9c997faf084494909f47cdd904ed1c5108cc82538bab578415ccfff->enter($__internal_99884800d9c997faf084494909f47cdd904ed1c5108cc82538bab578415ccfff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Banco</h1>

    <table>
        <tbody>
            <tr>
                <th>Nombanco</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["banco"]) ? $context["banco"] : $this->getContext($context, "banco")), "nombanco", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Estadobanco</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["banco"]) ? $context["banco"] : $this->getContext($context, "banco")), "estadobanco", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Idbanco</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["banco"]) ? $context["banco"] : $this->getContext($context, "banco")), "idbanco", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("banco_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("banco_edit", array("id" => $this->getAttribute((isset($context["banco"]) ? $context["banco"] : $this->getContext($context, "banco")), "idbanco", array()))), "html", null, true);
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
        
        $__internal_99884800d9c997faf084494909f47cdd904ed1c5108cc82538bab578415ccfff->leave($__internal_99884800d9c997faf084494909f47cdd904ed1c5108cc82538bab578415ccfff_prof);

    }

    public function getTemplateName()
    {
        return "banco/show.html.twig";
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
    <h1>Banco</h1>

    <table>
        <tbody>
            <tr>
                <th>Nombanco</th>
                <td>{{ banco.nombanco }}</td>
            </tr>
            <tr>
                <th>Estadobanco</th>
                <td>{% if banco.estadobanco %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Idbanco</th>
                <td>{{ banco.idbanco }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('banco_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('banco_edit', { 'id': banco.idbanco }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "banco/show.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\app\\Resources\\views\\banco\\show.html.twig");
    }
}
