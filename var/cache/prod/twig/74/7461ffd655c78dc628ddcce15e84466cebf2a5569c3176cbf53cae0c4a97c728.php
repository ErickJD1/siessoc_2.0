<?php

/* :cuenta:Cuentashow.html.twig */
class __TwigTemplate_2238cced4843d697ff1dd4fb632ad3055377ea94133d3949839cc286d557105e extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"VerCuenta";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : null), "idcuenta", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div style=\"width:70%; margin-left: 15%\" class=\"modal-dialog\">
        <div class=\"modal-content\" style=\"border-radius: 40px\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <div class=\"row\">\t
                    <h3 class=\"col col-md-11 col-md-offset-1\" align=\"center\"><strong>N° Cuenta: <strong>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : null), "numcuenta", array()), "html", null, true);
        echo "<strong>  -   ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : null), "nomcuenta", array()), "html", null, true);
        echo "</strong></strong></strong></h3>
                </div>
            </div>
            <div class=\"modal-body\">

                <div class=\"row\" style=\"margin-left:5%\" align=\"left\">
                    <!--modal-->
                    <div class=\"col col-md-7\">

                        <h4><i class=\"fa fa-list\"></i>  Descripcion</h4>
                        <p class=\"form-group\"><strong>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : null), "descripcioncuenta", array()), "html", null, true);
        echo "</strong></p>
                        <hr>
                        <h4><i class=\"fa fa-money\"></i>  Saldo Inicial</h4>
                        <p class=\"form-group\"><strong>";
        // line 21
        echo twig_escape_filter($this->env, ("\$" . $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : null), "saldocuenta", array())), "html", null, true);
        echo "</strong></p>
                        <hr>
                        <h4><i class=\"fa fa-home\"></i>  Banco</h4>
                        <p class=\"form-group\"><strong>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : null), "idbanco", array()), "html", null, true);
        echo "</strong></p>
                        <hr>
                        <h4><i class=\"fa fa-calculator\"></i>  Cuenta</h4>
                        <p class=\"form-group\"><strong>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : null), "nomcuenta", array()), "html", null, true);
        echo "</strong></p>
                        <hr>
                        <h4><i class=\"fa fa-check-square\"></i>  Estado</h4>
                        <p class=\"form-group\"><strong>";
        // line 30
        if (($this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : null), "estadocuenta", array()) == 1)) {
            echo " Activa ";
        } else {
            echo " Inactiva ";
        }
        echo "</strong></p>
                    </div>
                    <div class=\"col col-md-5\">

                        <img style=\"width:75%;margin-top: 10%;margin-bottom: 2%\" src=\"";
        // line 34
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
    }

    public function getTemplateName()
    {
        return ":cuenta:Cuentashow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 34,  69 => 30,  63 => 27,  57 => 24,  51 => 21,  45 => 18,  30 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":cuenta:Cuentashow.html.twig", "/home/ubuntu/workspace/app/Resources/views/cuenta/Cuentashow.html.twig");
    }
}
