<?php

/* movimiento/Movimientoedit.html.twig */
class __TwigTemplate_71cb8c1a784d376757962c871cd887bf94bc13e89fa6847540306032cebd1e70 extends Twig_Template
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
        $__internal_3b6e9f77a55bf98a4e019ff6dfa85ca2b59806193ba8a3eb2100fe8cd94e443a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6e9f77a55bf98a4e019ff6dfa85ca2b59806193ba8a3eb2100fe8cd94e443a->enter($__internal_3b6e9f77a55bf98a4e019ff6dfa85ca2b59806193ba8a3eb2100fe8cd94e443a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movimiento/Movimientoedit.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"EditMovi";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movimiento"]) ? $context["movimiento"] : $this->getContext($context, "movimiento")), "idmov", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h4>Datos Del Movimiento</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

\t\t\t\t<div class=\"list-group\">
\t\t\t\t<a herf=\"#\" class=\"\"list-group-item active\">
\t\t\t    <!--modal-->
\t\t\t\t</a>

    ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movimiento_edit", array("id" => $this->getAttribute((isset($context["movimiento"]) ? $context["movimiento"] : $this->getContext($context, "movimiento")), "idmov", array()))), "Method" => "POST"));
        echo "

    ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "

    <div class=\"list-group\" align=\"left\">
     <div class=\"list-group-item\">
     <div class=\"form-group\">
       <label class=\"col-md-4 control-label\" for=\"textinput\">Descripcion Del Movimiento</label>
            ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcionmov", array()), 'errors');
        echo "
            <div class=\"col-md-4\">
            ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcionmov", array()), 'widget');
        echo "
            </div>
             </div>
     </div>

     <div class=\"list-group\" align=\"left\">
      <div class=\"list-group-item\">
      <div class=\"form-group\">
        <label class=\"col-md-4 control-label\" for=\"textinput\">Monto Del Movimiento</label>
             ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "monto", array()), 'errors');
        echo "
             <div class=\"col-md-4\">
             ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "monto", array()), 'widget', array("disabled" => "true"));
        echo "
             </div>
              </div>
      </div>

      <div class=\"list-group\" align=\"left\">
       <div class=\"list-group-item\">
       <div class=\"form-group\">
         <label class=\"col-md-4 control-label\" for=\"textinput\">Tipo De Cuenta</label>
              ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idcuenta", array()), 'errors');
        echo "
              <div class=\"col-md-4\">
              ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idcuenta", array()), 'widget');
        echo "
              </div>
               </div>
       </div>

       <div class=\"list-group\" align=\"left\">
        <div class=\"list-group-item\">
        <div class=\"form-group\">
          <label class=\"col-md-4 control-label\" for=\"textinput\">Tipo De Movimiento</label>
               ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idtipomov", array()), 'errors');
        echo "
               <div class=\"col-md-4\">
               ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idtipomov", array()), 'widget');
        echo "
               </div>
                </div>
        </div>

\t\t\t\t<div class=\"list-group\" align=\"left\">
\t\t\t\t <div class=\"list-group-item\">
\t\t\t\t <div class=\"form-group\">
\t\t\t\t\t <label class=\"col-md-4 control-label\" for=\"textinput\">Estado</label>
\t\t\t\t\t\t\t\t";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estadomov", array()), 'errors');
        echo "
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estadomov", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t </div>
\t\t\t\t </div>

\t\t\t\t<div class=\"modal-footer\">
\t      <input type=\"submit\" value=\"Guardar\" class=\"btn btn-primary btn-sm\" />
\t      <button type=\"button\" class=\"btn btn-success btn-sm\" data-dismiss=\"modal\">Cerrar</button>
\t      ";
        // line 78
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
\t      </div>
\t      </div>
\t      </div>
\t      </div>
\t      </div>
";
        
        $__internal_3b6e9f77a55bf98a4e019ff6dfa85ca2b59806193ba8a3eb2100fe8cd94e443a->leave($__internal_3b6e9f77a55bf98a4e019ff6dfa85ca2b59806193ba8a3eb2100fe8cd94e443a_prof);

    }

    public function getTemplateName()
    {
        return "movimiento/Movimientoedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 78,  128 => 70,  123 => 68,  111 => 59,  106 => 57,  94 => 48,  89 => 46,  77 => 37,  72 => 35,  60 => 26,  55 => 24,  46 => 18,  41 => 16,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"EditMovi{{ movimiento.idmov }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">

\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t<h4>Datos Del Movimiento</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">

\t\t\t\t<div class=\"list-group\">
\t\t\t\t<a herf=\"#\" class=\"\"list-group-item active\">
\t\t\t    <!--modal-->
\t\t\t\t</a>

    {{ form_start(edit_form, {'action': path('movimiento_edit', {'id': movimiento.idmov}), 'Method': 'POST' }) }}

    {{ form_errors(edit_form) }}

    <div class=\"list-group\" align=\"left\">
     <div class=\"list-group-item\">
     <div class=\"form-group\">
       <label class=\"col-md-4 control-label\" for=\"textinput\">Descripcion Del Movimiento</label>
            {{ form_errors(edit_form.descripcionmov) }}
            <div class=\"col-md-4\">
            {{ form_widget(edit_form.descripcionmov) }}
            </div>
             </div>
     </div>

     <div class=\"list-group\" align=\"left\">
      <div class=\"list-group-item\">
      <div class=\"form-group\">
        <label class=\"col-md-4 control-label\" for=\"textinput\">Monto Del Movimiento</label>
             {{ form_errors(edit_form.monto) }}
             <div class=\"col-md-4\">
             {{ form_widget(edit_form.monto,{'disabled':'true'}) }}
             </div>
              </div>
      </div>

      <div class=\"list-group\" align=\"left\">
       <div class=\"list-group-item\">
       <div class=\"form-group\">
         <label class=\"col-md-4 control-label\" for=\"textinput\">Tipo De Cuenta</label>
              {{ form_errors(edit_form.idcuenta) }}
              <div class=\"col-md-4\">
              {{ form_widget(edit_form.idcuenta) }}
              </div>
               </div>
       </div>

       <div class=\"list-group\" align=\"left\">
        <div class=\"list-group-item\">
        <div class=\"form-group\">
          <label class=\"col-md-4 control-label\" for=\"textinput\">Tipo De Movimiento</label>
               {{ form_errors(edit_form.idtipomov) }}
               <div class=\"col-md-4\">
               {{ form_widget(edit_form.idtipomov) }}
               </div>
                </div>
        </div>

\t\t\t\t<div class=\"list-group\" align=\"left\">
\t\t\t\t <div class=\"list-group-item\">
\t\t\t\t <div class=\"form-group\">
\t\t\t\t\t <label class=\"col-md-4 control-label\" for=\"textinput\">Estado</label>
\t\t\t\t\t\t\t\t{{ form_errors(edit_form.estadomov) }}
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t{{ form_widget(edit_form.estadomov) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t </div>
\t\t\t\t </div>

\t\t\t\t<div class=\"modal-footer\">
\t      <input type=\"submit\" value=\"Guardar\" class=\"btn btn-primary btn-sm\" />
\t      <button type=\"button\" class=\"btn btn-success btn-sm\" data-dismiss=\"modal\">Cerrar</button>
\t      {{ form_end(edit_form) }}
\t      </div>
\t      </div>
\t      </div>
\t      </div>
\t      </div>
", "movimiento/Movimientoedit.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\app\\Resources\\views\\movimiento\\Movimientoedit.html.twig");
    }
}
