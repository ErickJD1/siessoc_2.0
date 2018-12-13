<?php

/* :movimiento:Movimientoshowdelete.html.twig */
class __TwigTemplate_7b1d9534d43beb7d1c82dff362a9cbadedd917fafffa81459faa99a72b398608 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"deleteMovi";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movimiento"]) ? $context["movimiento"] : null), "idmov", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div style=\"width:70%; margin-left: 15%\" class=\"modal-dialog\">
        <div class=\"modal-content\"  style=\"border-radius: 40px\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h3 align=\"center\"><strong>¿Eliminar Movimiento?</strong></h3>
            </div>
            <div class=\"modal-body\">

                <div class=\"row\" style=\"margin-left:5%\" align=\"left\">
                    <!--modal-->
                    <div class=\"col col-md-7\">
                    <h4><i class=\"fa fa-list\"></i>  Descripcion Del Movimiento</h4>
                    <p class=\"form-group\"><strong>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movimiento"]) ? $context["movimiento"] : null), "descripcionmov", array()), "html", null, true);
        echo "</strong></p>
                    <hr>
                    <h4><i class=\"fa fa-money\"></i>  Monto</h4>
                    <p class=\"form-group\"><strong>";
        // line 18
        echo twig_escape_filter($this->env, ("\$" . $this->getAttribute((isset($context["movimiento"]) ? $context["movimiento"] : null), "monto", array())), "html", null, true);
        echo "</strong></p>
<hr>
                    <h4><i class=\"fa fa-check-square\"></i>  Estado</h4>
                    <p class=\"form-group\"><strong>";
        // line 21
        if ($this->getAttribute((isset($context["movimiento"]) ? $context["movimiento"] : null), "estadomov", array())) {
            echo "Activo";
        } else {
            echo "Inactivo";
        }
        echo "</strong></p>
<hr>
                    <h4><i class=\"fa fa-table\"></i>  Tipo Cuenta</h4>
                    <p class=\"form-group\"><strong>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movimiento"]) ? $context["movimiento"] : null), "idcuenta", array()), "html", null, true);
        echo "</strong></p>
<hr>
                    <h4><i class=\"fa fa-table\"></i>  Tipo De Movimiento</h4>
                    <p class=\"form-group\"><strong>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movimiento"]) ? $context["movimiento"] : null), "idtipomov", array()), "html", null, true);
        echo "</strong></p>
                    </div>
                    <div class=\"col col-md-5\">
                        <img style=\"width:75%;margin-top: 10%;margin-bottom: 2%\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/delete.png"), "html", null, true);
        echo "\"></img>
                    </div>
                </div>

                <div class=\"modal-footer\" al>
                    <div style=\"float:right\">
                        ";
        // line 36
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                        <input type=\"submit\" class=\"btn btn-danger\" style=\"margin-left:1px\" value=\"Delete\">
                        ";
        // line 38
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
                    </div>
                    <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return ":movimiento:Movimientoshowdelete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 38,  80 => 36,  71 => 30,  65 => 27,  59 => 24,  49 => 21,  43 => 18,  37 => 15,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":movimiento:Movimientoshowdelete.html.twig", "/home/ubuntu/workspace/app/Resources/views/movimiento/Movimientoshowdelete.html.twig");
    }
}
