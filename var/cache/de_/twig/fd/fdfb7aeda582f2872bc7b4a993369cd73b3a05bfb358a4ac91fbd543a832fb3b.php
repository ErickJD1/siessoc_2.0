<?php

/* :tipocuenta:TipoCuentaedit.html.twig */
class __TwigTemplate_85427a3211eb10198abd9b1963e55dbd0766933a54ebb3d484a04173e0753e2d extends Twig_Template
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
        $__internal_7bbb51779eb853c50fb78d30b63c6f5c3468f80598d66c275fa37a3659f8001c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bbb51779eb853c50fb78d30b63c6f5c3468f80598d66c275fa37a3659f8001c->enter($__internal_7bbb51779eb853c50fb78d30b63c6f5c3468f80598d66c275fa37a3659f8001c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipocuenta:TipoCuentaedit.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"editcuenta";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "idtipocuenta", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h4>Datos De Cuenta</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

  <div class=\"list-group\">
\t<a herf=\"#\" class=\"\"list-group-item active\">
    <!--modal-->
</a>
    <div class=\"box box-success\" style=\"width: 100%\">
      <div class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
            ";
        // line 17
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipocuenta_edit", array("id" => $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : $this->getContext($context, "tipocuenta")), "idtipocuenta", array()))), "Method" => "POST"));
        echo "
            ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "

            <input type=\"submit\" value=\"Guardar\" />
            ";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    <ul>
        <li>
            <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipocuenta_index");
        echo "\">Atras</a>
        </li>
    </ul>

    </div>
    <br>
    </div>
    <!--modal-->
</div>
<div class=\"modal-footer\">
    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Cerrar</button>
</div>
</div>
</div>
</div>
";
        
        $__internal_7bbb51779eb853c50fb78d30b63c6f5c3468f80598d66c275fa37a3659f8001c->leave($__internal_7bbb51779eb853c50fb78d30b63c6f5c3468f80598d66c275fa37a3659f8001c_prof);

    }

    public function getTemplateName()
    {
        return ":tipocuenta:TipoCuentaedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 24,  52 => 21,  46 => 18,  42 => 17,  22 => 1,);
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
\t\t\t\t\t<h4>Datos De Cuenta</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

  <div class=\"list-group\">
\t<a herf=\"#\" class=\"\"list-group-item active\">
    <!--modal-->
</a>
    <div class=\"box box-success\" style=\"width: 100%\">
      <div class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
            {{ form_start(edit_form, {'action': path('tipocuenta_edit', {'id': tipocuenta.idtipocuenta}), 'Method': 'POST' }) }}
            {{ form_widget(edit_form) }}

            <input type=\"submit\" value=\"Guardar\" />
            {{ form_end(edit_form) }}
    <ul>
        <li>
            <a href=\"{{ path('tipocuenta_index') }}\">Atras</a>
        </li>
    </ul>

    </div>
    <br>
    </div>
    <!--modal-->
</div>
<div class=\"modal-footer\">
    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Cerrar</button>
</div>
</div>
</div>
</div>
", ":tipocuenta:TipoCuentaedit.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\app/Resources\\views/tipocuenta/TipoCuentaedit.html.twig");
    }
}
