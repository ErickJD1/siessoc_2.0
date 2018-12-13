<?php

/* cuenta/Cuentashowdelete.html.twig */
class __TwigTemplate_6e778dd9908faf22b73500332862c38e2a141c2d7c9179b34d7a6bb1f78b13df extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"deleteCuenta";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : null), "idcuenta", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div style=\"width:70%;margin-left: 15%\" class=\"modal-dialog\">
        <div class=\"modal-content\" style=\"border-radius: 40px\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h3 align=\"center\"><strong>¿Eliminar Cuenta?</strong></h3>
            </div>
            <div class=\"modal-body\">

                <div class=\"row\" style=\"margin-left:5%\" align=\"left\">
                    <!--modal-->
                    <div class=\"col col-md-7\">

                        <hr>
                        <h4><i class=\"fa fa-list-ol\"></i>  No Cuenta</h4>
                        <p class=\"form-group\"><strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : null), "numcuenta", array()), "html", null, true);
        echo "</strong></p>
                        <hr>
                        <h4><i class=\"fa fa-calculator\"></i>  Cuenta</h4>
                        <p class=\"form-group\"><strong>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : null), "nomcuenta", array()), "html", null, true);
        echo "</strong></p>
                        <hr>
                        <h4><i class=\"fa fa-money\"></i>  Saldo Inicial</h4>
                        <p class=\"form-group\"><strong>";
        // line 23
        echo twig_escape_filter($this->env, ("\$" . $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : null), "saldocuenta", array())), "html", null, true);
        echo "</strong></p>
                        <hr>
                        <h4><i class=\"fa fa-home\"></i>  Banco</h4>
                        <p class=\"form-group\"><strong>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : null), "idbanco", array()), "html", null, true);
        echo "</strong></p>
                        <hr>
                        <h4><i class=\"fa fa-check-square\"></i>  Estado</h4>
                        <p class=\"form-group\"><strong>";
        // line 29
        if (($this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : null), "estadocuenta", array()) == 1)) {
            echo " Activa ";
        } else {
            echo " Inactiva ";
        }
        echo "</strong></p>
                    </div>
                    <div class=\"col col-md-5\">

                        <img style=\"width:75%;margin-top: 10%;margin-bottom: 2%\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/delete.png"), "html", null, true);
        echo "\"></img>
                    </div>
                </div>

                <div class=\"modal-footer\" al>
                    <div style=\"float:right\">
                        ";
        // line 39
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                        <input type=\"submit\" class=\"btn btn-danger\" style=\"margin-left:1px\" value=\"Delete\">
                        ";
        // line 41
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
        return "cuenta/Cuentashowdelete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 41,  83 => 39,  74 => 33,  63 => 29,  57 => 26,  51 => 23,  45 => 20,  39 => 17,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "cuenta/Cuentashowdelete.html.twig", "/home/ubuntu/workspace/app/Resources/views/cuenta/Cuentashowdelete.html.twig");
    }
}
