<?php

/* solicitudbecario/Solicitudbecarionew.html.twig */
class __TwigTemplate_c8f56c59f600c5da0904c39c8e95976d69b374d8ad41c988a229820d8f561b7a extends Twig_Template
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
        $__internal_ef7bc1b1a573a17652c79226da0487e416009744ec16b541a9b67c7a2b7a4857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef7bc1b1a573a17652c79226da0487e416009744ec16b541a9b67c7a2b7a4857->enter($__internal_ef7bc1b1a573a17652c79226da0487e416009744ec16b541a9b67c7a2b7a4857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "solicitudbecario/Solicitudbecarionew.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"CrearSoli\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4>Registra Tipo Cuenta</h4>
            </div>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                       <!--modal-->

                       <div class=\"box box-success\" style=\"width: 100%\">
                            <div class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
                              ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("solicitudbecario_new"), "method" => "POST"));
        echo "
                              ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                              <input class=\"btn btn-primary btn-xl\" type=\"submit\" value=\"Guardar\" />
                              ";
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "  </br>
                            </div>
                            </br>
                        </div>

                        <!--modal-->
                </div>

                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Cerrar</button>
                </div>
            </div>
        </div>
      </div>
";
        
        $__internal_ef7bc1b1a573a17652c79226da0487e416009744ec16b541a9b67c7a2b7a4857->leave($__internal_ef7bc1b1a573a17652c79226da0487e416009744ec16b541a9b67c7a2b7a4857_prof);

    }

    public function getTemplateName()
    {
        return "solicitudbecario/Solicitudbecarionew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 19,  43 => 17,  39 => 16,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"CrearSoli\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4>Registra Tipo Cuenta</h4>
            </div>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                       <!--modal-->

                       <div class=\"box box-success\" style=\"width: 100%\">
                            <div class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
                              {{ form_start(form, {'action': path('solicitudbecario_new'), 'method': 'POST'}) }}
                              {{ form_widget(form) }}
                              <input class=\"btn btn-primary btn-xl\" type=\"submit\" value=\"Guardar\" />
                              {{ form_end(form) }}  </br>
                            </div>
                            </br>
                        </div>

                        <!--modal-->
                </div>

                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Cerrar</button>
                </div>
            </div>
        </div>
      </div>
", "solicitudbecario/Solicitudbecarionew.html.twig", "/home/ubuntu/workspace/app/Resources/views/solicitudbecario/Solicitudbecarionew.html.twig");
    }
}
