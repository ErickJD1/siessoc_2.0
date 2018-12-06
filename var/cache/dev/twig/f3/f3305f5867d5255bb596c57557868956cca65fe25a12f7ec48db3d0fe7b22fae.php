<?php

/* :movimientoinventario:index.html.twig */
class __TwigTemplate_374a922254a1e31a50fedabb3b8b53bcb0233b394eab940179f4d993c2fbb405 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":movimientoinventario:index.html.twig", 1);
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
        $__internal_df9d3b4c7a03f7fa379b0f5803a666fd13990c5de60b8236448e84e27358e707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df9d3b4c7a03f7fa379b0f5803a666fd13990c5de60b8236448e84e27358e707->enter($__internal_df9d3b4c7a03f7fa379b0f5803a666fd13990c5de60b8236448e84e27358e707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":movimientoinventario:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df9d3b4c7a03f7fa379b0f5803a666fd13990c5de60b8236448e84e27358e707->leave($__internal_df9d3b4c7a03f7fa379b0f5803a666fd13990c5de60b8236448e84e27358e707_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a34b4e340421a0892b7ee8d862015e573c649d9f0d21334c85c6b4ec8eea1fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a34b4e340421a0892b7ee8d862015e573c649d9f0d21334c85c6b4ec8eea1fd->enter($__internal_6a34b4e340421a0892b7ee8d862015e573c649d9f0d21334c85c6b4ec8eea1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Movimientoinventarios list</h1>

    <table>
        <thead>
            <tr>
                <th>Nombremovinv</th>
                <th>Estadomovinv</th>
                <th>Idmovinv</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movimientoinventarios"]) ? $context["movimientoinventarios"] : $this->getContext($context, "movimientoinventarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["movimientoinventario"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movimientoinventario_show", array("id" => $this->getAttribute($context["movimientoinventario"], "idmovinv", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimientoinventario"], "nombremovinv", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            if ($this->getAttribute($context["movimientoinventario"], "estadomovinv", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["movimientoinventario"], "idmovinv", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movimientoinventario_show", array("id" => $this->getAttribute($context["movimientoinventario"], "idmovinv", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movimientoinventario_edit", array("id" => $this->getAttribute($context["movimientoinventario"], "idmovinv", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movimientoinventario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movimientoinventario_new");
        echo "\">Create a new movimientoinventario</a>
        </li>
    </ul>
";
        
        $__internal_6a34b4e340421a0892b7ee8d862015e573c649d9f0d21334c85c6b4ec8eea1fd->leave($__internal_6a34b4e340421a0892b7ee8d862015e573c649d9f0d21334c85c6b4ec8eea1fd_prof);

    }

    public function getTemplateName()
    {
        return ":movimientoinventario:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 38,  100 => 33,  88 => 27,  82 => 24,  75 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Movimientoinventarios list</h1>

    <table>
        <thead>
            <tr>
                <th>Nombremovinv</th>
                <th>Estadomovinv</th>
                <th>Idmovinv</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for movimientoinventario in movimientoinventarios %}
            <tr>
                <td><a href=\"{{ path('movimientoinventario_show', { 'id': movimientoinventario.idmovinv }) }}\">{{ movimientoinventario.nombremovinv }}</a></td>
                <td>{% if movimientoinventario.estadomovinv %}Yes{% else %}No{% endif %}</td>
                <td>{{ movimientoinventario.idmovinv }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('movimientoinventario_show', { 'id': movimientoinventario.idmovinv }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('movimientoinventario_edit', { 'id': movimientoinventario.idmovinv }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('movimientoinventario_new') }}\">Create a new movimientoinventario</a>
        </li>
    </ul>
{% endblock %}
", ":movimientoinventario:index.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/movimientoinventario/index.html.twig");
    }
}
