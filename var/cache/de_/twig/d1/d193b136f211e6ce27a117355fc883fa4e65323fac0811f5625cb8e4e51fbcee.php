<?php

/* :bitacora:new.html.twig */
class __TwigTemplate_3008f206fc9bc85c065459f6b08ec6e7bd520725152035eed671b1ef6ca39c94 extends Twig_Template
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
        $__internal_9f63edba638eb2654b5a61bac7a54f73d80ef4e4c253401024a8a11e803e9908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f63edba638eb2654b5a61bac7a54f73d80ef4e4c253401024a8a11e803e9908->enter($__internal_9f63edba638eb2654b5a61bac7a54f73d80ef4e4c253401024a8a11e803e9908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":bitacora:new.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"create1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4>Registrar Bitacora</h4>
            </div>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                    <a herf=\"#\" class=\"\"list-group-item active\">
                       <!--modal-->
            <div class=\"box box-success\" style=\"width: 100%\">
            <div class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
       ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bitacora_new"), "method" => "POST"));
        echo "
        ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" class=\"btn btn-primary btn-xs\" />
          <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bitacora_index");
        echo "\" class=\"btn btn-info btn-xs\">Atrás</a>
    ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
  </div>
  </br>
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
        
        $__internal_9f63edba638eb2654b5a61bac7a54f73d80ef4e4c253401024a8a11e803e9908->leave($__internal_9f63edba638eb2654b5a61bac7a54f73d80ef4e4c253401024a8a11e803e9908_prof);

    }

    public function getTemplateName()
    {
        return ":bitacora:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 20,  48 => 19,  43 => 17,  39 => 16,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"create1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4>Registrar Bitacora</h4>
            </div>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                    <a herf=\"#\" class=\"\"list-group-item active\">
                       <!--modal-->
            <div class=\"box box-success\" style=\"width: 100%\">
            <div class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
       {{ form_start(form, {'action': path('bitacora_new'), 'method': 'POST'}) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" class=\"btn btn-primary btn-xs\" />
          <a href=\"{{ path('bitacora_index') }}\" class=\"btn btn-info btn-xs\">Atrás</a>
    {{ form_end(form) }}
  </div>
  </br>
</div>

<!--modal-->
</div>

<div class=\"modal-footer\">
<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Cerrar</button>
</div>
</div>
</div>
</div>
", ":bitacora:new.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\app/Resources\\views/bitacora/new.html.twig");
    }
}
