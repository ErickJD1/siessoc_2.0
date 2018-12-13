<?php

/* :programarpublicacion:publicacionshow.html.twig */
class __TwigTemplate_eb7a08734cc790f084f5cf0dc38347ec67129f75695816baf8ce060693179350 extends Twig_Template
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
        echo "<div  class=\"modal fade\" id=\"showPublicacion";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programarpublicacion"]) ? $context["programarpublicacion"] : null), "idpublicacion", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programarpublicacion"]) ? $context["programarpublicacion"] : null), "idpublicacion", array()), "html", null, true);
        echo "</p>
                <h4>Fecha Publicacion</h4>
                <p class=\"list-group-item\">";
        // line 17
        if ($this->getAttribute((isset($context["programarpublicacion"]) ? $context["programarpublicacion"] : null), "fechapublicacion", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["programarpublicacion"]) ? $context["programarpublicacion"] : null), "fechapublicacion", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</p>
                <h4>Hora Publicacion</h4>
                <p class=\"list-group-item\">";
        // line 19
        if ($this->getAttribute((isset($context["programarpublicacion"]) ? $context["programarpublicacion"] : null), "horapublicacion", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["programarpublicacion"]) ? $context["programarpublicacion"] : null), "horapublicacion", array()), "H:i:s"), "html", null, true);
        }
        echo "</p>
                <h4>Estado</h4>
                <p class=\"list-group-item\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programarpublicacion"]) ? $context["programarpublicacion"] : null), "estadopulicacion", array()), "html", null, true);
        echo "</p>
                <h4>Contenido</h4>
                <p class=\"list-group-item\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programarpublicacion"]) ? $context["programarpublicacion"] : null), "idcontenido", array()), "html", null, true);
        echo "</p>
  </div>
             
            
  <div class=\"modal-footer\">
    <div style=\"float:left\">
      ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
         <input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
      ";
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
        return ":programarpublicacion:publicacionshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 31,  70 => 29,  61 => 23,  56 => 21,  49 => 19,  42 => 17,  37 => 15,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":programarpublicacion:publicacionshow.html.twig", "/home/ubuntu/workspace/app/Resources/views/programarpublicacion/publicacionshow.html.twig");
    }
}
