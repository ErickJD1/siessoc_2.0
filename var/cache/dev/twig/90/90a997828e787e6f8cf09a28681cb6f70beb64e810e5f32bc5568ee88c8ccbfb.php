<?php

/* tipomovimiento/TipoMovimientoshowdelete.html.twig */
class __TwigTemplate_799be65cb446771bc7b8b36933cbeccc453fd1dc81d0f9fde668f2647f795157 extends Twig_Template
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
        $__internal_d79e81b47f85b65aea2d77227fa199a51ba4ac74ecde6edf1be23f2fe9d07c3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d79e81b47f85b65aea2d77227fa199a51ba4ac74ecde6edf1be23f2fe9d07c3b->enter($__internal_d79e81b47f85b65aea2d77227fa199a51ba4ac74ecde6edf1be23f2fe9d07c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipomovimiento/TipoMovimientoshowdelete.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"miventanadelete";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipomovimiento"]) ? $context["tipomovimiento"] : $this->getContext($context, "tipomovimiento")), "idtipomov", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\" style=\"border-radius: 40px\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h3 align=\"center\"><strong>¿Eliminar Tipo Movimiento?</strong></h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

    <div class=\"row\" style=\"margin-left:5%\" align=\"left\">
                        <!--modal-->
                        <div class=\"col col-md-7\">

                            <h4><i class=\"fa fa-font\"></i>  Nombre Tipo De Movimiento</h4>
                            <p class=\"form-group\"><strong>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipomovimiento"]) ? $context["tipomovimiento"] : $this->getContext($context, "tipomovimiento")), "nombretipo", array()), "html", null, true);
        echo "</strong></p>
                            <hr>
                            <h4><i class=\"fa fa-list\"></i>  Descripcion</h4>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/delete.png"), "html", null, true);
        echo "\"></img>
                        </div>
                    </div>

                <div class=\"modal-footer\">
                <div style=\"float:right\">
                \t\t";
        // line 35
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                \t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
                \t\t";
        // line 37
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                </div>
                <button type=\"button\" class=\"btn btn-success\" style=\"margin-right: 1px\" data-dismiss=\"modal\">Cerrar</button>
                </div>
                </div>
                </div>
                </div>
                </div>
";
        
        $__internal_d79e81b47f85b65aea2d77227fa199a51ba4ac74ecde6edf1be23f2fe9d07c3b->leave($__internal_d79e81b47f85b65aea2d77227fa199a51ba4ac74ecde6edf1be23f2fe9d07c3b_prof);

    }

    public function getTemplateName()
    {
        return "tipomovimiento/TipoMovimientoshowdelete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 37,  83 => 35,  74 => 29,  63 => 25,  53 => 22,  47 => 19,  41 => 16,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"miventanadelete{{ tipomovimiento.idtipomov }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\" style=\"border-radius: 40px\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h3 align=\"center\"><strong>¿Eliminar Tipo Movimiento?</strong></h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

    <div class=\"row\" style=\"margin-left:5%\" align=\"left\">
                        <!--modal-->
                        <div class=\"col col-md-7\">

                            <h4><i class=\"fa fa-font\"></i>  Nombre Tipo De Movimiento</h4>
                            <p class=\"form-group\"><strong>{{  tipomovimiento.nombretipo }}</strong></p>
                            <hr>
                            <h4><i class=\"fa fa-list\"></i>  Descripcion</h4>
                            <p class=\"form-group\"><strong>{{  tipomovimiento.descripciontipomov }}</strong></p>
                            <hr>
                            <h4><i class=\"fa fa-cubes\"></i>  Clasificación</h4>
                            <p class=\"form-group\"><strong>{% if tipomovimiento.clasificacion==1  %} Ingreso {% else %} Gasto {% endif %}</strong></p>
                            <hr>
                            <h4><i class=\"fa fa-check-square\"></i>  Estado</h4>
                            <p class=\"form-group\"><strong>{% if tipomovimiento.estadotipomov==1  %} Activo {% else %} Inactivo {% endif %}</strong></p>
                        </div>
                        <div class=\"col col-md-5\">

                            <img style=\"width:75%;margin-top: 10%;margin-bottom: 2%\" src=\"{{ asset('img/delete.png') }}\"></img>
                        </div>
                    </div>

                <div class=\"modal-footer\">
                <div style=\"float:right\">
                \t\t{{ form_start(delete_form) }}
                \t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
                \t\t{{ form_end(delete_form) }}
                </div>
                <button type=\"button\" class=\"btn btn-success\" style=\"margin-right: 1px\" data-dismiss=\"modal\">Cerrar</button>
                </div>
                </div>
                </div>
                </div>
                </div>
", "tipomovimiento/TipoMovimientoshowdelete.html.twig", "/home/ubuntu/workspace/app/Resources/views/tipomovimiento/TipoMovimientoshowdelete.html.twig");
    }
}
