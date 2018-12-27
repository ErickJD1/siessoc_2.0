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
        $__internal_992b0e6583ac5b87c885e9e2ae4231fa77b305265f6324878d4c56a314fc5197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_992b0e6583ac5b87c885e9e2ae4231fa77b305265f6324878d4c56a314fc5197->enter($__internal_992b0e6583ac5b87c885e9e2ae4231fa77b305265f6324878d4c56a314fc5197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "banco/Bancoindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_992b0e6583ac5b87c885e9e2ae4231fa77b305265f6324878d4c56a314fc5197->leave($__internal_992b0e6583ac5b87c885e9e2ae4231fa77b305265f6324878d4c56a314fc5197_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_4c36cee6162af132be08bddc272931df66e0580a1cb529ee3f3b6eab5942dbee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c36cee6162af132be08bddc272931df66e0580a1cb529ee3f3b6eab5942dbee->enter($__internal_4c36cee6162af132be08bddc272931df66e0580a1cb529ee3f3b6eab5942dbee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Bancos | ";
        
        $__internal_4c36cee6162af132be08bddc272931df66e0580a1cb529ee3f3b6eab5942dbee->leave($__internal_4c36cee6162af132be08bddc272931df66e0580a1cb529ee3f3b6eab5942dbee_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_41bec3e02e9bc578ebe37da66b467034a6d21795dd83fd0a2cb0830f02757345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41bec3e02e9bc578ebe37da66b467034a6d21795dd83fd0a2cb0830f02757345->enter($__internal_41bec3e02e9bc578ebe37da66b467034a6d21795dd83fd0a2cb0830f02757345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Catalogo De Bancos ";
        
        $__internal_41bec3e02e9bc578ebe37da66b467034a6d21795dd83fd0a2cb0830f02757345->leave($__internal_41bec3e02e9bc578ebe37da66b467034a6d21795dd83fd0a2cb0830f02757345_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_9177a0926d415256dc2eecfd408df8bf1f55a80eb8a322eb7f73f7bc4a18235d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9177a0926d415256dc2eecfd408df8bf1f55a80eb8a322eb7f73f7bc4a18235d->enter($__internal_9177a0926d415256dc2eecfd408df8bf1f55a80eb8a322eb7f73f7bc4a18235d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <a style=\"font-size: 20px\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("banco_new");
        echo "\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Banco</a>
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
                  <center>
                        <div class=\"row\">
                        <div align=\"center\" class=\"col col-sm-4\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#showdeleteBanco";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["banco"], "idbanco", array()), "html", null, true);
            echo "\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: crimson\"></i></button>
                                ";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Banco:showdelete", array("id" => $this->getAttribute($context["banco"], "idbanco", array()))));
            echo "
                        </div>

                        <div align=\"center\" class=\"col col-sm-4\" >
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("banco_edit", array("id" => $this->getAttribute($context["banco"], "idbanco", array()))), "html", null, true);
            echo "\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                        </div>
                        
                        <div align=\"center\" class=\"col col-sm-4\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#showBanco";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["banco"], "idbanco", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i></button>
                                ";
            // line 45
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
        // line 55
        echo "      </tbody>
  </table>
  </div>
  </div>
";
        
        $__internal_9177a0926d415256dc2eecfd408df8bf1f55a80eb8a322eb7f73f7bc4a18235d->leave($__internal_9177a0926d415256dc2eecfd408df8bf1f55a80eb8a322eb7f73f7bc4a18235d_prof);

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
        return array (  155 => 55,  139 => 45,  135 => 44,  129 => 41,  122 => 37,  118 => 36,  107 => 32,  103 => 31,  99 => 30,  96 => 29,  92 => 28,  73 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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
    <a style=\"font-size: 20px\" href=\"{{ path('banco_new') }}\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Banco</a>
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
                  <center>
                        <div class=\"row\">
                        <div align=\"center\" class=\"col col-sm-4\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#showdeleteBanco{{ banco.idbanco }}\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: crimson\"></i></button>
                                {{ render(controller('AppBundle:Banco:showdelete', { 'id' : banco.idbanco } )) }}
                        </div>

                        <div align=\"center\" class=\"col col-sm-4\" >
                            <a href=\"{{ path('banco_edit',{ 'id' : banco.idbanco }) }}\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                        </div>
                        
                        <div align=\"center\" class=\"col col-sm-4\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#showBanco{{ banco.idbanco }}\"><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i></button>
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
