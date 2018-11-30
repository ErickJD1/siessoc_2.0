<?php

/* publicacioncontenido/contenidoindex.html.twig */
class __TwigTemplate_fdd386a4915367e1f62df7565dacd8c52d00686c8b319f5d7d17cb4ec6f2647a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "publicacioncontenido/contenidoindex.html.twig", 1);
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
        $__internal_5b2163cda6be10bf3550d538e03f689c2a62a5590b646a3edd9694c945a499bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b2163cda6be10bf3550d538e03f689c2a62a5590b646a3edd9694c945a499bc->enter($__internal_5b2163cda6be10bf3550d538e03f689c2a62a5590b646a3edd9694c945a499bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "publicacioncontenido/contenidoindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b2163cda6be10bf3550d538e03f689c2a62a5590b646a3edd9694c945a499bc->leave($__internal_5b2163cda6be10bf3550d538e03f689c2a62a5590b646a3edd9694c945a499bc_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_78565c2b7c1b352f7040234cb13ec02b80aaab4de6a949d5bfd61f8776b026b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78565c2b7c1b352f7040234cb13ec02b80aaab4de6a949d5bfd61f8776b026b6->enter($__internal_78565c2b7c1b352f7040234cb13ec02b80aaab4de6a949d5bfd61f8776b026b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Publicaciones | ";
        
        $__internal_78565c2b7c1b352f7040234cb13ec02b80aaab4de6a949d5bfd61f8776b026b6->leave($__internal_78565c2b7c1b352f7040234cb13ec02b80aaab4de6a949d5bfd61f8776b026b6_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_678ff22106819957dda7b6cfd3575a1cfb944ac949999c3983c5f20a882102dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_678ff22106819957dda7b6cfd3575a1cfb944ac949999c3983c5f20a882102dc->enter($__internal_678ff22106819957dda7b6cfd3575a1cfb944ac949999c3983c5f20a882102dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Lista De Publicaciones ";
        
        $__internal_678ff22106819957dda7b6cfd3575a1cfb944ac949999c3983c5f20a882102dc->leave($__internal_678ff22106819957dda7b6cfd3575a1cfb944ac949999c3983c5f20a882102dc_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_719f1449397fc82ddcf88384546f37499c43f65be5b5c6a90ebb4183d1c91a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_719f1449397fc82ddcf88384546f37499c43f65be5b5c6a90ebb4183d1c91a76->enter($__internal_719f1449397fc82ddcf88384546f37499c43f65be5b5c6a90ebb4183d1c91a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_719f1449397fc82ddcf88384546f37499c43f65be5b5c6a90ebb4183d1c91a76->leave($__internal_719f1449397fc82ddcf88384546f37499c43f65be5b5c6a90ebb4183d1c91a76_prof);

    }

    public function getTemplateName()
    {
        return "publicacioncontenido/contenidoindex.html.twig";
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
", "publicacioncontenido/contenidoindex.html.twig", "/home/ubuntu/workspace/app/Resources/views/publicacioncontenido/contenidoindex.html.twig");
    }
}
