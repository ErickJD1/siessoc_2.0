<?php

/* banco/index.html.twig */
class __TwigTemplate_163d788f22a5c8863b79bb0a22eb28b7f5514bd08cb6c68b2d614e323183b7ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "banco/index.html.twig", 1);
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
        $__internal_497bb9d1f7f578b2d1e32244596c012f6b6c05000fc13c42230537369a7c7a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497bb9d1f7f578b2d1e32244596c012f6b6c05000fc13c42230537369a7c7a48->enter($__internal_497bb9d1f7f578b2d1e32244596c012f6b6c05000fc13c42230537369a7c7a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "banco/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_497bb9d1f7f578b2d1e32244596c012f6b6c05000fc13c42230537369a7c7a48->leave($__internal_497bb9d1f7f578b2d1e32244596c012f6b6c05000fc13c42230537369a7c7a48_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6ac72550bc12e42bdc928edbe9689b6fd7900a0b2f23d974a475453a0409b55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ac72550bc12e42bdc928edbe9689b6fd7900a0b2f23d974a475453a0409b55->enter($__internal_e6ac72550bc12e42bdc928edbe9689b6fd7900a0b2f23d974a475453a0409b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Bancos list</h1>

    <table>
        <thead>
            <tr>
                <th>Nombanco</th>
                <th>Estadobanco</th>
                <th>Idbanco</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bancos"]) ? $context["bancos"] : $this->getContext($context, "bancos")));
        foreach ($context['_seq'] as $context["_key"] => $context["banco"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("banco_show", array("id" => $this->getAttribute($context["banco"], "idbanco", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["banco"], "nombanco", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            if ($this->getAttribute($context["banco"], "estadobanco", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["banco"], "idbanco", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("banco_show", array("id" => $this->getAttribute($context["banco"], "idbanco", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("banco_edit", array("id" => $this->getAttribute($context["banco"], "idbanco", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banco'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("banco_new");
        echo "\">Create a new banco</a>
        </li>
    </ul>
";
        
        $__internal_e6ac72550bc12e42bdc928edbe9689b6fd7900a0b2f23d974a475453a0409b55->leave($__internal_e6ac72550bc12e42bdc928edbe9689b6fd7900a0b2f23d974a475453a0409b55_prof);

    }

    public function getTemplateName()
    {
        return "banco/index.html.twig";
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
    <h1>Bancos list</h1>

    <table>
        <thead>
            <tr>
                <th>Nombanco</th>
                <th>Estadobanco</th>
                <th>Idbanco</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for banco in bancos %}
            <tr>
                <td><a href=\"{{ path('banco_show', { 'id': banco.idbanco }) }}\">{{ banco.nombanco }}</a></td>
                <td>{% if banco.estadobanco %}Yes{% else %}No{% endif %}</td>
                <td>{{ banco.idbanco }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('banco_show', { 'id': banco.idbanco }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('banco_edit', { 'id': banco.idbanco }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('banco_new') }}\">Create a new banco</a>
        </li>
    </ul>
{% endblock %}
", "banco/index.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\banco\\index.html.twig");
    }
}
