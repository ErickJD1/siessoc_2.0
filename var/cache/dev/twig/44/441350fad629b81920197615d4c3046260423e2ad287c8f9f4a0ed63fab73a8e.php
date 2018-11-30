<?php

/* :Form:form_group.form_row.html.twig */
class __TwigTemplate_605e05e5bbd0d13139abf41b761dea8150de4df193e3009f8edb77883a4683a9 extends Twig_Template
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
        $__internal_5c01aed6c4c859da811b9030c786dc2b52d816a52e973aabb68100d4d2ea289c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c01aed6c4c859da811b9030c786dc2b52d816a52e973aabb68100d4d2ea289c->enter($__internal_5c01aed6c4c859da811b9030c786dc2b52d816a52e973aabb68100d4d2ea289c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Form:form_group.form_row.html.twig"));

        // line 1
        $this->displayBlock('form_row', $context, $blocks);
        
        $__internal_5c01aed6c4c859da811b9030c786dc2b52d816a52e973aabb68100d4d2ea289c->leave($__internal_5c01aed6c4c859da811b9030c786dc2b52d816a52e973aabb68100d4d2ea289c_prof);

    }

    public function block_form_row($context, array $blocks = array())
    {
        $__internal_8ba1f70f7ff0f44e9393d52c93013050479cee464ad6b3106006ecbe5a4181ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba1f70f7ff0f44e9393d52c93013050479cee464ad6b3106006ecbe5a4181ac->enter($__internal_8ba1f70f7ff0f44e9393d52c93013050479cee464ad6b3106006ecbe5a4181ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_8ba1f70f7ff0f44e9393d52c93013050479cee464ad6b3106006ecbe5a4181ac->leave($__internal_8ba1f70f7ff0f44e9393d52c93013050479cee464ad6b3106006ecbe5a4181ac_prof);

    }

    public function getTemplateName()
    {
        return ":Form:form_group.form_row.html.twig";
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
{% endblock form_row %}", ":Form:form_group.form_row.html.twig", "/home/ubuntu/workspace/app/Resources/views/Form/form_group.form_row.html.twig");
    }
}
