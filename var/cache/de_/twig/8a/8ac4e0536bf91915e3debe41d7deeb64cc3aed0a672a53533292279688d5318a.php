<?php

/* solicitudss/new.html.twig */
class __TwigTemplate_2bbba207084917e2a044d6556af38bb83b8e016a6b0803b11d981922ee482c23 extends Twig_Template
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
        $__internal_9da40a9e986cf9347d85f1ea6c50145d03fff10ed4f35778d5b9e53dee1e3ef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9da40a9e986cf9347d85f1ea6c50145d03fff10ed4f35778d5b9e53dee1e3ef2->enter($__internal_9da40a9e986cf9347d85f1ea6c50145d03fff10ed4f35778d5b9e53dee1e3ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "solicitudss/new.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"create1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4>Registro de Servicio Social</h4>
            </div>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                    <a herf=\"#\" class=\"\"list-group-item active\">
                       <!--modal-->
            <div class=\"box box-success\" style=\"width: 100%\">
            <div class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
       ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("servicio_social_new"), "method" => "POST"));
        echo "
       ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
       <ul>
                <input type=\"submit\" value=\"Create\" class=\"btn btn-primary btn-xs\" />
                <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("servicio_social_index");
        echo "\" class=\"btn btn-info btn-xs\">Atrás</a>
        </ul>
    ";
        // line 22
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
        
        $__internal_9da40a9e986cf9347d85f1ea6c50145d03fff10ed4f35778d5b9e53dee1e3ef2->leave($__internal_9da40a9e986cf9347d85f1ea6c50145d03fff10ed4f35778d5b9e53dee1e3ef2_prof);

    }

    public function getTemplateName()
    {
        return "solicitudss/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 22,  49 => 20,  43 => 17,  39 => 16,  22 => 1,);
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
                <h4>Registro de Servicio Social</h4>
            </div>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                    <a herf=\"#\" class=\"\"list-group-item active\">
                       <!--modal-->
            <div class=\"box box-success\" style=\"width: 100%\">
            <div class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
       {{ form_start(form, {'action': path('servicio_social_new'), 'method': 'POST'}) }}
       {{ form_widget(form) }}
       <ul>
                <input type=\"submit\" value=\"Create\" class=\"btn btn-primary btn-xs\" />
                <a href=\"{{ path('servicio_social_index') }}\" class=\"btn btn-info btn-xs\">Atrás</a>
        </ul>
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
", "solicitudss/new.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\app\\Resources\\views\\solicitudss\\new.html.twig");
    }
}