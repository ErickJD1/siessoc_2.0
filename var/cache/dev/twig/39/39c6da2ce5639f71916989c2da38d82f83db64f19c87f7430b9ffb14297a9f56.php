<?php

/* serviciosocial/edit.html.twig */
class __TwigTemplate_3c8782f9b9ebfd78be77759cc08c3dfda520ed86f9760da1fe5c15ff55a93b18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "serviciosocial/edit.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29159f51098be48c46d1e49d732cc4db43789446657c53079e7167d30643ddeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29159f51098be48c46d1e49d732cc4db43789446657c53079e7167d30643ddeb->enter($__internal_29159f51098be48c46d1e49d732cc4db43789446657c53079e7167d30643ddeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "serviciosocial/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29159f51098be48c46d1e49d732cc4db43789446657c53079e7167d30643ddeb->leave($__internal_29159f51098be48c46d1e49d732cc4db43789446657c53079e7167d30643ddeb_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_ef32d1033d4b886e0876907a15d06e6083aaadd7d4c6d73c838ef111506eb2c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef32d1033d4b886e0876907a15d06e6083aaadd7d4c6d73c838ef111506eb2c0->enter($__internal_ef32d1033d4b886e0876907a15d06e6083aaadd7d4c6d73c838ef111506eb2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Servicio Social| ";
        
        $__internal_ef32d1033d4b886e0876907a15d06e6083aaadd7d4c6d73c838ef111506eb2c0->leave($__internal_ef32d1033d4b886e0876907a15d06e6083aaadd7d4c6d73c838ef111506eb2c0_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_251ddec309c2e744971c0bbd093384a31c6bf31c9f1b45661d08b0286e118e94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_251ddec309c2e744971c0bbd093384a31c6bf31c9f1b45661d08b0286e118e94->enter($__internal_251ddec309c2e744971c0bbd093384a31c6bf31c9f1b45661d08b0286e118e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Edit";
        
        $__internal_251ddec309c2e744971c0bbd093384a31c6bf31c9f1b45661d08b0286e118e94->leave($__internal_251ddec309c2e744971c0bbd093384a31c6bf31c9f1b45661d08b0286e118e94_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_63fc1cdf1e265bb8aec039e3c0a961789c1e3c6b21387a0ccbcba623e191a05a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63fc1cdf1e265bb8aec039e3c0a961789c1e3c6b21387a0ccbcba623e191a05a->enter($__internal_63fc1cdf1e265bb8aec039e3c0a961789c1e3c6b21387a0ccbcba623e191a05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "    <h1>Serviciosocial edit</h1>

    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serviciosocial_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_63fc1cdf1e265bb8aec039e3c0a961789c1e3c6b21387a0ccbcba623e191a05a->leave($__internal_63fc1cdf1e265bb8aec039e3c0a961789c1e3c6b21387a0ccbcba623e191a05a_prof);

    }

    public function getTemplateName()
    {
        return "serviciosocial/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 21,  92 => 19,  86 => 16,  79 => 12,  74 => 10,  70 => 9,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout/base-layout.html.twig\" %}

{% block page_title %} Servicio Social| {% endblock %}
{% block page_subtitle %}Edit{% endblock %}

{% block page_content %}
    <h1>Serviciosocial edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('serviciosocial_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "serviciosocial/edit.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\serviciosocial\\edit.html.twig");
    }
}
