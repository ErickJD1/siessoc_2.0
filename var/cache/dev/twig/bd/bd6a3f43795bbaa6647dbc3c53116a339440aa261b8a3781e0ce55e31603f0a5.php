<?php

/* :tipomovimiento:TipoMovimientoshow.html.twig */
class __TwigTemplate_acf02828e2a7706ecbd708502596d82cd89465abcba050462669f1d95eee931f extends Twig_Template
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
        $__internal_e6f6013145134e279e83e18698a8084177bef05b69584a3cddc21ed72d9a459b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f6013145134e279e83e18698a8084177bef05b69584a3cddc21ed72d9a459b->enter($__internal_e6f6013145134e279e83e18698a8084177bef05b69584a3cddc21ed72d9a459b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipomovimiento:TipoMovimientoshow.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"VerMov";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipomovimiento"]) ? $context["tipomovimiento"] : $this->getContext($context, "tipomovimiento")), "idtipomov", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\" style=\"border-radius: 40px\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h3 align=\"center\"><strong>¿Eliminar Tipo Movimiento?</strong></h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

  <div class=\"list-group\">
    <!--modal-->

                <h4>ID</h4>
                <p class=\"list-group-item\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipomovimiento"]) ? $context["tipomovimiento"] : $this->getContext($context, "tipomovimiento")), "idtipomov", array()), "html", null, true);
        echo "</p>

                <h4>Movimiento</h4>
                <p class=\"list-group-item\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipomovimiento"]) ? $context["tipomovimiento"] : $this->getContext($context, "tipomovimiento")), "nombretipo", array()), "html", null, true);
        echo "</p>

                <h4>Descripcion Del Movimiento</h4>
                <p class=\"list-group-item\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipomovimiento"]) ? $context["tipomovimiento"] : $this->getContext($context, "tipomovimiento")), "descripciontipomov", array()), "html", null, true);
        echo "</p>

                <h4>Estado</h4>
                <p class=\"list-group-item\">";
        // line 24
        if ($this->getAttribute((isset($context["tipomovimiento"]) ? $context["tipomovimiento"] : $this->getContext($context, "tipomovimiento")), "estadotipomov", array())) {
            echo "Activo";
        } else {
            echo "Inactivo";
        }
        echo "</p>
                </div>

                <div class=\"modal-footer\">
                <div style=\"float:left\">
                \t\t";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                \t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
                \t\t";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                </div>
                <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Cerrar</button>
                </div>
                </div>
                </div>
                </div>
                </div>
";
        
        $__internal_e6f6013145134e279e83e18698a8084177bef05b69584a3cddc21ed72d9a459b->leave($__internal_e6f6013145134e279e83e18698a8084177bef05b69584a3cddc21ed72d9a459b_prof);

    }

    public function getTemplateName()
    {
        return ":tipomovimiento:TipoMovimientoshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 31,  70 => 29,  58 => 24,  52 => 21,  46 => 18,  40 => 15,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"VerMov{{ tipomovimiento.idtipomov }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\" style=\"border-radius: 40px\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h3 align=\"center\"><strong>¿Eliminar Tipo Movimiento?</strong></h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

  <div class=\"list-group\">
    <!--modal-->

                <h4>ID</h4>
                <p class=\"list-group-item\">{{ tipomovimiento.idtipomov }}</p>

                <h4>Movimiento</h4>
                <p class=\"list-group-item\">{{  tipomovimiento.nombretipo }}</p>

                <h4>Descripcion Del Movimiento</h4>
                <p class=\"list-group-item\">{{  tipomovimiento.descripciontipomov }}</p>

                <h4>Estado</h4>
                <p class=\"list-group-item\">{% if tipomovimiento.estadotipomov %}Activo{% else %}Inactivo{% endif %}</p>
                </div>

                <div class=\"modal-footer\">
                <div style=\"float:left\">
                \t\t{{ form_start(delete_form) }}
                \t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
                \t\t{{ form_end(delete_form) }}
                </div>
                <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Cerrar</button>
                </div>
                </div>
                </div>
                </div>
                </div>
", ":tipomovimiento:TipoMovimientoshow.html.twig", "/home/ubuntu/workspace/app/Resources/views/tipomovimiento/TipoMovimientoshow.html.twig");
    }
}
