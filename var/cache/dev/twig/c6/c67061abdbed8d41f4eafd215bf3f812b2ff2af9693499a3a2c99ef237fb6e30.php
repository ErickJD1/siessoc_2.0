<?php

/* :colaboracionmonetaria:Colaboracionedit.html.twig */
class __TwigTemplate_57651222fa68ea5b5e55936c349b5255b1b60958972069ce8e2413acd398fc64 extends Twig_Template
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
        $__internal_df1bfafd37d284dbdd33fe16bdb11998b74f23e96ec60a367f32d50fd86184c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df1bfafd37d284dbdd33fe16bdb11998b74f23e96ec60a367f32d50fd86184c8->enter($__internal_df1bfafd37d284dbdd33fe16bdb11998b74f23e96ec60a367f32d50fd86184c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":colaboracionmonetaria:Colaboracionedit.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"EditCola";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["colaboracionmonetaria"]) ? $context["colaboracionmonetaria"] : $this->getContext($context, "colaboracionmonetaria")), "idcolaboracion", array()), "html", null, true);
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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Colaboracionmonetaria_edit", array("id" => $this->getAttribute((isset($context["colaboracionmonetaria"]) ? $context["colaboracionmonetaria"] : $this->getContext($context, "colaboracionmonetaria")), "idcolaboracion", array()))), "Method" => "POST"));
        echo "

          ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "

          <div class=\"list-group\" align=\"left\">
           <div class=\"list-group-item\">
           <div class=\"form-group\">
             <label class=\"col-md-4 control-label\" for=\"textinput\">Descripcion</label>
                  ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "Descripcioncolaboracion", array()), 'errors');
        echo "
                  <div class=\"col-md-4\">
                  ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "Descripcioncolaboracion", array()), 'widget');
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "Montomescolaboracion", array()), 'errors');
        echo "
                   <div class=\"col-md-4\">
                   ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "Montomescolaboracion", array()), 'widget');
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "Saldocolaboracion", array()), 'errors');
        echo "
                    <div class=\"col-md-4\">
                    ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "Saldocolaboracion", array()), 'widget');
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "Estadocolaboracion", array()), 'errors');
        echo "
                     <div class=\"col-md-4\">
                     ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "Estadocolaboracion", array()), 'widget');
        echo "
                     </div>
                      </div>
              </div>

            <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-success btn-sm\" data-dismiss=\"modal\">Cerrar</button>
            ";
        // line 66
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
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
        
        $__internal_df1bfafd37d284dbdd33fe16bdb11998b74f23e96ec60a367f32d50fd86184c8->leave($__internal_df1bfafd37d284dbdd33fe16bdb11998b74f23e96ec60a367f32d50fd86184c8_prof);

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
        return array (  121 => 66,  111 => 59,  106 => 57,  94 => 48,  89 => 46,  77 => 37,  72 => 35,  60 => 26,  55 => 24,  46 => 18,  41 => 16,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"EditCola{{ colaboracionmonetaria.idcolaboracion }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
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

        {{ form_start(edit_form, {'action': path('Colaboracionmonetaria_edit', {'id': colaboracionmonetaria.idcolaboracion}), 'Method': 'POST' }) }}

          {{ form_errors(edit_form) }}

          <div class=\"list-group\" align=\"left\">
           <div class=\"list-group-item\">
           <div class=\"form-group\">
             <label class=\"col-md-4 control-label\" for=\"textinput\">Descripcion</label>
                  {{ form_errors(edit_form.Descripcioncolaboracion) }}
                  <div class=\"col-md-4\">
                  {{ form_widget(edit_form.Descripcioncolaboracion) }}
                  </div>
                   </div>
           </div>

           <div class=\"list-group\" align=\"left\">
            <div class=\"list-group-item\">
            <div class=\"form-group\">
              <label class=\"col-md-4 control-label\" for=\"textinput\">Colaboracion \$</label>
                   {{ form_errors(edit_form.Montomescolaboracion) }}
                   <div class=\"col-md-4\">
                   {{ form_widget(edit_form.Montomescolaboracion) }}
                   </div>
                    </div>
            </div>

            <div class=\"list-group\" align=\"left\">
             <div class=\"list-group-item\">
             <div class=\"form-group\">
               <label class=\"col-md-4 control-label\" for=\"textinput\">Monto \$</label>
                    {{ form_errors(edit_form.Saldocolaboracion) }}
                    <div class=\"col-md-4\">
                    {{ form_widget(edit_form.Saldocolaboracion) }}
                    </div>
                     </div>
             </div>

             <div class=\"list-group\" align=\"left\">
              <div class=\"list-group-item\">
              <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"textinput\">Estado</label>
                     {{ form_errors(edit_form.Estadocolaboracion) }}
                     <div class=\"col-md-4\">
                     {{ form_widget(edit_form.Estadocolaboracion) }}
                     </div>
                      </div>
              </div>

            <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-success btn-sm\" data-dismiss=\"modal\">Cerrar</button>
            {{ form_end(edit_form) }}
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
            
", ":colaboracionmonetaria:Colaboracionedit.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/colaboracionmonetaria/Colaboracionedit.html.twig");
    }
}
