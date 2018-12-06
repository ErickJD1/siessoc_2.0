<?php

/* Form/form_group.form_row.html.twig */
class __TwigTemplate_b17d06aeecc0e38eb927a6ddfe39e0d4701bbaec04b45a7b9bd3f51cf9646281 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ef14e1d169054762d876517d21bec2635b74fbf024d07e7772f6b461a3a1206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef14e1d169054762d876517d21bec2635b74fbf024d07e7772f6b461a3a1206->enter($__internal_9ef14e1d169054762d876517d21bec2635b74fbf024d07e7772f6b461a3a1206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Form/form_group.form_row.html.twig"));

        // line 1
        $this->displayBlock('form_row', $context, $blocks);
        
        $__internal_9ef14e1d169054762d876517d21bec2635b74fbf024d07e7772f6b461a3a1206->leave($__internal_9ef14e1d169054762d876517d21bec2635b74fbf024d07e7772f6b461a3a1206_prof);

    }

    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0da5a88e4f81fd19159e48e1478197953993d3ce8c7ce39eea8ff9eb0d408f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da5a88e4f81fd19159e48e1478197953993d3ce8c7ce39eea8ff9eb0d408f7a->enter($__internal_0da5a88e4f81fd19159e48e1478197953993d3ce8c7ce39eea8ff9eb0d408f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 2
        ob_start();
        // line 3
        echo "    <div class=\"form-group\">
        ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0da5a88e4f81fd19159e48e1478197953993d3ce8c7ce39eea8ff9eb0d408f7a->leave($__internal_0da5a88e4f81fd19159e48e1478197953993d3ce8c7ce39eea8ff9eb0d408f7a_prof);

    }

    public function getTemplateName()
    {
        return "Form/form_group.form_row.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  44 => 5,  40 => 4,  37 => 3,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block form_row %}
{% spaceless %}
    <div class=\"form-group\">
        {{ form_label(form) }}
        {{ form_errors(form) }}
        {{ form_widget(form, { 'attr': {'class': 'form-control'} }) }}
    </div>
{% endspaceless %}
{% endblock form_row %}", "Form/form_group.form_row.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\Form\\form_group.form_row.html.twig");
    }
}
