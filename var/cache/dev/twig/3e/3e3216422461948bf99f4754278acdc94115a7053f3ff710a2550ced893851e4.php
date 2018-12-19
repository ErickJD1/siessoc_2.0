<?php

/* cuenta/Cuentashowdelete.html.twig */
class __TwigTemplate_52a843bea3b4e8b0310249475343cf88f30d74d750a5d349a555acee1c0580dd extends Twig_Template
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
        $__internal_86faeb5357bbce258686a4ad5d3978348b94e742bc7d6dc9e6e2350cdaa6498e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86faeb5357bbce258686a4ad5d3978348b94e742bc7d6dc9e6e2350cdaa6498e->enter($__internal_86faeb5357bbce258686a4ad5d3978348b94e742bc7d6dc9e6e2350cdaa6498e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cuenta/Cuentashowdelete.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"deleteCuenta";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : $this->getContext($context, "cuenta")), "idcuenta", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div style=\"width:70%;margin-left: 15%\" class=\"modal-dialog\">
        <div class=\"modal-content\" style=\"border-radius: 40px\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h3 align=\"center\"><strong>¿Eliminar Cuenta?</strong></h3>
            </div>
            <div class=\"modal-body\">

                <div class=\"row\" style=\"margin-left:5%\" align=\"left\">
                    <!--modal-->
                    <div class=\"col col-md-7\">

                        <hr>
                        <h4><i class=\"fa fa-list-ol\"></i>  No Cuenta</h4>
                        <p class=\"form-group\"><strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : $this->getContext($context, "cuenta")), "numcuenta", array()), "html", null, true);
        echo "</strong></p>
                        <hr>
                        <h4><i class=\"fa fa-calculator\"></i>  Cuenta</h4>
                        <p class=\"form-group\"><strong>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : $this->getContext($context, "cuenta")), "nomcuenta", array()), "html", null, true);
        echo "</strong></p>
                        <hr>
                        <h4><i class=\"fa fa-money\"></i>  Saldo Inicial</h4>
                        <p class=\"form-group\"><strong>";
        // line 23
        echo twig_escape_filter($this->env, ("\$" . $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : $this->getContext($context, "cuenta")), "saldocuenta", array())), "html", null, true);
        echo "</strong></p>
                        <hr>
                        <h4><i class=\"fa fa-home\"></i>  Banco</h4>
                        <p class=\"form-group\"><strong>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : $this->getContext($context, "cuenta")), "idbanco", array()), "html", null, true);
        echo "</strong></p>
                        <hr>
                        <h4><i class=\"fa fa-check-square\"></i>  Estado</h4>
                        <p class=\"form-group\"><strong>";
        // line 29
        if (($this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : $this->getContext($context, "cuenta")), "estadocuenta", array()) == 1)) {
            echo " Activa ";
        } else {
            echo " Inactiva ";
        }
        echo "</strong></p>
                    </div>
                    <div class=\"col col-md-5\">

                        <img style=\"width:75%;margin-top: 10%;margin-bottom: 2%\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/delete.png"), "html", null, true);
        echo "\"></img>
                    </div>
                </div>

                <div class=\"modal-footer\" al>
                    <div style=\"float:right\">
                        ";
        // line 39
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                        <input type=\"submit\" class=\"btn btn-danger\" style=\"margin-left:1px\" value=\"Delete\">
                        ";
        // line 41
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                    </div>
                    <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_86faeb5357bbce258686a4ad5d3978348b94e742bc7d6dc9e6e2350cdaa6498e->leave($__internal_86faeb5357bbce258686a4ad5d3978348b94e742bc7d6dc9e6e2350cdaa6498e_prof);

    }

    public function getTemplateName()
    {
        return "cuenta/Cuentashowdelete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 41,  86 => 39,  77 => 33,  66 => 29,  60 => 26,  54 => 23,  48 => 20,  42 => 17,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"deleteCuenta{{ cuenta.idcuenta }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div style=\"width:70%;margin-left: 15%\" class=\"modal-dialog\">
        <div class=\"modal-content\" style=\"border-radius: 40px\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h3 align=\"center\"><strong>¿Eliminar Cuenta?</strong></h3>
            </div>
            <div class=\"modal-body\">

                <div class=\"row\" style=\"margin-left:5%\" align=\"left\">
                    <!--modal-->
                    <div class=\"col col-md-7\">

                        <hr>
                        <h4><i class=\"fa fa-list-ol\"></i>  No Cuenta</h4>
                        <p class=\"form-group\"><strong>{{ cuenta.numcuenta }}</strong></p>
                        <hr>
                        <h4><i class=\"fa fa-calculator\"></i>  Cuenta</h4>
                        <p class=\"form-group\"><strong>{{  cuenta.nomcuenta }}</strong></p>
                        <hr>
                        <h4><i class=\"fa fa-money\"></i>  Saldo Inicial</h4>
                        <p class=\"form-group\"><strong>{{ \"\$\"~cuenta.saldocuenta }}</strong></p>
                        <hr>
                        <h4><i class=\"fa fa-home\"></i>  Banco</h4>
                        <p class=\"form-group\"><strong>{{  cuenta.idbanco }}</strong></p>
                        <hr>
                        <h4><i class=\"fa fa-check-square\"></i>  Estado</h4>
                        <p class=\"form-group\"><strong>{% if cuenta.estadocuenta==1  %} Activa {% else %} Inactiva {% endif %}</strong></p>
                    </div>
                    <div class=\"col col-md-5\">

                        <img style=\"width:75%;margin-top: 10%;margin-bottom: 2%\" src=\"{{ asset('img/delete.png') }}\"></img>
                    </div>
                </div>

                <div class=\"modal-footer\" al>
                    <div style=\"float:right\">
                        {{ form_start(delete_form) }}
                        <input type=\"submit\" class=\"btn btn-danger\" style=\"margin-left:1px\" value=\"Delete\">
                        {{ form_end(delete_form) }}
                    </div>
                    <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
", "cuenta/Cuentashowdelete.html.twig", "/home/ubuntu/workspace/app/Resources/views/cuenta/Cuentashowdelete.html.twig");
    }
}
