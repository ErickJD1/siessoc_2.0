<?php

/* tipocuenta/TipoCuentashow.html.twig */
class __TwigTemplate_ca3686697324f24cbed2c905c765332c47a92c63828ee1272ad19a3a74c0f773 extends Twig_Template
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
        $__internal_00d016eb8ccad44cf778e9fb8e53421e1dbd264f6ba106504fc24ed6c7961992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00d016eb8ccad44cf778e9fb8e53421e1dbd264f6ba106504fc24ed6c7961992->enter($__internal_00d016eb8ccad44cf778e9fb8e53421e1dbd264f6ba106504fc24ed6c7961992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipocuenta/TipoCuentashow.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"miventana";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "idtipocuenta", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\" style=\"border-radius: 40px\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h3 align=\"center\"><strong><strong>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "Nombrecuenta", array()), "html", null, true);
        echo "</strong></strong></h3>
            </div>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                    <!--modal-->


                    <div class=\"row\" style=\"margin-left:5%\" align=\"left\">
                        <!--modal-->
                        <div class=\"col col-md-7\">

                            <h4><i class=\"fa fa-font\"></i>  Nombre Tipo De Cuenta</h4>
                            <p class=\"form-group\"><strong>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "Nombrecuenta", array()), "html", null, true);
        echo "</strong></p>
                            <hr>
                            <h4><i class=\"fa fa-list\"></i>  Descripcion</h4>
                            <p class=\"form-group\"><strong>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "descripcion", array()), "html", null, true);
        echo "</strong></p>
                            <hr>
                            <h4><i class=\"fa fa-check-square\"></i>  Estado</h4>
                            <p class=\"form-group\"><strong>";
        // line 26
        if (($this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "estadotipocuenta", array()) == 1)) {
            echo " Activa ";
        } else {
            echo " Inactiva ";
        }
        echo "</strong></p>
                        </div>
                        <div class=\"col col-md-5\">

                            <img style=\"width:75%;margin-top: 10%;margin-bottom: 2%\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/budget.png"), "html", null, true);
        echo "\"></img>
                        </div>
                    </div>


                    <div class=\"modal-footer\">
                        <div style=\"float:right\">
                            <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Cerrar</button>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_00d016eb8ccad44cf778e9fb8e53421e1dbd264f6ba106504fc24ed6c7961992->leave($__internal_00d016eb8ccad44cf778e9fb8e53421e1dbd264f6ba106504fc24ed6c7961992_prof);

    }

    public function getTemplateName()
    {
        return "tipocuenta/TipoCuentashow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 30,  60 => 26,  54 => 23,  48 => 20,  32 => 7,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"miventana{{ tipocuenta.idtipocuenta }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\" style=\"border-radius: 40px\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h3 align=\"center\"><strong><strong>{{  tipocuenta.Nombrecuenta }}</strong></strong></h3>
            </div>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                    <!--modal-->


                    <div class=\"row\" style=\"margin-left:5%\" align=\"left\">
                        <!--modal-->
                        <div class=\"col col-md-7\">

                            <h4><i class=\"fa fa-font\"></i>  Nombre Tipo De Cuenta</h4>
                            <p class=\"form-group\"><strong>{{  tipocuenta.Nombrecuenta }}</strong></p>
                            <hr>
                            <h4><i class=\"fa fa-list\"></i>  Descripcion</h4>
                            <p class=\"form-group\"><strong>{{ tipocuenta.descripcion }}</strong></p>
                            <hr>
                            <h4><i class=\"fa fa-check-square\"></i>  Estado</h4>
                            <p class=\"form-group\"><strong>{% if tipocuenta.estadotipocuenta==1  %} Activa {% else %} Inactiva {% endif %}</strong></p>
                        </div>
                        <div class=\"col col-md-5\">

                            <img style=\"width:75%;margin-top: 10%;margin-bottom: 2%\" src=\"{{ asset('img/budget.png') }}\"></img>
                        </div>
                    </div>


                    <div class=\"modal-footer\">
                        <div style=\"float:right\">
                            <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Cerrar</button>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
", "tipocuenta/TipoCuentashow.html.twig", "/home/ubuntu/workspace/app/Resources/views/tipocuenta/TipoCuentashow.html.twig");
    }
}
