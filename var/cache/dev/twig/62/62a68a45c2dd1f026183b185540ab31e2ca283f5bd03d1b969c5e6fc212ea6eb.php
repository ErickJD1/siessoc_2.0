<?php

/* banco/Banconew.html.twig */
class __TwigTemplate_a1ae1eadc9ce372f5d4f8b3f23a1a3552e3a1e598b02445107af1eb3b8897da9 extends Twig_Template
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
        $__internal_713486e1955eff8d035af9d34383516550976748afccede80af0ab04f93c139d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_713486e1955eff8d035af9d34383516550976748afccede80af0ab04f93c139d->enter($__internal_713486e1955eff8d035af9d34383516550976748afccede80af0ab04f93c139d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "banco/Banconew.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"CrearBanco\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4>Registrar Banco</h4>
            </div>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                       <!--modal-->

                       <div class=\"box box-success\" style=\"width: 100%\">
                            <div class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
                                  ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("banco_new"), "method" => "POST"));
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
        
        $__internal_713486e1955eff8d035af9d34383516550976748afccede80af0ab04f93c139d->leave($__internal_713486e1955eff8d035af9d34383516550976748afccede80af0ab04f93c139d_prof);

    }

    public function getTemplateName()
    {
        return "banco/Banconew.html.twig";
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
        return new Twig_Source("<div class=\"modal fade\" id=\"CrearBanco\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4>Registrar Banco</h4>
            </div>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                       <!--modal-->

                       <div class=\"box box-success\" style=\"width: 100%\">
                            <div class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
                                  {{ form_start(form, {'action': path('banco_new'), 'method': 'POST'}) }}
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
", "banco/Banconew.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\banco\\Banconew.html.twig");
    }
}
