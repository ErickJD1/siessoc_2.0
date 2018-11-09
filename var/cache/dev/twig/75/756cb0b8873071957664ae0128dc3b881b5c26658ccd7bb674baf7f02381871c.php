<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_224b7fc58b233e05a9d4e59f755735e7b378bc1f6df559c0d4d52c4b9aacf064 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_c59e8a4933a7ddd818ac0c35987422a1c353046a8b5e286a79ffd47b872a4f25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c59e8a4933a7ddd818ac0c35987422a1c353046a8b5e286a79ffd47b872a4f25->enter($__internal_c59e8a4933a7ddd818ac0c35987422a1c353046a8b5e286a79ffd47b872a4f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c59e8a4933a7ddd818ac0c35987422a1c353046a8b5e286a79ffd47b872a4f25->leave($__internal_c59e8a4933a7ddd818ac0c35987422a1c353046a8b5e286a79ffd47b872a4f25_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ddee8312c2529fb8593498be0e23b8378816087811ee1af9fefe98625abb929b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddee8312c2529fb8593498be0e23b8378816087811ee1af9fefe98625abb929b->enter($__internal_ddee8312c2529fb8593498be0e23b8378816087811ee1af9fefe98625abb929b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_ddee8312c2529fb8593498be0e23b8378816087811ee1af9fefe98625abb929b->leave($__internal_ddee8312c2529fb8593498be0e23b8378816087811ee1af9fefe98625abb929b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed5e5b24a895d8744e775b4e9880ec0fd4b22d1069de898689b29d5f1ac96a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed5e5b24a895d8744e775b4e9880ec0fd4b22d1069de898689b29d5f1ac96a24->enter($__internal_ed5e5b24a895d8744e775b4e9880ec0fd4b22d1069de898689b29d5f1ac96a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
    <div  style=\"width:50%; margin-top: 5%; margin-left: 25%\" class=\"panel panel-default\">     
         <h2>Aspirante a Becario</h2>
                <hr>
                ";
        // line 10
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 10)->display($context);
        // line 11
        echo "    </div>
";
        
        $__internal_ed5e5b24a895d8744e775b4e9880ec0fd4b22d1069de898689b29d5f1ac96a24->leave($__internal_ed5e5b24a895d8744e775b4e9880ec0fd4b22d1069de898689b29d5f1ac96a24_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
         <h2>Aspirante a Becario</h2>
                <hr>
                {% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
    </div>
{% endblock%}
", "@FOSUser/Registration/register.html.twig", "C:\\xampp\\htdocs\\siessoc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
