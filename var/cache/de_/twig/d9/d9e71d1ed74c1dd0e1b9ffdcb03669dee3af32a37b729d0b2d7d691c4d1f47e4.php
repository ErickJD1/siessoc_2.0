<?php

/* solicitudss/edit.html.twig */
class __TwigTemplate_26fd8daee1273ce415867b51cddee0132455111f6ebb17dcbe13da7ea3c6bdf4 extends Twig_Template
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
        $__internal_9da381fc8bf14aa4233a5d08d9f205af8cc278a49b477a2cec65209b0df141db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9da381fc8bf14aa4233a5d08d9f205af8cc278a49b477a2cec65209b0df141db->enter($__internal_9da381fc8bf14aa4233a5d08d9f205af8cc278a49b477a2cec65209b0df141db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "solicitudss/edit.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_9da381fc8bf14aa4233a5d08d9f205af8cc278a49b477a2cec65209b0df141db->leave($__internal_9da381fc8bf14aa4233a5d08d9f205af8cc278a49b477a2cec65209b0df141db_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_b2dad24091c9cde12b42624948b8ce2b238b392d3a2f9b8fb65224a4b4b2e0bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2dad24091c9cde12b42624948b8ce2b238b392d3a2f9b8fb65224a4b4b2e0bb->enter($__internal_b2dad24091c9cde12b42624948b8ce2b238b392d3a2f9b8fb65224a4b4b2e0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b2dad24091c9cde12b42624948b8ce2b238b392d3a2f9b8fb65224a4b4b2e0bb->leave($__internal_b2dad24091c9cde12b42624948b8ce2b238b392d3a2f9b8fb65224a4b4b2e0bb_prof);

    }

    public function getTemplateName()
    {
        return "solicitudss/edit.html.twig";
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
", "solicitudss/edit.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\app\\Resources\\views\\solicitudss\\edit.html.twig");
    }
}
