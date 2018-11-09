<?php

/* :banco:Banconew.html.twig */
class __TwigTemplate_57cc421bc26aca733dca2c619acd4f7272d3a5e30f2650dfc2c1bd0a75523bb5 extends Twig_Template
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
        $__internal_618f0c7b4e3b6eb6ef7bb5d370f69d3cc532ec969194f6be05d4480f9647c67b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_618f0c7b4e3b6eb6ef7bb5d370f69d3cc532ec969194f6be05d4480f9647c67b->enter($__internal_618f0c7b4e3b6eb6ef7bb5d370f69d3cc532ec969194f6be05d4480f9647c67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":banco:Banconew.html.twig"));

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
        
        $__internal_618f0c7b4e3b6eb6ef7bb5d370f69d3cc532ec969194f6be05d4480f9647c67b->leave($__internal_618f0c7b4e3b6eb6ef7bb5d370f69d3cc532ec969194f6be05d4480f9647c67b_prof);

    }

    public function getTemplateName()
    {
        return ":banco:Banconew.html.twig";
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
", ":banco:Banconew.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/banco/Banconew.html.twig");
    }
}
