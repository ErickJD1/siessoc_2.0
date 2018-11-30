<?php

/* tipocuenta/TipoCuentashow.html.twig */
class __TwigTemplate_82b9e9d42b00ccdb55fc0973df2e02a528a99226f74fdd8f41b02383d7f73e8b extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"miventana";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : null), "idtipocuenta", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\" style=\"border-radius: 40px\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h3 align=\"center\"><strong>¿Elimina Tipo Cuenta?</strong></h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

  <div class=\"list-group\">
    <!--modal-->

<div class=\"list-group\">
<a href=\"#\" class=\"list-group-item\">ID</a>
<p class=\"list-group-item\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : null), "idtipocuenta", array()), "html", null, true);
        echo "</p>
<a href=\"#\" class=\"list-group-item\">Tipo Cuenta</a>
<p class=\"list-group-item\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : null), "Nombrecuenta", array()), "html", null, true);
        echo "</p>
<a href=\"#\" class=\"list-group-item\">Descripcion</a>
<p class=\"list-group-item\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : null), "descripcion", array()), "html", null, true);
        echo "</p>
<a href=\"#\" class=\"list-group-item\">Estado</a>
<p class=\"list-group-item\">";
        // line 22
        if (($this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : null), "estadotipocuenta", array()) == 1)) {
            echo " Activa ";
        } else {
            echo " Inactiva ";
        }
        echo "</p>
</div>
</div>


<div class=\"modal-footer\">
<div style=\"float:left\">
\t\t";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tipocuenta_delete", array("id" => $this->getAttribute((isset($context["tipocuenta"]) ? $context["tipocuenta"] : null), "idtipocuenta", array()))), "Method" => "POST"));
        echo "
\t\t<input type=\"submit\" class=\"btn btn-danger\" type=\"button\" value=\"Delete\">
\t\t";
        // line 31
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
        return "tipocuenta/TipoCuentashow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 31,  67 => 29,  53 => 22,  48 => 20,  43 => 18,  38 => 16,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tipocuenta/TipoCuentashow.html.twig", "/home/ubuntu/workspace/app/Resources/views/tipocuenta/TipoCuentashow.html.twig");
    }
}
