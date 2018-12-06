<?php

/* :role:show.html.twig */
class __TwigTemplate_5704da758aa2f86d7013e4f09588a0560e801ead2251e2d768c749ee6e09ff3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":role:show.html.twig", 1);
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
        $__internal_5c31821f765f18e72c0fcbdc39618ce5c4056cf8de62e8b79b2d60d84917fa33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c31821f765f18e72c0fcbdc39618ce5c4056cf8de62e8b79b2d60d84917fa33->enter($__internal_5c31821f765f18e72c0fcbdc39618ce5c4056cf8de62e8b79b2d60d84917fa33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":role:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c31821f765f18e72c0fcbdc39618ce5c4056cf8de62e8b79b2d60d84917fa33->leave($__internal_5c31821f765f18e72c0fcbdc39618ce5c4056cf8de62e8b79b2d60d84917fa33_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d749c104aca3b0157a721e5cf514638dd9d07e2940c7ccc286261ea00e75a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d749c104aca3b0157a721e5cf514638dd9d07e2940c7ccc286261ea00e75a87->enter($__internal_4d749c104aca3b0157a721e5cf514638dd9d07e2940c7ccc286261ea00e75a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Role</h1>

    <table>
        <tbody>
            <tr>
                <th>Nomrole</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "nomrole", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripcionrole</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "descripcionrole", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Estadorole</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "estadorole", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Idrole</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "idrole", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_edit", array("id" => $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "idrole", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_4d749c104aca3b0157a721e5cf514638dd9d07e2940c7ccc286261ea00e75a87->leave($__internal_4d749c104aca3b0157a721e5cf514638dd9d07e2940c7ccc286261ea00e75a87_prof);

    }

    public function getTemplateName()
    {
        return ":role:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 37,  95 => 35,  89 => 32,  83 => 29,  73 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Role</h1>

    <table>
        <tbody>
            <tr>
                <th>Nomrole</th>
                <td>{{ role.nomrole }}</td>
            </tr>
            <tr>
                <th>Descripcionrole</th>
                <td>{{ role.descripcionrole }}</td>
            </tr>
            <tr>
                <th>Estadorole</th>
                <td>{% if role.estadorole %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Idrole</th>
                <td>{{ role.idrole }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('role_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('role_edit', { 'id': role.idrole }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":role:show.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/role/show.html.twig");
    }
}
