<?php

/* banco/Bancoindex.html.twig */
class __TwigTemplate_b928c5d188582d7dfa4c885105f88cfb534d73dc86117c6c295ea299bf5c87b2 extends Twig_Template
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
        $__internal_05caf73cc1ced880cc68c1f8b0f6d7e33393f50f03d701d77f713c37323b1078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05caf73cc1ced880cc68c1f8b0f6d7e33393f50f03d701d77f713c37323b1078->enter($__internal_05caf73cc1ced880cc68c1f8b0f6d7e33393f50f03d701d77f713c37323b1078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "banco/Bancoindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05caf73cc1ced880cc68c1f8b0f6d7e33393f50f03d701d77f713c37323b1078->leave($__internal_05caf73cc1ced880cc68c1f8b0f6d7e33393f50f03d701d77f713c37323b1078_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_70c6dbbb75f23793d0d12de27fee64cc0cfac5ab54208fd3a418f6daa7599732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c6dbbb75f23793d0d12de27fee64cc0cfac5ab54208fd3a418f6daa7599732->enter($__internal_70c6dbbb75f23793d0d12de27fee64cc0cfac5ab54208fd3a418f6daa7599732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Catálogos ";
        
        $__internal_70c6dbbb75f23793d0d12de27fee64cc0cfac5ab54208fd3a418f6daa7599732->leave($__internal_70c6dbbb75f23793d0d12de27fee64cc0cfac5ab54208fd3a418f6daa7599732_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_96b45b87c8ddb5bcf17c20892b27a746c5541317d1feaeb2ae7a6c839f037372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96b45b87c8ddb5bcf17c20892b27a746c5541317d1feaeb2ae7a6c839f037372->enter($__internal_96b45b87c8ddb5bcf17c20892b27a746c5541317d1feaeb2ae7a6c839f037372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Banco ";
        
        $__internal_96b45b87c8ddb5bcf17c20892b27a746c5541317d1feaeb2ae7a6c839f037372->leave($__internal_96b45b87c8ddb5bcf17c20892b27a746c5541317d1feaeb2ae7a6c839f037372_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c3976da61d94c5f90538923794a0a752248b6e5a88890acd1a9f75cfed4ae60e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3976da61d94c5f90538923794a0a752248b6e5a88890acd1a9f75cfed4ae60e->enter($__internal_c3976da61d94c5f90538923794a0a752248b6e5a88890acd1a9f75cfed4ae60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <a style=\"font-size: 15px\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("banco_new");
        echo "\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Banco</a>
</div>
<br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
          <thead class=\"thead-light\">
            <tr>
                <th><center>Banco</center></th>
                <th><center></center></th>
                <th><center>Accion</center></th>

            </tr>
        </thead>
        <tbody>

        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bancos"]) ? $context["bancos"] : $this->getContext($context, "bancos")));
        foreach ($context['_seq'] as $context["_key"] => $context["banco"]) {
            // line 28
            echo "        <tr>
              <td><center>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["banco"], "nombanco", array()), "html", null, true);
            echo "</center></td>
              <td><center>";
            // line 30
            if ($this->getAttribute($context["banco"], "estadobanco", array())) {
                echo "Activo";
            } else {
                echo "Inactivo";
            }
            echo "</center></td>
              <td>
                  <center>
                        <div class=\"row\" style=\"width: 100px\">
                        <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#showdeleteBanco";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["banco"], "idbanco", array()), "html", null, true);
            echo "\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: crimson\"></i></button>
                                ";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Banco:showdelete", array("id" => $this->getAttribute($context["banco"], "idbanco", array()))));
            echo "
                        </div>

                        <div style=\"float:left;\" >
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("banco_edit", array("id" => $this->getAttribute($context["banco"], "idbanco", array()))), "html", null, true);
            echo "\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                        </div>
                        
                        <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#showBanco";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["banco"], "idbanco", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i></button>
                                ";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Banco:show", array("id" => $this->getAttribute($context["banco"], "idbanco", array()))));
            echo "
                        </div>
                        </div>
                    </center>
                
              </td>

          </tr>
    
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banco'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "      </tbody>
  </table>
  </div>
  </div>
";
        
        $__internal_c3976da61d94c5f90538923794a0a752248b6e5a88890acd1a9f75cfed4ae60e->leave($__internal_c3976da61d94c5f90538923794a0a752248b6e5a88890acd1a9f75cfed4ae60e_prof);

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
        return array (  150 => 53,  134 => 43,  130 => 42,  124 => 39,  117 => 35,  113 => 34,  102 => 30,  98 => 29,  95 => 28,  91 => 27,  73 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Catálogos {% endblock %}
{% block page_subtitle %}Banco {% endblock %}

{% block page_content %}

<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <a style=\"font-size: 15px\" href=\"{{ path('banco_new') }}\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Banco</a>
</div>
<br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
          <thead class=\"thead-light\">
            <tr>
                <th><center>Banco</center></th>
                <th><center></center></th>
                <th><center>Accion</center></th>

            </tr>
        </thead>
        <tbody>

        {% for banco in bancos %}
        <tr>
              <td><center>{{ banco.nombanco }}</center></td>
              <td><center>{% if banco.estadobanco %}Activo{% else %}Inactivo{% endif %}</center></td>
              <td>
                  <center>
                        <div class=\"row\" style=\"width: 100px\">
                        <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#showdeleteBanco{{ banco.idbanco }}\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: crimson\"></i></button>
                                {{ render(controller('AppBundle:Banco:showdelete', { 'id' : banco.idbanco } )) }}
                        </div>

                        <div style=\"float:left;\" >
                            <a href=\"{{ path('banco_edit',{ 'id' : banco.idbanco }) }}\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                        </div>
                        
                        <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#showBanco{{ banco.idbanco }}\"><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i></button>
                                {{ render(controller('AppBundle:Banco:show', { 'id' : banco.idbanco } )) }}
                        </div>
                        </div>
                    </center>
                
              </td>

          </tr>
    
      {% endfor %}
      </tbody>
  </table>
  </div>
  </div>
{% endblock %}
", "banco/Bancoindex.html.twig", "/home/ubuntu/workspace/app/Resources/views/banco/Bancoindex.html.twig");
    }
}
