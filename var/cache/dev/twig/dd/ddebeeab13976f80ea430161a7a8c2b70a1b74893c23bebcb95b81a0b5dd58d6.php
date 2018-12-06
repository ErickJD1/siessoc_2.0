<?php

/* :serviciosocial:edit.html.twig */
class __TwigTemplate_d520f588b50a4bdf548ad44cc610af862301df0aaf66a7f13b091b15841d1622 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":serviciosocial:edit.html.twig", 1);
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
        $__internal_87a34f86219723a21fc111de934a7992c4e21eef935dee9cef96ee3127efb971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a34f86219723a21fc111de934a7992c4e21eef935dee9cef96ee3127efb971->enter($__internal_87a34f86219723a21fc111de934a7992c4e21eef935dee9cef96ee3127efb971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":serviciosocial:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87a34f86219723a21fc111de934a7992c4e21eef935dee9cef96ee3127efb971->leave($__internal_87a34f86219723a21fc111de934a7992c4e21eef935dee9cef96ee3127efb971_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_b5f412b89af9a4bb6e50ebd4fe5f56d7c53f5e56c2c3460553be7c46d44399bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f412b89af9a4bb6e50ebd4fe5f56d7c53f5e56c2c3460553be7c46d44399bb->enter($__internal_b5f412b89af9a4bb6e50ebd4fe5f56d7c53f5e56c2c3460553be7c46d44399bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Servicio Social| ";
        
        $__internal_b5f412b89af9a4bb6e50ebd4fe5f56d7c53f5e56c2c3460553be7c46d44399bb->leave($__internal_b5f412b89af9a4bb6e50ebd4fe5f56d7c53f5e56c2c3460553be7c46d44399bb_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_7f7a65861fc85a5eec678e6f87d9639bb0a610d90236eda811d32e3af822dac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f7a65861fc85a5eec678e6f87d9639bb0a610d90236eda811d32e3af822dac6->enter($__internal_7f7a65861fc85a5eec678e6f87d9639bb0a610d90236eda811d32e3af822dac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Edit";
        
        $__internal_7f7a65861fc85a5eec678e6f87d9639bb0a610d90236eda811d32e3af822dac6->leave($__internal_7f7a65861fc85a5eec678e6f87d9639bb0a610d90236eda811d32e3af822dac6_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c9fc287890be6533b96899628e7288ae96fe66675d2ee26bdb46958573104aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9fc287890be6533b96899628e7288ae96fe66675d2ee26bdb46958573104aa7->enter($__internal_c9fc287890be6533b96899628e7288ae96fe66675d2ee26bdb46958573104aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_c9fc287890be6533b96899628e7288ae96fe66675d2ee26bdb46958573104aa7->leave($__internal_c9fc287890be6533b96899628e7288ae96fe66675d2ee26bdb46958573104aa7_prof);

    }

    public function getTemplateName()
    {
        return ":serviciosocial:edit.html.twig";
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
", ":serviciosocial:edit.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/serviciosocial/edit.html.twig");
    }
}
