<?php

/* movimiento/Movimientoshow.html.twig */
class __TwigTemplate_907a8937b86577e342b61a61aa62089146365521e091543fe9b8892128baa47a extends Twig_Template
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
        $__internal_7273a73634e33451f09c500c14ba44d79f6e1999ef68dadac2d386572035fdf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7273a73634e33451f09c500c14ba44d79f6e1999ef68dadac2d386572035fdf7->enter($__internal_7273a73634e33451f09c500c14ba44d79f6e1999ef68dadac2d386572035fdf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movimiento/Movimientoshow.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"VerMovi";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movimiento"]) ? $context["movimiento"] : $this->getContext($context, "movimiento")), "idmov", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div style=\"width:70%; margin-left: 15%\" class=\"modal-dialog\">
        <div class=\"modal-content\"  style=\"border-radius: 40px\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h3 align=\"center\"><strong>Movimiento</strong></h3>
            </div>
            <div class=\"modal-body\">

                 <div class=\"row\" style=\"margin-left:5%\" align=\"left\">
                    <!--modal-->
                    <div class=\"col col-md-7\">
                    <h4><i class=\"fa fa-list\"></i>  Descripcion Del Movimiento</h4>
                    <p class=\"form-group\"><strong>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movimiento"]) ? $context["movimiento"] : $this->getContext($context, "movimiento")), "descripcionmov", array()), "html", null, true);
        echo "</strong></p>
                    <hr>
                    <h4><i class=\"fa fa-money\"></i>  Monto</h4>
                    <p class=\"form-group\"><strong>";
        // line 18
        echo twig_escape_filter($this->env, ("\$" . $this->getAttribute((isset($context["movimiento"]) ? $context["movimiento"] : $this->getContext($context, "movimiento")), "monto", array())), "html", null, true);
        echo "</strong></p>
<hr>
                    <h4><i class=\"fa fa-check-square\"></i>  Estado</h4>
                    <p class=\"form-group\"><strong>";
        // line 21
        if ($this->getAttribute((isset($context["movimiento"]) ? $context["movimiento"] : $this->getContext($context, "movimiento")), "estadomov", array())) {
            echo "Activo";
        } else {
            echo "Inactivo";
        }
        echo "</strong></p>
<hr>
                    <h4><i class=\"fa fa-table\"></i>  Tipo Cuenta</h4>
                    <p class=\"form-group\"><strong>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movimiento"]) ? $context["movimiento"] : $this->getContext($context, "movimiento")), "idcuenta", array()), "html", null, true);
        echo "</strong></p>
<hr>
                    <h4><i class=\"fa fa-table\"></i>  Tipo De Movimiento</h4>
                    <p class=\"form-group\"><strong>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movimiento"]) ? $context["movimiento"] : $this->getContext($context, "movimiento")), "idtipomov", array()), "html", null, true);
        echo "</strong></p>
                    </div>
                    <div class=\"col col-md-5\">
                        <img style=\"width:75%;margin-top: 10%;margin-bottom: 2%\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/budget.png"), "html", null, true);
        echo "\"></img>
                    </div>
                </div>

                <div class=\"modal-footer\" al>
                    <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_7273a73634e33451f09c500c14ba44d79f6e1999ef68dadac2d386572035fdf7->leave($__internal_7273a73634e33451f09c500c14ba44d79f6e1999ef68dadac2d386572035fdf7_prof);

    }

    public function getTemplateName()
    {
        return "movimiento/Movimientoshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 30,  68 => 27,  62 => 24,  52 => 21,  46 => 18,  40 => 15,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"VerMovi{{  movimiento.idmov }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div style=\"width:70%; margin-left: 15%\" class=\"modal-dialog\">
        <div class=\"modal-content\"  style=\"border-radius: 40px\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h3 align=\"center\"><strong>Movimiento</strong></h3>
            </div>
            <div class=\"modal-body\">

                 <div class=\"row\" style=\"margin-left:5%\" align=\"left\">
                    <!--modal-->
                    <div class=\"col col-md-7\">
                    <h4><i class=\"fa fa-list\"></i>  Descripcion Del Movimiento</h4>
                    <p class=\"form-group\"><strong>{{ movimiento.descripcionmov }}</strong></p>
                    <hr>
                    <h4><i class=\"fa fa-money\"></i>  Monto</h4>
                    <p class=\"form-group\"><strong>{{ \"\$\"~movimiento.monto }}</strong></p>
<hr>
                    <h4><i class=\"fa fa-check-square\"></i>  Estado</h4>
                    <p class=\"form-group\"><strong>{% if movimiento.estadomov %}Activo{% else %}Inactivo{% endif %}</strong></p>
<hr>
                    <h4><i class=\"fa fa-table\"></i>  Tipo Cuenta</h4>
                    <p class=\"form-group\"><strong>{{ movimiento.idcuenta }}</strong></p>
<hr>
                    <h4><i class=\"fa fa-table\"></i>  Tipo De Movimiento</h4>
                    <p class=\"form-group\"><strong>{{ movimiento.idtipomov }}</strong></p>
                    </div>
                    <div class=\"col col-md-5\">
                        <img style=\"width:75%;margin-top: 10%;margin-bottom: 2%\" src=\"{{ asset('img/budget.png') }}\"></img>
                    </div>
                </div>

                <div class=\"modal-footer\" al>
                    <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
", "movimiento/Movimientoshow.html.twig", "/home/ubuntu/workspace/app/Resources/views/movimiento/Movimientoshow.html.twig");
    }
}
