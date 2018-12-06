<?php

/* proyectoserviciosocial/edit.html.twig */
class __TwigTemplate_816e29e58f51646960ec29f9faf35873cf4a3628c40648f97d3bc58a77b05d61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "proyectoserviciosocial/edit.html.twig", 1);
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
        $__internal_452134634502fb8cea22ce64432d6dde5e5fcca1c7d4814fc5bd03e4c77f403f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_452134634502fb8cea22ce64432d6dde5e5fcca1c7d4814fc5bd03e4c77f403f->enter($__internal_452134634502fb8cea22ce64432d6dde5e5fcca1c7d4814fc5bd03e4c77f403f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "proyectoserviciosocial/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_452134634502fb8cea22ce64432d6dde5e5fcca1c7d4814fc5bd03e4c77f403f->leave($__internal_452134634502fb8cea22ce64432d6dde5e5fcca1c7d4814fc5bd03e4c77f403f_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_42897ebefa28d194d2f2f720b5cc5ee3ecfe08606a1c055ed1c7c84ed3a759ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42897ebefa28d194d2f2f720b5cc5ee3ecfe08606a1c055ed1c7c84ed3a759ec->enter($__internal_42897ebefa28d194d2f2f720b5cc5ee3ecfe08606a1c055ed1c7c84ed3a759ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Proyeto Servicio Social| ";
        
        $__internal_42897ebefa28d194d2f2f720b5cc5ee3ecfe08606a1c055ed1c7c84ed3a759ec->leave($__internal_42897ebefa28d194d2f2f720b5cc5ee3ecfe08606a1c055ed1c7c84ed3a759ec_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_dc15846f8a3c2d96cf40b35fe95a062cde66734201a5e31723a8407b2857e6f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc15846f8a3c2d96cf40b35fe95a062cde66734201a5e31723a8407b2857e6f6->enter($__internal_dc15846f8a3c2d96cf40b35fe95a062cde66734201a5e31723a8407b2857e6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Edit ";
        
        $__internal_dc15846f8a3c2d96cf40b35fe95a062cde66734201a5e31723a8407b2857e6f6->leave($__internal_dc15846f8a3c2d96cf40b35fe95a062cde66734201a5e31723a8407b2857e6f6_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_61a9b348795bcbe4df972699a19cee5fe8c5a0d42dcf5090e30cd32574bb2181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61a9b348795bcbe4df972699a19cee5fe8c5a0d42dcf5090e30cd32574bb2181->enter($__internal_61a9b348795bcbe4df972699a19cee5fe8c5a0d42dcf5090e30cd32574bb2181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "    <h1>Proyectoserviciosocial edit</h1>

    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
    <a href=\"edit.html.twig\"></a>
        ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proyectoserviciosocial_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 22
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_61a9b348795bcbe4df972699a19cee5fe8c5a0d42dcf5090e30cd32574bb2181->leave($__internal_61a9b348795bcbe4df972699a19cee5fe8c5a0d42dcf5090e30cd32574bb2181_prof);

    }

    public function getTemplateName()
    {
        return "proyectoserviciosocial/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 22,  93 => 20,  87 => 17,  80 => 13,  75 => 11,  70 => 9,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block page_title %} Proyeto Servicio Social| {% endblock %}
{% block page_subtitle %}Edit {% endblock %}

{% block page_content %}
    <h1>Proyectoserviciosocial edit</h1>

    {{ form_start(edit_form) }}
    <a href=\"edit.html.twig\"></a>
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('proyectoserviciosocial_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "proyectoserviciosocial/edit.html.twig", "C:\\xampp\\htdocs\\siessoc\\app\\Resources\\views\\proyectoserviciosocial\\edit.html.twig");
    }
}
