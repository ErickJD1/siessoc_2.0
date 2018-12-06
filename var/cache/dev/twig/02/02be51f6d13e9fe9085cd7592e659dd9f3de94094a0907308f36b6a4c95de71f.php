<?php

/* :banco:Bancoindex.html.twig */
class __TwigTemplate_7ae70769831cab6686d11bd68081d701c6c50ecb73f06a934cc41004a9dd0cf3 extends Twig_Template
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
        $__internal_fdad74ca62313a0ae6edd72d62cdee8ca813eadc9f371b335cf35f809885df15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdad74ca62313a0ae6edd72d62cdee8ca813eadc9f371b335cf35f809885df15->enter($__internal_fdad74ca62313a0ae6edd72d62cdee8ca813eadc9f371b335cf35f809885df15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":banco:Bancoindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdad74ca62313a0ae6edd72d62cdee8ca813eadc9f371b335cf35f809885df15->leave($__internal_fdad74ca62313a0ae6edd72d62cdee8ca813eadc9f371b335cf35f809885df15_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_68ed8ba212798230a8fafff9031f9d0b1abbfd6e783b6deeac0e9dc227a9311c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ed8ba212798230a8fafff9031f9d0b1abbfd6e783b6deeac0e9dc227a9311c->enter($__internal_68ed8ba212798230a8fafff9031f9d0b1abbfd6e783b6deeac0e9dc227a9311c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Bancos | ";
        
        $__internal_68ed8ba212798230a8fafff9031f9d0b1abbfd6e783b6deeac0e9dc227a9311c->leave($__internal_68ed8ba212798230a8fafff9031f9d0b1abbfd6e783b6deeac0e9dc227a9311c_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_2855d300ce558d601e35cf6f314057b18289841ec12be9a13e01b36316d6064d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2855d300ce558d601e35cf6f314057b18289841ec12be9a13e01b36316d6064d->enter($__internal_2855d300ce558d601e35cf6f314057b18289841ec12be9a13e01b36316d6064d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Catalogo De Bancos ";
        
        $__internal_2855d300ce558d601e35cf6f314057b18289841ec12be9a13e01b36316d6064d->leave($__internal_2855d300ce558d601e35cf6f314057b18289841ec12be9a13e01b36316d6064d_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_7cc9b85bf8967f0f77bc8ff7ab21a5025ea502f43d24a6d1e5b039abe05557eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cc9b85bf8967f0f77bc8ff7ab21a5025ea502f43d24a6d1e5b039abe05557eb->enter($__internal_7cc9b85bf8967f0f77bc8ff7ab21a5025ea502f43d24a6d1e5b039abe05557eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_7cc9b85bf8967f0f77bc8ff7ab21a5025ea502f43d24a6d1e5b039abe05557eb->leave($__internal_7cc9b85bf8967f0f77bc8ff7ab21a5025ea502f43d24a6d1e5b039abe05557eb_prof);

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
", ":banco:Bancoindex.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/banco/Bancoindex.html.twig");
    }
}
