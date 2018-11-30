<?php

/* :solicitudbecario:Solicitudbecarioedit.html.twig */
class __TwigTemplate_2c08715fb295322335a2b51c39aeceb6a7c8a2849868ad03911994b77a012deb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":solicitudbecario:Solicitudbecarioedit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f8b595583faa73caad03e0189557bdc5cfbff9bca561652787460bf0ebe7318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f8b595583faa73caad03e0189557bdc5cfbff9bca561652787460bf0ebe7318->enter($__internal_8f8b595583faa73caad03e0189557bdc5cfbff9bca561652787460bf0ebe7318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":solicitudbecario:Solicitudbecarioedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f8b595583faa73caad03e0189557bdc5cfbff9bca561652787460bf0ebe7318->leave($__internal_8f8b595583faa73caad03e0189557bdc5cfbff9bca561652787460bf0ebe7318_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eee33661623262c42558e91eb37bcbb151d78b06375f49a1adab095ef1d1ac69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee33661623262c42558e91eb37bcbb151d78b06375f49a1adab095ef1d1ac69->enter($__internal_eee33661623262c42558e91eb37bcbb151d78b06375f49a1adab095ef1d1ac69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Solicitudbecario edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("solicitudbecario_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_eee33661623262c42558e91eb37bcbb151d78b06375f49a1adab095ef1d1ac69->leave($__internal_eee33661623262c42558e91eb37bcbb151d78b06375f49a1adab095ef1d1ac69_prof);

    }

    public function getTemplateName()
    {
        return ":solicitudbecario:Solicitudbecarioedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Solicitudbecario edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('solicitudbecario_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":solicitudbecario:Solicitudbecarioedit.html.twig", "/home/ubuntu/workspace/app/Resources/views/solicitudbecario/Solicitudbecarioedit.html.twig");
    }
}
