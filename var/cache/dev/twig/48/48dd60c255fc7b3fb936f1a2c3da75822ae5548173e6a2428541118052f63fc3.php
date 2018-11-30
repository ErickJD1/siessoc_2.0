<?php

/* :cuenta:Cuentashow.html.twig */
class __TwigTemplate_9b1ca0bb49019cca212713e32d5800c9f46bcd104a3d07188522866628d8e043 extends Twig_Template
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
        $__internal_0d5cf44bf19372ad5b40aa163d83f628f2e4c6444dfae16d58257c978eedbff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d5cf44bf19372ad5b40aa163d83f628f2e4c6444dfae16d58257c978eedbff0->enter($__internal_0d5cf44bf19372ad5b40aa163d83f628f2e4c6444dfae16d58257c978eedbff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cuenta:Cuentashow.html.twig"));

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

  <div class=\"list-group\">
    <!--modal-->

    <h4>ID</h4>
    <p class=\"list-group-item\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : $this->getContext($context, "cuenta")), "idcuenta", array()), "html", null, true);
        echo "</p>
    <h4>Numero De Cuenta</h4>
    <p class=\"list-group-item\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : $this->getContext($context, "cuenta")), "numcuenta", array()), "html", null, true);
        echo "</p>
    <h4>Nombre Cuenta</h4>
    <p class=\"list-group-item\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : $this->getContext($context, "cuenta")), "nomcuenta", array()), "html", null, true);
        echo "</p>
    <h4>Descripcion</h4>
    <p class=\"list-group-item\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : $this->getContext($context, "cuenta")), "descripcioncuenta", array()), "html", null, true);
        echo "</p>
    <h4>Fecha Creacion</h4>
    <p class=\"list-group-item\">";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : $this->getContext($context, "cuenta")), "fechaapertura", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</p>
    <h4>Saldo Inicial</h4>
    <p class=\"list-group-item\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : $this->getContext($context, "cuenta")), "saldocuenta", array()), "html", null, true);
        echo "</p>
    <h4>Estado</h4>
    <p class=\"list-group-item\">";
        // line 27
        if (($this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : $this->getContext($context, "cuenta")), "estadocuenta", array()) == 1)) {
            echo " Activa ";
        } else {
            echo " Inactiva ";
        }
        echo "</p>
    </div>

    <div class=\"modal-footer\">
    <div style=\"float:left\">
    \t\t";
        // line 32
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
    \t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
    \t\t";
        // line 34
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
        
        $__internal_0d5cf44bf19372ad5b40aa163d83f628f2e4c6444dfae16d58257c978eedbff0->leave($__internal_0d5cf44bf19372ad5b40aa163d83f628f2e4c6444dfae16d58257c978eedbff0_prof);

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
        return array (  87 => 34,  82 => 32,  70 => 27,  65 => 25,  60 => 23,  55 => 21,  50 => 19,  45 => 17,  40 => 15,  22 => 1,);
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

  <div class=\"list-group\">
    <!--modal-->

    <h4>ID</h4>
    <p class=\"list-group-item\">{{  cuenta.idcuenta }}</p>
    <h4>Numero De Cuenta</h4>
    <p class=\"list-group-item\">{{  cuenta.numcuenta }}</p>
    <h4>Nombre Cuenta</h4>
    <p class=\"list-group-item\">{{  cuenta.nomcuenta }}</p>
    <h4>Descripcion</h4>
    <p class=\"list-group-item\">{{  cuenta.descripcioncuenta }}</p>
    <h4>Fecha Creacion</h4>
    <p class=\"list-group-item\">{{  cuenta.fechaapertura|date('Y-m-d H:i:s') }}</p>
    <h4>Saldo Inicial</h4>
    <p class=\"list-group-item\">{{  cuenta.saldocuenta }}</p>
    <h4>Estado</h4>
    <p class=\"list-group-item\">{% if cuenta.estadocuenta==1  %} Activa {% else %} Inactiva {% endif %}</p>
    </div>

    <div class=\"modal-footer\">
    <div style=\"float:left\">
    \t\t{{ form_start(delete_form) }}
    \t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
    \t\t{{ form_end(delete_form) }}
    </div>
    <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Cerrar</button>
    </div>
    </div>
    </div>
    </div>
    </div>
", ":cuenta:Cuentashow.html.twig", "/home/ubuntu/workspace/app/Resources/views/cuenta/Cuentashow.html.twig");
    }
}
