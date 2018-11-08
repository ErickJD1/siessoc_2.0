<?php

/* default/dashboard.html.twig */
class __TwigTemplate_9aa3d7e2ccbcb4b73e44478d8480004dd2bc48eb3c1470c14b95c894ccf06822 extends Twig_Template
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
        $__internal_7222a0aa68e40e2db69e63480723441e36f4927e6645dd89c9c730627db176c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7222a0aa68e40e2db69e63480723441e36f4927e6645dd89c9c730627db176c3->enter($__internal_7222a0aa68e40e2db69e63480723441e36f4927e6645dd89c9c730627db176c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7222a0aa68e40e2db69e63480723441e36f4927e6645dd89c9c730627db176c3->leave($__internal_7222a0aa68e40e2db69e63480723441e36f4927e6645dd89c9c730627db176c3_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_f2201fbaa16041d1a9b1239c19696c8edc9afb05e3f27fb32c209b3a98ff311c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2201fbaa16041d1a9b1239c19696c8edc9afb05e3f27fb32c209b3a98ff311c->enter($__internal_f2201fbaa16041d1a9b1239c19696c8edc9afb05e3f27fb32c209b3a98ff311c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_f2201fbaa16041d1a9b1239c19696c8edc9afb05e3f27fb32c209b3a98ff311c->leave($__internal_f2201fbaa16041d1a9b1239c19696c8edc9afb05e3f27fb32c209b3a98ff311c_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ea5541ec976e8a7588a158b3e634337e9549c468e7317741c243cfbbb7b86e14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea5541ec976e8a7588a158b3e634337e9549c468e7317741c243cfbbb7b86e14->enter($__internal_ea5541ec976e8a7588a158b3e634337e9549c468e7317741c243cfbbb7b86e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "\t
";
        
        $__internal_ea5541ec976e8a7588a158b3e634337e9549c468e7317741c243cfbbb7b86e14->leave($__internal_ea5541ec976e8a7588a158b3e634337e9549c468e7317741c243cfbbb7b86e14_prof);

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
