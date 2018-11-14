<?php

/* tipotransaccion/Tipotransaccionedit.html.twig */
class __TwigTemplate_dd9a035041b5791a2fad5db87e7b164adf7edc21fa4c3dc5738497e58cfef42b extends Twig_Template
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
        $__internal_834ba2d446a2464806106f9e9aaa346f1950b233fd1a97633e22c440bcb2f785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_834ba2d446a2464806106f9e9aaa346f1950b233fd1a97633e22c440bcb2f785->enter($__internal_834ba2d446a2464806106f9e9aaa346f1950b233fd1a97633e22c440bcb2f785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipotransaccion/Tipotransaccionedit.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"EditTransaccion";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipotransaccion"]) ? $context["tipotransaccion"] : $this->getContext($context, "tipotransaccion")), "idtipotransaccion", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h4 align=\"Center\">Datos Tipo Transaccion</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

\t\t\t\t<div class=\"list-group\">
\t\t\t\t<a herf=\"#\" class=\"\"list-group-item active\">
\t\t\t    <!--modal-->
\t\t\t\t</a>

                        ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipotransaccion_edit", array("id" => $this->getAttribute((isset($context["tipotransaccion"]) ? $context["tipotransaccion"] : $this->getContext($context, "tipotransaccion")), "idtipotransaccion", array()))), "Method" => "POST"));
        echo "

                        ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "

        <div class=\"list-group\">
\t\t    <div class=\"list-group-item\">
\t\t        <div class=\"form-group\" class=\"css\">
\t\t   <label class=\"col-md-4 control-label\" for=\"textinput\">Tipo Transaccion</label>
\t\t        ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombretipotransac", array()), 'errors');
        echo "
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t        ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombretipotransac", array()), 'widget');
        echo "
\t\t\t    </div>
\t\t\t</div>
\t\t </div>


\t\t <div class=\"list-group-item\">
\t\t <div class=\"form-group\">
 \t\t\t <label class=\"col-md-4 control-label\" for=\"textinput\">Estado</label>
 \t\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estadotipotransac", array()), 'errors');
        echo "
 \t\t\t\t\t\t<div class=\"col-md-4\">
 \t\t\t\t\t\t";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estadotipotransac", array()), 'widget');
        echo "
 \t\t\t\t\t\t</div>
 \t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


<div class=\"modal-footer\">
<input type=\"submit\" value=\"Guardar\" class=\"btn btn-primary btn-sm\" />
<button type=\"button\" class=\"btn btn-success btn-sm\" data-dismiss=\"modal\">Cerrar</button>
";
        // line 46
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
</div>
</div>
</div>
</div>
";
        
        $__internal_834ba2d446a2464806106f9e9aaa346f1950b233fd1a97633e22c440bcb2f785->leave($__internal_834ba2d446a2464806106f9e9aaa346f1950b233fd1a97633e22c440bcb2f785_prof);

    }

    public function getTemplateName()
    {
        return "tipotransaccion/Tipotransaccionedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 46,  77 => 37,  72 => 35,  60 => 26,  55 => 24,  46 => 18,  41 => 16,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"EditTransaccion{{ tipotransaccion.idtipotransaccion }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h4 align=\"Center\">Datos Tipo Transaccion</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

\t\t\t\t<div class=\"list-group\">
\t\t\t\t<a herf=\"#\" class=\"\"list-group-item active\">
\t\t\t    <!--modal-->
\t\t\t\t</a>

                        {{ form_start(edit_form, {'action': path('tipotransaccion_edit', {'id': tipotransaccion.idtipotransaccion }), 'Method': 'POST' }) }}

                        {{ form_errors(edit_form) }}

        <div class=\"list-group\">
\t\t    <div class=\"list-group-item\">
\t\t        <div class=\"form-group\" class=\"css\">
\t\t   <label class=\"col-md-4 control-label\" for=\"textinput\">Tipo Transaccion</label>
\t\t        {{ form_errors(edit_form.nombretipotransac)  }}
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t        {{ form_widget(edit_form.nombretipotransac) }}
\t\t\t    </div>
\t\t\t</div>
\t\t </div>


\t\t <div class=\"list-group-item\">
\t\t <div class=\"form-group\">
 \t\t\t <label class=\"col-md-4 control-label\" for=\"textinput\">Estado</label>
 \t\t\t\t\t\t{{ form_errors(edit_form.estadotipotransac) }}
 \t\t\t\t\t\t<div class=\"col-md-4\">
 \t\t\t\t\t\t{{ form_widget(edit_form.estadotipotransac) }}
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
", "tipotransaccion/Tipotransaccionedit.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\app\\Resources\\views\\tipotransaccion\\Tipotransaccionedit.html.twig");
    }
}
