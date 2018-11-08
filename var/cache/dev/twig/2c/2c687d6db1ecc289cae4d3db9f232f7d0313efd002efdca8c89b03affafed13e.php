<?php

/* :default:dashboard.html.twig */
class __TwigTemplate_1f8f3ba32e9b1287da09188dce49b1dacecd57232f4bfb4991066ebc4ec05cfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", ":default:dashboard.html.twig", 1);
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
        $__internal_7d579e93536180bc090b01d3c158b44b7608b6b27b22f81d6c5e45b2dc84ed74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d579e93536180bc090b01d3c158b44b7608b6b27b22f81d6c5e45b2dc84ed74->enter($__internal_7d579e93536180bc090b01d3c158b44b7608b6b27b22f81d6c5e45b2dc84ed74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d579e93536180bc090b01d3c158b44b7608b6b27b22f81d6c5e45b2dc84ed74->leave($__internal_7d579e93536180bc090b01d3c158b44b7608b6b27b22f81d6c5e45b2dc84ed74_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_a444ac932509f3f34556cefed00042c890c27bcae15d5c1f151f12d5f17c2c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a444ac932509f3f34556cefed00042c890c27bcae15d5c1f151f12d5f17c2c11->enter($__internal_a444ac932509f3f34556cefed00042c890c27bcae15d5c1f151f12d5f17c2c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_a444ac932509f3f34556cefed00042c890c27bcae15d5c1f151f12d5f17c2c11->leave($__internal_a444ac932509f3f34556cefed00042c890c27bcae15d5c1f151f12d5f17c2c11_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4b19d4fe72e8dda808e9b6651f1adb89107f779c9b2d9d4b3d2296142df894d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b19d4fe72e8dda808e9b6651f1adb89107f779c9b2d9d4b3d2296142df894d9->enter($__internal_4b19d4fe72e8dda808e9b6651f1adb89107f779c9b2d9d4b3d2296142df894d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "\t
";
        
        $__internal_4b19d4fe72e8dda808e9b6651f1adb89107f779c9b2d9d4b3d2296142df894d9->leave($__internal_4b19d4fe72e8dda808e9b6651f1adb89107f779c9b2d9d4b3d2296142df894d9_prof);

    }

    public function getTemplateName()
    {
        return ":default:dashboard.html.twig";
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
{% endblock %}", ":default:dashboard.html.twig", "C:\\xampp\\htdocs\\siessoc\\app/Resources\\views/default/dashboard.html.twig");
    }
}
