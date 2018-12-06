<?php

/* publicacioncontenido/contenidoshow.html.twig */
class __TwigTemplate_956b375f508fb61dfca51f34931470bdf09c83a2a8f506a13029f55f343545d6 extends Twig_Template
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
        $__internal_47369da326327cdbec91f3e966152bba7201f9e8316b22bb981aaf38039b49fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47369da326327cdbec91f3e966152bba7201f9e8316b22bb981aaf38039b49fc->enter($__internal_47369da326327cdbec91f3e966152bba7201f9e8316b22bb981aaf38039b49fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "publicacioncontenido/contenidoshow.html.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "publicacioncontenido/contenidoshow.html.twig", 1);
        // line 2
        echo "<div  class=\"modal fade\" id=\"showContenido";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicacioncontenido"]) ? $context["publicacioncontenido"] : $this->getContext($context, "publicacioncontenido")), "idcontenido", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicacioncontenido"]) ? $context["publicacioncontenido"] : $this->getContext($context, "publicacioncontenido")), "idcontenido", array()), "html", null, true);
        echo "</p>
               <h4>Titulo</h4>
               <p class=\"list-group-item\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicacioncontenido"]) ? $context["publicacioncontenido"] : $this->getContext($context, "publicacioncontenido")), "titulo", array()), "html", null, true);
        echo "</p>
               <h4>Subtitulo</h4>
               <p class=\"list-group-item\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicacioncontenido"]) ? $context["publicacioncontenido"] : $this->getContext($context, "publicacioncontenido")), "subtitulo", array()), "html", null, true);
        echo "</p>
               <h4>Descripcion</h4>
               <p class=\"list-group-item\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicacioncontenido"]) ? $context["publicacioncontenido"] : $this->getContext($context, "publicacioncontenido")), "descripcioncontenido", array()), "html", null, true);
        echo "</p>
               <h4>Fecha Contenido</h4>
               <p class=\"list-group-item\">";
        // line 25
        if ($this->getAttribute((isset($context["publicacioncontenido"]) ? $context["publicacioncontenido"] : $this->getContext($context, "publicacioncontenido")), "fechacontenido", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["publicacioncontenido"]) ? $context["publicacioncontenido"] : $this->getContext($context, "publicacioncontenido")), "fechacontenido", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</p>
               <h4>Estado</h4>
               <p class=\"list-group-item\">";
        // line 27
        if ($this->getAttribute((isset($context["publicacioncontenido"]) ? $context["publicacioncontenido"] : $this->getContext($context, "publicacioncontenido")), "estadocontenido", array())) {
            echo "Publicado";
        } else {
            echo "Pendiente";
        }
        echo "</p>
               <h4>Imagen Contenido</h4>
               ";
        // line 29
        $context["profile_picture_path"] = ("images/profile/" . $this->getAttribute((isset($context["publicacioncontenido"]) ? $context["publicacioncontenido"] : $this->getContext($context, "publicacioncontenido")), "ContenidoPicture", array()));
        // line 30
        echo "                ";
        echo $context["macro"]->getavatar((isset($context["profile_picture_path"]) ? $context["profile_picture_path"] : $this->getContext($context, "profile_picture_path")), $this->getAttribute((isset($context["publicacioncontenido"]) ? $context["publicacioncontenido"] : $this->getContext($context, "publicacioncontenido")), "ContenidoPicture", array()), "profile-user-img img-responsive img-circle");
        echo "
                
              </div>
             
            
  <div class=\"modal-footer\">
    <div style=\"float:left\">
      ";
        // line 37
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
         <input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
      ";
        // line 39
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
        
        $__internal_47369da326327cdbec91f3e966152bba7201f9e8316b22bb981aaf38039b49fc->leave($__internal_47369da326327cdbec91f3e966152bba7201f9e8316b22bb981aaf38039b49fc_prof);

    }

    public function getTemplateName()
    {
        return "publicacioncontenido/contenidoshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 39,  92 => 37,  81 => 30,  79 => 29,  70 => 27,  63 => 25,  58 => 23,  53 => 21,  48 => 19,  43 => 17,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}
<div  class=\"modal fade\" id=\"showContenido{{ publicacioncontenido.idcontenido }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
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
               <p class=\"list-group-item\">{{ publicacioncontenido.idcontenido }}</p>
               <h4>Titulo</h4>
               <p class=\"list-group-item\">{{ publicacioncontenido.titulo }}</p>
               <h4>Subtitulo</h4>
               <p class=\"list-group-item\">{{ publicacioncontenido.subtitulo }}</p>
               <h4>Descripcion</h4>
               <p class=\"list-group-item\">{{ publicacioncontenido.descripcioncontenido }}</p>
               <h4>Fecha Contenido</h4>
               <p class=\"list-group-item\">{% if publicacioncontenido.fechacontenido %}{{ publicacioncontenido.fechacontenido|date('Y-m-d H:i:s') }}{% endif %}</p>
               <h4>Estado</h4>
               <p class=\"list-group-item\">{% if publicacioncontenido.estadocontenido %}Publicado{% else %}Pendiente{% endif %}</p>
               <h4>Imagen Contenido</h4>
               {% set profile_picture_path = 'images/profile/'~ publicacioncontenido.ContenidoPicture %}
                {{ macro.avatar(profile_picture_path, publicacioncontenido.ContenidoPicture, 'profile-user-img img-responsive img-circle') }}
                
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
", "publicacioncontenido/contenidoshow.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\publicacioncontenido\\contenidoshow.html.twig");
    }
}
