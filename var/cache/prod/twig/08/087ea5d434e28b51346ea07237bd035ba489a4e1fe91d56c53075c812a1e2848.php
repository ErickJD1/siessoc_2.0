<?php

/* :actividad:Actividadshow.html.twig */
class __TwigTemplate_e0df84f7ff406b18ba185e3c2ca95745ae15a1d63f6eeebfc274c84f9101f828 extends Twig_Template
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
        echo "<div  class=\"modal fade\" id=\"showBanco";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : null), "idactividad", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\" >
\t\t\t<div class=\"modal-content\" style=\"border-radius: 40px\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h3 align=\"center\"><strong>¿Eliminar Actividad?</strong></h3>
\t\t\t\t</div>
                            
\t\t\t\t<div class=\"modal-body\">

  <div class=\"list-group\">
    <!--modal-->
    <h4>ID</h4>
    <p class=\"list-group-item\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : null), "idactividad", array()), "html", null, true);
        echo "</p>
    <h4>Nombre de la Actividad</h4>
    <p class=\"list-group-item\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : null), "nomactividad", array()), "html", null, true);
        echo "</p>
    <h4>Fecha De La Actividad</h4>
    <p class=\"list-group-item\">";
        // line 19
        if ($this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : null), "fechaactividad", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : null), "fechaactividad", array()), "Y-m-d"), "html", null, true);
        }
        echo "</p>
    <h4>Descripcions</h4>
    <p class=\"list-group-item\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : null), "descripcionactividad", array()), "html", null, true);
        echo "</p>   
    <h4>Estado</h4>
    <p class=\"list-group-item\">";
        // line 23
        if ($this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : null), "estadoactividad", array())) {
            echo "Concluido";
        } else {
            echo "Pendiente";
        }
        echo "</p>   
    <h4>Requerido</h4>
    <p class=\"list-group-item\">";
        // line 25
        if ($this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : null), "requisito", array())) {
            echo "Obligatoria";
        } else {
            echo "Opcional";
        }
        echo "</p> 
       </div>

    <div class=\"modal-footer\">
    <div style=\"float:left\">
      ";
        // line 30
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
         <input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
      ";
        // line 32
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
        return ":actividad:Actividadshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 32,  80 => 30,  68 => 25,  59 => 23,  54 => 21,  47 => 19,  42 => 17,  37 => 15,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":actividad:Actividadshow.html.twig", "/home/ubuntu/workspace/app/Resources/views/actividad/Actividadshow.html.twig");
    }
}
