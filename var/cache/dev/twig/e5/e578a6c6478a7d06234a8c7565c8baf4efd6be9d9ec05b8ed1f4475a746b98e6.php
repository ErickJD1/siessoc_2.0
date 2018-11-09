<?php

/* banco/Bancoedit.html.twig */
class __TwigTemplate_eb5887fc8d737703f47a24534c0df1f4cb93f8916cb5c9d91c3283c608069152 extends Twig_Template
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
        $__internal_cc43170c555b24d8d4945748622dfc1bc022e02efb3b2378894026542944f30f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc43170c555b24d8d4945748622dfc1bc022e02efb3b2378894026542944f30f->enter($__internal_cc43170c555b24d8d4945748622dfc1bc022e02efb3b2378894026542944f30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "banco/Bancoedit.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"EditBanco";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["banco"]) ? $context["banco"] : $this->getContext($context, "banco")), "idbanco", array()), "html", null, true);
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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("banco_edit", array("id" => $this->getAttribute((isset($context["banco"]) ? $context["banco"] : $this->getContext($context, "banco")), "idbanco", array()))), "Method" => "POST"));
        echo "

      ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "

      <div class=\"list-group\" align=\"left\">
       <div class=\"list-group-item\">
       <div class=\"form-group\">
         <label class=\"col-md-4 control-label\" for=\"textinput\">Banco</label>
              ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombanco", array()), 'errors');
        echo "
              <div class=\"col-md-4\">
              ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombanco", array()), 'widget', array("disabled" => "true"));
        echo "
              </div>
               </div>
       </div>

       <div class=\"list-group\" align=\"left\">
        <div class=\"list-group-item\">
        <div class=\"form-group\">
          <label class=\"col-md-4 control-label\" for=\"textinput\">Estado</label>
               ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estadobanco", array()), 'errors');
        echo "
               <div class=\"col-md-4\">
               ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estadobanco", array()), 'widget');
        echo "
               </div>
                </div>
        </div>

        <div class=\"modal-footer\">
        <input type=\"submit\" value=\"Guardar\" class=\"btn btn-primary btn-sm\" />
        <button type=\"button\" class=\"btn btn-success btn-sm\" data-dismiss=\"modal\">Cerrar</button>
        ";
        // line 45
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
        </div>
        </div>
        </div>
        </div>
        </div>
";
        
        $__internal_cc43170c555b24d8d4945748622dfc1bc022e02efb3b2378894026542944f30f->leave($__internal_cc43170c555b24d8d4945748622dfc1bc022e02efb3b2378894026542944f30f_prof);

    }

    public function getTemplateName()
    {
        return "banco/Bancoedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 45,  77 => 37,  72 => 35,  60 => 26,  55 => 24,  46 => 18,  41 => 16,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"EditBanco{{ banco.idbanco }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
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

    {{ form_start(edit_form, {'action': path('banco_edit', {'id': banco.idbanco}), 'Method': 'POST' }) }}

      {{ form_errors(edit_form) }}

      <div class=\"list-group\" align=\"left\">
       <div class=\"list-group-item\">
       <div class=\"form-group\">
         <label class=\"col-md-4 control-label\" for=\"textinput\">Banco</label>
              {{ form_errors(edit_form.nombanco) }}
              <div class=\"col-md-4\">
              {{ form_widget(edit_form.nombanco,{'disabled':'true'}) }}
              </div>
               </div>
       </div>

       <div class=\"list-group\" align=\"left\">
        <div class=\"list-group-item\">
        <div class=\"form-group\">
          <label class=\"col-md-4 control-label\" for=\"textinput\">Estado</label>
               {{ form_errors(edit_form.estadobanco) }}
               <div class=\"col-md-4\">
               {{ form_widget(edit_form.estadobanco) }}
               </div>
                </div>
        </div>

        <div class=\"modal-footer\">
        <input type=\"submit\" value=\"Guardar\" class=\"btn btn-primary btn-sm\" />
        <button type=\"button\" class=\"btn btn-success btn-sm\" data-dismiss=\"modal\">Cerrar</button>
        {{ form_end(edit_form) }}
        </div>
        </div>
        </div>
        </div>
        </div>
", "banco/Bancoedit.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\app\\Resources\\views\\banco\\Bancoedit.html.twig");
    }
}
