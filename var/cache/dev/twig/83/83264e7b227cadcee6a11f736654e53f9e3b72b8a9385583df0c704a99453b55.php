<?php

/* tipocuenta/TipoCuentashow.html.twig */
class __TwigTemplate_c6e9a7a09b98f0f00ed14941e42fc46f83d05c079570dad728f2becac9d94513 extends Twig_Template
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
        $__internal_cd244bfe9dc621ca613999d3835b140db1af78e03cab72c696399d1b8e1664fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd244bfe9dc621ca613999d3835b140db1af78e03cab72c696399d1b8e1664fd->enter($__internal_cd244bfe9dc621ca613999d3835b140db1af78e03cab72c696399d1b8e1664fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipocuenta/TipoCuentashow.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"miventana";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "idtipocuenta", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h4>Información Tipo Cuenta</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

  <div class=\"list-group\">
    <!--modal-->
<h4>ID</h4>
<p class=\"list-group-item\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "idtipocuenta", array()), "html", null, true);
        echo "</p>
<h4>Nombre Cuenta</h4>
<p class=\"list-group-item\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "Nombrecuenta", array()), "html", null, true);
        echo "</p>
<h4>Descripcion</h4>
<p class=\"list-group-item\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "descripcion", array()), "html", null, true);
        echo "</p>
<h4>Estado</h4>
<p class=\"list-group-item\">";
        // line 20
        if (($this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "estadotipocuenta", array()) == 1)) {
            echo " Activa ";
        } else {
            echo " Inactiva ";
        }
        echo "</p>
</div>



<div class=\"modal-footer\">
<div style=\"float:left\">
\t\t";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
\t\t";
        // line 29
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
        
        $__internal_cd244bfe9dc621ca613999d3835b140db1af78e03cab72c696399d1b8e1664fd->leave($__internal_cd244bfe9dc621ca613999d3835b140db1af78e03cab72c696399d1b8e1664fd_prof);

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
        return array (  73 => 29,  68 => 27,  54 => 20,  49 => 18,  44 => 16,  39 => 14,  22 => 1,);
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
\t\t\t<div class=\"modal-content\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h4>Información Tipo Cuenta</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

  <div class=\"list-group\">
    <!--modal-->
<h4>ID</h4>
<p class=\"list-group-item\">{{  tipocuenta.idtipocuenta }}</p>
<h4>Nombre Cuenta</h4>
<p class=\"list-group-item\">{{  tipocuenta.Nombrecuenta }}</p>
<h4>Descripcion</h4>
<p class=\"list-group-item\">{{  tipocuenta.descripcion }}</p>
<h4>Estado</h4>
<p class=\"list-group-item\">{% if tipocuenta.estadotipocuenta==1  %} Activa {% else %} Inactiva {% endif %}</p>
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
", "tipocuenta/TipoCuentashow.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\app\\Resources\\views\\tipocuenta\\TipoCuentashow.html.twig");
    }
}
