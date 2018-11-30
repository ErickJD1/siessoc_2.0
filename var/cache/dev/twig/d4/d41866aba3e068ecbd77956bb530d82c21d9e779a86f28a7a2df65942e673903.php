<?php

/* :solicitudss:new.html.twig */
class __TwigTemplate_f3bd83784fa2e812ea953f8eb1c7d6f93c27305ef616d31d2e0431ae76d25309 extends Twig_Template
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
        $__internal_0e53b4f5fd803f793e9bb49c934965a86103f6c8891b9d2eed442903017bd38f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e53b4f5fd803f793e9bb49c934965a86103f6c8891b9d2eed442903017bd38f->enter($__internal_0e53b4f5fd803f793e9bb49c934965a86103f6c8891b9d2eed442903017bd38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":solicitudss:new.html.twig"));

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
        
        $__internal_0e53b4f5fd803f793e9bb49c934965a86103f6c8891b9d2eed442903017bd38f->leave($__internal_0e53b4f5fd803f793e9bb49c934965a86103f6c8891b9d2eed442903017bd38f_prof);

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
", ":solicitudss:new.html.twig", "/home/ubuntu/workspace/app/Resources/views/solicitudss/new.html.twig");
    }
}
