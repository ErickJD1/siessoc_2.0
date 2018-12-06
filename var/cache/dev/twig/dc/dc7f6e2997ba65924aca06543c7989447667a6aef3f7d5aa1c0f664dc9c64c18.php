<?php

/* :solicitudbecario:Solicitudbecarioedit.html.twig */
class __TwigTemplate_4f6007da35386e41a6563dd9f96b9901ff25284f23c7f1b90ca6ab48e1ac0468 extends Twig_Template
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
        $__internal_d515f3907786fbd4534338ee5b50756a13c25aa1e388940ebecfc0992d58ffa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d515f3907786fbd4534338ee5b50756a13c25aa1e388940ebecfc0992d58ffa7->enter($__internal_d515f3907786fbd4534338ee5b50756a13c25aa1e388940ebecfc0992d58ffa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":solicitudbecario:Solicitudbecarioedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d515f3907786fbd4534338ee5b50756a13c25aa1e388940ebecfc0992d58ffa7->leave($__internal_d515f3907786fbd4534338ee5b50756a13c25aa1e388940ebecfc0992d58ffa7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1a5f73196dd9e1f29d0d3ab8f4d501aa535517d62503e1b4572950d5192b067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1a5f73196dd9e1f29d0d3ab8f4d501aa535517d62503e1b4572950d5192b067->enter($__internal_b1a5f73196dd9e1f29d0d3ab8f4d501aa535517d62503e1b4572950d5192b067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b1a5f73196dd9e1f29d0d3ab8f4d501aa535517d62503e1b4572950d5192b067->leave($__internal_b1a5f73196dd9e1f29d0d3ab8f4d501aa535517d62503e1b4572950d5192b067_prof);

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
", ":solicitudbecario:Solicitudbecarioedit.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/solicitudbecario/Solicitudbecarioedit.html.twig");
    }
}
