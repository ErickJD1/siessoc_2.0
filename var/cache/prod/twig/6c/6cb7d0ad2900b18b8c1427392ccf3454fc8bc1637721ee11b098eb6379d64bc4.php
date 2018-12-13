<?php

/* :tipotransaccion:Tipotransaccionshow.html.twig */
class __TwigTemplate_153d834398943f67f3262b1ddbcc39be775e1c4cc2a0b70d69ead10d31e7b247 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"VerTransac";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipotransaccion"]) ? $context["tipotransaccion"] : null), "idtipotransaccion", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h4 align=\"Center\">Información Tipo Cuenta</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

  <div class=\"list-group\">
    <!--modal-->

    <div class=\"list-group\">
    <a href=\"#\" class=\"list-group-item\">ID</a>
    <p class=\"list-group-item\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipotransaccion"]) ? $context["tipotransaccion"] : null), "idtipotransaccion", array()), "html", null, true);
        echo "</p>

    <a href=\"#\" class=\"list-group-item\">Transaccion</a>
    <p class=\"list-group-item\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipotransaccion"]) ? $context["tipotransaccion"] : null), "nombretipotransac", array()), "html", null, true);
        echo "</p>

    <div class=\"list-group\">
    <a href=\"#\" class=\"list-group-item\">Estado</a>
    <p class=\"list-group-item\">";
        // line 23
        if ($this->getAttribute((isset($context["tipotransaccion"]) ? $context["tipotransaccion"] : null), "estadotipotransac", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</p>
    </div>
    </div>

                <div class=\"modal-footer\">
                <div style=\"float:left\">
                \t\t";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                \t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
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
        return ":tipotransaccion:Tipotransaccionshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 31,  64 => 29,  51 => 23,  44 => 19,  38 => 16,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":tipotransaccion:Tipotransaccionshow.html.twig", "/home/ubuntu/workspace/app/Resources/views/tipotransaccion/Tipotransaccionshow.html.twig");
    }
}
