<?php

/* tipomovimiento/TipoMovimientoshow.html.twig */
class __TwigTemplate_5d7e620d2c83e152f92bfc0d4b62e2d0575143f2e1b07783a29d6b9d53c44c2d extends Twig_Template
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
        $__internal_bb8766e0bd57c914026c8abf5f5a469cb9c81331bc148b2e11e9324c748e9c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb8766e0bd57c914026c8abf5f5a469cb9c81331bc148b2e11e9324c748e9c78->enter($__internal_bb8766e0bd57c914026c8abf5f5a469cb9c81331bc148b2e11e9324c748e9c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipomovimiento/TipoMovimientoshow.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"miventana";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipomovimiento"]) ? $context["tipomovimiento"] : $this->getContext($context, "tipomovimiento")), "idtipomov", array()), "html", null, true);
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

                            <h4><i class=\"fa fa-font\"></i>  Movimiento</h4>
                            <p class=\"form-group\"><strong>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipomovimiento"]) ? $context["tipomovimiento"] : $this->getContext($context, "tipomovimiento")), "nombretipo", array()), "html", null, true);
        echo "</strong></p>
                            <hr>
                            <h4><i class=\"fa fa-list\"></i>  Descripción</h4>
                            <p class=\"form-group\"><strong>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipomovimiento"]) ? $context["tipomovimiento"] : $this->getContext($context, "tipomovimiento")), "descripciontipomov", array()), "html", null, true);
        echo "</strong></p>
                            <hr>
                              <h4><i class=\"fa fa-cubes\"></i>  Clasificación</h4>
                            <p class=\"form-group\"><strong>";
        // line 22
        if (($this->getAttribute((isset($context["tipomovimiento"]) ? $context["tipomovimiento"] : $this->getContext($context, "tipomovimiento")), "clasificacion", array()) == 1)) {
            echo " Ingreso ";
        } else {
            echo " Gasto ";
        }
        echo "</strong></p>
                            <hr>
                            <h4><i class=\"fa fa-check-square\"></i>  Estado</h4>
                            <p class=\"form-group\"><strong>";
        // line 25
        if (($this->getAttribute((isset($context["tipomovimiento"]) ? $context["tipomovimiento"] : $this->getContext($context, "tipomovimiento")), "estadotipomov", array()) == 1)) {
            echo " Activo ";
        } else {
            echo " Inactivo ";
        }
        echo "</strong></p>
                        </div>
                        <div class=\"col col-md-5\">

                            <img style=\"width:75%;margin-top: 10%;margin-bottom: 2%\" src=\"";
        // line 29
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
        
        $__internal_bb8766e0bd57c914026c8abf5f5a469cb9c81331bc148b2e11e9324c748e9c78->leave($__internal_bb8766e0bd57c914026c8abf5f5a469cb9c81331bc148b2e11e9324c748e9c78_prof);

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
        return array (  74 => 29,  63 => 25,  53 => 22,  47 => 19,  41 => 16,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"miventana{{ tipomovimiento.idtipomov }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
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

                            <h4><i class=\"fa fa-font\"></i>  Movimiento</h4>
                            <p class=\"form-group\"><strong>{{  tipomovimiento.nombretipo }}</strong></p>
                            <hr>
                            <h4><i class=\"fa fa-list\"></i>  Descripción</h4>
                            <p class=\"form-group\"><strong>{{  tipomovimiento.descripciontipomov }}</strong></p>
                            <hr>
                              <h4><i class=\"fa fa-cubes\"></i>  Clasificación</h4>
                            <p class=\"form-group\"><strong>{% if tipomovimiento.clasificacion==1  %} Ingreso {% else %} Gasto {% endif %}</strong></p>
                            <hr>
                            <h4><i class=\"fa fa-check-square\"></i>  Estado</h4>
                            <p class=\"form-group\"><strong>{% if tipomovimiento.estadotipomov==1  %} Activo {% else %} Inactivo {% endif %}</strong></p>
                        </div>
                        <div class=\"col col-md-5\">

                            <img style=\"width:75%;margin-top: 10%;margin-bottom: 2%\" src=\"{{ asset('img/budget.png') }}\"></img>
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
", "tipomovimiento/TipoMovimientoshow.html.twig", "/home/ubuntu/workspace/app/Resources/views/tipomovimiento/TipoMovimientoshow.html.twig");
    }
}
