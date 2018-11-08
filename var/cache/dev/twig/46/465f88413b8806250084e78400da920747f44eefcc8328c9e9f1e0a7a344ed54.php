<?php

/* tipocuenta/index.html.twig */
class __TwigTemplate_9ff66ec73061b2f1e3f7f07ab49639ed9ff5f170277b8e569083f0b1277c0173 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "tipocuenta/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94f245b39b29950e550f7477b4275087ce20f55b6333160a0e4d8479aa946084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94f245b39b29950e550f7477b4275087ce20f55b6333160a0e4d8479aa946084->enter($__internal_94f245b39b29950e550f7477b4275087ce20f55b6333160a0e4d8479aa946084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipocuenta/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94f245b39b29950e550f7477b4275087ce20f55b6333160a0e4d8479aa946084->leave($__internal_94f245b39b29950e550f7477b4275087ce20f55b6333160a0e4d8479aa946084_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_38aa6f783a6d3784c480072b905f4c38c5e96bd6dadfb1d9daaf3f281f8b30ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38aa6f783a6d3784c480072b905f4c38c5e96bd6dadfb1d9daaf3f281f8b30ea->enter($__internal_38aa6f783a6d3784c480072b905f4c38c5e96bd6dadfb1d9daaf3f281f8b30ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tipocuentas list</h1>

    <table>
        <thead>
            <tr>
                <th>Nombrecuenta</th>
                <th>Descripcion</th>
                <th>Estadotipocuenta</th>
                <th>Idtipocuenta</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipocuentas"]) ? $context["tipocuentas"] : $this->getContext($context, "tipocuentas")));
        foreach ($context['_seq'] as $context["_key"] => $context["tipocuentum"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipocuenta_show", array("id" => $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "nombrecuenta", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "descripcion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["tipocuentum"], "estadotipocuenta", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipocuenta_show", array("id" => $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipocuenta_edit", array("id" => $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipocuentum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipocuenta_new");
        echo "\">Create a new tipocuentum</a>
        </li>
    </ul>
";
        
        $__internal_38aa6f783a6d3784c480072b905f4c38c5e96bd6dadfb1d9daaf3f281f8b30ea->leave($__internal_38aa6f783a6d3784c480072b905f4c38c5e96bd6dadfb1d9daaf3f281f8b30ea_prof);

    }

    public function getTemplateName()
    {
        return "tipocuenta/index.html.twig";
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
        return new Twig_Source("{% extends \"layout/base-layout.html.twig\" %}

{% block body %}
    <h1>Tipocuentas list</h1>

    <table>
        <thead>
            <tr>
                <th>Nombrecuenta</th>
                <th>Descripcion</th>
                <th>Estadotipocuenta</th>
                <th>Idtipocuenta</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for tipocuentum in tipocuentas %}
            <tr>
                <td><a href=\"{{ path('tipocuenta_show', { 'id': tipocuentum.idtipocuenta }) }}\">{{ tipocuentum.nombrecuenta }}</a></td>
                <td>{{ tipocuentum.descripcion }}</td>
                <td>{% if tipocuentum.estadotipocuenta %}Yes{% else %}No{% endif %}</td>
                <td>{{ tipocuentum.idtipocuenta }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('tipocuenta_show', { 'id': tipocuentum.idtipocuenta }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('tipocuenta_edit', { 'id': tipocuentum.idtipocuenta }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('tipocuenta_new') }}\">Create a new tipocuentum</a>
        </li>
    </ul>
{% endblock %}
", "tipocuenta/index.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\app\\Resources\\views\\tipocuenta\\index.html.twig");
    }
}
