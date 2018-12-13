<?php

/* :publicacioncontenido:contenidoshow.html.twig */
class __TwigTemplate_6c54ac32474eb502dd50392193f9d22f6ce7e1396acf7c62f820965dcfe7a94e extends Twig_Template
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
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", ":publicacioncontenido:contenidoshow.html.twig", 1);
        // line 2
        echo "<div  class=\"modal fade\" id=\"showContenido";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicacioncontenido"]) ? $context["publicacioncontenido"] : null), "idcontenido", array()), "html", null, true);
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
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicacioncontenido"]) ? $context["publicacioncontenido"] : null), "idcontenido", array()), "html", null, true);
        echo "</p>
               <h4>Titulo</h4>
               <p class=\"list-group-item\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicacioncontenido"]) ? $context["publicacioncontenido"] : null), "titulo", array()), "html", null, true);
        echo "</p>
               <h4>Subtitulo</h4>
               <p class=\"list-group-item\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicacioncontenido"]) ? $context["publicacioncontenido"] : null), "subtitulo", array()), "html", null, true);
        echo "</p>
               <h4>Descripcion</h4>
               <p class=\"list-group-item\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicacioncontenido"]) ? $context["publicacioncontenido"] : null), "descripcioncontenido", array()), "html", null, true);
        echo "</p>
               <h4>Fecha Contenido</h4>
               <p class=\"list-group-item\">";
        // line 25
        if ($this->getAttribute((isset($context["publicacioncontenido"]) ? $context["publicacioncontenido"] : null), "fechacontenido", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["publicacioncontenido"]) ? $context["publicacioncontenido"] : null), "fechacontenido", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</p>
               <h4>Estado</h4>
               <p class=\"list-group-item\">";
        // line 27
        if ($this->getAttribute((isset($context["publicacioncontenido"]) ? $context["publicacioncontenido"] : null), "estadocontenido", array())) {
            echo "Publicado";
        } else {
            echo "Pendiente";
        }
        echo "</p>
               <h4>Imagen Contenido</h4>
               ";
        // line 29
        $context["profile_picture_path"] = ("images/profile/" . $this->getAttribute((isset($context["publicacioncontenido"]) ? $context["publicacioncontenido"] : null), "ContenidoPicture", array()));
        // line 30
        echo "                ";
        echo $context["macro"]->getavatar((isset($context["profile_picture_path"]) ? $context["profile_picture_path"] : null), $this->getAttribute((isset($context["publicacioncontenido"]) ? $context["publicacioncontenido"] : null), "ContenidoPicture", array()), "profile-user-img img-responsive img-circle");
        echo "
                
              </div>
             
            
  <div class=\"modal-footer\">
    <div style=\"float:left\">
      ";
        // line 37
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
         <input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
      ";
        // line 39
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
        return ":publicacioncontenido:contenidoshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 39,  89 => 37,  78 => 30,  76 => 29,  67 => 27,  60 => 25,  55 => 23,  50 => 21,  45 => 19,  40 => 17,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":publicacioncontenido:contenidoshow.html.twig", "/home/ubuntu/workspace/app/Resources/views/publicacioncontenido/contenidoshow.html.twig");
    }
}
