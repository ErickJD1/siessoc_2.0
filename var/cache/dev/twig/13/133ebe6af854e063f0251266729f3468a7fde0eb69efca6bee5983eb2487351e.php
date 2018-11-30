<?php

/* :programarpublicacion:publicacionindex.html.twig */
class __TwigTemplate_8565c4b7b76910482280a62142de9fa66cd145db5a6acbbec63fffd89631b387 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":programarpublicacion:publicacionindex.html.twig", 1);
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
        $__internal_ac84e09b9cb314bfb26b17a39122dafb24037c107ba9b7b3518de2676b02d9fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac84e09b9cb314bfb26b17a39122dafb24037c107ba9b7b3518de2676b02d9fa->enter($__internal_ac84e09b9cb314bfb26b17a39122dafb24037c107ba9b7b3518de2676b02d9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":programarpublicacion:publicacionindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac84e09b9cb314bfb26b17a39122dafb24037c107ba9b7b3518de2676b02d9fa->leave($__internal_ac84e09b9cb314bfb26b17a39122dafb24037c107ba9b7b3518de2676b02d9fa_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_04b5ee75696f6232b6469f749a57dbaf2c1c4a8a108dcd2c1d6cbfaba67301ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b5ee75696f6232b6469f749a57dbaf2c1c4a8a108dcd2c1d6cbfaba67301ef->enter($__internal_04b5ee75696f6232b6469f749a57dbaf2c1c4a8a108dcd2c1d6cbfaba67301ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Publicaciones | ";
        
        $__internal_04b5ee75696f6232b6469f749a57dbaf2c1c4a8a108dcd2c1d6cbfaba67301ef->leave($__internal_04b5ee75696f6232b6469f749a57dbaf2c1c4a8a108dcd2c1d6cbfaba67301ef_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_8702b804d4fdeec82e9fe9252c575f73489dbd36deff4f21e79fc133802bebb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8702b804d4fdeec82e9fe9252c575f73489dbd36deff4f21e79fc133802bebb5->enter($__internal_8702b804d4fdeec82e9fe9252c575f73489dbd36deff4f21e79fc133802bebb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Lista De Publicaciones ";
        
        $__internal_8702b804d4fdeec82e9fe9252c575f73489dbd36deff4f21e79fc133802bebb5->leave($__internal_8702b804d4fdeec82e9fe9252c575f73489dbd36deff4f21e79fc133802bebb5_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_15a903ac364e057fcbf554df268531839b9fb69b8bcbce932f4f984fef5542ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a903ac364e057fcbf554df268531839b9fb69b8bcbce932f4f984fef5542ca->enter($__internal_15a903ac364e057fcbf554df268531839b9fb69b8bcbce932f4f984fef5542ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

<div align=\"left\">
    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
        echo "programarpublicacion/new\" class=\"btn btn-primary btn-sm\">+ Agregar Publicacion</a>
</div>
<br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
          <thead class=\"thead-light\">
            <tr>
                <th>ID</th>
                <th>Fecha Publicacion</th>
                <th>Hora Publicacion</th>
                <th>Contenido</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["programarpublicacions"]) ? $context["programarpublicacions"] : $this->getContext($context, "programarpublicacions")));
        foreach ($context['_seq'] as $context["_key"] => $context["programarpublicacion"]) {
            // line 29
            echo "            <tr>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["programarpublicacion"], "idpublicacion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            if ($this->getAttribute($context["programarpublicacion"], "fechapublicacion", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["programarpublicacion"], "fechapublicacion", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 32
            if ($this->getAttribute($context["programarpublicacion"], "horapublicacion", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["programarpublicacion"], "horapublicacion", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["programarpublicacion"], "idcontenido", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            if ($this->getAttribute($context["programarpublicacion"], "estadopulicacion", array())) {
                echo "Programado";
            } else {
                echo "Pendiente";
            }
            echo "</td>
              <td>
                  
                <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#showPublicacion";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["programarpublicacion"], "idpublicacion", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                        ";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Programarpublicacion:show", array("id" => $this->getAttribute($context["programarpublicacion"], "idpublicacion", array()))));
            echo "
                </div>
                
                <div style=\"float:left;\" >
                <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
            echo "programarpublicacion/edit/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["programarpublicacion"], "idpublicacion", array()), "html", null, true);
            echo "\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></a>
                </div>
               
              </td>

          </tr>

        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programarpublicacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "      </tbody>
  </table>
  </div>
  </div>
";
        
        $__internal_15a903ac364e057fcbf554df268531839b9fb69b8bcbce932f4f984fef5542ca->leave($__internal_15a903ac364e057fcbf554df268531839b9fb69b8bcbce932f4f984fef5542ca_prof);

    }

    public function getTemplateName()
    {
        return ":programarpublicacion:publicacionindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 51,  140 => 42,  133 => 38,  129 => 37,  119 => 34,  115 => 33,  109 => 32,  103 => 31,  99 => 30,  96 => 29,  92 => 28,  73 => 12,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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
    <a href=\"{{ absolute_url(asset('')) }}programarpublicacion/new\" class=\"btn btn-primary btn-sm\">+ Agregar Publicacion</a>
</div>
<br>

    <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
          <thead class=\"thead-light\">
            <tr>
                <th>ID</th>
                <th>Fecha Publicacion</th>
                <th>Hora Publicacion</th>
                <th>Contenido</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        {% for programarpublicacion in programarpublicacions %}
            <tr>
                <td>{{ programarpublicacion.idpublicacion }}</td>
                <td>{% if programarpublicacion.fechapublicacion %}{{ programarpublicacion.fechapublicacion|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if programarpublicacion.horapublicacion %}{{ programarpublicacion.horapublicacion|date('H:i:s') }}{% endif %}</td>
                <td>{{ programarpublicacion.idcontenido }}</td>
                <td>{%if programarpublicacion.estadopulicacion %}Programado{% else %}Pendiente{% endif %}</td>
              <td>
                  
                <div style=\"float:left;\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#showPublicacion{{ programarpublicacion.idpublicacion }}\"><i class=\"fa fa-eye\" style=\"font-size: 20px\"></i></button>
                        {{ render(controller('AppBundle:Programarpublicacion:show', { 'id' : programarpublicacion.idpublicacion } )) }}
                </div>
                
                <div style=\"float:left;\" >
                <a href=\"{{ absolute_url(asset('')) }}programarpublicacion/edit/{{ programarpublicacion.idpublicacion }}\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px\"></i></a>
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
", ":programarpublicacion:publicacionindex.html.twig", "/home/ubuntu/workspace/app/Resources/views/programarpublicacion/publicacionindex.html.twig");
    }
}
