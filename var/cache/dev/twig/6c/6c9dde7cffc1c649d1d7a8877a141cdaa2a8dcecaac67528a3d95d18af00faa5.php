<?php

/* colaboracionmonetaria/Colaboracionmonetariashowdelete.html.twig */
class __TwigTemplate_bfcf78e4602d7cd72677d99b74e066a9ca367386bbf1b925a1251a9e13eb8dea extends Twig_Template
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
        $__internal_04eb079fdfd37c43599d2d019ae383958ef7080e2363725dea0ca2fce8ad44e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04eb079fdfd37c43599d2d019ae383958ef7080e2363725dea0ca2fce8ad44e1->enter($__internal_04eb079fdfd37c43599d2d019ae383958ef7080e2363725dea0ca2fce8ad44e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "colaboracionmonetaria/Colaboracionmonetariashowdelete.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"deletetcolaboracion";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["colaboracionmonetaria"]) ? $context["colaboracionmonetaria"] : $this->getContext($context, "colaboracionmonetaria")), "idcolaboracion", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\" style=\"border-radius: 40px\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h3 align=\"center\"><strong><strong>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["colaboracionmonetaria"]) ? $context["colaboracionmonetaria"] : $this->getContext($context, "colaboracionmonetaria")), "descripcioncolaboracion", array()), "html", null, true);
        echo "</strong></strong></h3>
            </div>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                    <!--modal-->
                    
                      <div class=\"row\" style=\"margin-left:5%\" align=\"left\">
                        <!--modal-->
                        <div class=\"col col-md-7\">

                 <h4><i class=\"fa fa-list\"></i> Descripcioncolaboracion</h4>
                <p class=\"form-group\"><strong>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["colaboracionmonetaria"]) ? $context["colaboracionmonetaria"] : $this->getContext($context, "colaboracionmonetaria")), "descripcioncolaboracion", array()), "html", null, true);
        echo "</strong></p>
                <hr>
                <h4><i class=\"fa fa-money\"></i> Montomescolaboracion</h4>
                <p class=\"form-group\"><strong>";
        // line 22
        echo twig_escape_filter($this->env, ("\$" . $this->getAttribute((isset($context["colaboracionmonetaria"]) ? $context["colaboracionmonetaria"] : $this->getContext($context, "colaboracionmonetaria")), "montomescolaboracion", array())), "html", null, true);
        echo "</strong></p>
                <hr>
                <h4><i class=\"fa fa-money\"></i> Saldocolaboracion</h4>
                <p class=\"form-group\"><strong>";
        // line 25
        echo twig_escape_filter($this->env, ("\$" . $this->getAttribute((isset($context["colaboracionmonetaria"]) ? $context["colaboracionmonetaria"] : $this->getContext($context, "colaboracionmonetaria")), "saldocolaboracion", array())), "html", null, true);
        echo "</strong></p>
                <hr>
                <h4><i class=\"fa fa-check\"></i> Estadocolaboracion</h4>
                <p class=\"form-group\"><strong>";
        // line 28
        if ($this->getAttribute((isset($context["colaboracionmonetaria"]) ? $context["colaboracionmonetaria"] : $this->getContext($context, "colaboracionmonetaria")), "estadocolaboracion", array())) {
            echo "Activa";
        } else {
            echo "Baja";
        }
        echo "</strong></p>
  </div>
                        <div class=\"col col-md-5\">

                            <img style=\"width:75%;margin-top: 10%;margin-bottom: 2%\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/delete.png"), "html", null, true);
        echo "\"></img>
                        </div>
                    </div>


                  <div class=\"modal-footer\">
                        <div style=\"float:right\">
                            ";
        // line 39
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("colaboracionmonetaria_delete", array("id" => $this->getAttribute((isset($context["colaboracionmonetaria"]) ? $context["colaboracionmonetaria"] : $this->getContext($context, "colaboracionmonetaria")), "idcolaboracion", array()))), "Method" => "POST"));
        echo "
                            <input type=\"submit\" class=\"btn btn-danger\" type=\"button\" value=\"Eliminar\">
                            ";
        // line 41
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                        </div>
                        
                            <button type=\"button\" class=\"btn btn-success\" style=\"margin-right: 1px\" data-dismiss=\"modal\">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_04eb079fdfd37c43599d2d019ae383958ef7080e2363725dea0ca2fce8ad44e1->leave($__internal_04eb079fdfd37c43599d2d019ae383958ef7080e2363725dea0ca2fce8ad44e1_prof);

    }

    public function getTemplateName()
    {
        return "colaboracionmonetaria/Colaboracionmonetariashowdelete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 41,  86 => 39,  76 => 32,  65 => 28,  59 => 25,  53 => 22,  47 => 19,  32 => 7,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"deletetcolaboracion{{ colaboracionmonetaria.idcolaboracion }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\" style=\"border-radius: 40px\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h3 align=\"center\"><strong><strong>{{  colaboracionmonetaria.descripcioncolaboracion }}</strong></strong></h3>
            </div>
            <div class=\"modal-body\">

                <div class=\"list-group\">
                    <!--modal-->
                    
                      <div class=\"row\" style=\"margin-left:5%\" align=\"left\">
                        <!--modal-->
                        <div class=\"col col-md-7\">

                 <h4><i class=\"fa fa-list\"></i> Descripcioncolaboracion</h4>
                <p class=\"form-group\"><strong>{{ colaboracionmonetaria.descripcioncolaboracion }}</strong></p>
                <hr>
                <h4><i class=\"fa fa-money\"></i> Montomescolaboracion</h4>
                <p class=\"form-group\"><strong>{{ \"\$\"~colaboracionmonetaria.montomescolaboracion }}</strong></p>
                <hr>
                <h4><i class=\"fa fa-money\"></i> Saldocolaboracion</h4>
                <p class=\"form-group\"><strong>{{ \"\$\"~colaboracionmonetaria.saldocolaboracion }}</strong></p>
                <hr>
                <h4><i class=\"fa fa-check\"></i> Estadocolaboracion</h4>
                <p class=\"form-group\"><strong>{% if colaboracionmonetaria.estadocolaboracion %}Activa{% else %}Baja{% endif %}</strong></p>
  </div>
                        <div class=\"col col-md-5\">

                            <img style=\"width:75%;margin-top: 10%;margin-bottom: 2%\" src=\"{{ asset('img/delete.png') }}\"></img>
                        </div>
                    </div>


                  <div class=\"modal-footer\">
                        <div style=\"float:right\">
                            {{ form_start(delete_form, {'action': path('colaboracionmonetaria_delete', {'id': colaboracionmonetaria.idcolaboracion}), 'Method': 'POST' }) }}
                            <input type=\"submit\" class=\"btn btn-danger\" type=\"button\" value=\"Eliminar\">
                            {{ form_end(delete_form) }}
                        </div>
                        
                            <button type=\"button\" class=\"btn btn-success\" style=\"margin-right: 1px\" data-dismiss=\"modal\">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
", "colaboracionmonetaria/Colaboracionmonetariashowdelete.html.twig", "/home/ubuntu/workspace/app/Resources/views/colaboracionmonetaria/Colaboracionmonetariashowdelete.html.twig");
    }
}
