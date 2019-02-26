<?php

/* cuenta/Cuentaindex.html.twig */
class __TwigTemplate_cb7360443ac80978c9ff6c98cfb7db8bb93613596a22ed2e3e1ecf999c2d3c3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "cuenta/Cuentaindex.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'avanzu_breadcrumb' => array($this, 'block_avanzu_breadcrumb'),
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
        echo " Fondos ";
    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo "Cuentas";
    }

    // line 6
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
";
    }

    // line 9
    public function block_page_content($context, array $blocks = array())
    {
        // line 10
        echo "
    <div class=\"box box-primary\">
        <div style=\"width:90%; margin-left:5%; margin-top: 2% \">

            <div align=\"left\">
                <a style=\"font-size: 15px\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cuenta_new");
        echo "\" class=\"btn btn-success btn-sm\"><i style=\"font-size: 20px\" class=\"fa fa-plus-circle\"></i> Cuenta</a>
            </div>
            <br> <br>

            <table class=\"table table-bordered table-hover table-striped table-responsive\" style=\"width:100%\" id=\"tabelMahasiswa\">
                <thead class=\"thead-light\">
                    <tr>
                        <th><center>No Cuenta</center></th>
                <th><center>Cuenta</center></th>
                <th><center>Banco</center></th>
                <th><center>Fecha Apertura</center></th>
                    ";
        // line 28
        echo "                <th><center>Estado</center></th>
                <th><center>Usuario</center></th>
                <th><center>Acciones</center></th>
                </tr>
                </thead>
                <tbody>

                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cuentas"]) ? $context["cuentas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cuentum"]) {
            // line 36
            echo "                        <tr>
                            <td><a data-toggle=\"modal\" data-target=\"#MovimientoCB";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "idcuenta", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "numcuenta", array()), "html", null, true);
            echo "</a>
                                ";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Movimiento:cuenFind", array("id" => $this->getAttribute($context["cuentum"], "idcuenta", array()))));
            echo "

                            </td>
                            <td><center>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "nomcuenta", array()), "html", null, true);
            echo "</center></td>
                    <td><center>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "idbanco", array()), "html", null, true);
            echo "</center></td>
                    <td><center>";
            // line 43
            if ($this->getAttribute($context["cuentum"], "fechaapertura", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cuentum"], "fechaapertura", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</center></td>
                        ";
            // line 46
            echo "                    <td><center>";
            if ($this->getAttribute($context["cuentum"], "estadocuenta", array())) {
                echo "Activa";
            } else {
                echo "Inactiva";
            }
            echo "</center></td>
                    <td><center>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "idusuario", array()), "html", null, true);
            echo "</center></td>
                    <td class=\"row\">

                        <div >

                            <div class=\"col col-sm-4\"><button title=\"Eliminar Cuenta\" class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#deleteCuenta";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "idcuenta", array()), "html", null, true);
            echo "\"><i class=\"fa fa-trash\" style=\"font-size: 15px; color: crimson\"></i></button>
                                    ";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Cuenta:showDelete", array("id" => $this->getAttribute($context["cuentum"], "idcuenta", array()))));
            echo "
                            </div>
                            <div class=\"col col-sm-4\" >
                                <a title=\"Editar Cuenta\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cuenta_edit", array("id" => $this->getAttribute($context["cuentum"], "idcuenta", array()))), "html", null, true);
            echo "\" style=\"background-color: transparent; border: none;\"><i class=\"fa fa-edit\" style=\"font-size: 15px; color: limegreen\"></i></a>
                            </div>

                            <div class=\"col col-sm-4\"><button title=\"Ver Cuenta\" class=\"\" style=\"background-color: transparent; border: none;\" data-toggle=\"modal\" data-target=\"#VerCuenta";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["cuentum"], "idcuenta", array()), "html", null, true);
            echo "\"><i class=\"fa fa-eye\" style=\"font-size: 15px; color: deepskyblue\"></i></button>
                                    ";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Cuenta:show", array("id" => $this->getAttribute($context["cuentum"], "idcuenta", array()))));
            echo "
                            </div>

                        </div>
                    </td>

                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cuentum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                </tbody>
            </table>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "cuenta/Cuentaindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 68,  156 => 60,  152 => 59,  146 => 56,  140 => 53,  136 => 52,  128 => 47,  119 => 46,  113 => 43,  109 => 42,  105 => 41,  99 => 38,  93 => 37,  90 => 36,  86 => 35,  77 => 28,  63 => 15,  56 => 10,  53 => 9,  46 => 7,  43 => 6,  37 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "cuenta/Cuentaindex.html.twig", "/home/ubuntu/workspace/app/Resources/views/cuenta/Cuentaindex.html.twig");
    }
}
