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
        $__internal_e4ac4b7f59dbc8318b592969d5109cd6a6b37086df931d89a9acdafe90980428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ac4b7f59dbc8318b592969d5109cd6a6b37086df931d89a9acdafe90980428->enter($__internal_e4ac4b7f59dbc8318b592969d5109cd6a6b37086df931d89a9acdafe90980428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipocuenta:TipoCuentashow.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"miventana";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "idtipocuenta", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h4>Datos De Cuenta</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">


<form class=\"form-horizontal\">
<fieldset>

<!-- Form Name -->
<legend>Información Cuenta</legend>

<!-- Prepended text-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"prependedtext\"></label>
  <div class=\"col-md-6\">
    <div class=\"input-group\">
      <span class=\"input-group-addon\">ID</span>
      <input id=\"prependedtext\" name=\"prependedtext\" class=\"form-control\" placeholder=\"\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "idtipocuenta", array()), "html", null, true);
        echo "\" type=\"text\">
    </div>

  </div>
</div>
</br>
<!-- Prepended text-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"prependedtext\"></label>
  <div class=\"col-md-6\">
    <div class=\"input-group\">
      <span class=\"input-group-addon\">Cuenta</span>
      <input id=\"prependedtext\" name=\"prependedtext\" class=\"form-control\" placeholder=\"\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "Nombrecuenta", array()), "html", null, true);
        echo "\" type=\"text\">
    </div>

  </div>
</div>

<!-- Textarea -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"textarea\"></label>
  <div class=\"col-md-4\">
    <textarea class=\"form-control\" id=\"textarea\" name=\"textarea\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "descripcion", array()), "html", null, true);
        echo "</textarea>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"checkboxes\"></label>
  <div class=\"col-md-4\">
\t";
        // line 54
        if ($this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "estadotipocuenta", array())) {
            // line 55
            echo "  <div class=\"checkbox\">
    <label for=\"checkboxes-0\">
      <input type=\"checkbox\" name=\"checkboxes\" id=\"checkboxes-0\" value=\"true\" checked>
      Activa
    </label>
\t</div>
\t";
        }
        // line 62
        echo "  <div class=\"checkbox\">
    <label for=\"checkboxes-1\">
      <input type=\"checkbox\" name=\"checkboxes\" id=\"checkboxes-1\" value=\"false\">
      Inactiva
    </label>
\t</div>
  </div>
</div>

</fieldset>
</form>


<div class=\"modal-footer\">
<div style=\"float:left\">
\t\t";
        // line 77
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
\t\t";
        // line 79
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
        
        $__internal_e4ac4b7f59dbc8318b592969d5109cd6a6b37086df931d89a9acdafe90980428->leave($__internal_e4ac4b7f59dbc8318b592969d5109cd6a6b37086df931d89a9acdafe90980428_prof);

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
        return array (  121 => 79,  116 => 77,  99 => 62,  90 => 55,  88 => 54,  77 => 46,  64 => 36,  49 => 24,  22 => 1,);
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
\t\t\t\t\t<h4>Datos De Cuenta</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">


<form class=\"form-horizontal\">
<fieldset>

<!-- Form Name -->
<legend>Información Cuenta</legend>

<!-- Prepended text-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"prependedtext\"></label>
  <div class=\"col-md-6\">
    <div class=\"input-group\">
      <span class=\"input-group-addon\">ID</span>
      <input id=\"prependedtext\" name=\"prependedtext\" class=\"form-control\" placeholder=\"\" value=\"{{  tipocuenta.idtipocuenta }}\" type=\"text\">
    </div>

  </div>
</div>
</br>
<!-- Prepended text-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"prependedtext\"></label>
  <div class=\"col-md-6\">
    <div class=\"input-group\">
      <span class=\"input-group-addon\">Cuenta</span>
      <input id=\"prependedtext\" name=\"prependedtext\" class=\"form-control\" placeholder=\"\" value=\"{{  tipocuenta.Nombrecuenta }}\" type=\"text\">
    </div>

  </div>
</div>

<!-- Textarea -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"textarea\"></label>
  <div class=\"col-md-4\">
    <textarea class=\"form-control\" id=\"textarea\" name=\"textarea\">{{  tipocuenta.descripcion }}</textarea>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"checkboxes\"></label>
  <div class=\"col-md-4\">
\t{% if tipocuenta.estadotipocuenta  %}
  <div class=\"checkbox\">
    <label for=\"checkboxes-0\">
      <input type=\"checkbox\" name=\"checkboxes\" id=\"checkboxes-0\" value=\"true\" checked>
      Activa
    </label>
\t</div>
\t{% endif %}
  <div class=\"checkbox\">
    <label for=\"checkboxes-1\">
      <input type=\"checkbox\" name=\"checkboxes\" id=\"checkboxes-1\" value=\"false\">
      Inactiva
    </label>
\t</div>
  </div>
</div>

</fieldset>
</form>


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
", ":tipocuenta:TipoCuentashow.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\app/Resources\\views/tipocuenta/TipoCuentashow.html.twig");
    }
}
