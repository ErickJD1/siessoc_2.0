<?php

/* movimiento/Movimientoshow.html.twig */
class __TwigTemplate_90c8e928cfea3f8b8fd62e25073c09513aa819fc7f96f660ebf36404f79ee92b extends Twig_Template
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
        $__internal_894cfd08882daa91ba6975c8b81d84d61fa23df749ec6e88ad205ddc523b9c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894cfd08882daa91ba6975c8b81d84d61fa23df749ec6e88ad205ddc523b9c0a->enter($__internal_894cfd08882daa91ba6975c8b81d84d61fa23df749ec6e88ad205ddc523b9c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movimiento/Movimientoshow.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"VerMovi";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movimiento"]) ? $context["movimiento"] : $this->getContext($context, "movimiento")), "idmov", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\"  style=\"border-radius: 40px\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h3 align=\"center\"><strong>¿Eliminar Movimiento?</strong></h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

  <div class=\"list-group\">
    <!--modal-->

                <h4>ID</h4>
                <p class=\"list-group-item\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movimiento"]) ? $context["movimiento"] : $this->getContext($context, "movimiento")), "idmov", array()), "html", null, true);
        echo "</p>

                <h4>Descripcion Del Movimiento</h4>
                <p class=\"list-group-item\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movimiento"]) ? $context["movimiento"] : $this->getContext($context, "movimiento")), "descripcionmov", array()), "html", null, true);
        echo "</p>

                <h4>Monto</h4>
                <p class=\"list-group-item\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movimiento"]) ? $context["movimiento"] : $this->getContext($context, "movimiento")), "monto", array()), "html", null, true);
        echo "</p>

                <h4>Estado</h4>
                <p class=\"list-group-item\">";
        // line 24
        if ($this->getAttribute((isset($context["movimiento"]) ? $context["movimiento"] : $this->getContext($context, "movimiento")), "estadomov", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</p>

\t\t\t\t\t\t\t\t<h4>Tipo Cuenta</h4>
\t\t\t\t\t\t\t\t<p class=\"list-group-item\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movimiento"]) ? $context["movimiento"] : $this->getContext($context, "movimiento")), "idcuenta", array()), "html", null, true);
        echo "</p>

\t\t\t\t\t\t\t\t<h4>Tipo De Movimiento</h4>
\t\t\t\t\t\t\t\t<p class=\"list-group-item\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movimiento"]) ? $context["movimiento"] : $this->getContext($context, "movimiento")), "idtipomov", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t    <div style=\"float:left\">
\t\t\t\t\t\t    \t\t";
        // line 35
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t\t    \t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
\t\t\t\t\t\t    \t\t";
        // line 37
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Cerrar</button>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    </div>
";
        
        $__internal_894cfd08882daa91ba6975c8b81d84d61fa23df749ec6e88ad205ddc523b9c0a->leave($__internal_894cfd08882daa91ba6975c8b81d84d61fa23df749ec6e88ad205ddc523b9c0a_prof);

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
        return array (  87 => 37,  82 => 35,  74 => 30,  68 => 27,  58 => 24,  52 => 21,  46 => 18,  40 => 15,  22 => 1,);
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
\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\"  style=\"border-radius: 40px\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h3 align=\"center\"><strong>¿Eliminar Movimiento?</strong></h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

  <div class=\"list-group\">
    <!--modal-->

                <h4>ID</h4>
                <p class=\"list-group-item\">{{ movimiento.idmov }}</p>

                <h4>Descripcion Del Movimiento</h4>
                <p class=\"list-group-item\">{{ movimiento.descripcionmov }}</p>

                <h4>Monto</h4>
                <p class=\"list-group-item\">{{ movimiento.monto }}</p>

                <h4>Estado</h4>
                <p class=\"list-group-item\">{% if movimiento.estadomov %}Yes{% else %}No{% endif %}</p>

\t\t\t\t\t\t\t\t<h4>Tipo Cuenta</h4>
\t\t\t\t\t\t\t\t<p class=\"list-group-item\">{{ movimiento.idcuenta }}</p>

\t\t\t\t\t\t\t\t<h4>Tipo De Movimiento</h4>
\t\t\t\t\t\t\t\t<p class=\"list-group-item\">{{ movimiento.idtipomov }}</p>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t    <div style=\"float:left\">
\t\t\t\t\t\t    \t\t{{ form_start(delete_form) }}
\t\t\t\t\t\t    \t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
\t\t\t\t\t\t    \t\t{{ form_end(delete_form) }}
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Cerrar</button>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    </div>
", "movimiento/Movimientoshow.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\movimiento\\Movimientoshow.html.twig");
    }
}
