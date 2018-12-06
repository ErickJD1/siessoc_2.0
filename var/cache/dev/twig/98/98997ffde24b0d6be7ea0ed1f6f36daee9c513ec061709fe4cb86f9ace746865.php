<?php

/* movimiento/Movimientoshow.html.twig */
class __TwigTemplate_856b2ff53078807d957a6a78c1352a42192f5cf72d1567f97793fe3f384bb8d8 extends Twig_Template
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
        $__internal_104f878594f57993002fad1d79f19dc6c50db01952e44e6740da32f7ad36eab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_104f878594f57993002fad1d79f19dc6c50db01952e44e6740da32f7ad36eab1->enter($__internal_104f878594f57993002fad1d79f19dc6c50db01952e44e6740da32f7ad36eab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movimiento/Movimientoshow.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"VerMovi";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movimiento"]) ? $context["movimiento"] : $this->getContext($context, "movimiento")), "idmov", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\"  style=\"border-radius: 40px\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h3 align=\"center\"><strong>¿Eliminar Movimiento De Fondos ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movimiento"]) ? $context["movimiento"] : $this->getContext($context, "movimiento")), "idmov", array()), "html", null, true);
        echo "?</strong></h3>
            </div>
            <div class=\"modal-body\">

                <div class=\"row\" style=\"margin-left:5%\" align=\"left\">
                    <!--modal-->
                    <div class=\"col col-md-6\">
                    <h4>Descripcion Del Movimiento</h4>
                    <p class=\"form-group\"><strong>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movimiento"]) ? $context["movimiento"] : $this->getContext($context, "movimiento")), "descripcionmov", array()), "html", null, true);
        echo "</strong></p>
                    <hr>
                    <h4>Monto</h4>
                    <p class=\"form-group\"><strong>";
        // line 18
        echo twig_escape_filter($this->env, ("\$" . $this->getAttribute((isset($context["movimiento"]) ? $context["movimiento"] : $this->getContext($context, "movimiento")), "monto", array())), "html", null, true);
        echo "</strong></p>
<hr>
                    <h4>Estado</h4>
                    <p class=\"form-group\"><strong>";
        // line 21
        if ($this->getAttribute((isset($context["movimiento"]) ? $context["movimiento"] : $this->getContext($context, "movimiento")), "estadomov", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</strong></p>
<hr>
                    <h4>Tipo Cuenta</h4>
                    <p class=\"form-group\"><strong>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movimiento"]) ? $context["movimiento"] : $this->getContext($context, "movimiento")), "idcuenta", array()), "html", null, true);
        echo "</strong></p>
<hr>
                    <h4>Tipo De Movimiento</h4>
                    <p class=\"form-group\"><strong>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movimiento"]) ? $context["movimiento"] : $this->getContext($context, "movimiento")), "idtipomov", array()), "html", null, true);
        echo "</strong></p>
                    </div>
                    <div class=\"col col-md-6\">
                        <img style=\"width:75%;margin-top: 10%;margin-bottom: 2%\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/delete.png"), "html", null, true);
        echo "\"></img>
                    </div>
                </div>

                <div class=\"modal-footer\" al>
                    <div style=\"float:right\">
                        ";
        // line 36
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                        <input type=\"submit\" class=\"btn btn-danger\" style=\"margin-left:1px\" value=\"Delete\">
                        ";
        // line 38
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
        
        $__internal_104f878594f57993002fad1d79f19dc6c50db01952e44e6740da32f7ad36eab1->leave($__internal_104f878594f57993002fad1d79f19dc6c50db01952e44e6740da32f7ad36eab1_prof);

    }

    public function getTemplateName()
    {
        return "movimiento/Movimientoshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 38,  86 => 36,  77 => 30,  71 => 27,  65 => 24,  55 => 21,  49 => 18,  43 => 15,  32 => 7,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"VerMovi{{  movimiento.idmov }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\"  style=\"border-radius: 40px\">

            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h3 align=\"center\"><strong>¿Eliminar Movimiento De Fondos {{ movimiento.idmov }}?</strong></h3>
            </div>
            <div class=\"modal-body\">

                <div class=\"row\" style=\"margin-left:5%\" align=\"left\">
                    <!--modal-->
                    <div class=\"col col-md-6\">
                    <h4>Descripcion Del Movimiento</h4>
                    <p class=\"form-group\"><strong>{{ movimiento.descripcionmov }}</strong></p>
                    <hr>
                    <h4>Monto</h4>
                    <p class=\"form-group\"><strong>{{ \"\$\"~movimiento.monto }}</strong></p>
<hr>
                    <h4>Estado</h4>
                    <p class=\"form-group\"><strong>{% if movimiento.estadomov %}Yes{% else %}No{% endif %}</strong></p>
<hr>
                    <h4>Tipo Cuenta</h4>
                    <p class=\"form-group\"><strong>{{ movimiento.idcuenta }}</strong></p>
<hr>
                    <h4>Tipo De Movimiento</h4>
                    <p class=\"form-group\"><strong>{{ movimiento.idtipomov }}</strong></p>
                    </div>
                    <div class=\"col col-md-6\">
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
", "movimiento/Movimientoshow.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\movimiento\\Movimientoshow.html.twig");
    }
}
