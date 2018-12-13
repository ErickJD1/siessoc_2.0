<?php

/* :colaboracionmonetaria:Colaboracionedit.html.twig */
class __TwigTemplate_a90ea9ce7eb707236a7a2d3ca7c0d223ccc0e0875859c439fc2e35e8a730945a extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"EditCola";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["colaboracionmonetaria"]) ? $context["colaboracionmonetaria"] : null), "idcolaboracion", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h4>Banco</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

\t\t\t\t<div class=\"list-group\">
\t\t\t\t<a herf=\"#\" class=\"\"list-group-item active\">
\t\t\t    <!--modal-->
\t\t\t\t</a>

        ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Colaboracionmonetaria_edit", array("id" => $this->getAttribute((isset($context["colaboracionmonetaria"]) ? $context["colaboracionmonetaria"] : null), "idcolaboracion", array()))), "Method" => "POST"));
        echo "

          ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'errors');
        echo "

          <div class=\"list-group\" align=\"left\">
           <div class=\"list-group-item\">
           <div class=\"form-group\">
             <label class=\"col-md-4 control-label\" for=\"textinput\">Descripcion</label>
                  ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "Descripcioncolaboracion", array()), 'errors');
        echo "
                  <div class=\"col-md-4\">
                  ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "Descripcioncolaboracion", array()), 'widget');
        echo "
                  </div>
                   </div>
           </div>

           <div class=\"list-group\" align=\"left\">
            <div class=\"list-group-item\">
            <div class=\"form-group\">
              <label class=\"col-md-4 control-label\" for=\"textinput\">Colaboracion \$</label>
                   ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "Montomescolaboracion", array()), 'errors');
        echo "
                   <div class=\"col-md-4\">
                   ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "Montomescolaboracion", array()), 'widget');
        echo "
                   </div>
                    </div>
            </div>

            <div class=\"list-group\" align=\"left\">
             <div class=\"list-group-item\">
             <div class=\"form-group\">
               <label class=\"col-md-4 control-label\" for=\"textinput\">Monto \$</label>
                    ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "Saldocolaboracion", array()), 'errors');
        echo "
                    <div class=\"col-md-4\">
                    ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "Saldocolaboracion", array()), 'widget');
        echo "
                    </div>
                     </div>
             </div>

             <div class=\"list-group\" align=\"left\">
              <div class=\"list-group-item\">
              <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"textinput\">Estado</label>
                     ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "Estadocolaboracion", array()), 'errors');
        echo "
                     <div class=\"col-md-4\">
                     ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "Estadocolaboracion", array()), 'widget');
        echo "
                     </div>
                      </div>
              </div>

            <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-success btn-sm\" data-dismiss=\"modal\">Cerrar</button>
            ";
        // line 66
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
        echo "
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            
";
    }

    public function getTemplateName()
    {
        return ":colaboracionmonetaria:Colaboracionedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 66,  108 => 59,  103 => 57,  91 => 48,  86 => 46,  74 => 37,  69 => 35,  57 => 26,  52 => 24,  43 => 18,  38 => 16,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":colaboracionmonetaria:Colaboracionedit.html.twig", "/home/ubuntu/workspace/app/Resources/views/colaboracionmonetaria/Colaboracionedit.html.twig");
    }
}
