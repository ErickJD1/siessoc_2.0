<?php

/* :cuenta:Cuentaedit.html.twig */
class __TwigTemplate_03260897634de7ebd216b2627c10d290833e1067a14d3f83e42694cc46cbcc1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":cuenta:Cuentaedit.html.twig", 1);
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
        $__internal_d6c693c1c6cb9c8fa0664a1145f6d5ffe2c61564cf55c1bde61e464ba771d0ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c693c1c6cb9c8fa0664a1145f6d5ffe2c61564cf55c1bde61e464ba771d0ca->enter($__internal_d6c693c1c6cb9c8fa0664a1145f6d5ffe2c61564cf55c1bde61e464ba771d0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cuenta:Cuentaedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6c693c1c6cb9c8fa0664a1145f6d5ffe2c61564cf55c1bde61e464ba771d0ca->leave($__internal_d6c693c1c6cb9c8fa0664a1145f6d5ffe2c61564cf55c1bde61e464ba771d0ca_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_10885be5bd69aca57d3b4153762c3baaed5cffb416fbdafe7b3bfb5f886be850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10885be5bd69aca57d3b4153762c3baaed5cffb416fbdafe7b3bfb5f886be850->enter($__internal_10885be5bd69aca57d3b4153762c3baaed5cffb416fbdafe7b3bfb5f886be850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cuentum edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cuenta_index");
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
        
        $__internal_10885be5bd69aca57d3b4153762c3baaed5cffb416fbdafe7b3bfb5f886be850->leave($__internal_10885be5bd69aca57d3b4153762c3baaed5cffb416fbdafe7b3bfb5f886be850_prof);

    }

    public function getTemplateName()
    {
        return ":cuenta:Cuentaedit.html.twig";
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
    <h1>Cuentum edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('cuenta_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":cuenta:Cuentaedit.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/cuenta/Cuentaedit.html.twig");
    }
}
