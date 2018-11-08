<?php

/* :solicitudss:new.html.twig */
class __TwigTemplate_9b3c347c646d124c5001c6902e28af2d68130c9a06ab2e2c7732dc44fc4b7dba extends Twig_Template
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
        $__internal_2c3138e6c9d0894775d165c319ee2e7d0a42fd88d1e533d130e29d33b071abb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c3138e6c9d0894775d165c319ee2e7d0a42fd88d1e533d130e29d33b071abb0->enter($__internal_2c3138e6c9d0894775d165c319ee2e7d0a42fd88d1e533d130e29d33b071abb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":solicitudss:new.html.twig"));

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
        
        $__internal_2c3138e6c9d0894775d165c319ee2e7d0a42fd88d1e533d130e29d33b071abb0->leave($__internal_2c3138e6c9d0894775d165c319ee2e7d0a42fd88d1e533d130e29d33b071abb0_prof);

    }

    public function getTemplateName()
    {
        return ":solicitudss:new.html.twig";
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
", ":solicitudss:new.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/solicitudss/new.html.twig");
    }
}
