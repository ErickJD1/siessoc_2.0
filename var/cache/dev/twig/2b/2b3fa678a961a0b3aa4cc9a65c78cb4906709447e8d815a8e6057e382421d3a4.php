<?php

/* :cuenta:Cuentashow.html.twig */
class __TwigTemplate_f72dc0964586912c42e456eb024206d3f8b9db3695fd0296b44bea8b6a45ada1 extends Twig_Template
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
        $__internal_f21405a69ab307e690ecd73f7f50a69fed3ac6bcd1f9aa86c8ddaf48ca70f5a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f21405a69ab307e690ecd73f7f50a69fed3ac6bcd1f9aa86c8ddaf48ca70f5a8->enter($__internal_f21405a69ab307e690ecd73f7f50a69fed3ac6bcd1f9aa86c8ddaf48ca70f5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cuenta:Cuentashow.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"VerCuenta";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : $this->getContext($context, "cuenta")), "idcuenta", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\" style=\"border-radius: 40px\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h3 align=\"center\"><strong>¿Eliminar Cuenta?</strong></h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

  <div class=\"row\" align=\"center\">
    <!--modal-->

    <h4>Numero Cuenta</h4>
    <p class=\"form-group\"><strong>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : $this->getContext($context, "cuenta")), "numcuenta", array()), "html", null, true);
        echo "</strong></p>
    <h4>Nombre Cuenta</h4>
    <p class=\"form-group\"><strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : $this->getContext($context, "cuenta")), "nomcuenta", array()), "html", null, true);
        echo "</strong></p>
    <h4>Estado</h4>
    <p class=\"form-group\"><strong>";
        // line 19
        if (($this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : $this->getContext($context, "cuenta")), "estadocuenta", array()) == 1)) {
            echo " Activa ";
        } else {
            echo " Inactiva ";
        }
        echo "</strong></p>
    </div>

    <div class=\"modal-footer\" al>
    <div style=\"float:right\">
    \t\t";
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
    \t\t<input type=\"submit\" class=\"btn btn-danger\" style=\"margin-left:1px\" value=\"Delete\">
    \t\t";
        // line 26
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
        
        $__internal_f21405a69ab307e690ecd73f7f50a69fed3ac6bcd1f9aa86c8ddaf48ca70f5a8->leave($__internal_f21405a69ab307e690ecd73f7f50a69fed3ac6bcd1f9aa86c8ddaf48ca70f5a8_prof);

    }

    public function getTemplateName()
    {
        return ":cuenta:Cuentashow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 26,  62 => 24,  50 => 19,  45 => 17,  40 => 15,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"VerCuenta{{ cuenta.idcuenta }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\" style=\"border-radius: 40px\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h3 align=\"center\"><strong>¿Eliminar Cuenta?</strong></h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

  <div class=\"row\" align=\"center\">
    <!--modal-->

    <h4>Numero Cuenta</h4>
    <p class=\"form-group\"><strong>{{  cuenta.numcuenta }}</strong></p>
    <h4>Nombre Cuenta</h4>
    <p class=\"form-group\"><strong>{{  cuenta.nomcuenta }}</strong></p>
    <h4>Estado</h4>
    <p class=\"form-group\"><strong>{% if cuenta.estadocuenta==1  %} Activa {% else %} Inactiva {% endif %}</strong></p>
    </div>

    <div class=\"modal-footer\" al>
    <div style=\"float:right\">
    \t\t{{ form_start(delete_form) }}
    \t\t<input type=\"submit\" class=\"btn btn-danger\" style=\"margin-left:1px\" value=\"Delete\">
    \t\t{{ form_end(delete_form) }}
    </div>
    <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Cerrar</button>
    </div>
    </div>
    </div>
    </div>
    </div>
", ":cuenta:Cuentashow.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/cuenta/Cuentashow.html.twig");
    }
}
