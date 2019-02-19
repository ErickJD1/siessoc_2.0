<?php

/* banco/Bancoshowdelete.html.twig */
class __TwigTemplate_b6d2636da4ed346668c8f4d5f72eaf0f2c63d5777eef3ce6d5a616f739d1888a extends Twig_Template
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
        $__internal_fcc504960a8d7a667e5031168f349d0c702161f22bcee0fa085c290962201ef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc504960a8d7a667e5031168f349d0c702161f22bcee0fa085c290962201ef7->enter($__internal_fcc504960a8d7a667e5031168f349d0c702161f22bcee0fa085c290962201ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "banco/Bancoshowdelete.html.twig"));

        // line 1
        echo "<div  class=\"modal fade\" id=\"showdeleteBanco";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["banco"]) ? $context["banco"] : $this->getContext($context, "banco")), "idbanco", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" >
        <div class=\"modal-content\" style=\"border-radius: 40px\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h3 align=\"center\"><strong>¿Eliminar Banco?</strong></h3>
            </div>

            <div class=\"modal-body\">

                <div class=\"list-group\">
                    <!--modal-->
                    <div class=\"row\" style=\"margin-left:5%\" align=\"left\">
                        <div class=\"col col-md-7\">
                            <h4><i class=\"fa fa-font\"></i>Banco</h4>
                            <p class=\"form-group\"><strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["banco"]) ? $context["banco"] : $this->getContext($context, "banco")), "nombanco", array()), "html", null, true);
        echo "</strong></p>
                            <h4>Estado</h4>
                            <h4><i class=\"fa fa-check-square\"></i>";
        // line 19
        if (($this->getAttribute((isset($context["banco"]) ? $context["banco"] : $this->getContext($context, "banco")), "estadobanco", array()) == 1)) {
            echo " Activa ";
        } else {
            echo " Inactiva ";
        }
        echo "</h4>
                        </div>
                        <div class=\"col col-md-5\">

                            <img style=\"width:75%;margin-top: 10%;margin-bottom: 2%\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/delete.png"), "html", null, true);
        echo "\"></img>
                        </div>
                    </div>


                    <div class=\"modal-footer\">
                        <div style=\"float:right\">
                            ";
        // line 30
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("banco_delete", array("id" => $this->getAttribute((isset($context["banco"]) ? $context["banco"] : $this->getContext($context, "banco")), "idbanco", array()))), "Method" => "POST"));
        echo "
                            <input type=\"submit\" class=\"btn btn-danger\" type=\"button\" value=\"Eliminar\">
                            ";
        // line 32
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
        
        $__internal_fcc504960a8d7a667e5031168f349d0c702161f22bcee0fa085c290962201ef7->leave($__internal_fcc504960a8d7a667e5031168f349d0c702161f22bcee0fa085c290962201ef7_prof);

    }

    public function getTemplateName()
    {
        return "banco/Bancoshowdelete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 32,  68 => 30,  58 => 23,  47 => 19,  42 => 17,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div  class=\"modal fade\" id=\"showdeleteBanco{{ banco.idbanco }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" >
        <div class=\"modal-content\" style=\"border-radius: 40px\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h3 align=\"center\"><strong>¿Eliminar Banco?</strong></h3>
            </div>

            <div class=\"modal-body\">

                <div class=\"list-group\">
                    <!--modal-->
                    <div class=\"row\" style=\"margin-left:5%\" align=\"left\">
                        <div class=\"col col-md-7\">
                            <h4><i class=\"fa fa-font\"></i>Banco</h4>
                            <p class=\"form-group\"><strong>{{  banco.nombanco }}</strong></p>
                            <h4>Estado</h4>
                            <h4><i class=\"fa fa-check-square\"></i>{% if banco.estadobanco==1  %} Activa {% else %} Inactiva {% endif %}</h4>
                        </div>
                        <div class=\"col col-md-5\">

                            <img style=\"width:75%;margin-top: 10%;margin-bottom: 2%\" src=\"{{ asset('img/delete.png') }}\"></img>
                        </div>
                    </div>


                    <div class=\"modal-footer\">
                        <div style=\"float:right\">
                            {{ form_start(delete_form, {'action': path('banco_delete', {'id': banco.idbanco}), 'Method': 'POST' }) }}
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


", "banco/Bancoshowdelete.html.twig", "/home/ubuntu/workspace/app/Resources/views/banco/Bancoshowdelete.html.twig");
    }
}
