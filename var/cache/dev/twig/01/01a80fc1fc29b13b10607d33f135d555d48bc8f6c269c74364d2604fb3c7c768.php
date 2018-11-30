<?php

/* :tipotransaccion:Tipotransaccionnew.html.twig */
class __TwigTemplate_f32994a34de993560212aaeb5ec975307a44d75d35684c9a00f51af85d5242f1 extends Twig_Template
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
        $__internal_e43380dda2aee2ce723bc2823f23ac988799b55db27a4449362c5624f96ab667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e43380dda2aee2ce723bc2823f23ac988799b55db27a4449362c5624f96ab667->enter($__internal_e43380dda2aee2ce723bc2823f23ac988799b55db27a4449362c5624f96ab667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipotransaccion:Tipotransaccionnew.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"CrearTransaccion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipotransaccion_new"), "method" => "POST"));
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
        
        $__internal_e43380dda2aee2ce723bc2823f23ac988799b55db27a4449362c5624f96ab667->leave($__internal_e43380dda2aee2ce723bc2823f23ac988799b55db27a4449362c5624f96ab667_prof);

    }

    public function getTemplateName()
    {
        return ":tipotransaccion:Tipotransaccionnew.html.twig";
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
        return new Twig_Source("<div class=\"modal fade\" id=\"CrearTransaccion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
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
                            {{ form_start(form, {'action': path('tipotransaccion_new'), 'method': 'POST'}) }}
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
", ":tipotransaccion:Tipotransaccionnew.html.twig", "/home/ubuntu/workspace/app/Resources/views/tipotransaccion/Tipotransaccionnew.html.twig");
    }
}
