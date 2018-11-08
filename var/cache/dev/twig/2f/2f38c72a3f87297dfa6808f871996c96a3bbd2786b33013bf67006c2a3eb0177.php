<?php

/* default/dashboard.html.twig */
class __TwigTemplate_f1ada3876aee650350d8e7aeed7ebcf18a6f8aab93ddafb169d512288f78c6c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "default/dashboard.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6598edeef38bb54a01e91a943b38e471f50cc564314b88a2e8da53c26a6369d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6598edeef38bb54a01e91a943b38e471f50cc564314b88a2e8da53c26a6369d->enter($__internal_c6598edeef38bb54a01e91a943b38e471f50cc564314b88a2e8da53c26a6369d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6598edeef38bb54a01e91a943b38e471f50cc564314b88a2e8da53c26a6369d->leave($__internal_c6598edeef38bb54a01e91a943b38e471f50cc564314b88a2e8da53c26a6369d_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_a08085c06f29aa8eb3163b863a263534cedc8ae69f06de9610d32fae9b6b9e0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a08085c06f29aa8eb3163b863a263534cedc8ae69f06de9610d32fae9b6b9e0d->enter($__internal_a08085c06f29aa8eb3163b863a263534cedc8ae69f06de9610d32fae9b6b9e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_a08085c06f29aa8eb3163b863a263534cedc8ae69f06de9610d32fae9b6b9e0d->leave($__internal_a08085c06f29aa8eb3163b863a263534cedc8ae69f06de9610d32fae9b6b9e0d_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_a0a0300fd528fc5ed6fcf0af00742d72f509ebac098d9dcd8c696061664f18cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a0300fd528fc5ed6fcf0af00742d72f509ebac098d9dcd8c696061664f18cb->enter($__internal_a0a0300fd528fc5ed6fcf0af00742d72f509ebac098d9dcd8c696061664f18cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "\t
";
        
        $__internal_a0a0300fd528fc5ed6fcf0af00742d72f509ebac098d9dcd8c696061664f18cb->leave($__internal_a0a0300fd528fc5ed6fcf0af00742d72f509ebac098d9dcd8c696061664f18cb_prof);

    }

    public function getTemplateName()
    {
        return "default/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout/base-layout.html.twig' %}
{% block page_title %}Dashboard{% endblock %}
{% block page_content %}
\t
{% endblock %}", "default/dashboard.html.twig", "C:\\xampp\\htdocs\\siessoc_2.0\\app\\Resources\\views\\default\\dashboard.html.twig");
    }
}
