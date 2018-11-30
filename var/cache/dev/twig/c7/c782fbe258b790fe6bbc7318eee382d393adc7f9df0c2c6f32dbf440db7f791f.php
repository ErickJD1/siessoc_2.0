<?php

/* :banco:Bancoindex.html.twig */
class __TwigTemplate_4d3d82479454d8b63b707c594687abc4a1c666321c3e05a9135bbf7a54ad0df8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":banco:Bancoindex.html.twig", 1);
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
        $__internal_a44127d3b7da28abfd9a9dabe06688fd1df62284b40ffb16d9cbfb5a13aa10e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a44127d3b7da28abfd9a9dabe06688fd1df62284b40ffb16d9cbfb5a13aa10e3->enter($__internal_a44127d3b7da28abfd9a9dabe06688fd1df62284b40ffb16d9cbfb5a13aa10e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":banco:Bancoindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a44127d3b7da28abfd9a9dabe06688fd1df62284b40ffb16d9cbfb5a13aa10e3->leave($__internal_a44127d3b7da28abfd9a9dabe06688fd1df62284b40ffb16d9cbfb5a13aa10e3_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_0b70d17ef1dcb8dd5183b4eb5c1b9890ce38d27cad56fdbcdb3f0c4768874a9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b70d17ef1dcb8dd5183b4eb5c1b9890ce38d27cad56fdbcdb3f0c4768874a9f->enter($__internal_0b70d17ef1dcb8dd5183b4eb5c1b9890ce38d27cad56fdbcdb3f0c4768874a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Bancos | ";
        
        $__internal_0b70d17ef1dcb8dd5183b4eb5c1b9890ce38d27cad56fdbcdb3f0c4768874a9f->leave($__internal_0b70d17ef1dcb8dd5183b4eb5c1b9890ce38d27cad56fdbcdb3f0c4768874a9f_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_2568efbf37d886025254a80051d12755e1f35095d8b1a69c591b6cfa9e3577a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2568efbf37d886025254a80051d12755e1f35095d8b1a69c591b6cfa9e3577a7->enter($__internal_2568efbf37d886025254a80051d12755e1f35095d8b1a69c591b6cfa9e3577a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Catalogo De Bancos ";
        
        $__internal_2568efbf37d886025254a80051d12755e1f35095d8b1a69c591b6cfa9e3577a7->leave($__internal_2568efbf37d886025254a80051d12755e1f35095d8b1a69c591b6cfa9e3577a7_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e2a92ba3a37086da21959c2309d1a048ef08505ca067bbeaaa438502698dac9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2a92ba3a37086da21959c2309d1a048ef08505ca067bbeaaa438502698dac9e->enter($__internal_e2a92ba3a37086da21959c2309d1a048ef08505ca067bbeaaa438502698dac9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "banco/new\" class=\"btn btn-primary btn-sm\">+ Nuevo Banco</a>
</div>
<br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
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
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bancos"]) ? $context["bancos"] : $this->getContext($context, "bancos")));
        foreach ($context['_seq'] as $context["_key"] => $context["banco"]) {
            // line 29
            echo "        <tr>
              <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["banco"], "idbanco", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["banco"], "nombanco", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 32
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
                
                <div style=\"float:left;\" >
                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
            echo "banco/edit/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["banco"], "idbanco", array()), "html", null, true);
            echo "\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></a>
                </div>
               
              </td>

          </tr>

        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banco'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "      </tbody>
  </table>
  </div>
  </div>
";
        
        $__internal_e2a92ba3a37086da21959c2309d1a048ef08505ca067bbeaaa438502698dac9e->leave($__internal_e2a92ba3a37086da21959c2309d1a048ef08505ca067bbeaaa438502698dac9e_prof);

    }

    public function getTemplateName()
    {
        return ":banco:Bancoindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 49,  128 => 40,  121 => 36,  117 => 35,  107 => 32,  103 => 31,  99 => 30,  96 => 29,  92 => 28,  73 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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
    <a href=\"{{ absolute_url(asset('')) }}banco/new\" class=\"btn btn-primary btn-sm\">+ Nuevo Banco</a>
</div>
<br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
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
                
                <div style=\"float:left;\" >
                <a href=\"{{ absolute_url(asset('')) }}banco/edit/{{ banco.idbanco }}\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></a>
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
", ":banco:Bancoindex.html.twig", "/home/ubuntu/workspace/app/Resources/views/banco/Bancoindex.html.twig");
    }
}
