<?php

/* role/index.html.twig */
class __TwigTemplate_ae1398c0e032fe36804f61c6252f8132ccad87eb600f7633d381583d98be69c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "role/index.html.twig", 1);
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
        $__internal_a54e88c93bd4ec76b9f3efb11352457631b15673664bfbe68655c5d95d235551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a54e88c93bd4ec76b9f3efb11352457631b15673664bfbe68655c5d95d235551->enter($__internal_a54e88c93bd4ec76b9f3efb11352457631b15673664bfbe68655c5d95d235551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "role/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a54e88c93bd4ec76b9f3efb11352457631b15673664bfbe68655c5d95d235551->leave($__internal_a54e88c93bd4ec76b9f3efb11352457631b15673664bfbe68655c5d95d235551_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f89863cddace1bd7cecf6d066cfb14c594913e3166e4d63cc8ff7f4dd9426bee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89863cddace1bd7cecf6d066cfb14c594913e3166e4d63cc8ff7f4dd9426bee->enter($__internal_f89863cddace1bd7cecf6d066cfb14c594913e3166e4d63cc8ff7f4dd9426bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Roles list</h1>

    <table>
        <thead>
            <tr>
                <th>Nomrole</th>
                <th>Descripcionrole</th>
                <th>Estadorole</th>
                <th>Idrole</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_show", array("id" => $this->getAttribute($context["role"], "idrole", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "nomrole", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "descripcionrole", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["role"], "estadorole", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "idrole", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_show", array("id" => $this->getAttribute($context["role"], "idrole", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_edit", array("id" => $this->getAttribute($context["role"], "idrole", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_new");
        echo "\">Create a new role</a>
        </li>
    </ul>
";
        
        $__internal_f89863cddace1bd7cecf6d066cfb14c594913e3166e4d63cc8ff7f4dd9426bee->leave($__internal_f89863cddace1bd7cecf6d066cfb14c594913e3166e4d63cc8ff7f4dd9426bee_prof);

    }

    public function getTemplateName()
    {
        return "role/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 40,  105 => 35,  93 => 29,  87 => 26,  80 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Roles list</h1>

    <table>
        <thead>
            <tr>
                <th>Nomrole</th>
                <th>Descripcionrole</th>
                <th>Estadorole</th>
                <th>Idrole</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for role in roles %}
            <tr>
                <td><a href=\"{{ path('role_show', { 'id': role.idrole }) }}\">{{ role.nomrole }}</a></td>
                <td>{{ role.descripcionrole }}</td>
                <td>{% if role.estadorole %}Yes{% else %}No{% endif %}</td>
                <td>{{ role.idrole }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('role_show', { 'id': role.idrole }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('role_edit', { 'id': role.idrole }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('role_new') }}\">Create a new role</a>
        </li>
    </ul>
{% endblock %}
", "role/index.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\role\\index.html.twig");
    }
}
