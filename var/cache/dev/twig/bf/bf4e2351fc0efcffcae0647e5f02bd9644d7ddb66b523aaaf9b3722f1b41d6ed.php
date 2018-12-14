<?php

/* actividad/Actividadshow.html.twig */
class __TwigTemplate_64f780575df8da914aaf0566004a0b93fd5f09c38952512ee3ad93647896c5ba extends Twig_Template
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
        $__internal_742bec2421ec4e11657d649be9f0c236cf00edda4a076ec5190a5cdcadfe80a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_742bec2421ec4e11657d649be9f0c236cf00edda4a076ec5190a5cdcadfe80a4->enter($__internal_742bec2421ec4e11657d649be9f0c236cf00edda4a076ec5190a5cdcadfe80a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actividad/Actividadshow.html.twig"));

        // line 1
        echo "<div  class=\"modal fade\" id=\"showBanco";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "idactividad", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "idactividad", array()), "html", null, true);
        echo "</p>
    <h4>Nombre de la Actividad</h4>
    <p class=\"list-group-item\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "nomactividad", array()), "html", null, true);
        echo "</p>
    <h4>Fecha De La Actividad</h4>
    <p class=\"list-group-item\">";
        // line 19
        if ($this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "fechaactividad", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "fechaactividad", array()), "Y-m-d"), "html", null, true);
        }
        echo "</p>
    <h4>Descripcions</h4>
    <p class=\"list-group-item\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "descripcionactividad", array()), "html", null, true);
        echo "</p>   
    <h4>Estado</h4>
    <p class=\"list-group-item\">";
        // line 23
        if ($this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "estadoactividad", array())) {
            echo "Concluido";
        } else {
            echo "Pendiente";
        }
        echo "</p>   
    <h4>Requerido</h4>
    <p class=\"list-group-item\">";
        // line 25
        if ($this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "requisito", array())) {
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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
         <input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
      ";
        // line 32
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
        
        $__internal_742bec2421ec4e11657d649be9f0c236cf00edda4a076ec5190a5cdcadfe80a4->leave($__internal_742bec2421ec4e11657d649be9f0c236cf00edda4a076ec5190a5cdcadfe80a4_prof);

    }

    public function getTemplateName()
    {
        return "actividad/Actividadshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 32,  83 => 30,  71 => 25,  62 => 23,  57 => 21,  50 => 19,  45 => 17,  40 => 15,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div  class=\"modal fade\" id=\"showBanco{{ actividad.idactividad }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
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
    <p class=\"list-group-item\">{{ actividad.idactividad }}</p>
    <h4>Nombre de la Actividad</h4>
    <p class=\"list-group-item\">{{ actividad.nomactividad }}</p>
    <h4>Fecha De La Actividad</h4>
    <p class=\"list-group-item\">{% if actividad.fechaactividad %}{{ actividad.fechaactividad|date('Y-m-d') }}{% endif %}</p>
    <h4>Descripcions</h4>
    <p class=\"list-group-item\">{{ actividad.descripcionactividad }}</p>   
    <h4>Estado</h4>
    <p class=\"list-group-item\">{% if actividad.estadoactividad %}Concluido{% else %}Pendiente{% endif %}</p>   
    <h4>Requerido</h4>
    <p class=\"list-group-item\">{% if actividad.requisito %}Obligatoria{% else %}Opcional{% endif %}</p> 
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
             
            ", "actividad/Actividadshow.html.twig", "/home/ubuntu/workspace/app/Resources/views/actividad/Actividadshow.html.twig");
    }
}
