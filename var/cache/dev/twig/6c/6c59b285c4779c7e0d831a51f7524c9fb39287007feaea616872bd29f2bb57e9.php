<?php

/* tipocuenta/TipoCuentaedit.html.twig */
class __TwigTemplate_6fb6f329e451bff85fb2b430697c6132680cef2c02f6e5fa3e6a39c1891f768c extends Twig_Template
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
        $__internal_745a14f28e11bf8f3c1e0a532f114b28fa60b059abebc2fc53aacda0f313a402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_745a14f28e11bf8f3c1e0a532f114b28fa60b059abebc2fc53aacda0f313a402->enter($__internal_745a14f28e11bf8f3c1e0a532f114b28fa60b059abebc2fc53aacda0f313a402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipocuenta/TipoCuentaedit.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"editcuenta";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "idtipocuenta", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h4>Datos Tipo Cuenta</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

\t\t\t\t<div class=\"list-group\">
\t\t\t\t<a herf=\"#\" class=\"\"list-group-item active\">
\t\t\t    <!--modal-->
\t\t\t\t</a>

     ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipocuenta_edit", array("id" => $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "idtipocuenta", array()))), "Method" => "POST"));
        echo "

\t\t ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "

    <div class=\"list-group\">
\t\t <div class=\"list-group-item\">
\t\t <div class=\"form-group\">
\t\t   <label class=\"col-md-4 control-label\" for=\"textinput\">Cuenta</label>
\t\t        ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombrecuenta", array()), 'errors');
        echo "
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t        ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombrecuenta", array()), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t </div>
\t\t </div>


     <div class=\"list-group-item\">
\t\t <div class=\"form-group\">
\t\t\t <label class=\"col-md-4 control-label\" for=\"textinput\">Descripcion</label>
\t\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'errors');
        echo "
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
    </div>

\t\t <div class=\"list-group-item\">
\t\t <div class=\"form-group\">
 \t\t\t <label class=\"col-md-4 control-label\" for=\"textinput\">Estado</label>
 \t\t\t\t\t\t";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estadotipocuenta", array()), 'errors');
        echo "
 \t\t\t\t\t\t<div class=\"col-md-4\">
 \t\t\t\t\t\t";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estadotipocuenta", array()), 'widget');
        echo "
 \t\t\t\t\t\t</div>
 \t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


<div class=\"modal-footer\">
<input type=\"submit\" value=\"Guardar\" class=\"btn btn-primary btn-sm\" />
<button type=\"button\" class=\"btn btn-success btn-sm\" data-dismiss=\"modal\">Cerrar</button>
";
        // line 56
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
</div>
</div>
</div>
</div>
</div>
";
        
        $__internal_745a14f28e11bf8f3c1e0a532f114b28fa60b059abebc2fc53aacda0f313a402->leave($__internal_745a14f28e11bf8f3c1e0a532f114b28fa60b059abebc2fc53aacda0f313a402_prof);

    }

    public function getTemplateName()
    {
        return "tipocuenta/TipoCuentaedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 56,  93 => 47,  88 => 45,  77 => 37,  72 => 35,  60 => 26,  55 => 24,  46 => 18,  41 => 16,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"editcuenta{{ tipocuenta.idtipocuenta }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h4>Datos Tipo Cuenta</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

\t\t\t\t<div class=\"list-group\">
\t\t\t\t<a herf=\"#\" class=\"\"list-group-item active\">
\t\t\t    <!--modal-->
\t\t\t\t</a>

     {{ form_start(edit_form, {'action': path('tipocuenta_edit', {'id': tipocuenta.idtipocuenta}), 'Method': 'POST' }) }}

\t\t {{ form_errors(edit_form) }}

    <div class=\"list-group\">
\t\t <div class=\"list-group-item\">
\t\t <div class=\"form-group\">
\t\t   <label class=\"col-md-4 control-label\" for=\"textinput\">Cuenta</label>
\t\t        {{ form_errors(edit_form.nombrecuenta) }}
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t        {{ form_widget(edit_form.nombrecuenta) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t </div>
\t\t </div>


     <div class=\"list-group-item\">
\t\t <div class=\"form-group\">
\t\t\t <label class=\"col-md-4 control-label\" for=\"textinput\">Descripcion</label>
\t\t\t\t\t\t{{ form_errors(edit_form.descripcion) }}
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t{{ form_widget(edit_form.descripcion) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
    </div>

\t\t <div class=\"list-group-item\">
\t\t <div class=\"form-group\">
 \t\t\t <label class=\"col-md-4 control-label\" for=\"textinput\">Estado</label>
 \t\t\t\t\t\t{{ form_errors(edit_form.estadotipocuenta) }}
 \t\t\t\t\t\t<div class=\"col-md-4\">
 \t\t\t\t\t\t{{ form_widget(edit_form.estadotipocuenta) }}
 \t\t\t\t\t\t</div>
 \t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


<div class=\"modal-footer\">
<input type=\"submit\" value=\"Guardar\" class=\"btn btn-primary btn-sm\" />
<button type=\"button\" class=\"btn btn-success btn-sm\" data-dismiss=\"modal\">Cerrar</button>
{{ form_end(edit_form) }}
</div>
</div>
</div>
</div>
</div>
", "tipocuenta/TipoCuentaedit.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\app\\Resources\\views\\tipocuenta\\TipoCuentaedit.html.twig");
    }
}