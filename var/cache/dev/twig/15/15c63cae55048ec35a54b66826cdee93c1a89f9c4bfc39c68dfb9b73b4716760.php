<?php

/* tipocuenta/TipoCuentaindex.html.twig */
class __TwigTemplate_75a27a5acf23b1595b47dc0986dc0f28445fe0c1c1623a1ca9acb9e3caad9fcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "tipocuenta/TipoCuentaindex.html.twig", 1);
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
        $__internal_3f4204afe092364ef140f56635fd75d319d511210e4c9eaf87c63a2e0f1f7f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f4204afe092364ef140f56635fd75d319d511210e4c9eaf87c63a2e0f1f7f75->enter($__internal_3f4204afe092364ef140f56635fd75d319d511210e4c9eaf87c63a2e0f1f7f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipocuenta/TipoCuentaindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f4204afe092364ef140f56635fd75d319d511210e4c9eaf87c63a2e0f1f7f75->leave($__internal_3f4204afe092364ef140f56635fd75d319d511210e4c9eaf87c63a2e0f1f7f75_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_017744c4db59e306c7a717dcdea55b314f9f34044ee875f832b3cb161baf309b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_017744c4db59e306c7a717dcdea55b314f9f34044ee875f832b3cb161baf309b->enter($__internal_017744c4db59e306c7a717dcdea55b314f9f34044ee875f832b3cb161baf309b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Tipo Cuenta | ";
        
        $__internal_017744c4db59e306c7a717dcdea55b314f9f34044ee875f832b3cb161baf309b->leave($__internal_017744c4db59e306c7a717dcdea55b314f9f34044ee875f832b3cb161baf309b_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_8bf9dc7235dcea197877fe98d09d83e84379e34dbf977d2d85d1ed332214a5a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf9dc7235dcea197877fe98d09d83e84379e34dbf977d2d85d1ed332214a5a0->enter($__internal_8bf9dc7235dcea197877fe98d09d83e84379e34dbf977d2d85d1ed332214a5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Catalogo Tipo Cuenta ";
        
        $__internal_8bf9dc7235dcea197877fe98d09d83e84379e34dbf977d2d85d1ed332214a5a0->leave($__internal_8bf9dc7235dcea197877fe98d09d83e84379e34dbf977d2d85d1ed332214a5a0_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_5647f79bcab5ab200fcf40fbcf593958d6991f7a8f71dc0dc714c52aa6db97a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5647f79bcab5ab200fcf40fbcf593958d6991f7a8f71dc0dc714c52aa6db97a3->enter($__internal_5647f79bcab5ab200fcf40fbcf593958d6991f7a8f71dc0dc714c52aa6db97a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#crearCuenta\"> + Tipo Cuenta</button>
     ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Tipocuenta:new"));
        echo "
</div>
<br> </br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:90%\" id=\"tabelMahasiswa\">
        <thead class=\"thead-light\">
            <tr>
                <th>ID</th>
                <th>Tipo Cuenta</th>
                <th>Descripcion</th>
                <th>Estado Cuenta</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipocuentas"]) ? $context["tipocuentas"] : $this->getContext($context, "tipocuentas")));
        foreach ($context['_seq'] as $context["_key"] => $context["tipocuentum"]) {
            // line 30
            echo "            <tr>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "Nombrecuenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "descripcion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            if ($this->getAttribute($context["tipocuentum"], "estadotipocuenta", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#miventana";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                          ";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Tipocuenta:show", array("id" => $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()))));
            echo "
                  </div>

                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent;  border: none;\" data-toggle=\"modal\" data-target=\"#editcuenta";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()), "html", null, true);
            echo "\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></button>
                          ";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Tipocuenta:edit", array("id" => $this->getAttribute($context["tipocuentum"], "idtipocuenta", array()))));
            echo "
                  </div>




                </td>
            </tr>

          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipocuentum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </tbody>
    </table>
    </div>
    </div>
";
        
        $__internal_5647f79bcab5ab200fcf40fbcf593958d6991f7a8f71dc0dc714c52aa6db97a3->leave($__internal_5647f79bcab5ab200fcf40fbcf593958d6991f7a8f71dc0dc714c52aa6db97a3_prof);

    }

    public function getTemplateName()
    {
        return "tipocuenta/TipoCuentaindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 52,  135 => 41,  131 => 40,  125 => 37,  121 => 36,  112 => 34,  108 => 33,  104 => 32,  100 => 31,  97 => 30,  93 => 29,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Tipo Cuenta | {% endblock %}
{% block page_subtitle %}Catalogo Tipo Cuenta {% endblock %}

{% block page_content %}

<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#crearCuenta\"> + Tipo Cuenta</button>
     {{ render(controller('AppBundle:Tipocuenta:new' )) }}
</div>
<br> </br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:90%\" id=\"tabelMahasiswa\">
        <thead class=\"thead-light\">
            <tr>
                <th>ID</th>
                <th>Tipo Cuenta</th>
                <th>Descripcion</th>
                <th>Estado Cuenta</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

        {% for tipocuentum in tipocuentas %}
            <tr>
                <td>{{ tipocuentum.idtipocuenta }}</td>
                <td>{{ tipocuentum.Nombrecuenta }}</td>
                <td>{{ tipocuentum.descripcion }}</td>
                <td>{% if tipocuentum.estadotipocuenta %}Yes{% else %}No{% endif %}</td>
                <td>
                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#miventana{{ tipocuentum.idtipocuenta }}\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                          {{ render(controller('AppBundle:Tipocuenta:show', { 'id' : tipocuentum.idtipocuenta } )) }}
                  </div>

                  <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent;  border: none;\" data-toggle=\"modal\" data-target=\"#editcuenta{{ tipocuentum.idtipocuenta }}\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></button>
                          {{ render(controller('AppBundle:Tipocuenta:edit', { 'id' : tipocuentum.idtipocuenta } )) }}
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
", "tipocuenta/TipoCuentaindex.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\app\\Resources\\views\\tipocuenta\\TipoCuentaindex.html.twig");
    }
}
