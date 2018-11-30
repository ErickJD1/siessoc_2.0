<?php

/* :tipotransaccion:Tipotransaccionindex.html.twig */
class __TwigTemplate_8d8fe2aab2686af388a29dff498d5384095750799247830c02d0d6defb8f1152 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":tipotransaccion:Tipotransaccionindex.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2a6cb4b18600839c9ea62ff477ff07e8553d4e699fb240084bad2af53eba158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a6cb4b18600839c9ea62ff477ff07e8553d4e699fb240084bad2af53eba158->enter($__internal_c2a6cb4b18600839c9ea62ff477ff07e8553d4e699fb240084bad2af53eba158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipotransaccion:Tipotransaccionindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2a6cb4b18600839c9ea62ff477ff07e8553d4e699fb240084bad2af53eba158->leave($__internal_c2a6cb4b18600839c9ea62ff477ff07e8553d4e699fb240084bad2af53eba158_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_2856ed90db5dc1f4a05efcb20266889ef068ac51d24ab633c6de2b7696dd437d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2856ed90db5dc1f4a05efcb20266889ef068ac51d24ab633c6de2b7696dd437d->enter($__internal_2856ed90db5dc1f4a05efcb20266889ef068ac51d24ab633c6de2b7696dd437d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Cuentas | ";
        
        $__internal_2856ed90db5dc1f4a05efcb20266889ef068ac51d24ab633c6de2b7696dd437d->leave($__internal_2856ed90db5dc1f4a05efcb20266889ef068ac51d24ab633c6de2b7696dd437d_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_9e069ce1b9057dd00bf58389934675f1959d609a46899f1e8c88ce95df1966d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e069ce1b9057dd00bf58389934675f1959d609a46899f1e8c88ce95df1966d3->enter($__internal_9e069ce1b9057dd00bf58389934675f1959d609a46899f1e8c88ce95df1966d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Catalogo De Cuenta ";
        
        $__internal_9e069ce1b9057dd00bf58389934675f1959d609a46899f1e8c88ce95df1966d3->leave($__internal_9e069ce1b9057dd00bf58389934675f1959d609a46899f1e8c88ce95df1966d3_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_7549beaff8a696452f72db5d31a6a67a0409510dfd81afdd90c3afb9b39b0201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7549beaff8a696452f72db5d31a6a67a0409510dfd81afdd90c3afb9b39b0201->enter($__internal_7549beaff8a696452f72db5d31a6a67a0409510dfd81afdd90c3afb9b39b0201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#CrearTransaccion\"> + Registrar Transaccion</button>
    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Tipotransaccion:new"));
        echo "
</div>
<br> </br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Tipo De Transaccion</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipotransaccions"]) ? $context["tipotransaccions"] : $this->getContext($context, "tipotransaccions")));
        foreach ($context['_seq'] as $context["_key"] => $context["tipotransaccion"]) {
            // line 29
            echo "            <tr>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipotransaccion"], "idtipotransaccion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipotransaccion"], "nombretipotransac", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            if ($this->getAttribute($context["tipotransaccion"], "estadotipotransac", array())) {
                echo "Alta";
            } else {
                echo "Baja";
            }
            echo "</td>
                <td>
                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerTransac";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipotransaccion"], "idtipotransaccion", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                          ";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Tipotransaccion:show", array("id" => $this->getAttribute($context["tipotransaccion"], "idtipotransaccion", array()))));
            echo "
                  </div>

                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent;  border: none;\" data-toggle=\"modal\" data-target=\"#EditTransaccion";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipotransaccion"], "idtipotransaccion", array()), "html", null, true);
            echo "\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></button>
                          ";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Tipotransaccion:edit", array("id" => $this->getAttribute($context["tipotransaccion"], "idtipotransaccion", array()))));
            echo "
                  </div>
                </td>
            </tr>

          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipotransaccion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>
    </div>
    </div>
";
        
        $__internal_7549beaff8a696452f72db5d31a6a67a0409510dfd81afdd90c3afb9b39b0201->leave($__internal_7549beaff8a696452f72db5d31a6a67a0409510dfd81afdd90c3afb9b39b0201_prof);

    }

    public function getTemplateName()
    {
        return ":tipotransaccion:Tipotransaccionindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 46,  130 => 39,  126 => 38,  120 => 35,  116 => 34,  107 => 32,  103 => 31,  99 => 30,  96 => 29,  92 => 28,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Cuentas | {% endblock %}
{% block page_subtitle %}Catalogo De Cuenta {% endblock %}

{% block page_content %}

<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#CrearTransaccion\"> + Registrar Transaccion</button>
    {{ render(controller('AppBundle:Tipotransaccion:new')) }}
</div>
<br> </br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Tipo De Transaccion</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

        {% for tipotransaccion in tipotransaccions %}
            <tr>
                <td>{{ tipotransaccion.idtipotransaccion }}</td>
                <td>{{ tipotransaccion.nombretipotransac }}</td>
                <td>{% if tipotransaccion.estadotipotransac %}Alta{% else %}Baja{% endif %}</td>
                <td>
                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerTransac{{ tipotransaccion.idtipotransaccion }}\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                          {{ render(controller('AppBundle:Tipotransaccion:show', { 'id' : tipotransaccion.idtipotransaccion } )) }}
                  </div>

                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent;  border: none;\" data-toggle=\"modal\" data-target=\"#EditTransaccion{{ tipotransaccion.idtipotransaccion }}\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></button>
                          {{ render(controller('AppBundle:Tipotransaccion:edit', { 'id' : tipotransaccion.idtipotransaccion } )) }}
                  </div>
                </td>
            </tr>

          </div>
        {% endfor %}
        </tbody>
    </table>
    </div>
    </div>
{% endblock %}
", ":tipotransaccion:Tipotransaccionindex.html.twig", "/home/ubuntu/workspace/app/Resources/views/tipotransaccion/Tipotransaccionindex.html.twig");
    }
}
