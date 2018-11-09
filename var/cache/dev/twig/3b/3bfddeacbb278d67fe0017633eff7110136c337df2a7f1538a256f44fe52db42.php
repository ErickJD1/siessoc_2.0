<?php

/* :cuenta:Cuentaindex.html.twig */
class __TwigTemplate_2521289b266295530a704da776536fae8def961674eea2e41eb82edb4ef7959d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":cuenta:Cuentaindex.html.twig", 1);
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
        $__internal_eee696723b2d614251132fad38f64367ca9c367e3b6cf1aa5497ee536077241f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee696723b2d614251132fad38f64367ca9c367e3b6cf1aa5497ee536077241f->enter($__internal_eee696723b2d614251132fad38f64367ca9c367e3b6cf1aa5497ee536077241f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cuenta:Cuentaindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eee696723b2d614251132fad38f64367ca9c367e3b6cf1aa5497ee536077241f->leave($__internal_eee696723b2d614251132fad38f64367ca9c367e3b6cf1aa5497ee536077241f_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_296d1d8f34b338309649eed808fdb5a4d58e2a4a419845e749227577c51bf56a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_296d1d8f34b338309649eed808fdb5a4d58e2a4a419845e749227577c51bf56a->enter($__internal_296d1d8f34b338309649eed808fdb5a4d58e2a4a419845e749227577c51bf56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Cuentas | ";
        
        $__internal_296d1d8f34b338309649eed808fdb5a4d58e2a4a419845e749227577c51bf56a->leave($__internal_296d1d8f34b338309649eed808fdb5a4d58e2a4a419845e749227577c51bf56a_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_c044117824b0c2c71d0f98526acc7f75b300a1b251929a0988c207613bf3c8c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c044117824b0c2c71d0f98526acc7f75b300a1b251929a0988c207613bf3c8c9->enter($__internal_c044117824b0c2c71d0f98526acc7f75b300a1b251929a0988c207613bf3c8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Catalogo De Cuenta ";
        
        $__internal_c044117824b0c2c71d0f98526acc7f75b300a1b251929a0988c207613bf3c8c9->leave($__internal_c044117824b0c2c71d0f98526acc7f75b300a1b251929a0988c207613bf3c8c9_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_fc1ab978d240ce22c9eb024d364aeb3d49ff83d7b6c2fb9546959f442621fe3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc1ab978d240ce22c9eb024d364aeb3d49ff83d7b6c2fb9546959f442621fe3c->enter($__internal_fc1ab978d240ce22c9eb024d364aeb3d49ff83d7b6c2fb9546959f442621fe3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#CrearCuenta\"> + Nueva Cuenta</button>
    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Cuenta:new"));
        echo "
</div>
<br> </br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:90%\" id=\"tabelMahasiswa\">
        <thead class=\"thead-light\">
            <tr>
                <th>ID</th>
                <th>Numero</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Fecha Apertura</th>
                <th>Saldo Inicial</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cuentas"]) ? $context["cuentas"] : $this->getContext($context, "cuentas")));
        foreach ($context['_seq'] as $context["_key"] => $context["cuentum"]) {
            // line 33
            echo "            <tr>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "idcuenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "numcuenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "nomcuenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "descripcioncuenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            if ($this->getAttribute($context["cuentum"], "fechaapertura", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cuentum"], "fechaapertura", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "saldocuenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            if ($this->getAttribute($context["cuentum"], "estadocuenta", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
              
            </tr>

          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cuentum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>
    </div>
    </div>
";
        
        $__internal_fc1ab978d240ce22c9eb024d364aeb3d49ff83d7b6c2fb9546959f442621fe3c->leave($__internal_fc1ab978d240ce22c9eb024d364aeb3d49ff83d7b6c2fb9546959f442621fe3c_prof);

    }

    public function getTemplateName()
    {
        return ":cuenta:Cuentaindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 46,  129 => 40,  125 => 39,  119 => 38,  115 => 37,  111 => 36,  107 => 35,  103 => 34,  100 => 33,  96 => 32,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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
    <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#CrearCuenta\"> + Nueva Cuenta</button>
    {{ render(controller('AppBundle:Cuenta:new')) }}
</div>
<br> </br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:90%\" id=\"tabelMahasiswa\">
        <thead class=\"thead-light\">
            <tr>
                <th>ID</th>
                <th>Numero</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Fecha Apertura</th>
                <th>Saldo Inicial</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

        {% for cuentum in cuentas %}
            <tr>
                <td>{{ cuentum.idcuenta }}</td>
                <td>{{ cuentum.numcuenta }}</td>
                <td>{{ cuentum.nomcuenta }}</td>
                <td>{{ cuentum.descripcioncuenta }}</td>
                <td>{% if cuentum.fechaapertura %}{{ cuentum.fechaapertura|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ cuentum.saldocuenta }}</td>
                <td>{% if cuentum.estadocuenta %}Yes{% else %}No{% endif %}</td>
              
            </tr>

          </div>
        {% endfor %}
        </tbody>
    </table>
    </div>
    </div>
{% endblock %}
", ":cuenta:Cuentaindex.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/cuenta/Cuentaindex.html.twig");
    }
}
