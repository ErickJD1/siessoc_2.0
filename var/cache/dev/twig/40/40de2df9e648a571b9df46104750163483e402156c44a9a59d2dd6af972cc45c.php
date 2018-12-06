<?php

/* movimientoinventario/new.html.twig */
class __TwigTemplate_06cb01ff72483a67a9d014a5a6dd8427dc7a761a5fb64b05e3409fe57626a301 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "movimientoinventario/new.html.twig", 1);
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
        $__internal_0f209b60112b86a634c10272e6bb7424a0e10d5cfe87237f6851adc8e62081ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f209b60112b86a634c10272e6bb7424a0e10d5cfe87237f6851adc8e62081ce->enter($__internal_0f209b60112b86a634c10272e6bb7424a0e10d5cfe87237f6851adc8e62081ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movimientoinventario/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f209b60112b86a634c10272e6bb7424a0e10d5cfe87237f6851adc8e62081ce->leave($__internal_0f209b60112b86a634c10272e6bb7424a0e10d5cfe87237f6851adc8e62081ce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0dee519912c366d784f1513e7bf495b5d646ec360cc4998d6156ed0062720d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dee519912c366d784f1513e7bf495b5d646ec360cc4998d6156ed0062720d3d->enter($__internal_0dee519912c366d784f1513e7bf495b5d646ec360cc4998d6156ed0062720d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0dee519912c366d784f1513e7bf495b5d646ec360cc4998d6156ed0062720d3d->leave($__internal_0dee519912c366d784f1513e7bf495b5d646ec360cc4998d6156ed0062720d3d_prof);

    }

    public function getTemplateName()
    {
        return "movimientoinventario/new.html.twig";
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
", "movimientoinventario/new.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\movimientoinventario\\new.html.twig");
    }
}
