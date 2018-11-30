<?php

/* :publicacioncontenido:contenidoindex.html.twig */
class __TwigTemplate_8523e321c86c09120cbc98ce1329ce7e47a2a5b02a47582ea6453d582146b10c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":publicacioncontenido:contenidoindex.html.twig", 1);
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
        $__internal_ed6bb930a3f3616be1175b7e009bba6b7883642b7d4a9b15acae3a76842bb3e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed6bb930a3f3616be1175b7e009bba6b7883642b7d4a9b15acae3a76842bb3e1->enter($__internal_ed6bb930a3f3616be1175b7e009bba6b7883642b7d4a9b15acae3a76842bb3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":publicacioncontenido:contenidoindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed6bb930a3f3616be1175b7e009bba6b7883642b7d4a9b15acae3a76842bb3e1->leave($__internal_ed6bb930a3f3616be1175b7e009bba6b7883642b7d4a9b15acae3a76842bb3e1_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_ad1d62419c9c1647302f1b24d5777bc04e2f7866471222fc7e08a0c6139bd5e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad1d62419c9c1647302f1b24d5777bc04e2f7866471222fc7e08a0c6139bd5e4->enter($__internal_ad1d62419c9c1647302f1b24d5777bc04e2f7866471222fc7e08a0c6139bd5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Publicaciones | ";
        
        $__internal_ad1d62419c9c1647302f1b24d5777bc04e2f7866471222fc7e08a0c6139bd5e4->leave($__internal_ad1d62419c9c1647302f1b24d5777bc04e2f7866471222fc7e08a0c6139bd5e4_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_0ba0733086b1b200c312c9e6d781630f98f2768960b9c229f11d12d029aab3c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ba0733086b1b200c312c9e6d781630f98f2768960b9c229f11d12d029aab3c0->enter($__internal_0ba0733086b1b200c312c9e6d781630f98f2768960b9c229f11d12d029aab3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Lista De Publicaciones ";
        
        $__internal_0ba0733086b1b200c312c9e6d781630f98f2768960b9c229f11d12d029aab3c0->leave($__internal_0ba0733086b1b200c312c9e6d781630f98f2768960b9c229f11d12d029aab3c0_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_98c243a603b9dbe6a9bdda8f902572e720a30e764022ffab76875bb15c60bf7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98c243a603b9dbe6a9bdda8f902572e720a30e764022ffab76875bb15c60bf7e->enter($__internal_98c243a603b9dbe6a9bdda8f902572e720a30e764022ffab76875bb15c60bf7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "publicacioncontenido/new\" class=\"btn btn-primary btn-sm\">+ Agregar Contenido</a>
</div>
<br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
          <thead class=\"thead-light\">
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Subtitulo</th>
                <th>Descripcion</th>
                <th>Fecha</th>
                <th>Imagen Contenido</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publicacioncontenidos"]) ? $context["publicacioncontenidos"] : $this->getContext($context, "publicacioncontenidos")));
        foreach ($context['_seq'] as $context["_key"] => $context["publicacioncontenido"]) {
            // line 31
            echo "            <tr>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["publicacioncontenido"], "idcontenido", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["publicacioncontenido"], "titulo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["publicacioncontenido"], "subtitulo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["publicacioncontenido"], "descripcioncontenido", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            if ($this->getAttribute($context["publicacioncontenido"], "fechacontenido", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["publicacioncontenido"], "fechacontenido", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["publicacioncontenido"], "ContenidoPicture", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            if ($this->getAttribute($context["publicacioncontenido"], "estadocontenido", array())) {
                echo "Publicado";
            } else {
                echo "Pendiente";
            }
            echo "</td>
                 <td>
                  
                <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#showContenido";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["publicacioncontenido"], "idcontenido", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                        ";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Publicacioncontenido:show", array("id" => $this->getAttribute($context["publicacioncontenido"], "idcontenido", array()))));
            echo "
                </div>
                
                <div style=\"float:left;\" >
                <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
            echo "publicacioncontenido/edit/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["publicacioncontenido"], "idcontenido", array()), "html", null, true);
            echo "\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></a>
                </div>
               
              </td>

          </tr>

        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publicacioncontenido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "      </tbody>
  </table>
  </div>
  </div>
";
        
        $__internal_98c243a603b9dbe6a9bdda8f902572e720a30e764022ffab76875bb15c60bf7e->leave($__internal_98c243a603b9dbe6a9bdda8f902572e720a30e764022ffab76875bb15c60bf7e_prof);

    }

    public function getTemplateName()
    {
        return ":publicacioncontenido:contenidoindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 55,  148 => 46,  141 => 42,  137 => 41,  127 => 38,  123 => 37,  117 => 36,  113 => 35,  109 => 34,  105 => 33,  101 => 32,  98 => 31,  94 => 30,  73 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Publicaciones | {% endblock %}
{% block page_subtitle %}Lista De Publicaciones {% endblock %}

{% block page_content %}

<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <a href=\"{{ absolute_url(asset('')) }}publicacioncontenido/new\" class=\"btn btn-primary btn-sm\">+ Agregar Contenido</a>
</div>
<br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
          <thead class=\"thead-light\">
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Subtitulo</th>
                <th>Descripcion</th>
                <th>Fecha</th>
                <th>Imagen Contenido</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        {% for publicacioncontenido in publicacioncontenidos %}
            <tr>
                <td>{{ publicacioncontenido.idcontenido }}</td>
                <td>{{ publicacioncontenido.titulo }}</td>
                <td>{{ publicacioncontenido.subtitulo }}</td>
                <td>{{ publicacioncontenido.descripcioncontenido }}</td>
                <td>{% if publicacioncontenido.fechacontenido %}{{ publicacioncontenido.fechacontenido|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ publicacioncontenido.ContenidoPicture }}</td>
                <td>{% if publicacioncontenido.estadocontenido %}Publicado{% else %}Pendiente{% endif %}</td>
                 <td>
                  
                <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#showContenido{{ publicacioncontenido.idcontenido }}\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                        {{ render(controller('AppBundle:Publicacioncontenido:show', { 'id' : publicacioncontenido.idcontenido } )) }}
                </div>
                
                <div style=\"float:left;\" >
                <a href=\"{{ absolute_url(asset('')) }}publicacioncontenido/edit/{{ publicacioncontenido.idcontenido }}\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></a>
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
", ":publicacioncontenido:contenidoindex.html.twig", "/home/ubuntu/workspace/app/Resources/views/publicacioncontenido/contenidoindex.html.twig");
    }
}
