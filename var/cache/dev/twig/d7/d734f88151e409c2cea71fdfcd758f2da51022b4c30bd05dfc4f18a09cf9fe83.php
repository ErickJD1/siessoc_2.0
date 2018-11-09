<?php

/* movimiento/Movimientonew.html.twig */
class __TwigTemplate_cf61f92fb613cef596cde8a624250910e8140e2ef1222847a1c2598bbe3aa9f5 extends Twig_Template
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
        $__internal_752371063712aaf403ff4e6910be2d979e16b47d96ebf39a9e8c84c6d335d047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752371063712aaf403ff4e6910be2d979e16b47d96ebf39a9e8c84c6d335d047->enter($__internal_752371063712aaf403ff4e6910be2d979e16b47d96ebf39a9e8c84c6d335d047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movimiento/Movimientonew.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"CrearMovi\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4>Registra Movimiento</h4>
            </div>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                       <!--modal-->

                       <div class=\"box box-success\" style=\"width: 100%\">
                            <div class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                        ";
        // line 17
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movimiento_new"), "method" => "POST"));
        echo "
                        ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                        <input class=\"btn btn-primary btn-xl\" type=\"submit\" value=\"Guardar\" />
                          ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                          </br>
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
        
        $__internal_752371063712aaf403ff4e6910be2d979e16b47d96ebf39a9e8c84c6d335d047->leave($__internal_752371063712aaf403ff4e6910be2d979e16b47d96ebf39a9e8c84c6d335d047_prof);

    }

    public function getTemplateName()
    {
        return "movimiento/Movimientonew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  44 => 18,  40 => 17,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"CrearMovi\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4>Registra Movimiento</h4>
            </div>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                       <!--modal-->

                       <div class=\"box box-success\" style=\"width: 100%\">
                            <div class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">

                        {{ form_start(form, {'action': path('movimiento_new'), 'method': 'POST'}) }}
                        {{ form_widget(form) }}
                        <input class=\"btn btn-primary btn-xl\" type=\"submit\" value=\"Guardar\" />
                          {{ form_end(form) }}
                          </br>
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
", "movimiento/Movimientonew.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\app\\Resources\\views\\movimiento\\Movimientonew.html.twig");
    }
}
