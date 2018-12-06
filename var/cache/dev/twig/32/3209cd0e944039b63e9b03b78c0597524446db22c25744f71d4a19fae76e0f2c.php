<?php

/* programarpublicacion/publicacionshow.html.twig */
class __TwigTemplate_e89aec51f1f914c86bdbc14036ae1fd021bc4efb28e105931d4ec0a9cb8ea025 extends Twig_Template
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
        $__internal_3a908084c8344ec5c1f666800cf433769eefb3c402a96abf18f68dec62c21170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a908084c8344ec5c1f666800cf433769eefb3c402a96abf18f68dec62c21170->enter($__internal_3a908084c8344ec5c1f666800cf433769eefb3c402a96abf18f68dec62c21170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "programarpublicacion/publicacionshow.html.twig"));

        // line 1
        echo "<div  class=\"modal fade\" id=\"showPublicacion";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programarpublicacion"]) ? $context["programarpublicacion"] : $this->getContext($context, "programarpublicacion")), "idpublicacion", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programarpublicacion"]) ? $context["programarpublicacion"] : $this->getContext($context, "programarpublicacion")), "idpublicacion", array()), "html", null, true);
        echo "</p>
                <h4>Fecha Publicacion</h4>
                <p class=\"list-group-item\">";
        // line 17
        if ($this->getAttribute((isset($context["programarpublicacion"]) ? $context["programarpublicacion"] : $this->getContext($context, "programarpublicacion")), "fechapublicacion", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["programarpublicacion"]) ? $context["programarpublicacion"] : $this->getContext($context, "programarpublicacion")), "fechapublicacion", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</p>
                <h4>Hora Publicacion</h4>
                <p class=\"list-group-item\">";
        // line 19
        if ($this->getAttribute((isset($context["programarpublicacion"]) ? $context["programarpublicacion"] : $this->getContext($context, "programarpublicacion")), "horapublicacion", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["programarpublicacion"]) ? $context["programarpublicacion"] : $this->getContext($context, "programarpublicacion")), "horapublicacion", array()), "H:i:s"), "html", null, true);
        }
        echo "</p>
                <h4>Estado</h4>
                <p class=\"list-group-item\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programarpublicacion"]) ? $context["programarpublicacion"] : $this->getContext($context, "programarpublicacion")), "estadopulicacion", array()), "html", null, true);
        echo "</p>
                <h4>Contenido</h4>
                <p class=\"list-group-item\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programarpublicacion"]) ? $context["programarpublicacion"] : $this->getContext($context, "programarpublicacion")), "idcontenido", array()), "html", null, true);
        echo "</p>
  </div>
             
            
  <div class=\"modal-footer\">
    <div style=\"float:left\">
      ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
         <input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
      ";
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
        
        $__internal_3a908084c8344ec5c1f666800cf433769eefb3c402a96abf18f68dec62c21170->leave($__internal_3a908084c8344ec5c1f666800cf433769eefb3c402a96abf18f68dec62c21170_prof);

    }

    public function getTemplateName()
    {
        return "programarpublicacion/publicacionshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 31,  73 => 29,  64 => 23,  59 => 21,  52 => 19,  45 => 17,  40 => 15,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div  class=\"modal fade\" id=\"showPublicacion{{ programarpublicacion.idpublicacion }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
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
                <p class=\"list-group-item\">{{ programarpublicacion.idpublicacion }}</p>
                <h4>Fecha Publicacion</h4>
                <p class=\"list-group-item\">{% if programarpublicacion.fechapublicacion %}{{ programarpublicacion.fechapublicacion|date('Y-m-d H:i:s') }}{% endif %}</p>
                <h4>Hora Publicacion</h4>
                <p class=\"list-group-item\">{% if programarpublicacion.horapublicacion %}{{ programarpublicacion.horapublicacion|date('H:i:s') }}{% endif %}</p>
                <h4>Estado</h4>
                <p class=\"list-group-item\">{{ programarpublicacion.estadopulicacion }}</p>
                <h4>Contenido</h4>
                <p class=\"list-group-item\">{{ programarpublicacion.idcontenido }}</p>
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

", "programarpublicacion/publicacionshow.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\programarpublicacion\\publicacionshow.html.twig");
    }
}
