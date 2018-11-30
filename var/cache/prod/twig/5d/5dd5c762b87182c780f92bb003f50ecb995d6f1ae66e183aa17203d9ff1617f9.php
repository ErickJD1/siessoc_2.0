<?php

/* cuenta/Cuentashow.html.twig */
class __TwigTemplate_532a54a9b48a4cba87c1343804bb8c849ca629db1e577976898c0e0cd7c69c2c extends Twig_Template
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
        // line 1
        echo "<div class=\"modal fade\" id=\"VerCuenta";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : null), "idcuenta", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : null), "idcuenta", array()), "html", null, true);
        echo "</p>
    <h4>Numero De Cuenta</h4>
    <p class=\"list-group-item\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : null), "numcuenta", array()), "html", null, true);
        echo "</p>
    <h4>Nombre Cuenta</h4>
    <p class=\"list-group-item\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : null), "nomcuenta", array()), "html", null, true);
        echo "</p>
    <h4>Descripcion</h4>
    <p class=\"list-group-item\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : null), "descripcioncuenta", array()), "html", null, true);
        echo "</p>
    <h4>Fecha Creacion</h4>
    <p class=\"list-group-item\">";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : null), "fechaapertura", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</p>
    <h4>Saldo Inicial</h4>
    <p class=\"list-group-item\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : null), "saldocuenta", array()), "html", null, true);
        echo "</p>
    <h4>Estado</h4>
    <p class=\"list-group-item\">";
        // line 27
        if (($this->getAttribute((isset($context["cuenta"]) ? $context["cuenta"] : null), "estadocuenta", array()) == 1)) {
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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
    \t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
    \t\t";
        // line 34
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
    </div>
    <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Cerrar</button>
    </div>
    </div>
    </div>
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "cuenta/Cuentashow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 34,  79 => 32,  67 => 27,  62 => 25,  57 => 23,  52 => 21,  47 => 19,  42 => 17,  37 => 15,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "cuenta/Cuentashow.html.twig", "/home/ubuntu/workspace/app/Resources/views/cuenta/Cuentashow.html.twig");
    }
}
