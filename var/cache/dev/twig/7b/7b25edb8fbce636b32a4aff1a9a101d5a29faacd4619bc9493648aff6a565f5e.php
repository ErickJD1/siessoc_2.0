<?php

/* cuenta/Cuentanew.html.twig */
class __TwigTemplate_f4d676177a7eaef3ad2a38838d8851f90567036de5c7e2670839b1b75d9e937a extends Twig_Template
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
        $__internal_76cc09986d856494e024adff865bb856b7fedfcaf816d0ca973c6ecc4f957d79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76cc09986d856494e024adff865bb856b7fedfcaf816d0ca973c6ecc4f957d79->enter($__internal_76cc09986d856494e024adff865bb856b7fedfcaf816d0ca973c6ecc4f957d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cuenta/Cuentanew.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"CrearCuenta\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4>Registra Cuenta</h4>
            </div>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                       <!--modal-->

                       <div class=\"box box-success\" style=\"width: 100%\">
                            <div class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
                                  ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cuenta_new"), "method" => "POST"));
        echo "
                                  ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                                  <input class=\"btn btn-primary btn-xl\" type=\"submit\" value=\"Guardar\" />
                                  ";
        // line 19
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
        
        $__internal_76cc09986d856494e024adff865bb856b7fedfcaf816d0ca973c6ecc4f957d79->leave($__internal_76cc09986d856494e024adff865bb856b7fedfcaf816d0ca973c6ecc4f957d79_prof);

    }

    public function getTemplateName()
    {
        return "cuenta/Cuentanew.html.twig";
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
        return new Twig_Source("<div class=\"modal fade\" id=\"CrearCuenta\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4>Registra Cuenta</h4>
            </div>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                       <!--modal-->

                       <div class=\"box box-success\" style=\"width: 100%\">
                            <div class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
                                  {{ form_start(form, {'action': path('cuenta_new'), 'method': 'POST'}) }}
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
", "cuenta/Cuentanew.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\cuenta\\Cuentanew.html.twig");
    }
}
