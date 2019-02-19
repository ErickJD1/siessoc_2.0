<?php

/* publicacioncontenido/contenidoshow.html.twig */
class __TwigTemplate_705cc689596800fa388c11151832fdb4812339eb7264a1647bb7a49d9f2f8544 extends Twig_Template
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
        $__internal_776580a0a66780c5528e2e6e8b42272bdd830067b145f9e756e2447e2b1c8cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_776580a0a66780c5528e2e6e8b42272bdd830067b145f9e756e2447e2b1c8cb9->enter($__internal_776580a0a66780c5528e2e6e8b42272bdd830067b145f9e756e2447e2b1c8cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "publicacioncontenido/contenidoshow.html.twig"));

        // line 1
        echo "<div  class=\"modal fade\" id=\"showContenido";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicacioncontenido"]) ? $context["publicacioncontenido"] : $this->getContext($context, "publicacioncontenido")), "idcontenido", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\" >
\t\t\t<div class=\"modal-content\" style=\"border-radius: 40px\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h3 align=\"center\"><strong>¿Eliminar Contenido?</strong></h3>
\t\t\t\t</div>
                            
\t\t\t\t<div class=\"modal-body\">

<div class=\"row\" style=\"margin-left:5%\" align=\"left\">
    <!--modal-->
               <div class=\"col col-md-6\">
               <h4>ID</h4>
               <p class=\"form-group\"><strong>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicacioncontenido"]) ? $context["publicacioncontenido"] : $this->getContext($context, "publicacioncontenido")), "idcontenido", array()), "html", null, true);
        echo "</strong></p>
               <h4>Titulo</h4>
               <p class=\"form-group\"><strong>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicacioncontenido"]) ? $context["publicacioncontenido"] : $this->getContext($context, "publicacioncontenido")), "titulo", array()), "html", null, true);
        echo "</strong></p>
               <h4>Subtitulo</h4>
               <p class=\"form-group\"><strong>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicacioncontenido"]) ? $context["publicacioncontenido"] : $this->getContext($context, "publicacioncontenido")), "subtitulo", array()), "html", null, true);
        echo "</strong></p>
               <h4>Descripcion</h4>
               <p class=\"form-group\"><strong>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicacioncontenido"]) ? $context["publicacioncontenido"] : $this->getContext($context, "publicacioncontenido")), "descripcioncontenido", array()), "html", null, true);
        echo "</strong></p>
               <h4>Fecha Contenido</h4>
               <p class=\"form-group\"><strong>";
        // line 24
        if ($this->getAttribute((isset($context["publicacioncontenido"]) ? $context["publicacioncontenido"] : $this->getContext($context, "publicacioncontenido")), "fechacontenido", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["publicacioncontenido"]) ? $context["publicacioncontenido"] : $this->getContext($context, "publicacioncontenido")), "fechacontenido", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</strong></p>
               <h4>Estado</h4>
               <p class=\"form-group\"><strong>";
        // line 26
        if (($this->getAttribute((isset($context["publicacioncontenido"]) ? $context["publicacioncontenido"] : $this->getContext($context, "publicacioncontenido")), "estadocontenido", array()) == 1)) {
            echo "Publicado";
        } else {
            echo "Pendiente";
        }
        echo "</strong></p>
               
             
              </div>
               <div class=\"col col-md-6\">
                
             <img style=\"width:75%;margin-top: 10%;margin-bottom: 2%\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/delete.png"), "html", null, true);
        echo "\"></img>
                    </div>
                </div>

                <div class=\"modal-footer\" al>
                    <div style=\"float:right\">
                        ";
        // line 38
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                        <input type=\"submit\" class=\"btn btn-danger\" style=\"margin-left:1px\" value=\"Delete\">
                        ";
        // line 40
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
        
        $__internal_776580a0a66780c5528e2e6e8b42272bdd830067b145f9e756e2447e2b1c8cb9->leave($__internal_776580a0a66780c5528e2e6e8b42272bdd830067b145f9e756e2447e2b1c8cb9_prof);

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
        return array (  95 => 40,  90 => 38,  81 => 32,  68 => 26,  61 => 24,  56 => 22,  51 => 20,  46 => 18,  41 => 16,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div  class=\"modal fade\" id=\"showContenido{{ publicacioncontenido.idcontenido }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\" >
\t\t\t<div class=\"modal-content\" style=\"border-radius: 40px\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h3 align=\"center\"><strong>¿Eliminar Contenido?</strong></h3>
\t\t\t\t</div>
                            
\t\t\t\t<div class=\"modal-body\">

<div class=\"row\" style=\"margin-left:5%\" align=\"left\">
    <!--modal-->
               <div class=\"col col-md-6\">
               <h4>ID</h4>
               <p class=\"form-group\"><strong>{{ publicacioncontenido.idcontenido }}</strong></p>
               <h4>Titulo</h4>
               <p class=\"form-group\"><strong>{{ publicacioncontenido.titulo }}</strong></p>
               <h4>Subtitulo</h4>
               <p class=\"form-group\"><strong>{{ publicacioncontenido.subtitulo }}</strong></p>
               <h4>Descripcion</h4>
               <p class=\"form-group\"><strong>{{ publicacioncontenido.descripcioncontenido }}</strong></p>
               <h4>Fecha Contenido</h4>
               <p class=\"form-group\"><strong>{% if publicacioncontenido.fechacontenido %}{{ publicacioncontenido.fechacontenido|date('Y-m-d H:i:s') }}{% endif %}</strong></p>
               <h4>Estado</h4>
               <p class=\"form-group\"><strong>{% if publicacioncontenido.estadocontenido==1 %}Publicado{% else %}Pendiente{% endif %}</strong></p>
               
             
              </div>
               <div class=\"col col-md-6\">
                
             <img style=\"width:75%;margin-top: 10%;margin-bottom: 2%\" src=\"{{ asset('img/delete.png') }}\"></img>
                    </div>
                </div>

                <div class=\"modal-footer\" al>
                    <div style=\"float:right\">
                        {{ form_start(delete_form) }}
                        <input type=\"submit\" class=\"btn btn-danger\" style=\"margin-left:1px\" value=\"Delete\">
                        {{ form_end(delete_form) }}
                    </div>
                    <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
", "publicacioncontenido/contenidoshow.html.twig", "/home/ubuntu/workspace/app/Resources/views/publicacioncontenido/contenidoshow.html.twig");
    }
}
