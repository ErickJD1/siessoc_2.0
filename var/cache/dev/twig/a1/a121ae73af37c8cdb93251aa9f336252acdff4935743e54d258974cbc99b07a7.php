<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_1077ffb3a6f19bcb548eae20526696ed77f56c4032ffa1b435ec7ab9465ae509 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8473a616cc7cb44262911fa09526979c5510bfc7717b14da92b01ed56178e63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8473a616cc7cb44262911fa09526979c5510bfc7717b14da92b01ed56178e63->enter($__internal_e8473a616cc7cb44262911fa09526979c5510bfc7717b14da92b01ed56178e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8473a616cc7cb44262911fa09526979c5510bfc7717b14da92b01ed56178e63->leave($__internal_e8473a616cc7cb44262911fa09526979c5510bfc7717b14da92b01ed56178e63_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6e632fddc743c8f1d58811541d60b5d34a49d04b2eb9aeb8f93ea5e70701d0d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e632fddc743c8f1d58811541d60b5d34a49d04b2eb9aeb8f93ea5e70701d0d6->enter($__internal_6e632fddc743c8f1d58811541d60b5d34a49d04b2eb9aeb8f93ea5e70701d0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_6e632fddc743c8f1d58811541d60b5d34a49d04b2eb9aeb8f93ea5e70701d0d6->leave($__internal_6e632fddc743c8f1d58811541d60b5d34a49d04b2eb9aeb8f93ea5e70701d0d6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1975da1597c89594c3101ac64978b85fc8c8314830a5cfc18980f3f8b264b784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1975da1597c89594c3101ac64978b85fc8c8314830a5cfc18980f3f8b264b784->enter($__internal_1975da1597c89594c3101ac64978b85fc8c8314830a5cfc18980f3f8b264b784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
    <div  style=\"width:50%; margin-top: 5%; margin-left: 25%\" class=\"panel panel-default\">     
         <h2>Registro Aspirante</h2>
                <hr>
                ";
        // line 10
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 10)->display($context);
        // line 11
        echo "    </div>
";
        
        $__internal_1975da1597c89594c3101ac64978b85fc8c8314830a5cfc18980f3f8b264b784->leave($__internal_1975da1597c89594c3101ac64978b85fc8c8314830a5cfc18980f3f8b264b784_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 11,  62 => 10,  56 => 6,  50 => 5,  41 => 3,  35 => 2,  11 => 1,);
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
{% block stylesheets %}
{{parent()}}
{% endblock %}
{% block body %}
    
    <div  style=\"width:50%; margin-top: 5%; margin-left: 25%\" class=\"panel panel-default\">     
         <h2>Registro Aspirante</h2>
                <hr>
                {% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
    </div>
{% endblock%}
", "FOSUserBundle:Registration:register.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
