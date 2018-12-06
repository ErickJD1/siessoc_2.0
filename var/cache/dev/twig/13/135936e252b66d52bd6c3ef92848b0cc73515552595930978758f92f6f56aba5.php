<?php

/* :tipotransaccion:Tipotransaccionindex.html.twig */
class __TwigTemplate_4ce888c9cf287a4c221179fb0447e03035a7079b94636821425c98a033060be0 extends Twig_Template
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
        $__internal_a8008c36ed44fcae1884dd817020a7dea0c1316041e8fa3883c75358042c040b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8008c36ed44fcae1884dd817020a7dea0c1316041e8fa3883c75358042c040b->enter($__internal_a8008c36ed44fcae1884dd817020a7dea0c1316041e8fa3883c75358042c040b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipotransaccion:Tipotransaccionindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8008c36ed44fcae1884dd817020a7dea0c1316041e8fa3883c75358042c040b->leave($__internal_a8008c36ed44fcae1884dd817020a7dea0c1316041e8fa3883c75358042c040b_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_099c9d147211d517f87672ab521df4d9badef045eea88b9ed92d576844048f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_099c9d147211d517f87672ab521df4d9badef045eea88b9ed92d576844048f68->enter($__internal_099c9d147211d517f87672ab521df4d9badef045eea88b9ed92d576844048f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Cuentas | ";
        
        $__internal_099c9d147211d517f87672ab521df4d9badef045eea88b9ed92d576844048f68->leave($__internal_099c9d147211d517f87672ab521df4d9badef045eea88b9ed92d576844048f68_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_0bf09a025b67d57464a1fa68263b11f8da4fe5f4e658b6a57896a92f5ba65f8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf09a025b67d57464a1fa68263b11f8da4fe5f4e658b6a57896a92f5ba65f8f->enter($__internal_0bf09a025b67d57464a1fa68263b11f8da4fe5f4e658b6a57896a92f5ba65f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Catalogo De Cuenta ";
        
        $__internal_0bf09a025b67d57464a1fa68263b11f8da4fe5f4e658b6a57896a92f5ba65f8f->leave($__internal_0bf09a025b67d57464a1fa68263b11f8da4fe5f4e658b6a57896a92f5ba65f8f_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_f9f3cddf966334f68c832f07ae1af2a301032d65634685c2173a6f1299c1987a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f3cddf966334f68c832f07ae1af2a301032d65634685c2173a6f1299c1987a->enter($__internal_f9f3cddf966334f68c832f07ae1af2a301032d65634685c2173a6f1299c1987a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_f9f3cddf966334f68c832f07ae1af2a301032d65634685c2173a6f1299c1987a->leave($__internal_f9f3cddf966334f68c832f07ae1af2a301032d65634685c2173a6f1299c1987a_prof);

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
", ":tipotransaccion:Tipotransaccionindex.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/tipotransaccion/Tipotransaccionindex.html.twig");
    }
}
