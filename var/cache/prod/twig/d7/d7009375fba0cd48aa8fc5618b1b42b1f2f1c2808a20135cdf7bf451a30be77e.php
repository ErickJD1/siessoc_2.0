<?php

/* :tipotransaccion:Tipotransaccionedit.html.twig */
class __TwigTemplate_8fa28c20390318a770f1aa884e3d066f820f1a384e8f11f52715fdc26e960f2b extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"EditTransaccion";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipotransaccion"]) ? $context["tipotransaccion"] : null), "idtipotransaccion", array()), "html", null, true);
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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipotransaccion_edit", array("id" => $this->getAttribute((isset($context["tipotransaccion"]) ? $context["tipotransaccion"] : null), "idtipotransaccion", array()))), "Method" => "POST"));
        echo "

                        ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'errors');
        echo "

        <div class=\"list-group\">
\t\t    <div class=\"list-group-item\">
\t\t        <div class=\"form-group\">
\t\t   <label class=\"col-md-4 control-label\" for=\"textinput\">Tipo Transaccion</label>
\t\t        ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "nombretipotransac", array()), 'errors');
        echo "
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t        ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "nombretipotransac", array()), 'widget');
        echo "
\t\t\t    </div>
\t\t\t</div>
\t\t </div>


\t\t <div class=\"list-group-item\">
\t\t <div class=\"form-group\">
 \t\t\t <label class=\"col-md-4 control-label\" for=\"textinput\">Estado</label>
 \t\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "estadotipotransac", array()), 'errors');
        echo "
 \t\t\t\t\t\t<div class=\"col-md-4\">
 \t\t\t\t\t\t";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "estadotipotransac", array()), 'widget');
        echo "
 \t\t\t\t\t\t</div>
 \t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


<div class=\"modal-footer\">
<input type=\"submit\" value=\"Guardar\" class=\"btn btn-primary btn-sm\" />
<button type=\"button\" class=\"btn btn-success btn-sm\" data-dismiss=\"modal\">Cerrar</button>
";
        // line 46
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
        echo "
</div>
</div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return ":tipotransaccion:Tipotransaccionedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 46,  74 => 37,  69 => 35,  57 => 26,  52 => 24,  43 => 18,  38 => 16,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":tipotransaccion:Tipotransaccionedit.html.twig", "/home/ubuntu/workspace/app/Resources/views/tipotransaccion/Tipotransaccionedit.html.twig");
    }
}
