<?php

/* tipocuenta/TipoCuentashowdelete.html.twig */
class __TwigTemplate_b23991a4ab3b4ee0d80c39ea394e2b4389a7e8b7a814a55523060393bdc86866 extends Twig_Template
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
        $__internal_74e2d24ce8087ee0475b62bfbe3db0f81ac46348f6ef3e9a0dc2726d526af563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e2d24ce8087ee0475b62bfbe3db0f81ac46348f6ef3e9a0dc2726d526af563->enter($__internal_74e2d24ce8087ee0475b62bfbe3db0f81ac46348f6ef3e9a0dc2726d526af563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipocuenta/TipoCuentashowdelete.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"miventanadelete";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "idtipocuenta", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\" style=\"border-radius: 40px\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h3 align=\"center\"><strong>¿Eliminar Tipo De Cuenta?</strong></h3>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/delete.png"), "html", null, true);
        echo "\"></img>
                        </div>
                    </div>



                    <div class=\"modal-footer\">
                        <div style=\"float:right\">
                            ";
        // line 38
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipocuenta_delete", array("id" => $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "idtipocuenta", array()))), "Method" => "POST"));
        echo "
                            <input type=\"submit\" class=\"btn btn-danger\" type=\"button\" value=\"Delete\">
                            ";
        // line 40
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                        </div>
                        
                            <button type=\"button\" class=\"btn btn-success\" style=\"margin-right: 1px\" data-dismiss=\"modal\">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_74e2d24ce8087ee0475b62bfbe3db0f81ac46348f6ef3e9a0dc2726d526af563->leave($__internal_74e2d24ce8087ee0475b62bfbe3db0f81ac46348f6ef3e9a0dc2726d526af563_prof);

    }

    public function getTemplateName()
    {
        return "tipocuenta/TipoCuentashowdelete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 40,  79 => 38,  68 => 30,  57 => 26,  51 => 23,  45 => 20,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"miventanadelete{{ tipocuenta.idtipocuenta }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\" style=\"border-radius: 40px\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h3 align=\"center\"><strong>¿Eliminar Tipo De Cuenta?</strong></h3>
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

                            <img style=\"width:75%;margin-top: 10%;margin-bottom: 2%\" src=\"{{ asset('img/delete.png') }}\"></img>
                        </div>
                    </div>



                    <div class=\"modal-footer\">
                        <div style=\"float:right\">
                            {{ form_start(delete_form, {'action': path('tipocuenta_delete', {'id': tipocuenta.idtipocuenta}), 'Method': 'POST' }) }}
                            <input type=\"submit\" class=\"btn btn-danger\" type=\"button\" value=\"Delete\">
                            {{ form_end(delete_form) }}
                        </div>
                        
                            <button type=\"button\" class=\"btn btn-success\" style=\"margin-right: 1px\" data-dismiss=\"modal\">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
", "tipocuenta/TipoCuentashowdelete.html.twig", "/home/ubuntu/workspace/app/Resources/views/tipocuenta/TipoCuentashowdelete.html.twig");
    }
}
