<?php

/* :tipotransaccion:Tipotransaccionshow.html.twig */
class __TwigTemplate_7004f610cb57232a96e8938006bf788365eb8804dec4f5f97f53b52eef7cd23b extends Twig_Template
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
        $__internal_f0be710f0bf1fe2d84540d6c7b26f14a218c591ab732490f8cedc22d487d1d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0be710f0bf1fe2d84540d6c7b26f14a218c591ab732490f8cedc22d487d1d74->enter($__internal_f0be710f0bf1fe2d84540d6c7b26f14a218c591ab732490f8cedc22d487d1d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipotransaccion:Tipotransaccionshow.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"VerTransac";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipotransaccion"]) ? $context["tipotransaccion"] : $this->getContext($context, "tipotransaccion")), "idtipotransaccion", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipotransaccion"]) ? $context["tipotransaccion"] : $this->getContext($context, "tipotransaccion")), "idtipotransaccion", array()), "html", null, true);
        echo "</p>

    <a href=\"#\" class=\"list-group-item\">Transaccion</a>
    <p class=\"list-group-item\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipotransaccion"]) ? $context["tipotransaccion"] : $this->getContext($context, "tipotransaccion")), "nombretipotransac", array()), "html", null, true);
        echo "</p>

    <div class=\"list-group\">
    <a href=\"#\" class=\"list-group-item\">Estado</a>
    <p class=\"list-group-item\">";
        // line 23
        if ($this->getAttribute((isset($context["tipotransaccion"]) ? $context["tipotransaccion"] : $this->getContext($context, "tipotransaccion")), "estadotipotransac", array())) {
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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                \t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
                \t\t";
        // line 31
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
        
        $__internal_f0be710f0bf1fe2d84540d6c7b26f14a218c591ab732490f8cedc22d487d1d74->leave($__internal_f0be710f0bf1fe2d84540d6c7b26f14a218c591ab732490f8cedc22d487d1d74_prof);

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
        return array (  72 => 31,  67 => 29,  54 => 23,  47 => 19,  41 => 16,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"VerTransac{{ tipotransaccion.idtipotransaccion }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
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
    <p class=\"list-group-item\">{{  tipotransaccion.idtipotransaccion }}</p>

    <a href=\"#\" class=\"list-group-item\">Transaccion</a>
    <p class=\"list-group-item\">{{  tipotransaccion.nombretipotransac }}</p>

    <div class=\"list-group\">
    <a href=\"#\" class=\"list-group-item\">Estado</a>
    <p class=\"list-group-item\">{% if tipotransaccion.estadotipotransac %}Yes{% else %}No{% endif %}</p>
    </div>
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
", ":tipotransaccion:Tipotransaccionshow.html.twig", "/home/ubuntu/workspace/app/Resources/views/tipotransaccion/Tipotransaccionshow.html.twig");
    }
}
