<?php

/* :solicitudss:edit.html.twig */
class __TwigTemplate_ddd03209ce6be53c4f9ca0a85f2d2f6d1a8b45237fafeff2d05928f40e545690 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53b6d5708df8bb614b282f64115a11d36b22d9482e4a41af8ea62a804898255b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b6d5708df8bb614b282f64115a11d36b22d9482e4a41af8ea62a804898255b->enter($__internal_53b6d5708df8bb614b282f64115a11d36b22d9482e4a41af8ea62a804898255b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":solicitudss:edit.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_53b6d5708df8bb614b282f64115a11d36b22d9482e4a41af8ea62a804898255b->leave($__internal_53b6d5708df8bb614b282f64115a11d36b22d9482e4a41af8ea62a804898255b_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_51cfc7c09f7302bac2f5f6c3459fad54afb382888830402ff3c8a0d8c4d6d995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51cfc7c09f7302bac2f5f6c3459fad54afb382888830402ff3c8a0d8c4d6d995->enter($__internal_51cfc7c09f7302bac2f5f6c3459fad54afb382888830402ff3c8a0d8c4d6d995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Solicitudss edit</h1>

    ";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("servicio_social_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 15
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 17
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_51cfc7c09f7302bac2f5f6c3459fad54afb382888830402ff3c8a0d8c4d6d995->leave($__internal_51cfc7c09f7302bac2f5f6c3459fad54afb382888830402ff3c8a0d8c4d6d995_prof);

    }

    public function getTemplateName()
    {
        return ":solicitudss:edit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  69 => 17,  64 => 15,  58 => 12,  51 => 8,  46 => 6,  42 => 5,  38 => 3,  26 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block body %}
    <h1>Solicitudss edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('servicio_social_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":solicitudss:edit.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\app/Resources\\views/solicitudss/edit.html.twig");
    }
}
