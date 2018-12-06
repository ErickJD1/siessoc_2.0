<?php

/* :banco:Bancoshow.html.twig */
class __TwigTemplate_cd8520e5e486884525e89f5e3c8fe10cdeb23ceaa4b16f5aa00bb3760b894b82 extends Twig_Template
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
        $__internal_f10a95fd67eecc7e42a55d4b5499a38d1cb68847f1ca217075b2bcfa4a4e9c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f10a95fd67eecc7e42a55d4b5499a38d1cb68847f1ca217075b2bcfa4a4e9c8d->enter($__internal_f10a95fd67eecc7e42a55d4b5499a38d1cb68847f1ca217075b2bcfa4a4e9c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":banco:Bancoshow.html.twig"));

        // line 1
        echo "<div  class=\"modal fade\" id=\"showBanco";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["banco"]) ? $context["banco"] : $this->getContext($context, "banco")), "idbanco", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\" >
\t\t\t<div class=\"modal-content\" style=\"border-radius: 40px\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h3 align=\"center\"><strong>¿Eliminar Banco?</strong></h3>
\t\t\t\t</div>
                            
\t\t\t\t<div class=\"modal-body\">

  <div class=\"list-group\">
    <!--modal-->
    <h4>ID</h4>
    <p class=\"list-group-item\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["banco"]) ? $context["banco"] : $this->getContext($context, "banco")), "idbanco", array()), "html", null, true);
        echo "</p>
    <h4>Banco</h4>
    <p class=\"list-group-item\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["banco"]) ? $context["banco"] : $this->getContext($context, "banco")), "nombanco", array()), "html", null, true);
        echo "</p>
    <h4>Estado</h4>
    <p class=\"list-group-item\">";
        // line 19
        if (($this->getAttribute((isset($context["banco"]) ? $context["banco"] : $this->getContext($context, "banco")), "estadobanco", array()) == 1)) {
            echo " Activa ";
        } else {
            echo " Inactiva ";
        }
        echo "</p>
    </div>

    <div class=\"modal-footer\">
    <div style=\"float:left\">
      ";
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
         <input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
      ";
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
        
        $__internal_f10a95fd67eecc7e42a55d4b5499a38d1cb68847f1ca217075b2bcfa4a4e9c8d->leave($__internal_f10a95fd67eecc7e42a55d4b5499a38d1cb68847f1ca217075b2bcfa4a4e9c8d_prof);

    }

    public function getTemplateName()
    {
        return ":banco:Bancoshow.html.twig";
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
        return new Twig_Source("<div  class=\"modal fade\" id=\"showBanco{{ banco.idbanco }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\" >
\t\t\t<div class=\"modal-content\" style=\"border-radius: 40px\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h3 align=\"center\"><strong>¿Eliminar Banco?</strong></h3>
\t\t\t\t</div>
                            
\t\t\t\t<div class=\"modal-body\">

  <div class=\"list-group\">
    <!--modal-->
    <h4>ID</h4>
    <p class=\"list-group-item\">{{ banco.idbanco }}</p>
    <h4>Banco</h4>
    <p class=\"list-group-item\">{{  banco.nombanco }}</p>
    <h4>Estado</h4>
    <p class=\"list-group-item\">{% if banco.estadobanco==1  %} Activa {% else %} Inactiva {% endif %}</p>
    </div>

    <div class=\"modal-footer\">
    <div style=\"float:left\">
      {{ form_start(delete_form) }}
         <input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
      {{ form_end(delete_form) }}
      </div>
      <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Cerrar</button>
      </div>
      </div>
      </div>
      </div>
      </div>
", ":banco:Bancoshow.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/banco/Bancoshow.html.twig");
    }
}
