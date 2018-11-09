<?php

/* banco/Bancoindex.html.twig */
class __TwigTemplate_4e35e6ecb238132742e064efe759517a25e9124b75b7462099fd1cd3e07267e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "banco/Bancoindex.html.twig", 1);
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
        $__internal_e0dac68c7a71fccc8cf834a72d1bb6b792a462de852107922c6b4a77df8a6709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0dac68c7a71fccc8cf834a72d1bb6b792a462de852107922c6b4a77df8a6709->enter($__internal_e0dac68c7a71fccc8cf834a72d1bb6b792a462de852107922c6b4a77df8a6709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "banco/Bancoindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0dac68c7a71fccc8cf834a72d1bb6b792a462de852107922c6b4a77df8a6709->leave($__internal_e0dac68c7a71fccc8cf834a72d1bb6b792a462de852107922c6b4a77df8a6709_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_d8af254edbf4182a88c7367ee3349bf61c232e4722e311caad1894c4d0f5c279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8af254edbf4182a88c7367ee3349bf61c232e4722e311caad1894c4d0f5c279->enter($__internal_d8af254edbf4182a88c7367ee3349bf61c232e4722e311caad1894c4d0f5c279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Bancos | ";
        
        $__internal_d8af254edbf4182a88c7367ee3349bf61c232e4722e311caad1894c4d0f5c279->leave($__internal_d8af254edbf4182a88c7367ee3349bf61c232e4722e311caad1894c4d0f5c279_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_334711b483872c39ea748feca2f6f902a338328f10a319ddf1040994ed3fd243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_334711b483872c39ea748feca2f6f902a338328f10a319ddf1040994ed3fd243->enter($__internal_334711b483872c39ea748feca2f6f902a338328f10a319ddf1040994ed3fd243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Catalogo De Bancos ";
        
        $__internal_334711b483872c39ea748feca2f6f902a338328f10a319ddf1040994ed3fd243->leave($__internal_334711b483872c39ea748feca2f6f902a338328f10a319ddf1040994ed3fd243_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_fc3b0a75c5e560b3f5f9d595659a62527a367170f67456f92445bd7364eef51e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc3b0a75c5e560b3f5f9d595659a62527a367170f67456f92445bd7364eef51e->enter($__internal_fc3b0a75c5e560b3f5f9d595659a62527a367170f67456f92445bd7364eef51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#CrearBanco\"> + Banco</button>
        ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Banco:new"));
        echo "
</div>
<br> </br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:90%\" id=\"tabelMahasiswa\">
          <thead class=\"thead-light\">
            <tr>
                <th>Id</th>
                <th>Banco</th>
                <th>Estado</th>
                <th>Accion</th>

            </tr>
        </thead>
        <tbody>

        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bancos"]) ? $context["bancos"] : $this->getContext($context, "bancos")));
        foreach ($context['_seq'] as $context["_key"] => $context["banco"]) {
            // line 30
            echo "        <tr>
              <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["banco"], "idbanco", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["banco"], "nombanco", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 33
            if ($this->getAttribute($context["banco"], "estadobanco", array())) {
                echo "Activo";
            } else {
                echo "Inactivo";
            }
            echo "</td>
              <td>
                <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#showBanco";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["banco"], "idbanco", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                        ";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Banco:show", array("id" => $this->getAttribute($context["banco"], "idbanco", array()))));
            echo "
                </div>


              </td>

          </tr>

        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banco'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "      </tbody>
  </table>
  </div>
  </div>
";
        
        $__internal_fc3b0a75c5e560b3f5f9d595659a62527a367170f67456f92445bd7364eef51e->leave($__internal_fc3b0a75c5e560b3f5f9d595659a62527a367170f67456f92445bd7364eef51e_prof);

    }

    public function getTemplateName()
    {
        return "banco/Bancoindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 46,  121 => 36,  117 => 35,  108 => 33,  104 => 32,  100 => 31,  97 => 30,  93 => 29,  74 => 13,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Bancos | {% endblock %}
{% block page_subtitle %}Catalogo De Bancos {% endblock %}

{% block page_content %}

<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#CrearBanco\"> + Banco</button>
        {{ render(controller('AppBundle:Banco:new' )) }}
</div>
<br> </br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:90%\" id=\"tabelMahasiswa\">
          <thead class=\"thead-light\">
            <tr>
                <th>Id</th>
                <th>Banco</th>
                <th>Estado</th>
                <th>Accion</th>

            </tr>
        </thead>
        <tbody>

        {% for banco in bancos %}
        <tr>
              <td>{{ banco.idbanco }}</td>
              <td>{{ banco.nombanco }}</td>
              <td>{% if banco.estadobanco %}Activo{% else %}Inactivo{% endif %}</td>
              <td>
                <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#showBanco{{ banco.idbanco }}\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                        {{ render(controller('AppBundle:Banco:show', { 'id' : banco.idbanco } )) }}
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
", "banco/Bancoindex.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\banco\\Bancoindex.html.twig");
    }
}
