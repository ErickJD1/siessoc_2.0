<?php

/* tipomovimiento/TipoMovimientoshow.html.twig */
class __TwigTemplate_8156030057e670d3d04adb5fb044780e14323bd254c79a88b2ca3c253334574e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"modal fade\" id=\"miventana";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipomovimiento"]) ? $context["tipomovimiento"] : null), "idtipomov", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\" style=\"border-radius: 40px\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h3 align=\"center\"><strong>Tipo De Movimiento</strong></h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

   <div class=\"row\" style=\"margin-left:5%\" align=\"left\">
                        <!--modal-->
                        <div class=\"col col-md-7\">

                            <h4><i class=\"fa fa-font\"></i>  Nombre Tipo De Movimiento</h4>
                            <p class=\"form-group\"><strong>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipomovimiento"]) ? $context["tipomovimiento"] : null), "nombretipo", array()), "html", null, true);
        echo "</strong></p>
                            <hr>
                            <h4><i class=\"fa fa-list\"></i>  Descripcion</h4>
                            <p class=\"form-group\"><strong>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipomovimiento"]) ? $context["tipomovimiento"] : null), "descripciontipomov", array()), "html", null, true);
        echo "</strong></p>
                            <hr>
                            <h4><i class=\"fa fa-check-square\"></i>  Estado</h4>
                            <p class=\"form-group\"><strong>";
        // line 22
        if (($this->getAttribute((isset($context["tipomovimiento"]) ? $context["tipomovimiento"] : null), "estadotipomov", array()) == 1)) {
            echo " Activo ";
        } else {
            echo " Inactivo ";
        }
        echo "</strong></p>
                        </div>
                        <div class=\"col col-md-5\">

                            <img style=\"width:75%;margin-top: 10%;margin-bottom: 2%\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/budget.png"), "html", null, true);
        echo "\"></img>
                        </div>
                    </div>


                <div class=\"modal-footer\">
                <div style=\"float:right\">
                \t\t<button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Cerrar</button>
                </div>
                
                </div>
                </div>
                </div>
                </div>
                </div>
";
    }

    public function getTemplateName()
    {
        return "tipomovimiento/TipoMovimientoshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 26,  50 => 22,  44 => 19,  38 => 16,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tipomovimiento/TipoMovimientoshow.html.twig", "/home/ubuntu/workspace/app/Resources/views/tipomovimiento/TipoMovimientoshow.html.twig");
    }
}
