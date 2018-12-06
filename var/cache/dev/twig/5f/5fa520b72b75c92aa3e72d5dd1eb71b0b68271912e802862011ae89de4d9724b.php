<?php

/* :tipocuenta:TipoCuentashow.html.twig */
class __TwigTemplate_90f8673a3635b4a4ead12f658ac0f2437f475d7eaeca0fa8d486db89b932de49 extends Twig_Template
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
        $__internal_0de9ef459d6c12742ebf39d2573a307d3227d0042927e06464d0a42b58dfb04e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de9ef459d6c12742ebf39d2573a307d3227d0042927e06464d0a42b58dfb04e->enter($__internal_0de9ef459d6c12742ebf39d2573a307d3227d0042927e06464d0a42b58dfb04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipocuenta:TipoCuentashow.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"miventana";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "idtipocuenta", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\" style=\"border-radius: 40px\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h3 align=\"center\"><strong>¿Elimina Tipo Cuenta?</strong></h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

  <div class=\"list-group\">
    <!--modal-->

<div class=\"list-group\">
<a href=\"#\" class=\"list-group-item\">ID</a>
<p class=\"list-group-item\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "idtipocuenta", array()), "html", null, true);
        echo "</p>
<a href=\"#\" class=\"list-group-item\">Tipo Cuenta</a>
<p class=\"list-group-item\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "Nombrecuenta", array()), "html", null, true);
        echo "</p>
<a href=\"#\" class=\"list-group-item\">Descripcion</a>
<p class=\"list-group-item\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "descripcion", array()), "html", null, true);
        echo "</p>
<a href=\"#\" class=\"list-group-item\">Estado</a>
<p class=\"list-group-item\">";
        // line 22
        if (($this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "estadotipocuenta", array()) == 1)) {
            echo " Activa ";
        } else {
            echo " Inactiva ";
        }
        echo "</p>
</div>
</div>


<div class=\"modal-footer\">
<div style=\"float:left\">
\t\t";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipocuenta_delete", array("id" => $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "idtipocuenta", array()))), "Method" => "POST"));
        echo "
\t\t<input type=\"submit\" class=\"btn btn-danger\" type=\"button\" value=\"Delete\">
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
        
        $__internal_0de9ef459d6c12742ebf39d2573a307d3227d0042927e06464d0a42b58dfb04e->leave($__internal_0de9ef459d6c12742ebf39d2573a307d3227d0042927e06464d0a42b58dfb04e_prof);

    }

    public function getTemplateName()
    {
        return ":tipocuenta:TipoCuentashow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 31,  70 => 29,  56 => 22,  51 => 20,  46 => 18,  41 => 16,  22 => 1,);
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
\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\" style=\"border-radius: 40px\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h3 align=\"center\"><strong>¿Elimina Tipo Cuenta?</strong></h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

  <div class=\"list-group\">
    <!--modal-->

<div class=\"list-group\">
<a href=\"#\" class=\"list-group-item\">ID</a>
<p class=\"list-group-item\">{{  tipocuenta.idtipocuenta }}</p>
<a href=\"#\" class=\"list-group-item\">Tipo Cuenta</a>
<p class=\"list-group-item\">{{  tipocuenta.Nombrecuenta }}</p>
<a href=\"#\" class=\"list-group-item\">Descripcion</a>
<p class=\"list-group-item\">{{  tipocuenta.descripcion }}</p>
<a href=\"#\" class=\"list-group-item\">Estado</a>
<p class=\"list-group-item\">{% if tipocuenta.estadotipocuenta==1  %} Activa {% else %} Inactiva {% endif %}</p>
</div>
</div>


<div class=\"modal-footer\">
<div style=\"float:left\">
\t\t{{ form_start(delete_form, {'action': path('tipocuenta_delete', {'id': tipocuenta.idtipocuenta}), 'Method': 'POST' }) }}
\t\t<input type=\"submit\" class=\"btn btn-danger\" type=\"button\" value=\"Delete\">
\t\t{{ form_end(delete_form) }}

</div>
<button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Cerrar</button>
</div>
</div>
</div>
</div>
</div>
", ":tipocuenta:TipoCuentashow.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/tipocuenta/TipoCuentashow.html.twig");
    }
}
