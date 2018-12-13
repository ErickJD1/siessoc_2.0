<?php

/* :programarpublicacion:publicacionindex.html.twig */
class __TwigTemplate_da9149435feaa83ea8a81a9a08c7e1512f42908a9b19576126d6165eb0b66585 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["programarpublicacions"]) ? $context["programarpublicacions"] : null));
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
        return array (  136 => 51,  119 => 42,  112 => 38,  108 => 37,  98 => 34,  94 => 33,  88 => 32,  82 => 31,  78 => 30,  75 => 29,  71 => 28,  52 => 12,  45 => 7,  42 => 6,  36 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":programarpublicacion:publicacionindex.html.twig", "/home/ubuntu/workspace/app/Resources/views/programarpublicacion/publicacionindex.html.twig");
    }
}
