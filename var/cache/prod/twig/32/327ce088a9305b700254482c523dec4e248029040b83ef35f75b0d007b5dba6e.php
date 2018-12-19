<?php

/* tipomovimiento/TipoMovimientoindex.html.twig */
class __TwigTemplate_38c84d838a0295d842634e57e17b6a8c972dd5a59f16ba1a5bba475f013100fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "tipomovimiento/TipoMovimientoindex.html.twig", 1);
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
        echo " Tipos De Movimiento | ";
    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo "Catalogo De Movimientos ";
    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"box box-primary\">
<div style=\"width:90%; margin-left:5%; margin-top: 2% \">

 <div align=\"left\">
                <a style=\"font-size: 15px\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipomovimiento_new");
        echo "\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Tipo De Movimiento</a>
            </div>
<br> <br>

      <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:90%\" id=\"tabelMahasiswa\">
              <thead class=\"thead-light\">
            <tr>
                <th>ID</th>
                <th>Movimiento</th>
                <th>Descripcion</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipomovimientos"]) ? $context["tipomovimientos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tipomovimiento"]) {
            // line 28
            echo "            <tr>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipomovimiento"], "idtipomov", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipomovimiento"], "nombretipo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipomovimiento"], "descripciontipomov", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            if ($this->getAttribute($context["tipomovimiento"], "estadotipomov", array())) {
                echo "Activo";
            } else {
                echo "Inactivo";
            }
            echo "</td>
                <td>
                    
                  <center>
                        <div class=\"row\">
                        <div align=\"center\" class=\"col col-sm-4\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#miventanadelete";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipomovimiento"], "idtipomov", array()), "html", null, true);
            echo "\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: crimson\"></i></button>
                                ";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Tipomovimiento:showdelete", array("id" => $this->getAttribute($context["tipomovimiento"], "idtipomov", array()))));
            echo "
                        </div>

                        <div align=\"center\" class=\"col col-sm-4\" >
                            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipomovimiento_edit", array("id" => $this->getAttribute($context["tipomovimiento"], "idtipomov", array()))), "html", null, true);
            echo "\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 20px; color: limegreen\"></i></a>
                        </div>
                        
                        <div align=\"center\" class=\"col col-sm-4\"><button class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#miventana";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipomovimiento"], "idtipomov", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 20px; color: deepskyblue\"></i></button>
                                ";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Tipomovimiento:show", array("id" => $this->getAttribute($context["tipomovimiento"], "idtipomov", array()))));
            echo "
                        </div>
                        </div>
                    </center>
                </td>
            </tr>
        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipomovimiento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </tbody>
    </table>
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "tipomovimiento/TipoMovimientoindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 54,  122 => 46,  118 => 45,  112 => 42,  105 => 38,  101 => 37,  89 => 32,  85 => 31,  81 => 30,  77 => 29,  74 => 28,  70 => 27,  52 => 12,  45 => 7,  42 => 6,  36 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tipomovimiento/TipoMovimientoindex.html.twig", "/home/ubuntu/workspace/app/Resources/views/tipomovimiento/TipoMovimientoindex.html.twig");
    }
}
