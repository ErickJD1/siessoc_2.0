<?php

/* :proyectoserviciosocial:new.html.twig */
class __TwigTemplate_1b3d419159546b53d713394f8e49428ad02ce2ce56c8433adcb1d7501ea10dbc extends Twig_Template
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
        $__internal_00c8b0732eb27e7d1791f8732277561af120debbbef43c3395429fb99f92582a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00c8b0732eb27e7d1791f8732277561af120debbbef43c3395429fb99f92582a->enter($__internal_00c8b0732eb27e7d1791f8732277561af120debbbef43c3395429fb99f92582a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proyectoserviciosocial:new.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"proyectoSS\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4>Proyecto Servicio Social</h4>
            </div>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                    <!--modal-->

                    <div class=\"box box-success\" style=\"width: 100%\">
                        <div class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
                            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proyectoserviciosocial_new"), "method" => "POST"));
        echo "
                            ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                            <input type=\"submit\" value=\"Guardar\" />
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
        
        $__internal_00c8b0732eb27e7d1791f8732277561af120debbbef43c3395429fb99f92582a->leave($__internal_00c8b0732eb27e7d1791f8732277561af120debbbef43c3395429fb99f92582a_prof);

    }

    public function getTemplateName()
    {
        return ":proyectoserviciosocial:new.html.twig";
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
        return new Twig_Source("<div class=\"modal fade\" id=\"proyectoSS\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4>Proyecto Servicio Social</h4>
            </div>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                    <!--modal-->

                    <div class=\"box box-success\" style=\"width: 100%\">
                        <div class=\"container\"  style=\"width: 75%; margin-top: 3%; margin-bottom: 3%\">
                            {{ form_start(form, {'action': path('proyectoserviciosocial_new'), 'method': 'POST'}) }}
                            {{ form_widget(form) }}
                            <input type=\"submit\" value=\"Guardar\" />
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
", ":proyectoserviciosocial:new.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/proyectoserviciosocial/new.html.twig");
    }
}
