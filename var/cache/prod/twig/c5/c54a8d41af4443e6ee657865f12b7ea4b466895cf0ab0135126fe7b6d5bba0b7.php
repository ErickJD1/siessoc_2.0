<?php

/* :publicacioncontenido:contenidoindex.html.twig */
class __TwigTemplate_ebe35ee959c5a27bb09d0736c3e46dc7ca6d62d626ac02e70ed8d298e26e0450 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        echo " Publicaciones | ";
    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo "Lista De Publicaciones ";
    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["publicacioncontenidos"]) ? $context["publicacioncontenidos"] : null));
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
        return array (  144 => 55,  127 => 46,  120 => 42,  116 => 41,  106 => 38,  102 => 37,  96 => 36,  92 => 35,  88 => 34,  84 => 33,  80 => 32,  77 => 31,  73 => 30,  52 => 12,  45 => 7,  42 => 6,  36 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":publicacioncontenido:contenidoindex.html.twig", "/home/ubuntu/workspace/app/Resources/views/publicacioncontenido/contenidoindex.html.twig");
    }
}
