<?php

/* :movimientoinventario:new.html.twig */
class __TwigTemplate_2e66ca9b489be3f25a967c6b171f3ba366ceb8482a20408a4ade760955c98b6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":movimientoinventario:new.html.twig", 1);
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
        $__internal_dbf53375dfcf8d08a33abca48501560d49d8a1b1e6a8ac5bc84de50e82eb4024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbf53375dfcf8d08a33abca48501560d49d8a1b1e6a8ac5bc84de50e82eb4024->enter($__internal_dbf53375dfcf8d08a33abca48501560d49d8a1b1e6a8ac5bc84de50e82eb4024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":movimientoinventario:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbf53375dfcf8d08a33abca48501560d49d8a1b1e6a8ac5bc84de50e82eb4024->leave($__internal_dbf53375dfcf8d08a33abca48501560d49d8a1b1e6a8ac5bc84de50e82eb4024_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_349c3f410786aef820d95434279fc6521254180fe21a544a45896b73f20f7923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349c3f410786aef820d95434279fc6521254180fe21a544a45896b73f20f7923->enter($__internal_349c3f410786aef820d95434279fc6521254180fe21a544a45896b73f20f7923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Movimientoinventario creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movimientoinventario_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_349c3f410786aef820d95434279fc6521254180fe21a544a45896b73f20f7923->leave($__internal_349c3f410786aef820d95434279fc6521254180fe21a544a45896b73f20f7923_prof);

    }

    public function getTemplateName()
    {
        return ":movimientoinventario:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Movimientoinventario creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('movimientoinventario_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":movimientoinventario:new.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/movimientoinventario/new.html.twig");
    }
}
