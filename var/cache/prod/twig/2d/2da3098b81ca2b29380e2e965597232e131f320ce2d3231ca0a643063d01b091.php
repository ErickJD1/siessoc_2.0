<?php

/* :banco:Bancoshow.html.twig */
class __TwigTemplate_5d7ce28062b8adb08ac9cbf295b6f40d369716306a998ea800eaa23f0c0d55fc extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["banco"]) ? $context["banco"] : null), "idbanco", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["banco"]) ? $context["banco"] : null), "idbanco", array()), "html", null, true);
        echo "</p>
    <h4>Banco</h4>
    <p class=\"list-group-item\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["banco"]) ? $context["banco"] : null), "nombanco", array()), "html", null, true);
        echo "</p>
    <h4>Estado</h4>
    <p class=\"list-group-item\">";
        // line 19
        if (($this->getAttribute((isset($context["banco"]) ? $context["banco"] : null), "estadobanco", array()) == 1)) {
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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
         <input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
      ";
        // line 26
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
        return ":banco:Bancoshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 26,  59 => 24,  47 => 19,  42 => 17,  37 => 15,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":banco:Bancoshow.html.twig", "/home/ubuntu/workspace/app/Resources/views/banco/Bancoshow.html.twig");
    }
}
